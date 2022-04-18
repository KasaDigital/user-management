<?php

use kasadigital\modules\UserManagement\UserManagementModule;
use yii\bootstrap4\Html;

/**
 * @var yii\web\View $this
 * @var kasadigital\modules\UserManagement\models\rbacDB\AuthItemGroup $model
 */

$this->title = UserManagementModule::t('back', 'Creating permission group');
$this->params['breadcrumbs'][] = ['label' => UserManagementModule::t('back', 'Permission groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-group-create">

	<div class="card card-info">
            <div class="card-header">
                <h2 class="lte-hide-title"><?= $this->title ?></h2>
            </div>
		<div class="card-body">

			<?= $this->render('_form', compact('model')) ?>
		</div>
	</div>

</div>
