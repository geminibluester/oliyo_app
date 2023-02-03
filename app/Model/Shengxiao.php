<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * @property int $id 
 * @property string $nan_shengxiao 
 * @property string $nv_shengxiao 
 * @property int $zhishu 
 * @property string $jieguo 
 * @property string $pingshu 
 * @property string $created 
 */
class Shengxiao extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'shengxiao';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'zhishu' => 'integer'];
}
