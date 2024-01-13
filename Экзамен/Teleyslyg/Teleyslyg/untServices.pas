unit untServices;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls, Data.DB, Vcl.Grids, Vcl.DBGrids,
  FireDAC.Stan.Intf, FireDAC.Stan.Option, FireDAC.Stan.Param, FireDAC.Stan.Error,
  FireDAC.DatS, FireDAC.Phys.Intf, FireDAC.DApt.Intf, FireDAC.Stan.Async, FireDAC.DApt,
  FireDAC.Comp.DataSet, FireDAC.Comp.Client;

type
  TfrmServices = class(TForm)
    Button1: TButton;
    Button2: TButton;
    dbgServices: TDBGrid;
    dsServices: TDataSource;
    tblServices: TFDTable;
    qrServices: TFDQuery;
    procedure dsServicesDataChange(Sender: TObject; Field: TField);
    procedure Button2Click(Sender: TObject);
    procedure Button1Click(Sender: TObject);
  private
    { Private declarations }
    procedure ServicesDelete(Index: LongInt);
  public
    { Public declarations }
  end;

var
  frmServices: TfrmServices;
  Idx: LongInt;

implementation

{$R *.dfm}

uses untSettings, untServicesAdd;

procedure TfrmServices.Button1Click(Sender: TObject);
begin
  frmServicesAdd.ShowModal;
end;

procedure TfrmServices.Button2Click(Sender: TObject);
var
  Ans: Byte;
begin
  Ans := MessageBox(Handle, 'Удалить услугу?', 'Сообщение',
    MB_ICONQUESTION + MB_YESNO);
  if Ans = mrYes then
  begin
    ServicesDelete(Idx);
    dbgServices.DataSource.DataSet.Refresh;
  end;
end;

procedure TfrmServices.dsServicesDataChange(Sender: TObject; Field: TField);
begin
  Idx := dbgServices.DataSource.DataSet.FieldByName('idservices').AsInteger;
end;

procedure TfrmServices.ServicesDelete(Index: LongInt);
begin
  with qrServices do
  begin
    Close;
    SQL.Clear;
    SQL.Add('DELETE FROM Services WHERE idServices = :idx');
    Params[0].Value := Idx;
    try
      ExecSQL;
      MessageBox(Handle, 'Услуга удалена', 'Сообщение', MB_ICONINFORMATION);
    except
      MessageBox(Handle, 'Ошибка удаления услуги', 'Ошибка', MB_ICONERROR);
    end;
  end;
end;

end.
