<?php
    namespace app\api\controller;

    use think\Controller;

    class Index extends Controller
    {
        public function index(){

            if(true){
                echo 111;
            }

            return 'api/index/index';
        }

    }