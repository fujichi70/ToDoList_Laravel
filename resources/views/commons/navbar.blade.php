<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">TodolistBoard</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                {{-- ToDo作成ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('Todolists.create', '新規ToDoの投稿', [], ['class' => 'nav-link']) !!}</li>
            </ul>
        </div>
    </nav>
</header>