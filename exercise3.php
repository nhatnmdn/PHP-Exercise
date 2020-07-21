<?php

if (isset($_POST['action'])) {
    $input   = isset($_POST['input']) ? $_POST['input'] : '';
    $find    = isset($_POST['find']) ? $_POST['find'] : '';
    $replace = isset($_POST['replace']) ? $_POST['replace'] : '';

    if (!empty($input) && !empty($find) && !empty($replace)) {
        $result = replaceString($input, $find, $replace);

    } else {
        $error = 'Yêu cầu nhập đủ các trường';
    }
}

function replaceString($input, $find, $replace)
{
    if (strpos($input, $find) !== false) {
        if (!empty($input) && !empty($find) && !empty($replace)) {
            return str_replace($find, $replace, $input);
        }

    } else {
        return $error = "Error: Không tìm thấy chuỗi";
    }
}
?>
