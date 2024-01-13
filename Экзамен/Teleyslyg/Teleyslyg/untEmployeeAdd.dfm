object frmEmployeeAdd: TfrmEmployeeAdd
  Left = 0
  Top = 0
  BorderIcons = [biSystemMenu]
  BorderStyle = bsDialog
  Caption = #1053#1086#1074#1099#1081' '#1089#1086#1090#1088#1091#1076#1085#1080#1082
  ClientHeight = 212
  ClientWidth = 333
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -13
  Font.Name = 'Segoe UI'
  Font.Style = []
  Position = poScreenCenter
  TextHeight = 17
  object Label1: TLabel
    Left = 16
    Top = 19
    Width = 53
    Height = 17
    Caption = #1060#1072#1084#1080#1083#1080#1103
  end
  object Label2: TLabel
    Left = 16
    Top = 50
    Width = 26
    Height = 17
    Caption = #1048#1084#1103
  end
  object Label3: TLabel
    Left = 16
    Top = 81
    Width = 55
    Height = 17
    Caption = #1054#1090#1095#1077#1089#1090#1074#1086
  end
  object Label4: TLabel
    Left = 16
    Top = 112
    Width = 66
    Height = 17
    Caption = #1044#1086#1083#1078#1085#1086#1089#1090#1100
  end
  object edtSurName: TEdit
    Left = 96
    Top = 16
    Width = 217
    Height = 25
    TabOrder = 0
    TextHint = #1060#1072#1084#1080#1083#1080#1103
  end
  object edtName: TEdit
    Left = 96
    Top = 47
    Width = 217
    Height = 25
    TabOrder = 1
    TextHint = #1048#1084#1103
  end
  object edtPatrName: TEdit
    Left = 96
    Top = 78
    Width = 217
    Height = 25
    TabOrder = 2
    TextHint = #1054#1090#1095#1077#1089#1090#1074#1086
  end
  object edtPosition: TEdit
    Left = 96
    Top = 109
    Width = 217
    Height = 25
    TabOrder = 3
    TextHint = #1044#1086#1083#1078#1085#1086#1089#1090#1100
  end
  object btnAdd: TButton
    Left = 16
    Top = 160
    Width = 297
    Height = 25
    Caption = #1044#1086#1073#1072#1074#1080#1090#1100' '#1089#1086#1090#1088#1091#1076#1085#1080#1082#1072
    TabOrder = 4
    OnClick = btnAddClick
  end
end
