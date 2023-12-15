<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'courseable_id',
        'courseable_type',
        'year',
        'department',
        'semester',
    ];

    public function courseable()
    {
        return $this->morphTo();
    }
}
