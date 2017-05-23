<?php

namespace app\controllers;
use Yii;
use app\models\Member;

class MemberController extends \yii\web\Controller
{
    public function actionIndex()
    {
      $member = Member::find()->all();

        return $this->render('index',[
          'member' => $member
        ]);

    }

    public function actionRegister()
    {
      $member = new Member();

      if ($member->load(Yii::$app->request->post())) {
        if ($member->save()) {
          return $this->redirect(['index']);
        }
      }
        return $this->render('register',[
          'member' => $member
        ]);

    }

    public function actionUpdate($id)
    {
      $member = Member::findOne($id);

      if ($member->load(Yii::$app->request->post())) {
        if ($member->save()) {
          return $this->redirect(['index']);
        }
      }
        return $this->render('update',[
          'member' => $member,
        ]);
    }

    public function actionDelete($id)
    {
      $member = Member::findOne($id);

      if ($member->delete()) {
          return $this->redirect(['index']);
      }
    }

}
