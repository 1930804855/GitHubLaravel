<center>
    <table class="table table-condensed">
    

    <form action="">
     
        <tbody>
        @foreach ($ye as $v) 
            <tr>
                <td>{{$v->y_id}}</td>
                <td>{{$v->y_name}}</td>
                <td>{{$v->y_sex}}</td>
                <td>{{$v->y_tels}}</td>
                <td>{{$v->y_tel}}</td>
                <td>
                <a href="javascript:void(0);" id="delete" class="btn btn-danger {{url('/yewu/destroy/'.$v->y_id)}}">删除</a>  ||  
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

