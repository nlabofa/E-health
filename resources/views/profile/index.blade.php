@extends('templates.default')

@section('content')

@if ($user->is_doctor==true)
    	<div class="row">
            <div class="col-lg-5">
                @include('user.partials.userblock')
                <hr>
            </div>
            <div class="col-lg-4 col-lg-offset-3">
            @if(Auth::user()->hasFriendRequestPending($user))
            <p>Waiting for {{$user->getNameOrUsername()}} to accept your request.</p>
            @elseif(Auth::user()->isFriendsWith($user))
            <p>{{$user->getNameOrUsername()}} is already your doctor.</p>
            <a href="{{route('message.index')}}" class="btn btn-primary">Send message</a></br>
            <form action="{{route('friend.delete', ['username'=> $user->username])}}" method="post">
                <input type="submit" value="Delete doctor" class="btn btn-danger">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>
            @elseif(Auth::user()->is_doctor==true && $user->is_doctor==true)
            <p>sorry,you cannot send request to fellow doctor</p>
            @elseif(Auth::user()->id !== $user->id)
            <a href="{{ route('friend.add', ['username' => $user->username])}}" class="btn btn-primary">Add as friend</a>
            @endif
            <h4>{{$user->getFirstNameOrUsername()}}'s Patients</h4>
                  @if(!$user->friends()->count())
                       <p>{{$user->getFirstNameOrUsername()}} has no patient.</p>
                       @else
                           @foreach ($user->friends() as $user)
                              @include ('user/partials/userblock')
                           @endforeach

                   @endif
            </div>
        </div>
        @else

        <div class="row">
            <div class="col-lg-5">
                @include('user.partials.userblock')
                <hr>
            </div>
            <div class="col-lg-4 col-lg-offset-3">
            @if(Auth::user()->hasFriendRequestPending($user))
            <p>Waiting for {{$user->getNameOrUsername()}} to accept your request.</p>
            @elseif (Auth::user()->hasFriendRequestReceived($user))
            <a href="{{route('friend.accept', ['username'=> $user->username])}}" class="btn btn-primary">Accept request</a>
            @elseif(Auth::user()->isFriendsWith($user))
            <p>{{$user->getNameOrUsername()}} is already your patient.</p>
            <a href="{{route('message.index')}}" class="btn btn-primary">Send message</a></br>
            <a href="{{route('record.index')}}" class="btn btn-info">Edit record</a></br>
            <form action="{{route('friend.delete', ['username'=> $user->username])}}" method="post">
                <input type="submit" value="Delete patient" class="btn btn-danger">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>
            @endif
                <h4>{{$user->getFirstNameOrUsername()}}'s Doctors</h4>
                 @if(!$user->friends()->count())
                       <p>{{$user->getFirstNameOrUsername()}} has no doctor.</p>
                       @else
                           @foreach ($user->friends() as $user)
                              @include ('user/partials/userblock')
                           @endforeach

                   @endif
            </div>
        </div>

@endif


@stop