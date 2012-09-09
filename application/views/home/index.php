<div class="home">
	<div class="tagline">
		<div class="taglineWrapper">
			<div class="taglineContainer">
				<div class="taglineCopy">
					Here is the tagline, to defeat all taglines
				</div>
			</div>
		</div>
	</div>
	<div id="slider" class="flexslider">
		<ul class="slides">
			<?php 
				$id = 1;
				$furniture = R::getAll('select * from furniture');
				foreach ($furniture as $item) {
					echo '<li><img src="'.$item["primaryImage"].'" alt="'.$item["title"].'" /></li>';
				}
			?>
		<!--<img src="/img/furniture/test.jpg" alt="">-->
		</ul>
	</div>
	<div id="carousel" class="flexslider">
		<ul class="slides">
			<?php 
				$id = 1;
				$furniture = R::getAll('select * from furniture');
				foreach ($furniture as $item) {
					echo '<li><img src="'.$item["primaryImage"].'" alt="'.$item["title"].'" /></li>';
				}
			?>
		<!--<img src="/img/furniture/test.jpg" alt="">-->
		</ul>
	</div>
</div>