<?php if(!isset($_GET['text'])): ?>
    <form method="get">
        <div>
            <input type="text" name="text">
        </div>
        <div>
            <input type="submit" name="Color" value="Color text">
        </div>
    </form>
    <?php else : ?>
        <?php for($i = 0; $i < strlen($_GET['text']); $i++) : ?>
            <?php if (ord($_GET['text'][$i]) % 2 == 0) : ?>
                <font color="red">
                    <?= $_GET['text'][$i]; ?>
                </font>
            <?php else : ?>
                <font color="blue">
                    <?= $_GET['text'][$i]; ?>
                </font>
            <?php endif; ?>
        <?php endfor; ?>
<?php endif; ?>