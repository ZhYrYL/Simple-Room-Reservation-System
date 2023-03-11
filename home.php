<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CJLPP Hotel</title>
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <div class="logo">
                <a href="home.php"><img src="img/hotel-logo.png"></a>
            </div>
            <div class="navbar">
                <a href="home.php" style="color: #FFB100" class="navigation">HOME</a>
                <a href="hotel.php" class="navigation">HOTEL</a>
                <a href="guidelines.php" class="navigation">GUIDELINES</a>
                <a href="login.php" class="navigation">LOGIN</a>
                <a href="register.php" class="navigation">REGISTER</a>
            </div>
        </div>

        <div class="body">
            <div class="title">
                <div class="welcome">
                    <h1>Experience the best of San Carlos City at CJLPP Hotel</h1>
                </div>
                <div class="booknow">
                    <a id="bookNow">Book Now</a>
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
    </div>

    <script>
        document.getElementById("bookNow").onclick = function book(){
        alert("Booking requires a registered account, please login or sign up");
    }
    </script>
</body>
</html>