<?php
if(isset($_COOKIE['root'])){
	print_r($_COOKIE);
echo "<div>I can tell you've been here before</div>";
} else {
setcookie('root', true, 60+ time());// hold for a min
echo "<div>Its your first time being here</div>";
}
?>