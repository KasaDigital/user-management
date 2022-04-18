<?php

namespace kasadigital\modules\UserManagement\controllers;

use Yii;
use kasadigital\modules\UserManagement\models\UserVisitLog;
use kasadigital\modules\UserManagement\models\search\UserVisitLogSearch;
use kasadigital\components\AdminDefaultController;

/**
 * UserVisitLogController implements the CRUD actions for UserVisitLog model.
 */
class UserVisitLogController extends AdminDefaultController
{
	/**
	 * @var UserVisitLog
	 */
	public $modelClass = 'kasadigital\modules\UserManagement\models\UserVisitLog';

	/**
	 * @var UserVisitLogSearch
	 */
	public $modelSearchClass = 'kasadigital\modules\UserManagement\models\search\UserVisitLogSearch';

	public $enableOnlyActions = ['index', 'view', 'grid-page-size'];
}
