<?php
/**
 * the layouts for member module
 * @var yii\web\View $this
 **/
use kartik\sidenav\SideNav;
use yii\helpers\Url;

$this->beginContent('@theme/center/default/layouts/main.php');
?>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <?php
$type = 'http';
$heading = Yii::t('account', 'Account Manage');
$item = 'home';

echo SideNav::widget([
    'type' => $type,
    'encodeLabels' => false,
    'heading' => $heading,
    'items' => [
        ['label' => Yii::t('account', 'Withdrawal'), 'icon' => 'book', 'url' => Url::to(['/account/core/account/withdrawal-index', $type]), 'active' => ($item == 'withdrawal-index')],
        ['label' => Yii::t('account', 'Recharge'), 'icon' => 'tags', 'url' => Url::to(['/account/core/recharge/index', $type]), 'active' => ($item == 'recharge')],
    ],
]);
?>
                </div>
                <div class="col-md-10 col-sm-8">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>

<?php $this->endContent();?>