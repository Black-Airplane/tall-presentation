<?php

namespace App\Livewire\Demo;

use Livewire\Component;

class Stream extends Component
{
    public $goodByeMessage = '';

    public function streamMessage()
    {
        $message = 'Thank you and Go Build Something TALL!';

        foreach (str_split($message) as $char) {
            $this->stream( // [tl! highlight]
                to: 'goodByeMessage',
                content: $char,
            );
            usleep(150000); // 1000ms delay between each character
        }

        $this->goodByeMessage = $message;
    }

    public function render()
    {
        return view('livewire.demo.stream');
    }
}
