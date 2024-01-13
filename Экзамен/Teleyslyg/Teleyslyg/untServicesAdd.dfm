object frmServicesAdd: TfrmServicesAdd
  Left = 0
  Top = 0
  BorderStyle = bsDialog
  Caption = #1044#1086#1073#1072#1074#1083#1077#1085#1080#1077' '#1091#1089#1083#1091#1075#1080
  ClientHeight = 152
  ClientWidth = 447
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -13
  Font.Name = 'Segoe UI'
  Font.Style = []
  Position = poScreenCenter
  TextHeight = 17
  object Label1: TLabel
    Left = 24
    Top = 28
    Width = 130
    Height = 17
    Caption = #1053#1072#1080#1084#1077#1085#1086#1074#1072#1085#1080#1077' '#1091#1089#1083#1091#1075#1080
  end
  object Label2: TLabel
    Left = 24
    Top = 59
    Width = 120
    Height = 17
    Caption = #1057#1090#1086#1080#1084#1086#1089#1090#1100' '#1079#1072' '#1084#1077#1089#1103#1094
  end
  object edtTipe: TEdit
    Left = 168
    Top = 25
    Width = 257
    Height = 25
    TabOrder = 0
    TextHint = #1053#1072#1080#1084#1077#1085#1086#1074#1072#1085#1080#1077' '#1091#1089#1083#1091#1075#1080
  end
  object edtPerMonth: TEdit
    Left = 168
    Top = 56
    Width = 257
    Height = 25
    TabOrder = 1
    TextHint = #1057#1090#1086#1080#1084#1086#1089#1090#1100' '#1079#1072' '#1084#1077#1089#1103#1094
  end
  object btnServicesAdd: TButton
    Left = 168
    Top = 104
    Width = 257
    Height = 25
    Caption = #1044#1086#1073#1072#1074#1080#1090#1100' '#1091#1089#1083#1091#1075#1091
    TabOrder = 2
    OnClick = btnServicesAddClick
  end
end
