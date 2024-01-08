<?php
$name=$_POST['name'];
$contact=$_POST['number'];

$email=$_POST['email'];

// the message
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: " . strip_tags($_POST['email']) . "\r\n";
$msg="<html><body>";
$msg .= "<table><tr> <td><strong>Name:</strong></td><td> ".strip_tags($name)."</td></tr><tr><td><strong> Email:</strong></td><td> ".strip_tags($email)."</td></tr><tr><td>".strip_tags($contact)."</td></tr></table></body></html>";
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,500);


if(mail("info@samarthmeditech.com","from your website",$msg,$headers))
{
?>

<script>
 alert("message sent");
 window.location="index.html";

    
        let name= document.getElementsById('name').value;
        function sendmsg(){
            document.getElementsById('message').innerHTML='Thanks for talking to us'+ ' '+name+' '+ 'our support team will reach you';  
        }
    
 </script>
<?php
}
else
{
 ?>
<script>
 alert("failed to send message ");
 // window.location="index.php";
 </script>
<?php   
}
?>