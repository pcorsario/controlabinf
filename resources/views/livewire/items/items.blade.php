<x-slot name="header" class="bg-blue-900">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
       ITEMS
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <button wire:click="crear()" class="bg-blue-900 rounded-md hover:bg-amber-500 hover:text-blue-900 py-2 px-4 my-3 font-bold text-white">Nuevo</button>
            @if ($modal)
            @include('livewire.items.crear')
            @endif
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success bg-sky-400 rounded-sm text-slate-800">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-blue-900 text-white rounded-md">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">DESCRIPTION</th>
                        <th class="px-4 py-2">CANTIDAD</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                                    <td class="bg-amber-300 border px-4 py-2">{{ $item->id }}</td>
                            <td class="bg-amber-300 border px-4 py-2">{{ $item->n_item }}</td>
                            <td class="bg-amber-300 border px-4 py-2">{{ $item->marca }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>