<?php session_start(); ?>

<html>
    <head>
        <meta charset="utf8"/>
        <title>購票紀錄</title>
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
            
            a{
                text-decoration:none;
            }
            table.blueTable {
                background-color: #DFD7FC;
                width: 100%;
                height:100%;
                text-align:  center;
            }
            table.blueTable td, table.blueTable th {
                border: 1px solid #AAAAAA;
                padding: 10px 10px;
            }
            table.blueTable tbody td {
                    font-size: 30px;
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
                    text-align: center;
            }
            table.blueTable tfoot .links a{
                    display: inline-block;
                    background: #7373B9;
                    color: #FFFFFF;
                    padding: 2px 15px;
                    border-radius: 15px;
            }
            .ti{
                font-size: 30px;
                width:60%;
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
                <div class="body">
                    <table class="blueTable">
                        <thead>
                            <tr>
                            <th class="idtd">No.</th>
                                    <th>電影名稱</th>
                                    <th>座位號碼</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    include "db_conn.php";
                                    $mId  = $_SESSION['mId'];
                                    $query = ("select * from transaction_seat where mId=?");
                                    $stmt = $db->prepare($query);
                                    $error = $stmt->execute(array($mId));
                                    $result = $stmt->fetchAll();
                                    //以上寫法是為了防止「sql injection」

                                    for($i=0; $i<count($result); $i++){
                                        $no = $i+1;
                                        echo "<tr>";
                                            echo "<td class='idtd'>".$no."</td>";
                                            echo "<td class='ti'>".$result [$i]['mTitle']."</td>";
                                            echo "<td>".$result [$i]['seatNumber']."</td>";
                                        echo "</tr>";
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </header>
    </body>
</html>
