<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useractivityhistory extends Model
{
    use HasFactory;
    protected $table = 'users_activity_history';
    protected $primaryKey = 'id';

    protected $fillable = ['activities_Id',
                            'activities_by',
                            'activities_dt',
                            'ip',
                            'table_name',
                            'sys_link_cat_id',
                            'sys_link_group_id',
                        ];
}
