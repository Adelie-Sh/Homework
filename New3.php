<?php
$width = 400;               //Ширина изображения
$height = 150;               //Высота изображения
$font_size = 50;            //Размер шрифта
$let_amount = 0;            //Количество символов, которые нужно набрать
$fon_let_amount = 5;       //Количество символов на фоне
$font = "arial.ttf";   //Путь к шрифту

$texts = 'ABCDEFGKIJKLMNOPQRSTUVWXYZ'; //набор символов    
$colors = array("$red", "$green ", "$blue"); //цвета

$src = imagecreatetruecolor( $width, $height);    //Создание нового полноцветного изображения            
$fon = imagecolorallocate($src, $red , $green , $blue); // Создание цвета для изображения
imagefill($src,0,0, $fon); //заливаем изображение фоном

for($i=2; $i<$fon_let_amount;$i++)   //добавляем на фон буковки
{
	$color = imagecolorallocatealpha($src,rand(0,255),rand(0,255),rand(0,255),100); //случайный цвет
	$text .= $texts[rand(0,strlen($texts)-1)]; //случайный символ
	$size = rand($font_size-2,$font_size+2);  //случайный размер   

	imagettftext($src, $size, rand(0,10), rand($width*0.1,$width-($width*0.1)), rand($height*0.1, $height), $color, $font, $text); //Рисование текста на изображении шрифтом
}
 
  session_start();
  $_SESSION['text'] = $text;
 header ("Content-type: image/gif"); //выводим готовую картинку
imagegif($src);
?>
