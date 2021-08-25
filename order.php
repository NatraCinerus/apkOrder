<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Biru Software - Order Produk">
    <meta name="author" content="Usman Arif (usman@biru.software)">
    <title>Biru Software - Order Mail</title>

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">
    
    <script type="text/javascript">
    function delayedRedirect(){
        window.location = "../index.php"
    }
    </script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 10000)" style="background-color:#fff;">
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'koneksi.php';

$mail = new PHPMailer(true);

try {

    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                           // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'order@biru.software';                             // SMTP username
    $mail->Password   = '';                             // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
   // $mail->SMTPDebug  = 1;

    $tanggal = date("d-m-Y H:i:s");
    //Recipients - main edits
    $mail->setFrom('order@biru.software', 'Order Biru, Inc.');                    // Email Address and Name FROM
    $mail->addAddress('marketing@biru.software', 'Marketing Biru, Inc.');                             // Email Address and Name TO - Name is optional
    $mail->addReplyTo('order@biru.software', 'Order Biru, Inc.');              // Email Address and Name NOREPLY
    $mail->isHTML(true);                                                       
    $mail->Subject = "Order " . $_POST['nama_produk'] . " " .  $tanggal;                                     // Email Subject

    //The email body message
    $pesanwa = "";
    if ($_POST["wa"]) $pesanwa = "atau WhatsApp dinomor <strong>" .  $_POST["wa"] . "</strong> ";

    $message = '
        <style type="text/css">

        /*Basics*/
        body {font-family: Arial, Helvetica, sans-serif;margin:0px !important; padding:0px !important; display:block !important; min-width:100% !important; width:100% !important; -webkit-text-size-adjust:none;}
        table {border-spacing:0; mso-table-lspace:0pt; mso-table-rspace:0pt;}
        table td {border-collapse: collapse;mso-line-height-rule:exactly;}
        td img {-ms-interpolation-mode:bicubic; width:auto; max-width:auto; height:auto; margin:auto; display:block!important; border:0px;}
        td p {margin:0; padding:0;}
        td div {margin:0; padding:0;}
        td a {text-decoration:none; color: inherit;} 
        /*Outlook*/
        .ExternalClass {width: 100%;}
        .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div {line-height:inherit;}
        .ReadMsgBody {width:100%; background-color: #ffffff;}
        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {color:inherit !important; text-decoration:none !important; font-size:inherit !important; font-family:inherit !important; font-weight:inherit !important; line-height:inherit !important;} 
        /*Gmail blue links*/
        u + #body a {color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit;}
        /*Buttons fix*/
        .undoreset a, .undoreset a:hover {text-decoration:none !important;}
        .yshortcuts a {border-bottom:none !important;}
        .ios-footer a {color:#aaaaaa !important;text-decoration:none;}
        /*Responsive*/
        @media screen and (max-width: 639px) {
        table.row {width: 100%!important;max-width: 100%!important;}
        td.row {width: 100%!important;max-width: 100%!important;}
        .img-responsive img {width:100%!important;max-width: 100%!important;height: auto!important;margin: auto;}
        .center-float {float: none!important;margin:auto!important;}
        .center-text{text-align: center!important;}
        .container-padding {width: 100%!important;padding-left: 15px!important;padding-right: 15px!important;}
        .container-padding10 {width: 100%!important;padding-left: 10px!important;padding-right: 10px!important;}
        .container-padding25 {width: 100%!important;padding-left: 25px!important;padding-right: 25px!important;}
        .hide-mobile {display: none!important;}
        .menu-container {text-align: center !important;}
        .autoheight {height: auto!important;}
        .m-padding-10 {margin: 10px 0!important;}
        .m-padding-15 {margin: 15px 0!important;}
        .m-padding-20 {margin: 20px 0!important;}
        .m-padding-30 {margin: 30px 0!important;}
        .m-padding-40 {margin: 40px 0!important;}
        .m-padding-50 {margin: 50px 0!important;}
        .m-padding-60 {margin: 60px 0!important;}
        .m-padding-top10 {margin: 30px 0 0 0!important;}
        .m-padding-top15 {margin: 15px 0 0 0!important;}
        .m-padding-top20 {margin: 20px 0 0 0!important;}
        .m-padding-top30 {margin: 30px 0 0 0!important;}
        .m-padding-top40 {margin: 40px 0 0 0!important;}
        .m-padding-top50 {margin: 50px 0 0 0!important;}
        .m-padding-top60 {margin: 60px 0 0 0!important;}
        .m-height10 {font-size:10px!important;line-height:10px!important;height:10px!important;}
        .m-height15 {font-size:15px!important;line-height:15px!important;height:15px!important;}
        .m-height20 {font-size:20px!important;line-height:20px!important;height:20px!important;}
        .m-height25 {font-size:25px!important;line-height:25px!important;height:25px!important;}
        .m-height30 {font-size:30px!important;line-height:30px!important;height:30px!important;}
        .rwd-on-mobile {display: inline-block!important;padding: 5px;}
        .center-on-mobile {text-align: center!important;}
        }
        </style>
        </head>

        <body Simpli style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;" bgcolor="#F0F0F0">
        <span class="preheader-text" Simpli style="color: transparent; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; visibility: hidden; width: 0; display: none; mso-hide: all;"></span>
        <div  style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></div>
        <table border="0" align="center" cellpadding="0" cellspacing="0" width="100%" style="width:100%;max-width:100%;">
        <tr>
            <td align="center" Simpli bgcolor="#F0F0F0" data-composer>
                <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row container-padding" width="640" style="width:640px;max-width:640px;" Simpli>
                    <tr>
                        <td height="20" style="font-size:20px;line-height:20px;" Simpli>&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="center" class="center-text">
                        <img style="width:120px;border:0px;display: inline!important;" src="https://cdn.biru.co.id/images/logo/logo512.png" width="120" border="0" editable="true" Simpli data-image-edit  Simpli alt="logo">
                        </td>
                    </tr>
                    <tr>
                        <td height="30" style="font-size:30px;line-height:30px;" Simpli>&nbsp;</td>
                    </tr>
                </table>
                <table border="0" align="center" cellpadding="0" cellspacing="0" class="row" role="presentation" width="640" style="width:640px;max-width:640px;" Simpli>
                    <tr>
                        <td align="center">
                            <table border="0" align="center" cellpadding="0" cellspacing="0" class="row container-padding10" role="presentation" width="640" style="width:640px;max-width:640px;">
                                <tr>
                                    <td align="center" Simpli bgcolor="#F4F4F4"  style="border-radius: 36px;">
                                        <!--[if (gte mso 9)|(IE)]><v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:640px;">
                                        <v:fill type="frame" src="images/header-16.jpg" color="#F4F4F4" />
                                        <v:textbox style="mso-fit-shape-to-text:true;" inset="0,0,0,0"><![endif]-->
                                        <div>
                                            <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="width:100%;max-width:100%;">
                                                <tr>
                                                    <td align="center" background="images/header-16.jpg" data-bg-image   style="background-size:cover;background-position:center top; border-radius: 36px;">
                                                        <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="600" style="width:600px;max-width:600px;">
                                                        <tr>
                                                        <td align="center"  bgcolor="#FFFFFF" style="border-radius:36px 36px 0 0;">
                                                            <!-- content -->
                                                            <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row container-padding" width="520" style="width:520px;max-width:520px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td height="20" style="font-size:20px;line-height:20px;" >&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            </td>
                                                        </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!--[if (gte mso 9)|(IE)]></v:textbox></v:rect><![endif]-->
                                    </td>
                                </tr>
                            </table>

                            <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row container-padding25" width="600" style="width:600px;max-width:600px;">
                                <tr>
                                    <td align="center" Simpli bgcolor="#FFFFFF"  style="border-radius:0 0 36px 36px; border-bottom:solid 6px #DDDDDD;">
                                        <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row container-padding" width="520" style="width:520px;max-width:520px;">

                                            <tr>
                                                <td class="center-text" Simpli align="center" style="Arial,Helvetica,sans-serif;font-size:48px;line-height:54px;font-weight:700;font-style:normal;color:#333333;text-decoration:none;letter-spacing:0px;">
                                                    <singleline>
                                                        <div mc:edit Simplistyle="font-size:28px">
                                                        ' . $_POST['name'] . '<br> <span style="font-size:20px">Terima Kasih!</span>
                                                        </div>
                                                    </singleline>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="15" style="font-size:15px;line-height:15px;" Simpli>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td class="center-text" Simpli align="center" style="Arial,Helvetica,sans-serif;font-size:16px;line-height:26px;font-weight:300;font-style:normal;color:#333333;text-decoration:none;letter-spacing:0px;">
                                                    <singleline>
                                                        <div mc:edit Simpli style="font-size:12px;line-height:12px;">
                                                            telah mempercayakan kepada Biru, Inc sebagai pelayan teknologi internet Anda, kami akan menghubungi Anda secepat mungkin melalui
                                                            <strong>email</strong> ini '.$pesanwa . 'dan berikut ini detail order Anda
                                                        </div>
                                                    </singleline>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td height="40"  style="border-bottom: 4px dotted #E4E4E4;font-size:40px;line-height:10px;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td height="20" style="font-size:20px;line-height:20px;" Simpli>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <table style="font-size : 0.8em;">
                                                        <tr>
                                                            <td>
                                                                <strong>Tanggal Order</strong>
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#1898c2;">' .$tanggal. '</strong>
                                                            </td>
                                                        </tr>
                                                        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td></td></tr>                
                                                        <tr>
                                                            <td>
                                                                <strong>Jenis Pekerjaan</strong>
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#1898c2;">' .$_POST['nama_produk']. '</strong>
                                                            </td>
                                                        </tr>
                                        ';

                                        if (isset($_POST['nama_produk']) && $_POST['nama_produk'] == "Desain Web"){
                                            $message .=' 
                                                        <tr>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Web
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['jenis_web']. '</strong>
                                                            </td>
                                                        </tr>     
                                                        <tr>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Konten Web
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['konten_web']. '</strong>
                                                            </td>
                                                        </tr>   
                                                        
                                                        ';
                                            foreach($_POST['web_desain_fitur'] as $value){
                                                $message .= '
                                                            <tr>
                                                                <td>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </td>
                                                                <td>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </td>
                                                                <td>
                                                                    <strong style="color:#F8485E;font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-' .trim(stripslashes($value)). '</strong>
                                                                </td>
                                                            </tr>
                                                            ';
                                            };
                                                
                                            $message .=' 
                                                        <tr>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instruksi Web
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['keinginan_web']. '</strong>
                                                            </td>
                                                        </tr>     
                                                        <tr>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diskripsi Usaha/Web
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['diskripsi_web']. '</strong>
                                                            </td>
                                                        </tr>
                                                        ';
                                            $message .='
                                                        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td></td></tr>                
                                                        <tr>
                                                            <td>
                                                                <strong>Sudah Punya Domain</strong>
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#1898c2;">' .$_POST['sudah_punya_domain']. '</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Nama Domain</strong>
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#1898c2;">' .$_POST['nama_domain']. '</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Sudah Punya Hosting</strong>
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#1898c2;">' .$_POST['sudah_punya_hosting']. '</strong>
                                                            </td>
                                                        </tr>

                                                        ';
                                            
                                        }

                                        if (isset($_POST['nama_produk']) && $_POST['nama_produk'] == "Desain Web Promo Juli 2021"){
                                            $message .=' 
                                                        <tr>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Web
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['jenis_web_072021']. '</strong>
                                                            </td>
                                                        </tr>     
                                                        <tr>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Konten Web
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['konten_web_072021']. '</strong>
                                                            </td>
                                                        </tr>   
                                                        
                                                        ';
                                            foreach($_POST['web_desain_fitur_072021'] as $value){
                                                $message .= '
                                                            <tr>
                                                                <td>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </td>
                                                                <td>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </td>
                                                                <td>
                                                                    <strong style="color:#F8485E;font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-' .trim(stripslashes($value)). '</strong>
                                                                </td>
                                                            </tr>
                                                            ';
                                            };
                                                
                                            $message .=' 
                                                        <tr>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instruksi Web
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['keinginan_web_072021']. '</strong>
                                                            </td>
                                                        </tr>     
                                                        <tr>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diskripsi Usaha/Web
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['diskripsi_web_072021']. '</strong>
                                                            </td>
                                                        </tr>
                                                        ';
                                            $message .='
                                                        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td></td></tr>                
                                                        <tr>
                                                            <td>
                                                                <strong>Sudah Punya Domain</strong>
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#1898c2;">' .$_POST['sudah_punya_domain']. '</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Nama Domain</strong>
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#1898c2;">' .$_POST['nama_domain']. '</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <strong>Sudah Punya Hosting</strong>
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#1898c2;">' .$_POST['sudah_punya_hosting']. '</strong>
                                                            </td>
                                                        </tr>

                                                        ';
                                            
                                        }
                                        $message .=' 
                                                        <tr>
                                                            <td>
                                                            <strong>Nama Lengkap Anda
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['name']. '</strong>
                                                            </td>
                                                        </tr>     
                                                        <tr>
                                                            <td>
                                                            <strong>Nama Perusahaan
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['perusahaan']. '</strong>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                            <strong>Posisi di Perusahaan
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['posisi']. '</strong>
                                                            </td>
                                                        </tr>

                                                        
                                                        <tr>
                                                            <td>
                                                            <strong>Alamat Lengkap 
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['alamat']. '</strong>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                            <strong>E-Mail
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['email']. '</strong>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                            <strong>Telepon
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['telepon']. '</strong>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                            <strong>WhatsApp
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['wa']. '</strong>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                            <strong>Jenis Kelamin
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' .$_POST['gender']. '</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            <strong>Bersedia dihubungi tim Biru, Inc. 
                                                            </td>
                                                            <td>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </td>
                                                            <td>
                                                                <strong style="color:#BD4B4B;">' . $_POST['terms']. '</strong>
                                                            </td>
                                                        </tr>                                                        
                                                    </table>
                                                </td>
                                            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>                
                                            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>                
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                    <tr>
                        <td height="26"  style="border-bottom: 4px dotted #E4E4E4;font-size:26px;line-height:26px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="30" style="font-size:30px;line-height:30px;" Simpli>&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="center">
                            <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="480" style="width:480px;max-width:480px;">
                                <tr>
                                    <td class="center-text" Simpli align="center" style="Arial,Helvetica,sans-serif;font-size:0.7em;line-height:24px;font-weight:480;font-style:normal;color:#666666;text-decoration:none;letter-spacing:1px;">
                                        <multiline>
                                        <div mc:edit Simpli>
                                            2021 Biru Software. All Rights Reserved.<br>
                                            Jl. Panji Suroso 12 Kota Malang<br><br>
                                            Anda menerima email ini karena anda melakukan order dari web kami https://order.biru.software atau melalui WA 082257577772.
                                        </div>
                                        </multiline>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        </table>
        ';
 

    /* FILE UPLOAD */
    if(isset($_FILES['fileupload'])){
    $errors= array();
    $file_name = $_FILES['fileupload']['name'];
    $file_size =$_FILES['fileupload']['size'];
    $file_tmp =$_FILES['fileupload']['tmp_name'];
    $file_type=$_FILES['fileupload']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['fileupload']['name'])));

    $expensions= array("pdf","doc","docx");// Define with files are accepted
                              
    $OriginalFilename = $FinalFilename = preg_replace('`[^a-z0-9-_.]`i','',$_FILES['fileupload']['name']); 
    $FileCounter = 1; 
    while (file_exists( '../upload_files/'.$FinalFilename )) // The folder where the files will be stored; set the permission folder to  0755. 
        $FinalFilename = $FileCounter++.'_'.$OriginalFilename; 

        if(in_array($file_ext,$expensions)=== false){
            $errors[]="Extension not allowed, please choose a .pdf, .doc, .docx file.";
        }
        // Set the files size limit. Use this tool to convert the file size param https://www.thecalculator.co/others/File-Size-Converter-69.html
        if($file_size > 153600){
            $errors[]='File size must be max 150Kb';
        }
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"../upload_files/".$FinalFilename);
            $message .= "<br />Resume: https://order.biru.software/upload_files/".$FinalFilename; // Write here the path of your upload_files folder
        }else{
            $message .= "<br />File name: no files uploaded";
            }
        };
        /* end FILE UPLOAD */
                        
   
	// $mail->Body = "" . $message . "";

    // $mail->send();

    // $mail->ClearAddresses();
    // $mail->isSMTP();
    // $mail->addAddress($_POST['email']); // Email address entered on form
    // $mail->isHTML(true);
    // $mail->Subject    = 'Konfirmasi Order ' . $tanggal; // Custom subject
    // $mail->Body = $message;

    // $mail->Send();
    // echo $message;
    // $database->beginDebug();
    print_r($database->info());

    if (isset($_POST['nama_produk']) && $_POST['nama_produk'] == "Desain Web"){
        $database->insert("tb_order", [
            "jenis" => $_POST['jenis_web'],
            "konten" => $_POST['konten_web'],
            "keinginan" => $_POST['keinginan_web'],
            "deskripsi" => $_POST['diskripsi_web'],
            "domain" => $_POST['nama_domain'],
            "hosting" => $_POST['sudah_punya_hosting']
        ]);

        $id_order = $database->id();

        foreach ($_POST['web_desain_fitur'] as $value) {
            $database->insert("tb_fitur", [
                "id_order" => $id_order,
                "fitur" => $value
            ]);
        }

        $database->insert("tb_cif", [
            "id_order" => $id_order,
            "nama" => $_POST['name'],
            "perusahaan" => $_POST['perusahaan'],
            "posisi" => $_POST['posisi'],
            "alamat" => $_POST['alamat'],
            "email" => $_POST['email'],
            "telepon" => $_POST['telepon'],
            "no_wa" => $_POST['wa'],
            "jenis_kelamin" => $_POST['gender']
        ]);
    }

    if (isset($_POST['nama_produk']) && $_POST['nama_produk'] == "Desain Web Promo Juli 2021"){
        $database->insert("tb_order", [
            "jenis" => $_POST['jenis_web_072021'],
            "konten" => $_POST['konten_web_072021'],
            "keinginan" => $_POST['keinginan_web_072021'],
            "deskripsi" => $_POST['diskripsi_web_072021'],
            "domain" => $_POST['nama_domain'],
            "hosting" => $_POST['sudah_punya_hosting']
        ]);

        $id_order = $database->id();

        foreach ($_POST['web_desain_fitur_072021'] as $value) {
            $database->insert("tb_fitur", [
                "id_order" => $id_order,
                "fitur" => $value
            ]);
        }

        $database->insert("tb_cif", [
            "id_order" => $id_order,
            "nama" => $_POST['name'],
            "perusahaan" => $_POST['perusahaan'],
            "posisi" => $_POST['posisi'],
            "alamat" => $_POST['alamat'],
            "email" => $_POST['email'],
            "telepon" => $_POST['telepon'],
            "no_wa" => $_POST['wa'],
            "jenis_kelamin" => $_POST['gender']
        ]);
    }
    // var_dump($database->debugLog());

    echo '<div id="success">
            <div class="icon icon--order-success svg">
                 <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                  <g fill="none" stroke="#8EC343" stroke-width="2">
                     <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                     <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                  </g>
                 </svg>
             </div>
            <h4><span>Order telah Kami terima!</span>Terima kasih telah menggunakan layanan dari Biru, Inc.</h4>
            <br><br><small>Silahkan cek email anda, jika tidak ada mungkin masuk ke <strong>folder spam</strong>.</small>
            <br />
            <br><br><small>Tim dari Biru Indonesia Creative akan menghubungi Anda secepatnya.</small>
            <br /><br /><br />            
            <small>halaman ini akan berpindah dalam 5 detik.</small>
        </div>';
	} catch (Exception $e) {
	    echo "Tidak dapat mengirim email. Pesan Kesalahan: {$mail->ErrorInfo}";
	}
	
?>
<!-- END SEND MAIL SCRIPT -->   

</body>
</html>