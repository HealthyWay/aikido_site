<?php
/* @var $this SubscribersController */
/* @var $model ModelSubscribers */

$this->breadcrumbs=array(
	'Model Subscribers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelSubscribers', 'url'=>array('index')),
	array('label'=>'Manage ModelSubscribers', 'url'=>array('admin')),
);
?>

<h1>Create ModelSubscribers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>