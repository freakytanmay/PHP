<?php
class model{
    private $arr;
    function modelhome(){
        $this->arr="from model class home";
        return $this->arr;
    }
    function modelabout(){
        $this->arr="from model class about";
        return $this->arr;
    }
    function modelcontact(){
        $this->arr="from model contact";
        return $this->arr;
    }
}
?>