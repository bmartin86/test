<x-app-layout>
<x-slot name="header">
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                </div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <x-nav-link :href="route('user.home')" :active="request()->routeIs('user.home')">
                        {{ __('Home') }}
                    </x-nav-link>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as User!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
