<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$json=array();

$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '---';
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '---';
$contactno = isset($_REQUEST['contactno']) ? $_REQUEST['contactno'] : '---';

$to = "kamleaditya@yahoo.com";
         $subject="New Registration Information";
         $message = '
         <html>
         <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
           <title>New Registration Information</title>
         </head>
         <body>
   
         <table class="tg" style="margin: 0 auto;width: 60%;background-color: #fff;">
            <tr>
            <th class="tg-031e" style="background-color: #efefef; padding:20px;">
              <img  src="http://vbuzz.in/godrej/Images/logo.png">
            </th>
           </tr>
           <tr>
            <td class="tg-yw4l" style="border: 0;padding: 13px!important;">
              <p>Hi </p>
              <p>There we have received one new registration information on this account. </p>
            </td>
           </tr>
           <tr>
            <td class="tg-yw4l" style="border: 0;padding: 13px!important;">
                <center>
                  <table>
                     <tbody>
                        <tr>
                           <th style="text-align: left;display: table;">Name:-</th>
                           <td>'.$_REQUEST['name'].'</td>
                        </tr>
                        <tr>
                           <th style="text-align: left;display: table;">Email:-</th>
                           <td>'.$_REQUEST['email'].'</td>
                        </tr>
                        <tr>
                           <th style="text-align: left;display: table;">Contact Number:-</th>
                           <td>'.$_REQUEST['contactno'].'</td>
                        </tr>
                     </tbody>
                  </table>
               </center>
            </td>
           </tr>
           <tr>
            <td class="tg-yw4l" style="border: 0;padding: 13px!important;">
            //   <p>Need help? You can reply to this message directly or contact us by other means.</p>
            //   <p>Our customer service team is available weekdays from 8 to 5 Pacific Time.</p>
            </td>
           </tr>
          
           <tr style="border-bottom: 1px solid!important;padding: 10px;">
            <td class="tg-yw4l" style="border: 0;">
              <p style="margin-left:13px;">Thanks,</p>
              <p style="margin-left:13px;">Team Godrej</p>
            </td>
           </tr>
           
         </table>
         </body>
         </html>';


$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = 'userone448@gmail.com';
$mail->Password = 'endohdtphalxzhan';
$mail->setFrom('userone448@gmail.com', 'Godrej');
$mail->addAddress('kamleaditya@yahoo.com', 'Admin');
$mail->Subject = 'Inquiry';
$mail->msgHTML($message); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

if(!$mail->send()){
	$json['result']=false;	
    $json['message']= "Mailer Error: " . $mail->ErrorInfo;
}else{
    $json['result']=true;	
		$json['message']="Thanks for contacting us! We will be in touch with you shortly";
}

echo json_encode($json);
?>