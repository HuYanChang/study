<?php
/**
 * Created by PhpStorm.
 * User: hyc
 * Date: 2018/5/21
 * Time: 12:00
 */

namespace App\Http\Controllers\Index;


use App\Http\Controllers\Controller;
use App\Libaray\Traits\httpRequest;
use Illuminate\Http\Request;

class IndexController extends Controller{

    use httpRequest;
    private $key = 'ca50c84a892a4922787b677617009bda';
    //获取小程序使用者的地理位置
    public function getLocation(Request $request) {
        $lng = $request->get('lng'); //经度
        $lat = $request->get('lat'); //纬度
        $url = "http://restapi.amap.com/v3/geocode/regeo?key=$this->key&location=$lng,$lat";
        $res = $this->http_curl($url);
        $res = json_decode($res, true);
        $location = $res['regeocode']['formatted_address'];
        return $this->success(200,$location);
    }
}