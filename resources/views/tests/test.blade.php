test<br>

{{--
$values は Controller から渡された変数。
Test::all() の結果（コレクション）を受け取っている。
--}}

@foreach ($values as $value)

{{-- 各レコードの id カラムを表示 --}}
{{ $value->id }}<br>
{{-- 各レコードの text カラムを表示 --}}
{{ $value->text }}<br>

@endforeach
