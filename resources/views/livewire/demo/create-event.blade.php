<div class="lg:grid-cols-6 grid h-[700px]">
    <div class="p-8 pb-12 overflow-y-scroll border-r border-red-800 lg:col-span-6">
        <div class="relative w-full">
            <form wire:submit.prevent="submit" class="space-y-4"> {{-- [tl! highlight] --}}
                <input
                    class="transition-color block w-full max-w-[16rem] rounded-[10px] border-0 bg-gray-800 py-2.5 pl-10 pr-4 text-sm text-gray-300 placeholder-gray-600 outline-none focus-visible:ring-1 focus-visible:ring-red-700/50 sm:max-w-none"
                    placeholder="Title"
                    type="text"
                    wire:model="title" {{-- [tl! highlight] --}}
                >
                @error('title') <span class="text-red-500 error">{{ $message }}</span> @enderror
                <input
                    class="transition-color block w-full max-w-[16rem] rounded-[10px] border-0 bg-gray-800 py-2.5 pl-10 pr-4 text-sm text-gray-300 placeholder-gray-600 outline-none focus-visible:ring-1 focus-visible:ring-red-700/50 sm:max-w-none"
                    placeholder="Speaker"
                    type="text"
                    wire:model="speaker"
                >
                @error('speaker') <span class="text-red-500 error">{{ $message }}</span> @enderror
                <textarea
                    class="transition-color block w-full max-w-[16rem] rounded-[10px] border-0 bg-gray-800 py-2.5 pl-10 pr-4 text-sm text-gray-300 placeholder-gray-600 outline-none focus-visible:ring-1 focus-visible:ring-red-700/50 sm:max-w-none"
                    placeholder="Description"
                    wire:model.live.debounce.250ms="description" {{-- [tl! highlight] --}}
                ></textarea>
                @error('description') <span class="text-red-500 error">{{ $message }}</span> @enderror
                <input
                    class="transition-color block w-full max-w-[16rem] rounded-[10px] border-0 bg-gray-800 py-2.5 pl-10 pr-4 text-sm text-gray-300 placeholder-gray-600 outline-none focus-visible:ring-1 focus-visible:ring-red-700/50 sm:max-w-none"
                    type="date"
                    wire:model="event_date"
                >
                @error('event_date') <span class="text-red-500 error">{{ $message }}</span> @enderror
                <button
                    class="transition-color block w-full max-w-[16rem] rounded-[10px] border-0 bg-gray-800 py-2.5 pl-10 pr-4 text-sm text-gray-300 placeholder-gray-600 outline-none focus-visible:ring-1 focus-visible:ring-red-700/50 sm:max-w-none"
                    type="submit"
                >Create Event</button>
            </form>
            @if (session()->has('message'))
                <div class="p-4 mt-4 mb-4 text-white bg-green-500 rounded-md">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
</div>
