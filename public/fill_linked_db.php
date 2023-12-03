<?php
    $title = "Fill linked db";
    include("src/element/head.php");
    require_once("src/linked_database.php");

    // $db->addCompanyToDB("StuffCo", 'https://cmpe272hw.pietrasik.top/');
    // echo "Added StuffCo https://cmpe272hw.pietrasik.top/";

    // $products = [
    //     ["Age", "Buy this to grow older! Guaranteed to be older once your payment goes through!", 4999.99, "Age.png"],
    //     ["Cloud", "Your very own cloud! Please note that shipping time varies with weather, and no government will accept your ownership.", 999.99, "Cloud.png"],
    //     ["Donation", "Donate to someone that wants the money more than you. All donations are appreciated, and will be spent on milk tea! Venmo @cpzombie", 9.99, "Donation.png"],
    //     ["Dust", "Dust! Only available in small quantities, varies with location.", 19.99, "Dust.png"],
    //     ["Idea", "A great idea! You'll never have a better one!", 99999.99, "Idea.png"],
    //     ["Nothing", "This is absolutely nothing.", 499.99, "Nothing.png"],
    //     ["Regret", "Buy this to regret! You'll almost certainly regret wasting money like this.", 4999.99, "Regret.png"],
    //     ["Something", "This is something! It may just be the feeling of losing money, but who knows?", 49.99, "Something.png"],
    //     ["Unicorn", "A unicorn! Note: may require having schizophrenia to see", 11999.99, "Unicorn.png"],
    //     ["Wisdom", "Pay whatever you want, gain wisdom proportional to amount paid!", 99.99, "Wisdom.png"]
    // ];
    // foreach ($products as $x){
    //     $db->addProduct($x[0], $x[1], $x[2], $x[3], 3);
    // }
    // echo "Added:<pre>";
    // var_dump($products);
    // echo "</pre>";

    $users = [
        //["ConnorTest", "The First", "Testing@gmail.com", "1234 Test St.", 1111111111, 2222222222, "connortest", "pass"],
        ["ConnorTest2", "The Second", "Testing2@gmail.com", "1234 Test St.", null, 1234567890, "connortest2", "pass"],
        ["ConnorTest3", "The Third", "Testing3@gmail.com", "1234 Test St.", null, 3333333333, "connortest", "pass"]
    ];
    foreach ($users as $u){
        $db->addUser($u[0], $u[1], $u[2], $u[3], $u[4], $u[5], $u[6], $u[7]);
    }
    echo "Added:<pre>";
    var_dump($users);
    echo "</pre>";
?>