<?php

class Calculator

{
    public $num1, $num2, $calc;

    public function __construct($num1, $num2, $calc)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->calc = $calc;
    }

    public function calculator()
    {
        if (is_numeric($this->num1) && is_numeric($this->num2)) {
            switch ($this->calc) {
                case 'add':
                    $result = $this->num1 + $this->num2;
                    break;

                case 'subtract':
                    $result = $this->num1 - $this->num2;
                    break;

                case 'multiplication':
                    $result = $this->num1 * $this->num2;
                    break;

                case 'division':
                    if ($this->num2 != 0) {
                        $result = $this->num1 / $this->num2;

                    } else {
                        $result = "Error";

                    }
                    break;

                default:
                    $result = "Error";
                    break;
            }
            return $result;

        } else {
            return $result = "Tham số nhập vào không hợp lệ";
        }
    }

}

$num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
$num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;
$calc = isset($_POST['calculator']) ? $_POST['calculator'] : 0;


$calculator = new Calculator($num1, $num2, $calc);
echo "Result: " . $calculator->calculator();

?>
