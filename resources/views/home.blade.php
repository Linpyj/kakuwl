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
            <form action="{{ route('picture.store') }}" method="post">
                <button class="btn btn-primary">絵を投稿する</btn>
                <!-- <div class="postbutton mt-5">
                    <button class="btn btn-primary">絵を投稿する</button>
                </div> -->
            </form>
        </div>
    </div>
</div>
@endsection
