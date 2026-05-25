<?php

namespace App\Http\Controllers;

use App\Models\Lesson;

class LessonController
{

    public function show(Lesson $lesson)
    {
        $title = $lesson->name;
        return view(
            'lessons.show',
            compact('lesson', 'title')
        );
    }
}
