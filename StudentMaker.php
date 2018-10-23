<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StudentMaker
 *
 * @author hp
 */
class StudentMaker {
    private $itStudent;
    private $engStudent;
    private $artStudent;
    private static $aStudentMaker;
    
    private function __construct(){
        $this->itStudent = new ItStudent();
        $this->engStudent = new EngStudent();
        $this->artStudent = new ArtStudent();
    }
    public static function getStudentMaker(){
         if(!isset(self::$aStudentMaker))
            self::$aStudentMaker = new StudentMaker();
        return self::$aStudentMaker;


    }
    public function viewIt(){
        $this->itStudent->view();
    }
    public function viewEng(){
        $this->engStudent->view();
    }
    public function viewArt(){
        $this->artStudent->view();
    }
}
