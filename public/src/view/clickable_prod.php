<button name="<?=$prod?>">
    <h3 class="prod-name"><?=$prod?></h3>
    <br>
    <img src="/products/<?=$prod?>/main.png" alt="<?=$prod?> image" class="prod-pic">
</button>
<p class="prod-desc">
    <?php readfile("/products/$prod/desc.txt"); ?>
</p>
<p class="prod-price">
    <?php readfile("/products/$prod/price.txt"); ?>
</p>