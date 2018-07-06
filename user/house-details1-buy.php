<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>房源详情</title>
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
			<p class="fl">房源详情</p>
			<a href="#" class="fr" onClick="toshare()"><i class="iconfont icon-fenxiang fl"></i></a>
		</div>
		
		<!--分享内容-->
		<div class="am-share">
		  <h3 class="am-share-title">分享到</h3>
		  <ul class="am-share-sns">
		    <li><a href="#"> <i class="iconfont icon-weixin weixin"></i> <span>微信</span> </a> </li>
		    <li><a href="#"> <i class="iconfont icon-qq qq"></i> <span>QQ</span> </a> </li>
		    <li><a href="#"> <i class="iconfont icon-weibo weibo"></i> <span>微博</span> </a> </li>
		    <li><a href="#"> <i class="iconfont icon-renrenwang renren"></i> <span>人人</span> </a> </li>
		  </ul>
		  <div class="am-share-footer"><button class="share_btn">取消</button></div>
		</div>
		
		<div class="clearfloat" id="main">		
			<div class="service clearfloat">
				<div class="slider one-time">
					<div>
						<img src="upload/room.jpg"/>
						<div class="tit clearfloat box-s">
							<p class="one">华府骏苑1</p>
							<p class="two">蜀山区-望潜交口</p>
						</div>
					</div>
					<div>
						<img src="upload/room.jpg"/>
						<div class="tit clearfloat box-s">
							<p class="one">华府骏苑2</p>
							<p class="two">蜀山区-望潜交口</p>
						</div>
					</div>
					<div>
						<img src="upload/room.jpg"/>
						<div class="tit clearfloat box-s">
							<p class="one">华府骏苑3</p>
							<p class="two">蜀山区-望潜交口</p>
						</div>
					</div>
					<div>
						<img src="upload/room.jpg"/>
						<div class="tit clearfloat box-s">
							<p class="one">华府骏苑4</p>
							<p class="two">蜀山区-望潜交口</p>
						</div>
					</div>
				</div>
			</div>		
			
			<div class="service-top clearfloat box-s">
				<div class="left fl clearfloat box-s">
					<p class="tit titwo">2500<span>元/月</span></p>
					<p class="fu-tit">三室一厅一卫   |  125m²  |  普装</p>
				</div>
				<div class="right fl clearfloat">
					<i class="iconfont icon-shoucang"></i>
					<p>收藏</p>
				</div>
			</div>
			
			<div class="service-ctent clearfloat">
				<div class="recom-tit clearfloat box-s">
		    		<p>房屋信息</p>
		    	</div>
		    	<div class="service-list clearfloat box-s">
		    		<ul>
		    			<li>类型：住宅</li>
		    			<li>朝向：南</li>
		    			<li>楼层：12/28 </li>
		    			<li>装修：精装修</li>
		    			<li>现状：空闲</li>
		    			<li>可入驻：2016/03/07</li>
		    			<li>建造年代：2008年</li>
		    			<li>可看房：2016/03/07以后</li>
		    		</ul>
		    		<p class="service-tit">交通：公交8路、111、124、136、156</p>
		    	</div>		    	
			</div>
			
			<div class="service-ctent clearfloat">
				<div class="recom-tit clearfloat box-s">
		    		<p>配置设施</p>
		    	</div>
		    	<div class="service-ties clearfloat box-s">
		    		<ul>
		    			<li><i class="iconfont icon-chuangdian"></i>床</li>
		    			<li><i class="iconfont icon-dpc"></i>衣柜</li>
		    			<li><i class="iconfont icon-shafa"></i>沙发</li>
		    			<li><i class="iconfont icon-7"></i>燃气</li>
		    			<li><i class="iconfont icon-xiyiji"></i>洗衣机</li>
		    			<li><i class="iconfont icon-wifi"></i>网络</li>
		    			<li><i class="iconfont icon-bingxiang"></i>冰箱</li>
		    			<li><i class="iconfont icon-bangongzhuo"></i>书桌</li>
		    			<li><i class="iconfont icon-kongdiao"></i>空调</li>
		    			<li><i class="iconfont icon-zhuozi"></i>餐桌</li>
		    			<li><i class="iconfont icon-yizi"></i>椅子</li>
		    			<li><i class="iconfont icon-weibolu"></i>微波炉</li>
		    			<li><i class="iconfont icon-dianshi"></i>电视</li>
		    			<li><i class="iconfont icon-reshui"></i>热水器</li>
		    			<li><i class="iconfont icon-chugui"></i>橱柜</li>
		    			<li><i class="iconfont icon-xiyouyanji"></i>油烟机</li>
		    			<li><i class="iconfont icon-gsdt"></i>电梯</li>
		    			<li><i class="iconfont icon-nuanqi"></i>供暖</li>
		    			<li><i class="iconfont icon-tingchewei"></i>车位</li>
		    			<li><i class="iconfont icon-menjin"></i>门禁</li>
		    		</ul>
		    	</div>
			</div>
			
			<div class="service-ctent clearfloat">
				<div class="recom-tit clearfloat box-s">
		    		<p>房源描述</p>
		    	</div>
		    	<p class="tit box-s">
		    		出租的房间是次卧，南北通透，阳光充足，空气流通，男女不限，带独
					立卫生间，还有独立的厨房，是配置最齐全的一个单间。
		    	</p>
			</div>
			
			<div class="service-ctent clearfloat">
				<div class="recom-tit clearfloat box-s">
		    		<p>相似好房</p>
		    	</div>
		    	<div class="recom-xia clearfloat box-s">
		    		<div class="list clearfloat fl">
		    			<a href="house-details.php">
			    			<div class="tu">
			    				<span></span>
			    				<img src="upload/room.jpg"/>
			    			</div>
			    			<div class="bottom clearfloat">
			    				<div class="top clearfloat">
			    					<p class="biaoti">华府骏苑</p>
			    					<p class="price">1500<span>元/月</span></p>
			    				</div>
			    				<p class="fu-tit">
			    					三室一厅一卫   |  125m²  |  普装
			    				</p>
			    			</div>
		    			</a>
		    		</div>
		    		<div class="list clearfloat fl">
		    			<a href="house-details.php">
			    			<div class="tu">
			    				<span></span>
			    				<img src="upload/room1.jpg"/>
			    			</div>
			    			<div class="bottom clearfloat">
			    				<div class="top clearfloat">
			    					<p class="biaoti">西山雅苑</p>
			    					<p class="price">1800<span>元/月</span></p>
			    				</div>
			    				<p class="fu-tit">
			    					三室一厅一卫   |  105m²  |  普装
			    				</p>
			    			</div>
		    			</a>
		    		</div>
		    		<div class="list clearfloat fl">
		    			<a href="house-details.php">
			    			<div class="tu">
			    				<span></span>
			    				<img src="upload/room2.jpg"/>
			    			</div>
			    			<div class="bottom clearfloat">
			    				<div class="top clearfloat">
			    					<p class="biaoti">东方明珠</p>
			    					<p class="price">2200<span>元/月</span></p>
			    				</div>
			    				<p class="fu-tit">
			    					三室二厅一卫   |  118m²  |  普装
			    				</p>
			    			</div>
		    			</a>
		    		</div>
		    	</div>
			</div>
			
		</div>
		
		<div class="footer-look clearfloat" id="footer">
			<a href="#loginmodal" id="modaltrigger">我要下单</a>
		</div>

		
		<!--弹窗内容 star-->
	    <div id="loginmodal" class="box-s loginmodal" style="display:none;top:5px !important;">
			<form id="loginform" name="loginform" method="post" action="">		
				<div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="" tabindex="3"></div>
			</form>
			<div class="top clearfloat box-s">
				正式订单
			</div>
			<div class="bottom clearfloat box-s">
				<ul id='move'>
					<li class="clearfloat">
						<i class="iconfont icon-user"></i>
						<input type="text" name="" id="tid" value="" placeholder="您的ID" />
					</li>
					<li class="clearfloat">
						<i class="iconfont icon-phone"></i>
						<input type="text" name="" id="tidentify" value="" placeholder="您的身份证号" />
					</li>
					<li class="clearfloat">
						<i class="iconfont icon-calendar"></i>
						<input type="text" name="" id="lid" value="" placeholder="户主ID" />
					</li>
					<li class="clearfloat">
						<i class="iconfont icon-user"></i>
						<input type="text" name="" id="lidentify" value="" placeholder="户主身份证号" />
					</li>
					<li class="clearfloat">
						<i class="iconfont icon-user"></i>
						<input type="text" name="" id="hid" value="" placeholder="房间ID" />
					</li>
					<li class="clearfloat">
						<i class="iconfont icon-user"></i>
						<input type="text" name="" id="sdate" value="" placeholder="开始日期" />
					</li>
					<li class="clearfloat">
						<i class="iconfont icon-user"></i>
						<input type="text" name="" id="rent" value="" placeholder="租期（单位/月）" />
					</li>
					<li class="clearfloat">
						<i class="iconfont icon-user"></i>
						<input type="text" name="" id="number" value="" placeholder="租住人数" />
					</li>
				</ul>
				<input type="button" name="" id="pay" value="立即下单" class="btn" />
			</div>
		</div>
	    <!--弹窗内容 end-->

	</body>


