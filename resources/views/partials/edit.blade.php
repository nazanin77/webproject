@extends('layouts.app')
@section('content')
    <form action="" method="post">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-dark text-light">ویرایش خاطره</div>

                        <div class="card-body border border-dark">
                            @include('partials.error')
                            @csrf
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label for="body">متن</label>
                                <textarea name="body" class="form-control" style="height: 12rem" id="body">{{$data->body}}</textarea>
                            </div>
                            <button class="btn btn-dark" type="submit">بروزرسانی خاطره</button>
                            <a href="{{route('home')}}" class="btn btn-dark">بازگشت به صفحه قبل</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
