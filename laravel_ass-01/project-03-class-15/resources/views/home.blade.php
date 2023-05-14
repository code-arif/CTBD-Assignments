@extends('principal')

{{--Browser heading START--}}
@section('title', 'HOME')
{{--Browser heading END--}}

{{--Display task content START--}}
@section('display')
    <section class="card">

        @if(session('taskCreateMessage'))
            <p class="taskCreateMessage"><i class="fa-solid fa-square-check"></i> {{session('taskCreateMessage')}} </p>
        @endif

        @if(session('successMessage'))
            <p class="successMessage"><i class="fa-solid fa-square-check"></i> {{session('successMessage')}} </p>
        @endif

        @if(session('deleteMessage'))
            <p class="deleteMessage"><i class="fa-solid fa-square-check"></i> {{session('deleteMessage')}} </p>
        @endif

        @foreach($allTasks as $task)
            <div class="task-show">
                <div class="task-info">
                    <div class="task-id">
                        <p> Task ID: {{$task->id}} </p>
                    </div>
                    <div>
                        @if($task->status == 'pending')
                            <a class="btn" href=" {{route('task.updateStatus',[$task->id,'complete'])}} ">Mark as
                                complete</a>
                        @elseif($task->status == 'complete')
                            <a class="btn pending-btn" href="  {{route('task.updateStatus',[$task->id,'pending'])}}  ">Back
                                to pending</a>
                        @endif

                        <a class="btn" href="{{route('task.show', [$task->id])}}"> Edit </a>
                        <a class="delete-btn" onclick="return confirm('Are you sure?')"
                           href="{{route('task.delete', [$task->id])}}"> Delete </a>
                    </div>
                </div>

                <div class="task-title">
                    <h2><i class="fa-solid fa-circle-question"></i> {{$task->name}} </h2>
                </div>
                <div class="task-details">
                    <p><i class="fa-solid answer-icon fa-pen-to-square"></i> {{$task->details}} </p>
                </div>
            </div>
        @endforeach
    </section>
@endsection
{{--Display task content END--}}



