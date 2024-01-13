object frmGeneral: TfrmGeneral
  Left = 0
  Top = 0
  BorderIcons = [biSystemMenu, biMinimize]
  BorderStyle = bsSingle
  Caption = #1058#1077#1083#1077#1082#1086#1084#1091#1085#1080#1082#1072#1094#1080#1086#1085#1085#1072#1103' '#1082#1086#1084#1087#1072#1085#1080#1103
  ClientHeight = 372
  ClientWidth = 354
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -19
  Font.Name = 'Segoe UI'
  Font.Style = []
  Menu = MMenu
  Position = poScreenCenter
  TextHeight = 25
  object SBar: TStatusBar
    Left = 0
    Top = 353
    Width = 354
    Height = 19
    Panels = <
      item
        Width = 50
      end>
    ExplicitTop = 361
  end
  object btnEmployee: TButton
    Left = 24
    Top = 61
    Width = 305
    Height = 78
    Caption = #1057#1086#1090#1088#1091#1076#1085#1080#1082#1080
    TabOrder = 1
    OnClick = btnEmployeeClick
  end
  object btnServices: TButton
    Left = 24
    Top = 198
    Width = 305
    Height = 78
    Caption = #1059#1089#1083#1091#1075#1080
    TabOrder = 2
    OnClick = btnServicesClick
  end
  object MMenu: TMainMenu
    Left = 24
    Top = 80
    object N1: TMenuItem
      Caption = #1052#1077#1085#1102
      object btnDBConnect: TMenuItem
        Caption = #1055#1086#1076#1082#1083#1102#1095#1080#1090#1100#1089#1103' '#1082' '#1073#1072#1079#1077
        OnClick = btnDBConnectClick
      end
      object N2: TMenuItem
        Caption = #1053#1072#1089#1090#1088#1086#1081#1082#1080
        OnClick = N2Click
      end
      object N3: TMenuItem
        Caption = '-'
      end
      object btnClose: TMenuItem
        Caption = #1042#1099#1093#1086#1076
        OnClick = btnCloseClick
      end
    end
    object btnAbout: TMenuItem
      Caption = #1054' '#1087#1088#1086#1075#1088#1072#1084#1084#1077
      OnClick = btnAboutClick
    end
  end
end
