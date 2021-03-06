<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>已接受订单</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <script src="../js/rem.js"></script>
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../css/base.css"/>
    <link rel="stylesheet" type="text/css" href="../css/page.css"/>
    <link rel="stylesheet" type="text/css" href="../css/all.css"/>
    <link rel="stylesheet" type="text/css" href="../css/mui.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/loaders.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>

    <style>
        .show{
            width:1400px;
            height:800px;
            margin:auto;
        }
        table{
            width: 1400px;
            /*height: 640px;*/
            margin:50px auto 0;
            border-collapse: collapse;
            border:1px solid #f00;
        }
        table tr th{
            height: 70px;
            background-color: #f90;
            color: #fff;
        }
        table tr td{
            width: 175px;
            height: 140px;
            text-align:center;
        }
        table tr td img{
            height: 140px;
        }
        table tr td p{
            width:180px;
            height:45px;
            margin:auto;
            /*border:1px solid #ccc;*/
            /*background-color: #0f0;*/
        }
        table tr td p span{
            display:inline-block;
            float:left;
            height:45px;
            line-height:45px;
        }
        table tr td p span.minus,
        table tr td p span.add{
            width:45px;
            font-size:25px;
            background-color: #ccc;
            cursor:pointer;
        }
        table tr td p span.number{
            width:90px;
            height:43px;
            color:#f00;
            background-color: #fff;
            border-top:1px solid #ccc;
            border-bottom:1px solid #ccc;
        }
        .bottom{
            width:1400px;
            height:70px;
            margin:10px auto;
            background-color: #cd3266;
        }
        .bottom p{
            margin-right:160px;
            line-height:70px;
            font-size:20px;
            float:right;
        }
        .bottom p span{
            font-size:25px;
            color:yellow;
        }
        button{
            background-color: #f90;
            color:#fff;
            width:50px;
        }
        .tr-content{
            height:200px;
        }
        .tr-content td{
            /*height:200px;*/
        }
    </style>
    <script type="text/javascript">
        $(window).load(function(){
            $(".loading").addClass("loader-chanage")
            $(".loading").fadeOut(300)
        })
    </script>
</head>
<!--loading页开始-->
<div class="loading">
    <div class="loader">
        <div class="loader-inner pacman">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!--loading页结束-->
<body>
<div class="headertwo clearfloat" id="header">
    <a href="javascript:history.go(-1)" class="fl box-s"><i class="iconfont icon-arrow-l fl"></i></a>
    <p class="fl">已接受订单</p>
</div>

<div class="about-detail clearfloat box-s" id="main">
    <div class="ctent clearfloat box-s">
        <div class="show">
            <table border="1">
                <tr>
                    <th>订单ID</th>
                    <th>房屋ID</th>
                    <th>出租者ID</th>
                    <th>租户ID</th>
                    <th>订单状态</th>
                    <th>开始日期</th>
                    <th>租期（月）</th>
                    <th>租住人数</th>


                </tr>

                <!--                <tr class="tr-content">-->
                <!--链接数据库中的数据并显示出来-->
                <?php
                $conn = new mysqli("racjsrlrsdmr.mysql.sae.sina.com.cn", "test", "123456","test","10145");
                // Check connection
                if ($conn->connect_error) {
                    die("连接失败: " . $conn->connect_error);
                }
                $conn->query("set names utf8");
                $cookieid = $_COOKIE["logid"];
               // $sql = "SELECT Reservation.Id,name,telphone,startDate,rentTime,number,typeName FROM Reservation,Tenant,ReservationType where Reservation.tenantID=Tenant.Id and Reservation.type=3 and Reservation.type=ReservationType.typeId";
                $sql= "SELECT Id, houseID, lessorID, tenantID, typeName, startDate, rentTime, number FROM Reservation, ReservationType WHERE  Reservation.type=3 and Reservation.lessorID=$cookieid and Reservation.type=ReservationType.typeId";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // 输出数据
                    while($row = $result->fetch_assoc()) {
                        echo ("<tr class='tr-content'><td>".$row["Id"]."</td>");
                        echo ("<td>".$row["houseID"]."</td>" );
                        echo ("<td>".$row["lessorID"]."</td>" );
                        echo ("<td>".$row["tenantID"]."</td>" );
                        echo ("<td>".$row["typeName"]."</td>" );
                        echo ("<td>".$row["startDate"]."</td>" );
                        echo ("<td>".$row["rentTime"]."</td>" );
                        echo ("<td>".$row["number"]."</td>" );

                    }
                } else {
                    echo "0 结果";
                }

                $conn->close();
                ?>
                <!--                </tr>-->


            </table>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="../js/jquery-1.8.3.min.js" ></script>
<script type="text/javascript" src="../js/jquery.SuperSlide.2.1.js" ></script>
<script type="text/javascript" src="../slick/slick.min.js" ></script>
<script type="text/javascript" src="../js/jquery.leanModal.min.js"></script>
<script type="text/javascript" src="../js/tchuang.js" ></script>
<script type="text/javascript" src="../js/hmt.js" ></script>



</html>