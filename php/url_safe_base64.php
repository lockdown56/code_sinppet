<?php
/**
 * url safe base64
 */

function base64_encode_safe( $data ){
    return rtrim( strtr( base64_encode( $data ), '+/', '-_'), '=');
}
  
function base64_decode_safe( $data ){
    return base64_decode( strtr( $data, '-_', '+/') . str_repeat('=', 3 - ( 3 + strlen( $data )) % 4 ));
}