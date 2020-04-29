@extends('admin/layouts/layout')
@section('title', '管理官展示')
@section('content')
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<td>id</td>
				<td>管理员名称</td>
				
				<td>角色</td>
				<td>操作</td>
			</tr>
			@foreach($admin as $k=>$v)
			<tr>
				<td>{{$v->a_id}}</td>
				<td>{{$v->a_name}}</td>
				<td>@if($v->a_level==1)系统管理员@endif
					@if($v->a_level==2)主管@endif
					@if($v->a_level==3)业务员@endif
				</td>
				<td>
					<a href="{{url('login/logindel/'.$v->a_id)}}">删除</a>
					<a href="{{url('login/loginupd/'.$v->a_id)}}">修改</a>
				<td></td>
			</tr>
			@endforeach
		</table>
	</center>
</body>
</html>
@endsection