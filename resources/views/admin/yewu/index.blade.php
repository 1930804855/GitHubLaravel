
@extends('admin/layouts/layout')
@section('title', '业务员展示')
@section('content')

<center>
    
    <h2>业务员管理</h2> 

    <form action="">
       业务员名称 ：<input type="text" value="{{$y_name}}" name="y_name" placeholder="请输入业务员名称关键字">
      <button>搜索</button>
   </form><br>
        <a href="{{'/yewu/create'}}" class="btn btn-success">添加</a>
        <table class="table table-condensed">
            <thead>
                <th>业务员ID</th>
                <th>业务员名称</th>
                <th>业务员性别</th>
                <th>办公手机</th>
                <th>电话</th>
                <th>操作</th>
            </thead>
        <tbody>
        @foreach ($ye as $v) 
            <tr>
                <td>{{$v->y_id}}</td>
                <td>{{$v->y_name}}</td>
                <td>{{$v->y_sex}}</td>
                <td>{{$v->y_tels}}</td>
                <td>{{$v->y_tel}}</td>
                <td>
                <a href="javascript:void(0);" id="delete" class="btn btn-danger"  y_id="{{url('/yewu/destroy/'.$v->y_id)}}" >删除</a>  ||  
                <a href="{{url('/yewu/edit/'.$v->y_id)}}" class="btn btn-primary">编辑</a>
                </td>
            </tr>
        @endforeach
            <tr>
              <td colspan="6">{{ $ye->appends(['y_name' => $y_name])->links() }}</td>
            </tr>
        </tbody>
    </table>
</center>


</body>
</html>

<script>
    // 页面加载事件
   $(function(){
        // 删除方法
        $(document).on("click",'#delete',function(){
            var url = $(this).attr("y_id");
            // alert(url);
            // false;
            $.get(url,function(index){
                $("table").html(index);
            });
        });

        // 无刷新分页
        $(document).on("click",'.pagination a',function(){
            var url = $(this).attr("href");
            $.get(url,function(index){
                $("table").html(index);
            });
            return false;
        });



   })

</script>
@endsection