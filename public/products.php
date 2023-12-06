<?php
$title = "Products";
include("src/element/head.php");
?>
<h2>Products:</h2>
<p class="disclaimer">Disclaimer: All purchases are final, no refunds under any circumstances.</p>
<a class="recently-viewed" href="previous_products.php">Recently viewed</a>
<a class="most-viewed" href="most_viewed_products.php">Most viewed</a>
<br>
<h4>Marketplace tops</h4>
<table>
    <th>
    <td> </td>
    <td>By company</td>
    <td>Combined</td>
    </th>
    <tr>
        <td>Rating</td>
        <td><a class="marketplace-top-rated-company" href="/top_products/by_company_rating.php">By company top rated</a></td>
        <td><a class="marketplace-top-rated-combined" href="/top_products/combined_rating.php">Combined top rated</a></td>
    </tr>
    <tr>
        <td>Viewcount</td>
        <td><a class="marketplace-top-viewed-company" href="/top_products/by_company_views.php">By company top viewed</a></td>
        <td><a class="marketplace-top-viewed-combined" href="/top_products/combined_views.php">Combined top viewed</a></td>
    </tr>
</table>

<?php
require_once("src/linked_database.php");
$products = $db->getProductsByCompany(3);
include("src/element/product/clickable_products.php");

// $products = scandir('products');
// include("src/element/product/clickable_products.php");
?>