<div class="lg:grid-cols-6 grid h-[700px]">
    <div class="p-8 pb-12 overflow-y-scroll border-r border-red-800 lg:col-span-6">
        <div class="relative w-full">
            <a href="/hello" class="block mb-4 text-center text-white underline">Default Link</a>
            <a href="/hello" wire:navigate class="block mb-4 text-center text-white underline">Wire Navigate Link</a>{{-- [tl! highlight] --}}
            <a href="/hello" wire:navigate.hover class="block mb-4 text-center text-white underline">Wire Navigate Hover Link</a>{{-- [tl! highlight] --}}
        </div>
    </div>
</div>
