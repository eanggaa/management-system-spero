<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'client',
        'end_user',
        'project_name',
        'no_penawaran',
        'jenis_pekerjaan',
        'progamming_language',
        'project_entry_date',
        'project_start_date',
        'project_completion_date',
        'status_aktif',
    ];
}
