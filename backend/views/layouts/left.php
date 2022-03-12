<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/avatar2.jpeg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Управление', 'options' => ['class' => 'header']],
                    ['label' => 'Меню CMS', 'icon' => 'list', 'url' => ['/cms/home/index']],
                    ['label' => '-', 'url' => ['#']],
                    ['label' => 'Contacts', 'icon' => 'address-book', 'url' => ['/contacts/index']],
                    YII_ENV === 'dev' ? ['label' => 'CMS', 'icon' => 'th-list', 'url' => ['/cms/home']] : [],
                ],
            ]
        ) ?>
    </section>
</aside>
