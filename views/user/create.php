<?php

use kasadigital\modules\UserManagement\UserManagementModule;

/**
 * @var yii\web\View $this
 * @var kasadigital\modules\UserManagement\models\User $model
 */

$this->title = UserManagementModule::t('back', 'User creation');
$this->params['breadcrumbs'][] = ['label' => UserManagementModule::t('back', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

	<h2 class="lte-hide-title"><?= $this->title ?></h2>

	<div class="card card-info">
		<div class="card-body">
			<?php echo $this->render('_form', ['model'=>$model]); ?>
		</div>
	</div>

</div>
