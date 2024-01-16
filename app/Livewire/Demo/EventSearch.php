<?php

namespace App\Livewire\Demo;

use App\Models\Event;
use Livewire\Component;
use Livewire\Attributes\Url;

class EventSearch extends Component
{
    #[Url]
    public $term = '';

    public $selectedEventId;

    public function render()
    {
        return view('livewire.demo.event-search', [
            'events' => Event::search($this->term)->get(), // [tl! highlight]
            'selectedEvent' => $this->selectedEventId ? Event::find($this->selectedEventId) : null,
        ]);
    }
}
