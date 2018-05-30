<?php
  /**
   *
   */
  class WeatherData implements ISubject
  {
    private $observers;
    private $temperature;
    private $humidity;
    private $pressure;

    function __construct()
    {
      $this->observers = [];
    }
    public function registerObserver($o)
    {
      array_push($this->observers, $o);
    }
    public function removeObserver($o)
    {
      for($i = 0; $i < count($this->observers); $i++) {
        if ($this->observers[$i] == $o) {
          array_splice($this->observers, $i, 1);
        }
      }
    }
    public function notifyObservers()
    {
      for ($i = 0; $i < count($this->observers); $i++) {
        $observer = $this->observers[$i];
        $observer->update($this->temperature, $this->humidity, $this->pressure);
      }
    }
    public function measurementsChanged()
    {
      $this->notifyObservers();
    }
    public function setMeasurements($temperature, $humidity, $pressure)
    {
      $this->temperature = $temperature;
      $this->humidity = $humidity;
      $this->pressure = $pressure;
      $this->measurementsChanged();
    }
  }

?>
