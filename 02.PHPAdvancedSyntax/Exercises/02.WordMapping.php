<form method="get">
    <div>
        <input type="text" name="text">
    </div>
    <div>
        <input type="submit" name="Count" value="Count words">
    </div>
</form>
<?php
    if (isset($_GET['text'])){
        $text = explode(' ',$_GET['text']);

        $result = [];
        foreach ($text as $word){
            $word = strtolower(($word));
            $word = preg_replace('/[^A-Za-z]+/', '', $word);
            if (!isset($result[$word])){
                $result[$word] = 0;
            }
            $result[$word] += 1;
        }
    }
    ?>
<?php if (isset($result)) : ?>
    <?php foreach($result as $key=>$value) : ?>
    <table border="2" width="100" bgcolor="#d3d3d3">
        <tr>
            <th align="left"><?= $key; ?></th>
            <th width="20"><?= $value; ?></th>
        </tr>
    </table>
    <?php endforeach; ?>
<?php endif; ?>
