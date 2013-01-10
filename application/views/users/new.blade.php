@layout('layouts.default')

@section('content')
    <h1>Добавление нового пользователя</h1>
    {{ render('common.user_errors_input') }}

    {{ Form::open('users/create', 'POST') }}
    <p>
        {{ Form::label('name', 'ФИО:') }}<br />
        {{ Form::text('name', Input::old('name')) }}
    </p>
    <p>
        {{ Form::label('login', 'Логин:') }}<br />
        {{ Form::text('login', Input::old('login')) }}
    </p>
    <p>
        {{ Form::label('pass', 'Пароль:') }}<br />
        {{ Form::password('pass') }}
    </p>
    <p>
        {{ Form::label('pass_repeat', 'Повторно пароль:') }}<br />
        {{ Form::password('pass_repeat') }}
    </p>
    <p>
        {{ Form::label('note', 'Описание:') }}<br />
        {{ Form::textarea('note', Input::old('note')) }}
    </p>
    <p>
        {{ Form::label('phone', 'Внутренний телефон:') }}<br />
        {{ Form::text('phone', Input::old('phone')) }}
    </p>
    <p>
        {{ Form::label('mobile_phone', 'Сотовый телефон:') }}<br />
        {{ Form::text('mobile_phone', Input::old('mobile_phone')) }}
    </p>
    <p>
        {{ Form::label('room', 'Кабинет:') }}<br />
        {{ Form::text('room', Input::old('room')) }}
    </p>
    <p>
        {{ Form::label('position', 'Должность') }}<br />
        {{ Form::text('position', Input::old('position')) }}
    </p>
        <table>
            <tbody>
            <tr><td></td><td>User:</td></tr>
            @foreach($acls as $acl)
                @if($acl->id==1)
                    <tr><td>{{ $acl->note }}:</td><td>{{ Form::radio('user', $acl->id, 'true')}}</td></tr>
                @else
                    <tr><td>{{ $acl->note }}:</td><td>{{ Form::radio('user', $acl->id)}}</td></tr>
                @endif
            @endforeach
            <!--tr>
                <td>
                </td>
                <td>
                    User
                </td>
            </tr>
            <tr>
                <td>
                    ----:
                </td>
                <td>
                    {{ Form::radio('user','1', 'true') }}
                </td>
            </tr>
            <tr>
                <td>
                    R---:
                </td>
                <td>
                    {{ Form::radio('user','2') }}
                </td>
            </tr>
            <tr>
                <td>
                    RC--:
                </td>
                <td>
                    {{ Form::radio('user','3') }}
                </td>
            </tr>
            <tr>
                <td>
                    RCE-:
                </td>
                <td>
                    {{ Form::radio('user','4') }}
                </td>
            </tr>
            <tr>
                <td>
                    RCED:
                </td>
                <td>
                    {{ Form::radio('user','5') }}
                </td>
            </tr!-->
            </tbody>
        </table>
    <p>
        {{ Form::submit('Добавить пользователя') }}
    </p>
    {{ Form::close() }}
@endsection