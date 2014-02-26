{extends file='layouts/base.tpl'}

{block name="title"}
	Create User
{/block}

{block name="body"}
	<div class="container">
		<div class="col-lg-5" align="left">
			<form class="form-signin" role="form">
		        <h2 class="form-signin-heading">Please sign in</h2>
		        <input type="email" class="form-control" placeholder="Email address" required autofocus>
		        <input type="password" class="form-control" placeholder="Password" required>
		        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
		</div>
	</div>
{/block}