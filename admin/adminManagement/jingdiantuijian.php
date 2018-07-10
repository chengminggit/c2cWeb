<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>管理员后台</title>
  <link rel="stylesheet" href="./layui/css/layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">c2c旅游者住宿</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="admin.html">租户列表</a></li>
      <li class="layui-nav-item"><a href="member.html">出租者列表</a></li>
    </ul>
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
          管理员
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">退了</a></li>
    </ul>
  </div>
  
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item"><a href="index.html">控制台</a></li>
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;">发布公告</a>
          <dl class="layui-nav-child">
            <dd><a class="layui-this" href="sysConfig.php">免责声明</a></dd>
          </dl>
            <dl class="layui-nav-child">
                <dd><a class="layui-this" href="jingdiantuijian.php">景点推荐</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">用户管理</a>
          <dl class="layui-nav-child">
            <dd><a href="admin.html">用户列表</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
            <a href="javascript:;">权限管理</a>
            <dl class="layui-nav-child">
                <dd><a href="rule.html">规则列表</a></dd>
                <dd><a href="role.html">角色列表</a></dd>
                <dd><a href="adminRole.html">用户角色</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item">
                <a href="javascript:;">会员管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="member.html">会员列表</a></dd>
                </dl>
            </li>
      </ul>
    </div>
  </div>
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;">
        <fieldset class="layui-elem-field">
            <legend>景点推荐</legend>
            <div class="layui-field-box">
                <div class="layui-btn-group">
                    <button class="layui-btn layui-btn-xs layui-btn-normal dw-dailog" dw-url="create.html" dw-title="新增系统变量">
                        <i class="layui-icon">&#xe654;</i>新增
                    </button>
                    <button class="layui-btn layui-btn-xs dw-refresh">
                        <i class="layui-icon">&#x1002;</i>刷新
                    </button>
                </div>
                <hr>
                <form class="layui-form" action="">
                    <div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-block">
                        <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" id="addtitle">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码</label>
                        <div class="layui-input-inline">
                        <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input" id="addpassword">
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">文本域</label>
                        <div class="layui-input-block">
                        <textarea name="desc" placeholder="请输入内容" class="layui-textarea" style="height:400px;" id="addtext"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="formDemo" id="submit">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>
  </div>

    <script type="text/javascript">

    </script>

  <div class="layui-footer">
    <!-- 底部固定区域 -->
    欢迎来到c2c旅游者住宿平台
  </div>
</div>
<script type="text/javascript" src="./javascript/jquery.min.js"></script>
<script type="text/javascript" src="./layui/layui.js"></script>
<script type="text/javascript" src="./javascript/sys_config.js"></script>

<script>
    var oSubmit = document.getElementById("submit");

    oSubmit.onclick = function(){
        var title = $("#addtitle").val().trim();
        var password = $("#addpassword").val().trim();
        var text = $("#addtext").val().trim();

        if(title==""||password==""||text==""){
            alert("内容不能为空");
            return false;
        }
        else{
            $.ajax({
                type:"get",
                url:"php/addjingdian.php",
                async:false,
                data:{
                    title:title,
                    password:password,
                    text:text
                },
                dataType:"json",
                success:function(msg){
                    alert("提交成功"+msg);
                    //window.location.href="p-center.html";

                },
                error: function(){
                    alert("服务器连接失败");
                    return false;
                }
            });
        }
    }

</script>

</body>
</html>