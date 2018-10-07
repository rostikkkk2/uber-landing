<?php
  $this -> registerCssFile('@web/css/style.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center mb-80">Наши преимущества</h2>
      <div class="row">
        <div class="col-md-3">
          <p class="text-center">
            <img src="images/1.png" alt="">
          </p>
          <p class="titile-service mt-40">Выгодная оплата</p>
          <p class="about-service">Всегда есть наличные на заправку авто, остальная часть заработанных средств вы получите на свою карту!</p>
        </div>
        <div class="col-md-3">
          <p class="text-center">
            <img src="images/2.png" alt="">
          </p>
          <p class="titile-service mt-40">Скидки на топливо</p>
          <p class="about-service">Для наших водителей/партнеров скидка БРСМ/OKKO/WOG до 3 грн. за литр!</p>
        </div>
        <div class="col-md-3">
          <p class="text-center">
            <img src="images/3.png" alt="">
          </p>
          <p class="titile-service mt-40">Стабильные выплаты</p>
          <p class="about-service">Все заработаные деньги за неделю вы получаете каждую среду с 12:00 до 24:00.</p>
        </div>
        <div class="col-md-3">
          <p class="text-center">
            <img src="images/4.png" alt="">
          </p>
          <p class="titile-service mt-40">Автомобиль без рекламы</p>
          <p class="about-service">Не нужно никаких опозновательных знаков, рекламы или "шашек".</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <p class="text-center">
            <img src="images/5.png" alt="">
          </p>
          <p class="titile-service mt-40">Быстрая регистрация</p>
          <p class="about-service">Вы начнете работу уже через пол часа после регистрации.</p>
        </div>
        <div class="col-md-3">
          <p class="text-center">
            <img src="images/6.png" alt="">
          </p>
          <p class="titile-service mt-40">Низкая комиссия</p>
          <p class="about-service">У нас одна из самых низких комиссий партнера на рынке.</p>
        </div>
        <div class="col-md-3">
          <p class="text-center">
            <img src="images/7.png" alt="">
          </p>
          <p class="titile-service mt-40">Cкидки на автомойки</p>
          <p class="about-service">Скидки на автомойки в сети ПИОНЕР.</p>
        </div>
        <div class="col-md-3">
          <p class="text-center">
            <img src="images/8.png" alt="">
          </p>
          <p class="titile-service mt-40">Свободный график</p>
          <p class="about-service">Вы работаете в любое время когда вам удобно.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 wrapper-guarantees">
          <h2 class="text-center mb-50 mt-80">Гарантии</h2>
          <div class="row">
            <div class="col-md-4 mt-25">
              <p class="text-center">
                <img src="images/guarantees_1.png" alt="">
              </p>
              <p class="about-service">Заработок от 10 000 грн</p>
            </div>
            <div class="col-md-4 mt-25">
              <p class="text-center">
                <img src="images/guarantees_2.png" alt="">
              </p>
              <p class="about-service">Большое количество заказов</p>
            </div>
            <div class="col-md-4 mt-25">
              <p class="text-center">
                <img src="images/guarantees_3.png" alt="">
              </p>
              <p class="about-service">Еженедельные выплаты</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mt-25">
              <p class="text-center">
                <img src="images/guarantees_4.png" alt="">
              </p>
              <p class="about-service">Свободный график</p>
            </div>
            <div class="col-md-4 mt-25">
              <p class="text-center">
                <img src="images/guarantees_5.png" alt="">
              </p>
              <p class="about-service">Бонусы и промо-акции</p>
            </div>
            <div class="col-md-4 mt-25">
              <p class="text-center">
                <img src="images/guarantees_6.png" alt="">
              </p>
              <p class="about-service">Удобное приложение</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mt-25">
              <p class="text-center">
                <img src="images/guarantees_7.png" alt="">
              </p>
              <p class="about-service">Компенсация отмененной поездки</p>
            </div>
            <div class="col-md-4 mt-25">
              <p class="text-center">
                <img src="images/guarantees_8.png" alt="">
              </p>
              <p class="about-service">Программа лояльности</p>
            </div>
            <div class="col-md-4 mt-25">
              <p class="text-center">
                <img src="images/guarantees_9.png" alt="">
              </p>
              <p class="about-service">Круглосуточная техподдержка</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
