<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "stanleigh3oduor@gmail.com";
         $subject = "This is subject";
         $message = "This is from stanley oduor";
         $header = "From:jemo9434@gmail.com";
         if( mail ($to,$subject,$message,$header)) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>


      
   </body>
</html>