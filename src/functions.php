<?php


function task1($stringArray, $flag = false)
{
    foreach ($stringArray as $value) {
        echo "<p>$value </p>";
    }
    if ($flag) {
        return implode(",", $stringArray);
    }
}


function task2(string $x, array $arr)
{
    $resultString = implode($x, $arr);
    $result = array_shift($arr);

    foreach ($arr as $val) {
        switch ($x) {
            case "-":
                $result -= $val;
                break;
            case "+":
                $result += $val;
                break;
            case "*":
                $result *= $val;
                break;
            case "/":
                $result /= $val;
                break;
            default:
                echo "Чето не то";
                return null;
        }
    }

    echo "Результат: $resultString = $result" . "<br>";
}

function task3($x, $y)
{

    if ($x < 1 || $y < 1) {
        echo "Корректная ошибка <br>";
        return null;
    };
    $content = '<table>';
    for ($i = 1; $i <= $x; $i++) {
        $content .= '<tr>';

        for ($j = 1; $j <= $y; $j++) {
            $content .= '<td>' . $i * $j . '</td>';
        };
        $content .= '</tr>';
    };
    echo "$content" . '</table>';
}

function task4()
{
    echo date('d.m.Y H:i') . '<br>';
    $time = strtotime('24.02.2016');
    echo date('d.m.Y H:i:s', $time);
}

function task5()
{
    $text = 'Карл у Клары украл Кораллы';
    echo str_replace('К', '', $text) . '<br>';
    $text2 = 'Две бутылки лимонада';
    echo mbereg_replace('Две', 'Три', $text2);
}

function task6($text, $file)
{
    $fp = fopen($file, "w");
    fwrite($fp, $text);
    fclose($fp);
}

function fileOpen(string $file)
{
    $fileText = file_get_contents($file);
    echo $fileText;
}