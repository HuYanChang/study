<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/13
 * Time: 18:42
 */

use Illuminate\Database\Eloquent\Model;
class BaseModel extends Model{
    function getNormalSql($querySql, $queryData = []) {
        $data = DB::select($querySql, $queryData);
        $data = array_map('get_object_vars', $data);
        return $data;
    }

    /**
     * $fields有值时为post请求
     * @param string $url
     * @param  array $fields
     * @return string
     */
    function httpRequest($url, $fields = [])
    {
        //使用curl发送post请求
        $ch = curl_init();
        //设置请求地址
        curl_setopt($ch, CURLOPT_URL, $url);
        //数据返回后不直接显示
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //禁止证书校验
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        if ($fields) {
            //设置过期时间
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            //开启post
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        $data = '';
        if (curl_exec($ch)) {
            //发送成功，获取数据
            $data = curl_multi_getcontent($ch);
        }
        curl_close($ch);
        return $data;
    }
}