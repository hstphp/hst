<?php

namespace App\Services\Foundation\Models\Aps;

use Illuminate\Database\Eloquent\Model;

/**
 * voip用户数据表
 *
 * Class Aps_UserModel
 * @package App\Services\Foundation\Models
 */
class Aps_UserModel extends Model
{
    /**
     * 数据表名
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * 数据表 - 主键字段名
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * 表明模型是否应该被打上时间戳
     *
     * 针对 created_at updated_at 字段
     *
     * @var bool
     */
    public $timestamps = false;



}
