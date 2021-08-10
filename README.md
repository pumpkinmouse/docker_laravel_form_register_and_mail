"# docker_laravel_form_register_and_mail" 

個人的にフォームでユーザー登録、メール送信するためのサンプル  
.envファイルを作成して、メールの設定を行う必要がある。  

.envファイルのサンプル
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

MAIL_DRIVER=sendmail
MAIL_HOST= smtp.gmail.com
MAIL_PORT= 587
MAIL_USERNAME= examplemail@gmail.com
MAIL_PASSWORD= xxxxxxx
MAIL_FROM_ADDRESS= examplemail@gmail.com
MAIL_FROM_NAME="deamon"
MAIL_ENCRYPTION=tls
```

**■スタート手順**  
	環境の構築  

```
docker-compose build
```

起動  
```  
docker-compose up -d  
```  
マイグレーション  
```  
docker-compose exec app bash  
```  
Dockerコンテナ内で  

```  
php artisan migrate  
```  
  
この状態で localhost:8000/register　にアクセス  
