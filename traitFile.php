<?php

trait test{

  protected $temp;
  
  public function fn_test($data)
  {
    return $this->temp = $data;
  }

}
