<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome :users="$users" />
            </div>
        </div>
    </div>
</x-app-layout>
<footer class="bg-gray-200 dark:bg-gray-900 py-6">
    <div class="container mx-auto px-4">
        <div class="flex justify-center items-center">
      <span class="text-gray-600 dark:text-gray-300 text-sm">
        &copy; 2023 Powered by Atis (Prishtinë). All rights reserved.
      </span>
        </div>
    </div>
</footer>



