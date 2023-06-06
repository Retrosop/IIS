<?php

/** @var yii\web\View $this */

//use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\LinkPager;
use yii\bootstrap5\Html;

$this->title = 'Index';


?>

<div  class="site-about">      
  <?php $form = ActiveForm::begin(['method'=> 'get'])?>
  <label for="inputName" class="form-label">Название диплома</label>
  <?=Html::textInput('namepub',$this->params['namepub']==''?'': $this->params['namepub'],['placeholder' => 'Введите название', 'size' => 25, 'class' => "form-control",'type'=>"text"])?>
  <label for="inputAuthor" class="form-label">Имя автора</label>
  <?=Html::textInput('authorpub',$this->params['authorpub']==''?'': $this->params['authorpub'],['placeholder' => 'Введите автора', 'size' => 25,'class' => "form-control",'type'=>"text"])?>
  <label for="inputDate" class="form-label">Дата</label>
  <?=Html::textInput('datepub',$this->params['datepub']==''?'': $this->params['datepub'],['placeholder' => 'Введите дату', 'size' => 25,'class' => "form-control",'type'=>"date"])?>
  <br>
  <?=
  Html::submitButton('Отправить', ['class' => 'btn btn-outline-danger'])
  ?>
  
  <?php ActiveForm::end()?>  


<head>
</head>
<body style="background: url(https://celes.club/uploads/posts/2022-05/1653508812_29-celes-club-p-fon-dlya-saita-sport-krasivie-30.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;"><br>				
<div class="position-relative"><center>
          <?php 
              foreach($models as $Public):						
          ?>     

          <div style="display: inline-block;" class="col-lg-2; w-25 p-3;p-3 mb-2 bg-dark text-white bg-opacity-75">
                 <div  class="">
                  <strong><p class="fs-5"><?= $Public->namepub; ?></p></strong>
                  <p><img style="width: 14vw;" src="<?=$Public->image?>" ></p>
                  <p><?= $Public->descpub; ?></p>
                  <p><?= $Public->datepub; ?></p>
              </div>
                  <p><a class="btn btn-outline-info" href="*">Подробнее</a></p>
              </div> 

          <?php 
              endforeach; 
          ?>
</div></center>

  <div class="pagination">
      <?php 
          echo LinkPager::widget([
              'pagination' => $pages
          ]); 
      ?>
  </div>
</body>
</div>