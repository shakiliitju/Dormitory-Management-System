<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
    <style>
        body {
            background: lightblue;
            margin-left: 30px;
        }

        .loginbtn {
            width: 50%;
            height: 300px;
            background-image: url(images/table1.jpg);

        }

        .div2 {
            margin-top: 100px;

        }

        button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            border-radius: 5px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <center>
        <div class="loginbtn">
            <!-- <p>Login</p> -->
            <div class="div2">
                <h1 style="color: white; ">ADMIN LOG IN</h1>
                <form action="login process.php" method="POST">

                    <input type="text" style="width: 50%; height:30px" id="user" name="username" placeholder="username" /><br><br>
                    <input type="Password" style="width: 50%; height:30px" id="pass" name="password" placeholder="password" /><br><br>
                    <button type="submit" style="width: 15%; height:30px" id="btn" name="login" default>login</button>
            </div>

            </form>
        </div>
        <h1 style="color: blue; ">As A Student</h1>
        <button type="submit" style="width: 15%; height:30px" id="btn" name="login" default><a href="../DMS/Student/signup.html">Signup</button>
    </center>

</body>

</html>