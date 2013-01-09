@layout('layouts.default')

@section('content')
    <h1>Изменение {{ $user->name }}</h1>

    {{ render('common.user_errors_input') }}

    {{Form::open('user/update', 'PUT')}}

        <p>
            {{ Form::label('name','ФИО:') }}<br />
            {{ Form::text('name', $user->name) }}
        </p>
        <p>
            {{ Form::label('login','Логин:') }}<br />
            {{ Form::text('login', $user->username) }}
        </p>
        <p>
            {{ Form::label('pass','Пароль:') }}<br />
            {{ Form::password('pass') }}
        </p>
        <p>
            {{ Form::label('pass_repeat','Повторите пароль:') }}<br />
            {{ Form::password('pass_repeat') }}
        </p>
        <p>
            {{ Form::label('note','Описание:') }}<br />
            {{ Form::textarea('note', $user->note) }}
        </p>
        <p>
            {{ Form::label('phone','Внутренний телефон:') }}<br />
            {{ Form::text('phone', $user->phone) }}
        </p>
        <p>
            {{ Form::label('mobile_phone','Сотовый телефон:') }}<br />
            {{ Form::text('mobile_phone', $user->mobile_phone) }}
        </p>
        <p>
            {{ Form::label('room','Кабинет:') }}<br />
            {{ Form::text('room', $user->room) }}
        </p>
        <p>
            {{ Form::label('position','Должность:') }}<br />
            {{ Form::text('position', $user->position) }}
        </p>
        <p>
<table>
    <tbody>
    <tr><td></td><td>User:</td></tr>
    @foreach($acls as $acl)
        @if($user->roles()->first()->id==$acl->id)
            <tr><td>{{ $acl->note }}:</td><td>{{ Form::radio('user', $acl->id, 'true')}}</td></tr>
        @else
            <tr><td>{{ $acl->note }}:</td><td>{{ Form::radio('user', $acl->id)}}</td></tr>
        @endif
    @endforeach
    </tbody>
</table>
        </p>
        {{ Form::hidden('id', $user->id) }}

        <p>{{ Form::submit('Изменить') }}</p>

    {{ Form::close() }}

@endsection