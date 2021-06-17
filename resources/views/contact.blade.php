@extends('layouts.main_app')
@section('content')
    <div class="my-16">
        <div class="flex justify-center">
            <form class="w-full max-w-lg" action="{{ route('contact.send') }}" method="POST">
            @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            First Name
                        </label>
                        <input
                            class="block w-full text-gray-700 border @error('first_name') border-red-500  @else border-gray-200 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            type="text" placeholder="First Name" name="first_name">
                        @error('first_name')
                        <p class="text-red-500 text-xs">Please fill out this field.</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Last Name
                        </label>
                        <input
                            class="block w-full text-gray-700 border @error('last_naame') border-red-500  @else border-gray-200 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" placeholder="Last Name" name="last_naame">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            E-mail
                        </label>
                        <input
                            class="block w-full text-gray-700 border @error('email') border-red-500  @else border-gray-200 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="email" name="email">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Message
                        </label>
                        <textarea
                            class="block w-full text-gray-700 border @error('message') border-red-500  @else border-gray-200 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" name="message"></textarea>
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3">
                        <button
                            class="shadow bg-indigo-600 hover:bg-indigo-700 focus:shadow-outline text-white font-bold py-2 px-4 rounded"
                            type="submit">
                            Send
                        </button>
                    </div>
                    <div class="md:w-2/3"></div>
                </div>
            </form>
        </div>
    </div>

@endsection
