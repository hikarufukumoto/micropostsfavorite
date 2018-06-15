@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favoriting($user->id))
        {!! Form::open(['route' => ['micropost.unfavorite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-warning	btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['micropost.favorite', $user->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-info btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif