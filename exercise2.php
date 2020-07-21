<?php

class Circle
{
    public $superficies, $radius;

    public function __construct($superficies, $radius)
    {
        $this->superficies = $superficies;
        $this->radius      = $radius;
    }

    public function calculator()
    {
        $superficies = $this->superficies;
        $radius      = $this->radius;

        if (!empty($radius) && is_numeric($radius) && empty($superficies)) {
            $result = $radius * $radius * pi();

        } elseif (!empty($superficies) && is_numeric($superficies) && empty($radius)) {
            $result = sqrt($superficies / pi());

        } elseif ((empty($radius)) && (empty($superficies))) {
            $result = "Bạn phải nhập 1 trong 2 trường";

        } elseif (!empty($radius) && is_numeric($radius) && !empty($superficies) && is_numeric($superficies)) {
            $result = "Bạn chỉ được nhập 1 trong 2 trường";

        } else {
            $result = "Giá trị nhập vào phải là số";
        }

        return $result;
    }
}

$superficies = isset($_POST['superficies']) ? $_POST['superficies'] : 0;
$radius      = isset($_POST['radius']) ? $_POST['radius'] : 0;

$result = new Circle($superficies, $radius);
echo "Result: " . $result->calculator();
