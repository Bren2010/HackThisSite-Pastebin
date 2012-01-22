<?php
header('Content-Type: image/png');

//Normally we'd initialize a session here, but this is just for the purpose of making a captcha so... here we go!

//Generate our $captcha_text variable
$captcha_text = "";
$charset_array = array();
$charset = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ23456789");

for ($i=1;$i<=8;$i++)
{
	$captcha_text .= $charset[rand(0, sizeof($charset) - 1)];
}

apc_store('captcha_' . $_SERVER['REMOTE_ADDR'], $captcha_text, 300);

//Generate a blank image for working on, 450 pixels (width) by 100 pixels (height)
$captcha = imagecreatetruecolor(450,100);

//Generate a blank image for the font overlay, 450 pixels (width) by 100 pixels (height)
$font_img = imagecreatetruecolor(450,100);

//Same thing, but we're going to make this one totally black
$black_img = imagecreatetruecolor(450,100);

//Allocate the color black into the variable $black
$black = imagecolorallocate($black_img, 0, 0, 0);

//Fill our image, doesn't really matter which x and y we choose
imagefill($black_img, 0, 0, $black);

//Get the list of images to set as the background (Images is the image folder)
$dir=opendir("./Images");
$image_array = array();
$ac = 0;
//Loop through all the files in the folder
while(($curr=readdir($dir)) != false) {
//If it's a file, add it to the image_array
if(is_file("./Images/" . $curr)) {
$image_array[$ac] = $curr;
$ac++;
}
}
closedir($dir);

//Get the list of fonts before we start writing down the characters
//Fonts is our folder containing all the true type fonts
$dir=opendir("./Fonts");
$font_array = array();
$ac = 0;

//Loop through all the files in the Fonts directory
while(($curr=readdir($dir)) != false) {
//Make sure it's a file, then add it to the array
if(is_file("./Fonts/" . $curr)) {
$font_array[$ac] = $curr;
$ac++;
}
}
closedir($dir);

$image_file = $image_file2 = $image_array[rand(0,count($image_array) - 1)];

while ($image_file2 == $image_file)
{
$image_file2 = $image_array[rand(0,count($image_array) - 1)];
}

//Load the image into the buffer, randomize the position, and copy it to the background
$bg_im = imagecreatefromjpeg("./Images/" . $image_file);
$width = imagesx($bg_im);
$height = imagesy($bg_im);
$src_x = rand(0, $width - 450);
$src_y = rand(0, $height - 100);
imagecopyresampled($captcha, $bg_im, 0, 0, $src_x, $src_y, 450, 100, 450, 100);

//Load the image into the buffer, randomize the position, and copy it to the font image
$font_im = imagecreatefromjpeg("./Images/" . $image_file2);
$width = imagesx($font_im);
$height = imagesy($font_im);
$src_x = rand(0, $width - 450);
$src_y = rand(0, $height - 100);
imagecopyresampled($font_img, $font_im, 0, 0, $src_x, $src_y, 450, 100, 450, 100);

//Get our white color ready
$white=imagecolorallocate($black_img, 255, 255, 255);

//It's 8 letters long, lets start by writing the 8 letters to the black buffer
for ($i = 1; $i <= 8; $i++)
{

//Choose coordinates for where each letter is going to be
//$x_pos = rand(($i - 1) * 50, $i * 40);
$x_pos = ($i - 1) * 54 + 20 + rand(-5,5);
$y_pos = rand(40, 80);

//We're going to use a random font, but first we're going to lay it in white on the black image
$font_file = "./Fonts/" . $font_array[rand(0,count($font_array) - 1)];
$font_size = rand(30, 36);

if ($font_file == './Fonts/courbd.ttf' || $font_file == './Fonts/courbi.ttf' || $font_file == './Fonts/comic.ttf' ||  $font_file == './Fonts/ERASDUST.TTF')
$font_size = rand(34, 38);

imagettftext($black_img, rand(32, 38), rand(-25, 25), $x_pos, $y_pos, $white, $font_file, substr($captcha_text, $i - 1, 1));

}

//This blur isn't exactly my code since I had to lookup the gaussian filter (don't know it by heart)
$blur = array(array(1.0, 2.0, 1.0), array(2.0, 4.0, 2.0), array(1.0, 2.0, 1.0));
imageconvolution($black_img, $blur, 16, 0);

