@extends('layout.app')

@section('nameDoc')
    index
@endsection

@section('content-page')



    <div class="container">
        <div class="row pt-3 justify-content-center">
           <div class="card " style="width: 50%">
                <div class="card-header text-center">
                    <h1> All Todos</h1>
                </div>
                 <div class="card-body ">
                     <ul class="list-group">
                         @foreach($allTasks as $task)
                             <li class="list-group-item text-muted"> {{$task->title}}
                                 <span class="float-right mr-2">
                                     <a href="/tasks/{{$task->id}}/delete" style="color: #f44336">
                                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                                     </a>
                                 </span>
                                 <span class="float-right mr-2">
                                     <a href="/tasks/{{$task->id}}/edit" style="color: #4caf50">
                                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                     </a>
                                 </span>
                                 <span class="float-right mr-2">
                                     <a href="/tasks/{{$task->id}}" style="color: #00bcd4">
                                         <i class="fa fa-eye" aria-hidden="true"></i>
                                     </a>
                                 </span>
                             </li>

                         @endforeach
                     </ul>
                 </div>
           </div>

        </div>
    </div>
@endsection
