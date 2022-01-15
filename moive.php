<?php session_start(); ?>

<html>
    <head>
        <meta charset="utf8"/>
        <title>電影介紹</title>
        <style>
            body {
                background-color:#E6E6F2;
                margin: 0;
            }
            .top {
                width: 100%;
                height: auto;
                background-color:#7373B9;
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
            table.blueTable {
                background-color: #DFD7FC;
                width: 100%;
                height:100%;
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
                font-size: 50px;
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
                <table class="blueTable">
                    <thead>
                        <tr>
                        <th class="idtd">No.</th>
                                <th>電影名稱</th>
                                <th>評分</th>
                                <th>導演</th>
                                <th>內容簡介</th>
                                <th>詳細</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                include "db_conn.php";
                                $mTitle  = "2gether電影版：只因我們天生一對";
                                $query = ("select * from movie");
                                $stmt = $db->prepare($query);
                                $error = $stmt->execute();
                                $result = $stmt->fetchAll();
                                //以上寫法是為了防止「sql injection」

                                for($i=0; $i<count($result); $i++){
                                    $no = $i+1;
                                    $mTitle = $result [$i]['mTitle'];
                                    echo "<tr>";
                                        echo "<td>".$no."</td>";
                                        echo "<td class='idtd'>".$result [$i]['mTitle']."</td>";
                                        echo "<td>".$result [$i]['mRating']."</td>";
                                        echo "<td>".$result[$i]['mDirector']."</td>";
                                        echo "<td>".$result[$i]['mPlot']."</td>";
                                        echo "<td><a href='moive_introduce.php?mTitle=$mTitle'>查看更多</a></td>";
                                    echo "</tr>";
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </header>
    </body>
</html>