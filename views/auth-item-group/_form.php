<?php

use kasadigital\modules\UserManagement\UserManagementModule;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

/**
 * @var yii\web\View $this
 * @var kasadigital\modules\UserManagement\models\rbacDB\AuthItemGroup $model
 * @var yii\bootstrap\ActiveForm $form
 */
?>
<div class="auth-item-group-form">

	<?php $form = ActiveForm::begin([
		'id'=>'auth-item-group-form',
		'layout'=>ActiveForm::LAYOUT_HORIZONTAL,
		'validateOnBlur' => false,

	]); ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => 255, 'autofocus'=>$model->isNewRecord ? true:false]) ?>

	<?= $form->field($model, 'code')->textInput(['maxlength' => 64]) ?>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			<?php if ( $model->isNewRecord ): ?>
				<?= Html::submitButton(
					'<span class="glyphicon glyphicon-plus-sign"></span> ' . UserManagementModule::t('back', 'Create'),
					['class' => 'btn btn-success']
				) ?>
			<?php else: ?>
				<?= Html::submitButton(
					'<span class="glyphicon glyphicon-ok"></span> ' . UserManagementModule::t('back', 'Save'),
					['class' => 'btn btn-primary']
				) ?>
			<?php endif; ?>
		</div>
	</div>

	<?php ActiveForm::end(); ?>

</div>

