<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['view_file'] = 'home/index';
        $data['page_title'] = 'Homepage';
        $data['page_description'] = 'Description goes here for homepage';
        
        return $this->templates::public($data);
    }


    public function category($categoryName, $product) 
    {
        echo $categoryName . ' - ' . $product;
    }

}
