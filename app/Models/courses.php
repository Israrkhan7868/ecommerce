<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;

    public static function getCourseTitles()
    {
        return self::pluck('title', 'id');
    }
    public static function getCourseFee($id)
    {
        $course = self::find($id);
        return $course ? $course->fee : $course;
    }
    public static function getFeeStatus($id)
    {
        $course = self::find($id);
        return $course ? $course->feestatus : $course;
    }

    public static function getcourse()
{
    return self::paginate(6); // Change 10 to the number of courses you want to display per page
}


    public function batches()
    {
        return $this->hasMany(batches::class, 'shortdescription', 'id');
    }

    public function getBatchesForCourse($courseId)
    {
        $course = courses::find($courseId);
        if ($course) {
            $batches = $course->batches;
            return $batches;
        }
        return null;
    }
}
