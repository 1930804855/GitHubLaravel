<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>TEAM布局</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<center>
    <h2>商品分类</h2><a href="{{'/yewu'}}" class="btn btn-default">列表展示</a>
    <form class="form-horizontal" role="form"  action="{{url('/yewu/store')}}" method="post" >
    @csrf   
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">业务员姓名</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="firstname"  name="y_name" placeholder="请输入商品名称">
                <b style="color:red"></b>
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">性别</label>
            <div class="col-sm-6">
                <input type="radio"  name="y_sex" value="1" checked >男
                <input type="radio" name="y_sex" value="2"   >女
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">办公手机</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="firstname"  name="y_tels" placeholder="请输入商品名称">
                <b style="color:red"></b>
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">电话号</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="firstname"  name="y_tel" placeholder="请输入商品名称">
                <b style="color:red"></b>
            </div>
        </div>
        <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="点我添加业务员">
        </div>
        </form>
</center>


</body>
</html>


 