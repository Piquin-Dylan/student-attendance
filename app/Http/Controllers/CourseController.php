<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use function auth;
use function compact;
use function view;

class CourseController extends Controller
{
    public function index()
    {
        $title = ucfirst(__('headings.my-courses'));
        $user = auth()->user()->load([
            'courses' => function ($query) {
                $query->withCount('students');
            }]);

        return view(
            'courses.index',
            compact('user', 'title')
        );
    }

    public function show(Course $course, Lesson $lesson)
    {
        $title = $course->name;
        return view(
            'courses.show',
            compact('course', 'lesson', 'title')
        );
    }
}
