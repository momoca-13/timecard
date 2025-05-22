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
            <ul class="header-nav">
                @if (Auth::check())
                <li class="header-nav__item">
                <form class="form" action="/logout" method="post">
                    @csrf
                  <button class="header-nav__button">ログアウト</button>
                </form>
                </li>
                <li class="header-nav__item">
                <a class="header-nav__link" href="/mypage">マイページ</a>
              </li>
                @endif
            </ul>
          </nav>
     </header>

     
</body>
</html>