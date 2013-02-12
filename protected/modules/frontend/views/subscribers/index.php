<?php
/* @var $this SubscribersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Subscribers',
);

$this->menu=array(
	array('label'=>'Create ModelSubscribers', 'url'=>array('create')),
	array('label'=>'Manage ModelSubscribers', 'url'=>array('admin')),
);
?>

<h1>Model Subscribers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
