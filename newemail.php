<?php
if( isset($_POST['submit']) )
{
//be sure to validate and clean your variables
$name = htmlentities($_POST['name']);
$contactno = htmlentities($_POST['contactno']);
$email = htmlentities($_POST['email']);
//then you can use them in a PHP function.
// $to = 'udayvansh@gmail.com';
$to = 'a7503035114@gmail.com';
$subject = "Lead Property Wala";

$message = '<table class="tg" style="margin: 0 auto;width: 60%;background-color: #fff;">
	<tr>
		<th class="tg-031e" style="background-color: #efefef; padding:20px;">
			<img  src="http://thepropertywala.in/realstatelogomoreshadow.png">
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
						<td>'.$name.'</td>
					</tr>
					<tr>
						<th style="text-align: left;display: table;">Email:-</th>
						<td>'.$email.'</td>
					</tr>
					<tr>
						<th style="text-align: left;display: table;">Contact Number:-</th>
						<td>'.$contactno.'</td>
					</tr>
				</tbody>
			</table>
			</center>
		</td>
	</tr>
	<tr>
		<td class="tg-yw4l" style="border: 0;padding: 13px!important;">
			<p>Need help? You can reply to this message directly or contact us by other means.</p>
			<p>Our customer service team is available weekdays from 8 to 5 Pacific Time.</p>
		</td>
	</tr>
	
	<tr style="border-bottom: 1px solid!important;padding: 10px;">
		<td class="tg-yw4l" style="border: 0;">
			<p style="margin-left:13px;">Thanks,</p>
			<p style="margin-left:13px;">Team Property Wala</p>
		</td>
	</tr>
	
</table>';
//         $message = "<b> </b>";
//  $message .= "<h1 style="color: white;">This is headline.</h1>";

$header = "From:leads@thepropertywala.in \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
	header("Location: thankyou.html");
// echo "Submit successfully...";
}else {
echo "Message could not be sent...";
}
}
?>