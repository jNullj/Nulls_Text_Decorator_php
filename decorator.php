<?php

class Decorator {
  private $upper;
  private $lower;
  private $nums;
  private $origin;
  
  function __construct(){
    $this->upper = range('A', 'Z');
    $this->lower = range('a', 'z');
    $this->nums = range('0','9');
    $this->origin = array_merge($this->lower, $this->upper, $this->nums);
  }
  
  public function cycle($text){
    $id_upper = range(hexdec('24B6'),hexdec('24CF'));
    $id_lower = range(hexdec('24D0'),hexdec('24E9'));
    $id_nums = array_merge([hexdec('24EA')],range(hexdec('2460'),hexdec('2468')));
    $id = array_merge($id_lower, $id_upper, $id_nums);
    foreach($id as $key => $val){
      $id[$key] = dechex($val);
    }
    $map = array();
    foreach($id as $val)
    {
      $myval = "\u{$val}";
      $myval = json_decode('"'.$myval.'"');
      array_push($map, $myval);
    }
    return str_replace($this->origin, $map, $text);
  }
  
  public function leet($text){
      $from =   ['a','e','g','i','o','s','t','A','E','G','I','O','S','T'];
      $to =     ['4','3','6','1','0','5','7','4','3','6','1','0','5','7'];
      return str_replace($from, $to, $text);
  }
  
  public function parenthesized($text){
      $unicode_parent = range(hexdec('249C'),  hexdec('24B5'));
      foreach($unicode_parent as $key => $val){
        $unicode_parent[$key] = dechex($val);
      }
      $map = array();
      foreach($unicode_parent as $val)
      {
        $myval = "\u{$val}";
        $myval = json_decode('"'.$myval.'"');
        array_push($map, $myval);
      }
      return str_replace($this->lower, $map, $text);
  }
}

?>
