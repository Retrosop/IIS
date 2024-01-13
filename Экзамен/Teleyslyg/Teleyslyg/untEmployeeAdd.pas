unit untEmployeeAdd;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls;

type
  TfrmEmployeeAdd = class(TForm)
    Label1: TLabel;
    Label2: TLabel;
    Label3: TLabel;
    Label4: TLabel;
    edtSurName: TEdit;
    edtName: TEdit;
    edtPatrName: TEdit;
    edtPosition: TEdit;
    btnAdd: TButton;
    procedure btnAddClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  frmEmployeeAdd: TfrmEmployeeAdd;

implementation

{$R *.dfm}

uses untEmloyee;

procedure TfrmEmployeeAdd.btnAddClick(Sender: TObject);
begin
  with frmEmployee.qrEmployee do
  begin
    Close;
    SQL.Clear;
    SQL.Add('INSERT INTO employee (surname, name, patr_name, position)');
    SQL.Add('VALUES (:surname, :name, :patr_name, :position)');
    Params.ParamByName('surname').Value := edtSurName.Text;
    Params.ParamByName('name').Value := edtName.Text;
    Params.ParamByName('patr_name').Value := edtPatrName.Text;
    Params.ParamByName('position').Value := edtPosition.Text;
    try
      ExecSQL;
      MessageBox(Handle, 'Сотрудник успешно добавлен', 'Сообщение', MB_ICONINFORMATION);
      edtSurName.Clear;
      edtName.Clear;
      edtPatrName.Clear;
      edtPosition.Clear;
    except
      MessageBox(Handle, 'Ошибка добавления сотрудника', 'Ошибка', MB_ICONERROR);
    end;
  end;
  with frmEmployee do
  begin
    dbgEmployee.DataSource.DataSet.Refresh;
    edtSurName.SetFocus;
  end;
end;

end.
