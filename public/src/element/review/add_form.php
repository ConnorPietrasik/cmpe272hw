<form action="/add_review.php" method="post" class="add-review">
    <label for="rating">Rating:</label>
    <input type="number" id="rating" name="rating" min="1" max="5" <?php
        if (isset($rating)) {
            echo "value=\"" . $rating . "\"";
        }
                                                                    ?> required>
    <br>
    <label for="review">Review:</label>
    <textarea id="review" name="review" rows="4" cols="50"><?= $review ?? '' ?></textarea>
    <br>
    <input type="hidden" id="product_id" name="product_id" value="<?= $prod_id ?>">
    <input type="submit" value="Submit Review">
</form>