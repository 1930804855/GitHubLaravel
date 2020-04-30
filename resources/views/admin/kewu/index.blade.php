@extends('admin/layouts/layout')
@section('title', '首页')
@section('content')
<table class="table table-bordered">
  <caption>客户管理</caption>
  <thead>
    <tr >
      <th>客户名称</th>
      <th>客户级别</th>
      <th>客户来源</th>
      <th>业务员</th>
      <th>电话</th>
      <th>手机</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
  @foreach($KewuInfo as $v)
    <tr>
      <td>{{$v->k_name}}</td>
      <td>{{$v->k_level}}</td>
      <td>{{$v->k_lai}}</td>
      <td>{{$v->y_name}}</td>
      <td>{{$v->k_tels}}</td>
      <td>{{$v->k_tel}}</td>
      <td>
      <a class="btn btn-primary" href="{{url('/kewu/create')}}">添加客户</a>
      <a class="btn btn-danger" href="{{url('/kewu/destory/'.$v->k_id)}}" >删除</a>
      <a class="btn btn-warning" href="{{url('/kewu/edit/'.$v->k_id)}}" >修改</a>
      </td>
    </tr>
    @endforeach
  </tbody>
    
</table>
    <tr>
        <td colspan="6">{{ $KewuInfo->links() }}</td>
    </tr>
@endsection