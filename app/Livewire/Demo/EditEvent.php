<?php

namespace App\Livewire\Demo;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditEvent extends EventSearch
{
    use WithFileUploads; //[tl! highlight]

    public $title;
    public $speaker;
    public $description;
    public $event_date;
    public $slides;

    protected $rules = [
        'title' => 'required|min:3',
        'speaker' => 'required|min:3',
        'description' => 'required|min:10',
        'event_date' => 'required|date',
        'slides' => 'required|file|mimes:pptx', // [tl! highlight]
    ];

    public function updatedSelectedEventId()
    {
        // Get the event from the database
        $event = Event::find($this->selectedEventId);

        // Set the form fields with the event data
        $this->title = $event->title;
        $this->speaker = $event->speaker;
        $this->description = $event->description;
        $this->event_date = $event->event_date->format('Y-m-d');
        $this->slides = $event->slides;
    }

    public function submit()
    {
        $validatedData = $this->validate();

        // If a new slides file is uploaded, store it and update the slides field
        if ($this->slides) {
            $validatedData['slides'] = $this->slides->store('slides'); // [tl! highlight]
        }

        // Update the event with the validated data
        $event = Event::find($this->selectedEventId);
        $event->update($validatedData);


        session()->flash('message', 'Updated '. $event->speaker .'\'s event successfully.'); // [tl! highlight]
    }

    public function render()
    {
    return view('livewire.demo.edit-event', [
            'events' => Event::search($this->term)->get(),
            'selectedEvent' => $this->selectedEventId ? Event::find($this->selectedEventId) : null,
        ]);
    }
}
