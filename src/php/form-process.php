<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $cell = $_POST["cell"];
    
    $EmailTo = "emailaddress@test.com";
    $Subject = "New message from website received";
    
    // prepare email body text
    $Body .= "Name: ";
    $Body .= $name;
    $Body .= "\n";
    
    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";
    
    $Body .= "Cellphone: ";
    $Body .= $cell;
    $Body .= "\n";
    
    // send email
    $success = mail($EmailTo, $Subject, $Body, "From:".$email);
    
    // redirect to success page
    if ($success) {
        echo "success";
        } else {
        echo "invalid";
    }
 
?>