@if($errors->has())
    <ul>
        {{ $errors->first('pass','<li>:message</li>') }}
        {{ $errors->first('name','<li>:message</li>') }}
        {{ $errors->first('login','<li>:message</li>') }}
    </ul>

@endif