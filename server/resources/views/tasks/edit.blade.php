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

<h1>タスク更新</h1>
<!--更新先はtasksのidにしないと増える php artisan rote:listで確認①-->
<form action="/tasks/{{ $task->id }}" method="post">
    @csrf
    <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
    @method('PUT')
    <!-- idはそのまま -->
    <input type="hidden" name="id" value="{{ $task->id }}">
    <p>
        タイトル<br>
        <input type=" text" name="title" value="{{ $task->title }}">
    </p>
    <p>
        内容<br>
        <textarea name="body">"{{ $task->body }}"</textarea>
    </p>
    <input type="submit" value="更新">
</form>