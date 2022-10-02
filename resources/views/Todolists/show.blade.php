@extends('layouts.app')

@section('content')

    <h1>id = {{ $todolist->id }} のToDo詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $todolist->id }}</td>
        </tr>
        @foreach ($Todolists as $todolist)
            <tr>
                {{-- ToDo詳細ページへのリンク --}}
                <td>{!! link_to_route('Todolists.show', $todolist->id, ['todolist' => $todolist->id]) !!}</td>
                <td>{{ $todolist->content }}</td>
            </tr>
        @endforeach
    </table>
    
    {{-- ToDo編集ページへのリンク --}}
    {!! link_to_route('Todolists.edit', 'このToDoを編集', ['todolist' => $todolist->id], ['class' => 'btn btn-light']) !!}
    
    {{-- ToDo削除フォーム --}}
    {!! Form::model($todolist, ['route' => ['Todolists.destroy', $todolist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection