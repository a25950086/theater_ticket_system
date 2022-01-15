<?php session_start(); ?>

<html>
    <head>
        <meta charset="utf8"/>
        <title>影城介紹</title>
        <style>
            body {
                background-color: #E6E6F2;
                margin: 0;
            }
            .body{
                margin-left: 15%;
                margin-top: 3%;
                width: 70%;
                height: 200%;
                background-color:#f2f2ff;
            }
            .top {
                width: 100%;
                height: auto;
                background-color:	#7373B9;
            }
            .icon{
                padding-top: 5px;
                padding-left: 15%;
            }
            .icon_b{
                padding-top: 3%;
                padding-left: 25%;
            }
            .icon_s{
                padding-left: 10%;
            }
            h1{
                color: #7373B9;
                font-size:50px;
                text-align:center;
            }
            h2{
                color: #7373B9;
                font-size:30px ;
                margin-left: 15%;
            }
            table.blueTable {
                width: 30%;
                height:8%;
                text-align:center;
                color:blueviolet;
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
                <h1>影城販賣商品</h1>
                <table class="blueTable" align="center" >
                    <thead>
                        <tr>
                        <th class="idtd">品名</th>
                                <th>價格</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "db_conn.php";
                            if (isset($_GET['cName'])) {
                                $cName = $_GET['cName'];
                            }

                            $query = ("select * from product where cName = ?");
                            $stmt = $db->prepare($query);
                            $error = $stmt->execute(array($cName));
                            $result = $stmt->fetchAll();
                            //以上寫法是為了防止「sql injection」

                            for($i=0; $i<count($result); $i++){
                                echo '<table class="blueTable" align="center">';
                                echo "<div>";
                                    echo "<tr><td width='33%'>".$result [$i]['pName']."</td><td width='33%'>".$result [$i]['Price']."</td></tr>";
                                echo "</div>";
                            }
                        ?>
                    </tbody>
                 </table>
                            
            </div>
        </header>
    </body>
</html>