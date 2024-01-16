<?php

namespace App\Livewire\Demo;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class SearchEventDownload extends EventSearch
{
    public function download()
    {
        $this->validate([
            'selectedEventId' => 'required',
        ]);

        $event = Event::find($this->selectedEventId);

        return Storage::download($event->slides); //[tl! highlight]
    }

    public function render()
    {
        return view('livewire.demo.search-event-download', [
            'events' => Event::search($this->term)->get(),
            'selectedEvent' => $this->selectedEventId ? Event::find($this->selectedEventId) : null,
        ]);
    }
}
