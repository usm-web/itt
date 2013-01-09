
<!DOCTYPE html>
<html>
<head>
    <title>
        УСМ-администратор
    </title>
</head>
<body>
    @if(Session::has('message_sys'))
        <p>{{ Session::get('message_sys') }}</p>
    @endif
    {{ Form::open('authorization') }}
    {{ Form::label('login', 'Логин:') }}
    {{ Form::text('login', Input::old('login')) }}<br />
    {{ Form::label('pass', 'Пароль:') }}
    {{ Form::password('pass') }}<br />
    {{ Form::submit('Вход') }}
    {{ Form::close() }}
</body>
</html>