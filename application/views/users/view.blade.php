@layout('layouts.default')

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->username }}</p>
    <p>{{ $user->note }}</p>
    <p>{{ $user->phone }}</p>
    <p>{{ $user->mobile_phone }}</p>
    <p>{{ $user->room }}</p>
    <p>{{ $user->position }}</p>


@endsection