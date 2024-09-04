<div class="mx-auto px-4 py-6 h-[600px]">
        <h1 class="text-2xl font-bold mb-6">Upload TypeCategory</h1>

        <form action="{{ route('typecategory.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <div class="mb-4 h-[400px]">
                <label for="model" class="block text-sm font-medium text-gray-700">Model</label>
                <input type="text" id="model" name="model" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 sm:text-sm" required>
            </div>

            <div class="mb-4 h-[400px]">
                <label for="model" class="block text-sm font-medium text-gray-700">Feature</label>
                <input type="text" id="feature" name="feature" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 sm:text-sm" required>
            </div>

            <div class="mb-4 h-[400px]">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full text-sm text-gray-500 file:border-gray-300 file:bg-gray-50 file:py-2 file:px-4 file:rounded-md file:text-sm file:font-medium hover:file:bg-gray-100" required>
            </div>

            <div class="mb-4 h-[400px]">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" id="price" name="price" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 sm:text-sm" required>
            </div>

            <div class="mb-4 h-[400px]">
                <label for="number" class="block text-sm font-medium text-gray-700">Number</label>
                <input type="number" id="number" name="number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 sm:text-sm" required>
            </div>

            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Submit
            </button>
        </form>
</div>