<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
@php
    $logo= asset(\Storage::url('logo/'));
    $company_logo = Utility::getValByName('company_logo');
@endphp
<head>
    <title>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        #outlook a {
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass * {
            line-height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }
    </style>
    <style type="text/css">
        @media only screen and (max-width: 480px) {
            @-ms-viewport {
                width: 320px;
            }

            @viewport {
                width: 320px;
            }
        }
    </style>
    <style type="text/css">
        .outlook-group-fix {
            width: 100% !important;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet" type="text/css">
    <style type="text/css">
        @media only screen and (min-width: 480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }
        }
    </style>
    <style type="text/css">
        [owa] .mj-column-per-100 {
            width: 100% !important;
            max-width: 100%;
        }
    </style>
    <style type="text/css">
        @media only screen and (max-width: 480px) {
            table.full-width-mobile {
                width: 100% !important;
            }

            td.full-width-mobile {
                width: auto !important;
            }
        }
    </style>
</head>
<body style="background-color:#f8f8f8;">
<div style="background-color:#f8f8f8;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600">
        <tr>
            <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
                        <tbody>
                        <tr>
                            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-left:0px;padding-right:0px;padding-top:0px;text-align:center;vertical-align:top;">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="" style="vertical-align:top;width:600px;">
                                            <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                                    <tr>
                                                        <td style="font-size:0px;padding:10px 25px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px;word-break:break-word;">
                                                            <p style="border-top:solid 7px #255ff7;font-size:1;margin:0px auto;width:100%;">
                                                            </p>

                                                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 7px #255ff7;font-size:1;margin:0px auto;width:600px;" role="presentation" width="600px">
                                                                <tr>
                                                                    <td style="height:0;line-height:0;">
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
                                                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                                                <tbody>
                                                                <tr>
                                                                    <td style="width:110px;">
                                                                        <img alt="" height="auto" src="{{$logo . '/' . isset($company_logo) && !empty($company_logo) ? $company_logo : 'logo.png'}}" style="border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;" title="" width="110"/>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600">
        <tr>
            <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
                <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
                        <tbody>
                        <tr>
                            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:70px;padding-top:30px;text-align:center;vertical-align:top;">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="" style="vertical-align:top;width:600px;">
                                            <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                                                            <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                                                                <p style=" line-height:32px"><b style="font-weight:700">{{__('Subject :').' '.__('Product/Service invoice (').' '.$invoice->invoice.' '.__(').')}}</b></p>
                                                                <p style="line-height:32px"><b style="font-weight:700">{{__('Hi').' '.$invoice->name.','}}</b></p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                                                            <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                                                                <p style="margin: 10px 0;">{{__('Hope this email ﬁnds you well! Please see attached invoice number').' '.$invoice->invoice.'.'}}</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                                                            <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                                                                <p style="margin: 10px 0; text-align: center;">{{__(' simply click on the button below ')}}: </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;padding-top:20px;padding-bottom:20px;word-break:break-word;">
                                                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                                                                <tr>
                                                                    <td align="center" bgcolor="#255ff7" role="presentation" style="border:none;border-radius:100px;cursor:auto;padding:15px 25px 15px 25px;background:#255ff7;" valign="middle">
                                                                        <a href="{{$invoice->url}}" style="background:#255ff7;color:#ffffff;font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;" target="_blank">
                                                                            <b style="font-weight:700"><b style="font-weight:700">{{__('Invoice')}}</b></b>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                                                            <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                                                                <p style="margin: 10px 0;"><i style=":normal">{{__('Feel free to reach out if you have any questions.')}}</i></p>
                                                                <p style="margin: 10px 0;"><i style=":normal">{{__('Thank you for your business!')}}</i></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                                                            <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                                                                <p style="margin: 10px 0;"><i style=":normal"><b style="font-weight:700">{{__('Regards,')}}</b></i></p>
                                                                <p style="margin: 10px 0;"><i style=":normal"><b style="font-weight:700">{{env('APP_NAME')}}</b></i></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
