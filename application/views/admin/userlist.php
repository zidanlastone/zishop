<table class="table table-striped">
	<thead>
		<tr>
		<th scope="col">Name</th>
		<th scope="col">Username</th>
		<th scope="col">Role</th>
		<th scope="col">Status</th>
		<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php foreach($users as $user): ?>
				<td scope="col"><?php echo $user->name?></td>
				<td scope="col"><?php echo $user->username?></td>
				<td scope="col">
					<?php if($user->role == 1){
						echo 'superadmin';
					}elseif($user->role == 2){
						echo 'admin';
					}elseif($user->role == 3){
						echo 'client';
					}?>
				</td>
				<td scope="col">
					<?php if($user->status == 1){
						echo 'active';
					}else{
						echo 'not-active';
					}?>
				</td>
				<td scope="col">
					<a href="<?php echo site_url('admin/user/activate/'. $user->user_id)?>" class="btn btn-success m-0">activate</a>
					<a href="<?php echo site_url('admin/user/delete/'. $user->user_id)?>" class="btn btn-danger m-0">delete</a>
				</td>
			</tr>
			<?php endforeach;?>
	</tbody>
</table>
