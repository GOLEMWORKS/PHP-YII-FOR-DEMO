<?php

use yii\helpers\Html;
?>

<?php foreach($countries as $country): ?>
    <li>
        <?=Html::encode("{$country->code} ({$country->name})") ?>:
        <?= $country->population ?>
    </li>
<?php endforeach; ?>