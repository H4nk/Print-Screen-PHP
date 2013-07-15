<?php
if(isset($_POST['submit'])){
$ss = imagegrabscreen();
$setwaktu = date('l jS \of F Y h-i-s A');
imagepng($ss, "$setwaktu.png");
imagedestroy($ss);
}
?>
<form action"#" method="post" id="form1">
<button type="submit" name="submit" form="form1" value="Submit">Print Screen</button>
</form>