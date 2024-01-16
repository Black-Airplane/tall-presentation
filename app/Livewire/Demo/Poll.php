<?php

namespace App\Livewire\Demo;

use App\Jobs\AddDummyEvents;
use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Poll extends EventSearch
{
    use WithPagination; // [tl! highlight]

    public function createDummyEvents()
    {
        AddDummyEvents::dispatch(); // [tl! highlight]
    }

    public function render()
    {
        return view('livewire.demo.poll', [
            'events' => Event::search($this->term)->paginate(6),
            'selectedEvent' => $this->selectedEventId ? Event::find($this->selectedEventId) : null,
        ]);
    }
}
