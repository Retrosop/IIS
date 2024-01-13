unit untGeneral;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants,
  System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.Menus, Vcl.ComCtrls, Vcl.StdCtrls;

type
  TfrmGeneral = class(TForm)
    MMenu: TMainMenu;
    N1: TMenuItem;
    N2: TMenuItem;
    N3: TMenuItem;
    btnClose: TMenuItem;
    btnAbout: TMenuItem;
    SBar: TStatusBar;
    btnDBConnect: TMenuItem;
    btnEmployee: TButton;
    btnServices: TButton;
    procedure btnAboutClick(Sender: TObject);
    procedure btnCloseClick(Sender: TObject);
    procedure N2Click(Sender: TObject);
    procedure btnDBConnectClick(Sender: TObject);
    procedure btnEmployeeClick(Sender: TObject);
    procedure btnServicesClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  frmGeneral: TfrmGeneral;

implementation

{$R *.dfm}

uses untSettings, untEmloyee, untServices;

procedure TfrmGeneral.btnAboutClick(Sender: TObject);
begin
  MessageBox(Handle, 'Приложение разработано в Delphi 11.3', 'О программе',
    MB_ICONINFORMATION);
end;

procedure TfrmGeneral.btnCloseClick(Sender: TObject);
begin
  Application.Terminate;
end;

procedure TfrmGeneral.btnDBConnectClick(Sender: TObject);
begin
  if frmSettings.ConnectDataBase then
    SBar.Panels[0].Text := 'Подключение успешно'
  else
    SBar.Panels[0].Text := 'Ошибка подключения';
end;

procedure TfrmGeneral.btnEmployeeClick(Sender: TObject);
begin
  with frmEmployee do
  begin
    tblEmployee.Open;
    ShowModal;
  end;
end;

procedure TfrmGeneral.btnServicesClick(Sender: TObject);
begin
  with frmServices do
  begin
    tblServices.Open;
    ShowModal;
  end;
end;

procedure TfrmGeneral.N2Click(Sender: TObject);
begin
  frmSettings.ShowModal;
end;

end.
