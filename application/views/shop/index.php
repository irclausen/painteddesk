<div class="shop">
	<div class="itemWrapper">
		<ul id="da-thumbs" class="da-thumbs clearfix">
			<?php
				$id = 1;
				R::addDatabase('tpd','mysql:host=localhost;
	    dbname=tpd','tpd_user','pass@word1');
				R::selectDatabase('tpd');
				$furniture = R::getAll('select * from furniture where isForSale=:isForSale',array(':isForSale' => true));
				//$furniture = R::getAll('select * from furniture');
				foreach ($furniture as $item): ?>
					<li>
						<a href="#" data-id="<?php echo $item["id"]?>">
							<img src="<?php echo $item["primaryImage"] ?>" width="200" alt="<?php echo $item["title"]?>" />
							<div>
								<span><?php echo $item["title"]; ?><br /><?php echo $item["color"]; ?></span>
							</div>
						</a>
					</li>
				
			<?php endforeach;?>
		</ul>
	</div>
	
	<!--<div id="slider" class="flexslider">
		<ul class="slides">
			<?php 
				$id = 1;
				R::addDatabase('tpd','mysql:host=localhost;
        dbname=tpd','tpd_user','pass@word1');
				R::selectDatabase('tpd');
				$furniture = R::getAll('select * from furniture where isForSale=:isForSale',array(':isForSale' => true));
				//$furniture = R::getAll('select * from furniture');
				foreach ($furniture as $item) {
					echo '<li><img src="'.$item["primaryImage"].'" alt="'.$item["title"].'" /></li>';
				}
			?>-->
		<!--<img src="/img/furniture/test.jpg" alt="">-->
		<!--</ul>
	</div>
	<div id="carousel" class="flexslider">
		<ul class="slides">
			<?php 
				$id = 1;
				$furniture = R::getAll('select * from furniture where isForSale=:isForSale',array(':isForSale' => true));
				//$furniture = R::getAll('select * from furniture');
				foreach ($furniture as $item) {
					echo '<li><img src="'.$item["primaryImage"].'" alt="'.$item["title"].'" /></li>';
				}
			?>-->
		<!--<img src="/img/furniture/test.jpg" alt="">-->
		<!--</ul>
	</div>-->
</div>