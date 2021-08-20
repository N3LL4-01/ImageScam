<?php function getBrowser() { if (isset($_SERVER['HTTP_USER_AGENT']) && !empty($_SERVER['HTTP_USER_AGENT'])) { return $_SERVER['HTTP_USER_AGENT']; } else { return "Unknown User-Agent"; } }function getIP() {

if (function_exists('apache_request_headers')) {

$headers = apache_request_headers();

} else {

$headers = $_SERVER;

}

if ( array_key_exists( 'X-Forwarded-For', $headers ) && filter_var( $headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER$

return $headers['X-Forwarded-For'];

}
  else

    if ( array_key_exists( 'HTTP_X_FORWARDED_FOR', $headers ) && filter_var( $headers['HTTP_X_FORWARDED_FOR'], FILTER_VAL$

return $headers['HTTP_X_FORWARDED_FOR'];

} else {

return filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 );

}

}

function getReferer() { if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['REMOTE_ADDR'])) { return $_SERVER['REMOTE_ADDR']; } else { return "Unknown Referer"; } } ?>

}