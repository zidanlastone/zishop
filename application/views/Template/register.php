<div class="card card-register mx-auto">
<div class="card-header">Register an Account</div>
	<div class="card-body">
		<?php echo form_open('admin/user/register'); ?>
			<div class="form-group">
				<label for="exampleInputName">Name</label>
				<input name="name" class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter name">
			</div>
		<div class="form-group">
			<select name="role" class="custom-select form-control">
			<option selected>Select Role</option>
			<option value="1">superadmin</option>
			<option value="2">Two</option>
			<option value="3">Three</option>
			</select>
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input name="username" class="form-control" id="username" type="text" placeholder="Username">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input name="password" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
		</div>
		<div class="form-group">
			<label for="exampleConfirmPassword">Confirm password</label>
			<input name="password2" class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
		</div>
		<button class="btn btn-primary btn-block" type="submit" name="button">Register</button>
		</form>
		<div class="text-center">
		<a class="d-block small mt-3" href="<?php echo site_url('admin/user') ?>">Login Page</a>
		</div>
	</div>
</div>
