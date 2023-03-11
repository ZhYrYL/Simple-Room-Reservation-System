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
                <a href="profile.php"><img src="img/LOGO.png"></a>
            </div>
            <div class="navbar" method="post">
                <a href="profile.php" style="color: #FFB100" class="navigation">HOME</a>
                <a href="rooms.php" class="navigation">ROOMS</a>
                <a href="profileGuidelines.php" class="navigation">GUIDELINES</a>
                <a href="account.php"><img src="img/profile-user.png"></a>
            </div>
        </div>

        <div class="body">
            <form class="payment" method="post" action="db/insert2.php">
                <div class="pHeading">
                    <h2>PAYMENT</h2>
                </div>
                <div class="pBody">
                    <div class="pMethod">
                        <div class="pInputs pStart">
                            <div class="pBox1" style="border: none;">
                                <p>Payment Method</p>
                            </div>
                            <div class="pBox2 pCenter" style="border: none;">
                                <img src="img/visa.png">
                                <img src="img/bdo.png">
                                <img src="img/mastercard.png">
                                <img src="img/unionbank.png">
                            </div>
                        </div>
                        <div class="pInputs pColumn">
                            <div class="pLabel">
                                <label for="cardName">Name on Card</label>
                            </div>
                            <div class="pInput">
                                <input type="text" name="cardName" id="cardName" placeholder="John Doe" class="pcardInput" required>
                            </div>
                        </div>
                        <div class="pInputs">
                            <div class="pBox1 pColumn">
                                <div class="pLabel">
                                    <label for="creditNum">Credit Card Number</label>
                                </div>
                                <div class="pInput">
                                    <input type="text" name="creditNum" id="creditNum" placeholder="1111-2222-3333-4444" required>
                                </div>
                            </div>
                            <div class="pBox2 pColumn">
                                <div class="pLabel">
                                    <label for="expireMonth">Expiration Month</label>
                                </div>
                                <div class="pInput">
                                    <input type="text" name="expireMonth" id="expireMonth" placeholder="MM" required>
                                </div>
                            </div>
                        </div>
                        <div class="pInputs">
                            <div class="pBox1 pColumn">
                                <div class="pLabel">
                                    <label for="expireYear">Expiration Year</label>
                                </div>
                                <div class="pInput">
                                    <input type="text" name="expireYear" id="expireYear" placeholder="YY" required>
                                </div>
                            </div>
                            <div class="pBox2 pColumn">
                                <div class="pLabel">
                                    <label for="cvv">CVV Code</label>
                                </div>
                                <div class="pInput">
                                    <input type="text" name="cvv" id="cvv" placeholder="123" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pEmpty"></div>
                    <div class="pSummary">
                        <div class="pInputs pStart" >
                            <p>Payment Summary</p>
                        </div>
                        <div class="pInputs">
                            <div class="pBox1 pCenter">
                                <p>Check-in Date</p>
                            </div>
                            <div class="pBox2 pCenter">
                                01/18/23
                            </div>
                        </div>
                        <div class="pInputs">
                            <div class="pBox1 pCenter">
                                <p>Check-out Date</p>
                            </div>
                            <div class="pBox2 pCenter">
                                01/31/23
                            </div>
                        </div>
                        <div class="pInputs">
                            <div class="pBox1 pCenter">
                                <p>Family Room(Per Night)</p>
                            </div>
                            <div class="pBox2 pCenter">
                                PHP 4000
                            </div>
                        </div>
                        <div class="pInputs">
                            <div class="pBox1 pCenter">
                                <p>Premium</p>
                            </div>
                            <div class="pBox2 pCenter">
                                PHP 2000
                            </div>
                        </div>
                        <div class="pInputs">
                            <div class="pBox1 pCenter">
                                <p style="font-weight: bold">Total Cost</p>
                            </div>
                            <div class="pBox2 pCenter">
                                <p style="font-weight: bold">PHP 60000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pFooter">
                    <input type="submit" name="paynow" value="Pay Now">
                </div>
            </form>
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
    if(isset($_POST['submit'])){
        echo 
        "
        <script>
            alert('Booking and Payment Successful! Enjoy your stay at CJLPP Hotel');
            document.location.href = 'account.php';
        </script>
        ";
    }
?>
</body>
</html>