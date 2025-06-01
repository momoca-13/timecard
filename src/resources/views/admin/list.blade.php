<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>勤怠一覧画面（管理者）</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
</head>
<body>
    <header class="top-header">
        <div class="top-header__logo">
            <img src="/storage/logo.svg" alt="coachtech">
        </div>
    <nav>
        <ul class="top-header__nav">
         <li class="top-header__list"><a href="http://localhost/admin/attendance/list">勤怠一覧</a></li>
         <li class="top-header__list"><a href="http://localhost/admin/staff/list">スタッフ一覧</a></li>
         <li class="top-header__list"><a href="http://localhost/stamp_correction_request/list">申請一覧</a></li>
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
   
</body>
</html>