//Now that we've got all the text set on a black layer, we need to loop through and find the ones that are white
for ($x=0; $x<450; $x++)
{

if ($x % 10 == 0)
$random_color = imagecolorallocate($black_img, rand(0,255), rand(0,255), rand(0,255));

        for ($y=0; $y<100; $y++)
        {
		//Get the color at the specific point we're on
                $color = imagecolorat($black_img, $x, $y);

		//This is a simple math conversion from the number/byte format that colors are retrieved
                $intensity = ($color >> 16) & 0xFF;


		//$pixel_color = imagecolorallocate($captcha, 255, 0, 0);
		//$pixel_color = imagecolorat($font_img, $x, $y);

		$original = imagecolorat($captcha, $x, $y);

		$r = ($original >> 16) & 0xFF;
		$g = ($original >> 8) & 0xFF;
		$b = $original & 0xFF;

		//$pixel_color = imagecolorallocate($captcha, $r - 15, $g - 15, $b - 15);

		if ($x < 440 && $y < 96)
		{
		$new = imagecolorat($captcha, $x + 10, $y + 4);
		} else {
		$new = imagecolorat($captcha, $x + (450 - $x) - 1, $y + (100 - $y) - 1);
		}

		//$new = imagecolorat($font_img, $x, $y);

		$r2 = (($new >> 16) & 0xFF);
		$g2 = (($new >> 8) & 0xFF);
		$b2 = ($new & 0xFF);


		$r2 = (($r2 - 127) * 1.3);

		if ($r2 < 0)
		$r2 -= 20;
		else
		$r2 += 20;


		$g2 = (($g2 - 127) * 1.3);

		if ($g2 < 0)
		$g2 -= 20;
		else
		$g2 += 20;


		$b2 = (($b2 - 127) * 1.3);

		if ($b2 < 0)
		$b2 -= 20;
		else
		$b2 += 20;

		$r2 += 127;
		$g2 += 127;
		$b2 += 127;


		if ($r2 > 255)
		$r2 = 255;
		if ($g2 > 255)
		$g2 = 255;
		if ($b2 > 255)
		$b2 = 255;

		if ($r2 < 0)
		$r2 = 0;
		if ($g2 < 0)
		$g2 = 0;
		if ($b2 < 0)
		$b2 = 0;

		$r2 = -$r2 + 255;
		$g2 = -$g2 + 255;
		$b2 = -$b2 + 255;

		$total_val = (abs($r2 - $r) + abs($g2 - $g) + abs($b2 - $b)) / 3;
		$total_val = (-$total_val + 255) + 20;
		

		//$intensity = (($intensity * ($total_val / 255)) + $intensity + $intensity) / 3;

		//if ($intensity > 1 && $intensity < 240)
		//{
			//if (rand(0,1) == 1)
			//$pixel_color = imagecolorallocate($captcha, (($r * (-$intensity + 255) / 255) + ($r2 * $intensity / 255) + 255) / 2, (($g * (-$intensity + 255) / 255) + ($g2 * $intensity / 255) + 255) / 2, (($b * (-$intensity + 255) / 255) + ($b2 * $intensity / 255) + 255) / 2);
			//else
			//$pixel_color = imagecolorallocate($captcha, (($r * (-$intensity + 255) / 255) + ($r2 * $intensity / 255) + 255) / 2, (($g * (-$intensity + 255) / 255) + ($g2 * $intensity / 255) + 255) / 2, (($b * (-$intensity + 255) / 255) + ($b2 * $intensity / 255) + 255) / 2);
		//} else {
		$pixel_color = imagecolorallocate($captcha, ($r * (-$intensity + 255) / 255) + ($r2 * $intensity / 255), ($g * (-$intensity + 255) / 255) + ($g2 * $intensity / 255), ($b * (-$intensity + 255) / 255) + ($b2 * $intensity / 255));
		//}

		

		imagesetpixel($captcha, $x, $y, $pixel_color);

               
        }
}

$rand = rand(12, 20);
for ($i = 1; $i <= $rand; $i++)
{
$pixel_color = imagecolorallocate($captcha, rand(0,255), rand(0,255), rand(0,255));

	switch (rand(3,5)) {
	case 3:
		imageline($captcha, rand(0, 450), rand(0, 5), rand(0, 450), rand(95, 100), $pixel_color);
		break;
	case 4:
		imageline($captcha, rand(0, 5), rand(0, 100), rand(445, 450), rand(0, 100), $pixel_color);
		break;
	case 5:
		imagerectangle($captcha, rand(0, 440), rand(0, 90), rand(0, 440), rand(0, 90), $pixel_color);
		break;
	}
}




//Output our data to a png!
imagepng($captcha);

?>
