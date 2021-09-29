<?php 
if(isset($_POST['submit'])){
    $mailto = "narutorayban@gmail.com";

    $name = $_POST['full_name'];
    $organization = $_POST['organization_name'];
    $websit = $_POST['website'];
    $email_address = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['service']; 
    $subject2 = "Confirmation: Message Submitted Successfully! | adversaa WebDesign";

   
    $message="name: ".$name."\n"."organization: ".$organization."\n"."websit: ".$websit."\n"."email: ".$email_address."\n"."phone: ".$phone."\n\n".$_POST['message'];
    $message2 = "Dear " . $name . "\n"
    . "Thank you for contacting us, we will get back to you shortly."."\n\n"
    . "You submitted the following message: ". "\n". $_POST['message']."\n\n"
    . "Regards," . "/n"
    . "- HMA WebDesign";
    $headers = "From:" .  $email_address;
    $headers2 = "From:" . $mailto; 

    $result = mail($mailto, $subject, $message, $headers); //Send email to me
    $result2 = mail($from, $subject2, $message2, $headers2);

    if ($result && $result2) {
        $success = "Message was sent successfully, check your email!";
        /* echo '<script type="text/javascript">alert("Message Sent Successfully. We will contact you shortly.")</script>'; */
    } else {
        $failed = "Message was not sent, try again later!";
        /* echo '<script type="text/javascript">alert("Mail was not sent, Try again!.")</script>'; */
    }

}
?>