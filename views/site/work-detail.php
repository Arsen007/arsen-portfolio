<div class="work_popup">
    <h1 class="title"><?= $name ?></h1>
    <div class="col-md-7">
        <?= \yii\helpers\Html::img('img/work/' . $screen, []) ?>
    </div>
    <div class="col-md-5"">
        <h2><?= \yii\helpers\Html::a($url, $url, ['target' => '_blank', 'style' => 'color:#87B930']) ?></h2>

        <h3>Technologies:</h3>

        <div class="technoliges_container">
            <?php
            $technologies = explode(',', $technologies);
            foreach ($technologies as $technology) { ?>
                <span><a href="http://www.google.com/#q=<?= $technology ?>"
                         target="_blank"><?= $technology ?></a></span>
            <?php } ?>
        </div>
        <h3>Description:</h3>
        <h4 style="max-width: 500px"><?= $description ?></h4>
    </div>
</div>