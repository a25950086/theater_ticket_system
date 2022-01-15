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
            table.blueTable {
                background-color: #DFD7FC;
                width: 60%;
                height:50%;
                text-align: left;
                }
                table.blueTable td, table.blueTable th {
                border: 1px solid #AAAAAA;
                padding: 10px 10px;
                }
                table.blueTable tbody td {
                font-size: 13px;
                }
                table.blueTable tr:nth-child(even) {
                background: #F2F2FF;
                }
                table.blueTable thead {
                background: #7373B9;
                height: 12%;
                }
                table.blueTable thead th {
                font-size: 10px;
                font-weight: bold;
                color: #FFFFFF;
                text-align: center;
                }
                table.blueTable tfoot {
                font-size: 14px;
                height: 20%;
                font-weight: bold;
                color: #FFFFFF;
                background: #F2F2FF;
                }
                table.blueTable tfoot td {
                font-size: 50px;
                width: auto;
                }
                table.blueTable tfoot .links {
                text-align: right;
                }
                table.blueTable tfoot .links a{
                display: inline-block;
                background: #7373B9;
                color: #FFFFFF;
                padding: 2px 15px;
                border-radius: 15px;
                }
                a {
                    text-decoration:none;
                }
                .idtd{
                    width:10%;
                }
                .iframe {
                    position: relative;
                    width: 100%;
                    height: 0;
                    padding-bottom: 56.25%;
                }
                .iframe iframe{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
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
                <a href="moive.php">
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
                <table class="blueTable" align="center" >
                    <thead>
                        <tr>
                        <th class="idtd">影廳名稱</th>
                                <th>地址</th>
                                <th>電話</th>
                                <th>詳細</th>
                                <?php
                                    if($_SESSION['mId']=='v123456789'){
                                        echo "<th>更多選項</th>";
                                    }
                                ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                include "db_conn.php";
                                $query = ("select * from cinemas");
                                $stmt = $db->prepare($query);
                                $error = $stmt->execute();
                                $result = $stmt->fetchAll();
                                //以上寫法是為了防止「sql injection」

                                for($i=0; $i<count($result); $i++){
                                    $cName = $result [$i]['cName'];
                                    echo "<tr>";
                                        echo "<td>".$result [$i]['cName']."</td>";
                                        echo "<td>".$result [$i]['Address']."</td>";
                                        echo "<td>".$result [$i]['cPhone']."</td>";
                                        echo "<td><a href='product.php?cName=$cName'>查看更多</a></td>";
                                        if($_SESSION['mId']=='v123456789'){
                                            $cName = $result [$i]['cName'];
                                            echo "<td><a href='modify_cinema.php?cName=$cName'>更新</a> / <a href='delete_cinama.php?cName=$cName'>刪除</a></td>";
                                        }
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    <?php
                        if($_SESSION['mId']=='v123456789'){
                            echo "<a href='new_cinema.php'>新增影城</a>";
                        }
                    ?>
                 </table>
            </div>    
        </header>
    </body>
</html>