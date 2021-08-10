<!DOCTYPE html>
<html>
<head>
    <style>

        .error_txt{
            display: block; color: #f00;
            font-size: 13px;
        }

        body,p,form,input{margin: 0}

        #form{
            width: 600px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #555;
        }

        form p{
            font-size: 14px;
            color:cornflowerblue;
        }

        .form-title{
            text-align: center;
            border-bottom: 1px solid #555;
            margin-bottom: 15px;
            color:cornflowerblue;
        }

        .row{
            margin-bottom: 10px;
        }
            
        .submit{
            text-align: right;
        }
    </style>
</head>
<body>
    <section>
        <div class="foundation-example__ex-wrapper">
            <div id="form">
                <div class="form-title"> 入力ページ</div>
                <form method="post">
                    @csrf
                    <div class="row">
                        <label>
                            <p>氏名（カナ）※姓と名の間をスペース一文字で区切って入力してください</p>
                            <input type="text" name="name" placeholder="タナカ タロウ" value="{{ old('name') }}">
                            @error('name')
                                @foreach($errors->get('name') as $message)
                                    <p class="error_txt">{{ $message }}</p>
                                @endforeach
                            @enderror
                        </label>
                    </div>
                    <div class="row">
                        <label>
                            <p>メールアドレス</p>
                            <input type="text" name="email" placeholder="abc123@email.com" value="{{ old('email')}}">
                            @error('email')
                                @foreach($errors->get('email') as $message)
                                    <p class="error_txt">{{ $message }}</p>
                                @endforeach
                            @enderror
                        </label>
                    </div>
                    <div class="row">
                        <input type="submit" value="確認">
                        <input type="reset" value="リセット">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>