

 <?php 


     if(isset($_POST['submit']))
                {


                 $email=$_POST['email'];
                 $name = $_POST['name'];
                 $pname = $_POST['pname'];
                 $number=$_POST['number'];
                 $message=$_POST['message'];

                // echo $name;exit();
                //echo "true";
                
                $mail_to='protectingyourpets@gmail.com';
                $subject='message from '.$name;
                
                $body_message='From:'.$name."\n<br>";
                $body_message='Name: '.$name."\n<br>";
                $body_message .='Email: '.$email."\n<br>";
                $body_message .='Pet Name: '.$pname."\n<br>";
                $body_message .='Number: '.$number."\n<br>";
                $body_message .='Message: '.$message."\n";

                //echo $body_message;exit();
                
                 $header = "From:norply@gmail.com  \r\n";
                     $header .= "Cc:norply@gmail.com  \r\n";
                     $header .= "MIME-Version: 1.0\r\n";
                     $header .= "Content-type: text/html\r\n";
            $mail_status= mail($mail_to, $subject,$body_message,$header);
            if($mail_status)
            {
                 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Message sent successfully...');
    window.location.href='index.html';
     </script>");
             }

              } 
            

 ?>
