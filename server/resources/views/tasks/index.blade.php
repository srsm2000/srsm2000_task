<h1>タスク一覧</h1>
@foreach ($tasks as $task)
    <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
    <form action="/tasks/{{ $task->id }}" method="post" style="display: inline;">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        {{-- return falseはリンクに飛ばないようにしている --}}
    </form><br>
@endforeach
<hr>

<h1>新規タスク登録</h1>
@if (count($errors) > 0)
    <div>
        <P>
            <b>【エラー内容】</b>
        </P>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/tasks" method="post">
    @csrf
    <p>
        タイトル<br>
        <input type="text" name="title" value="{{ old('title') }}">
    </p>
    <p>
        内容<br>
        <textarea name="body"></textarea>
    </p>

    <input type="submit" value="Create Task">
</form>
