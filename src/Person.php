<?php
class Person{
    private $firstNm;
    private $LastNm;

    public function getName($firstNm,$LastNm){
        return $firstNm.' '.$LastNm;
    }

}