<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @foreach($users as $user)
            <a href="batch/{{$user->id}}">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200  hover:bg-gray-50">
                        {{$user->name}}
                </div>
            </div>
        </div>
            </a>
        @endforeach
    </div>

    <a href="users/create"><div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200  hover:bg-gray-50">
                    New User
                </div>
            </div>
        </div>
    </a>
</x-guest-layout>

