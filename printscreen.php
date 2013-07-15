<?php
$ss = imagegrabscreen();
$setwaktu = date('l jS \of F Y h-i-s A');
imagepng($ss, "$setwaktu.png");
imagedestroy($ss);
//visit hhtp://h4nk.blogspot.com
?>