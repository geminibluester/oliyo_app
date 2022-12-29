<?php

namespace App\Service;

use App\Model\IdiomQuestion;
use App\Service\BaseService;

class IdiomService extends BaseService
{
    public function getAll()
    {
        return IdiomQuestion::query()->get();
    }
}
