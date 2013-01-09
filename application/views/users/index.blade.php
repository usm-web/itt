@layout('layouts.default')


@section('content')
    <h1>Пользователи системы</h1>
    <table>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    {{ HTML::link_to_route('user', $user->name, array($user->id)) }}</td>
                <td>
                    {{ $user->phone }}</td>
                <td>
                    {{ $user->mobile_phone }}</td>
                <td>
                    {{ $user->room }}</td>
                <td>
                    {{ $user->position }}</td>
                @if(Auth::user()->is_admin==1)
                    <td>
                        {{ Form::open('user/delete', 'DELETE') }}
                        {{ Form::hidden('id', $user->id) }}
                        {{ Form::submit('Удалить') }}
                        {{ Form::close() }}</td>
                    <td>
                        {{ HTML::link_to_route('edit_user', 'Изменить', array($user->id)) }}
                    </td>
                @endif
            </tr>

        @endforeach
        </tbody>
    </table>
    @if(Auth::user()->is_admin==1)
        <p>{{ HTML::link_to_route('new_user', 'Создать пользователя') }}</p>
    @endif
@endsection

