@extends('admin/layouts/layout')
@section('title', '综合查询')
@section('content')
<center>
	<h1>综合查询</h1>
	<form>
		搜索：
		<input type="input" name="name" value="{{$name}}" placeholder="客户名称">
		<input type="input" name="level" value="{{$level}}" placeholder="客户级别">
		<input type="input" name="hang" value="{{$hang}}" placeholder="客户从事行业">
		<input type="input" name="lai" value="{{$lai}}" placeholder="客户来源">
		<select name="yewu">
			<option value="">请选择业务员...</option>
			@foreach($yewuInfo as $v)
			<option value="{{$v->y_id}}" {{$yewu==$v->y_id ? 'selected' : ''}}>{{$v->y_name}}</option>
			@endforeach
		</select>
		<input type="submit" value="搜索">
	</form>
	<table class="table">
	<thead>
		<tr>
			<th>客户ID</th>
			<th>客户名称</th>
			<th>客户级别</th>
			<th>客户从事行业</th>
			<th>客户来源</th>
			<th>业务员</th>
			<th>电话</th>
			<th>手机</th>
		</tr>
	</thead>
	<tbody>
		@foreach($kewuInfo as $k=>$v)
		<tr>
			<td>{{$v->k_id}}</td>
			<td>{{$v->k_name}}</td>
			<td>{{$v->k_level}}</td>
			<td>{{$v->k_hang}}</td>
			<td>{{$v->k_lai}}</td>
			<td>{{$v->y_name}}</td>
			<td>{{$v->k_tels}}</td>
			<td>{{$v->k_tel}}</td>
		</tr>
		@endforeach
		<tr>
			<td colspan="8">{{$kewuInfo->appends(['name'=>$name,'level'=>$level,'hang'=>$hang,'lai'=>$lai,'yewu'=>$yewu])->links()}}</td>
		</tr>
	</tbody>
	</table>
</center>
<script type="text/javascript">
	$(function(){
		$(document).on('click','.pagination li',function(){
			var _this=$(this)
			var _url=_this.find('a').prop('href')
			$.get(_url,function(res){
				$('tbody').html(res)
			})
			return false
		})
	})
</script>
@endsection