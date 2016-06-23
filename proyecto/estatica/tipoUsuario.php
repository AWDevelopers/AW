<?php
include ('config.php');
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
	if($app->usuarioLogueado() && $app->esAdmin("Admin")){
	 $html = <<<EOS
		<p> <h2> Tipo de usuario  </h2> </p>
		<select name="tipo">
			<option value="Admin">Admin</option>
			<option value="User">User</option>
		</select> 
EOS;
	echo $html;  		
	}
?>