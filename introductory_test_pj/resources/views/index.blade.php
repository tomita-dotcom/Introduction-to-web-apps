<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="container">
    <div class="card">
      <h1>Todo List</h1>
      <div class="todo">
        <form action="/todo/store" method="post" class="flex between mb-30">
          @csrf
          <input type="text" class="input-add" name="content">
          <input class="butoon-add" type="submit" value="追加">
        </form>
        <table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
            @foreach ($todos as $todo)
            <tr>
              <td>{{$todo->created_at}}</td>
              <td>
                <form action="/todo/update"  method="POST">@csrf
                <input type="text" class="input-update" name="content"  value="{{$todo->content}}">
                </form>
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
              <td>
                <form action="/todo/delete"  method="POST">
                  @csrf
                  <button class="button-delete">削除</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>