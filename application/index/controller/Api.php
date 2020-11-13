<?php

namespace app\index\controller;
use think\Db;
use \think\Request;

class Api
{
    //我的ddns
    public function add(){
        $ip = Request::instance()->param('ip');
        if( !$ip ){
            echo "nodata";
            return;
        }
        $data = array("ip"=>$ip,"time"=>date("Y-m-d H:i:s",time()));
        Db::table('ip_list')->insert($data);
        echo "success";
        return;
    }

    //查看最新ip
    public function lastip(){
        $ipdata = Db::table('ip_list')->order("id desc")->find();
        echo $ipdata["ip"];
    }

}
