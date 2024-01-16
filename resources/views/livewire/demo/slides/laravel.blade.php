<x-slide>
    <div class="p-10">
    <div class="flex flex-row justify-between">
        <div class="flex flex-col">
        <!-- Logos section -->
        <div class="space-y-24">
            <!-- Replace with actual logo images and ensure you have the right to use them -->
            <img src="{{ Vite::asset('resources/images/laravel.png') }}" alt="Laravel Logo" class="h-32 animate__animated animate__fadeInLeft" style="animation-delay: 1.0s;">
        </div>
        </div>
        <div class="flex flex-col w-2/3 text-white">
            <!-- Text section for Laravel -->
            <div class="text-white">
                <h2 class="mb-4 text-4xl font-bold animate__animated animate__fadeInUp" style="animation-delay: 1.5s;">What's Laravel</h2>
                <p class="mb-4 animate__animated animate__fadeInUp" style="animation-delay: 1.5s;"><strong>PHP web application framework:</strong> Follows the Model-View-Controller (MVC) pattern.</p>

                <ul class="space-y-4 list-disc list-inside">
                    <h3 class="mb-4 text-3xl font-bold animate__animated animate__fadeInUp" style="animation-delay: 5.5s;">Key Features</h3>
                    <li class="animate__animated animate__fadeInUp" style="animation-delay: 5.5s;">Eloquent ORM</li>
                    <li class="animate__animated animate__fadeInUp" style="animation-delay: 8.5s;">Blade templating engine</li>
                    <li class="animate__animated animate__fadeInUp" style="animation-delay: 8.5s;">Artisan command-line tool</li>
                    <li class="animate__animated animate__fadeInUp" style="animation-delay: 8.5s;">Queues</li>

                    <h3 class="mb-4 text-3xl font-bold animate__animated animate__fadeInUp" style="animation-delay: 11.5s;">Benefits</h3>
                    <li class="animate__animated animate__fadeInUp" style="animation-delay: 11.5s;">Clean and expressive syntax.</li>
                    <li class="animate__animated animate__fadeInUp" style="animation-delay: 14.5s;">Robust ecosystem.</li>
                    <li class="animate__animated animate__fadeInUp" style="animation-delay: 14.5s;">Rapid development with built-in features.</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</x-slide>
