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
	<div class="slider">
		<?php 
			$id = 1;
			$furniture = R::load('furniture', $id);
			echo '<img src="'.$furniture->primaryImage.'" alt="'.$furniture->title.'">';
		?>
		<!--<img src="/img/furniture/test.jpg" alt="">-->
	</div>
</div>