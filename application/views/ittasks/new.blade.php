@layout('layouts.default')

@section('content')
    <h1>Добавление новой задачи</h1>
    {{ render('common.user_errors_input') }}

    {{ Form::open('ittasks/create', 'POST') }}
    <p>
        {{ Form::label('name', 'Название задачи:') }}<br />
        {{ Form::text('name', Input::old('name')) }}
    </p>
    <p>
        {{ Form::label('descriptions', 'Описание проблемы:') }}<br />
        {{ Form::textarea('descriptions', Input::old('descriptions')) }}
    </p>
    <p>
        {{ Form::submit('Добавить задачу') }}
    </p>
    {{ Form::close() }}
@endsection