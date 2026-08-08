<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
    protected $fillable = [
        'user_id',
        'headline',
        'bio',
        'location',
        'work_preference',
        'availability',
        'expected_salary',
        'linkedin_url',
        'github_url',
        'portfolio_url',
        'cv_path',
        'verification_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}