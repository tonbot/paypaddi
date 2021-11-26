<?php
    
    #enable Exeptions
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/Exception.php';
    require 'vendor/PHPMailer.php';
    require 'vendor/SMTP.php';

     //collecting form data

     
     $SenderName      =  trim($_POST['SenderName']);
     $SenderEmail     =  trim($_POST['SenderEmail']);
     $SenderSubject   =  trim($_POST['SenderSubject']);
     $SenderMessage   =  trim($_POST['SenderMessage']);

     //the message body
     $body="<p>$SenderMessage</p>";

     //initialising mail
    $mail = new PHPMailer(true);

    try {
                        //Server settings
                        $mail->SMTPDebug =0;
                        $mail->isSMTP();                                          
                        $mail->SMTPAutoTLS = false;                  
                        $mail->SMTPAuth   = true;   
                        $mail->Host = 'twentytwo.qservers.net';
                        $mail->Port = 465;                                
                        $mail->Username   = 'support@paypaddi.ng';                    
                        $mail->Password   = '*Paypaddi12345';                               
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       
                                                        
                        //Recipients
                        $mail->setFrom( $SenderEmail , $SenderName );
                        $mail->addAddress('support@paypaddi.ng', 'Support');     
                    
                        //Content
                        $mail->isHTML(true);                                  
                        $mail->Subject =  $SenderSubject;
                        $mail->Body    =  $body;

                        if ($mail->send()) {
                            send_FeedBact_ToSender($SenderName,$SenderEmail,$SenderSubject,$body );
                        }
                        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }



    function send_FeedBact_ToSender($SenderName,$SenderEmail,$SenderSubject,$body){
            $body= "<h3>Dear " . $SenderName . "</h3>
            <p>Thank you for contacting Paypaddi. Your request is hereby noted and we will contact you as soon as possible.</p> 
            <P>Regards.</P>
            Paypaddi.
            ";
            $SenderSubject="MESSAGE CONFIRMATION";
            $mail = new PHPMailer(true);   
             //Server settings
             $mail->SMTPDebug =0;
             $mail->isSMTP();                                          
             $mail->SMTPAutoTLS = false;                  
             $mail->SMTPAuth   = true;   
             $mail->Host = 'twentytwo.qservers.net';
             $mail->Port = 465;                                
             $mail->Username   = 'support@paypaddi.ng';                    
             $mail->Password   = '*Paypaddi12345';                               
             $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       
                                 
            //Recipients
            $mail->setFrom('support@paypaddi.ng', 'Paypaddi');
            $mail->addAddress($SenderEmail, $SenderName);     
        
            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = $SenderSubject ;
            $mail->Body    =  $body;

            if ($mail->send()) {
                echo 'success';
            }
        }      

?>