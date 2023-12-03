<button name="<?=$prod["id"]?>">
    <h3 class="prod-name"><?=$prod["name"]?></h3>
    <br>
    <img src="<?=$prod["domain"]?>/images/<?=$prod["img"]?>" alt="<?=$prod["name"]?> image" class="prod-pic">
</button>
<p class="prod-desc">
    <?=$prod["description"]?>
</p>
<p class="prod-price"><?=$prod["price"]?></p>