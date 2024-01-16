<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use App\Models\Event;

class CreateEvent extends Component
{
    public $title;
    public $speaker;
    public $description;
    public $event_date;

    protected $rules = [
        'title' => 'required|min:3', //[tl! highlight]
        'speaker' => 'required|min:3', //[tl! highlight]
        'description' => 'required|min:10', //[tl! highlight]
        'event_date' => 'required|date', //[tl! highlight]
    ];

    public function updatedDescription() //[tl! highlight]
    {
        $this->validateOnly('description');
    }

    public function submit() //[tl! highlight]
    {
        $validatedData = $this->validate();

        // Create a new event with the validated data
        Event::create($validatedData);

        // Reset the form fields after submission
        $this->reset();

        session()->flash('message', 'Event created successfully.');
    }

    public function render()
    {
        return view('livewire.demo.create-event');
    }
}
