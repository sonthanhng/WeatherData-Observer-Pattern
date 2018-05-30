<?php
  require('ISubject.php');
  require('WeatherData.php');
  require('CurrentConditionsDisplay.php');
  /**
   *
   */
  class WeatherStation
  {
    function __construct()
    {
      $weatherData = new WeatherData();
      $currentDisplay = new CurrentConditionsDisplay($weatherData);

      $weatherData->setMeasurements(80, 65, 30.4);
      $weatherData->setMeasurements(82, 70, 29.2);
      $weatherData->setMeasurements(78, 90, 29.2);
    }
  }

  $weatherStation = new WeatherStation();
?>
