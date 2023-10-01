<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ArtForge') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center mt-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 w-full md:w-2/3 lg:w-1/2">
                    <h2>{{$prompt}}</h2>
                    <form action="{{ url('/postRequest')}}" method="GET">
                        @csrf
                        <div class="mb-4 flex">
                            <input type="text" id="prompt" name="prompt" placeholder="Type a prompt..." class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:border-blue-500">
                            <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded bg-red-500 hover:bg-red-700">Forge</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <
</x-app-layout>
