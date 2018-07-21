<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('style/css/admin.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Blog</h1>
		<h2>歡迎使用Blog管理平台</h2>
		<div class="form">
			@if(session('msg'))
			<p style="color:red">{{session('msg')}}</p>
			@endif
			<form action="#" method="post">
				{{csrf_field()}}
				<ul>
					<li>
						<input type="text" name="username" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="userpassword" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="code"/>
						<span><i class="far fa-check-square"></i></span>
						<img src="{{url('/admin/code')}}" alt="" onclick="this.src='{{url('/admin/code')}}?'+Math.random()">
					</li>
					<li>
						<input type="submit" value="立即登入"/>
					</li>
				</ul>
			</form>
			<p><a href="#">返回首頁</a> &copy; 2016 Powered by <a href="http://mblog.paradisebird.me" target="_blank">http://mblog.paradisebird.me</a></p>
		</div>
	</div>
</body>
</html>