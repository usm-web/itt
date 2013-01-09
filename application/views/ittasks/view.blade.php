@layout('layouts.default')

@section('content')
    <h2>{{ $ittask->name }}</h2>
    <p>Описание:<br />{{ $ittask->descriptions }}</p>
    <p>Задание от:{{ $ittask->user->name }}</p>
    <p>Задание создано:{{ $ittask->created_at }}</p>
    <p>Крайний срок:{{ $ittask->dead_line }}</p>
    @if(isset($ittask->user_work()->first()->name))
        <p>Выполняет:{{ $ittask->user_work()->first()->name }}</p>
            @if($ittask->user_work()->first()->id==Auth::user()->id)
            <p> {{ Form::open('ittask/ch', 'POST') }}
                {{ Form::label('realization_way', 'Путь решения:') }}<br />
                {{ Form::textarea('realization_way') }}<br />
                {{ Form::submit('Сделанно') }}
                {{ Form::hidden('i_done', $ittask->id) }}
                {{ Form::hidden('my', 'true') }}
                {{ Form::close() }}</p>
            @endif
    @endif


@endsection