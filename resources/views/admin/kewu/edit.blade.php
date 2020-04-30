@extends('admin/layouts/layout')
@section('title', '首页')
@section('content')

	<form class="form-horizontal" role="form" action="{{url('/kewu/update/'.$KewuInfo->k_id)}}" method="post">
	@csrf
		<div class="form-group">
			<label for="firstname" class="col-sm-2 control-label">客户名称</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="k_name" value="{{$KewuInfo->k_name}}">
			</div>
		</div>

		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">客户级别</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="k_level" value="{{$KewuInfo->k_level}}">
			</div>
		</div>

		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">客户来源</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="k_lai" value="{{$KewuInfo->k_lai}}">
			</div>
		</div>

		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">业务员</label>
			<div class="col-sm-5">
				<select name="y_id" class="form-control">
					<option value="">--请选择--</option>
					@foreach($yewu as $v)
					<option value="{{$v->y_id}}" {{$KewuInfo->y_id==$v->y_id?'selected':''}}>{{$v->y_name}}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">电话</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="k_tels" value="{{$KewuInfo->k_tels}}">
			</div>
		</div>

		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">手机</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="k_tel" value="{{$KewuInfo->k_tel}}">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">修改</button>
			</div>
		</div>
	</form>

@endsection