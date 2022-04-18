<?php
/**
 * @var yii\widgets\ActiveForm $form
 * @var kasadigital\modules\UserManagement\models\rbacDB\Permission $model
 */

use kasadigital\modules\UserManagement\UserManagementModule;

$this->title = UserManagementModule::t('back', 'Editing permission: ') . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => UserManagementModule::t('back', 'Permissions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="card card-info">
    <div class="card-header">
                <h2 class="lte-hide-title"><?= $this->title ?></h2>
            </div>
	<div class="card-body">
		<?= $this->render('_form', [
			'model'=>$model,
		]) ?>
	</div>
</div>