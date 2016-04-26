				<?php

#откуда будем парсить информацию:
$content=file_get_contents('http://www.gismeteo.ua/weather-zaporizhzhya-5093/');

#начало забираемого контента:
$pos=strpos($content,'<tbody id="tbwdaily1">');

#Отрезаем все, что идет до нужной нам позиции:
$content=substr($content,$pos);

#Tаким же образом находим позицию конечной строки:
$pos=strpos($content, '	</tbody>');

#Отрезаем ненужное:
$content=substr($content,0,$pos);

#Если встречается код, который нам ненужен, вырезаем его:
//$content=str_replace('Код, который нужно вырезать.','', $content);

#Выводим спарсенный текст:
echo "<table> <tbody>".$content."</tbody> </table>";
?>