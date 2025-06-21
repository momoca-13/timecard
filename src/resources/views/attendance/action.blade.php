<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>出勤登録画面（一般ユーザー）</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <header class="top-header">
        <div class="top-header__logo">
            <img src="/storage/logo.svg" alt="coachtech">
        </div>

         <nav>
           <ul class="top-header__nav">
             <li class="top-header__list"><a href="http://localhost/attendance">勤怠</a></li>
             <li class="top-header__list"><a href="http://localhost/attendance/list">勤怠一覧</a></li>
             <li class="top-header__list"><a href="http://localhost/stamp_correction_request/list">申請</a></li>
               @if (Auth::check())
               <li class="top-header__list">
                 <form class="form" action="/logout" method="post">
                    @csrf
                    <button class="header-nav__button">ログアウト</button>
                 </form>
               @endif
            </ul>
          </nav>
     </header>
     <div class="display">
       <p class="status">{{ $display_status }}</p>
       <p class="date">{{$attendance_date}}({{$day_of_week}})</p>
       <p class="hour">{{$hour}}:{{$minute}}</p>
     </div>

      <form action="/attendance/break_start" method="POST">
      @csrf
      <button class="action-button" name="register" value="break_in">休憩開始</button>
    </form>

    <form action="/attendance/leave" method="POST">
      @csrf
      <button class="action-button" name="register" value="clock_out">退勤</button>
    </form>
  </main>
</body>
</html>