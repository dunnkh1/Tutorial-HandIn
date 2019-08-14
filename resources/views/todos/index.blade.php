@extends('layouts.app')
@section('content')
    <h2 class="mt-5 mb-3 text-center">Laravel 5.8 For Beginners!</h2>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit Aut.</p>

    <ul class="list-group py-3 mb-3">
        @forelse($todos as $todo)
            <li class="list-group-item my-2">
                <h5>{{$todo->title}}</h5>
                <p>{{str_limit($todo->body,20)}}</p>
                <small class="float-right">{{$todo->created_at->diffForHumans()}}</small>
                <a href="{{route('todos.show',$todo->id)}}">Read More</a>
            </li>
        @empty
            <h4 class="text-center">No Todos Found!</h4>
        @endforelse
    </ul>
    <div class="d-flex justify-content-center">
       
        {{$todos->links('vendor.pagination.bootstrap-4')}} // bootstrap-4 is the name of the pagination view
    </div>
@endsection