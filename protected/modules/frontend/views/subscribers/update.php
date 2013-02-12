<?php
/* @var $this SubscribersController */
/* @var $model ModelSubscribers */

$this->breadcrumbs=array(
	'Model Subscribers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelSubscribers', 'url'=>array('index')),
	array('label'=>'Create ModelSubscribers', 'url'=>array('create')),
	array('label'=>'View ModelSubscribers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ModelSubscribers', 'url'=>array('admin')),
);
?>

<h1>Update ModelSubscribers <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>