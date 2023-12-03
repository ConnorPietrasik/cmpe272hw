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

    // $users = [
    //     ["ConnorTest", "The First", "Testing@gmail.com", "1234 Test St.", 1111111111, 2222222222, "connortest", "pass"],
    //     ["ConnorTest2", "The Second", "Testing2@gmail.com", "1234 Test St.", null, 1234567890, "connortest2", "pass"],
    //     ["ConnorTest3", "The Third", "Testing3@gmail.com", "1234 Test St.", null, 3333333333, "connortest", "pass"]
    // ];
    // foreach ($users as $u){
    //     $db->addUser($u[0], $u[1], $u[2], $u[3], $u[4], $u[5], $u[6], $u[7]);
    // }
    // echo "Added:<pre>";
    // var_dump($users);
    // echo "</pre>";

    // $user_ids = [24, 25, 26];
    // $product_ids = [2322, 2323, 2324, 2325, 2326, 2327, 2328, 2329, 2330, 2331];
    // $reviews = [
    //     [1, "Stole my muffins"],
    //     [1, "Set my house on fire"],
    //     [1, "Product never even arrived!"],
    //     [5, "Changed my life"],
    //     [5, null],
    //     [1, null],
    //     [2, "Ate my kids, but it's friendly"],
    //     [3, "Most average thing I've ever purchased"],
    //     [4, "I can't legally marry this in my country"],
    //     [5, "This is the absolute best purchase I've ever made, I bought 20"],
    //     [2, "I absolutely hate it, but I never leave 1 star reviews"],
    //     [4, "I love it, but I never give a 5"],
    //     [3, "Exactly as expected"],
    //     [5, "Perfect!"]
    // ];
    // $reviews_max = count($reviews) - 1;

    // $added = [];
    // foreach ($user_ids as $user){
    //     foreach ($product_ids as $product){
    //         $i = rand(0, $reviews_max);
    //         $db->addReview($user, $product, $reviews[$i][0], $reviews[$i][1]);
    //         $added[$user][$product] = $reviews[$i];
    //     }
    // }
    // echo "Added:<pre>";
    // var_dump($added);
    // echo "</pre>";
?>