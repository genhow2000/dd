<?php
namespace App\Services;
use App\Models\Getlog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dd extends Controller
{
    /**
     * 2020 07 21 Aden自行製作專用function
     *
     * @param  int  $id
     * @return Response
     */
    #顯示log&save
    public static function dd($log,$log1=null,$log2=null) {
        dd($log);
        $getlog = new Getlog;
        $getlog->log = json_encode($log, JSON_UNESCAPED_UNICODE);
        $getlog->log1 =!empty($log1)?$log1:null;
        $getlog->log2 =!empty($log2)?$log2:null;
        $getlog->save();
        if(empty($log1) && empty($log2)){
            return(dd($log));
        }else{
            return (dd($log,$log1,$log2));
        }
    }
    public static function log($log,$log1=null,$log2=null) {
        $getlog = new Getlog;
        $getlog->log = json_encode($log, JSON_UNESCAPED_UNICODE);
        $getlog->log1 =!empty($log1)?$log1:null;
        $getlog->log2 =!empty($log2)?$log2:null;
        $getlog->save();
    }
    /*
    public function log2($data) { dd($data); }

    // Invoking that non-static method.
    */

}
