@extends('layout.app')

@section('nameDoc')
    show
@endsection

@section('content-page')
{{--    <h1>hello from show</h1>--}}

    <div class="container">
        <div class="row pt-3 justify-content-center">
            <div class="card " style="width: 50%">
                <div class="card-header text-center">
                    <h5>   {{$taskById->title}}</h5>
                </div>
                <div class="card-body ">
                    <ul class="list-group">
                        <li class="list-group-item text-muted">
                            {{$taskById->description}}
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
