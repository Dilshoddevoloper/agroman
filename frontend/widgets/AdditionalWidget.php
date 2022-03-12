<?php

namespace frontend\widgets;

use yii\bootstrap\Widget;

class AdditionalWidget extends Widget
{

    public function run()
    {
        return $this->render('_additional');
    }
}
