<?php

namespace App\Livewire;

use App\Models\Todo;
use Omnia\LivewireCalendar\LivewireCalendar;

class CalendarTodoFull extends LivewireCalendar
{
    public $showAddModal = false;

    public $modalDate;

    public $modalTitle;

    public $modalDescription;

    public function events(): \Illuminate\Support\Collection
    {
        return Todo::all()->map(function ($todo) {
            return [
                'id' => $todo->id,
                'title' => $todo->title,
                'description' => $todo->description,
                'start' => $todo->date,
                'end' => $todo->date,
                'color' => $todo->is_done ? '#28a745' : '#ffc107',
                'is_done' => $todo->is_done,
            ];
        });
    }

    // Drag & drop event untuk update tanggal todo
    public function onEventDrop($eventId, $newStart, $newEnd = null)
    {
        $todo = Todo::find($eventId);
        if ($todo) {
            $todo->date = $newStart;
            $todo->save();
            session()->flash('success', 'Tanggal todo berhasil diubah!');
        }
    }

    public function onEventClick($eventId)
    {
        $todo = Todo::find($eventId);
        if ($todo) {
            $todo->is_done = ! $todo->is_done;
            $todo->save();
        }
    }

    public function onDateClick($date)
    {
        $this->modalDate = $date;
        $this->modalTitle = '';
        $this->modalDescription = '';
        $this->showAddModal = true;
    }

    public function addTodoFromModal()
    {
        $this->validate([
            'modalTitle' => 'required|string|max:255',
            'modalDescription' => 'nullable|string',
        ]);
        Todo::create([
            'title' => $this->modalTitle,
            'description' => $this->modalDescription,
            'date' => $this->modalDate,
        ]);
        $this->showAddModal = false;
        $this->modalTitle = '';
        $this->modalDescription = '';
        $this->modalDate = '';
        session()->flash('success', 'Todo berhasil ditambahkan!');
    }
}
