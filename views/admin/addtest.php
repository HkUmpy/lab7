<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */


echo '
        <h3 style="line-height: 72px;">Создание нового теста<h3>
    ';
$form = ActiveForm::begin();
    echo '<div class="adminAddMain">';
    echo $form->field($model, 'name')->textinput();
    echo $form->field($model, 'description')->textarea(['rows' => '6', 'style' => 'resize: none;']);
    echo '</div>';
    echo Html::submitButton('Добавить', ['class' => 'btn btn-success testNavButton']);
ActiveForm::end();
