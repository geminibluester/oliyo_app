<?php
namespace App\Controller;

use Hyperf\Di\Annotation\Inject;
use App\Service\ShengXiaoService;
use Hyperf\HttpServer\Contract\RequestInterface;
use App\Request\ShengXiaoRequest;
class ShengXiaoController extends AbstractController{
    #[Inject]
    /**
     * @var $sx ShengXiaoService
     */
    private ShengXiaoService $sx;

    /**
     * 男女配对
     */
    public function find(ShengXiaoRequest $request) {
        $validated = $request->validated();
        $nan = $request->input('nan','鼠');
        $nv = $request->input('nv','鼠');
        return $this->response->success($this->sx->peidui($nan,$nv));
    }
}