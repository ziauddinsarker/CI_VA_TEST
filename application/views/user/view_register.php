<form action="<?=  base_url()?>register/index/" method="post">

<?php if($error){echo '<div style="color:red;">'.$error.'</div>'; }?>
<div class="form_settings">
	<p><span>Username</span><input class="" type="text" name="username" value="" /></p>
	<p><span>E-Mail</span><input class="" type="email" name="email" value="" /></p>
	<p><span>Password</span><input class="" type="password" name="password" value="" /></p>
	<p><span>Retype Password</span><input class="" type="password" name="passconf" value="" /></p>
	<p><span>User Type</span>
		<select class="form-control" name="user_type">
		<option value="admin">Admin</option>
		<option value="author">Author</option>
		<option value="user" selected>User</option>
	</select>
	<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add" value="Register" /></p>
</div>
</form>