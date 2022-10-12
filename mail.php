<?php


    
    if (!empty ($_POST["send" ])){
        $userName=$_POST["name"];
        $userEmail=$_POST[ "email"];
        $userMessage = $_POST[ "text"];
        $toEmail = "alikamar473@gmail.com";

        $mailHeaders="Name:" . $userName .
        "\r\n Email:".$userEmail .
        "\r\n Message:". $userMessage .  "\r\n";
        

        if (mail($toEmail, $userName, $mailHeaders)){
            $message = "Your Information is Received Successfully.";
          }
        
         
    } 
 
?>

