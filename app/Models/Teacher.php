<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_number',
        'teacher_name',
        'phone',
        'email',
        'user_id',
        'major',
        'contract_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
