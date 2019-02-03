<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Order
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Order query()
 * @mixin \Eloquent
 */
class Order extends Model
{
    //
    public $table = 'order';

    public function cancal()
    {
        echo  '订单取消成功';
    }
}
