<p>
    <b>【タイトル】<br>{{ $task->title }}</b>
</p>
<p>
    <b>【内容】<br>{{ $task->body }}</b>
</p>

<!-- 商品のidを元に編集ページへ遷移する -->
<a href="/tasks"><button>一覧へ戻る</button></a>
<a href="/tasks/{{ $task->id }}/edit"><button>編集する</button></a>
<form action="/tasks/{{ $task->id }}" method="post" style="display: inline;">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    {{-- return falseはリンクに飛ばないようにしている --}}
</form>
