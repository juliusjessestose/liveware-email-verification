<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class Delete extends Component
{
    public $studentId;
    public function getStudentProperty() {
        return Student::select('id', 'name', 'contact_number', 'department', 'year_level')
            ->find($this->studentId);
    }

    public function delete() {
        $this->student->delete();

        return redirect('/dashboard')->with('message', $this->student->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.students.delete');
    }
}
