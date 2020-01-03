<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="f.css">
</head>
<body>
    <!--PAGE ONE-->
    <div class="page" >
        <div class="header">
            <h1>Login To Fitness Aide</h1>
        </div>
        
        <div class="content">
            <!--DISPLAY MESSAGE-->
            
            <div id="message">
                <?php
                    $fullUrl = "http://$SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if(strpos($fullUrl, "signup=welcome") == true){
                        echo "<p>welcome<p>";
                    }
                    else if(strpos($fullUrl, "signup=fail") == true){
                        echo "<p>failed<p>";
                    }
                    else{
                        echo "<p>Empty<p>";
                    }
                ?>
            </div>

            <form action="log.php" method="post">

                <input type="text" name="userEmail" id="userEmail" placeholder="Email" required><br>
                <input type="password" name="userPwd" id="userPwd" placeholder="Password" required><br>

                <!--SUBMIT BUTTON -->
                <br>
                <input class="button" type="submit" value="Login">
            </form>

            
            <!--SIGN UP BUTTON-->
            <button class="button"><a href="f_p2.html">Sign Up</a></button><br><br>

            <!--ENTER PASSWORD-->
            <div>
                <table>
                    <tr>
                        <td><button onclick="addDigitToPassword(7)"> 7 </button></td>
                        <td><button onclick="addDigitToPassword(8)"> 8 </button></td>
                        <td><button onclick="addDigitToPassword(9)"> 9 </button></td>
                    </tr>
                    <tr>
                        <td><button onclick="addDigitToPassword(4)"> 4 </button></td>
                        <td><button onclick="addDigitToPassword(5)"> 5 </button></td>
                        <td><button onclick="addDigitToPassword(6)"> 6 </button></td>
                    </tr>
                    <tr>
                        <td><button onclick="addDigitToPassword(1)"> 1 </button></td>
                        <td><button onclick="addDigitToPassword(2)"> 2 </button></td>
                        <td><button onclick="addDigitToPassword(3)"> 3 </button></td>
                    </tr>
                    <tr>
                        <td><button onclick="addDigitToPassword(0)">0 </button></td>
                        <!--DELETE BUTTON-->
                        <td><button onclick="deleteOneDigit()">Delete</button></td>
                        <!--CLEAR BUTTON-->
                        <td><button onclick="clearPassword()">Clear</button></td>
                    </tr>
                </table>
            </div> 
        </div>
    </div>
        
    <script src="f.js"></script>
    
    <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>

</body>
</html>