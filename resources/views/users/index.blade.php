Users

================


@foreach ($users as $user)
    <a href="#/">{{ $user->name }}</a>
@endforeach
