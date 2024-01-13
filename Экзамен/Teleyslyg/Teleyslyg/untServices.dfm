object frmServices: TfrmServices
  Left = 0
  Top = 0
  BorderStyle = bsDialog
  Caption = #1059#1089#1083#1091#1075#1080
  ClientHeight = 442
  ClientWidth = 628
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -13
  Font.Name = 'Segoe UI'
  Font.Style = []
  Position = poScreenCenter
  TextHeight = 17
  object Button1: TButton
    Left = 8
    Top = 8
    Width = 150
    Height = 25
    Caption = #1044#1086#1073#1072#1074#1080#1090#1100' '#1091#1089#1083#1091#1075#1091
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 470
    Top = 8
    Width = 150
    Height = 25
    Caption = #1059#1076#1072#1083#1080#1090#1100' '#1091#1089#1083#1091#1075#1091
    TabOrder = 1
    OnClick = Button2Click
  end
  object dbgServices: TDBGrid
    Left = 8
    Top = 39
    Width = 612
    Height = 395
    DataSource = dsServices
    Options = [dgTitles, dgIndicator, dgColumnResize, dgColLines, dgRowLines, dgTabs, dgRowSelect, dgAlwaysShowSelection, dgConfirmDelete, dgCancelOnExit, dgTitleClick, dgTitleHotTrack]
    TabOrder = 2
    TitleFont.Charset = DEFAULT_CHARSET
    TitleFont.Color = clWindowText
    TitleFont.Height = -13
    TitleFont.Name = 'Segoe UI'
    TitleFont.Style = []
    Columns = <
      item
        Expanded = False
        FieldName = 'idservices'
        Title.Caption = #1050#1086#1076
        Width = 50
        Visible = True
      end
      item
        Expanded = False
        FieldName = 'per_month'
        Title.Caption = #1057#1090#1086#1080#1084#1086#1089#1090#1100' '#1079#1072' '#1084#1077#1089#1103#1094
        Width = 125
        Visible = True
      end
      item
        Expanded = False
        FieldName = 'tipe'
        Title.Caption = #1059#1089#1083#1091#1075#1072
        Width = 350
        Visible = True
      end
      item
        Expanded = False
        FieldName = 'idequipment'
        Visible = False
      end>
  end
  object dsServices: TDataSource
    DataSet = tblServices
    OnDataChange = dsServicesDataChange
    Left = 368
    Top = 176
  end
  object tblServices: TFDTable
    IndexFieldNames = 'idservices'
    Connection = frmSettings.FDConnect
    ResourceOptions.AssignedValues = [rvEscapeExpand]
    TableName = 'teleyslyg.services'
    Left = 368
    Top = 240
  end
  object qrServices: TFDQuery
    Connection = frmSettings.FDConnect
    Left = 368
    Top = 304
  end
end
