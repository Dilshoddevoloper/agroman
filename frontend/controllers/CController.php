<?php

namespace frontend\controllers;

use afzalroq\cms\entities\Collections;
use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\Options;
use afzalroq\cms\entities\OaI;
use afzalroq\cms\entities\unit\Categories;
use yii\data\Pagination;
use yii\web\Controller;


class CController extends Controller
{

    public function actionCollection(string $c)
    {

    }

    public function actionOption(string $c, string $o)
    {

    }

    public function actionEntity(string $e)
    {
        if ($e === 'labaratory') {
            $items = Items::find()
                ->where(['entity_id' => Entities::findOne(['slug' => $e])->id])
                ->andWhere(['!=', 'text_1' . "_" . \Yii::$app->params['l'][\Yii::$app->language], ""])
                ->andWhere(['<', 'date_0', time()])
                ->orderBy('date_0 DESC')
                ->all();
            return  $this->render('labaratory-list',[
                'items' => $items
            ]);
        }
        if ($e === 'useful') {
            $items = Items::find()
                ->where(['entity_id' => Entities::findOne(['slug' => $e])->id])
                ->andWhere(['!=', 'text_1' . "_" . \Yii::$app->params['l'][\Yii::$app->language], ""])
                ->andWhere(['<', 'date_0', time()])
                ->orderBy('date_0 DESC')
                ->all();
            return  $this->render('useful-list',[
                'items' => $items
            ]);
        }
        if ($e === 'mineralfertilizer') {
              return  $this->render('mineral-shop',[
                  'items' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => $e])->id])->all()
              ]);
        }
        if ($e === 'organicfertilizer') {
              return  $this->render('organik-shop',[
                  'items' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => $e])->id])->all()
              ]);
        }

    }

    public function actionItem(string $e, int $i)
    {
            if (in_array($e, ['labaratory','useful'])) {
            $item = Items::findOne($i);
            $item->updateViewsCount();
            $mostRead = Items::find()->where(['entity_id' => Entities::findOne(['slug' => $e])->id])
                ->andWhere(['!=', 'text_1' . "_" . \Yii::$app->params['l'][\Yii::$app->language], ""])
                ->andWhere(['<', 'date_0', time()])
                ->orderBy('views_count DESC')->limit(3)->all();
            $entity = Entities::findOne(['slug' => $e]);

            return  $this->render('labaratory-single',[
                'item' => $item,
                'mostRead' => $mostRead,
                'entity' => $entity,
            ]);
        }

    }

}
