<?php
global $pigeon;
if(!$pigeon) {
	exit();
}
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=11">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/github.min.css" crossorigin="anonymous">
		<title><?php echo $pigeon->config['sitename']; ?></title>
		<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
		<script src="/pigeon/template/<?php echo $pigeon->config['template']; ?>/js/highlight.pack.js"></script>
		
		<?php
		if(isset($_GET['s']) && ($_GET['s'] == 'login' || $_GET['s'] == 'register') && $pigeon->config['recaptcha_key'] !== '') {
			echo '<script src="https://recaptcha.net/recaptcha/api.js" async defer></script>';
		}
		?>
<style type="text/css">

@import url(https://fonts.googleapis.com/css?family=Raleway:400,700,500);

body {
	font-family:'Raleway',sans-serif;
	font-weight:400;
	background-color:#333;
	color:#000;
	background-image: url(http://blog.tengzhou.ren/blog/typecho/background.jpeg);/*新增背景图*/
	background-size: cover;
	background-position: center;
	background-attachment: fixed;
	background-repeat: no-repeat;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	overflow: overlay;
}
body:before {
	content: "";
	display: block;
	position: fixed;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	z-index: -10;
	background-image: url(http://blog.tengzhou.ren/blog/typecho/background.jpeg);/*新增背景图*/
	background-size: cover;
	background-position: center;
	background-attachment: fixed;
	background-repeat: no-repeat;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
}
@media (max-width: 800px) {
	body, body:before {
		background-image: url(http://blog.tengzhou.ren/blog/typecho/background.jpeg);/*新增背景图*/
	}
}

.hljs {
	background: unset;
}

.headimg {
	width: 90px;
	text-align: center;
	padding-top: 8px;
	padding-bottom: 8px;
	vertical-align: top;
}

.headimg img {
	width: 64px;
	height: 64px;
	border-radius: 50%;
}

.headimg img:hover {
	transform: rotate(360deg);
	transition-delay: 0.2s;
	transition-duration: 1s;
	box-shadow: 0px 0px 16px rgba(0,0,0,0.5);
}

#pagecontent table {
	font-size: 14px;
}

.btn-primary {
    color: #fff;
	background-color: #4A4A4A;
    border-color: #2e6da4;
}

/*登录注册按钮*/
.right-btn {
	width: 100%;
	background-color: #4A4A4A;
}

.loginhead {
	border-radius: 50%;
	width: 70%;
	margin-top: 32px;
	margin-bottom: 32px;
}
/*说说框*/
.message {
	padding: 12px;
	background-color:#c6d1d1;/*更改说说输入框配色*/
	border-radius: 8px;
	margin-bottom: 26px;
	padding-bottom: 2px;
	display: inline-block;
	overflow: hidden;
}

.message:hover {
	background-color: #F0F0F0;
	box-shadow: 0px 0px 16px rgba(0,0,0,0.2);
}

.hoverdisplay {
	opacity: 0;
	color: #000000;
}

.hoverdisplay:hover {
	opacity: 1;
}

#alert_success,#alert_danger {
	display: none;
}

.newpost {
	width: 100%;
	height: 80px;
	min-width: 100%;
	max-width: 100%;
	min-height: 80px;
	max-height: 256px;
}

* {
	transition-duration: 0.5s;
}

.logo h2 a {
	color: #000;
	text-decoration: none;
}

#mdcontent {
	display: none;
}

.thread img {
	vertical-align: text-bottom ! important;
	max-width: 100% ! important;
	margin-top: 8px;
	margin-bottom: 8px;
}

.thread table {
	display: block;
	width: 100%;
	overflow: auto;
	margin-bottom: 8px;
}

.thread table tr {
	background-color: #fff;
	border-top: 1px solid #c6cbd1;
}

.thread table tr:nth-child(2n) {
	background-color: #f6f8fa;
}

.thread table th,.thread table td {
	padding: 6px 13px;
	border: 1px solid #dfe2e5;
	font-size: 14px;
}

.thread pre {
	margin-bottom: 0px;
	margin-top: -10px;
	margin-left: -12px;
	margin-right: -12px;
	background: #e6e6e6;
	border-radius: 0px;
	border-left: 4px solid #9e9e9e ! important;
}

pre {
	border: none ! important;
}

blockquote {
	font-size: 15px ! important;
	padding: 0px 20px 0px;
	margin: 0 0 10px;
}

.thread {
	word-break: break-all;
	white-space: pre-wrap;
}

.thread ul li {
	margin: -5px 0px -5px 0px;
}

.thread ol li {
	margin: -5px 0px -5px 0px;
}

ol,ul {
	margin-top: -15px;
	margin-bottom: 0px;
}
a {
    color:#1E90FF;/*超链接改为蓝色*/
/*  color: var(--btnColor);*/
}
a.footer,a.link {
    color: var(--btnColorHover);
}
a:focus, a:hover {
    color:#FF1493;/*悬停超链接改为粉红色*/
/*  color: var(--btnColorHover);*/
}
a.unset-color {
	color: unset ! important;
}
a.unset-color:hover {
	text-decoration: none;
}

.hoverdisplay {
    opacity: 0;
    color: #000;
}

#imgscan {
	display: none;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.7);
	position: fixed;
	top: 0px;
	left: 0px;
	text-align: center;
	z-index: 999999999;
}

