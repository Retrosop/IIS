unit untSettings;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants,
  System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls, IniFiles, FireDAC.Stan.Intf,
  FireDAC.Stan.Option, FireDAC.Stan.Error, FireDAC.UI.Intf, FireDAC.Phys.Intf,
  FireDAC.Stan.Def, FireDAC.Stan.Pool, FireDAC.Stan.Async, FireDAC.Phys,
  FireDAC.VCLUI.Wait, Data.DB, FireDAC.Phys.MySQL, FireDAC.Phys.MySQLDef,
  FireDAC.Comp.Client, FireDAC.Comp.UI;

type
  TfrmSettings = class(TForm)
    GroupBox1: TGroupBox;
    Label1: TLabel;
    edtAddr: TEdit;
    edtUser: TEdit;
    Label2: TLabel;
    edtPswd: TEdit;
    Label3: TLabel;
    edtDBName: TEdit;
    Label4: TLabel;
    btnSave: TButton;
    btnClose: TButton;
    FDConnect: TFDConnection;
    edtCharSet: TEdit;
    Label5: TLabel;
    FDGUIxWaitCursor1: TFDGUIxWaitCursor;
    procedure btnCloseClick(Sender: TObject);
    procedure FormCreate(Sender: TObject);
    procedure btnSaveClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
    function ConnectDataBase: boolean;
  end;

var
  frmSettings: TfrmSettings;
  Ini: TIniFile;

implementation

{$R *.dfm}

uses untGeneral;

procedure TfrmSettings.btnCloseClick(Sender: TObject);
begin
  Close;
end;

procedure TfrmSettings.btnSaveClick(Sender: TObject);
begin
  Ini := TIniFile.Create(ExtractFilePath(Application.ExeName) +
    'DBConnect.ini');
  Ini.WriteString('DBConnect', 'Address', edtAddr.Text);
  Ini.WriteString('DBConnect', 'UserName', edtUser.Text);
  Ini.WriteString('DBConnect', 'Pswd', edtPswd.Text);
  Ini.WriteString('DBConnect', 'DBName', edtDBName.Text);
  Ini.WriteString('DBConnect', 'CharSet', edtCharSet.Text);
  Ini.Free;
  MessageBox(Handle, 'Настройки сохранены', 'Сообщение', MB_ICONINFORMATION);
end;

function TfrmSettings.ConnectDataBase: boolean;
begin
  FDConnect.Params.Values['Database'] := frmSettings.edtDBName.Text;
  FDConnect.Params.Values['User_Name'] := frmSettings.edtUser.Text;
  FDConnect.Params.Values['Password'] := frmSettings.edtPswd.Text;
  FDConnect.Params.Values['Server'] := frmSettings.edtAddr.Text;
  FDConnect.Params.Values['CharacterSet'] := frmSettings.edtCharSet.Text;

  try
    FDConnect.Open;
    Result := True;
  except
    Result := False;
  end;
end;

procedure TfrmSettings.FormCreate(Sender: TObject);
begin
  Ini := TIniFile.Create(ExtractFilePath(Application.ExeName) +
    'DBConnect.ini');
  edtAddr.Text := Ini.ReadString('DBConnect', 'Address', '');
  edtUser.Text := Ini.ReadString('DBConnect', 'UserName', '');
  edtPswd.Text := Ini.ReadString('DBConnect', 'Pswd', '');
  edtDBName.Text := Ini.ReadString('DBConnect', 'DBName', '');
  edtCharSet.Text := Ini.ReadString('DBConnect', 'CharSet', '');
  Ini.Free;
  frmGeneral.btnDBConnectClick(Nil);
end;

end.