<script type="text/javascript">

    $("#pay").on("click",function(){
        var tid=$("#tid").val().trim();
        var tidentify=$("#tidentify").val().trim();
        var lid=$("#lid").val().trim();
        var lidentify=$("#lidentify").val().trim();
        var hid=$("#hid").val().trim();
        var sdate=$("#sdate").val().trim();
        var rent=$("#rent").val().trim();
        var number=$("#number").val().trim();



        if(number==""){
            alert("信息不能为空");
            return false;
        }
        else{
            $.ajax({
                type:"get",
                url:"dboperate/formal_reservation_add.php",
                async:false,
                data:{
                    tid:tid,
                    tidentify:tidentify,
                    lid:lid,
                    lidentify:lidentify,
                    hid:hid,
                    sdate:sdate,
                    rent:rent,
                    number:number
                },
                dataType:"json",
                success:function(msg){
                    alert("添加预定成功"+msg);
                    window.location.href="formal_reservation_add.php";

                },
                error: function(){
                    alert("服务器连接失败");
                    return false;
                }
            });
        }
    })
</script>

	<script>
		var pay = document.getElementById("pay");
		pay.onclick = function () {
			alert("提交成功！");
		}


	</script>

	<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
	<script type="text/javascript" src="slick/slick.min.js" ></script>
	<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	<script type="text/javascript" src="js/tchuang.js" ></script>
	<script type="text/javascript" src="js/hmt.js" ></script>
	<script type="text/javascript">
		$('.one-time').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 1,
		  touchMove: false,
		  slidesToScroll: 1
		});
	</script>
	<!--分享js-->
	<script type="text/javascript">
		function toshare(){
			$(".am-share").addClass("am-modal-active");	
			if($(".sharebg").length>0){
				$(".sharebg").addClass("sharebg-active");
			}else{
				$("body").append('<div class="sharebg"></div>');
				$(".sharebg").addClass("sharebg-active");
			}
			$(".sharebg-active,.share_btn").click(function(){
				$(".am-share").removeClass("am-modal-active");	
				setTimeout(function(){
					$(".sharebg-active").removeClass("sharebg-active");	
					$(".sharebg").remove();	
				},300);
			})
		}	
	</script>
	<script>
	    var oLoginmodal = document.getElementById("loginmodal");

	    oLoginmodal.style.top = 5 + "px";

	    console.log(oLoginmodal.style.top);
	</script>
</html>
