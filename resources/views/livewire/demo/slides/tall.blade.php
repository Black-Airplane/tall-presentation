<x-slide>
    <div class="p-10">
    <div class="flex flex-row justify-between">
        <div class="flex flex-col">
        <!-- Logos section -->
        <div class="space-y-24">
            <!-- Replace with actual logo images and ensure you have the right to use them -->
            <img src="{{ Vite::asset('resources/images/tailwind.png') }}" alt="Tailwind CSS Logo" class="h-12 animate__animated animate__fadeInLeft" style="animation-delay: 1.0s;">
            <img src="{{ Vite::asset('resources/images/alpine.png') }}" alt="Alpine.js Logo" class="h-12 animate__animated animate__fadeInLeft" style="animation-delay: 5.5s;">
            <div class="flex justify-between">
                <img src="{{ Vite::asset('resources/images/laravel.png') }}" alt="Laravel Logo" class="h-32 animate__animated animate__fadeInLeft" style="animation-delay: 8.5s;">
                <img src="{{ Vite::asset('resources/images/livewire.png') }}" alt="Livewire Logo" class="h-32 animate__animated animate__fadeInLeft" style="animation-delay: 11.5s;">
            </div>
        </div>
        </div>
        <div class="flex flex-col w-2/3 text-white">
            <!-- Text section -->
            <h2 class="mb-4 text-4xl font-bold">Tailwind CSS, Alpine.js, Laravel, and Livewire</h2>
            <p class="mb-4">Each element plays a pivotal role, offering a seamless integration that empowers developers to build modern web experiences.</p>
            <ul class="space-y-4 list-disc list-inside">
                <li class="animate__animated animate__fadeInUp" style="animation-delay: 1.5s;"><strong>Tailwind CSS:</strong> Responsive, customizable, low-specificity styling for rapid development.</li>
                <li class="animate__animated animate__fadeInUp" style="animation-delay: 5.5s;"><strong>Alpine.js:</strong> Lightweight JavaScript framework with declarative syntax.</li>
                <li class="animate__animated animate__fadeInUp" style="animation-delay: 8.5s;"><strong>Laravel:</strong> PHP MVC framework, Eloquent ORM, Artisan.</li>
                <li class="animate__animated animate__fadeInUp" style="animation-delay: 11.5s;"><strong>Livewire:</strong> Full-stack Laravel framework for real-time updates.</li>
            </ul>
        </div>
    </div>
    </div>
</x-slide>
