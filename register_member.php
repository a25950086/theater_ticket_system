<html>
    <head>
        <meta charset="utf8"/>
        <title>註冊會員</title>
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
                <a href="movie.php">
                    <img class="icon_s" src="movie.png" height="50px" width="auto">
                </a>
                <a href="member.php">
                    <img class="icon_s" src="member.png" height="50px" width="auto">
                </a>
            </div>
            <div class="body">
                <a  href="index.php"><img  class="icon_b" src="icon_b.png" alt="" width="50%" ></a>
                <h1>註冊</h1>
                <div class="login">
                <form action='insert_member.php' method='post'>
                    <label for="inputmId" class="sr-only">身分證字號</label>
                    <input type="text" name="mId"id="inputmId" class="form-control" placeholder="請輸入身分證字號" required autofocus>
                    <br><br><br>
                    <label for="inputPassword" class="sr-only">密碼</label>
                    <input type="password" name="password"id="inputPassword" class="form-control" placeholder="請輸入密碼" required>
                    <br><br><br>
                    <label for="inputmName" class="sr-only">姓名</label>
                    <input type="text" name="mName"id="inputmName" class="form-control" placeholder="請輸入姓名" required>
                    <br><br><br>
                    <label for="inputmPhone" class="sr-only">電話</label>
                    <input type="text" name="mPhone"id="inputmPhone" class="form-control" placeholder="請輸入電話" required>
                    <br><br><br>
                    <label for="inputemail" class="sr-only">email</label>
                    <input type="text" name="email"id="inputemail" class="form-control" placeholder="請輸入email" required>
                    <br><br><br>
                    <button  type="submit" name="signUp">註冊</button>
                </form>
                </div>
            </div>
        </header>
    </body>
</html>
