@csrf

<div class="mb-4">
    <label class="block">Nosaukums</label>
    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="w-full border-gray-300 rounded">
    @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block">Cena (€)</label>
    <input type="text" name="price" value="{{ old('price', $product->price ?? '') }}" class="w-full border-gray-300 rounded">
    @error('price') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block">Kategorija</label>
    <select name="category_id" class="w-full border-gray-300 rounded">
        <option value="">-- izvēlies --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id ?? '') == $category->id)>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
</div>

<button type="submit" class="px-4 py-2 bg-gray-800 text-white rounded">Saglabāt</button>
<a href="{{ route('products.index') }}" class="ml-2 text-gray-600">Atpakaļ</a>
