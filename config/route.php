<?php
function routes($name, $s){
	include '../config/config.php';
	$ruta = array();
	if (isset($_GET["p"])) {
		$p = $_GET["p"];
		$ruta = explode("/", $p);
	}

	switch ($ruta[0]) {
		case 'home':
			include "../web/views/".$ruta[0].".php";
			home($name, $autor, $s);
			break;
		case 'e404':
			include "../web/views/".$ruta[0].".php";
			e404($s);
			break;
		case 'e403':
			include "../web/views/".$ruta[0].".php";
			e403($s);
			break;
		case 'adventure':
			switch ($ruta[1]) {
				case 'all':
					include "../web/views/".$ruta[0].".php";
					adventure($s);
					break;
				
				default:
					include "../web/views/articulos/arts.php";
					arts($s, $ruta[1]);
					break;
			}
			break;
		default:
		    ?>
		      <div class="container">
		        <div class="row py-4 text-center">
		          <div class="col-12 display-1 pt-3">404</div>
		          <div class="col-12 display-4 pb-5">Página no encontrada</div>
		        </div>
		      </div>
		    <?php
			break;
	}
}
?>
		