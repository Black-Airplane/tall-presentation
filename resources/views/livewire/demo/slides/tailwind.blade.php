<x-slide>
    <div class="p-10">
        <div class="flex flex-row justify-between">
            <div class="flex flex-col">
                <!-- Logos section -->
                <div class="space-y-24">
                    <!-- Replace with actual logo images and ensure you have the right to use them -->
                    <img src="{{ Vite::asset('resources/images/tailwind.png') }}" alt="Laravel Logo" class="h-12 animate__animated animate__fadeInLeft" style="animation-delay: 1.0s;">
                </div>
            </div>
            <div class="flex flex-col w-2/3 text-white">
                <!-- Text section for Tailwind CSS -->
                <div class="text-white">
                    <h2 class="mt-4 mb-4 text-4xl font-bold animate__animated animate__fadeInUp" style="animation-delay: 1.5s;">What's Tailwind CSS</h2>
                    <ul class="space-y-4 list-disc list-inside">
                        <li class="animate__animated animate__fadeInUp" style="animation-delay: 1.5s;">Utility-first CSS framework</li>
                        <li class="animate__animated animate__fadeInUp" style="animation-delay: 1.5s;">Class-based styling approach</li>
                    </ul>

                    <h3 class="mt-4 mb-4 text-3xl font-bold animate__animated animate__fadeInUp" style="animation-delay: 5.5s;">Key Features</h3>
                    <ul class="space-y-4 list-disc list-inside">
                        <li class="animate__animated animate__fadeInUp" style="animation-delay: 5.5s;">Customizable</li>
                        <li class="animate__animated animate__fadeInUp" style="animation-delay: 8.5s;">Responsive design</li>
                        <li class="animate__animated animate__fadeInUp" style="animation-delay: 8.5s;">Low specificity</li>
                    </ul>

                    <h3 class="mt-4 mb-4 text-3xl font-bold animate__animated animate__fadeInUp" style="animation-delay: 11.5s;">Benefits</h3>
                    <ul class="space-y-4 list-disc list-inside">
                        <li class="animate__animated animate__fadeInUp" style="animation-delay: 11.5s;">Copy and paste friendly</li>
                        <li class="animate__animated animate__fadeInUp" style="animation-delay: 14.5s;">Rapid development</li>
                        <li class="animate__animated animate__fadeInUp" style="animation-delay: 14.5s;">Consistent styling</li>
                        <li class="animate__animated animate__fadeInUp" style="animation-delay: 14.5s;">Easy maintenance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-slide>
