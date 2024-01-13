unit untServicesAdd;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  TfrmServicesAdd = class(TForm)
    edtTipe: TEdit;
    edtPerMonth: TEdit;
    btnServicesAdd: TButton;
    Label1: TLabel;
    Label2: TLabel;
    procedure btnServicesAddClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  frmServicesAdd: TfrmServicesAdd;

implementation

{$R *.dfm}

uses untServices;

procedure TfrmServicesAdd.btnServicesAddClick(Sender: TObject);
begin
  with frmServices.qrServices do
  begin
    Close;
    SQL.Clear;
    SQL.Add('INSERT INTO services (tipe, per_month)');
    SQL.Add('VALUES (:tipe, :per_month)');
    Params.ParamByName('tipe').Value := edtTipe.Text;
    Params.ParamByName('per_month').Value := edtPerMonth.Text;
    try
      ExecSQL;
      MessageBox(Handle, 'Услуга успешно добавлена', 'Сообщение', MB_ICONINFORMATION);
      edtTipe.Clear;
      edtPerMonth.Clear;
    except
      MessageBox(Handle, 'Ошибка добавления услуги', 'Ошибка', MB_ICONERROR);
    end;
  end;
  with frmServices do
  begin
    dbgServices.DataSource.DataSet.Refresh;
    edtTipe.SetFocus;
  end;
end;

end.
