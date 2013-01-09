@layout('layouts.default')

@section('content')
    <table>
        <tbody>
        @foreach($all_ittasks as $one_ittask)
            <tr>
                <td>
                    {{ Form::open('ittask/ch', 'POST') }}
                    {{ Form::submit('Взять') }}
                    {{ Form::hidden('i_will_do', $one_ittask->id) }}
                    {{ Form::close() }}
                </td>
                <td>
                    {{ HTML::link_to_route('ittask', $one_ittask->name, array($one_ittask->id)) }}
                </td>
                <td>
                    {{  Str::limit($one_ittask->descriptions, 50) }}
                </td>
                <td>
                    {{ $one_ittask->user->name }}
                </td>
                <td>
                    {{ $one_ittask->dead_line }}
                </td>
                <td>
                    {{ $one_ittask->created_at }}
                </td>
                <td>
                    @if(isset($one_ittask->user_work()->first()->name))
                        {{ $one_ittask->user_work()->first()->name }}
                    @endif
                </td>
                <td>
                    {{ Form::open('ittask/ch', 'POST') }}
                    {{ Form::submit('Сделанно') }}
                    {{ Form::hidden('i_done', $one_ittask->id) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection