<?php
/* @var $this SubscribersController */
/* @var $model ModelSubscribers */

$this->breadcrumbs=array(
	'Model Subscribers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ModelSubscribers', 'url'=>array('index')),
	array('label'=>'Create ModelSubscribers', 'url'=>array('create')),
	array('label'=>'Update ModelSubscribers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ModelSubscribers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelSubscribers', 'url'=>array('admin')),
);
?>

<h1>View ModelSubscribers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
	),
)); ?>
