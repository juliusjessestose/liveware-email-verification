<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class Index extends Component
{
    public function loadStudents() {
        $students = Student::orderBy('name')->get();

        return compact('students');
    }

    public function render()
    {
        return view('livewire.students.index', $this->loadStudents());
    }
}
