<?php 
if(isset($_POST['submit'])){
    //$to = "contacto@losarcosfisioterapia.com"; // this is your Email address
	$to = "enriqueperezmedina@aol.com";
    $from = $_POST['emailaddress']; // this is the sender's Email address
    $name = $_POST['nombre'];
    $phone = $_POST['telefono'];
    $subject = $_POST['asunto'];
    $message = $first_name . " " . $last_name . " escribió el siguiente mensaje en la web de Los Arcos Fisioterapia:" . "\n\n" . $_POST['mensaje'];
    $message2 = "Esta es una copia de su mensaje a Los Arcos Fisioterapia:" . $first_name . "\n\n" . $_POST['mensaje'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;	

	mail($to,$subject,$message,$headers);
    mail($from,$subject,$message2,$headers2); // sends a copy of the message to the sender
	
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly. ". $from . " ". $subject. " ". $message2. " ". $headers2;
	header("Location: http://losarcosfisioterapia.com/V3/?conf=y#contacto-section"); /* Redirección del navegador */
	
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>