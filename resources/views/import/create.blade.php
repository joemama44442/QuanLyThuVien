<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mượn sách') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-splade-modal>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg rounded-md drop-shadow-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <x-splade-form :action="route('import.store')" class="space-y-4">

                            <x-splade-input name="time" label="Thời gian" date />

                            <x-splade-select name="vat_tu_id" label="Vật liệu" :options="$vatTu" option-label="name" option-value="id" choices/>
                            
                            <x-splade-input name="amount" type="number" label="Số lượng"/>


                            <x-splade-submit label="Thêm" />

                        </x-splade-form>


                    </div>
                </div>
            </div>
        </x-splade-modal>
    </div>
</x-app-layout>