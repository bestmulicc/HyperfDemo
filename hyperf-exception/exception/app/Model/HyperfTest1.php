<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 
 * @property string $sex 
 * @property string $job 
 */
class HyperfTest1 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hyperf_test1';
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
    protected $casts = ['id' => 'integer'];
}