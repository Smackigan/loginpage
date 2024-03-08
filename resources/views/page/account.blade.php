@extends('layout.default')

@section('content')

    <div class="">
        <div class="column main">
            <div id="" class="columns">

                @include('includes.login')
                @include('includes.register')

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const successMessage = '{{ session('success') }}';
                        if (successMessage) {
                            alert(successMessage);
                        }
                    });
                </script>

            </div>

        </div>
    </div>
    </div>
@stop

@section('scripts')
    <script src="{{ asset('../../js/app.js') }}"></script>
@endsection
