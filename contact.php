<?php
if(isset($_POST=['submit'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $mailto = "rohithraj07072000@gmail.com";
    $subj = "Contact Request";
    $head = "From: ".$Email;
    $txt = "MAIL FROM: ".$Name.".\n \n Phone: ".$Phone.". \n \n Action: Contact  ";

    mail($mailto,$subj,$txt,$head);
    header("Location: index.php?mailsend");

} 
?>