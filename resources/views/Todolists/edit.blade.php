@extends('layouts.app')

@section('content')

    <h1>id: {{ $todolist->id }} のToDo編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($todolist, ['route' => ['Todolists.update', $todolist->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content', 'ToDo:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection