<?php
    include("src/element/head.php");
    require_once("src/linked_database.php");
    $products = [
        ["Age", "Buy this to grow older! Guaranteed to be older once your payment goes through!", 4999.99, "Age.png"],
        ["Cloud", "Your very own cloud! Please note that shipping time varies with weather, and no government will accept your ownership.", 999.99, "Cloud.png"],
        ["Donation", "Donate to someone that wants the money more than you. All donations are appreciated, and will be spent on milk tea! Venmo @cpzombie", 9.99, "Donation.png"],
        ["Dust", "Dust! Only available in small quantities, varies with location.", 19.99, "Dust.png"],
        ["Idea", "A great idea! You'll never have a better one!", 99999.99, "Idea.png"],
        ["Nothing", "This is absolutely nothing.", 499.99, "Nothing.png"],
        ["Regret", "Buy this to regret! You'll almost certainly regret wasting money like this.", 4999.99, "Regret.png"],
        ["Something", "This is something! It may just be the feeling of losing money, but who knows?", 49.99, "Something.png"],
        ["Unicorn", "A unicorn! Note: may require having schizophrenia to see", 11999.99, "Unicorn.png"],
        ["Wisdom", "Pay whatever you want, gain wisdom proportional to amount paid!", 99.99, "Wisdom.png"]
    ];
    foreach ($products as $x){
        $db->addProduct($x[0], $x[1], $x[2], $x[3], 3);
    }
    echo "Done";
?>