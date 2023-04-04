<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        $number = $_POST['number'];
        $first_name=  $_POST['first_name'];
        $last_name=  $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,number,first_name,last_name,email,gender) values ('$user_id','$user_name','$password','$number','$first_name','$last_name','$email','$gender')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
</head>

<body>

    <style>
    html {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: linear-gradient(#16a085, #99ff99);
    }

    .login-box {
        position: absolute;
        top: 60%;
        left: 50%;
        width: 990px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: #f2f2f2;
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }

    .login-box h2 {
        margin: 0 0 10px;
        padding: 0;
        color: rgba(0, 0, 0, .6);
        text-align: center;
        font-size: 32px;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: rgba(0, 0, 0, .6);
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid rgba(0, 0, 0, .6);
        outline: none;
        background: transparent;
    }

    .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: rgba(0, 0, 0, .6);
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #16a085;
        font-size: 12px;
    }

    .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #16a085;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }

    .login-box a:hover {
        background: #16a085;
        color: rgba(0, 0, 0, .6);
        border-radius: 5px;
        box-shadow: 0 0 5px #16a085,
            0 0 25px #16a085,
            0 0 50px #16a085,
            0 0 100px #16a085;
    }

    .login-box a span {
        position: absolute;
        display: block;
    }

    .login-box a span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #16a085);
        animation: btn-anim1 1s linear infinite;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    .login-box a span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #16a085);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }

    @keyframes btn-anim2 {
        0% {
            top: -100%;
        }

        50%,
        100% {
            top: 100%;
        }
    }

    .login-box a span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #16a085);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }

    .new {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: rgba(0, 0, 0, .6);
        pointer-events: none;

    }

    @keyframes btn-anim3 {
        0% {
            right: -100%;
        }

        50%,
        100% {
            right: 100%;
        }
    }

    .login-box a span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #16a085);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }

    @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }

        50%,
        100% {
            bottom: 100%;
        }
    }
    </style>

    <div Class="login-box">
        <h2>Sign Up </h2>
        <form method="post">

            <div class="user-box">
                <input id="text" type="text" name="first_name"><label>First Name</label>
            </div>

            <div class="user-box">
                <input id="text" type="text" name="last_name"><label>Last Name</label>
            </div>

            <div class="user-box">
                <input id="text" type="text" name="email"><label>Email</label>
            </div>

            <div class="user-box">
                <input id="text" type="text" name="user_name"><label>User Name</label>
            </div>

            <div class="user-box">
                <input id="text" type="text" name="number"><label>Phone Number</label>
            </div>

            <div class="user-box">
                <br>
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="nots">Prefer Not to say</option>
                    <option value="other">Other</option>
                </select>

                <label style="position: absolute;
        top: -20px;
        left: 0;
        color: #16a085;
        font-size: 12px;">Gender</label>
            </div>
            <br><br>
            <div class="user-box"><input id="text" type="password" name="password"> <label>Password</label>
            </div>

            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input id="button" type="submit" value="Sign Up">


            </a>

            <p> <a href="index.php">Click to Login</a><br><br>
            </p>

        </form>
    </div>

    <p style="position:absolute; bottom: 20px; right: 15px;  font-size: 32px; "><i class="fas fa-heartbeat"></i>
        <strong>SC</strong>ure
    </p>
</body>

</html>