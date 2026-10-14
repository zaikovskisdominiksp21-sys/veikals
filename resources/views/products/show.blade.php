<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $product->name }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <p><b>Nosaukums:</b> {{ $product->name }}</p>
                <p><b>Kategorija:</b> {{ $product->category->name }}</p>
                <p><b>Cena:</b> {{ number_format($product->price, 2) }} €</p>

                <a href="{{ route('products.index') }}" class="inline-block mt-4 text-gray-600">Atpakaļ</a>
            </div>
        </div>
    </div>
</x-app-layout>
