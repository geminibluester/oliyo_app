<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use Hyperf\Di\Annotation\Inject;
use App\Model\IdiomQuestion;
use App\Service\GameService;

class IndexController extends AbstractController
{
    /**
     * @Inject()
     * 
     * @var GameService
     */
    private GameService $game;
    public function index()
    {
        $qustions = $this->game->getNormalList();
        return $this->response->success($qustions);
    }
}
