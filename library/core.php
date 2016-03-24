<?php

function base_url() {
    return "127.0.0.1/soten2/";
}

function base_path() {
    return $_SERVER['DOCUMENT_ROOT'] . "/soften2";
    // return "http://10.199.66.227/Sec03_Group1/";
}

function salt_pass($pass) {
    return md5("itoffside.com" . $pass);
}
