<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            padding: 0;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            background-size: cover;
            background-position: center;
            animation-name: animate;
            animation-direction: alternate-reverse;
            animation-duration: 30s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-play-state: running;
            animation-timing-function: ease-in-out;
        }
        @keyframes animate{
            0%{
                background-image: url(./img/hotel1.jpg);
            }
            20%{
                background-image: url(./img/hotel2.jpg);
            }
            40%{
                background-image: url(./img/hotel3.jpg);
            }
            60%{
                background-image: url(./img/hotel4.jpg);
            }
            80%{
                background-image: url(./img/hotel5.jpg);
            }
            100%{
                background-image: url(./img/hotel6.jpg);
            }
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="adminHome">
        <div class="adminNav">
            <div class="adminLogo">
                <a href="adminHome.php"><img src="img/hotel-logo.png"></a>
            </div>
            <div class="adminLinks">
                <a href="adminHome.php" style="color: #FFB100" class="navigation">ACCOUNTS</a>
                <a href="adminReports.php" class="navigation">REPORTS</a>
                <a href="adminSearch.php" class="navigation">SEARCH CUSTOMER</a>
                <a href="adminLogin.php"><img src="img/power-off.png"></a>
            </div>
        </div>
        <div class="administrator">
            <h2>REGISTERED ACCOUNTS</h2>
        </div>
    </div>
    <div class="adminBody">
        <div class="adminTable">
            <form method="post">
                <table class="adminAcc">
                    <tr style="font-weight: bold; text-align: center;">
                        <td>User ID</td>
                        <td>Username</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Contact</td>
                        <td>Email</td>
                        <td>Password</td>
                        <td>Action</td>
                    </tr>
                    <?php
                    include 'db/connection.php';
                    $select = mysqli_query($connection, "SELECT * FROM registeredaccount");
                    while($result = mysqli_fetch_object($select)){
                    ?>
                    <tr style="text-align: center;">
                        <td><?=$result->user_id?></td>
                        <td><?=$result->username?></td>
                        <td><?=$result->fname?></td>
                        <td><?=$result->lname?></td>
                        <td><?=$result->contact?></td>
                        <td><?=$result->email?></td>
                        <td><?=$result->password?></td>
                        <td class="deleteIcon"><a href="db/delete.php?delete=<?=$result->user_id?>"><img src="img/garbage.png"></a></td>
                    </tr>
                    
                    <?php } ?>
                </table>
            </form>
        </div>
    </div>
    
</body>
</html>