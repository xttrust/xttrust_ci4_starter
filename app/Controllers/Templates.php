<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Templates extends BaseController {


    public static function test() {
        echo 'test';
    }

    public static function admin($data) {
        $data['theme_url'] = base_url('public/themes/admin/default');
        return view('templates/admin/admin_main', $data);
    }

    public static function public($data) {
        $data['theme_url'] = base_url('public/themes/front/bootstrap_5/');
        return view('templates/public/public_main', $data);
    }
}
