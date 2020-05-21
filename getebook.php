<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {
    $to = $_POST['email'];

    $subject = "Here is your ebook";

    $message = '
    <html>
        <head>
            <title>Here is your ebook</title>
        </head>
        <body>
            <p>Click the link below</p>
            <p>https://temp-automatic.000webhostapp.com/ebook/lorem-ipsum.pdf</p>
        </body>
    </html>
    ';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $headers .= "To: <ecobit>" . "\r\n";
    $headers .= "From: Ecobit <elias.carvalho.096@gmail.com>" . "\r\n";


    try {
        mail($to, $subject, $message, $headers); 
        header("Location: index.php?success=1");        
    } catch(Exception $e) {
        echo $e->get_message();
    }
    
}



?>