<div class="lg:grid-cols-6 grid h-[700px]">
    <div
        wire:offline.class="border-red-500"
        class="p-8 pb-12 overflow-y-scroll border-4 border-green-800 lg:col-span-6 rounded-xl "
    >
        <div class="relative w-full">
            <div class="text-center text-white">Demo wire:offline</div>
            <div wire:offline class="w-full mt-6 text-center text-white"> {{-- [tl! highlight] --}}
                You are currently offline. Some features may not be available.
            </div>
        </div>
    </div>
</div>
