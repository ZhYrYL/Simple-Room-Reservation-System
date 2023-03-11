<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css"> 
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
            transition: 5s;

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
    <title>Administrator Login</title>
</head>
<body>
        <div class="adminLog">
            <div class="adHeader">
                <img src="img/hotel-logo.png">
            </div>
            <div class="adBody">
                <div class="wel">
                    <div class="welPanel">
                        <h3>ADMIN PANEL</h3>
                    </div>
                    <div class="welDes">
                        <p id="alert">Control panel login</p>
                    </div>
                </div>
                <div class="user">
                    <div  class="userLabel">
                        <label for="username">Username</label>
                    </div>
                    <div  class="userInput">
                        <input type="text" id="username">
                    </div>
                </div>
                <div class="pass">
                    <div  class="passLabel">
                        <label for="password">Password</label>
                    </div>
                    <div  class="passInput">
                        <input type="password" id="password">
                    </div>
                </div>
            </div>
            <div class="adFooter">
                <input type="submit" value="Login" onclick="admin()">
            </div>
        </div>
    
<script>
    var adminUser = "admin";
    var adminPass = "admin";
    var alert = document.getElementById("alert");
    var username = document.getElementById("username");
    var password = document.getElementById("password");

    const admin = () => {
        if(username.value===adminUser && password.value === adminPass){
            document.location.href= 'adminHome.php';
        }else{
            document.getElementById("username").style.border = "2px solid red";
            document.getElementById("password").style.border = "2px solid red";
            alert.innerHTML = "Invalid login credentials";
            alert.style.color = "red";
        }
    }
</script>
</body>
</html>