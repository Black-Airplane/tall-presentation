<div class="lg:grid-cols-6 grid h-[700px]">
    <div class="p-8 pb-12 overflow-y-scroll border-r border-red-800 lg:col-span-6">
        <button class="text-white" wire:click="streamMessage">Stream Messages</button> {{-- [tl! highlight] --}}
        <div class="flex w-full h-full">
            <div class="m-auto text-5xl text-white" wire:stream="goodByeMessage">{{ $goodByeMessage }}</div> {{-- [tl! highlight] --}}
        </div>
    </div>
</div>
