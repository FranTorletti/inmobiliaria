{extends file='layouts/base.tpl'}

{block name="title"}
	Create User
{/block}

{block name="body"}

	<div class="container">
      	<div class="col-lg-5" align="left">

	      <form class="form-signin" role="form">
	        <h2 class="form-signin-heading">Sign Up</h2>
	        <h4 class="form-signin-heading"> Name </h4>
	        <input type="text" class="form-control" required autofocus>
	        <h4 class="form-signin-heading"> Last Name </h4>
	        <input type="text" class="form-control" required>
	        <h4 class="form-signin-heading"> e-mail </h4>
	        <input type="email" class="form-control" required>
	        <h4 class="form-signin-heading"> Password </h4>
	        <input type="password" class="form-control" required>
	        <h4 class="form-signin-heading">Retype The Password </h4>
	        <input type="password" class="form-control" required>
	        <h4 class="form-signin-heading">Sex</h4>
	        
			<input name="sexo" type="radio" value="Hombre">Male &nbsp
			<input name="sexo" type="radio" value="Mujer">Female
			
			<h4 class="form-signin-heading">Date of birth</h4>
			
			<select name="Day">
				<option selected="Dia">Dia</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>
			<select name="Month">
				<option selected="mes">Mes</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
			<select name="Year">
				<option selected="Año">Año</option>
				<option value="1980">1980</option>
				<option value="1981">1981</option>
				<option value="1982">1982</option>
				<option value="1983">1983</option>
				<option value="1984">1984</option>
				<option value="1985">1985</option>
				<option value="1986">1986</option>
				<option value="1987">1987</option>
				<option value="1988">1988</option>
				<option value="1989">1989</option>
				<option value="1990">1990</option>
				<option value="1991">1991</option>
				<option value="1992">1992</option>
				<option value="1993">1993</option>
				<option value="1994">1994</option>
				<option value="1995">1995</option>
				<option value="1996">1996</option>
				<option value="1997">1997</option>
				<option value="1998">1998</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
			</select>
			<br>
			<br>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
	      </form>
    	</div>
	</div>
{/block}