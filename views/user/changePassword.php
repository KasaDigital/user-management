<?php

use kasadigital\modules\UserManagement\UserManagementModule;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

/**
 * @var yii\web\View $this
 * @var kasadigital\modules\UserManagement\models\User $model
 */

$this->title = UserManagementModule::t('back', 'Changing password for user: ') . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => UserManagementModule::t('back', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = UserManagementModule::t('back', 'Changing password');
?>
<div class="user-update">

	<h2 class="lte-hide-title"><?= $this->title ?></h2>

	<div class="card card-info">
		<div class="card-body">

			<div class="user-form">

				<?php $form = ActiveForm::begin([
					'id'=>'user',
					'layout'=>ActiveForm::LAYOUT_HORIZONTAL,
				]); ?>

				<?= $form->field($model, 'password')->passwordInput(['maxlength' => 255, 'autocomplete'=>'off']) ?>

				<?= $form->field($model, 'repeat_password')->passwordInput(['maxlength' => 255, 'autocomplete'=>'off']) ?>


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
		</div>
	</div>

</div>
