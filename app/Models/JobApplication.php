<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $table = 'job_application';

    protected $fillable = [
        'company',
        'position',
        'location',
        'thumbnail',
        'description',
    ];

    public function applyJob()
    {
        return $this->hasMany(ApplyJob::class);
    }
}
