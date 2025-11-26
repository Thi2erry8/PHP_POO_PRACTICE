<?php
     
     class Calc {
                 public $num1;
                 public $num2;
                 public $oper;

        public function __construct(string $one , int $two , int $three){
            $this->num1 = $two;
            $this->num2 = $three;
            $this->oper = $one;
        }

        
        public function calculator(){
            switch($this->oper){
                case "add":
                    return $this->num1 + $this->num2;
                    break;
                case "sub":
                    return $this->num1 - $this->num2;
                    break;
                case "div":
                    if($this->num2 == 0){
                        return "Division by zero is not allowed.";
                    } else {
                        return $this->num1 / $this->num2;
                    }
                    break;
                case "mul":
                    return $this->num1 * $this->num2;
                    break;
                default:
                    return "Invalid operation.";    
            }
        }
     }
?>