<!DOCTYPE html>
<html moznomarginboxes mozdisallowselectionprint>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>PT. BAC — Journal Entry — Edit</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="resources/bootstrap/css/bootstrap.css?20.7.13.0" />
    <style>
        .btn-primary,
        .btn-danger,
        .btn-success,
        .btn-info,
        .btn-warning {
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
        }

        @media print {
            body {
                -webkit-print-color-adjust: exact !important;
                padding: 0;
                margin: 0;
                font-size: 10pt;
                font-family: sans-serif;
                line-height: 125%;
                background: none !important;
            }

            .print-display-none,
            .btn {
                display: none !important
            }

            a {
                color: #000;
                text-decoration: none
            }
        }
    </style>
</head>
<style>
    .text-start {
        text-align: left !important
    }

    .text-end {
        text-align: right !important
    }

    .border-start {
        border-left: 1px solid #000 !important
    }

    .border-end {
        border-right: 1px solid #000 !important
    }

    .float-left {
        float: left
    }
</style>

<body style="background: #eee url('resources/noise.png')"><noscript>
        <div style="background-color: yellow; padding: 100px; text-align: center; font-weight: bold; border-bottom: 1px solid #ccc; font-size: 16px">Javascript Error</div>
    </noscript>
    <style>
        #navbar {
            z-index: 9;
            position: fixed;
            right: 0;
            left: 0;
            top: 0;
            margin: 0px;
        }

        #navbar {
            font-size: 12px;
            background-color: #FAFAFA;
            background-image: -moz-linear-gradient(top, #ffffff, #f2f2f2);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#f2f2f2));
            background-image: -webkit-linear-gradient(top, #ffffff, #f2f2f2);
            background-image: -o-linear-gradient(top, #ffffff, #f2f2f2);
            background-image: linear-gradient(to bottom, #ffffff, #f2f2f2);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff2f2f2', GradientType=0);
            *zoom: 1;
            background-repeat: repeat-x;
            border: 1px solid #D4D4D4;
            font-weight: bold;
            border-width: 0 0 1px 0;
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
        }

        #navbar table {
            width: 100%;
            border-collapse: collapse;
        }

        #navbar td {
            width: 1px;
            white-space: nowrap;
        }

        #navbar td.active {
            color: #555555;
            background-color: #e5e5e5;
            -webkit-box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
            -moz-box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
            box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
        }

        #navbar a {
            color: #777777;
            display: block;
            padding: 15px
        }

        #navbar a:hover {
            color: #333;
            text-decoration: none
        }

        #navbar a img {
            margin: 0px 6px;
            margin-top: -4px;
            opacity: 0.4;
        }

        #navbar a:hover img {
            opacity: 0.8
        }
    </style>
    <div id="navbar" class="print-display-none">
        <div style="padding-right: 15px">
            <table>
                <tr>
                    <td><a href="javascript:window.history.back();"><img src="resources/webalys/_16px/triangle-big-3-01.png" style="margin-top: -2px" />Back</a></td>
                    <td class="active"><a href="/businesses"><img src="resources/webalys/_16px/places-11.png" style="margin-top: -2px" />Businesses</a></td>
                    <td><a href="/users"><img src="resources/webalys/_16px/users-23.png" style="margin-top: -2px" />Users</a></td>
                    <td><a href="/preferences"><img src="resources/webalys/_16px/setting-2.png" style="margin-top: -2px" />Preferences</a></td>
                    <td><a href="/support"><img src="resources/webalys/_16px/interface-56.png" style="margin-top: -2px" />Support</a></td>
                    <td style="width: auto"></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="print-reset" style="padding: 35px; padding-top: 85px">
        <link rel="stylesheet" type="text/css" href="resources/theme.css?20.7.13.0" />
        <link rel="stylesheet" type="text/css" href="resources/custom.css?20.7.13.0" />
        <table class="print-reset" style="width: 100%; border-collapse: separate">
            <tr>
                <td class="print-reset" style="border: 1px solid #ccc; padding-left: 20px; padding-right: 20px; background-color: #f3f3f3; box-shadow: inset 1px 1px 0px #fff;" colspan="2">
                    <div class="print-display-none" style="line-height: 54px">
                        <table style="width: 100%">
                            <tr>
                                <td style="vertical-align: middle; width: 1px"><a href="/businesses" class="text-decoration-none file-close" style="color: #ccc; font-size: 24px; display: block; font-weight: bold">&times;</a></td>
                                <td style="vertical-align: middle; padding: 0 10px"><span style="text-shadow: 1px 1px 0 #FFFFFF; color: #555555; font-size: 18px; font-weight: bold">PT. BAC</span><a href="/business-form?FileID=UFQuIEJBQw" style="font-size: 11px; margin: 0 10px; color: #999; text-shadow: 1px 1px 0px #fff">Rename</a></td>
                                <td style="width: 1px; white-space: nowrap"><a href="/backup?FileID=UFQuIEJBQw" class="btn btn-default btn-sm" style="font-weight: bold">Backup</a></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <style>
                    #sidenav div {
                        padding: 0px;
                        background-color: #fafafa;
                        box-shadow: inset 1px 1px 0px #fff;
                    }

                    #sidenav img {
                        opacity: 0.4;
                        vertical-align: top;
                        width: 16px;
                        height: 16px
                    }

                    #sidenav .tab-active {
                        background-color: #fff;
                        border-right: none
                    }

                    #sidenav a.tab-link,
                    #sidenav span.tab-link {
                        line-height: 16px;
                        display: block;
                        position: relative;
                        white-space: nowrap;
                        padding: 12px;
                        font-size: 11px;
                        font-weight: bold;
                        font-family: 'Lucida Grande', Verdana, sans-serif
                    }

                    #sidenav table {
                        border: 1px solid #ccc;
                        border-top: none;
                        border-spacing: 0px;
                        width: 100%
                    }

                    #sidenav .tab-active table {
                        border-right: 1px solid #fff
                    }

                    #sidenav a:hover {
                        text-decoration: none
                    }

                    #sidenav a:hover img {
                        opacity: 0.6
                    }

                    #sidenav .tab-active img {
                        opacity: 0.6
                    }

                    #sidenav span.count {
                        background-color: #FFFFFF;
                        border: 1px solid #CCCCCC;
                        border-radius: 3px 3px 3px 3px;
                        color: #666666;
                        font-size: 10px;
                        font-weight: bold;
                        padding: 3px 6px;
                    }

                    #sidenav span.count-zero {
                        border: 1px solid #EEEEEE;
                        color: #DDDDDD
                    }

                    #sidenav span.tab-label {
                        margin: 0 10px;
                    }

                    #sidenav a:hover span.tooltiptext {
                        visibility: visible
                    }

                    .tooltiptext {
                        visibility: hidden;
                        background-color: #000;
                        color: #fff;
                        text-align: center;
                        padding: 5px 10px;
                        border-radius: 6px;
                        position: absolute;
                        z-index: 99999;
                        top: 7px;
                        left: 42px;
                    }

                    .tooltiptext::after {
                        content: ' ';
                        position: absolute;
                        top: 50%;
                        right: 100%;
                        margin-top: -5px;
                        border-width: 5px;
                        border-style: solid;
                        border-color: transparent black transparent transparent;
                    }
                </style>
                <td id="rtl-graypixel" class="print-reset" style="width: 1px; vertical-align: top; padding: 0; background-image: url('resources/graypixel.png'); background-repeat:repeat-y; background-position: right top">
                    <div id="sidenav" class="print-display-none">
                        <div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/summary-view?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-76.png" /><span class="tab-label hide-on-collapse">Summary</span><span class="show-on-collapse hidden"><span class="tooltiptext">Summary</span></span></a></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/bank-accounts?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-69.png" /><span class="tab-label hide-on-collapse">Bank Accounts</span><span class="show-on-collapse hidden"><span class="tooltiptext">Bank Accounts</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/cash-accounts?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-16.png" /><span class="tab-label hide-on-collapse">Cash Accounts</span><span class="show-on-collapse hidden"><span class="tooltiptext">Cash Accounts</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/receipts-and-payments?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-37.png" /><span class="tab-label hide-on-collapse">Receipts & Payments</span><span class="show-on-collapse hidden"><span class="tooltiptext">Receipts & Payments</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/inter-account-transfers?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/transfers-72.png" /><span class="tab-label hide-on-collapse">Inter Account Transfers</span><span class="show-on-collapse hidden"><span class="tooltiptext">Inter Account Transfers</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/bank-reconciliations?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/status-17.png" /><span class="tab-label hide-on-collapse">Bank Reconciliations</span><span class="show-on-collapse hidden"><span class="tooltiptext">Bank Reconciliations</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/expense-claims?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-41.png" /><span class="tab-label hide-on-collapse">Expense Claims</span><span class="show-on-collapse hidden"><span class="tooltiptext">Expense Claims</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/customers?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/users-23.png" /><span class="tab-label hide-on-collapse">Customers</span><span class="show-on-collapse hidden"><span class="tooltiptext">Customers</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/sales-quotes?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/design-23.png" /><span class="tab-label hide-on-collapse">Sales Quotes</span><span class="show-on-collapse hidden"><span class="tooltiptext">Sales Quotes</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/sales-orders?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-6.png" /><span class="tab-label hide-on-collapse">Sales Orders</span><span class="show-on-collapse hidden"><span class="tooltiptext">Sales Orders</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/sales-invoices?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/communication-55.png" /><span class="tab-label hide-on-collapse">Sales Invoices</span><span class="show-on-collapse hidden"><span class="tooltiptext">Sales Invoices</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/credit-notes?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/edition-66.png" /><span class="tab-label hide-on-collapse">Credit Notes</span><span class="show-on-collapse hidden"><span class="tooltiptext">Credit Notes</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/late-payment-fees?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/time-11.png" /><span class="tab-label hide-on-collapse">Late Payment Fees</span><span class="show-on-collapse hidden"><span class="tooltiptext">Late Payment Fees</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/delivery-notes?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-92.png" /><span class="tab-label hide-on-collapse">Delivery Notes</span><span class="show-on-collapse hidden"><span class="tooltiptext">Delivery Notes</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/suppliers?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/places-11.png" /><span class="tab-label hide-on-collapse">Suppliers</span><span class="show-on-collapse hidden"><span class="tooltiptext">Suppliers</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/purchase-quotes?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/content-36.png" /><span class="tab-label hide-on-collapse">Purchase Quotes</span><span class="show-on-collapse hidden"><span class="tooltiptext">Purchase Quotes</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/purchase-orders?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-1.png" /><span class="tab-label hide-on-collapse">Purchase Orders</span><span class="show-on-collapse hidden"><span class="tooltiptext">Purchase Orders</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/purchase-invoices?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/time-3.png" /><span class="tab-label hide-on-collapse">Purchase Invoices</span><span class="show-on-collapse hidden"><span class="tooltiptext">Purchase Invoices</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/debit-notes?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/files-47.png" /><span class="tab-label hide-on-collapse">Debit Notes</span><span class="show-on-collapse hidden"><span class="tooltiptext">Debit Notes</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/goods-receipts?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-86.png" /><span class="tab-label hide-on-collapse">Goods Receipts</span><span class="show-on-collapse hidden"><span class="tooltiptext">Goods Receipts</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/inventory-items?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-94.png" /><span class="tab-label hide-on-collapse">Inventory Items</span><span class="show-on-collapse hidden"><span class="tooltiptext">Inventory Items</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/inventory-transfers?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-95.png" /><span class="tab-label hide-on-collapse">Inventory Transfers</span><span class="show-on-collapse hidden"><span class="tooltiptext">Inventory Transfers</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/inventory-write-offs?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/design-7.png" /><span class="tab-label hide-on-collapse">Inventory Write-offs</span><span class="show-on-collapse hidden"><span class="tooltiptext">Inventory Write-offs</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/production-orders?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/places-13.png" /><span class="tab-label hide-on-collapse">Production Orders</span><span class="show-on-collapse hidden"><span class="tooltiptext">Production Orders</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/employees?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/users-30.png" /><span class="tab-label hide-on-collapse">Employees</span><span class="show-on-collapse hidden"><span class="tooltiptext">Employees</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/payslips?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-48.png" /><span class="tab-label hide-on-collapse">Payslips</span><span class="show-on-collapse hidden"><span class="tooltiptext">Payslips</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/billable-time-entries?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/time-1.png" /><span class="tab-label hide-on-collapse">Billable Time</span><span class="show-on-collapse hidden"><span class="tooltiptext">Billable Time</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/billable-expenses?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-14.png" /><span class="tab-label hide-on-collapse">Billable Expenses</span><span class="show-on-collapse hidden"><span class="tooltiptext">Billable Expenses</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/fixed-assets?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/content-1.png" /><span class="tab-label hide-on-collapse">Fixed Assets</span><span class="show-on-collapse hidden"><span class="tooltiptext">Fixed Assets</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/depreciation-entries?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/hardware-52.png" /><span class="tab-label hide-on-collapse">Depreciation Entries</span><span class="show-on-collapse hidden"><span class="tooltiptext">Depreciation Entries</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/intangible-assets?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/vote-11.png" /><span class="tab-label hide-on-collapse">Intangible Assets</span><span class="show-on-collapse hidden"><span class="tooltiptext">Intangible Assets</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/amortization-entries?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/business-74.png" /><span class="tab-label hide-on-collapse">Amortization Entries</span><span class="show-on-collapse hidden"><span class="tooltiptext">Amortization Entries</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/capital-accounts?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/users-8.png" /><span class="tab-label hide-on-collapse">Capital Accounts</span><span class="show-on-collapse hidden"><span class="tooltiptext">Capital Accounts</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/special-accounts?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/content-15.png" /><span class="tab-label hide-on-collapse">Special Accounts</span><span class="show-on-collapse hidden"><span class="tooltiptext">Special Accounts</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-active">
                                <table>
                                    <tr>
                                        <td><a href="/journal-entries?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/design-6.png" /><span class="tab-label hide-on-collapse">Journal Entries</span><span class="show-on-collapse hidden"><span class="tooltiptext">Journal Entries</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/folders?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/content-3.png" /><span class="tab-label hide-on-collapse">Folders</span><span class="show-on-collapse hidden"><span class="tooltiptext">Folders</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/attachments?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/edition-49.png" /><span class="tab-label hide-on-collapse">Attachments</span><span class="show-on-collapse hidden"><span class="tooltiptext">Attachments</span></span></a></td>
                                        <td class="count-column hide-on-collapse" style="text-align: right; padding: 0 10px; width: 1px"><span class="count count-zero" style="white-space: nowrap">0</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/emails?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/communication-42.png" /><span class="tab-label hide-on-collapse">Emails</span><span class="show-on-collapse hidden"><span class="tooltiptext">Emails</span></span></a></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/reports-view?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/text-9.png" /><span class="tab-label hide-on-collapse">Reports</span><span class="show-on-collapse hidden"><span class="tooltiptext">Reports</span></span></a></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td><a href="/settings-view?FileID=UFQuIEJBQw" class="tab-link"><img src="resources/webalys/_16px/setting-8.png" /><span class="tab-label hide-on-collapse">Settings</span><span class="show-on-collapse hidden"><span class="tooltiptext">Settings</span></span></a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        var compact = false;

                        function toggleNav() {

                            compact = !compact;
                            document.cookie = 'compact=' + compact.toString();

                            var elements = document.querySelectorAll('.hide-on-collapse');
                            for (var i = 0, len = elements.length; i < len; i++) {
                                if (compact) elements[i].classList.add('hidden');
                                else elements[i].classList.remove('hidden');
                            }

                            var elements = document.querySelectorAll('.show-on-collapse');
                            for (var i = 0, len = elements.length; i < len; i++) {
                                if (!compact) elements[i].classList.add('hidden');
                                else elements[i].classList.remove('hidden');
                            }

                        }
                    </script><a href="javascript:toggleNav();" class="print-display-none" style="position: fixed; bottom: 1px; left: 1px; padding: 9px"><img src="resources/webalys/_16px/interface-32.png" style="opacity: 0.5" /></a>
                    <div style="height: 100px">
                        <div class="hide-on-collapse" style="text-align: center; padding-top: 10px"><a href="/tabs-form?Key=ac789d1f-034f-4964-a8b5-ebfffc3511f2&FileID=UFQuIEJBQw" class="btn btn-link btn-xs" style="font-weight: bold; text-shadow: 1px 1px 0px #fff">Customize</a></div>
                    </div>
                </td>
                <td id="rtl-mainpanel" class="print-reset" style="vertical-align: top; background-color: #fff; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc; padding: 30px">
                    <ol class="breadcrumb print-display-none">
                        <li><a href="/journal-entries?Skip=0&Take=50&FileID=UFQuIEJBQw">Journal Entries</a></li>
                        <li class="active">Journal Entry — Edit</li>
                    </ol>
                    <script src="resources/jquery/jquery-1-8-2-min.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/jquery/jquery-ui-1-9-2-custom-min.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/knockoutjs/knockout.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/knockoutjs/knockout-sortable.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/knockoutjs/knockout-dictionary.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/jquery/globalize.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/decimal/decimal.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/mathexpressionevaluator/math-expression-evaluator-min.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/bootstrap/js/bootstrap-min.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/select2/select2.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/datepicker/bootstrap-datepicker.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/typeahead/typeahead-min.js?v=20.7.13.0" type="text/javascript"></script>
                    <script src="resources/autosize/autosize.js?v=20.7.13.0" type="text/javascript"></script>
                    <link rel="stylesheet" type="text/css" href="resources/select2/select2.css?20.7.13.0" />
                    <link rel="stylesheet" type="text/css" href="resources/typeahead/typeahead.css?20.7.13.0" />
                    <link rel="stylesheet" type="text/css" href="resources/datepicker/bootstrap-datepicker3.css?20.7.13.0" />
                    <style>
                        .input-group .select2-container .select2-choice {
                            border-bottom-left-radius: 0;
                            border-top-left-radius: 0
                        }

                        .select2-container .select2-choice {
                            height: 30px;
                            line-height: 30px
                        }

                        .select2-container .select2-choice .select2-chosen {
                            font-size: 12px;
                            color: #555
                        }

                        .select2-container .select2-choice.select2-default .select2-chosen {
                            color: #ccc
                        }

                        .select2-container,
                        .select2-drop {
                            font-size: 12px;
                            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                        }

                        .select2-container .select2-choice {
                            background-image: none;
                            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset
                        }

                        .select2-container .select2-choice {
                            border: 1px solid #ccc
                        }

                        .select2-container-active .select2-choice {
                            border: 1px solid #5897FB
                        }

                        .select2-container .select2-choice .select2-arrow {
                            background: none;
                            border-left: none
                        }

                        table.input td input,
                        table.input td select,
                        table.input td .select2-container {
                            margin-bottom: 0px
                        }

                        .tt-suggestions {
                            font-size: 12px;
                        }
                    </style>
                    <script type="text/javascript">
                        Globalize.addCultureInfo("default", {
                            numberFormat: {
                                pattern: ["-n"],
                                decimals: "2",
                                ",": ",",
                                ".": ".",
                                groupSizes: [3],
                                "+": "+",
                                "-": "-"
                            }
                        });
                        Globalize.culture("default");
                    </script>
                    <script type="text/javascript">
                        $.fn.datepicker.dates['en'].daysMin = ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"];
                        $.fn.datepicker.dates['en'].months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                        $.fn.datepicker.dates['en'].monthsShort = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                        $.fn.datepicker.dates['en'].today = "Today";
                    </script>
                    <script type="text/javascript">
                        if (!Number.prototype.getDecimals) {
                            Number.prototype.getDecimals = function() {
                                var num = parseFloat(this.toFixed(10));
                                var match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                                if (!match)
                                    return 0;
                                return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
                            }
                        }

                        function getDecimal(text, defaultValue) {
                            if (text && text.length > 0) return new Decimal(text);
                            return new Decimal(defaultValue);
                        }
                        String.prototype.replaceAll = function(target, replacement) {
                            return this.split(target).join(replacement);
                        };
                    </script>
                    <script type="text/javascript">
                        function JournalEntryViewModel() {
                            var self = this;
                            self.Date = ko.observable();
                            self.Reference = ko.observable();
                            self.Narration = ko.observable();
                            self.Lines = ko.observableArray();

                            function TransactionLineViewModel() {
                                var self = this;
                                self.Helper = ko.observable();
                                self.Description = ko.observable();
                                self.Account = ko.observable();
                                self.TaxCode = ko.observable();
                                self.Qty = ko.observable();
                                self.Item = ko.observable();
                                self.Amount = ko.observable();
                                self.Debit = ko.observable();
                                self.Credit = ko.observable();
                                self.Discount = ko.observable();
                                self.TrackingCode = ko.observable();
                                self.ProposedAccountAmount = ko.observable();
                                self.CustomFields = ko.observableDictionary();
                                self.DiscountAmount = ko.observable();
                                self.MemberAccount = ko.observable();
                                self.BillableExpenseCustomer = ko.observable();
                                self.BillableExpenseSalesInvoice = ko.observable();
                                self.Invoice = ko.observable();
                                self.Obsolete_Disbursement = ko.observable();
                                self.Obsolete_Account = ko.observable();
                                self.Obsolete_SalesInvoice = ko.observable();
                                self.Obsolete_PurchaseInvoice = ko.observable();
                                self.Obsolete_Employee = ko.observable();
                                self.Obsolete_ExpenseClaimPayer = ko.observable();
                                self.Obsolete_IntangibleAsset = ko.observable();
                                self.Obsolete_InventoryItem = ko.observable();
                                self.Obsolete_Customer = ko.observable();
                                self.Obsolete_Supplier = ko.observable();
                                self.Obsolete_FixedAsset = ko.observable();
                                self.Obsolete_Member = ko.observable();
                                self.Obsolete_Item = ko.observable();
                                self.Obsolete_PurchaseInvoiceItem = ko.observable();
                                self.Obsolete_Discount = ko.observable();
                                self.Obsolete_EquityReason = ko.observable();
                                self.Obsolete_CurrencyAmount = ko.observable();
                                self.Obsolete_DisbursementStatus = ko.observable();
                                self.Obsolete_DisbursementSalesInvoice = ko.observable();
                                self.Obsolete_DisbursementWriteOffDate = ko.observable();
                                self.Obsolete_Cheque = ko.observable();
                                self.Obsolete_BankDeposit = ko.observable();
                                self.Obsolete_BankAccount = ko.observable();
                                self.Obsolete_CashAccount = ko.observable();
                                self.Obsolete_Amount = ko.observable();
                                self.Obsolete_Invoice = ko.observable();
                                self.Obsolete_BillableExpense = ko.observable();
                                self.Item.subscribe(function(data) {
                                    if (viewModelInit) return;
                                    if (data && data.Description && data.Description.length > 0) {
                                        self.Description(data.Description);
                                    }
                                    if (data && data.TaxCode && data.TaxCode.length > 0) {
                                        self.TaxCode({
                                            id: data.TaxCode,
                                            text: data.TaxCodeName
                                        });
                                    }
                                    if (data && data.UnitPrice != null && !isNaN(data.UnitPrice)) {
                                        self.Amount(data.UnitPrice);
                                    }
                                    if (data && data.TrackingCode && data.TrackingCode.length > 0) {
                                        self.TrackingCode({
                                            id: data.TrackingCode
                                        });
                                    }
                                    if (self.Qty() == null || isNaN(self.Qty())) {
                                        self.Qty(1);
                                    }
                                });
                                self.Helper.subscribe(function(data) {
                                    if (viewModelInit) return;
                                    if (data && data.TaxCode && data.TaxCode.length > 0) {
                                        self.TaxCode({
                                            id: data.TaxCode,
                                            text: data.TaxCodeName
                                        });
                                    }
                                    self.Account(data && data.Account ? {
                                        id: data.Account
                                    } : null);
                                });
                                self.Account.subscribe(function(data) {
                                    if (viewModelInit) return;
                                    self.Invoice(null);
                                    if (data && data.TaxCode && data.TaxCode.length > 0) {
                                        self.TaxCode({
                                            id: data.TaxCode,
                                            text: data.TaxCodeName
                                        });
                                    }
                                });
                                self.LineTotal = ko.computed(function() {
                                    var qty = self.Qty();
                                    var amount = self.Amount();
                                    var discount = self.Discount();
                                    var discountAmount = self.DiscountAmount();
                                    if (qty == null || isNaN(qty)) {
                                        qty = 1;
                                    };
                                    if (amount == null || isNaN(amount)) {
                                        amount = 0;
                                    };
                                    var total = new Decimal(amount);
                                    var total = total.times(qty);
                                    if (discount != null && !isNaN(discount) && discount != 0 && total.toNumber() != 0) {
                                        total = total.dividedBy(100).times(new Decimal(100).minus(discount));
                                    };
                                    if (discountAmount != null && !isNaN(discountAmount) && discountAmount != 0) {
                                        total = total.minus(discountAmount);
                                    };
                                    return total.toNumber();
                                });
                                self.FormattedLineTotal = ko.computed(function() {
                                    var total = self.LineTotal();
                                    return Globalize.format(total, 'n' + total.getDecimals());
                                });
                            }
                            self.AddLines = function() {
                                self.Lines.push(new TransactionLineViewModel());
                            };
                            self.Add5Lines = function() {
                                for (var i = 0; i < 5; i++) self.Lines.push(new TransactionLineViewModel());
                            };
                            self.Add10Lines = function() {
                                for (var i = 0; i < 10; i++) self.Lines.push(new TransactionLineViewModel());
                            };
                            self.Add20Lines = function() {
                                for (var i = 0; i < 20; i++) self.Lines.push(new TransactionLineViewModel());
                            };
                            self.RemoveLines = function(line) {
                                self.Lines.remove(line);
                            };
                            self.CustomFields = ko.observableDictionary();
                            self.Currency = ko.observable();
                            self.CustomTheme = ko.observable();
                            self.Theme = ko.observable();
                            self.AutomaticReference = ko.observable();
                            self.InventoryLocation = ko.observable();
                            self.Obsolete_IsReversing = ko.observable();
                            self.Obsolete_Notes = ko.observable();
                            self.Key = ko.observable();
                            self.Timestamp = ko.observable();
                        }
                        var viewModelInit = true;
                        var viewModel = new JournalEntryViewModel();
                        viewModel.Date(new Date().getFullYear() + "-" + (new Date().getMonth() + 1) + "-" + new Date().getDate());
                        viewModel.Reference(null);
                        viewModel.Narration(null);
                        viewModel.AddLines();
                        viewModel.Lines()[0].Helper(null);
                        viewModel.Lines()[0].Description(null);
                        viewModel.Lines()[0].Obsolete_EquityReason(null);
                        viewModel.Lines()[0].Obsolete_DisbursementStatus("Uninvoiced");
                        viewModel.AddLines();
                        viewModel.Lines()[1].Helper(null);
                        viewModel.Lines()[1].Description(null);
                        viewModel.Lines()[1].Obsolete_EquityReason(null);
                        viewModel.Lines()[1].Obsolete_DisbursementStatus("Uninvoiced");
                        viewModel.CustomTheme(false);
                        viewModel.AutomaticReference(false);
                        viewModel.Obsolete_IsReversing(false);
                        viewModel.Obsolete_Notes(null);
                        viewModel.Key({
                            id: "00000000-0000-0000-0000-000000000000",
                            text: "00000000000000000000000000000000"
                        });
                        viewModel.Key({
                            id: "00000000-0000-0000-0000-000000000000",
                            text: "00000000000000000000000000000000"
                        });
                        viewModel.Timestamp(0);
                        var viewModelInit = false;
                    </script>
                    <div class="panel panel-default">
                        <div class="panel-heading"><span class="header">Journal Entry</span></div>
                        <div class="panel-body" style="background-color: #f9f9f9; box-shadow: inset 0px 1px 0px #fff; padding: 30px">
                            <table>
                                <tr>
                                    <td>
                                        <div class="form-group"><label>Date</label>
                                            <div class="controls"><input type="text" class="form-control input-sm" style="width: 100px; margin-bottom: 0px; text-align: center" data-bind="datePicker: Date" /></div>
                                        </div>
                                    </td>
                                    <td style="padding-left: 10px">
                                        <div class="form-group"><label>Reference</label>
                                            <div class="input-group"><span class="input-group-addon"><input type="checkbox" data-bind="checked: AutomaticReference" /></span><input type="text" class="form-control input-sm" style="width: 80px; text-align: center" data-bind="value: Reference, visible: !AutomaticReference()" /><input type="text" class="form-control input-sm" style="width: 80px; text-align: center" value="Automatic" readonly="readonly" data-bind="visible: AutomaticReference" /></div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div class="form-group"><label>Narration</label><input type="text" class="form-control input-sm" style="width: 400px" data-bind="textInput: Narration" /></div>
                            <table style="margin-left: -20px">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th style="text-align: left" colspan="3"><label>Account</label></th>
                                        <th style="text-align: left; width: 300px"><label>Description</label></th>
                                        <th style="text-align: center" data-bind="visible: false"><label>Qty</label></th>
                                        <th style="text-align: center"><label>Debit</label></th>
                                        <th style="text-align: center"><label>Credit</label></th>
                                    </tr>
                                </thead>
                                <tbody data-bind="sortable: { data: Lines, options: { handle: '.sortableHandle', cursor: 'move' } }">
                                    <tr>
                                        <td class="sortableHandle" style="cursor: move"><img src="resources/webalys/_16px/interface-30.png" style="margin-right: 4px" data-bind="style: { opacity: ($root.Lines().length > 1) ? '0.25' : '0' }" /></td>
                                        <td style="vertical-align: top; min-width: 200px" data-bind="attr: { colspan: Item() == null && Helper() != null && (Helper().id == '054dfae1-c34a-475e-abde-49e0385ffc9a' || Helper().id == '650a36fe-801f-4031-8d5b-ab422d061fca' || Helper().id == 'f728124f-c6b6-4dad-82c5-22fc0d8d0571' || Helper().id == '059dbfb9-1c80-4043-887f-0fc441099fe0') ? '1' : '3' }">
                                            <div data-bind="visible: Item() != null"></div>
                                            <div data-bind="visible: Item() == null"><select data-bind="select2data: Helper" data-placeholder="Suspense" data-width="100%">
                                                    <option></option>
                                                    <optgroup label="Income">
                                                        <option value="6a53805c-e299-4ed5-977d-489049e19051" data-TaxCode="" data-TaxCodeName="" data-Account="6a53805c-e299-4ed5-977d-489049e19051">Interest received</option>
                                                        <option value="af4ced94-d720-4815-a3a5-a5931bb87ceb" data-TaxCode="" data-TaxCodeName="" data-Account="af4ced94-d720-4815-a3a5-a5931bb87ceb">Sales</option>
                                                    </optgroup>
                                                    <optgroup label="Expenses">
                                                        <option value="f72c1ad1-2e37-4779-accf-7d9accd9cdc4" data-TaxCode="" data-TaxCodeName="" data-Account="f72c1ad1-2e37-4779-accf-7d9accd9cdc4">Accounting fees</option>
                                                        <option value="2b9eb1e9-1c20-4c14-831d-c9317f11138a" data-TaxCode="" data-TaxCodeName="" data-Account="2b9eb1e9-1c20-4c14-831d-c9317f11138a">Advertising and promotion</option>
                                                        <option value="f347c0dc-3a4c-4f00-852e-018815a534dc" data-TaxCode="" data-TaxCodeName="" data-Account="f347c0dc-3a4c-4f00-852e-018815a534dc">Bank charges</option>
                                                        <option value="107a396b-1eb8-4cc4-b045-99e2229bd36b" data-TaxCode="" data-TaxCodeName="" data-Account="107a396b-1eb8-4cc4-b045-99e2229bd36b">Computer equipment</option>
                                                        <option value="c325f9b5-2a4d-4382-9000-a5adfae62dd7" data-TaxCode="" data-TaxCodeName="" data-Account="c325f9b5-2a4d-4382-9000-a5adfae62dd7">Donations</option>
                                                        <option value="caf713d4-a1f0-4d45-bf7b-2845bbf0acba" data-TaxCode="" data-TaxCodeName="" data-Account="caf713d4-a1f0-4d45-bf7b-2845bbf0acba">Electricity</option>
                                                        <option value="7bf1289b-5683-402b-a323-3ddba083159a" data-TaxCode="" data-TaxCodeName="" data-Account="7bf1289b-5683-402b-a323-3ddba083159a">Entertainment</option>
                                                        <option value="3e5f305c-0057-4f01-83d9-d93d4c0a7c39" data-TaxCode="" data-TaxCodeName="" data-Account="3e5f305c-0057-4f01-83d9-d93d4c0a7c39">Legal fees</option>
                                                        <option value="16c7ae7e-2b66-4381-bb32-bb6c77e2249c" data-TaxCode="" data-TaxCodeName="" data-Account="16c7ae7e-2b66-4381-bb32-bb6c77e2249c">Motor vehicle expenses</option>
                                                        <option value="81631509-7bd4-49d2-b736-14f27a1d8054" data-TaxCode="" data-TaxCodeName="" data-Account="81631509-7bd4-49d2-b736-14f27a1d8054">Printing and stationery</option>
                                                        <option value="f9367e42-98f6-41fd-85a8-f483c270d645" data-TaxCode="" data-TaxCodeName="" data-Account="f9367e42-98f6-41fd-85a8-f483c270d645">Rent</option>
                                                        <option value="6fc4effb-3133-479d-a6bd-3fc14241a75e" data-TaxCode="" data-TaxCodeName="" data-Account="6fc4effb-3133-479d-a6bd-3fc14241a75e">Repairs and maintenance</option>
                                                        <option value="6588ef8e-bb7f-4146-aeae-045f700669b3" data-TaxCode="" data-TaxCodeName="" data-Account="6588ef8e-bb7f-4146-aeae-045f700669b3">Telephone</option>
                                                    </optgroup>
                                                    <optgroup label="Assets">
                                                        <option value="059dbfb9-1c80-4043-887f-0fc441099fe0" data-TaxCode="" data-TaxCodeName="" data-Account="059dbfb9-1c80-4043-887f-0fc441099fe0" data-currency="">Billable expenses</option>
                                                    </optgroup>
                                                    <optgroup label="Liabilities"></optgroup>
                                                    <optgroup label="Equity">
                                                        <option value="74dfd025-d68e-4a99-9c78-5d43e17c0e09" data-TaxCode="" data-TaxCodeName="" data-Account="74dfd025-d68e-4a99-9c78-5d43e17c0e09" data-currency="">Retained earnings</option>
                                                    </optgroup>
                                                </select></div>
                                        </td><!-- ko if: (Item() == null && Helper() != null && Helper().id == '059dbfb9-1c80-4043-887f-0fc441099fe0') -->
                                        <td style="vertical-align: top" data-bind="attr: { colspan: (BillableExpenseCustomer() == null ? '2' : '1') }"><input type="hidden" data-bind="select2data: BillableExpenseCustomer" data-placeholder="Customer" data-width="100%" data-autocomplete="/customer-autocomplete?FileID=UFQuIEJBQw" /></td><!-- /ko -->
                                        <!-- ko if: (Item() == null && Helper() != null && Helper().id == '059dbfb9-1c80-4043-887f-0fc441099fe0' && BillableExpenseCustomer() != null) -->
                                        <td style="vertical-align: top">
                                            <div><input type="hidden" style="width: 100%" data-bind="select2data: BillableExpenseSalesInvoice, attr: { 'data-autocomplete-filterby': BillableExpenseCustomer().id }" data-autocomplete="/sales-invoice-autocomplete?FileID=UFQuIEJBQw" data-placeholder="Uninvoiced" /></div>
                                        </td><!-- /ko -->
                                        <!-- ko if: (Item() == null && Helper() != null && Helper().id == 'f728124f-c6b6-4dad-82c5-22fc0d8d0571') -->
                                        <td style="vertical-align: top" colspan="2"><input type="hidden" data-bind="select2data: Account" data-placeholder="Payer" data-width="100%" data-autocomplete="/expense-claims-payer-autocomplete?FileID=UFQuIEJBQw" /></td><!-- /ko -->
                                        <td style="vertical-align: top"><textarea class="form-control input-sm" style="width: 300px; margin-bottom: 0px; resize:none" rows="1" data-bind="valueWithAutosize: Description" spellcheck="true"></textarea></td>
                                        <td style="vertical-align: top" data-bind="visible: false"><input type="text" class="regular form-control input-sm" style="width: 80px; text-align: center; margin-bottom: 0px; line-height: 14px" data-bind="decimalInput: Qty, visible: false" /><input type="text" class="regular form-control input-sm" style="width: 80px; margin-bottom: 0px" readonly="readonly" data-bind="visible: !false" /></td>
                                        <td style="vertical-align: top"><input type="text" class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px" data-bind="decimalInput: Debit" /></td>
                                        <td style="vertical-align: top">
                                            <div class="input-group" style="margin-bottom: 0px"><input type="text" class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px" data-bind="decimalInput: Credit" /><span class="input-group-addon input-sm" style="vertical-align: top; line-height: 14px; color: #999; text-shadow: 1px 1px 0px #fff" data-bind="text: function() { try { return $root.Currency().currency; } catch(error) { return ''; } }()"></span></div>
                                        </td>
                                        <td style="vertical-align: top; padding-left: 5px; padding-top: 5px"><a href="#" class="close" style="font-size: 24px; float: none" data-bind="click: $root.RemoveLines, visible: $root.Lines().length > 1">&times;</a></td>
                                        <td style="vertical-align: top; padding-left: 10px" colspan="2" data-bind="if: (Account() != null && Account().currency != null && Account().currency != function() { try { return $root.Currency().currency; } catch(error) { return ''; } }())">
                                            <div class="input-group" style="margin-bottom: 0px"><input type="text" class="regular form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; line-height: 14px" placeholder="Optional" data-bind="decimalInput: ProposedAccountAmount" /><span class="input-group-addon input-sm" style="vertical-align: top; line-height: 14px; color: #999; text-shadow: 1px 1px 0px #fff; width: 40px" data-bind="text: Account().currency"></span></div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tr>
                                    <td></td>
                                    <td colspan="3"></td>
                                    <td></td>
                                    <td data-bind="visible: false"></td>
                                    <td><input type="text" class="form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; font-weight: bold" readonly="readonly" data-bind="value: function() { var total = new Decimal(0); for (i = 0; i < $root.Lines().length; i++) { var debit = $root.Lines()[i].Debit(); if (!isNaN(debit)) total = total.plus(debit); } total = total.toNumber(); return Globalize.format(total,'N'+total.getDecimals()); }()" /></td>
                                    <td>
                                        <div class="input-group" style="margin-bottom: 0px"><input type="text" class="form-control input-sm" style="width: 100px; text-align: right; margin-bottom: 0px; font-weight: bold" readonly="readonly" data-bind="value: function() { var total = new Decimal(0); for (i = 0; i < $root.Lines().length; i++) { var credit = $root.Lines()[i].Credit(); if (!isNaN(credit)) total = total.plus(credit); } total = total.toNumber(); return Globalize.format(total, 'N'+total.getDecimals()); }()" /><span class="input-group-addon input-sm" style="color: #999; text-shadow: 1px 1px 0px #fff" data-bind="text: function() { try { return Currency().currency; } catch(error) { return ''; } }()"></span></div>
                                    </td>
                                    <td><span style="margin-left: 5px; color: red; font-weight: bold; font-size: 12px" data-bind="text: function() { var total = new Decimal(0); for (i = 0; i < $root.Lines().length; i++) { var debit = $root.Lines()[i].Debit(); var credit = $root.Lines()[i].Credit(); if (!isNaN(debit)) total = total.plus(debit); if (!isNaN(credit)) total = total.minus(credit); } total = total.toNumber(); return Globalize.format(total, 'N'+total.getDecimals()); }()"></span></td>
                                </tr>
                            </table>
                            <div class="btn-group" style="margin-top: -50px; margin-left: 3px"><button class="btn btn-default btn-xs" data-bind="click: AddLines">Add line</button><button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" style="min-width: 0px"><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#" data-bind="click: AddLines">Add line</a></li>
                                    <li><a href="#" data-bind="click: Add5Lines">Add line (5&times;)</a></li>
                                    <li><a href="#" data-bind="click: Add10Lines">Add line (10&times;)</a></li>
                                    <li><a href="#" data-bind="click: Add20Lines">Add line (20&times;)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-footer" style="padding: 15px 30px"><img src="resources/ajax-loader.gif" id="ajaxIndicator" style="display: none; margin-right: 10px" /><input type="button" id="btnCreate" class="btn btn-primary" style="font-weight: bold" value="Create" />&nbsp;&nbsp;<input type="button" id="btnCreateAndAddAnother" class="btn btn-default" style="font-weight: bold; background-color: #f5f5f5" value="Create & add another" /></div>
                    </div>
                    <script type="text/javascript">
                        ko.bindingHandlers.select2data = {
                            init: function(element, valueAccessor, allBindingsAccessor) {

                                var select2options = {};
                                if ($(element).is('select')) {
                                    select2options.width = $(element).attr('data-width');
                                    select2options.allowClear = ($(element).attr('data-placeholder'));
                                    select2options.formatNoMatches = function() {
                                        return "No matches found";
                                    };
                                    if (select2options.allowClear) select2options.placeholder = $(element).attr('data-placeholder');
                                }

                                if ($(element).is('input') && $(element).attr('data-autocomplete')) {
                                    var select2options = {
                                        allowClear: true,
                                        placeholder: ' ',
                                        /*formatResult: function(item) { return item.text+(item.description ? item.description : null); },*/
                                        formatNoMatches: function() {
                                            return "No matches found";
                                        },
                                        formatSearching: function() {
                                            return "Searching ...";
                                        },
                                        ajax: {
                                            url: $(element).attr('data-autocomplete'),
                                            dataType: 'json',
                                            width: 'copy',
                                            data: function(term, page) {
                                                return {
                                                    Term: term,
                                                    Page: page,
                                                    FilterBy: $(element).attr('data-autocomplete-filterby')
                                                }
                                            },
                                            results: function(data, page) {
                                                return data;
                                            }
                                        }
                                    };
                                    select2options.width = $(element).attr('data-width');
                                }
                                $(element).select2(select2options);
                                var tr = $(element).select2('container').closest('tr');
                                if (tr.attr('data-select2height')) {
                                    $(element).select2('container').find('.select2-choice').height(tr.attr('data-select2height'));
                                }

                                ko.utils.registerEventHandler(element, 'change', function() {
                                    var observable = valueAccessor();
                                    var data = $(element).select2('data');
                                    if (data != null) {
                                        data = jQuery.extend(true, {}, data);
                                        if ($(element).is('select')) {
                                            data.TaxCode = $(element).find('option:selected').attr('data-TaxCode');
                                            data.TaxCodeName = $(element).find('option:selected').attr('data-TaxCodeName');
                                            data.Account = $(element).find('option:selected').attr('data-Account');
                                            data.currency = $(element).find('option:selected').attr('data-currency');
                                            data.type = $(element).find('option:selected').attr('data-type');
                                        }
                                        delete data.element;
                                        delete data.disabled;
                                        delete data.locked;
                                    }
                                    observable(data);
                                });

                                ko.utils.domNodeDisposal.addDisposeCallback(element, function() {
                                    $(element).select2('destroy');
                                });
                            },
                            update: function(element, valueAccessor) {
                                var data = ko.utils.unwrapObservable(valueAccessor());
                                if ($(element).is('input')) {
                                    $(element).select2('data', data);
                                }
                                if ($(element).is('select')) {
                                    if (data == null) $(element).select2('val', '');
                                    else $(element).select2('val', data.id);
                                }
                            }
                        };
                        ko.bindingHandlers.select2text = {
                            init: function(element, valueAccessor, allBindingsAccessor) {

                                var select2options = {};
                                select2options.width = $(element).attr('data-width');
                                select2options.allowClear = ($(element).attr('data-placeholder'));
                                select2options.formatNoMatches = function() {
                                    return "No matches found";
                                };
                                if (select2options.allowClear) select2options.placeholder = $(element).attr('data-placeholder');

                                if ($(element).attr('data-autocomplete')) {
                                    var select2options = {
                                        allowClear: true,
                                        placeholder: ' ',
                                        formatNoMatches: function() {
                                            return "No matches found";
                                        },
                                        formatSearching: function() {
                                            return "Searching ...";
                                        },
                                        ajax: {
                                            url: $(element).attr('data-autocomplete'),
                                            dataType: 'json',
                                            width: 'copy',
                                            data: function(term, page) {
                                                return {
                                                    Term: term,
                                                    Page: page,
                                                    FilterBy: $(element).attr('data-autocomplete-filterby')
                                                }
                                            },
                                            results: function(data, page) {
                                                return data;
                                            }
                                        }
                                    };
                                    select2options.width = $(element).attr('data-width');
                                }
                                $(element).select2(select2options);
                                var tr = $(element).select2('container').closest('tr');
                                if (tr.attr('data-select2height')) {
                                    $(element).select2('container').find('.select2-choice').height(tr.attr('data-select2height'));
                                }

                                ko.utils.registerEventHandler(element, 'change', function() {
                                    var observable = valueAccessor();
                                    var data = $(element).select2('data');
                                    if (data != null) {
                                        observable(data.text);
                                    } else {
                                        observable(null);
                                    }
                                });

                                ko.utils.domNodeDisposal.addDisposeCallback(element, function() {
                                    $(element).select2('destroy');
                                });
                            },
                            update: function(element, valueAccessor) {
                                var data = ko.utils.unwrapObservable(valueAccessor());
                                if (data == null) $(element).select2('data', null);
                                else $(element).select2('data', {
                                    text: data
                                });
                            }
                        };
                        ko.bindingHandlers.select2 = {
                            init: function(element, valueAccessor, allBindingsAccessor) {

                                var select2options = {};
                                if ($(element).is('select')) {
                                    select2options.dropdownAutoWidth = true;
                                    select2options.width = $(element).attr('data-width');
                                    select2options.allowClear = ($(element).attr('data-placeholder'));
                                    select2options.formatNoMatches = function() {
                                        return "No matches found";
                                    };
                                    if (select2options.allowClear) select2options.placeholder = $(element).attr('data-placeholder');
                                }

                                $(element).select2(select2options);

                                ko.utils.domNodeDisposal.addDisposeCallback(element, function() {
                                    $(element).select2('destroy');
                                });
                            },
                        };
                        ko.bindingHandlers.fadeVisible = {
                            init: function(element, valueAccessor) {
                                var value = valueAccessor();
                                $(element).toggle(ko.unwrap(value));
                            },
                            update: function(element, valueAccessor) {
                                var value = valueAccessor();
                                ko.unwrap(value) ? $(element).slideDown() : $(element).slideUp();
                            }
                        };
                        ko.bindingHandlers.typeahead = {
                            init: function(element, valueAccessor, allBindingsAccessor) {
                                var value = valueAccessor();
                                var allBindings = allBindingsAccessor();
                                $(element).typeahead({
                                    remote: {
                                        url: ko.unwrap(value) + '&query=%QUERY'
                                    }
                                });
                                if (allBindings.value) {
                                    $(element).on('typeahead:selected', function(object, datum) {
                                        allBindings.value(datum.value);
                                    });
                                }
                            }
                        }; // Prevent the backspace key from navigating back.
                        $(document).unbind('keydown').bind('keydown', function(event) {
                            var doPrevent = false;
                            if (event.keyCode === 8) {
                                var d = event.srcElement || event.target;
                                if ((d.tagName.toUpperCase() === 'INPUT' &&
                                        (
                                            d.type.toUpperCase() === 'TEXT' ||
                                            d.type.toUpperCase() === 'PASSWORD' ||
                                            d.type.toUpperCase() === 'FILE' ||
                                            d.type.toUpperCase() === 'EMAIL' ||
                                            d.type.toUpperCase() === 'SEARCH' ||
                                            d.type.toUpperCase() === 'DATE')
                                    ) ||
                                    d.tagName.toUpperCase() === 'TEXTAREA') {
                                    doPrevent = d.readOnly || d.disabled;
                                } else {
                                    doPrevent = true;
                                }
                            }

                            if (doPrevent) {
                                event.preventDefault();
                            }
                        });
                        ko.bindingHandlers.datePicker = {
                            init: function(element, valueAccessor, allBindingsAccessor) {
                                var value = valueAccessor();
                                $(element).datepicker({
                                    todayBtn: 'linked',
                                    todayHighlight: true,
                                    weekStart: 1,
                                    keyboardNavigation: false,
                                    assumeNearbyYear: true,
                                    autoclose: true,
                                    format: 'mm/dd/yyyy'
                                });
                                var value2 = ko.utils.unwrapObservable(value);
                                if (value2) {
                                    var parts = value2.split('-');
                                    var day = parseInt(parts[2]);
                                    var month = parseInt(parts[1]) - 1;
                                    var year = parseInt(parts[0]);
                                    $(element).datepicker('update', new Date(year, month, day));
                                }
                                $(element).datepicker().on('changeDate', function(e) {
                                    var day = e.date.getDate();
                                    var month = e.date.getMonth() + 1;
                                    var year = e.date.getFullYear();
                                    if (year > 9999) {
                                        value(null);
                                        $(element).parent().addClass('has-error');
                                    } else {
                                        value(year + '-' + month + '-' + day);
                                        $(element).parent().removeClass('has-error');
                                    }
                                });
                                $(element).datepicker().on('blur', function() {
                                    /* https://github.com/uxsolutions/bootstrap-datepicker/issues/2151 */
                                    var date = $(element).datepicker('getDate');
                                    var day = date.getDate();
                                    var month = date.getMonth() + 1;
                                    var year = date.getFullYear();
                                    if (year > 9999) {
                                        value(null);
                                        $(element).parent().addClass('has-error');
                                    } else {
                                        value(year + '-' + month + '-' + day);
                                        $(element).parent().removeClass('has-error');
                                    }
                                });
                                $(element).datepicker().on('clearDate', function(e) {
                                    value(null);
                                    $(element).parent().removeClass('has-error');
                                });
                            }
                        };

                        function isMathExpression(s) {
                            if (s && s.length > 0) {
                                if (s.includes('*')) return true;
                                if (s.includes('/')) return true;
                                if (s.slice(1).includes('-')) return true;
                                if (s.slice(1).includes('+')) return true;
                            }
                            return false;
                        }
                        ko.bindingHandlers.decimalInput = {
                            init: function(element, valueAccessor, allBindingsAccessor) {
                                var value = valueAccessor();
                                var value2 = ko.utils.unwrapObservable(value);
                                if (value2 != null && !isNaN(value2)) $(element).val(value2.toString().replace('.', '.'));
                                $(element).on('input', function() {
                                    var text = $(element).val() || '';
                                    text = text.replaceAll(",", "");
                                    text = text.replaceAll(".", ".");
                                    text = text.replaceAll(' ', '');
                                    if (text.length == 0) {
                                        value(undefined);
                                    } else {
                                        try {
                                            var parsedNumber = mexp.eval(text);
                                        } catch (e) {}
                                        if (parsedNumber == null || isNaN(parsedNumber)) {
                                            value(undefined);
                                            $(element).parent().addClass('has-error');
                                        } else {
                                            value((parsedNumber.toPrecision(12) * 1));
                                            //if (isMathExpression(text)) value((parsedNumber.toPrecision(12)*1).toString());
                                            //else value(text);
                                            $(element).parent().removeClass('has-error');
                                        }
                                    }
                                })
                            },
                            update: function(element, valueAccessor) {
                                var value = ko.utils.unwrapObservable(valueAccessor());
                                if ($(element).is(':focus')) return;
                                if (value == null || isNaN(value)) $(element).val('');
                                else $(element).val(value.toString().replaceAll('.', '.'));
                            }
                        };
                        ko.bindingHandlers.integerInput = {
                            init: function(element, valueAccessor, allBindingsAccessor) {
                                var value = valueAccessor();
                                var value2 = ko.utils.unwrapObservable(value);
                                if (value2 != null && !isNaN(value2)) $(element).val(value2.toString());
                                $(element).on('input', function() {
                                    var text = $(element).val() || '';
                                    if (text.length == 0) {
                                        value(undefined);
                                    } else {
                                        var parsedNumber = parseInt(text);
                                        if (parsedNumber == null || isNaN(parsedNumber)) {
                                            value(undefined);
                                            $(element).parent().addClass('has-error');
                                        } else {
                                            value(parsedNumber);
                                            $(element).parent().removeClass('has-error');
                                        }
                                    }
                                })
                            },
                            update: function(element, valueAccessor) {
                                var value = ko.utils.unwrapObservable(valueAccessor());
                                if ($(element).is(':focus')) return;
                                if (value == null || isNaN(value)) $(element).val('');
                                else $(element).val(value.toString());
                            }
                        };
                        ko.bindingHandlers.valueWithAutosize = {
                            init: function(element, valueAccessor, allBindingsAccessor) {
                                var value = valueAccessor();
                                var value2 = ko.utils.unwrapObservable(valueAccessor());
                                autosize($(element));
                                $(element).on('autosize:resized', function() {
                                    $(this).data('height', $(this).height());
                                    var heights = $.map($(this).parent().parent().find('textarea'), function(val, i) {
                                        return $(val).data('height')
                                    });
                                    var height = Math.max.apply(Math, heights) + 12;
                                    var tr = $(this).parent().parent();
                                    tr.find('textarea').css('min-height', height + 'px');
                                    tr.find('input[type=text].regular').css('height', height + 'px');
                                    tr.find('input[type=text].regular').css('padding-bottom', (height - 24) + 'px');
                                    tr.attr('data-select2height', height);
                                    tr.find('.select2-choice').css('height', height + 'px');
                                });
                                $(element).val(value2);
                                $(element).on('input', function() {
                                    var text = $(element).val();
                                    value(text);
                                });
                            },
                            update: function(element, valueAccessor) {
                                var value = ko.utils.unwrapObservable(valueAccessor());
                                if ($(element).val() != value) $(element).val(value);
                                autosize.update($(element));
                            }
                        };
                    </script>
                    <script type="text/javascript">
                        $(function() {

                            ko.applyBindings(viewModel);

                            $('.ajax-typeahead').on('typeahead:selected', function(object, datum) {
                                console.log(datum.value);
                            });

                            $('.tt-query').css('background-color', '#fff');
                            $('span[title]').tooltip();
                            $('textarea.autosize').trigger('autosize.resize');
                            $('#btnCreate').click(function() {
                                $('#ajaxIndicator').show();
                                $('#btnCreate').attr('disabled', 'disabled');
                                $.ajax({
                                    type: 'POST',
                                    url: "/journal-entry-form?FileID=UFQuIEJBQw&Referrer=5e1cb1da-1e60-4910-8562-43b69113c9c3",
                                    data: ko.toJSON(viewModel),
                                    contentType: 'application/json; charset=utf-8',
                                    success: function(data) {
                                        var referrer = "/journal-entry-view?FileID=UFQuIEJBQw&Referrer=5e1cb1da-1e60-4910-8562-43b69113c9c3";
                                        if (true) referrer = referrer + '&Key=' + data;
                                        $(location).attr('href', referrer);
                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                        $('#ajaxIndicator').hide();
                                        $('#btnCreate').removeAttr('disabled');
                                        alert(XMLHttpRequest.responseText);
                                    }
                                });
                            });

                            $('#btnCreateAndAddAnother').click(function() {
                                $('#ajaxIndicator').show();
                                $('#btnCreateAndAddAnother').attr('disabled', 'disabled');
                                $.ajax({
                                    type: 'POST',
                                    url: "/journal-entry-form?FileID=UFQuIEJBQw&Referrer=5e1cb1da-1e60-4910-8562-43b69113c9c3",
                                    data: ko.toJSON(viewModel),
                                    contentType: 'application/json; charset=utf-8',
                                    success: function(data) {
                                        $(location).attr('href', "/journal-entry-form?FileID=UFQuIEJBQw&Referrer=5e1cb1da-1e60-4910-8562-43b69113c9c3");
                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                        $('#ajaxIndicator').hide();
                                        $('#btnCreateAndAddAnother').removeAttr('disabled');
                                        alert(XMLHttpRequest.responseText);
                                    }
                                });
                            });

                            $('#btnUpdate').click(function() {
                                $('#ajaxIndicator').show();
                                $('#btnUpdate').attr('disabled', 'disabled');
                                $('#btnDelete').attr('disabled', 'disabled');
                                $.ajax({
                                    type: 'POST',
                                    url: "/journal-entry-form?FileID=UFQuIEJBQw&Referrer=5e1cb1da-1e60-4910-8562-43b69113c9c3",
                                    data: ko.toJSON(viewModel),
                                    contentType: 'application/json; charset=utf-8',
                                    success: function(data) {
                                        $(location).attr('href', "/journal-entries?Skip=0&Take=50&FileID=UFQuIEJBQw");
                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                        $('#ajaxIndicator').hide();
                                        $('#btnUpdate').removeAttr('disabled');
                                        $('#btnDelete').removeAttr('disabled');
                                        alert(XMLHttpRequest.responseText);
                                    }
                                });
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        var help = true;

                        function toggleHelp() {

                            help = !help;
                            document.cookie = 'help=' + help.toString();

                            if (help) {
                                document.getElementById('help-btn').style.color = '#999';
                                document.getElementById('btn-image-off').style.display = 'none';
                                document.getElementById('btn-image-on').style.display = 'inline';
                                document.getElementById('help-links').style.display = 'block';
                                document.getElementById('help-tag').style.display = 'inline';
                                document.getElementById('help-placeholder').style.display = 'none';
                            } else {
                                document.getElementById('help-btn').style.color = '#ccc';
                                document.getElementById('btn-image-off').style.display = 'inline';
                                document.getElementById('btn-image-on').style.display = 'none';
                                document.getElementById('help-links').style.display = 'none';
                                document.getElementById('help-tag').style.display = 'none';
                                document.getElementById('help-placeholder').style.display = 'block';
                            }

                        }
                    </script>
                    <div class="print-display-none" style="font-size: 12px; padding: 10px; text-shadow: 1px 1px 0px #fff"><button id="help-btn" style="font-weight: bold; font-size: 14px; text-shadow: 1px 1px 0px #fff; border: none; background-color: transparent; padding: 0px; color: #999" onclick="javascript:toggleHelp();">Learn how to …&nbsp;&nbsp;<img src="resources/toggle-on.png" id="btn-image-on" /><img src="resources/toggle-off.png" id="btn-image-off" style="display: none" /></button><span id="help-tag" style="border: 1px solid #ddd; color: #ddd; font-size: 12px; padding: 3px 6px; border-radius: 10px; margin-left: 10px">journal-entry-form</span>
                        <div id="help-placeholder" style="color: #ccc; padding-top: 5px; font-size: 12px; display: none">12 guides available</div>
                        <div id="help-links" style="padding-top: 5px; line-height: 200%">
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/9820?utm_source=app" target="_blank">Make journal entries</a></div>
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/20615?utm_source=app" target="_blank">Write on inventory</a></div>
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/9655?utm_source=app" target="_blank">Offset simultaneous sales and purchase invoices</a></div>
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/14465?utm_source=app" target="_blank">Write off bad debts</a></div>
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/5503?utm_source=app" target="_blank">Record billable expenses</a></div>
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/27559?utm_source=app" target="_blank">Define foreign currencies</a></div>
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/18764?utm_source=app" target="_blank">Use reference numbers</a></div>
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/18222?utm_source=app" target="_blank">Perform calculations in number fields</a></div>
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/9158?utm_source=app" target="_blank">Use multiple currencies</a></div>
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/8941?utm_source=app" target="_blank">Use custom fields</a></div>
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/14059?utm_source=app" target="_blank">Set form defaults</a></div>
                            <div class="print-display-none" style="font-weight: bold; font-size: 13px; margin: 5px; color: #ccc; text-shadow: 1px 1px 0px #fff"><img src="resources/caret-right.png" style="margin-right: 10px; opacity: 0.5" /><a href="https://www.manager.io/guides/13392?utm_source=app" target="_blank">Use HTML code in fields</a></div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <script type="text/javascript">
            function showLanguages() {
                var elements = document.getElementsByClassName('hideOnDefault');
                for (var i = 0; i < elements.length; i++) {
                    elements[i].style.display = 'inline-block';
                }
                document.getElementById('language-expand-link').style.display = 'none';
            }
        </script>
        <div class="print-display-none" style="line-height: 200%; width: 600px; margin: 20px auto; margin-bottom: 10px; text-align: center; font-size: 14px; color: #ccc; text-shadow: 1px 1px 0px #fff">
            <form action="/switch-language" method="POST"><input type="hidden" name="Location" value="/journal-entry-form?FileID=UFQuIEJBQw&amp;Referrer=5e1cb1da-1e60-4910-8562-43b69113c9c3" /><span class="btn" style="color: #999; font-weight: bold; display: inline-block; background-color: transparent" title="English">English</span><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Afrikaans" title="Afrikaans" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Azərbaycan­ılı" title="Azeri" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Bahasa Indonesia" title="Indonesian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Bahasa Melayu" title="Malay" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="bosanski" title="Bosnian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Català" title="Catalan" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="čeština" title="Czech" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Chinese, China" title="Chinese, China" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Chinese, Hong Kong" title="Chinese, Hong Kong" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Chinese, Taiwan" title="Chinese, Taiwan" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="dansk" title="Danish" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Deutsch" title="German" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="eesti" title="Estonian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Elsässisch" title="Swiss German" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="español" title="Spanish" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="français" title="French" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="galego" title="Galician" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Haitian" title="Haitian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="hrvatski" title="Croatian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="íslenska" title="Icelandic" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="italiano" title="Italian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Kiswahili" title="Swahili" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="lietuvių" title="Lithuanian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="magyar" title="Hungarian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Nederlands" title="Dutch" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="norsk (bokmål)" title="Norwegian Bokmål" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="O'zbekcha" title="Uzbek" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="polski" title="Polish" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="português" title="Portuguese" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="română" title="Romanian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Shqip" title="Albanian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="slovenčina" title="Slovak" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="slovenščina" title="Slovenian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Soomaali" title="Somali" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="srpski" title="Serbian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="suomi" title="Finnish" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="svenska" title="Swedish" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Tiếng Việt" title="Vietnamese" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Türkçe" title="Turkish" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Ελληνικά" title="Greek" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Беларуская" title="Belarusian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="български" title="Bulgarian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="македонски јазик" title="Macedonian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="Монгол хэл" title="Mongolian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="русский" title="Russian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="українська" title="Ukrainian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="ქართული" title="Georgian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="עברית" title="Hebrew" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="اُردو" title="Urdu" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="العربية" title="Arabic" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="فارسى" title="Persian" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="کوردیی ناوەڕاست" title="Kurdish" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="ދިވެހިބަސް" title="Divehi" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="नेपाली" title="Nepali" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="हिंदी" title="Hindi" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="বাংলা" title="Bengali" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="ગુજરાતી" title="Gujarati" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="தமிழ்" title="Tamil" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="తెలుగు" title="Telugu" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="മലയാളം" title="Malayalam" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="සිංහල" title="Sinhala" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="ไทย" title="Thai" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="ဗမာ" title="Burmese" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="한국어" title="Korean" /><input type="submit" class="btn btn-link hideOnDefault" style="display: none" name="Language" value="日本語" title="Japanese" />
                <style>
                    a#language-expand-link {
                        color: #ccc;
                        padding: 3px 6px;
                        margin-left: 5px;
                        border: 1px solid #ccc;
                        border-radius: 3px
                    }

                    a#language-expand-link:hover {
                        text-decoration: none;
                        background-color: #fff;
                        color: #333;
                        border: 1px solid #999;
                        text-shadow: none
                    }
                </style><a href="javascript:showLanguages()" id="language-expand-link">+</a>
            </form>
        </div>
        <div class="print-display-none" style="font-weight: bold; text-align: center; font-size: 14px; margin: 10px; color: #ccc; text-shadow: 1px 1px 0px #fff">20.7.13</div>
    </div>
</body>

</html>