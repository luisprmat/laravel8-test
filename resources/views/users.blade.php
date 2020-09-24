<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">Listado de usuarios</h1>
                <ul>
                    @forelse ($users as $user)
                        <li>{{ $user->name }}: <i>({{ $user->email }})</i></li>
                    @empty
                        <li>No hay usuarios</li>
                    @endforelse
                </ul>
                {{ $users->onEachSide(2)->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
