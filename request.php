<?php

if(isset($_POST=['submit'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Service = $_POST['Service'];
    $Description = $_POST['Descptn'];
    $mailto = "rohithraj07072000@gmail.com";
    $subj = "Request Qoute";
    $head = "From: ".$Email;
    $txt = "MAIL FROM: ".$Name.".\n \n Resquesting Qoute For: ".$Service.". \n \n Description: ".$Description;

    mail($mailto,$subj,$txt,$head);
    header("Location: index.php?mailsend");

}

?>