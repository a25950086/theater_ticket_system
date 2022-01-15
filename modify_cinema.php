<?php session_start(); ?>

<html>
    <head>
        <meta charset="utf8"/>
        <title>修改影城資料</title>
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
            .signout{
                border:none;
                background-color: #7373B9;
                color:white;
                font-size:30px; 
                width:100px;
                height:auto;
                margin-left: 2%;
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
                <form action='logout.php'>
                    <?php
                        if(isset($_SESSION['mId'])){
                            echo '<span class="signout"> 你好 '.$_SESSION['mName'].'</span>';
                            echo '<button  type="submit" class="signout" >登出</button>';
                        }
                    ?>
                </form>
            </div>
            <div class="body">
                <a  href="index.php"><img  class="icon_b" src="icon_b.png" alt="" width="50%" ></a>
                <h1>修改影城資料</h1>
                <div class="login">
                    <?php
                        echo "<form action='update_cinema.php?cName=".$_GET['cName']."' method='post'>";
                            echo '<label for="inputAddress" class="sr-only">地址</label>';
                            echo '<input type="text" name="Address"id="inputAddress" class="form-control" placeholder="請輸入新的地址" required>';
                            echo '<br><br><br>';
                            echo '<label for="inputcPhone" class="sr-only">電話</label>';
                            echo '<input type="text" name="cPhone"id="inputcPhone" class="form-control" placeholder="請輸入新的電話" required>';
                            echo '<br><br><br>';
                            
                            echo '<button  type="submit" name="signUp">確認修改</button>';
                        echo '</form>';
                    ?>
                </div>
            </div>
        </header>
    </body>
</html>
