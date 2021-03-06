<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ClinicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clinicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clinica-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Clinica', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Clinica_id',
            'Nome',
            'Telefone',
            'Endereco',
            'Bairro',
            //'Cidade',
            //'UF',
            //'CEP',
            //'IBGE',
            //'Email:email',
            //'Desc',
            //'Imagem',
            //'criado_em',
            //'atualizado_em',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
