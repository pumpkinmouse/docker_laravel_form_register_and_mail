"# docker_laravel_form_register_and_mail" 

フォームでユーザー登録、メール送信するためのサンプル  
.envファイルと作成して、メールの設定を行う必要がある  
  
  
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
