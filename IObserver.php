<?php
  /**
   *
   */
  interface IObserver
  {
    public function update($temp, $humidity, $pressure);
  }

?>
