object frmEmployee: TfrmEmployee
  Left = 0
  Top = 0
  BorderIcons = [biSystemMenu, biMinimize]
  BorderStyle = bsDialog
  Caption = #1057#1086#1090#1088#1091#1076#1085#1080#1082#1080
  ClientHeight = 442
  ClientWidth = 773
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -13
  Font.Name = 'Segoe UI'
  Font.Style = []
  Position = poScreenCenter
  DesignSize = (
    773
    442)
  TextHeight = 17
  object dbgEmployee: TDBGrid
    Left = 8
    Top = 39
    Width = 753
    Height = 395
    Anchors = [akLeft, akTop, akRight]
    DataSource = dsEmployee
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Segoe UI'
    Font.Style = []
    Options = [dgTitles, dgIndicator, dgColumnResize, dgColLines, dgRowLines, dgTabs, dgRowSelect, dgAlwaysShowSelection, dgConfirmDelete, dgCancelOnExit, dgTitleClick, dgTitleHotTrack]
    ParentFont = False
    TabOrder = 0
    TitleFont.Charset = DEFAULT_CHARSET
    TitleFont.Color = clWindowText
    TitleFont.Height = -13
    TitleFont.Name = 'Segoe UI'
    TitleFont.Style = []
    Columns = <
      item
        Expanded = False
        FieldName = 'idemployee'
        Title.Caption = #1050#1086#1076
        Width = 50
        Visible = True
      end
      item
        Expanded = False
        FieldName = 'surname'
        Title.Caption = #1060#1072#1084#1080#1083#1080#1103
        Width = 150
        Visible = True
      end
      item
        Expanded = False
        FieldName = 'name'
        Title.Caption = #1048#1084#1103
        Width = 150
        Visible = True
      end
      item
        Expanded = False
        FieldName = 'patr_name'
        Title.Caption = #1054#1090#1095#1077#1089#1090#1074#1086
        Width = 150
        Visible = True
      end
      item
        Expanded = False
        FieldName = 'position'
        Title.Caption = #1044#1086#1083#1078#1085#1086#1089#1090#1100
        Width = 200
        Visible = True
      end>
  end
  object Button1: TButton
    Left = 8
    Top = 8
    Width = 150
    Height = 25
    Caption = #1044#1086#1073#1072#1074#1080#1090#1100' '#1089#1086#1090#1088#1091#1076#1085#1080#1082#1072
    TabOrder = 1
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 611
    Top = 8
    Width = 150
    Height = 25
    Anchors = [akTop, akRight]
    Caption = #1059#1076#1072#1083#1080#1090#1100
    TabOrder = 2
    OnClick = Button2Click
  end
  object dsEmployee: TDataSource
    DataSet = tblEmployee
    OnDataChange = dsEmployeeDataChange
    Left = 392
    Top = 144
  end
  object tblEmployee: TFDTable
    IndexFieldNames = 'idemployee'
    Connection = frmSettings.FDConnect
    ResourceOptions.AssignedValues = [rvEscapeExpand]
    TableName = 'teleyslyg.employee'
    Left = 392
    Top = 200
  end
  object qrEmployee: TFDQuery
    Connection = frmSettings.FDConnect
    Left = 392
    Top = 264
  end
end
