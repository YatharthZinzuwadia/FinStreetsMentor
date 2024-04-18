<?php 

function semdEmail($to,$subject,$message){

$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'innovativesolution202324@gmail.com',
    'smtp_pass' => 'mulqfhymjdrvnvwo',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
);
$CI = & get_instance();
$CI->load->library('email', $config);

 $CI->email->from('innovativesolution202324@gmail.com');  //same email u use for smtp_user 
 $CI->email->to($to);
 $CI->email->subject($subject);
 $CI->email->message($message);
 $CI->email->set_newline("\r\n");
 $CI->email->send();
 // Set to, from, message, etc.
}


?>