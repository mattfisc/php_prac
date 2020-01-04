<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="f.css">
</head>
<body>
    
<!--PAGE TWO-->
    <div class="page" >

        <div class="header">
            <h1 id="result"> Sign-up for Fitness Aid</h1>
        </div>

        <div class="content">

            <div id="message">
                <?php
                    //$fullUrl = "http://$SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    $fullUrl = "http://localhost:$_SERVER[REQUEST_URI]";

                    // FAILED TO REGISTER
                    if(strpos($fullUrl, "message=fail") == true){
                        echo "<p class='error'>Failed to register.<p>";
        
                    }
                    else{
                        echo "<p class='message'>Register!<p>";
  
                    }
                ?>
            </div>


            <form action="reg.php" method="post">

               
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required><br>

               
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required><br>

                
                <input type="text" id="email" name="email" placeholder="Email Address" required><br>

            <br><br>
                <input type="password" id="pwd" name="pwd" placeholder="Password (numberic values only):" required>

                <br><!--Button--><br>
                <input class="button" type="submit" value="Submit">

            </form>
        </div>
    </div>


    
    <script src="f.js"></script>
    
    <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>


</body>
</html>