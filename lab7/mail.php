<!DOCTYPE html>
<html lang="ru">

<head>
    <title>AIRHYPE</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>
<body>
    <form action="mail.php" method="POST">
        
        <p>TO: <input type="text" name="reciever" value="<?php if(isset($_POST['reciever'])){ echo $_POST['reciever'];} ?>"/></p>
        <p>Theme: <input type="text" name="theme" value="<?php if(isset($_POST['theme'])){ echo $_POST['theme'];} ?>"/></p>
        <p>Message: <input type="text" name="message" value="<?php if(isset($_POST['message'])){ echo $_POST['message'];} ?>"/></p>
        <p>Files: <input type="text" name="files" value="<?php if(isset($_POST['files'])){ echo $_POST['files'];} ?>"/></p>
        <img src="cap.png" alt="" width="20%" >
        <p>Cap: <input type="text" name="cap" value="<?php if(isset($_POST['cap'])){ echo $_POST['cap'];} ?>"/></p>
        <p><input type="submit" name="send" value="Checkout"/></p>
    </form>
    <?php
       
        require 'vendor/autoload.php';

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        $m = new PHPMailer;
        try{
            $m = new PHPMailer;
            $m->isSMTP();
            $m->SMTPAuth = true;
            $m->SMTPDebug = 2;

            $m->Host = 'smtp.mail.ru';
            $m->Username = 'xxxxxxxx@mail.ru';
            $m->Password = 'xxxxxxxxxx';
            $m->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $m->Port = 587;

            $m->SetFrom('xxxxxxxxx@mail.ru');
            $m->addAddress($_POST['reciever']);
            $m->Subject = $_POST['theme'];
            $m->Body    = $_POST['message'];

            $attachments = explode(" ",$_POST['files']);
            foreach ($attachments as $path){
                $m->addAttachment($path);
            }

            if ($_POST['cap'] == 'qGphJD'){
                $m->send();
                echo 'sent';
            }
            else{echo'wrong capture';}
           
        } catch(Exception $e){
            echo "Message could not be sent. Mailer Error: {$m->ErrorInfo}";
        }
            $to = $_POST['reciever'];
            $theme = $_POST['theme'];
            $message = $_POST['message'];
                       

        
    ?>

</body>
</html>