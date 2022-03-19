<?php
if(isset($_COOKIE['myCookies'])) {
    setcookie('myCookies',' ',time()-3600);
}
?>
<p>Cookies is cleaned</p>
<a href="/lesson15.php">Go back</a>