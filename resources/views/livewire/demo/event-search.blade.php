
<div class="lg:grid-cols-6 grid h-[700px]">
    <div class="p-8 pb-12 overflow-y-scroll border-r border-red-800 lg:col-span-2">
        <div class="relative w-full">
            <input
                class="transition-color block w-full max-w-[16rem] rounded-[10px] border-0 bg-gray-800 py-2.5 pl-10 pr-4 text-sm text-gray-300 placeholder-gray-600 outline-none focus-visible:ring-1 focus-visible:ring-red-700/50 sm:max-w-none"
                placeholder="Search events"
                type="text"
                wire:model.live="term" {{-- [tl! highlight] --}}
            >
            <div
                aria-hidden="true"
                class="absolute inset-0 flex items-center pointer-events-none left-3"
            >
                <svg
                    class="w-5 h-5"
                    fill="none"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        clip-rule="evenodd"
                        d="M3.25 9.167a5.917 5.917 0 1 1 11.833 0 5.917 5.917 0 0 1-11.833 0ZM9.167 1.75a7.417 7.417 0 1 0 4.687 13.165l2.282 2.282a.75.75 0 0 0 1.061-1.06l-2.282-2.283A7.417 7.417 0 0 0 9.167 1.75Z"
                        fill-rule="evenodd"
                        fill="#475569"
                        opacity=".8"
                    ></path>
                </svg>
            </div>
        </div>
        <ul class="mt-8 space-y-6">
            @foreach($events as $event)
                <li
                    class="flex items-center text-sm text-white"
                    wire:click="$set('selectedEventId', {{ $event->id }})" {{-- [tl! highlight] --}}
                >
                    <div class="mr-3">
                        <img
                            class="w-10 h-10 rounded-full"
                            src="{{ $event->speaker_image ?? Vite::asset('resources/images/blank.png') }}"
                        >
                    </div>
                    <div class="flex flex-col w-[90%]">
                        <span class="font-bold">{{ $event->title }}</span>
                        <span class="text-gray-400 line-clamp-1">{{ $event->description }}</span>
                        <span class="text-gray-500">Speaker: {{ $event->speaker }}</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="flex flex-col overflow-x-auto text-sm lg:col-span-4">
        @if($selectedEvent)
            <div class="p-8">
                @if($selectedEvent->cover_image)
                    <img
                        class="object-cover w-full h-64 rounded-md"
                        src="{{ $selectedEvent->cover_image }}"
                        alt="Cover image for {{ $selectedEvent->title }}"
                    >
                @endif
                <h2 class="mt-4 text-2xl font-bold text-white">{{ $selectedEvent->title }}</h2>
                <p class="mt-4 text-gray-400">{{ $selectedEvent->description }}</p>
                <p class="mt-2 text-gray-500">Speaker: {{ $selectedEvent->speaker }}</p>
            </div>
        @else
            <div class="p-8">
                <p class="text-gray-400">No event selected</p>
            </div>
        @endif
    </div>
</div>
