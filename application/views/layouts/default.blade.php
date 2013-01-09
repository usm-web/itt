<!DOCTYPE html>
<html>
<head>
    <title>
        {{ $title }}
    </title>
</head>
<body>
    {{ Auth::user()->name }}
    <ul>
        <li>
            {{ HTML::link_to_route('main', 'Главная') }}
        </li>
        <li>
            {{ HTML::link_to_route('users', 'Пользователи') }}
        </li>
        <li>
            {{ HTML::link_to_route('new_ittask', 'Озадачить ИТ') }}
        </li>
        @if(Auth::user()->is_admin)
            <li>
                {{ HTML::link_to_route('list_ittask', 'Список задач') }}
            </li>
            <li>
                {{ HTML::link_to_route('my_ittask', 'Мои задачи') }}
            </li>
        @endif
        <li>
            {{ HTML::link_to_route('logout', 'Выход') }}
        </li>
    </ul>
    @if(Session::has('message_sys'))
        <p>{{ Session::get('message_sys') }}</p>
    @endif
    @yield('content')
</body>
</html>


