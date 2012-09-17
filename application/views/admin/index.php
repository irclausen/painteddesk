<div class="admin">
	 <div class="createDiv">
	 	<a href="/upload"><button class="btn">Create new item</button></a>
	 </div>
	 <div class="itemList">
	 	<ul class="editList">
	 		<?php 
				$id = 1;
				R::addDatabase('tpd','mysql:host=localhost;
        dbname=tpd','tpd_user','pass@word1');
				R::selectDatabase('tpd');
				$furniture = R::getAll('select * from furniture');
				$isForSale = $btnClass = '';
				foreach ($furniture as $item) {
					$dataIsForSale = $item["isForSale"];
					if($item["isForSale"] > 0) 
					{
						$isForSale = "Make not for Sale";
						$btnClass = "btn-danger";
					} 
					else 
					{
						$isForSale = "Make for sale";
						$btnClass = "btn-success";
					}
					echo '<li><img src="'.$item["primaryImage"].'" alt="'.$item["title"].'" width="40" height="60"/><span>'.$item["id"].'</span><span>'.$item["title"].'</span><span>'.$item["color"].'</span><span><button class="isForSale btn '.$btnClass.'" id="'.$item["id"].'" data-forSale="'.$dataIsForSale.'">'.$isForSale.'</button></span></li>';
				}
			?>
	 	</ul>
	 </div>
</div>