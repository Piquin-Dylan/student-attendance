@props(['course' => null])
<x-layout-app>
    <main class="container section-gap">
        <x-main-header :title="$course?->name ?? 'cours 1'"/>
        @php
            $lessons = $course->lessons
        @endphp
        @isset($lessons)
            <x-lessons.list :lessons="$lessons"/>
        @else
            <p>Aucune leçon prévue.</p>
        @endisset
    </main>
</x-layout-app>
