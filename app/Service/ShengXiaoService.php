<?php
namespace App\Service;


use App\Model\Shengxiao;
class ShengXiaoService extends BaseService {
    public function peidui($nan,$nv) {
        $model = Shengxiao::query()
        ->select('nan_shengxiao','nv_shengxiao','zhishu','jieguo','pingshu')
        ->where(['nan_shengxiao'=>$nan,'nv_shengxiao'=>$nv])
        ->get();
        var_dump($model);
        return $model;
    }
}