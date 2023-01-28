<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 
 * @property string $pic 
 * @property string $py 
 * @property string $jieshi 
 * @property string $chuchu 
 * @property string $pydm 
 * @property string $create_time 
 * @property int $difficulty 
 */
class Idiom extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected ?string $table = 'idiom';
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
    protected array $casts = ['id' => 'integer', 'difficulty' => 'integer'];
}