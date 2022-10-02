@extends('layouts.app')

@section('content')

<h1>ToDo一覧</h1>

    @if (count($todolists) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ToDo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todolists as $todolist)
                <tr>
                    <td>{{ $todolist->id }}</td>
                    <td>{{ $todolist->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- ToDo作成ページへのリンク --}}
    {!! link_to_route('Todolists.create', '新規ToDoの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection