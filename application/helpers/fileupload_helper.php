<?php

function fileUpload($fileName, $upload_path, $redirect_on, $post_field_name, $allowed_types = "*") {
    $CI = & get_instance();
    $upload_path ='assets/user_profile';
    $config['upload_path'] = $upload_path;
    $config['allowed_types'] = $allowed_types;
           $config['overwrite'] = true;
           $config['encrypt_name'] = true;
           $config['max_size'] = 1024 * 10;
//            $config['max_width'] = 1024;
//            $config['max_height'] = 768;
           $config['file_name'] = $_FILES['profile']['name'];

    $CI->load->library('upload', $config);
    if (!$CI->upload->do_upload($fileName)) {
        $error = array('error' => $CI->upload->display_errors());
        echo"<pre>";
        print_r($error);
        echo "</pre>";
        $CI->session->set_flashdata('error', $error['error']);
        // redirect($redirect_on);
    }
    $data = array('upload_data' => $CI->upload->data());
    $_POST[$post_field_name] = $data['upload_data']['file_name'];
}
