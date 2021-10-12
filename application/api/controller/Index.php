<?php
    namespace app\api\controller;

    use think\Controller;

    class Index extends Controller
    {
        public function index(){
            echo 'api/index/index';
        }

        public function think(){
            echo 'think';
        }

    }