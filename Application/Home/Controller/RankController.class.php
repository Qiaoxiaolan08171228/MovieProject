<?php
namespace Home\Controller;
use Think\Controller;
class RankController extends Controller {
    public function rank(){
        $this->display();
    }    

    public function hotshowinglist(){
        $this->display();
    }  

    public function TheMostAnticipatedList(){
        $this->display();
    }  

    public function boxOfficePoint(){
        $this->display();
    }  

    public function TheNorthAmericanBoxOffice(){
        $this->display();
    } 
    public function topOneHundredPoint(){
        $this->display();
    }  

}