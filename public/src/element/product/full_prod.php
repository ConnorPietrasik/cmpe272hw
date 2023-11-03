<h3 class="prod-name"><?=$prod?></h3>
<img src="products/<?=$prod?>/main.png" alt="<?=$prod?> image" class="prod-pic">
<p class="prod-desc">
    <?php readfile($_SERVER['DOCUMENT_ROOT']."/products/$prod/desc.txt"); ?>
</p>
<p class="prod-price">
    <?php readfile($_SERVER['DOCUMENT_ROOT']."/products/$prod/price.txt"); ?>
</p>