.imgcontent {
	width: 100%;
	height: 100%;
	display: table;
}

.imgrow {
	width: 100%;
	height: 100%;
	display: table-cell;
	vertical-align: middle;
}

.message img {
	cursor: pointer;
}
.form-control {
	color: #000000;
    background-color: #e6e6e6;
    border: 1px solid rgba(47, 47, 47, 0.44);
}
code {
	color:#c7254e;
	background-color:#151515;
}
hr {
	border-top: 1px solid rgba(255, 255, 255, 0.28);
}
.input-group-addon {
	color:#CCC;
	background-color:#232323;
	border:1px solid #292929;
}

.btn-golden:hover {
    color: #FFF;
    background-color: var(--btnColorHover);
    border-color: var(--btnColorHover);
}
.btn-golden {
    color: #FFF;
    background-color: var(--btnColor);
    border-color: var(--btnColor);
}
.messagebg {
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0px;
	left: 0px;
	z-index: 99999999999;
	background:#000;
}

.messagebg .messagebox {
	width: 512px;
	margin: auto;
	position: relative;
	top: 50%;
	transform: translateY(-50%);
	background: #FFF;
	box-shadow: 0px 0px 20px #000;
	border-radius: 8px;
	padding-bottom: 20px;
	max-height: 90%;
	overflow-y: auto;
}

@media screen and (max-width:512px) {
	.messagebg .messagebox {
		width: 90%;
	}
}

.messagebg .messagebox table {
	width: 90%;
	margin: auto;
}

.close-msg {
	float: right;
	transition-duration: 0.5s;
	cursor: pointer;
}

.close-msg:hover {
	color: rgb(51,122,188);
}

.editpost {
	min-height: 256px;
	height: 256px;
}
.hr {
 width:80%;
 margin:0 auto;
 border: 0;
 height: 4px;
 background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));

}
}
</style>
</head>
	<body>
		<!-- Pigeon 1.0.170 Update start -->
		<div class="messagebg" id="messagebg" style="display: none;">
			<div class="messagebox">
				<table>
					<tbody><tr>
						<td>
							<h2>提示信息 <small><i class="fa fa-close close-msg" onclick="closemsg()"></i></small></h2>
						</td>
					</tr>
					<tr>
						<td>
							<div id="msgcontent"></div>
						</td>
					</tr>
				</tbody></table>
			</div>
		</div>
		<!-- Update end -->
		<div id="imgscan" onclick="$(this).fadeOut();">
			<div class="imgcontent">
				<div class="imgrow">
					<img src="" id="imgsrc">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 logo">
					<h2><a href="?"><?php echo $pigeon->config['sitename']; ?></a></h2>
					<p><?php echo $pigeon->config['description']; ?></p>
					<hr>
				</div>
				<div class="col-sm-9">
					<?php
					if(isset($_SESSION['user'])) {
					?>
					<p><textarea class="form-control newpost" placeholder="在想些什么？" id="newpost"></textarea></p>
					<table style="width: 100%;">
						<tr>
							<td style="width: 40%;">
								<select class="form-control" id="ispublic">
									<option value="0">所有人可见</option>
									<option value="1">登录后可见</option>
									<option value="2">仅自己可见</option>
								</select>
							</td>
							<td>
								<!--<input type="checkbox" checked="checked" id="ispublic" style="margin-top: 8px;">&nbsp;&nbsp;公开消息（无需登录即可查看）</input>-->
								<button class="btn btn-primary pull-right" onclick="newpost()"><i class="fa fa-twitter"></i>&nbsp;&nbsp;立即发布</button>
							</td>
						</tr>
					</table>
					<hr>
					<center>
						<p><a href="?">公共时间线</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?user=<?php echo $_SESSION['user']; ?>">我的时间线</a></p>
					</center>
					<div id="alert_success"></div>
					<div id="alert_danger"></div>
					<?php
					}
					?>
