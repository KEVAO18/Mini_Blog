<?php 

function adventure($s){

	$data = file_get_contents("../assets/scripts/data.json");
	$arts = json_decode($data, true);
	?>
	<div class="container">
		<div class="row py-2">
	<?php
		foreach ($arts as $art) {
		    ?>
			<div class="col-md-4 col-sm-12 my-2">
				<div class="card">
					<div class='card-img-top text-center'>
						<img src="<?=$s?>assets/media/<?=$art['portada']?>" style='width: 100%; height: 30vh;'>
					</div>
					<div class="card-body text-center">
						<a href="<?=$s?>public/index.php?p=adventure/<?=$art['id']?>" class="fs-1-5 color-3" title=""><?=$art['encabesado']?></a>
					</div>
				</div>
			</div>
		    <?php
		}
	?>
		</div>
	</div>
	<?php


}
?>
