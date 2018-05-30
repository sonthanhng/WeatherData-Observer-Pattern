<?php
require('IDisplayElement.php');

class CurrentConditionsDisplay implements IObserver, IDisplayElement {
  private $temperature;
  private $humidity;
  private $weatherData;

  function __construct($weatherData)
  {
    $this->weatherData = $weatherData;
    $weatherData->registerObserver($this);
  }
  public function display()
  {
    echo "Current conditions: ".$this->temperature."F degrees and ".$this->humidity."% humidity"."<br />";
  }
  public function update($temperature, $humidity, $pressure)
  {
    $this->temperature = $temperature;
    $this->humidity = $humidity;
    $this->display();
  }
}
?>
