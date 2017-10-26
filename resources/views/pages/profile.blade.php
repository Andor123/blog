@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p>
                            Your age is
                            @age([1995, 8, 25])
                        </p>

                        <p>
                            @sayHello('Andor')
                        </p>

                        <p>{{ $married }}</p>

                        <p>{{ $test }}</p>

                        <p>{{ $age }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection