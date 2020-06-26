@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex flex-row items-center content-center justify-center w-60" x-data="counter()">
        <button class="flex-1 bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-2 px-4 rounded" @click="increment()">+</button>
        <p class="flex-1 text-xl text-center m-2" x-text="number"></p>
        <button class="flex-1 bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-2 px-4 rounded" @click="decrement()">-</button>
    </div>

    <script>
        function counter() {
            return {
                number: 0,
                increment() {
                    this.number++
                },
                decrement() {
                    this.number -= 1
                    if (this.number < 0) {
                        this.number = 0
                    }
                }
            }
        }
    </script>
@endsection
