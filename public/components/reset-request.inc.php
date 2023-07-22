<?php
   include('db.php');
   session_start();
 
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../vendor/autoload.php';

   function send_password_reset($get_name, $get_email, $token){
    $mail = new PHPMailer(true);
     //Server settings
     //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'group32_php2023@itvet.ge';                     //SMTP username
     $mail->Password   = 'Itvet2023';                               //SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
     $mail->Port       =587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
     //Recipients
     $mail->setFrom('group32_php2023@itvet.ge', $get_name);
    //  $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
     $mail->addAddress($get_email);               //Name is optional
     $mail->isHTML(true);
     $mail->Subject="Reset Password";
    //  $mail->addReplyTo('info@example.com', 'Information');
    //  $mail->addCC('cc@example.com');
    //  $mail->addBCC('bcc@example.com');
 
     //Attachments
    //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    $email_template="
      <h2>Hello</h2>
      <h3>You are receiving this because we receuved a password reset request for your acount.</h3>
      <a href='http://localhost/shopAppPhpNew/public/components/password-change.php?token=$token&email=$get_email'>Click Me</a>
    ";
    $mail->Body=$email_template;
    $mail->send();
   }

    if(isset($_POST['reset-request-submit'])){
        $email=mysqli_real_escape_string($con, $_POST['email']);
        $token=md5(rand());

        $check_email="SELECT usersEmail, usersName  FROM users WHERE usersEmail='$email' LIMIT 1";
        $check_email_run=mysqli_query($con,$check_email);
       
        if(mysqli_num_rows($check_email_run)>0){
            $row=mysqli_fetch_array($check_email_run);
            $get_name=$row["usersName"];
            $get_email=$row['usersEmail'];
         
            $update_token="UPDATE users SET verify_token='$token' WHERE usersEmail='$get_email' LIMIT 1";
            $update_token_run=mysqli_query($con,$update_token);

            if($update_token_run){
                send_password_reset($get_name, $get_email, $token);
                $_SESSION['status']="We e-mailed you a password reset link";
                header('Location: reset-password.php');
                exit();
            }else{
                $_SESSION['status']="Something went wrong ";
                header('Location: reset-password.php');
                exit();
            }
        }else{
            $_SESSION['status']="No Email Found";
            header('Location: reset-password.php');
            exit();
        }
    }else{
        // header('Location: index.php');
        // exit();
      
    }


    if(isset($_POST['password_update'])){
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $new_password=mysqli_real_escape_string($con,$_POST['new_password']);
        $confirm_password=mysqli_real_escape_string($con,$_POST['confirm_password']);
        $token=mysqli_real_escape_string($con,$_POST['password_token']);

        if(!empty($token)){
            if(!empty($email) && !empty($new_password) && !empty($confirm_password)){
                $check_token="SELECT verify_token FROM users WHERE verify_token='$token' LIMIT 1";
                $check_token_run=mysqli_query($con, $check_token);

                if(mysqli_num_rows($check_token_run)>0){
                    if($new_password===$confirm_password){
                        $hashedNewPwd=password_hash($new_password, PASSWORD_DEFAULT);
                        $update_password="UPDATE users SET usersPwd='$hashedNewPwd' WHERE verify_token='$token' LIMIT 1";
                        $update_password_run=mysqli_query($con,$update_password);

                        if($update_password_run){
                            $new_token=md5(rand());
                            $update_to_new_token="UPDATE users SET verify_token='$new_token' WHERE verify_token='$token' LIMIT 1";
                            $update_password_run=mysqli_query($con,$update_password);

                            $_SESSION['status']="New password successfully updated";
                            header("Location: login.php");
                            exit();
                        }else{
                            $_SESSION['status']="Did not  update password";
                            header("Location: password-change.php?token=$token&email=$email");
                            exit();
                        }
                    }else{
                        $_SESSION['status']="Password and Confirm Password does not match";
                        header("Location: password-change.php?token=$token&email=$email");
                        exit();
                    }

                }else{
                    $_SESSION['status']="Inalid token";
                    header("Location: password-change.php?token=$token&email=$email");
                    exit();
                }
            }
            else{
                $_SESSION['status']="All Filed are Mandetory";
                header("Location: password-change.php?token=$token&email=$email");
                exit(); 
            }
        }
        else{
            $_SESSION['status']="No Token Available";
            header('Location: password-change.php');
            exit();
        }

    }
    
    ?>