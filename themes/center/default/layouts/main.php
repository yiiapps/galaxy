<?php
use home\widgets\Alert;
use store\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage();?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language;?>">
<head>
    <meta charset="<?=Yii::$app->charset;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=Html::csrfMetaTags();?>
    <title><?=Html::encode($this->title);?></title>
    <?php $this->head();?>
</head>
<body>
<?php $this->beginBody();?>
<div class="wrap">
    <?php
NavBar::begin([
    'brandLabel' => 'Galaxy Core Center',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);
$menuItems = [
    ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'About', 'url' => ['/site/about']],
    //        ['label' => 'Contact', 'url' => ['/site/contact']],
];
if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/user/registration/register']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/user/security/login']];
} else {
    $menuItems[] = ['label' => 'User', 'url' => ['/user/admin/index']];
    $menuItems[] = [
        'label' => 'Catalog', 'url' => ['/catalog/core/default/index'],
    ];
    $menuItems[] = [
        'label' => 'Blog', 'url' => ['/blog/core/post'],
    ];
    $menuItems[] = [
        'label' => 'Order', 'url' => ['/order/core/order/index'],
    ];
    $menuItems[] = [
        'label' => 'Marketing', 'url' => ['/marketing/core/coupon/index'],
    ];
    $menuItems[] = [
        'label' => 'Account', 'url' => ['/account/core/account/withdrawal-index'],
    ];
    $menuItems[] = [
        'label' => 'Refund', 'url' => ['/refund/core/refund/index'],
    ];
    $menuItems[] = [
        'label' => 'System', 'url' => ['/system/core/default/index'],
    ];
//        $menuItems[] = ['label' => 'Settings', 'url' => ['/user/settings/profile']];
    //        $menuItems[] = ['label' => 'Auth', 'url' => ['/auth/auth/create']];
    $menuItems[] = [
        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
        'url' => ['/user/security/logout'],
        'linkOptions' => ['data-method' => 'post'],
    ];
}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);
NavBar::end();
?>

    <div class="container" style="width: 100%">
        <?=Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);?>
        <?=Alert::widget();?>
        <?=$content;?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Yincart2 Galaxy <?=date('Y');?></p>
        <p class="pull-right"><?=Yii::powered();?></p>
    </div>
</footer>

<?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>
