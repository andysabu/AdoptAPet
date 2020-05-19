{{-- Extend Layout --}}
@extends('layouts.app')
{{-- Set title --}}
@section('title','Adopt A Pet | Donate')
{{-- Set content --}}
<article class="voluntary">
@section('content')


<div class="person-area-header">
    @if (Auth::check())
    <h3>Hi... <strong>{{Auth::user()->name}}</strong></h3>
    @else
    <h3>Hello there!!!</h3>
    @endif
    <h6 class="quote" id="voluntary-text"> No act of kindness, no matter how small, is ever wasted - Aesop!</h6> <br>
    <hr>
    <h4 class="person-area-h6">Here are the Voluntary work you can help us with</h4>
  </div>

        @if (session()->has('success'))
        <h1>IT WORKS!</h1>
        @endif
    @foreach ($tasks as $task)
            <div id="accordion">
                <div class="card cardAccor">
                <div class="card-header" id="{{$task->id}}">
                    <h5 class="mb-0">
                       <button  class="btn btn-block" data-toggle="collapse" data-target="#collapse{{$task->id}}" aria-expanded="false" aria-controls="collapse{{$task->id}}">
                        {{$task->name}}
                      </button>
                    </h5>
                    
                </div>
              
                  <div id="collapse{{$task->id}}" class="collapse" aria-labelledby="heading{{ $task->id}}" data-parent="#accordion">
                    <div class="card-body">
                        
                        <p class="card-text">{{ $task->description}}</p>     
                        <p class="card-text">
                            <small class="text-muted">Start date: {{ $task->start_date }}</small>
                        </p>     
                        <p class="card-text">
                            <small class="text-muted"> End date: {{$task->end_date}}</small>
                        </p>     

                        @if (Auth::user() != null)
                            @php
                                $taskEnable = true;   
                            @endphp
                            @foreach (Auth::user()->tasks as $userTask)
                                @if ($userTask->id == $task->id)
                                    @php
                                        $taskEnable = false;   
                                    @endphp
                                    @break
                                @endif
                            @endforeach
                            @if ($taskEnable)
                                <form action="{{ route('voluntary.subscribe',['id'=> $task->id]) }}" method="get">
                                    @csrf
                                    <input type="submit" value="Subscribe" name="submit" class="card-link btn-warning">
                                </form>
                            @else
                                <form action="{{ route('voluntary.unsubscribe',['id'=> $task->id]) }}" method="get">
                                    @csrf
                                    <input type="submit" value="Unsubscribe" name="submit" class="card-link btn-warning">
                                </form>

                           @endif
                        @endif
                    </div>
                    @if (Auth::user() != null && !$taskEnable)
                        <div class="card-footer">
                            <p class="card-text">
                                <small class="text-muted">You are already added to this task.</small>
                            </p>   
                        </div>
                    @endif
                  </div>
                </div>
            </div>
    @endforeach
    <div class="card-body d-flex justify-content-center">
        {{ $tasks->links() }}
    </div>
</article>
  @endsection
  @section('scripts')
  
  @endsection
