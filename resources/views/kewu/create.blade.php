<form class="form-horizontal" action="{{url('/brand/store')}}" method="post" role="form" enctype="multipart/form-data">
@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">客户名称</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="user_name" id="firstname" 
				   placeholder="请输入名字">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">客户级别</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="brand_name" id="lastname" 
				   placeholder="请输入姓">
		</div>
	</div>

    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">客户来源</label>
		<div class="col-sm-10">
            <input type="text" class="form-control" name="brand_name" id="lastname" 
				   placeholder="请输入姓">
		</div>
	</div>

    <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">业务员</label>
		<div class="col-sm-10">
            <select name="">
				<option value="">--请选择--</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">电话</label>
		<div class="col-sm-10">
            <input type="text" class="form-control" name="brand_name" id="lastname" 
				   placeholder="请输入姓">
		</div>
	</div>

	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">手机</label>
		<div class="col-sm-10">
            <input type="text" class="form-control" name="brand_name" id="lastname" 
				   placeholder="请输入姓">
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">添加</button>
		</div>
	</div>
</form>