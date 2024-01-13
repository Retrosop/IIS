object frmSettings: TfrmSettings
  Left = 0
  Top = 0
  BorderStyle = bsDialog
  Caption = #1053#1072#1089#1090#1088#1086#1081#1082#1080
  ClientHeight = 255
  ClientWidth = 274
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -13
  Font.Name = 'Segoe UI'
  Font.Style = []
  Position = poScreenCenter
  OnCreate = FormCreate
  DesignSize = (
    274
    255)
  TextHeight = 17
  object GroupBox1: TGroupBox
    Left = 8
    Top = 8
    Width = 256
    Height = 193
    Caption = #1055#1086#1076#1082#1083#1102#1095#1077#1085#1080#1077' '#1082' '#1073#1072#1079#1077' '#1076#1072#1085#1085#1099#1093
    TabOrder = 0
    object Label1: TLabel
      Left = 16
      Top = 27
      Width = 90
      Height = 17
      Caption = #1040#1076#1088#1077#1089' '#1089#1077#1088#1074#1077#1088#1072
    end
    object Label2: TLabel
      Left = 16
      Top = 58
      Width = 85
      Height = 17
      Caption = #1055#1086#1083#1100#1079#1086#1074#1072#1090#1077#1083#1100
    end
    object Label3: TLabel
      Left = 16
      Top = 89
      Width = 46
      Height = 17
      Caption = #1055#1072#1088#1086#1083#1100
    end
    object Label4: TLabel
      Left = 16
      Top = 120
      Width = 74
      Height = 17
      Caption = #1041#1072#1079#1072' '#1076#1072#1085#1085#1099#1093
    end
    object Label5: TLabel
      Left = 16
      Top = 151
      Width = 66
      Height = 17
      Caption = #1050#1086#1076#1080#1088#1086#1074#1082#1072
    end
    object edtAddr: TEdit
      Left = 120
      Top = 24
      Width = 121
      Height = 25
      TabOrder = 0
      TextHint = 'localhost'
    end
    object edtUser: TEdit
      Left = 120
      Top = 55
      Width = 121
      Height = 25
      TabOrder = 1
      TextHint = 'root'
    end
    object edtPswd: TEdit
      Left = 120
      Top = 86
      Width = 121
      Height = 25
      PasswordChar = '*'
      TabOrder = 2
    end
    object edtDBName: TEdit
      Left = 120
      Top = 117
      Width = 121
      Height = 25
      TabOrder = 3
      TextHint = 'teleyslyg'
    end
    object edtCharSet: TEdit
      Left = 120
      Top = 148
      Width = 121
      Height = 25
      TabOrder = 4
      TextHint = 'utf8'
    end
  end
  object btnSave: TButton
    Left = 139
    Top = 217
    Width = 125
    Height = 25
    Anchors = [akLeft, akBottom]
    Caption = #1057#1086#1093#1088#1072#1085#1080#1090#1100
    TabOrder = 1
    OnClick = btnSaveClick
    ExplicitTop = 216
  end
  object btnClose: TButton
    Left = 8
    Top = 217
    Width = 125
    Height = 25
    Anchors = [akLeft, akBottom]
    Caption = #1047#1072#1082#1088#1099#1090#1100
    TabOrder = 2
    OnClick = btnCloseClick
    ExplicitTop = 216
  end
  object FDConnect: TFDConnection
    Params.Strings = (
      'Database=teleyslyg'
      'User_Name=root'
      'Password=12345678'
      'CharacterSet=utf8'
      'DriverID=MySQL')
    LoginPrompt = False
    Left = 80
    Top = 112
  end
  object FDGUIxWaitCursor1: TFDGUIxWaitCursor
    Provider = 'Forms'
    ScreenCursor = gcrDefault
    Left = 176
    Top = 112
  end
end
