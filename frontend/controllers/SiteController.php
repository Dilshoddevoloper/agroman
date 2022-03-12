<?php

namespace frontend\controllers;

use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use common\models\Feedback;
use common\models\Telegram;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index',[
            'partners' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'partners'])->id])->all()
        ]);
    }

    public function actionContacts()
    {
        $model = new Feedback();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            try {
                $text = htmlspecialchars(
                    Yii::t('app', 'Application send!') . " \n" .
                    Yii::t('app', 'Name') . " " . $model->full_name . "\n" .
                    Yii::t('app', 'Phone') . " " . $model->email_phone . "\n" .
                    Yii::t('app', 'Message') . " " . $model->message . "\n"
                );
                Telegram::sendMessage($text);
                Yii::$app->session->setFlash('success', Yii::t('app', 'Thank you for contacting us. We will respond to you as soon as possible.'));
            } catch (\Exception $e) {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Error occurred:') . ' ' . $e->getMessage());
            }
            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model
        ]);
    }

}
