<?php
require 'db.php';

$button = isset($_GET['button']) ? $_GET['button'] : '';

switch ($button) {
    case 'filter_character':
        $filterStudents = findNameContainCharacter($students);
        break;
    case 'css_highest' :
        $filterStudents = findCSSHighestScore($students);
        break;

    case 'order_by_php':
        $filterStudents = orderByPHPScoreAsc($students);
        break;
}

function findNameContainCharacter($students)
{
    $filterStudents = [];

    if (!empty($students)) {
        foreach ($students as $key => $value) {
            if (strpos($value['name'], 'a') !== false) {
                $filterStudents[] = $value;
            }
        }
    }

    return $filterStudents;
}

function findCSSHighestScore($students)
{
    if (!empty($students)) {
        $filterStudents = [];

        foreach ($students as $value) {
            if (strpos($value['class'], 'PHP') !== false) {
                $filterStudents[] = $value;
            }
        }

        $highestScore = $filterStudents[0];

        foreach ($filterStudents as $value) {
            if ($value['css_score'] > $highestScore['css_score']) {
                $highestScore = $value;
            }
        }

        return [$highestScore];
    }

    return false;
}

function orderByPHPScoreAsc($students)
{
    if (!empty($students)) {
        usort($students, function ($a, $b) {
            return $a['php_score'] <=> $b['php_score'];
        });

        return $students;
    }

    return false;
}
