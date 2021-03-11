<?php

function config($val, $set = FALSE) {
    $Dev = &get_instance();
    if ($set) {
        $Dev->config->set_item($val, $set);
    }
    else
    return $Dev->config->item($val);
}

function slugify($string){
    
    $string = preg_replace('~[^\\pL\d]+~u', '-', $string);
    $string = trim($string, '-');
    $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
    $string = strtolower($string);
    $string = preg_replace('~[^-\w]+~', '', $string);

    return $string;

}

function encrypt($string) {
    $Dev = &get_instance();
    $Dev->load->library('crypter');

    return $Dev->crypter->encryptId($string);
}

function decrypt($encrypted) {
    $Dev = &get_instance();
    $Dev->load->library('crypter');
    
    return $Dev->crypter->decryptId($encrypted);
}

function encode_url($data) {
    $b64_uid = urlencode(base64_encode($data));
    return rtrim(strtr(base64_encode($data), '+/','-_'),'=');
}

function decode_url($data) {
    $full_part = base64_decode(urldecode($data));
    return base64_decode(strtr($data, '-_', '+/') . str_repeat('=', 3 - (3 + strlen($data)) % 4 ));
}

function admin_assets() {

    $url = base_url() . 'assets/admin/';

    return $url;

}

function site_assets() {

    $url = site_url() . 'assets/site/';

    return $url;
  
}

function slider_images() {
   
    $url = base_url() . 'assets/images/slider/';

    return $url;
}

function banner_images() {

	$url = base_url() . 'assets/images/banner/';

	return $url;
}

function bg_banner() {

	$url = base_url() . 'assets/images/bg-banner/';

	return $url;
}

function product_images() {

	$url = base_url() . 'assets/images/product/large-size/';

	return $url;
}

function shipping_icon() {

	$url = base_url() . 'assets/images/shipping-icon/';

	return $url;
}

function footer_logo() {

	$url = base_url() . 'assets/images/menu/logo/';

	return $url;
}

function session($val, $set = FALSE) {
    $Dev = &get_instance();
    if ($set) {
        $Dev->session->set_userdata($val, $set);
    }
    else
    return $Dev->session->userdata($val);
}


function mpesa_session($val, $set = FALSE) {
    $Dev = &get_instance();
    if ($set) {
        $Dev->session->set_userdata($val, $set);
    }
    else
    return $Dev->session->userdata($val);
}

function src() {

    $src = site_url() . 'assets/files/images/';
    return $src;
}

function statit_src() {

    $src = 'https://ebooks.imgix.net/';
    return $src;
}

function subjects($class_id){

    $db = &get_instance();
    return $db->db->where('class_id', $class_id)->get('subjects')->result();
    
}

function admin_subjects($class_id) {

    $db = &get_instance();

    $result = $db->db->where('id', $class_id)->get('classes')->result();

    return $result->subjects;
}


