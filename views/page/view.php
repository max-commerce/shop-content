<?php

/* @var $this yii\web\View */

$this->title = $page->title;
$this->params['breadcrumbs'][] = ['url' => '/', 'label' => 'Главная'];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="page-view">

    <h1><?= $this->title ?></h1>

    <div class="row">
	    <div class="col-lg-9">
		    <div class="page-content">
				<?= $page->text ?>
		    </div>
		</div>
		<div class="col-lg-3">
			<div class="panel panel-default">
				<?= maxcom\content\widgets\PageMenuWidget::widget() ?>
			</div>
		</div>
	</div>

</div>
