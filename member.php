<html>
    <head>
        <meta charset="utf8"/>
        <title>會員專區</title>
        <style>
            body {
                background-color: #E6E6F2;
                margin: 0;
            }
            .top {
                width: 100%;
                height: auto;
                background-color:	#7373B9;
            }
            .body{
                margin-left: 15%;
                margin-top: 3%;
                width: 70%;
                height: 80%;
                background-color:#f2f2ff;
            }
            .icon{
                padding-top: 5px;
                padding-left: 15%;
            }
            .icon_s{
                padding-left: 10%;
            }
            .icon_b{
                padding-top: 3%;
                padding-left: 25%;
            }
            h1{
                text-align:center;
            }
            .login{
                text-align:center;
            }
        </style>    
    </head>
    <body>
        <header class="header">
            <div class="top">
                <a href="index.php">
                    <img class="icon" src="icon.png" height="100px" width="auto">
                </a>
                <a href="cinema.php">
                    <img class="icon_s" src="cinema.png" height="50px" width="auto">
                </a>
                <a href="moive.php">
                    <img class="icon_s" src="movie.png" height="50px" width="auto">
                </a>
                <a href="member.php">
                    <img class="icon_s" src="member.png" height="50px" width="auto">
                </a>
            </div>
            <div class="body">
                <a  href="index.php"><img  class="icon_b" src="icon_b.png" alt="" width="50%" ></a>
                <h1>登入</h1>
                <div class="login">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="text" name="email"id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <br><br><br>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password"id="inputPassword" class="form-control" placeholder="Password" required>
                <br><br><br>
                <a href="insert_member.php">註冊</a>
                <button  type="submit" name="signIn">登入</button>
                </div>
               
               
            </div>
        </header>
    </body>
</html>