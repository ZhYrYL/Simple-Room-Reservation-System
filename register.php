<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <div class="logo">
                <a href="home.php"><img src="img/hotel-logo.png"></a>
            </div>
            <div class="navbar">
                <a href="home.php" class="navigation">HOME</a>
                <a href="hotel.php" class="navigation">HOTEL</a>
                <a href="guidelines.php" class="navigation">GUIDELINES</a>
                <a href="login.php" class="navigation">LOGIN</a>
                <a href="register.php" class="navigation" style="color: #FFB100">REGISTER</a>
            </div>
        </div>

        <div class="body">
            <div class="register">
                <div class="rBgImg">
                    <div class="rBgImg1">
                        <img src="img/hotel-logo.png">
                    </div>
                    <div class="rBgImg2">
                        <p>Welcome! Create an account to take advantage of our features</p>
                    </div>
                </div>
                <form method="post" action="db/insert.php" class="rSignup">
                    <div class="rSignHead">
                        <div class="rMessage">
                            <p>Sign up to access exclusive content and offers</p>
                        </div>
                        <div class="rInstruction">
                            <p id="instruction">Please fill in this form to create an account:</p>
                        </div>
                    </div>
                    <div class="rSignBody">
                        <div class="rinputs">
                            <div class="rinput1">
                                <label for="username">Username:</label>
                            </div>
                            <div class="rinput2">
                                <input type="text" id="username" name="username" required>
                            </div>
                        </div>
                        <div class="rinputs">
                            <div class="rinput1">
                                <label for="fname">First Name:</label>
                            </div>
                            <div class="rinput2">
                                <input type="text" id="fname" name="fname" required>
                            </div>
                        </div>
                        <div class="rinputs">
                            <div class="rinput1">
                                <label for="lname">Last Name:</label>
                            </div>
                            <div class="rinput2">
                                <input type="text" id="lname" name="lname" required>
                            </div>
                        </div>
                        <div class="rinputs">
                            <div class="rinput1">
                                <label for="contact">Contact:</label>
                            </div>
                            <div class="rinput2">
                                <input type="text" id="contact" name="contact" required>
                            </div>
                        </div>
                        <div class="rinputs">
                            <div class="rinput1">
                                <label for="email">Email:</label>
                            </div>
                            <div class="rinput2">
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="rinputs">
                            <div class="rinput1">
                                <label for="password">Password:</label>
                            </div>
                            <div class="rinput2">
                                <input type="password" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="rinputs">
                            <div class="rinput1">
                                <label for="cpassword">Confirm Password:</label>
                            </div>
                            <div class="rinput2">
                                <input type="password" id="cpassword" name="cPassword" required>
                            </div>
                        </div>
                        <div class="rTerms">
                            <input type="checkbox" required>I Agree to the <span>Terms and Conditions</span>&nbsp;and&nbsp;<span>Privacy Policy</span>
                        </div>
                    </div>
                    <div class="rSignFooter">
                        <input type="submit" name="register" value="Sign Up" id="registerAlert">
                    </div>
                </form>

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
    </div>

<script>
    const instruction = document.getElementById("instruction");
    const password = document.getElementById("password");
    const cPassword = document.getElementById("cpassword");
    const register = document.getElementById("registerAlert");
    register.addEventListener("click", submit);

    // const submit = ()=>{
    //     if(password.value !== cPassword.value){
    //         instruction.innerHTML = "The pass and cpass did not match";
    //     }
    // }
   
</script>
</body>
</html>