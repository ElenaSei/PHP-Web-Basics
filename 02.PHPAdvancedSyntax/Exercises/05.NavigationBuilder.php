<?php
    if (isset($_GET['categories']) && isset($_GET['tags'])
        && isset($_GET['months'])){

        $categories = explode(', ', $_GET['categories']);
        $tags = explode(', ', $_GET['tags']);
        $months = explode(', ', $_GET['months']);
    }
?>

<?php if (!(isset($categories) && isset($tags) && isset($months))) : ?>
    <form method="get">
        <div>
            Categories:
            <input type="text" name="categories">
        </div>
        <div>
            Tags:
            <input type="text" name="tags">
        </div>
        <div>
            Months:
            <input type="text" name="months">
        </div>
        <div>
            <input type="submit" name="generate" value="Generate">
        </div>
    </form>
<?php else: ?>
    <h2>Categories</h2>
    <?php foreach ($categories as $category) : ?>
        <ul>
            <li><?= $category ?></li>
        </ul>
    <?php endforeach; ?>
    <h2>Tags</h2>
    <?php foreach ($tags as $tag) : ?>
        <ul>
            <li><?= $tag ?></li>
        </ul>
    <?php endforeach; ?>
    <h2>Months</h2>
    <?php foreach ($months as $month) : ?>
        <ul>
            <li><?= $month ?></li>
        </ul>
    <?php endforeach; ?>
<?php endif; ?>
