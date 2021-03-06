<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>我要出租</title>
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
    <script type="text/javascript" src="js/menu.js" ></script>
    <link rel="stylesheet" href="css/mui.min1.css">
	<link rel="stylesheet" type="text/css" href="css/app.css" />
	<link rel="stylesheet" type="text/css" href="css/mui.picker.min.css" />
	<link href="css/mui.picker.css" rel="stylesheet" />
	<link href="css/mui.poppicker.css" rel="stylesheet" />
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
			<span class="fl box-s">威海<i class="iconfont icon-iconfontarrowdown-copy"></i></span>
			<p class="fl bt">我要出租</p>
			<a href="#" class="fr"><i class="iconfont icon-sousuo fl"></i></a>
		</div>	
		
		<div class="clearfloat" id="main">
			<div class="lease clearfloat">
				<div class="top clearfloat box-s">
					<i class="iconfont icon-gonggao fl"></i>
					<span class="fl box-s">请填认证写您的房源信息，审核通过后会发布上架！</span>
				</div>
				<div class="land-ctent land-ctenttwo clearfloat">
					<ul>
						<li class="box-s clearfloat">
							<p class="tit fl">城市</p>
							<input type="text" name="" id="addcity" value="" placeholder="请输入城市" class="fl" />
						</li>
						<li class="box-s clearfloat">
							<p class="tit fl">所在区</p>
							<input type="text" name="" id="addcounty" value="" placeholder="请输入所在区名称" class="fl" />
						</li>
						<li class="box-s clearfloat">
							<p class="tit fl">街道</p>
							<input type="text" name="" id="addstreet" value="" placeholder="请输入街道" class="fl" />
						</li>
						<li class="box-s clearfloat">
							<p class="tit fl">面积</p>
							<input type="text" name="" id="addarea" value="" placeholder="请输入房屋面积" class="fl" />
							<!--<button id='demo2' data-options='{"type":"date","beginYear":2014,"endYear":2016}' class="btnfour mui-btn mui-btn-block fl day">请选择起租日期</button>-->
							<!--<i class="iconfont icon-arrowright fl"></i>-->
						</li>
						<li class="box-s clearfloat" id='showUserPicker'>
							<p class="tit fl">租金</p>
							<input type="text" name="" id="addrent" value=""  placeholder="请输入预期租金" class="fl" />
							<!--<i class="iconfont icon-arrowright fl"></i>-->
						</li>
						<li class="box-s clearfloat">
							<p class="tit fl">房屋类型</p>
							<input type="text" name="" id="addtype" value="" placeholder="1.宾馆；类型2.别墅；3.民房；4.公寓" class="fl" />
						</li>

						<!--<li class="box-s clearfloat">-->
							<!--<p class="tit fl">意向户型</p>-->
							<!--<input type="text" name="" id="" value="" readonly="readonly" placeholder="请选择户型" class="fl day" />-->
							<!--<i class="iconfont icon-arrowright fl"></i>-->
						<!--</li>-->
					</ul>					
				</div>
				<div class="tiaoli">
					<input type="checkbox" name="" id="check" value=""/>
					<label for="check">我已阅读并同意<span>《c2c旅游者租房出租委托协议》</span></label>
				</div>
				<a href="#loginmodal" id="modaltrigger">
					<input type="button" name="" id="submit" value="提交委托" class="btn" />
				</a>
			</div>
		</div>

		<script type="text/javascript">

			$("#submit").on("click",function(){
				var city=$("#addcity").val().trim();
				var county =$("#addcounty").val().trim();
				var street=$("#addstreet").val().trim();
				var area=$("#addarea").val().trim();
				var rent=$("#addrent").val().trim();
				var type=$("#addtype").val().trim();


				if(city==""||county==""||street==""||area==""||rent==""||type==""){
					alert("城市，所在区，街道，面积，租金，房屋类型不能为空");
					return false;
				}
				else{
					$.ajax({
						type:"get",
						url:"dboperate/houselease-add.php",
						async:false,
						data:{
							city:city,
							county:county,
							street:street,
							area:area,
							rent:rent,
							type:type
						},
						dataType:"text",
						success:function(msg){
							alert("添加预定成功"+msg);
							window.location.href="house-details1.php";

						},
						error: function(){
							alert("服务器连接失败");
							return false;
						}
					});
				}
			})
		</script>



		<footer class="page-footer fixed-footer" id="footer">
			<ul>
				<li>
					<a href="index.html">
						<i class="iconfont icon-shouyev1"></i>
						<p>首页</p>
					</a>
				</li>
				<li class="active">
					<a href="lease.php">
						<i class="iconfont icon-chuzuwo"></i>
						<p>我要出租</p>
					</a>
				</li>
				<li>
					<a href="schedule.html">
						<i class="iconfont icon-richengbiao"></i>
						<p>看房日程</p>
					</a>
				</li>
				<li>
					<a href="sign.html">
						<i class="iconfont icon-gerenzhongxin"></i>
						<p>个人中心</p>
					</a>
				</li>
			</ul>
		</footer>
		
