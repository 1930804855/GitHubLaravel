@extends('admin/layouts/layout')
@section('title', '综合查询')
@section('content')
<center>
	<h1>综合查询-客户拜访记录查询</h1>
	<a href="{{url('/inquire')}}"><button>客户查询</button></a>
	<form>
		搜索：
		<select name="yewu">
			<option value="">请选择业务员...</option>
			@foreach($yewu as $v)
			<option value="{{$v->y_id}}" {{$y_id==$v->y_id ? 'selected' : ''}}>{{$v->y_name}}</option>
			@endforeach
		</select>
		<select name="kewu">
			<option value="">请选择客户...</option>
			@foreach($kewu as $v)
			<option value="{{$v->k_id}}" {{$k_id==$v->k_id ? 'selected' : ''}}>{{$v->k_name}}</option>
			@endforeach
		</select>
		<input type="submit" value="搜索">
	</form>
	<table class="table">
	<thead>
		<tr>
			<th>拜访记录ID</th>
			<th>业务员名称</th>
			<th>客户名称</th>
			<th>访问时间</th>
			<th>访问人</th>
			<th>访问地址</th>
			<th>访问详情</th>
			<th>下次访问时间</th>
		</tr>
	</thead>
	<tbody>
		@foreach($meeting as $k=>$v)
		<tr>
			<td>{{$v->m_id}}</td>
			<td>{{$v->y_name}}</td>
			<td>{{$v->k_name}}</td>
			<td>{{date('Y-m-d H:i:s',$v->m_time)}}</td>
			<td>{{$v->m_man}}</td>
			<td>{{$v->m_url}}</td>
			<td>{{$v->m_desc}}</td>
			<td>{{date('Y-m-d H:i:s',$v->m_ntime)}}</td>
		</tr>
		@endforeach
		<tr>
			<td colspan="8">{{$meeting->appends(['yewu'=>$y_id,'kewu'=>$k_id])->links()}}</td>
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