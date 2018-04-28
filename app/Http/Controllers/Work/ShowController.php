<?php
/**
 * Created by PhpStorm.
 * User: jianjungki
 * Date: 2018/3/30
 * Time: 18:38
 */

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use App\Model\Worker;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Request $request){
        $limit = $request->input("limit", 10);
        $workers = Worker::paginate($limit);
        return [
            "code" => 0,
            "data" =>$workers->toArray()['data']
        ];
    }

    public function detail(Request $request, $workId){

        $worker = Worker::where("id", $workId)->first();
        return [
            "code" => 0,
            "data" =>$worker
        ];
    }
}