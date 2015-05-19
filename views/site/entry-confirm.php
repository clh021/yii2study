<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>
<?php echo (Yii::app()->user->hasFlash(‘submit’)) ? Yii::app()->user->getFlash(‘submit’) : ''; ?>
<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>