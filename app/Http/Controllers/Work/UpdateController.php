<?php
/**
 * Created by PhpStorm.
 * User: jianjungki
 * Date: 2018/4/1
 * Time: 12:24
 */


namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use App\Model\Worker;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function add(Request $request){

        for ($i = 0; $i < 50; $i++){
            $worker = new Worker;

            $worker->phone = "137529323".sprintf('%02s', $i);;
            $worker->real_name = "工人".$i;
            $worker->username = "worker".$i;
            $worker->password = "123456";
            $worker->descript = "这是一个新的工人，工人的技能为，水电，木工，机电，机床，计算机，各种会计知识，以及生活家居用途的东西";
            $worker->save();
        }
    }
}