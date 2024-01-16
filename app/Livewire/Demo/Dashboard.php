<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use App\Livewire\Demo\Poll;
use App\Livewire\Demo\EditEvent;
use App\Livewire\Demo\Slides\Tall;
use App\Livewire\Demo\Slides\Intro;
use App\Livewire\Demo\Slides\Alpine;
use App\Livewire\Demo\Slides\Laravel;
use App\Livewire\Demo\Slides\Livewire;
use App\Livewire\Demo\Slides\Morph;
use App\Livewire\Demo\Slides\PeopleAreTalking;
use App\Livewire\Demo\Slides\Tailwind;
use App\Livewire\Demo\Slides\TheEnd;

class Dashboard extends Component
{
    public $currentComponent = 0;

    public $showCode = false;

    public $slides = [
        [
            'component' => Intro::class,
            'shouldShowCode' => false,
        ],
        [
            'component' => Tall::class,
            'shouldShowCode' => false,
        ],
        [
            'component' => Tailwind::class,
            'shouldShowCode' => false,
        ],
        [
            'component' => Alpine::class,
            'shouldShowCode' => false,
        ],
        [
            'component' => Laravel::class,
            'shouldShowCode' => false,
        ],
        [
            'component' => Livewire::class,
            'shouldShowCode' => false,
        ],
        [
            'component' => PeopleAreTalking::class,
            'shouldShowCode' => false,
        ],
        [
            'component' => EventSearch::class,
            'name' => 'Event Search with wire:model.live',
            'shouldShowCode' => true,
        ],
        [
            'component' => Morph::class,
            'name' => 'Morph Demo',
            'shouldShowCode' => false,
        ],
        [
            'component' => CreateEvent::class,
            'name' => 'Event Creation - Show Validation Errors',
            'shouldShowCode' => true,
        ],
        [
            'component' => DeleteEventConfirm::class,
            'name' => 'Event Deletion - Show wire:confirm',
            'shouldShowCode' => true,
        ],
        [
            'component' => EditEvent::class,
            'name' => 'Event Editing - Uploads',
            'shouldShowCode' => true,
        ],
        [
            'component' => SearchEventDownload::class,
            'name' => 'Download - Show wire:download',
            'shouldShowCode' => true,
        ],
        [
            'component' => Poll::class,
            'name' => 'Polling - Show wire:poll',
            'shouldShowCode' => true,
        ],
        [
            'component' => WireNavigateLinks::class,
            'name' => 'Navigation - Show wire:navigate',
            'shouldShowCode' => true,
        ],
        [
            'component' => Offline::class,
            'name' => 'Offline - Show wire:offline',
            'shouldShowCode' => true,
        ],
        [
            'component' => Stream::class,
            'name' => 'Conclusion - Show wire:stream',
            'shouldShowCode' => true,
        ],
        [
            'component' => TheEnd::class,
            'shouldShowCode' => false,
        ],
    ];

    public function mount()
    {
        $this->currentComponent = session('currentComponent', 0);
        $this->showCode = session('showCode', false);
    }

    public function getSlideName()
    {
        return $this->slides[$this->currentComponent]['name'] ?? null;
    }

    public function getCurrentComponent()
    {
        return $this->slides[$this->currentComponent]['component'];
    }

    public function nextComponent()
    {
        if ($this->slides[$this->currentComponent]['shouldShowCode'] && !$this->showCode) {
            $this->showCode = true;
            session(['showCode' => $this->showCode]);

            return;
        }

        $this->currentComponent = ($this->currentComponent + 1) % count($this->slides);
        $this->showCode = false;

        // Store in session
        session(['currentComponent' => $this->currentComponent]);
        session(['showCode' => $this->showCode]);
    }

    public function previousComponent()
    {
        if ($this->showCode) {
            $this->showCode = false;
            session(['showCode' => $this->showCode]);

            return;
        }

        $previousComponent = ($this->currentComponent - 1 + count($this->slides)) % count($this->slides);
        if ($this->slides[$previousComponent]['shouldShowCode'] && !$this->showCode) {
            $this->currentComponent = ($this->currentComponent - 1 + count($this->slides)) % count($this->slides);
            $this->showCode = true;

            session(['currentComponent' => $this->currentComponent]);
            session(['showCode' => $this->showCode]);

            return;
        }

        $this->currentComponent = ($this->currentComponent - 1 + count($this->slides)) % count($this->slides);
        $this->showCode = false;

        // Store in session
        session(['currentComponent' => $this->currentComponent]);
        session(['showCode' => $this->showCode]);
    }

    public function getCurrentComponentFilePath()
    {
        $currentComponent = $this->slides[$this->currentComponent]['component'];

        $classNamespace = str_replace("\\", "/", str_replace("App\\", "", $currentComponent));
        return base_path('app/'.$classNamespace.'.php');
    }

    public function getCurrentComponentBladeFilePath()
    {
        $currentComponent = $this->slides[$this->currentComponent]['component'];

        $classNamespace = str_replace("\\", "/", str_replace("App\\", "", $currentComponent));
        $classNamespace = substr($classNamespace, 0, strrpos($classNamespace, '/'));
        $bladeFileName = \Illuminate\Support\Str::kebab(class_basename($currentComponent));

        return base_path('resources/views/' . $classNamespace . '/' . $bladeFileName . '.blade.php');
    }

    public function getCurrentComponentBladeFileContents()
    {
        $bladeFileContents = file_get_contents($this->getCurrentComponentBladeFilePath());

        // Remove only the class=" attributes from the blade file and the new line after it and the whitespace after it
        $bladeFileContents = preg_replace_callback('/.*class=".*?"/', function ($matches) {
            if (str_contains($matches[0], 'wire:offline.class')) {
                return $matches[0];
            } else {
                return preg_replace('/class=".*?"/', '', $matches[0]);
            }
        }, $bladeFileContents);
        $bladeFileContents = preg_replace('/<div >/', '<div>', $bladeFileContents);
        $bladeFileContents = preg_replace('/<input >/', '<input>', $bladeFileContents);
        $bladeFileContents = preg_replace('/<ul >/', '<ul>', $bladeFileContents);
        $bladeFileContents = preg_replace('/<li >/', '<li>', $bladeFileContents);
        $bladeFileContents = preg_replace('/<span >/', '<span>', $bladeFileContents);
        $bladeFileContents = preg_replace('/<a >/', '<a>', $bladeFileContents);
        $bladeFileContents = preg_replace('/<p >/', '<p>', $bladeFileContents);
        $bladeFileContents = preg_replace('/<button >/', '<button>', $bladeFileContents);
        $bladeFileContents = preg_replace('/\n\s*\n/', "\n", $bladeFileContents);

        return $bladeFileContents;
    }

    public function render()
    {
        return view('livewire.demo.dashboard');
    }
}
