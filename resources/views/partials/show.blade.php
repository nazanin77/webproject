@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <div class="media">
                    <div class="media-body">
                        <h5 class="border border-dark p-2 mb-0">{{$data->title}}</h5>
                        <p class="bg-dark text-light mt-0">{{$data->body}}</p>
                    </div>
                </div>
                <a href="{{route('home')}}" class="btn btn-dark"  >بازگشت به صفحه قبل</a>

            </div>

        </div>

    </div>

@endsection
