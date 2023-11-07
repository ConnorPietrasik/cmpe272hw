<?php
require_once("src/database.php");

$fnames = ["Connor", "John", "Jane", "Jim", "Jennifer", "Jessica", "Janelle", "Jeffrey"];
$lnames = ["Pietrasik", "Doe", "Smith", "Nguyen", "Tran", "Le", "Davis", "Adams"];
$em_ends = [".com", ".org", ".top"];
$ads = ["1234 Test St.", "2567 Other Dr.", "5321 Test St.", "1234 Random Ct."];
$phones = ["4081112222", "4081234567", "1112223333", "1112345678", "9999999999", "4089991111", "1239991111", "3450432474", "9643456434", "6550916839", "7845670192", "8345109601", null];

$data = [];
for ($i = 0; $i < 20; $i++){
    $fn = $fnames[rand(0, 7)];
    $ln = $lnames[rand(0, 7)];
    while(!empty($db->searchUsers($fn, $ln))){
        $fn = $fnames[rand(0, 7)];
        $ln = $lnames[rand(0, 7)];
    }
    $em = $fn."@".$ln.$em_ends[rand(0, 2)];
    $ad = $ads[rand(0, 3)];
    $hp = $phones[rand(0, 12)];
    $cp = $phones[rand(0, 12)];
    $db->addUser($fn, $ln, $em, $ad, $hp, $cp);
    $data[] = ["first_name" => $fn, "last_name" => $ln, "email" => $em, "home" => $ad, "home_phone" => $hp, "cell_phone" => $cp];
}

include("src/element/table_display.php");
?>