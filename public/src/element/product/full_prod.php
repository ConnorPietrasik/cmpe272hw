<h3 class="prod-name"><?=$prod["name"]?></h3>
<img src="<?php 
    if(isset($prod["img"])) echo $prod["domain"]."/images/".$prod["img"];
    else echo "https://cmpe272hw.pietrasik.top/images/Missing.png";
?>" alt="<?=$prod["name"]?> image" class="prod-pic">
<p class="prod-desc">
    <?=$prod["description"]?>
</p>
<p class="prod-price"><?=$prod["price"]?></p>
<p class="prod-views"><?=$prod["hits"]?></p>