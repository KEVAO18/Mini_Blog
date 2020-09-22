<?php
function arts($s, $id){

	$data = file_get_contents("../assets/scripts/data.json");
	$arts = json_decode($data, true);
	$i = 0;
	$j = 0;
	$articulo =array();

	foreach ($arts as $art){
		$i++;
		if ($i == $id) {
		$articulo = explode(".", $art['articulo']);
?>
	<div class="py-5-r" style="background: url('<?=$s?>assets/media/<?=$art['portada']?>'); background-attachment: fixed; background-repeat: no-repeat; background-size: 100%; background-position: bottom;">
		<div class="container">
			<div class="text-center color-2 fs-3">
				<?=$art['encabesado']?>
			</div>
		</div>
	</div>
	<div class="container">
		<p class="my-4-r">	
			<?php foreach ($articulo as $par): 
				$j++;
				if ($j == 1) {
				?>
					<img src="<?=$s?>assets/media/<?=$art['relleno']?>" class="m-4" style="border-radius: 12px; float: left;" alt="">
					<?=$par?>.<br>
				<?php
				}else{
				?>

					<?=$par?>.<br>

				<?php

				}
			endforeach ?>
		</p>
	</div>
			<?php
		}
	}
?>

<?php
}
?>