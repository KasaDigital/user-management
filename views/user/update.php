<?php

use kasadigital\modules\UserManagement\models\User;
use kasadigital\extensions\BootstrapSwitch\BootstrapSwitch;
use kasadigital\modules\UserManagement\UserManagementModule;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var kasadigital\modules\UserManagement\models\User $model
 */

$this->title = UserManagementModule::t('back', 'Editing user: ') . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => UserManagementModule::t('back', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = UserManagementModule::t('back', 'Editing');
?>
<div class="user-update">

	<h2 class="lte-hide-title"><?= $this->title ?></h2>

	<div class="card card-info">
		<div class="card-body">
                    <?php echo $this->render('_form', ['model'=>$model]); ?>
		</div>
	</div>

</div>