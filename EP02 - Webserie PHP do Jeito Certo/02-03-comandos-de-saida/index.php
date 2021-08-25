<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<p>Olá Mundo!", " ", "<span class='tag'>#boraprogramar!</span>", "</p>";

$hello = "Olá Mundo!";
$code = "<spam class='tag'>#boraprogramar!</spam></p>";
;

echo "<p>$hello</p>";
echo '<p>$hello</p>';
echo "<p>$code</p>";

$day = "dia";
echo "<p> Falta 1 $day para o evento!</p>";
echo "<p> Faltam 2 {$day}s para o evento!</p>";

echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";

echo "<h3>" . $hello . " " . $code . "</h3>";
?>

<h4><?= $hello; ?> <?= $code; ?></h4>

<?php

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print $hello;
print $code;

print "<h3>{$hello}{$code}</h3>";


/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$array = [
    "company" => "UpInside",
    "course" => "PSFPHP",
    "class" => "Comandos de Saída"
];

print_r($array);
echo "<pre>", print_r($array, true), "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello}{$code}";
$subtitle = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut nulla et metus egestas aliquam sed in tortor.
 Donec non ultrices ante, sed lobortis ante. Nam hendrerit, ligula vel ullamcorper auctor, urna augue scelerisque enim, in 
 elementum neque quam at nunc. Cras scelerisque cursus pretium. Orci varius natoque penatibus et magnis dis parturient montes, 
 nascetur ridiculus mus. Sed ut massa non lorem tincidunt sollicitudin. Sed ante nisi, feugiat et neque nec, ornare scelerisque metus. 
 Etiam eget erat ornare, tincidunt justo in, finibus felis. Curabitur ut elit aliquam, tincidunt libero nec, dignissim libero. 
 Nulla suscipit eleifend sapien sit amet mattis. Morbi efficitur dolor efficitur augue laoreet ultricies. Mauris rhoncus felis 
 a lacus dictum, nec eleifend urna finibus. Donec eu tempor dui. In tempus consectetur ultrices. Donec sit amet massa sit amet 
 mauris egestas elementum sed sed erat. Sed a diam mi.";

 printf($article, $title, $subtitle);
 echo sprintf($article, $title, $subtitle);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, aula <b>%s</b></p></article>";
vprintf($company, $array);
echo vsprintf($company, $array);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump($array);
echo "<pre>", var_dump($array), "</pre>";
var_dump($array);
var_dump(
    $array,
    $hello,
    $company
);
