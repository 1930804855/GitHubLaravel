@extends('admin/layouts/layout')
@section('title', '首页')
@section('content')

	<form class="form-horizontal" role="form" action="{{url('/store')}}" method="post">
	@csrf
		<div class="form-group">
			<label for="firstname" class="col-sm-2 control-label">客户名称</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="k_name" placeholder="请输入名字">
			</div>
		</div>

		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">客户级别</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="k_level" placeholder="客户级别">
			</div>
		</div>

		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">客户来源</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="k_lai" placeholder="客户来源">
			</div>
		</div>

		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">业务员</label>
			<div class="col-sm-5">
				<select name="y_id" class="form-control">
					<option value="">--请选择--</option>
					@foreach($yewu as $v)
					<option value="{{$v->y_id}}">{{$v->y_name}}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">电话</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="k_tels" placeholder="请输入电话">
			</div>
		</div>

		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">手机</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="k_tel" placeholder="请输入电话">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">添加</button>
				<a class="btn btn-primary" href="{{url('/kewu')}}">客户列表</a>
			</div>
		</div>
	</form>

@endsection