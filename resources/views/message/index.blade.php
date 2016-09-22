@extends('templates.default')

@section('content')
 <!-- Timeline statuses and replies -->
<div class="row">
    @if(!$messages->count())
    <div class="col-lg-5">
        <form role="form" action="{{route('message.post')}}" method="post">
            <div class="form-group{{$errors->has('message') ? ' has-error' : ''}}">
                <textarea placeholder="Type message" name="message" class="form-control" rows="2"></textarea>
                @if($errors->has('message'))
                 <span class="help-block">{{$errors->first('message')}}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-default">Send</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
        <hr>
    </div>
    @endif
</div>

<div class="row">
    <div class="col-lg-6">
        <!-- Timeline statuses and replies -->
       @if(!$messages->count())
          <p>You have no message with the user yet.</p>
         @else
         @foreach ($messages as $message)
           <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" alt="{{$message->user->getNameOrUsername()}}" src="{{$message->user->getAvatarUrl()}}">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><a href="{{route('profile.index', [$message->user->username])}}">{{$message->user->getNameOrUsername()}}</a></h4>
                    <p>{{$message->body}}</p>
                    <ul class="list-inline">
                      <li>{{$message->created_at->diffForHumans()}}</li>
                    </ul>

                    @foreach($message->replies as $reply)
                        <div class="media">
                            <a class="pull-left" href="{{ route('profile.index', ['username' => $reply->user->username])}}">
                                <img class="media-object" alt="{{$reply->user->getNameOrUsername()}}" src="{{$reply->user->getAvatarUrl()}}">
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading"><a href="{{ route('profile.index', ['username' => $reply->user->username])}}">{{$reply->user->getNameOrUsername()}}</a></h5>
                                <p>{{$reply->body}}</p>
                                <ul class="list-inline">
                                    <li>{{$reply->created_at->diffForHumans()}}</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach

                       <form role="form" action="{{route('message.reply', ['messageId'=>$message->id])}}" method="post">
                            <div class="form-group{{$errors->has("reply-{$message->id}") ? ' has-error': ''}}">
                                <textarea name="reply-{{$message->id}}" class="form-control" rows="2" placeholder="Reply to this message"></textarea>
                                @if($errors->has("reply-{$message->id}"))
                                <span class="help-block">{{ $errors->first("reply-{$message->id}")}}</span>
                                @endif
                            </div>
                            <input type="submit" value="Reply" class="btn btn-default btn-sm">
                            <input type="hidden" name="_token" value="{{Session::token()}}">
                        </form>
                </div>
            </div>
        @endforeach
         {!! $messages->render() !!}
        @endif
    </div>
</div>
@stop