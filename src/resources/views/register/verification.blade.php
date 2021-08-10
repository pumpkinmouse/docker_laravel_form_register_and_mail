<!DOCTYPE html>
<html>
<head>
    <style>
        #form{
            width: 600px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #555;
        }
        .form-title{
            text-align: center;
            border-bottom: 1px solid #555;
            margin-bottom: 15px;
            color:cornflowerblue;
        }
        .link{
            padding: 0px 5px;
            display: inline-block;
            border: 1px solid #555;
            font-style: normal;
            text-decoration: none;
            color:#555;
        }
        dl{
           font-size: 14px;
        }
        dt{
            color:cornflowerblue;
        }
        dd{
            margin-inline-start: 0px;
        }
    </style>
</head>
<body>
    <section>
        <div id="form">
            <div class="form-title">確認ページ</div>
            <form action="{{ route('finish') }}" method="post">
                @csrf
                <div class="row">
                    <dl>
                        <dt>氏名</dt>
                        <dd>{{ $name }}</dd>
                    </dl>
                    <dl>
                        <dt>メールアドレス</dt>
                        <dd>{{ $email }}</dd>
                    </dl>
                <div class="row">
                    <input type="hidden" name="name" value="{{ $name }}">
                    <input type="hidden" name="email" value="{{ $email }}">
                    <input type="submit" value="完了">
                    <a class="link" href="{{ route('input') }}">修正</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>