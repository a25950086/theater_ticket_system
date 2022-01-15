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
            table{
                margin-top: 5%;
                margin-left: 20%;
            }
            table.table {
                border: 1px solid #1C6EA4;
                background-color: #DFD7FC;
                width: 60%;
                height:50%;
                
                text-align: center;
            }
            table.table td, table.table th {
                border: 1px solid #AAAAAA;  
            }
            table.table tbody td {
                font-size: 20px;
            }
            table.table tr:nth-child(even) {
                background: #f2f2ff;
            }
            table.table tfoot td {
                font-size: 20px;
            }
            .icon_b{
                padding-top: 3%;
                padding-left: 25%;
            }
            a{
                text-decoration:none;
            }
            .idtd{
                width:20%;
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
                <table class="table">
                    <tbody>
                        <tr>
                        <td class="idtd">會員姓名</td>
                        <td>&nbsp;</td>
                        </tr>
                        <tr>
                        <td class="idtd">會員ID</td>
                        <td>&nbsp;</td>
                        </tr>
                        <tr>
                        <td class="idtd">會員密碼</td>
                        <td><a href="javascript:" onclick="hide1.style.display=hide1.style.display=='none'?'':'none'">點我展開／隱藏密碼</a>
                            <br><span id="hide1" style="display:none">******(密碼在這)</span></td>
                        </tr>
                        <tr>
                        <td class="idtd">註冊信箱</td>
                        <td>&nbsp;</td>
                        </tr>
                        <tr>
                        <td class="idtd">電話</td>
                        <td>&nbsp;</td>
                        </tr>
                        <tr>
                        <td class="idtd">訂單查詢</td>
                        <td><a href="transaction.php">查詢訂單</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </header>
    </body>
</html>
