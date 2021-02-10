@extends('layouts.main')

@section('content')

<a
href="{{ route('tv.show', '94796') }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
>愛の不時着</a>

<a
href="{{ route('tv.show', '96162') }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
>梨泰院クラス</a>

@endsection