<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    interface Actity{
      public function action();
      public function ride();
      public function toggleLight();
      public function beep();
    }
    //МАШИНЫ
    class Auto implements Actity{
      private $light=false;

      public function action(){
        echo "*Форсаж активирован*";
      }
      public function ride(){
        echo "*Двигатель запущен, начинаем движение*";
      }
      public function toggleLight(){
        if($this->light){
          $this->light=false;
          echo "*Фары включены*";
        }else{
          $this->light=true;
          echo "*Фары отключены*";
        }
      }
      public function beep(){
        echo "*Звук гудка*";
      }
    }
    //ПОДКЛАССЫ МАШИН
    class Buggy extends Auto{
      private $skin="skin1";
      private $wheels=4;
      private $maxSpeed=200;
      private $heath=150;
    }
    class MegaBuggy extends Auto{
      private $skin="skin2";
      private $wheels=6;
      private $maxSpeed=220;
      private $heath=180;
    }
    //ТАНК
    class Tank implements Actity{
      private $light=false;
      public function action(){
        echo "*Выстрел*";
      }
      public function ride(){
        echo "Едем";
      }
      public function toggleLight(){
        if($this->light){
          $this->light=false;
          echo "*Фары включены*";
        }else{
          $this->light=true;
          echo "*Фары отключены*";
        }
      }
      public function beep(){
        echo "*Кнопка гудка была нажата* - Стоп, в танке не нет гудка... Но тогда что делает эта большая красная кнопка? *Взрыв*";
      }
    }
    //ПОДКЛАССЫ ТАНКОВ
    class T43 extends Tank{
      private $skin="skin2";
      private $wheels=10;
      private $maxSpeed=80;
      private $heath=450;
    }
    class SAU extends Tank{
      private $skin="skin1";
      private $wheels=4;
      private $maxSpeed=80;
      private $heath=400;
    }
    // БУЛЬДОЗЕРЫ
    class Tesla implements Actity{
      private $light=false;
      public function action(){
        echo "Удар молнией";
      }
      public function ride(){
        echo "Двигаемся";
      }
      public function toggleLight(){
        if($this->light){
          $this->light=false;
          echo "*Фары включены*";
        }else{
          $this->light=true;
          echo "*Фары отключены*";
        }
      }
      public function beep(){
        echo "*Восьмибитный гудок*";
      }
    }
    //ПОДКЛАССЫ БУЛЬДОЗЕРОВ
    class UltraTesla extends Tesla{
      private $skin="skin1";
      private $wheels=4;
      private $maxSpeed=50;
      private $heath=850;
    }
    class TeslaMiniEdition extends Tesla{
      private $skin="skin2";
      private $wheels=6;
      private $maxSpeed=176;
      private $heath=50;
    }

  ?>
</body>
</html>