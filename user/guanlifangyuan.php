<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>管理房源</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <script src="js/rem.js"></script> 
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/base.css"/>
    <link rel="stylesheet" type="text/css" href="css/page.css"/>
    <link rel="stylesheet" type="text/css" href="css/all.css"/>
    <link rel="stylesheet" type="text/css" href="css/mui.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/loaders.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

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
		.title{
			color:#fff;
		}
		.modal-content{
			top:130px;
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
			<p class="fl">管理房源</p>
		</div>
		
		<div class="about-detail clearfloat box-s" id="main">
			<div class="ctent clearfloat box-s">

			</div>			
		</div>

		<div class="about-detail clearfloat box-s" id="main">
			<div class="ctent clearfloat box-s">
				<div class="show">
					<table border="1">
						<tr>
							<th>id</th>
							<th>租户姓名</th>
							<th>房间状态</th>
							<th>城市</th>
							<th>所在区</th>
							<th>街道</th>
							<th>面积</th>
							<th>租金</th>
							<th>折扣</th>
							<th>种类</th>
							<th>操作</th>

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
						$sql = "SELECT house.ID, Lessor.name, Status.statusName, city, county, street, area, rent, Discount.discountName, house.type FROM house, Lessor, Status, Discount where Lessor.Id=house.lessorID and house.status=Status.statusId and house.discount=Discount.discountID";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// 输出数据
							while($row = $result->fetch_assoc()) {
								echo ("<tr class='tr-content'><td>".$row["ID"]."</td>");
								echo ("<td>".$row["name"]."</td>" );
								echo ("<td>".$row["statusName"]."</td>" );
								echo ("<td>".$row["city"]."</td>" );
								echo ("<td>".$row["county"]."</td>" );
								echo ("<td>".$row["street"]."</td>" );
								echo ("<td>".$row["area"]."</td>" );
								echo ("<td>".$row["rent"]."</td>" );
								echo ("<td>".$row["discountName"]."</td>" );
								echo ("<td>".$row["type"]."</td>" );
								echo ("<td>

                            <button  role=\"button\" data-toggle=\"modal\"
                          	        data-target=\"#houseinfo-modify\"
                                    onclick=\"modify(".$row["ID"].")\">修改
                            </button>
                            <button
                                onclick=\"deleteinfo(".$row["ID"].")\">删除
                            </button>

                </td></tr>");
							}
						} else {
							echo "0 结果";
						}

						$conn->close();
						?>



					</table>
				</div>
			</div>
		</div>

	</body>
<div class="container">
<div class="modal fade" id="houseinfo-modify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">编辑房源</h4>
				<h5 ><font color="red">注：ID不可以更改！</font></h5>
			</div>
			<div class="modal-body">
				<form action="#">
					<div class="form-group">
						<label for="compileid">房ID</label>
						<input type="text" value="" id="modifyid" class="form-control" placeholder="请输入ID" style="width:95%;">
					</div>
					<div class="form-group">
						<label for="compilename">城市</label>
						<input type="text" id="modifycity" class="form-control" placeholder="请输入城市" style="width:95%;">
					</div>
					<div class="form-group">
						<label for="compilesex">所在区</label>
						<input type="text" id="modifycounty" class="form-control" placeholder="请输入所在区" style="width:95%;">
					</div>
					<div class="form-group">
						<label for="compilevip">街道</label>
						<input type="text" id="modifystreet" class="form-control" placeholder="街道" style="width:95%;">
					</div>
					<div class="form-group">
						<label for="compilephone">面积</label>
						<input type="text" id="modifyarea" class="form-control" placeholder="请输入面积" style="width:95%;">
					</div>
					<div class="form-group">
						<label for="compilevip">租金</label>
						<input type="text" id="modifyrent" class="form-control" placeholder="请输入租金" style="width:95%;">
					</div>
					<div class="form-group">
						<label for="compilevip">种类</label>
						<input type="text" id="modifytype" class="form-control" placeholder="请输入种类" style="width:95%;">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				<button type="button" id="modify_btn"class="btn btn-primary">修改</button>
			</div>
		</div>
	</div>
</div>
</div>

	<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
	<script type="text/javascript" src="js/jquery.SuperSlide.2.1.js" ></script>
	<script type="text/javascript" src="slick/slick.min.js" ></script>
	<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	<script type="text/javascript" src="js/tchuang.js" ></script>
	<script type="text/javascript" src="js/hmt.js" ></script>

<script type="text/javascript">

	function deleteinfo(id) {
		var judge= confirm("您确认删除该房源信息吗?");
		if(judge ==1)
		{
			$.ajax({
				type:"get",
				url:"dboperate/houseinfo_delete.php",
				async:false,
				data:{
					id:id
				},
				dataType:"text",
				success:function(data){
						alert("删除房源成功");
						window.location.href="guanlifangyuan.php";


				},
				error: function(){
					alert("服务器连接失败");
					window.location.href="guanlifangyuan.php";
					return false;
				}
			});
		}
		else
			return ;
	}

	function modify(id){
		$("#modifyid").attr("value",id);

	}

	$("#modify_btn").on("click",function () {

		var id=$("#modifyid").val().trim();
		var city=$("#modifycity").val().trim();
		var county=$("#modifycounty").val().trim();
		var street=$("#modifystreet").val().trim();
		var area=$("#modifyarea").val().trim();
		var rent=$("#modifyrent").val().trim();
		var type=$("#modifytype").val().trim();

		if(id == ""||city==""||county==""||street==""||area==""||rent==""||type=="")
		{
			alert("信息不可为空");
		}

		$.ajax({
			type:"get",
			url:"dboperate/houseinfo_modify.php",
			async:false,
			data:{
				id:id,
				city:city,
				county:county,
				street:street,
				area:area,
				rent:rent,
				type:type
			},
			dataType:"text",
			success:function(data){

					alert("修改房源信息成功");
					window.location.href="guanlifangyuan.php";


			},
			error: function(){

				alert("服务器连接失败");
				return false;
			}
		});
	})
</script>

</html>
