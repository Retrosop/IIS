program prTeleyslyg;

uses
  Vcl.Forms,
  untGeneral in 'untGeneral.pas' {frmGeneral},
  untSettings in 'untSettings.pas' {frmSettings},
  untEmloyee in 'untEmloyee.pas' {frmEmployee},
  untEmployeeAdd in 'untEmployeeAdd.pas' {frmEmployeeAdd},
  untServices in 'untServices.pas' {frmServices},
  untServicesAdd in 'untServicesAdd.pas' {frmServicesAdd};

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(TfrmGeneral, frmGeneral);
  Application.CreateForm(TfrmSettings, frmSettings);
  Application.CreateForm(TfrmEmployee, frmEmployee);
  Application.CreateForm(TfrmEmployeeAdd, frmEmployeeAdd);
  Application.CreateForm(TfrmServices, frmServices);
  Application.CreateForm(TfrmServicesAdd, frmServicesAdd);
  Application.Run;
end.
