@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h5>やいやいやいやい！！！！</h5>
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
@endsection