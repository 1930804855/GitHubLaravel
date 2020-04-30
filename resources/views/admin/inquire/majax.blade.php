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