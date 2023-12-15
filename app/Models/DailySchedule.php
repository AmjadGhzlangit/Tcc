<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailySchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_name',
        'course_id', // Assuming your foreign key column name is 'course_id'
        'teacher_id', // Assuming your foreign key column name is 'teacher_id'
        'location',
        'start_time',
        'end_time',
    ];

    // Assuming you have relationships defined in the model
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
