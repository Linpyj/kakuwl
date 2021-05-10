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
                    <form action="{{ route('picture.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">タイトル</label>
                            <input type="text" class="form-control" placeholder="Example input">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">絵の紹介文</label>
                            <textarea type="text" class="form-control" placeholder="Another input"></textarea>
                        </div>
                        <button class="btn btn-primary mt-5">絵を投稿する</btn>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
