@extends('admin/layouts/layout')
@section('title', '管理官展示')
@section('content')

<!DOCTYPE html>
<html>
	
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8"> 
	<title>拜访记录</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/time/css/111/mobileSelect.css">
    <script src="https://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <script src="/time/js/111/mobileSelect.js"></script>
    <script src="/time/js/111/selectDate.js"></script>
    <style type="text/css">
        html,body{
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            font-size: 16px;
            font-family: Helvetica,"Helvetica Neue",Arial,sans-serif;
            height: 100%;
        }
        *{
            margin: 0;
            padding: 0;
        }
        .list{
            margin: 50px 25px 0 25px;
            text-align: center;
        }
        .list>li{
            list-style: none;
            border: #CCCCCC solid 1px;
            height: 32px;
            line-height: 32px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style> 
    <style> 
    .colors{
        color: #E60012 !important;
    }
      .mobileSelect .content{
            width: 96% !important;
            border-radius: 0.3rem !important;
            bottom: 1rem !important;
            margin-left: 2% !important;
      }
      .cancel{
          color: #E60012 !important;
      }
      .title{
          color: #333 !important;
      }
      .ensure{
          color: #007AFF !important;
      }
      .selectLine{
        display: flex;
        align-items: center;
      }
      .selectLine span{
        width: 33.3%;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-bottom: 3px;
      }
    
    </style>
</head>
<body>
<center><h2>拜访记录登记</h2></center>
<form class="form-horizontal" action="{{url('/meeting/store')}}" method="post" role="form">
@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">业务员名称</label>
		<div class="col-sm-10">
			<select class="area" name="y_id" id="">
				<option value="0">--请选择--</option>
	  			@foreach($yewuData as $v)
				<option value="{{$v->y_id}}">{{$v->y_name}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">客户名称</label>
		<div class="col-sm-10">
			<select name="k_id" id="kehu">
				<option value="0">--请选择--</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">访问时间</label>
		<div class="col-sm-10">
			<input type="text" id="select_0" name="m_time" placeholder="请选择访问时间"/> 

		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">访问人</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="m_man" id="firstname" 
				   placeholder="请输入访问人名字">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">访问地址</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="m_url" id="firstname" 
				   placeholder="请输入访问地址">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">访问详情</label>
		<div class="col-sm-10">
			<textarea type="text" class="form-control" name="m_desc" id="firstname" 
				   placeholder="请输入访问详情"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">下次访问时间</label>
		<div class="col-sm-10">
		<input type="text" id="select_1" name="m_ntime" placeholder="请选择下次访问时间"/>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">登记</button>
		</div>
	</div>
</form>

</body>
</html>
<script>
   //选择 YYYY-MM-dd 格式的调用：
   $.selectYY_MM_DD("#select_0");

   $('.title').html('选择起始时间')
//    $(function () {
//             var currYear = (new Date()).getFullYear();   
//             var opt={};
//             opt.date = {preset : 'date'};
//             opt.default = {
//                 theme: 'android-ics light', //皮肤样式
//                 display: 'modal', //显示方式 
//                 mode: 'scroller', //日期选择模式
//                 lang:'zh',
//                 startYear:currYear-10, //开始年份
//                 endYear:currYear + 10 //结束年份
//             };
             
//             $("#start_kdsj").val('').scroller($.extend(opt['date'], opt['default']));
//             $("#end_kdsj").val('').scroller($.extend(opt['date'], opt['default']));
//         });
</script>
<script>
    $.selectYY_MM_DD("#select_1");

           var myDate = new Date;
            var year = myDate.getFullYear(); //获取当前年
            var mon = myDate.getMonth() + 1; //获取当前月
            var date = myDate.getDate(); //获取当前日
            console.log(year,mon,date)
</script>
<script>
	$(function(){
		// 三级联动

        $(document).on('change','.area',function(){
        //   alert(1);
          var _this=$(this);
          _this.nextAll('select').html("<option value='0'>请选择...</option>");
          var id=_this.val();//获取地区id
		//   alert(id);
          // console.log(id);
          // 将id用ajax技术传入控制器
			if(!id){
				return;
			}
			$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
          $.ajax({
            url:'/meeting/getCustome/'+id,
            type:'post',
            success:function(res){
				console.log(res);
              if(res==''){
                $('#kehu').html("<option value=''>请选择...</option>");
              }else{
                $('#kehu').html(res);
              }
              
            }
          })
          
        })
	})
</script>
@endsection