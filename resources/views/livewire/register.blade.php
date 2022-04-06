@extends('layouts.app')
@section('content')
    <div class="my-10 flex justify-center w-full">
        <section class="border rounded shadow-lg p-4 w-6/12 bg-gray-200">
            <h1 class="text-center text-3xl my-5">Sign Up to Get Started</h1>
            <hr>
            <form class="my-4">
                <div class="flex justify-around my-8">
                    <div class="flex flex-wrap w-10/12">
                        <input type="name" class="p-2 rounded border shadow-sm w-full"
                               placeholder="Name" wire:model="name" />

                    </div>
                </div>
                <div class="flex justify-around my-8">
                    <div class="flex flex-wrap w-10/12">
                        <input type="email" class="p-2 rounded border shadow-sm w-full" placeholder="Email"
                               />

                    </div>
                </div>
                <div class="flex justify-around my-8">
                    <div class="flex flex-wrap w-10/12">
                        <input type="password" class="p-2 rounded border shadow-sm w-full" placeholder="Password"
                             />
                    </div>
                </div>
                <div class="flex justify-around my-8">
                    <div class="flex flex-wrap w-10/12">
                        <label>
                            <input type="text" class="p-2 rounded border shadow-sm w-full" placeholder="Confirm Password"
                                  />
                        </label>
                    </div>
                </div>
                <div class="flex justify-around my-8">
                    <div class="flex flex-wrap w-10/12">
                        <button type="submit"
                                class="p-2 bg-gray-800 text-white w-full rounded tracking-wider cursor-pointer">Register</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
