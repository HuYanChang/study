<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/21
 * Time: 14:15
 */

namespace App\Libaray\Traits;


Trait httpRequest {
    public function http_curl($url,$data=null,$header=null){
        //初始化curl
        $ch = curl_init();
        //设置curl参数
        curl_setopt($ch,CURLOPT_URL,$url);
        if(!empty($header)){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if (!empty($data)) {
            //模拟post
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //采集
        $output = curl_exec($ch);
        //关闭
        curl_close($ch);
        if(curl_errno($ch)){
            var_dump(curl_error($ch));
        }
        return $output;
    }
}