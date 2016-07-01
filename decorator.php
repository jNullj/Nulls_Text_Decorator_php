<?php

class Decorator {
  private $upper;
  private $lower;
  private $nums;
  private $origin;
  
  void __construct(){
    $upper = range('A', 'Z');
    $lower = range('a', 'z');
    $nums = range('0','9');
    $origin = $lower + $upper + $nums;
  }
  
  public function cycle($text){
    $id_upper = range(9398,9423);
    $id_lower = range(9324,9449);
    $id_nums = [9450] + range(9312,9320);
    $id = $id_lower + $id_upper + $id_nums;
    $map = [];
    foreach($id as $val)
    {
      $myval = "\u{$val}";
      $myval = json_decode($myval);
      $map = $map + [$myval];
    }
    return str_replace($original, $map, $text);
  }
}

?>
