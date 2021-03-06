<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php if(is_array($title)): foreach($title as $key=>$v): echo ($v["value"]); endforeach; endif; ?>安全应急响应中心</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="/dev/Public/Home/css/bootstrap.min.css" rel="stylesheet">
		<link href="/dev/Public/User/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link href="/dev/Public/Home/index/carousel.css" rel="stylesheet">
		<link href="/dev/Public/Home/css/styles.css" rel="stylesheet">
	</head>
 <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="yahei sr-only">Toggle navigation</span>
            <span class="yahei icon-bar"></span>
            <span class="yahei icon-bar"></span>
            <span class="yaheiicon-bar"></span>
          </button>
          <a class="yahei navbar-brand" href="/dev"><strong><?php if(is_array($title)): foreach($title as $key=>$v): echo ($v["value"]); endforeach; endif; ?></strong>
          <span class="yahei navbar-brand-subtitle">安全应急响应中心</span>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
              <ul class="yahei nav navbar-nav">
             <li><a href="<?php echo U('index/index');?>">个人中心</a></li>
			   <li><a href="<?php echo U('post/add');?>">报告漏洞</a></li>
		      <li><a href="<?php echo U('post/index');?>">漏洞列表</a></li>
		      <li><a href="<?php echo U('gift/index');?>">礼品兑换</a></li>
			  <li><a href="<?php echo U('info/index');?>">联系方式</a></li>
              </ul>
			  <ul class="yahei nav navbar-nav navbar-right">
			  <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo session('username')?><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <!--<li><a href="#">Action</a></li>
                    <li><a href="#">更改密码</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>-->
					<li><a href="<?php echo U('change/index');?>">更改密码</a></li>
                    <li><a href="<?php echo U('login/logout');?>">退出登录</a></li>
                  </ul>
                </li>
              </ul>
            </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>


<div class="gallery">
   <div class="col-md-offset-2">
   <h2><strong>个人中心</strong></h2>   
    <hr style="width:80%" class="col-md-offset-0"/>
	<!--<h><strong>尊敬的 <?php echo session('username')?>, 欢迎您进入漏洞报告平台 !</strong></h4>-->
	<br/>
	<div class="row">
        <div class="col-lg-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <i class="fa  fa-reorder fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p style="font-size:30px"><?php echo ($page); ?></p>
                            <p class="announcement-text">漏洞报告</p>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="<?php echo U('post/index');?>"><i class="fa fa-edit"></i>提交漏洞</a>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="<?php echo U('post/index');?>"><i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p style="font-size:30px"><?php echo ($gift); ?></p>
                            <p class="announcement-text">礼品</p>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="<?php echo U('gift/index');?>"><i class="fa fa-edit"></i>兑换礼品</a>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="<?php echo U('gift/index');?>"><i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <i class="fa fa-bar-chart fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p style="font-size:30px"><?php if(is_array($user)): foreach($user as $key=>$v): echo ($v["jifen"]); endforeach; endif; ?></p>
                            <p class="announcement-text">贡献值</p>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="./index.php?m=&c=hall&a=index"><i class="fa fa-edit"></i>查看排行</a>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="./index.php?m=&c=hall&a=index"><i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
</div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <hr>
        <p>© 2016 <?php if(is_array($title)): foreach($title as $key=>$v): echo ($v["value"]); endforeach; endif; ?> · <a href="<?php echo U('index/index');?>">关于我们</a> · <a href="<?php echo U('index/index');?>">隐私协议</a></p>
		<p>Powered By SRCMS</p>
      </div>
    </div>
  </div>
</footer>

<!-- script references -->
		<script src="/dev/Public/Home/js/jquery.min.js"></script>
		<script src="/dev/Public/Home/js/bootstrap.min.js"></script>
		<script src="/dev/Public/Home/js/scripts.js"></script>
	</body>
</html>