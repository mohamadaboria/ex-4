<!DOCTYPE html>
<html>

<head>
    <title>php web</title>
</head>



     <body>
           <h2> 
               welcome <?php echo $_GET["fullName"]; ?>
           </h2>

           <h3>your password is: <?php echo $_GET["pass"];?> <br>
              Your email address is: <?php echo $_GET["mail"];?><br>
              Your phone is : <?php echo $_GET["phone"];?><br>
        </h3>
               <section>
                 <?php
                 $un = $_GET["fullName"];
                 if ($un == "mohamad")
                    echo "<h2> good morning " . $un . " </h2>";
                    else
                    echo "<h2>who are you? you cant get in</h2>"
                    ?>







</section>
               

           
           


           





        
    </body>
    </html>