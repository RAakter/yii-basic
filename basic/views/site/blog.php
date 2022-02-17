<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Blog page.
    </p>

    <p>
        <b>This file is located at </b>
    </p>

    <code><?= __FILE__ ?></code>
</div>
