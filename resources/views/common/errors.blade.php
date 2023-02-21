@if (count($errors) > 0)
    <div class="alert alert-danger">
        <div><strong>入力した文字を修正してください。</strong></div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
