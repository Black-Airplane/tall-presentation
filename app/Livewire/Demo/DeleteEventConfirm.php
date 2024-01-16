<?php

namespace App\Livewire\Demo;

use App\Models\Event;
use Livewire\Component;

class DeleteEventConfirm extends EventSearch
{
    public function deleteEvent(Event $event) //[tl! highlight]
    {
        $event->delete();

        session()->flash('message', 'Event deleted successfully.');
    }

    public function render()
    {
        return view('livewire.demo.delete-event-confirm',[
            'events' => Event::search($this->term)->get(),
            'selectedEvent' => $this->selectedEventId ? Event::find($this->selectedEventId) : null,
        ]);
    }
}
