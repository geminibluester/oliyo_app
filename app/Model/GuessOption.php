<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $project_id 
 * @property string $option_title 
 * @property string $option_images 
 * @property int $score 
 * @property int $jump 
 * @property int $correct 
 * @property int $status 
 * @property string $created 
 * @property int $option_id 
 */
class GuessOption extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guess_options';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'project_id' => 'integer', 'score' => 'integer', 'jump' => 'integer', 'correct' => 'integer', 'status' => 'integer', 'option_id' => 'integer'];
}