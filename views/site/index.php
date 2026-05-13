<?php
use yii\bootstrap5\Carousel;
use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'Портал «Корочки.есть»!';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4"><?= $this->title ?></h1>

        <p class="lead">Онлайн-курсы дополнительного профессионального образования.</p>

        <p><a class="btn btn-lg btn-success" href="/app">Записаться на курсы</a></p>
    </div>


    <div class="jumbotron text-center bg-primary mt-5 mb-5">
        <?php
        
            echo Carousel::widget([
                'items' => [
                    [
                        'content' => Html::img('@web/images/image06.jpg', ['alt' => 'room']),                
                        'caption' => "Конференц-зал",                
                    ],
                    [
                        'content' => Html::img('@web/images/image07.jpg', ['alt' => 'room']),                
                        'caption' => "Кабинет специальных дисциплин",                
                    ],
                    [
                        'content' => Html::img('@web/images/image08.jpg', ['alt' => 'room']),                
                        'caption' => "Кабинет информатики",                
                    ],
                    [
                        'content' => Html::img('@web/images/image09.jpg', ['alt' => 'room']),                
                        'caption' => "Учебная аудитория",                
                    ],
                ],
                'clientOptions' => [
                    'interval' => 3000, // PKGH Интервал в миллисекундах
                ],
                'crossfade' => true,
            ]);


        ?>
    </div>


    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Качественно</h2>

                <p>Возврат денег в случае обоснованной претензии по качеству.</p>

                <p><a class="btn btn-outline-secondary" href="/app">Записаться &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Удобно</h2>

                <p>Обучайтесь в удобное время, в удобном месте и в своем темпе.</p>

                <p><a class="btn btn-outline-secondary" href="/app">Узнать подробнее &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Выгодно</h2>

                <p>Сейчас как раз скидки на обучение программированию.</p>

                <p><a class="btn btn-outline-secondary" href="/app">Получить скидку &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
