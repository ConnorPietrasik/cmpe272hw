<button name="<?=$prod?>">
    <h3 class="prod-name"><?=$prod?></h3>
    <br>
    <img src="/products/<?=$prod?>/main.png" alt="<?=$prod?> image" class="prod-pic">
</button>
<p class="prod-desc">
    <?php readfile($_SERVER['DOCUMENT_ROOT']."/products/$prod/desc.txt"); ?>
</p>
<p class="prod-price">
    <?php readfile($_SERVER['DOCUMENT_ROOT']."/products/$prod/price.txt"); ?>
</p>