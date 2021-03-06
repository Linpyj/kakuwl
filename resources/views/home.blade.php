@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('MyPage') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::user())
                        {{ Auth::user()->name }}です！
                    @endif
                </div>
                <div class="card-footer">
									{{ Auth::user() }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
