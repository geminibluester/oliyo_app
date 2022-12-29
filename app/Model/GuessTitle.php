<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $title_id 
 * @property string $title_img 
 * @property string $title 
 * @property string $description 
 * @property string $total_num 
 * @property int $auth_type 
 * @property int $category 
 * @property string $created 
 * @property int $class_id 
 * @property int $is_show 
 */
class GuessTitle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guess_title';
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
    protected $casts = ['id' => 'integer', 'title_id' => 'integer', 'auth_type' => 'integer', 'category' => 'integer', 'class_id' => 'integer', 'is_show' => 'integer'];
}