<?php

// checking if the form is submit
if (isset($_POST['submit'])) {
	$name	= $_POST['name'];
	$email		= $_POST['email'];
	$gem	= $_POST['gem'];
	$message	= $_POST['message'];

	$to	 		  = 'intotechtv@gmail.com';
	$mail_gem = 'Message from Website';
	$email_body   = "Message from Contact Us Page of the Website: <br>";
	$email_body   .= "<b>From:</b> {$name} <br>";
	$email_body   .= "<b>gem:</b> {$gem} <br>";
	$email_body   .= "<b>Message:</b><br>" . nl2br(strip_tags($message));

	$header       = "From: {$email}\r\nContent-Type: text/html;";

	$send_mail_result = mail($to, $mail_gem, $email_body, $header);

	if ($send_mail_result) {
		echo "Message Sent.";
	} else {
		echo "Message Not Sent.";
	}
}
?>






<?php include 'INC_HEAD.php';?>
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
    <style>
       #zse1{
           width: 100%;
           height: 600px;
           background-color: brown;
       }
        .zd1{
            width: 100%;
            height: 600px;
            display: flex;
            justify-content: space-between;
            background-color: blue;
        }
        .zd2{
            width: 45%;
            height: 600px;
            background-color: aqua;
        }
        form{
            padding: 30px;
        }
        .zd3{
            text-align: center;
        }
        #zh21{
            text-transform: uppercase;
        }
        .in1{
            border: none;
            padding: 10px 63px;
        }
        .texta1{
            border: none;
        }
        .zp1{
            padding: 10px;
        }
     

    </style>
<?php include 'INC_NAVI.php';?>
    <section id="zse1">
        <div class="w">
            <div class="zd1">
               <div class="zd2">
                <form action="contact-us.php" method="post">
                    <p class="zp1">
                        <label for="">Name</label>
                        <br>
                        <input type="text" name="name" class="in1">
                    </p>
                    <p class="zp1">
                        <label for="">Email</label>
                        <br>
                        <input type="email" name="email" class="in1">
                    </p>
                    <p class="zp1">
                        <label for="">Gem Code</label>
                        <br>
                        <input type="text" name="gem" class="in1">
                    </p>
                    <p class="zp1">
                        <label for="">Message</label>
                        <br>
                        <textarea name="" id="" cols="40" rows="5" name="message" class="texta1"></textarea>
                    </p>
                    <div class="zp1">
                        <button type="submit" name="submit">Send</button>
                    </div>
               </form>
               <!-- <?php
            //    echo"<div>"
               
            //    if ($send_mail_result) {
            //     echo "Message Sent.";
            // } else {
            //     echo "Message Not Sent.";
            // }
               
               ?> -->
               </div>
               <div class="zd2" >
                   <div class="zd3">
                       <img src="images/logo.svg" alt="sahan-gems-logo" width="350px">
                   </div>
                   <div class="zd3">
                       <h2 id="zh21">
                           Sahan Gems
                       </h2>
                       <p>
                           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt perferendis velit consectetur quam hic. Minus minima veritatis aliquid labore nostrum assumenda non modi nulla accusantium corrupti? Et aspernatur architecto ex?
                       </p>
                   </div>
               </div>
            </div>
          
        </div>
    </section>
    <?php include 'INC_FOOT.php';?>