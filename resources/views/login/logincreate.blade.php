<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>登录</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<form role="form" action="{{url('login/loginstroe')}}" method="post">
	@csrf
	<!-- <b style="color:red">{{session('msg')}}</b> -->
	<div class="form-group">
		<label for="name">名称</label>
		<input type="text" class="form-control" name="a_name" placeholder="请输入名称">
	</div>
	<div class="form-group">
		<label for="name">密码</label>
		<input type="password" class="form-control" name="a_pwd"   placeholder="密码">
	</div>
	<div class="form-group">
		<label for="name">等级</label>
		<select name="a_level" id="">
			<option value="1" >系统管理员</option>
			<option value="2" >主管</option>
			<option value="3" >业务员</option>
		</select>
	</div>
	
	<button type="submit" class="btn btn-default">添加</button>
</form>
	
</body>
</html>