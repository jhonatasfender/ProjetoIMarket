<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use pceuropa\menu\Menu;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=Html::csrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody()?>

<div class="wrap">
    <?php NavBar::begin(['brandLabel' => 'Projeto da faculdade', 'brandUrl' => '/']);?>

    <?php echo Nav::widget(['options' => ['class' => 'navbar-nav navbar-left'], 'items' => Menu::NavbarLeft(3)]); ?>

    <?php echo Nav::widget(['options' => ['class' => 'navbar-nav navbar-right'], 'items' => Menu::NavbarRight(1)]); ?>
<?php NavBar::end();?>

    <div class="container">
        <?=Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []])?>
        <?=Alert::widget()?>
        <?=$content?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; PUNK <?=date('Y')?></p>

    </div>
</footer>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
