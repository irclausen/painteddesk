<div class="home">
	<div id="homeSlider">
		<div class="carousel-images">
			<?php 
				$id = 1;
				R::addDatabase('tpd','mysql:host=localhost;
	    dbname=tpd','tpd_user','pass@word1');
				R::selectDatabase('tpd');
				$furniture = R::getAll('select * from furniture');
				foreach ($furniture as $item) {
					echo '<img src="'.$item["primaryImage"].'" alt="'.$item["title"].'" />';
				}
			?>
		</div>
	</div>
</div>