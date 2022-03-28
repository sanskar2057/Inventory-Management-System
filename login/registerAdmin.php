<!DOCTYPE html>
<html>
<head>
    <title>IMS Login - Inventory Management System</title>
    <!-- <link rel="stylesheet" type="text/css" href="register.css"> -->
    <!-- <script type="text/javascript" src="register.js"></script> -->
    <style>
        body{
    
            /* background-color: rgb(21, 150, 241); */
            background-image:url('warehouse.png');
            display:block;
            height: 100%;
            width: 100%;
        } 

        .loginHeader{
            text-align:center;
            position:relative; 
        }
        .loginHeader h1{
            font-size: 70px;
            color: black;
            font-weight: bolder;
            text-shadow: -1px 1px 0 yellow,
                        1px 1px 0 yellow,
                        1px -1px 0  yellow,
                        -1px -1px 0  yellow;
            text-align:center;
            margin-bottom: none;;
            
        }
        .loginHeader h2{
            color:rgb(2, 2, 2);
            font-weight: bolder;
            font-style: italic;
            text-decoration: underline; 
            margin-bottom: none;  
        }
        hr{
            height: 0px;
            color:rgb(0, 162, 255);
            border:none;
            margin:auto;
        }
        .loginBody h2{
            margin:0 auto;
            width: 500px;
            color:rgb(2, 2, 2);
            font-size: 50px;
            padding-top: 10px;
            text-decoration: underline;
            padding-bottom: 20px;;
        }
        .loginBody form{
            margin:0 auto;
            width: 500px;
            background:rgba(0,0,0,.5);
            padding:10px;
            border-top-left-radius: 37px 140px;
            border-top-right-radius: 23px 130px;
            border-bottom-left-radius: 110px 19px;
            border-bottom-right-radius: 120px 24px;
            border-style: solid;
            border-color: white;
            text-align: center;

        }
        .loginInputContainer label{
            display:block;
            font-size:20px;
            color:white;
        }
        .loginInputContainer{
        margin-top: 25px;
        }
        .loginInputContainer input{
            width:5cm;
            height: 25px;
            border-radius: 10px;
            border-style: solid;
            border-color:pink;
            text-align: center;
            padding:5px;
        }

        #registerButton{
            margin-top: 10px;
            text-align:center;
            font-size:20px;
            padding: 5px 20px;
            background-color: rgba(0, 217, 255, 0.61);
            color: white;;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="loginHeader">
           <h1>IMS</h1>
            <h2>Inventory Management System<br>For easy and efficient way to manage your inventory</h2>
            <div class="line"><hr></div>
        </div>
        <div class="loginBody">
            <h2>Sign Up as Admin
            </h2>
            <form name="register_form" action="registerAdmin_process.php" method="POST" onsubmit="return Validate()">
            <p style="color:cyan;">Already have an account? <a href="loginAdmin.php" style="text-decoration:underline; color:cyan;">Sign in</a></p>
                <div class="loginInputContainer">
                    <label>USERNAME</label>
                    <input placeholder="username" type="text" name="username" required/>
                </div>
                <div class="loginInputContainer">
                    <label>PASSWORD</label>
                    <input placeholder="password" type="password" name="password" id="password" required minlength="8" maxlength="600"/>
                </div>
                <div class="loginInputContainer">
                    <label>CONFIRM PASSWORD</label>
                    <input placeholder="password" type="password" name="confirm_password" id="confirm"/>
                </div>
                    <input type="submit" value="Register" id="registerButton" required>
                    
            </form>
        </div>
    </div>
    <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
</body>
</html>