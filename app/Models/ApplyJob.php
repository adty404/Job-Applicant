<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    use HasFactory;

    protected $table = 'apply_jobs';

    protected $fillable = [
        'job_application_id',
        'name',
        'phone',
        'whatsapp',
    ];

    public function jobApplication()
    {
        return $this->belongsTo(JobApplication::class);
    }
}
