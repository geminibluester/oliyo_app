<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $idoim_id 
 * @property int $nandu 
 * @property string $answer 
 * @property int $score 
 * @property int $played 
 * @property int $viewed 
 * @property string $create_time 
 * @property int $status 
 * @property string $title 
 * @property int $errored 
 */
class IdiomQuestion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected ?string $table = 'idiom_question';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected array $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected array $casts = ['id' => 'integer', 'idoim_id' => 'integer', 'nandu' => 'integer', 'score' => 'integer', 'played' => 'integer', 'viewed' => 'integer', 'status' => 'integer', 'errored' => 'integer'];
}