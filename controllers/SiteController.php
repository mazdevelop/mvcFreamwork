<?php
namespace app\controllers;

use app\core\Request;
use app\core\Controller;



class SiteController extends Controller
{
    public function home()
    {
        $params =[
            'name'=>'mohsen'
        ];
        return $this->render('home',$params);
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        print_r($body);
        exit;
        return 'handleContact';
    }

    public function contact()
    {
        return $this->render('contact');
    }
}