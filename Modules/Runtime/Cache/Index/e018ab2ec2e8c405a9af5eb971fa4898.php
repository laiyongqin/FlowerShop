<?php if (!defined('THINK_PATH')) exit();?><html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>芬芳花艺商城</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
		<link rel="shortcut icon" href="http://www.light7.cn/favicon.ico">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link rel="stylesheet" href="/ffhysc/View/Index/Public/css/light7.css">
		<link rel="stylesheet" href="/ffhysc/View/Index/Public/css/light7-swiper.css">
		<link rel="stylesheet" href="/ffhysc/View/Index/Public/css/light7-swipeout.css">
		<link rel="apple-touch-icon" href="/ffhysc/View/Index/Public/img/apple-touch-icon-114x114.png">

		<link rel="stylesheet" href="/ffhysc/View/Index/Public/css/font_1433748561_0232708.css">
		<link rel="stylesheet" href="/ffhysc/View/Index/Public/css/app.css">
		<style>
			.content {
				color: #999;
			}
			
			.button.button-fill.button-big {
				line-height: 2.0rem;
				height: 2.0rem;
			}
			
			.list-block {
				margin: .75rem;
			}
			
			.content-block {
				margin: .75rem 0;
			}
			
			.signup a {
				color: #999;
			}
		</style>
	</head>

	<body>

		<div class="page">
			<header class="bar bar-nav">
			<a class="icon icon-left pull-left back"></a>
				<h1 class="title">注册页面</h1>
			</header>
			<div class="content">
				<div class="page-login">
					<div class="list-block inset text-center">
						<h3>欢迎注册花艺商城</h3>
						<ul>
							<!-- Text inputs -->
							<li>
								<div class="item-content">
									<div class="item-media"><i class="icon icon-form-name"></i></div>
									<div class="item-inner">
										<div class="item-input">
											<input id="reg_username" type="text" placeholder="请输入用户名">
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class="item-content">
									<div class="item-media"><i class="icon icon-form-password"></i></div>
									<div class="item-inner">
										<div class="item-input">
											<input id="reg_psd1" type="password" placeholder="请设置您的密码" class="">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-media"><i class="icon icon-form-password"></i></div>
									<div class="item-inner">
										<div class="item-input">
											<input id="reg_psd2" type="password" placeholder="请重复您的密码" class="">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-media"><i class="icon icon-form-email"></i></div>
									<div class="item-inner">
										<div class="item-input">
											<input id="reg_mail" type="text" placeholder="请预留电子邮箱">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-media"><i class="icon icon-form-email"></i></div>
									<div class="item-inner">
										<div class="item-input">
											<input id="reg_nickname" type="text" placeholder="请设定您的昵称">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-media"><i class="icon icon-form-calendar"></i></div>
									<div class="item-inner">
										<div class="item-input">
											<input id="reg_birth" type="text"  data-toggle='date'>
										</div>
									</div>
								</div>
							</li>
							<li class="align-top">
								<div class="item-content">
									<div class="item-media"><i class="icon icon-form-comment"></i></div>
									<div class="item-inner">
										<div class="item-input">
											<textarea id="reg_introduction" placeholder="请输入个人介绍...."></textarea>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="content-block">
						<p>
							<a id="register_btn" class="button button-big button-fill external" data-transition='fade'>注册</a>
						</p>
					</div>
				</div>

			</div>
		</div>

		<script type='text/javascript' src='/ffhysc/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/ffhysc/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/ffhysc/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/ffhysc/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>

		<script src="/ffhysc/View/Index/Public/js/app.js"></script>
		<!--<script src="/ffhysc/View/Index/Public/js/shop/register.js"></script>-->
		<script>
			$("#reg_birth").calendar();
			/*为注册按钮绑定点击事件,调用注册方法,调用ajax*/
			$("#register_btn").on("click", function() {
				if($("#reg_username").val().length > 16 || $("#reg_username").val().length < 8) {
					$.toast("账号的长度必须在8~16位之间");
					return;
				}
				if($("#reg_psd1").val() != $("#reg_psd2").val()) {
					$.toast("两次输入的密码必须一致");
					return;
				}
				var re = /(^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+)|(^$)/;
				if(!re.test($("#reg_mail").val())) {
					$.toast("请输入有效的电子邮箱，有助于找回密码！");
					return;
				}
				if($("#reg_birth").val().length==0||$("#reg_introduction").val().length==0||$("#reg_nickname").val().length==0) {
					$.toast("请填写完整表单，再进行提交！");
					return;
				}
				$.register($("#reg_username").val(), $("#reg_psd1").val(), $("#reg_mail").val(),$("#reg_birth").val(),$("#reg_introduction").val(),$("#reg_nickname").val());
			})

			$.register = function(reg_username, reg_psd1, reg_email,reg_birth,reg_introduction,reg_nickname) {
				$.ajax({
					type: "post",
					url: "<?php echo U('user/register');?>",
					async: true,
					data: {
						reg_username: reg_username,
						reg_psd1: reg_psd1,
						reg_email: reg_email,
						reg_birth:reg_birth,
						reg_introduction:reg_introduction,
						reg_nickname:reg_nickname
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							if(data.data["reg-status"] == "succ") {
								$.toast("注册成功");
								/*window.location.href='http://localhost/ffhysc/index.php/index'*/
							} else {
								$.toast("用户名已存在");
							}
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
		</script>

	</body>

</html>