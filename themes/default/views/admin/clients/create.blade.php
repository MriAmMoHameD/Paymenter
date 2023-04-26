<x-admin-layout>
    <x-slot name="title">
        {{ __('Clients') }}
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>

    </x-slot>
    <!-- create client -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        {{ __('Create client') }}
                    </div>
                    <div class="mt-6 text-gray-500">
                        {{ __('Here you can create a new client.') }}
                    </div>
                </div>
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold w-full">
                                <form method="POST" action="{{ route('admin.clients.store') }}">
                                    @csrf
                                    <div class="mt-4">
                                        <label for="name" class="block text-sm font-medium text-gray-700">
                                            {{ __('Name') }}
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="name" id="name" autocomplete="name" required
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="email" class="block text-sm font-medium text-gray-700">
                                            {{ __('Email') }}
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="email" id="email" autocomplete="email" required
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="password" class="block text-sm font-medium text-gray-700">
                                            {{ __('Password') }}
                                        </label>
                                        <div class="mt-1">
                                            <input type="password" name="password" id="password" autocomplete="new-password" required
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="address" class="block text-sm font-medium text-gray-700">
                                            {{ __('Address') }}
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="address" id="address" autocomplete="address"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="city" class="block text-sm font-medium text-gray-700">
                                            {{ __('City') }}
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="city" id="city" autocomplete="city"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="state" class="block text-sm font-medium text-gray-700">
                                            {{ __('State') }}
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="state" id="state" autocomplete="state"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="zip" class="block text-sm font-medium text-gray-700">
                                            {{ __('Zip') }}
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="zip" id="zip" autocomplete="zip"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="country" class="block text-sm font-medium text-gray-700">
                                            {{ __('Country') }}
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="country" id="country" autocomplete="country"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="phone" class="block text-sm font-medium text-gray-700">
                                            {{ __('Phone') }}
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="phone" id="phone" autocomplete="phone"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="companynames" class="block text-sm font-medium text-gray-700">
                                            {{ __('Company Names') }}

                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="companynames" id="companynames" autocomplete="companynames"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit"
                                            class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            {{ __('Save') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>