<?php
    
    #enable Exeptions
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './vendor/Exception.php';
    require './vendor/PHPMailer.php';
    require './vendor/SMTP.php';
 
    $mail = new PHPMailer(true);
    try {
                        //Server settings
                        $mail->SMTPDebug =10;
                        $mail->isSMTP();                                          
                        $mail->SMTPAutoTLS = false;                  
                        $mail->SMTPAuth   = true;   
                        $mail->Host = 'twentytwo.qservers.net';
                        $mail->Port = 465;                                
                        $mail->Username   = 'support@paypaddi.ng';                    
                        $mail->Password   = '*Paypaddi12345';                               
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       
                                                        
                        //Recipients
                        $mail->setFrom('toy505050@yahoo.com', 'Visitor');
                        $mail->addAddress('support@paypaddi.ng', 'Support');     
                    
                        //Content
                        $mail->isHTML(true);                                  
                        $mail->Subject = 'TONT';
                        $mail->Body    = 'This is the HTML message body <b>in bold!</b> tont';
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                        $mail->send();
                        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>