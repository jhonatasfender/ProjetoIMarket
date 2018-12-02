<?php
use pceuropa\menu\Menu;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>CRUDS!</h1>

        <p class="lead">Vamos lá.</p>

    </div>
    <div class="body-content">

        <div class="row">
            <?php foreach (Menu::NavbarLeft(3) as $navbarLeft): ?>
                <?php foreach ($navbarLeft['items'] as $items): ?>
                    <div class="col-lg-4">
                        <h2><?php echo $items['label'] ?></h2>

                        <p>Esse é um crud de: <?php echo $items['label'] ?></p>

                        <p><a class="btn btn-default" href="<?php echo $items['url'] ?>">Vamos lá &raquo;</a></p>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>

    </div>
</div>
