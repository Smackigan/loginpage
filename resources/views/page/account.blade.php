@extends('layout.default')

@section('content')


    <div class="">
        <div class="column main">
            <div id="" class="columns">

                @include('includes.login')


                @include('includes.register')

            </div>

        </div>
    </div>
    </div>
@stop

@section('scripts')
    <script src="{{ asset('../../js/app.js') }}"></script>
@endsection
