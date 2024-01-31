<?php

use Illuminate\Support\Facades\DB;

function get_max_stared_courses($rated_courses)
{
  $max_stared = 0;
  $max_stared_courses = [];

  foreach ($rated_courses as $rated_course) {
    $stared = DB::table('ratings')
      ->where('course_id', $rated_course->course_id)
      ->sum('star_rated') / DB::table('ratings')
        ->where('course_id', $rated_course->course_id)
        ->count();

    if ($stared > $max_stared) {
      $max_stared = $stared;
      $max_stared_courses = [$rated_course];
    } else if ($stared == $max_stared) {
      $max_stared_courses[] = $rated_course;
    }
  }

  return $max_stared_courses;
}

$rated_courses = DB::table('ratings')->get();

$max_stared_courses = get_max_stared_courses($rated_courses);


