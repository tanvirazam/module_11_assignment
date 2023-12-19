@extends('frontend.layouts.app')
@section('content')
    <div class="flex justify-center items-center w-screen mt-20">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <form method="POST" class="m-3" action="{{ route('update_transactions', $product->id) }}">
                @csrf

                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                        Name</label>
                    <input type="text" id="disabled-input" aria-label="disabled input" disabled name="name"
                        class="cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter product name" value="{{ $product->name }}">
                </div>

                <div class="mb-5">
                    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                        Quantity</label>
                    <input type="number" id="disabled-input" aria-label="disabled input" disabled name="quantity"
                        class=" cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $product->quantity }}">
                </div>

                <div class="mb-5">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                        price</label>
                    <input type="text" id="price" name="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $product->price }}" required>
                </div>

                <button type="submit"
                    class=" w-full focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Transaction
            </form>
        </div>
    </div>
@endsection
