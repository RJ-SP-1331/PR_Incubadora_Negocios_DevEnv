@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Ha iniciado Sesión!') }}
                </div>
                <div class="card-body">
                    <p>
                        <img src="https://i0.wp.com/windowscustomization.com/wp-content/uploads/2018/09/paradise.gif?resize=600%2C341&quality=80&strip=all&ssl=1" alt="Smiley face" style="float:left;width:42px;height:42px;">
                        Esta imagen solo está presente en la vista del Usuario.
                    </p>
                    <a href="{{ route('teacher.index') }}" class="btn btn-primary">Teacher</a>

                </div>

            </div>
        </div>
    </div>
</div>
</div>


@endsection