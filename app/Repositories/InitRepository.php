<?php 

namespace App\Repositories;

// use House;
/**
* 
*/
class InitRepository// implements HouseRepositoryInterface
{
    
    public function response($data,$msg="success",$code='200'){
        return [
            'data'=>$data,
            'message'=>$msg,
            'code'=>$code
        ];
        die();
    }


}