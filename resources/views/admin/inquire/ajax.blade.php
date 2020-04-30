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