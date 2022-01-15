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
                margin-top: 1%;
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
                <table class="blueTable">
                    <thead>
                        
                    </thead>
                    <tfoot>
                        
                    </tfoot>
                    <tbody>
                            <?php
                                include "db_conn.php";
                                $mTitle = "2gether電影版：只因我們天生一對";
                                if (isset($_GET['mTitle'])) {
                                    $mTitle = $_GET['mTitle'];
                                }

                                $query = ("select * from movie where mTitle = ?");
                                $stmt = $db->prepare($query);
                                $error = $stmt->execute(array($mTitle));
                                $result = $stmt->fetchAll();
                                //以上寫法是為了防止「sql injection」

                                for($i=0; $i<count($result); $i++){
                                    echo "<div>";
                                        echo "<tr><th width='100%' height='15%' colspan='5' align='center';>".$result [$i]['mTitle']."</th></tr>";
                                        echo "<tr><td width='20%'>上映日</td><td width='8%'>評價</td><td>導演</td><td>領銜主演</td><td>電影時長</td></tr>";
                                        echo "<tr><td width='20%'> ".$result [$i]['mTime']."</td><td width='8%'>".$result [$i]['mRating']."</td><td>".$result[$i]['mDirector']."</td><td>".$result[$i]['mLeading']."</td><td>".$result[$i]['mLength']."</td></tr>";
                                        echo "<tr><td colspan='5' height='auto'><div class='iframe'>".$result [$i]['mTrailer']."</div></td></tr>";
                                        echo "<tr><td colspan='5'>".$result[$i]['mPlot']."</td></tr>";
                                    echo "</div>";
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </header>
    </body>
</html>