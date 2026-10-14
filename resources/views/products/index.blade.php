<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Produkti</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                @if (session('status'))
                    <p class="mb-4 text-green-600">{{ session('status') }}</p>
                @endif

                <a href="{{ route('products.create') }}" class="inline-block mb-4 px-4 py-2 bg-gray-800 text-white rounded">+ Pievienot produktu</a>

                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b">
                            <th class="py-2">Nosaukums</th>
                            <th>Kategorija</th>
                            <th>Cena</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr id="product-{{ $product->id }}" class="border-b">
                                <td class="py-2">{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ number_format($product->price, 2) }} €</td>
                                <td class="text-right space-x-2">
                                    <a href="{{ route('products.show', $product) }}" class="text-blue-600">Skatīt</a>
                                    <a href="{{ route('products.edit', $product) }}" class="text-yellow-600">Labot</a>
                                    <button onclick="deleteProduct({{ $product->id }})" class="text-red-600">Dzēst</button>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4" class="py-2">Nav neviena produkta.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- AJAX: produkta dzēšana bez lapas pārlādes --}}
    <script>
        function deleteProduct(id) {
            if (!confirm('Vai tiešām dzēst?')) return;

            fetch('/products/' + id, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                },
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById('product-' + id).remove();
                    }
                });
        }
    </script>
</x-app-layout>