<!--		<!--弹窗内容 star-->
<!--	    <div id="loginmodal" class="box-s loginmodaltwo" style="display:none;">
			<form id="loginform" name="loginform" method="post" action="">		
				<div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blutwo hidemodal" value="" tabindex="3"></div>
			</form>
			<div class="bottom clearfloat box-s">
				<div class="login-dui clearfloat">
					<p class="tu">
						<img src="img/dui.png"/>
					</p>
					<p class="tit">
						恭喜您，委托成功！
					</p>
					<p class="fu-tit">
						请保持所填号码手机的通话畅通状态，我们的客服将会在48小时内与您取得联系。
					</p>
				</div>
				<input type="button" name="" id="" value="好的，我知道了" class="btn btn1" />
			</div>
		</div>-->
	    <!--弹窗内容 end-->-->
	</body>

	<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
	<script type="text/javascript" src="slick/slick.min.js" ></script>
	<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	<script type="text/javascript" src="js/tchuang.js" ></script>
	<script type="text/javascript" src="js/hmt.js" ></script>
	<script src="js/mui.min.js"></script>
	<script src="js/mui.picker.min.js"></script>
	]<script src="js/mui.picker.js"></script>
	<script src="js/mui.poppicker.js"></script>
	<script src="js/city.data.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/city.data-3.js" type="text/javascript" charset="utf-8"></script>
	<script>
		(function($) {
			$.init();
			var result = $('#result')[0];
			var btns = $('.btnfour');
			btns.each(function(i, btn) {
				btn.addEventListener('tap', function() {
					var optionsJson = this.getAttribute('data-options') || '{}';
					var options = JSON.parse(optionsJson);
					var id = this.getAttribute('id');
					var picker = new $.DtPicker(options);
					picker.show(function(rs) {
						result.innerText = '选择结果: ' + rs.text;
						picker.dispose();
					});
				}, false);
			});
		})(mui);
	</script>
	<script>
		(function($, doc) {
			$.init();
			$.ready(function() {
				var userPicker = new $.PopPicker();
				userPicker.setData([{
					value: '',
					text: '整租'
				}, {
					value: '',
					text: '合租'
				}, {
					value: '',
					text: '短租/日租公寓'
				}, {
					value: '',
					text: '厂房/仓库/土地/车位'
				}, {
					value: '',
					text: '写字楼租售'
				}, {
					value: '',
					text: '商铺出租'
				}]);
				var showUserPickerButton = doc.getElementById('showUserPicker');
				var userResult = doc.getElementById('userResult');
				showUserPickerButton.addEventListener('tap', function(event) {
					userPicker.show(function(items) {
						userResult.innerText = JSON.stringify(items[0]);
					});
				}, false);
			
			
			});
		})(mui, document);
	</script>
</html>
