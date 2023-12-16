<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'teacher_id',
        'year',
        'department',
        'semester',
    ];

   public function teacher(){
    return $this->belongsTo(Teacher::class);
   }

   public function grades()
   {
    return $this->hasMany(Grades::class);
   }
}
