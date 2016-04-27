<?php

namespace backend\controllers;

use Yii;
use common\models\AuthItem;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\base\BaseBackController;
use base\Ad;
use yii\rbac\Role;
use common\models\search\AuthItemSearch;
use base\BaseController;
use yii\rbac\Item;
use yii\rbac\Permission;



/**
 * AdUserController implements the CRUD actions for AdUser model.
 */
class RoleController extends AuthController
{
public function actionIndex()
	{
		$groupName = Ad::getGetValue('group');

		$items = $this->getCachedRolesByGroup($groupName);
		if (! $items)
		{
			$items = $this->getCachedRoles();
		}

		$locals = [];
		$locals['currentGroup'] = $groupName;
		$locals['groups'] = $this->getCachedRoleGroups();
		$locals['items'] = $items;

		return $this->render('index', $locals);
	}

	/**
	 * Creates a new AuthItem model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 *
	 * @return mixed
	 */
	public function actionCreate()
	{
		$model = new AuthItem();
		$model->group = Ad::getGetValue('group', '');

		if ($model->load(Yii::$app->request->post()))
		{
			$item = $this->model2Item($model, new Role());
			$this->auth->add($item);

			$groupName = Ad::getPostValue('AuthItem')['group'];

			$group = new Role();
			$group->name = $groupName;
			$this->auth->addChild($group, $item);

			AuthItem::createCachedRoles();

			return $this->redirect([
					'index',
					'group' => $groupName
			]);
		}
		else
		{
			$locals = [];
			$locals['groups'] = $this->getCachedRoleGroups();
			$locals['model'] = $model;

			return $this->render('create', $locals);
		}
	}

	public function actionRefresh()
	{
		$groupName = Ad::getGetValue('group');
		AuthItem::createCachedRoles();

		return $this->redirect([
				'index',
				'group' => $groupName
		]);
	}

	/**
	 * Updates an existing AuthItem model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 *
	 * @param string $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		$groupName = Ad::getGetValue('group');

		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()))
		{
			$item = $this->model2Item($model, new Role());
			$this->auth->update($id, $item);

			AuthItem::createCachedRoles();

			return $this->redirect([
					'index',
					'group' => $groupName
			]);
		}
		else
		{
			$model->group = $this->getCachedRoles($id)['group'];

			$locals = [];
			$locals['currentGroup'] = $groupName;
			$locals['groups'] = $this->getCachedRoleGroups();
			$locals['model'] = $model;

			return $this->render('update', $locals);
		}
	}

	private function updatePermissions($allItems, $selectedItems, $existedItems, $parent, $child)
	{
		if ($selectedItems == null)
		{
			$selectedItems = [];
		}

		foreach ( $allItems as $item )
		{
			$itemName = $item['name'];

			$child->name = $itemName;

			// check if the $itenName is selected
			if (in_array($itemName, $selectedItems))
			{
				// check if exists in db
				if (in_array($itemName, $existedItems))
				{
					Ad::info('exist:' . $itemName);
					continue;
				}
				else
				{
					// add new permission
					Ad::info('add:' . $itemName);
					$this->auth->addChild($parent, $child);
				}
			}
			else // unselected permission
			{
				// check if exists in db
				if (in_array($itemName, $existedItems))
				{
					// need to be deleted
					Ad::info('delete:' . $itemName);
					$this->auth->removeChild($parent, $child);
				}
			}
		}
	}

	public function actionPermission($id)
	{
		$groupName = Ad::getGetValue('group');

		$model = $this->findModel($id);

		$existPermissions = $this->getCachedRoles($id)['permissions'];

		if (Ad::hasPostValue('submit'))
		{
			$parent = new Role();
			$parent->name = $id;

			$allPermissions = $this->getCachedPermissions();
			$selectedPermissions = Ad::getPostValue('selectedPermissions');
			$this->updatePermissions($allPermissions, $selectedPermissions, $existPermissions, $parent, new Permission());

			AuthItem::createCachedRoles();

			return $this->redirect([
					'index',
					'group' => $groupName
			]);
		}
		else
		{
			$allPermissions = [];
			$categories = $this->getCachedPermissionCategories();
			foreach ( $categories as $category )
			{
				$allPermissions[$category['description']] = $this->getCachedPermissionsByCategory($category['name']);
			}

			$locals = [];
			$locals['currentGroup'] = $groupName;
			$locals['model'] = $model;
			$locals['allPermissions'] = $allPermissions;
			$locals['existPermissions'] = $existPermissions;

			return $this->render('permission', $locals);
		}
	}

	/**
	 * Displays a single AuthItem model.
	 *
	 * @param string $id
	 * @return mixed
	 */
	public function actionView($id)
	{
		return $this->render('view', [
				'model' => $this->findModel($id)
		]);
	}

	/**
	 * Deletes an existing AuthItem model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 *
	 * @param string $id
	 * @return mixed
	 */
	public function actionDelete($id)
	{
		$groupName = Ad::getGetValue('group');

		$item = new Role();
		$item->name = $id;
		$this->auth->remove($item);

		AuthItem::createCachedRoles();

		return $this->redirect([
				'index',
				'group' => $groupName
		]);
	}

	/**
	 * Finds the AuthItem model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 *
	 * @param string $id
	 * @return AuthItem the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = AuthItem::findOne($id)) !== null)
		{
			return $model;
		}
		else
		{
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
