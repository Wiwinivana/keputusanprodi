<!DOCTYPE html>

<?php
use yii\Helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Keputusan Prodi',
        
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/depan']],
            ['label' => 'Tentang', 'url' => ['/site/tentang']],
            ['label' => 'Kontak', 'url' => ['/site/depan']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Keputusan Prodi Politeknik Negeri Indramayu</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>



    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <?= Html::img("@web/images/pol.png",['style' => 'width: 100%']); ?>
      </div>

      <div class="item">
        <?= Html::img("@web/images/tm.jpg",['style' => 'width: 100%']); ?>
      </div>
    
      <div class="item">
       <?= Html::img("@web/images/tp.jpg",['style' => 'width: 100%']); ?>
      </div>
      <div class="item">
       <?= Html::img("@web/images/infor.png",['style' => 'width: 100%']); ?>
      </div>
      <div class="item">
       <?= Html::img("@web/images/mesin.jpg",['style' => 'width: 100%']); ?>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>

<section id="area-main" class="padding">
<h5 class="hidden">hidden</h5>
    <div class="container">
        <section class="section-padding" id="about">
            <h2 class="heading text-center wow fadeInDown" data-wow-duration="300ms" data-wow-delay="200ms">
                TENTANG KAMI
            </h2>
           <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                        <span class="text-center"><i class="icon-megaphone2 color10"></i></span>
                         <h4 class="color30"><?= Html::a('Teknik Informatika', ['site/depan'], ['class' => 'color30']); ?></h4>
                        <p> VISI DAN MISI </p>
                        <p class="font-depan">
                             ”Menjadi program studi yang unggul di bidang Teknologi informasi dan menghasilkan tenaga profesional yang bermoral, mandiri, serta mampu bersaing di dunia industri”
                        </p>
                    </div>
                       <div class="col-md-4 col-sm-4 col-xs-12 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                        <span class="text-center"><i class="icon-megaphone2 color10"></i></span>
                         <h4 class="color30"><?= Html::a('Teknik Mesin', ['site/depan'], ['class' => 'color30']); ?></h4>
                        <p> VISI DAN MISI </p>
                        <p class="font-depan">
                             ”Menjadi program studi yang unggul di bidang Teknologi informasi dan menghasilkan tenaga profesional yang bermoral, mandiri, serta mampu bersaing di dunia industri”
                        </p>
                    </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                        <span class="text-center"><i class="icon-megaphone2 color10"></i></span>
                         <h4 class="color30"><?= Html::a('Teknik Mesin', ['site/depan'], ['class' => 'color30']); ?></h4>
                        <p> VISI DAN MISI </p>
                        <p class="font-depan">
                             ”Menjadi program studi yang unggul di bidang Teknologi informasi dan menghasilkan tenaga profesional yang bermoral, mandiri, serta mampu bersaing di dunia industri”
                        </p>
                    </div>
                    </div>
                    </div>
                    </section>
<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Politeknik Negeri Indramayu <?= date('Y') ?></p>
    </div>
</footer> -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>