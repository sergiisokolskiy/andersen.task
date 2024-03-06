@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Form') }}</div>
                    <div class="card-body">
                        <form name="information_form" method="post" action="{{route('data.store')}}">
                            @csrf
                            <div> Fill in your <b>name</b>: <br></div>
                            <input type="text" name="name" value="{{ old('name') }}">
                            <div> Fill in your <b>email</b>: <br></div>
                            <input type="email" name="email" value="{{ old('email') }}">
                            <div> Write your <b>message</b> here: <br></div>
                            <input type="text" name="message" value="{{ old('message') }}">
                            <div>
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <br><br>
                    <div
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        @if (!empty($data))
                            @include('includes.data_interpritator')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
