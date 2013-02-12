<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'model-subscribers-form',
        'enableAjaxValidation' => true,
            ));
    ?>
    <div class="subscribe-form-container">
    <div class="subscribe-form-box">
        <div class="subscribe-form-label">
            <?php echo $form->labelEx($model, 'name'); ?>
        </div>
        <?php echo $form->textField($model, 'name', array('size' => 22, 'maxlength' => 100, 'placeholder' => 'Имя')); ?>
    </div>
        <?php echo $form->error($model, 'name'); ?>
    
    <div class="subscribe-form-box">
        <div class="subscribe-form-label">
            <?php echo $form->labelEx($model, 'email'); ?>
        </div>
        <?php echo $form->textField($model, 'email', array('size' => 22, 'maxlength' => 100, 'placeholder' => 'Email')); ?>
    </div>

    <?php echo $form->error($model, 'email'); ?>
    <?php echo $form->errorSummary($model); ?>
        <div class="subscribe-form-box">

        <?php echo CHtml::submitButton('Подписаться', array('class' => 'green button',)); ?>
        </div>
        </div>

    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->