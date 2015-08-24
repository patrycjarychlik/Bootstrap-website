<?php
$url = $_GET ['url'];

if (isset ( $_GET ['pwidth'] )) {
	$pwidth = $_GET ['pwidth'];
}else{
	$pwidth = 140;
}

if (isset ( $_GET ['pheight'] )) {
	$pheight = $_GET ['pheight'];
}else{
	$pheight = 140;
}
   
   
   header ("Content-type: image/jpeg"); # We will create an *.jpg
    $pic = ImageCreateFromJPEG($url) or die ("Image not found!");
    if ($pic) {
	  if(substr($url,strlen($url)-5,1)=="r") $pic = imagerotate($pic, 270, 0);
        $width = imagesx($pic);
        $height = imagesy($pic);
        $twidth = 100;
        if($pwidth>0)
         $twidth=$pwidth;
		$theight = $twidth * $height / $width; # calculate height

        if($pheight>0)
		{
         $theight=$pheight;
		 $twidth = $theight * $width / $height;
         //$theight = $twidth * $height / $width; # calculate height
		}
		
		 
        $thumb = ImageCreatetruecolor ($twidth, $theight) or
    die ("Can't create Image!");
ImageCopyResampled($thumb, $pic, 0, 0, 0, 0,
    $twidth, $theight, $width, $height); # resize image into thumb ImageCopyResampled ImageCopyResized
//ImageJPEG($thumb,"",75); # Thumbnail as JPEG
    
  	//imagegammacorrect ($thumb, 1.0, 1.4 ) ;

    ImageJPEG($thumb,null,95); # Thumbnail as JPEG
    }
?>