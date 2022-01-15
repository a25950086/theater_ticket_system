<?php session_start(); ?>
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
            .signout{
                border:none;
                background-color: #7373B9;
                color:white;
                font-size:30px; 
                width:100px;
                height:auto;
                margin-left: 1%;
            }
            .edit{
                border:none;
                background-color: #7373B9;
                color:white;
                font-size:30px; 
                width:100px;
                height:auto;
                
            }
            
            button:hover {     
                background: #f2f2ff; 
                color: #7373B9; 
            }
            .edit:hover {     
                background: #f2f2ff; 
                color: #7373B9; 
            }
            form{
                display:inline;
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
                            echo '<span class="signout"> 你好&nbsp;&nbsp;'.$_SESSION['mName'].'</span>';
                            echo '<button  type="submit" class="signout" >登出</button>';
                        }
                    ?>
                </form>
            </div>
            <div class="body">
                <a  href="index.php"><img  class="icon_b" src="icon_b.png" alt="" width="50%" ></a>
                <table class="table">
                    <tbody>
                        <?php
                            include "db_conn.php";
                            $query = ("select * from member where mId = ?");
                            $stmt = $db->prepare($query);
                            $error = $stmt->execute(array($_SESSION['mId']));
                            $result = $stmt->fetchAll();
                            //以上寫法是為了防止「sql injection」

                            for($i=0; $i<count($result); $i++){
                                echo "<div>";
                                    $mName = $_SESSION['mName'];
                                    echo "<tr><td class='idtd'>會員姓名</td><td>".$_SESSION['mName']."</td></tr>";
                                    echo "<tr><td class='idtd'>會員ID</td><td>".$_SESSION['mId']."</td></tr>";
                                    echo "<tr><td class='idtd'>信箱</td><td>".$_SESSION['email']."</td></tr>";
                                    echo "<tr><td class='idtd'>電話</td><td>".$_SESSION['mPhone']."</td></tr>";
                                    echo "<tr><td class='idtd'>訂單查詢</td><td><a href='transaction.php'>查詢訂單</a></td></tr>";
                                    echo "<tr><td colspan='2'><a href='modify_member_information.php'><input button type='submit' class='edit' value='修改' ></a></td></tr>";
                                    echo "<tr><td colspan='2'><a href='delete_member.php?mName=$mName'><input button type='submit' value='刪除帳號' ></a></td></tr>";
                                echo "</div>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </header>
    </body>
</html>
