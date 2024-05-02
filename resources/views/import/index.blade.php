<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Quản lý vật tư') }}
            </h2>
            <Link modal href="{{route('import.create')}}" class=" px-4 py-2 bg-indigo-400 hover:bg-indigo-600 text-white rounded-md">
            Thêm vật tư
            </Link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-splade-table :for="$item" striped>


                @cell('idCode',$item)
                {{ $item->vatTu->idCode}}
                @endcell

                @cell('name',$item)
                {{ $item->vatTu->name}}
                @endcell

                @cell('unit',$item)
                {{ $item->vatTu->unit}}
                @endcell

                



            </x-splade-table>

        </div>
    </div>
</x-app-layout>