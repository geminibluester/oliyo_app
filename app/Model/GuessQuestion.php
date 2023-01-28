<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $question_id 
 * @property int $title_id 
 * @property string $project_title 
 * @property string $project_images 
 * @property int $image_type 
 * @property int $sorting 
 * @property int $status 
 * @property string $created 
 */
class GuessQuestion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected ?string $table = 'guess_question';
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
    protected array $casts = ['id' => 'integer', 'question_id' => 'integer', 'title_id' => 'integer', 'image_type' => 'integer', 'sorting' => 'integer', 'status' => 'integer'];
}