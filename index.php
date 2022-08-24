<!DOCTYPE html>
<html>
<head>
    <title>IMS Login - Inventory Management System</title>
    <!-- <link rel="stylesheet" type="text/css" href="login.css"> -->
    <style>
        body{
            /* background-color: rgb(21, 150, 241); */
            background-image:url('login/warehouse.png'); 
            display:block;
            height: 100%;
            width: 100%;
        } 

        .loginHeader{
            text-align:center;
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
            
        }
        .loginHeader h2{
            color:rgb(2, 2, 2);
            font-weight: bolder;font-style: italic;
            text-decoration: underline;   
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
        .loginButton{
            margin-top: 10px;
            text-align:center;
        }
        .loginButton input{
            font-size:20px;
            padding: 5px 20px;
            background-color: rgba(0, 217, 255, 0.61);
            color: white;;
        }
        .registerButton{
            margin-top: 10px;
            text-align:center;
        }
        .registerButton input{
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
            <h2>LOGIN</h2>
            <form name="myform" action="login/login_process.php" method="POST" >
                <div class="loginInputContainer">
                    <label for="username">USERNAME</label>
                    <input placeholder="username" type="text" name="username" required/>
                </div>
                <div class="loginInputContainer">
                    <label for="password">PASSWORD</label>
                    <input placeholder="password" type="password" name="password" required/>
                </div>
                <div class="loginButton">
                    <input type="submit" value="Login">
                </div>

                <div class="registerButton">
                <a href="login/loginAdmin.php"><input type="button" value="Login as Admin"></a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>