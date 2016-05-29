<?php

$CI=& get_instance();

//Encryption & Decryption Key
define("EDKEY", $CI->config->item('encryption_key'));

function encode($value)
{ 
    if(!$value){return false;}
    $text = $value;
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, EDKEY, $text, MCRYPT_MODE_ECB, $iv);

    $data = base64_encode($crypttext);
    $data = str_replace(array('+','/','='),array('-','_',''),$data);

    return trim($data); 
}

function decode($value)
{
    if(!$value){return false;}

    $data = str_replace(array('-','_'),array('+','/'),$value);
    $mod4 = strlen($data) % 4;
    if ($mod4) {
        $data .= substr('====', $mod4);
    }
    $crypttext = base64_decode($data);

    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, EDKEY, $crypttext, MCRYPT_MODE_ECB, $iv);
    return trim($decrypttext);
}

function pEncry($val)
{
    return crypt($val, EDKEY).sha1($val);
}

?>