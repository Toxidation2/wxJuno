<?php
        class mainTwo extends wxFrame {
                function __construct() {
                        parent::__construct(null, null, "Juno", wxDefaultPosition, new wxSize(550, 500));
                        $this -> SetBackgroundColour(new wxColour(0, 0, 0, 0));
                        wxInitAllImageHandlers();
                        $wxPanelOne = new wxPanel($this, 0, new wxPoint(0, 0));
                        $wxPanelOne -> bitmap1 = new wxStaticBitmap($this, 0, new wxBitmap(new wxImage("..\\lib\\rtabn2.bmp")));
                        $wxPanelTwo = new wxPanel($this, 1, new wxPoint(0, 81), new wxSize(550, 500));
                        $wxPanelTwo -> SetBackgroundColour(new wxColour(192, 192, 192, 0));
                        $wxStaticText = new wxStaticText($this, 2, "succ is dead. no succ.", new wxPoint(0, 100));
                        $wxStaticText -> SetBackgroundColour(new wxColour(192, 192, 192, 0));
                        $wxMenuBar = new wxMenuBar();
                        $wxMenuFile = new wxMenu();
                        $wxMenuFile -> Append(1, "S&ave draft of message...\tCtrl-S", "");
                        $wxMenuFile -> Append(2, "Re&trieve saved draft...\tCtrl-R", "");
                        $wxMenuFile -> Append(3, "P&ut message in &Outbox...\tCtrl-O", "");
                        $wxMenuFile -> Append(4, "Retri&eve message from Outbox...\tCtrl-E", "");
                        $wxMenuFile -> AppendSeparator();
                        $wxMenuFile -> Append(5, "&Insert text file into message...\tCtrl-I", "");
                        $wxMenuFile -> Append(6, "Sa&ve message as text file...", "");
                        $wxMenuFile -> AppendSeparator();
                        $wxMenuFile -> Append(7, "&Create folder...", "");
                        $wxMenuFile -> Append(8, "Re&name folder...", "");
                        $wxMenuFile -> Append(9, "&Delete folder...", "");
                        $wxMenuFile -> AppendSeparator();
                        $wxMenuFile -> Append(10, "&Print message...\tCtrl+P", "");
                        $wxMenuFile -> Append(11, "P&rint setup...", "");
                        $wxMenuFile -> AppendSeparator();
                        $wxMenuFile -> Append(12, "E&xit", "");
                        $wxMenuFile -> Append(13, "&Send mail, then exit", "");
                        $wxMenuBar -> Append($wxMenuFile, "File");
                        $wxMenuEdit = new wxMenu();
                        $wxMenuEdit -> Append(1, "&Undo\tCtrl+Z", "");
                        $wxMenuEdit -> Append(2, "Cu&t\tCtrl+X", "");
                        $wxMenuEdit -> Append(3, "&Copy\tCtrl+C", "");
                        $wxMenuEdit -> Append(4, "&Paste\tCtrl+V", "");
                        $wxMenuEdit -> Append(5, "&Select all", "");
                        $wxMenuBar -> Append($wxMenuEdit, "Edit");
                        $wxMenuFeatures = new wxMenu();
                        $wxMenuFeatures -> Append(1, "Save sender's address", "");
                        $wxMenuFeatures -> Append(2, "Disable/enable access from other computers...", "");
                        $wxMenuFeatures -> Append(3, "&Import folder...", "");
                        $wxMenuFeatures -> Append(4, "&Export folder...", "");
                        $wxMenuFeatures -> Append(5, "Give Juno to a friend...", "");
                        $wxMenuBar -> Append($wxMenuFeatures, "Features");
                        $wxSubMenuConfirmations = new wxMenu();
                        $wxSubMenuConfirmations -> Append(1, "Confirm message delete", "");
                        $wxSubMenuConfirmations -> Append(2, "Confirm address delete", "");
                        $wxSubMenuConfirmations -> Append(3, "Confirm exit", "");
                        $wxMenuOptions = new wxMenu();
                        $wxMenuOptions -> Append(1, "Change &font...", "");
                        $wxMenuOptions -> Append(2, "Change &text color...", "");
                        $wxMenuOptions -> Append(3, "Change &background color...", "");
                        $wxMenuOptions -> Append(4, "Change &password...", "");
                        $wxMenuOptions -> Append(5, "&Update member profile...", "");
                        $wxMenuOptions -> AppendSeparator();
                        $wxMenuOptions -> Append(6, "&Dialing options...", "");
                        $wxMenuOptions -> Append(7, "&Modem configuration...", "");
                        $wxMenuOptions -> Append(8, "M&odem speaker on", "");
                        $wxMenuOptions -> AppendSeparator();
                        $wxMenuOptions -> Append(9, "&Reply settings...", "");
                        $wxMenuOptions -> Append(10, "&Show mail headers", "");
                        $wxMenuOptions -> Append(11, "&Automatically save all senders' addresses", "");
                        $wxMenuOptions -> Append(12, "Aut&omatically save all sent mail", "");
                        $wxMenuOptions -> AppendSeparator();
                        $wxMenuOptions -> AppendSubMenu($wxSubMenuConfirmations, "Confirmations");
                        $wxMenuOptions -> AppendSeparator();
                        $wxMenuOptions -> Append(13, "Updat&e System Information...", "");
                        $wxMenuOptions -> Append(14, "S&ystem Monitoring...", "");
                        $wxMenuBar -> Append($wxMenuOptions, "Options");
                        $wxMenuExit = new wxMenu();
                        $wxMenuExit -> Append(1, "Exit", "");
                        $wxMenuExit -> Append(2, "Send mail, then exit", "");
                        $wxMenuBar -> Append($wxMenuExit, "Exit");
                        $wxMenuHelp = new wxMenu();
                        $wxMenuHelp -> Append(1, "&Display mini-help boxes", "");
                        $wxMenuHelp -> AppendSeparator();
                        $wxMenuHelp -> Append(2, "&Help Topics", "");
                        $wxMenuHelp -> Append(3, "&Using Help", "");
                        $wxMenuHelp -> AppendSeparator();
                        $wxMenuHelp -> Append(4, "&About Juno...", "");
                        $wxMenuBar -> Append($wxMenuHelp, "&Help");
                        $this -> SetMenuBar($wxMenuBar);
                }
        }

        class mainOne extends wxApp {
                function OnInit() {
                        $mainTwo = new mainTwo();
                        $mainTwo -> Show();
                }
        }

        $mainOne = new mainOne();
        wxApp::SetInstance($mainOne);
        wxEntry();
?>