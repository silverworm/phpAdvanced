<?php

namespace PhpAdvanced;

/**
 *
 */
class MovableCar implements MovableInterface
{

  protected $maxSpeed = 200;
  protected $ignition;
  protected $currentSpeed;

  public function start(){
    if(!$this->ignition === true){
      $this->ignition = true;
      return "Зажигание включено". PHP_EOL;
    }else{
      return "Зажигание уже включено, не возможно включить повторно". PHP_EOL;
    }
  }

  public function stop(){
    if($this->ignition === true){
      $this->ignition = false;
      return "Зажигание выключено". PHP_EOL;
    }else{
      return "Зажигание уже выключено, не возможно выключить повторно".PHP_EOL;
    }
  }

  public function up(int $speedUp = 1){
    if($this->ignition == true){

      if($this->currentSpeed >= $this->maxSpeed){
        return "автомобиль не может двигаться со скоростью больше " . $this->maxSpeed . ' км/ч'. PHP_EOL;
      }

      $this->currentSpeed += $speedUp;

      if($this->currentSpeed >= $this->maxSpeed){
        $this->currentSpeed = $this->maxSpeed;
      }

      return "автомобиль в данный момент движется со скоростью " . $this->currentSpeed . ' км/ч'. PHP_EOL;
    }else{
      return "Зажигание выключено - не возможно ехать". PHP_EOL;
    }

  }

  public function down(int $speedDown = 1){
    if($this->ignition == true){

      if($this->currentSpeed <= 0){
        return "автомобиль уже стоит".PHP_EOL;
      }

      $this->currentSpeed -= $speedDown;

      if($this->currentSpeed <= 0){
        $this->currentSpeed = 0;
        return 'автомобиль стоит';
      }

      return "автомобиль в данный момент движется со скоростью " . $this->currentSpeed . ' км/ч'. PHP_EOL;
    }else{
      return "Зажигание выключено - не возможно ехать". PHP_EOL;
    }

  }
}