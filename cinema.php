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
                 <table class="blueTable" align="center" >
                        <tbody>
                                            <tr><th width='100%' height='15%' colspan='3' align='center';>影廳介紹</th></tr>
                                            <tr><td width='33%'>影廳名稱</td><td width='33%'>地址</td><td width='33%'>電話</td></tr>
                                            <tr><td width='33%'> 國賓影城</td><td width='8%'>台北市中山區長春路176號</td><td>02 25155757</td></tr>
                                            <tr><td width='33%'> 威秀影城</td><td width='8%'>台北市信義區松仁路58號</td><td>02 87800800</td></tr>
                                            <tr><td width='33%'> 大直影城</td><td width='8%'>台北市中山區敬業三路22號6樓</td><td>02 85022208</td></tr>
                                            <tr><td width='33%'> 秀泰影城</td><td width='8%'>基隆市中正區信一路177號</td><td>02 24212388</td></tr>
                                            <tr><td width='33%'> 天母影城</td><td width='8%'>台北市士林區忠誠路二段202號</td><td>02 28763330</td></tr>
                                            <tr><td colspan='3'></td></tr>
                        </tbody>
                    </table>
                  </div>    
        </header>
    </body>
</html>