<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @foreach($batches as $batch)
        <a href="/batch/{{$batch->id}}">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 hover:bg-gray-50">
                        {{$batch->plant}}
                    </div>
                </div>
            </div>
        </a>
    @endforeach
    <a href="batch/create">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 hover:bg-gray-50">
                    New Batch
                </div>
            </div>
        </div>
    </a>
</x-guest-layout>

