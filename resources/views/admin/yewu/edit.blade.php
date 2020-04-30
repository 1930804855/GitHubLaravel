@extends('admin/layouts/layout')
@section('title', '管理官展示')
@section('content')

<center>
    <h2>业务员编辑页面</h2><a href="{{'/yewu'}}" class="btn btn-default">列表展示</a>
    <form class="form-horizontal" role="form"  action="{{url('/yewu/update/'.$ye->y_id)}}" method="post" >
    @csrf   
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">业务员姓名</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="firstname" value="{{$ye->y_name}}" name="y_name" placeholder="请输入商品名称">
                <b style="color:red"></b>
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">性别</label>
            <div class="col-sm-6">
                <input type="radio"  name="y_sex" value="1" {{$ye->y_sex=="1" ? "checked" : ""}}>男
                <input type="radio" name="y_sex" value="2"  {{$ye->y_sex=="2" ? "checked" : ""}}>女
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">办公手机</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="firstname" value="{{$ye->y_tels}}" name="y_tels" placeholder="请输入商品名称">
                <b style="color:red"></b>
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">电话号</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="firstname" value="{{$ye->y_tel}}"  name="y_tel" placeholder="请输入商品名称">
                <b style="color:red"></b>
            </div>
        </div>
        <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="点我编辑业务员">
        </div>
        </form>
</center>

@endsection
</body>
</html>


 