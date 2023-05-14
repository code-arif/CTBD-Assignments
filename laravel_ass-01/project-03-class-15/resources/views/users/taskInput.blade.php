@extends('principal')

@section('title','TASK' )

{{--task input form START--}}
@section('banner')
    <section class="contact task-management " id="contact">
        <h2 class="heading"> Task <span>Manager!!</span></h2>

        <form method="POST" action="{{route('task.create')}}">

            {{--csrf security--}}
            {{csrf_field()}}

            <div class="input-box">
                <input type="text" name="name" placeholder="Task Name">
            </div>
            <div>
                <textarea name="details" id="" cols="30" rows="10" placeholder="Task Details"></textarea>
                <input type="submit" name="submit" class="btn" value="Create Task">
                <a class="btn" href="{{route('home')}}"> Back to home </a>
            </div>
        </form>
    </section>
@endsection
{{--task input form END--}}
