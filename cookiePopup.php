<?php
setcookie('cookiesubmit', 'true', time() + 60*60*24, '/');
header('Location: /');