<?php
  require('IObserver.php');
  /**
   *
   */
  interface ISubject
  {
    public function registerObserver($o);
    public function removeObserver($o);
    public function notifyObservers();
  }

?>
