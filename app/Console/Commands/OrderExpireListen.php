<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Model\Order;
use Illuminate\Support\Facades\Redis;

class OrderExpireListen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '监听未付款30分钟后取消';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $cachedb = config('database.redis.cache.database', 0);
        $pattern = '__keyevent@'.$cachedb.'__:expired';
        Redis::subscribe($pattern, function ($channel){
            $keyType = str_before($channel, ':');
            switch ($keyType){
                case 'ORDER_CONFIRM':
                    $orderId = str_after($channel, ':');
                    $order = Order::find($orderId);
                    if($order){
                        $order->cancal(); //取消操作
                    }
                    break;
                case 'ORDER_OTHERVENT':
                    break;
                default:
                    break;
            }
        });
    }
}
