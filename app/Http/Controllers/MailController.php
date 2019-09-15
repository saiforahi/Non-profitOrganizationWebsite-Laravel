<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\subscriber;
use Illuminate\Support\Facades\DB;

// Load Composer's autoloader
#require 'vendor/autoload.php';

class MailController extends Controller
{
    public function mailVerification()
    {
        
        $mail = new PHPMailer(true);
        $email=request('emailField');
       # $exists = DB::table('subscribers')->where('email', $email)->first();
        if(DB::table('subscribers')->where('email', $email)->exists())
        {
            echo 'already subscribed';
            return view('pages.home');
        }
        else
        {
            try {
                //Server settings
                #$mail->SMTPDebug = 2;                                       // Enable verbose debug output
                $mail->isSMTP();                                            // Set mailer to use SMTP
                $mail->Host       = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = '7dec731fef27a2';                  // SMTP username
                $mail->Password   = 'edc0784e58939a';                               // SMTP password
                $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
                $mail->Port       = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('from@example.com', 'Mailer');
                $mail->addAddress($email, 'Joe User');     // Add a recipient
               # $mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addReplyTo('info@example.com', 'Information');
                $mail->addCC('cc@example.com');
                $mail->addBCC('bcc@example.com');

                // Attachments
               # $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
               # $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Verify your email';
                $base_url="http://127.0.0.1:8000/subscribed/".$email."/";
                $mail->Body    = "
                    <p>Thanks for subscribing. Please click below link to verify your email.</p><br><p>Link-".$base_url."</p>
                ";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
                }
                catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                return view('pages.home');
        }
        
    }
}
