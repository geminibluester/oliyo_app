<?php

declare(strict_types=1);

namespace App\Service;

use Hyperf\DbConnection\Db;

class GameService
{

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getNormalList()
    {
        $list = Db::table("idiom_question")
            ->select(["idiom_question.id", "nandu", "idiom_question.answer", "idiom.pic"])
            ->leftJoin('idiom', 'idiom_question.idoim_id', '=', 'idiom.id')
            // ->inRandomOrder()
            ->paginate(5);
        // ->toArray();
        return $list;
    }
    /**
     * 
     */
    public function getAll($limit = 50)
    {
    }

    public function checkByAnswer($question_id, $answer)
    {
    }
}
