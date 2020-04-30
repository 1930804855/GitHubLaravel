@extends('admin/layouts/layout')
@section('title', '客户会议展示')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>拜访记录</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><h2>拜访记录展示</h2></center>
<table class="table table-condensed">
	<form>
        业务员名称：<select name="yewuName" id="">
            <option value="">--请选择--</option>
            @foreach($yewuData as $v)
            <option value="{{$v->y_id}}" {{$yewuName==$v->y_id?'selected':''}}>{{$v->y_name}}</option>
            @endforeach
        </select>
        <input type="submit" value="搜索" id="">
    </form>
	<thead>
		<tr>
			<th>业务员名称</th>
            <th>客户名称</th>
            <th>访问时间</th>
			<th>访问人</th>
            <th>访问地址</th>
            <th>访问详情</th>
			<th>下次访问时间</th>
            <th>操作</th>
            
		</tr>
	</thead>
	<tbody>
        @foreach($data as $v)
		<tr>
            <td>{{$v->y_name}}</td>
			<td>{{$v->k_name}}</td>
            <td>{{$v->m_time}}</td>
            <td>{{$v->m_man}}</td>
			<td>{{$v->m_url}}</td>
            <td>{{$v->m_desc}}</td>
            <td>{{$v->m_ntime}}</td>
            <td>
                <a type="button" class="btn btn-warning" href="{{url('/meeting/destroy/'.$v->m_id)}}" >删除</a>
                <a type="button" class="btn btn-default" href="{{url('/meeting/edit/'.$v->m_id)}}" >编辑</a>
            </td>
            
		</tr>
        @endforeach
        
    </tbody>
    
</table>
{{$data->appends(['yewuName' => $yewuName])->links()}}
</body>
</html>
@endsection