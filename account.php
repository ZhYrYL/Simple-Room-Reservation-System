<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CJLCPP Hotel</title>
</head>
<body>
    <div class="flex-container">
        <div class="header">
            <div class="logo">
                <a href="profile.php"><img src="img/hotel-logo.png"></a>
            </div>
            <div class="navbar" method="post">
                <a href="profile.php" class="navigation">HOME</a>
                <a href="rooms.php" class="navigation">ROOMS</a>
                <a href="profileGuidelines.php" class="navigation">GUIDELINES</a>
                <a href="account.php"><img src="img/profile-user.png" style="filter: invert(59%) sepia(94%) saturate(756%) hue-rotate(0deg) brightness(103%) contrast(104%);"></a>
            </div>
        </div>
        <?php
        
        // include 'db/connection.php';
        //     $result = mysqli_query($connection, "SELECT * FROM reports where ref_number='");
        // ?>

        <div class="body">
            <div class="account">
                <div class="aHeader">
                    <div class="acc">
                        <div class="accPic">
                            <img src="img/profile-user.png">
                        </div>
                        <div class="accMail">
                            <div class="mailName">zhyryllposadas@gmail.com</div>
                            <div class="mailChange">
                                <p>Change Password?</p>  
                            </div>
                        </div>
                    </div>
                </div>
                <form class="aBody" method="post">
                    <div class="res">
                        <div class="accSetup">
                            <div class="accSetup1">
                                <h2>My Reservation<h2>
                            </div>
                            <div class="accSetup2">
                                <input type="submit" name="logout" value="Logout">
                            </div>    
                        </div>
                        <div class="accTable">
                            <div>
                                <table class="accRes">
                                    <tr>
                                        <td>Reference Number</td>
                                        <td>Reserved Date</td>
                                        <td>Accomodation Date</td>
                                        <td>Status</td>
                                        <td>Cancel</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>01/18/23</td>
                                        <td>01/31/23</td>
                                        <td>Paid</td>
                                        <td class="deleteIcon"><img src="img/garbage.png"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
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

    <?php
    if(isset($_POST['logout'])){
    echo "
    <script>
        alert('You have successfully logged out of your CJLPP Hotel account. Thank you for choosing us as your preferred accommodation. We look forward to welcoming you back soon');
        document.location.href = 'home.php';
    </script>
    ";
    }
    ?>

</body>
</html>