<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form class="flex-container" method="post">
        <div class="header">
            <div class="logo">
                <a href="home.php"><img src="img/hotel-logo.png"></a>
            </div>
            <div class="navbar">
                <a href="home.php" class="navigation">HOME</a>
                <a href="hotel.php" class="navigation">HOTEL</a>
                <a href="guidelines.php" class="navigation">GUIDELINES</a>
                <a href="login.php" class="navigation" style="color: #FFB100">LOGIN</a>
                <a href="register.php" class="navigation">REGISTER</a>
            </div>
        </div>
        
        <div class="body">
            <div class="logginIn">
                <div class="lHeader">
                    <div class="lHeader1">
                        <p>Login</p>
                    </div>
                    <div class="lHeader2">
                        <p id="warning">Login with your username and password</p>
                    </div>
                    
                </div>
                <div class="lBody">
                    <div class="lBody1">
                        <div class="lBody11">
                            <label for="email">Email</label>
                        </div>
                        <div class="lBody12">
                            <input type="email" id="email" name="email">
                        </div>
                    </div>
                    <div class="lBody2">
                        <div class="lBody11">
                            <label for="password">Password</label>
                        </div>
                        <div class="lBody12">
                            <input type="password" id="password" name="password">
                        </div>
                    </div>
                    <div class="lBody3">
                        <div class="lBody31"></div>
                        <div class="lBody32">
                            <input type="submit" name="submit" value="Login">
                        </div>
                    </div>
                </div>
                <div class="lFooter">
                    <p>Not have an account? <span><a href="register.php">Sign up here</a></span></p>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="discover">
                <div class="label">Discover</div>
                <div class="link">
                    <ul>
                        <li>Accomodations</li>
                        <li>Services</li>
                        <li>Activities</li>
                    </ul>
                </div>
            </div>
            <div class="book">
                <div class="label">Book</div>
                <div class="link">
                    <ul>
                        <li>Reservations</li>
                        <li>Specials & Packages</li>
                    </ul>
                </div>
            </div>
            <div class="message">
               <p>At the CJLPP Hotel, we're here to make booking your stay with us easy and secure. If you have any questions or concerns, please don't hesitate to contact our customer service team. 
                We're available 24/7 to assist you. We appreciate your business and look forward to welcoming you in our hotel. Thank you for choosing the CJLPP Hotel.
               </p>
            </div>
            <div class="stay">
                <div class="label">Stay</div>
                <div class="link">
                    <ul>
                        <li>Guidelines</li>
                        <li>Contact us</li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
            <div class="location">
                <div class="label">Location</div>
                <div class="link">
                   <p> W8MR + C4V<br> San Carlos City</p>
                </div>
            </div>

        </div>
</form>
    <?php
        include 'db/connection.php';
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $result = mysqli_query($connection, "SELECT * FROM registeredaccount where email='$email' and password='$password'");
            $count = mysqli_num_rows($result);
            if($count>0){
                echo 
                "
                <script>
                    alert('Welcome to CJLPP Hotel!');
                    document.location.href = 'profile.php';
                </script>
                ";
            }else{
                echo 
                "
                <script>
                    let warning = document.getElementById('warning');
                    warning.innerHTML = 'We were unable to log you in with the information provided. Please try again or register for an account.';
                    warning.style.color = 'red';
                    warning.style.fontWeight = 'bold';
                    warning.style.lineHeight = '1';
                    warning.style.fontSize = '13px';
                    warning.style.margin = '0';
                </script>
                ";
            }
        }
    ?>
    
</body>
</html>