@layout('layouts.default')

@section('content')
<table>
    <tbody>
    @foreach($my_ittasks as $one_ittask)
    <tr>
        <td>
            {{ HTML::link_to_route('ittask', $one_ittask->name, array($one_ittask->id)) }}
        </td>
        <td>
            <?php echo Str::limit($one_ittask->descriptions, 50);?>
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
            {{ Form::open('ittask/ch', 'POST') }}
            {{ Form::submit('Сделанно') }}
            {{ Form::hidden('i_done', $one_ittask->id) }}
            {{ Form::hidden('my', 'true') }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection