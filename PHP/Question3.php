<?php
    class Guerrier
    {
        public $level;
        public $name;
        public $age;
        public $strength;
        public $weapon;
        public function __construct($N, $A)
        {
            $this -> level = 1;
            $this -> name = $N;
            $this -> age = $A;
            $this -> strength = 100;
            $this -> weapon = "hache";
        }
        public function getlevel(){
            return $this -> level;
        }
        public function Setlevel(){
            $this -> level ++ ;
        }        
        public function getname(){
            return $this -> name;
        }
        public function Setname($NewName){
            $this -> name = $NewName;
        }        
        public function getage(){
            return $this -> age;
        }
        public function Setage($NewAge){
            $this -> age = $NewAge;
        }           
        public function getstrength(){
            return $this -> strength;
        }
        public function Setstrength(){
            $this -> strength  += 50;
        }    
        public function getweapon(){
            return $this -> weapon;
        }
        public function Setweapon($NewStrength){
            $this -> strength = $NewStrength;
        }                
    }
    function levelUp(){
        
        Setlevel();
        Setstrength();
    }
    function AttaqueCoupDeHache(){
        $attack = $strength * 1.5;
        $miss = rand(0,1);
        if ($miss == 0){
            echo "attaque ratée";
        }
        else{
            echo "attaque réussie : $attack DMG";
        }
    }
?>