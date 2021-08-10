"# docker_laravel_form_register_and_mail" 

■ファイル構成
	docker
		app
			Dockerrfile
			php.ini
		db
			Dockerfile
			my.cnf
			init
				sampleData.sql DBの初期のSQLファイルです。
		web
			Dockerfile
			default.conf
	src
		app
			以下laravelファイル

	docker-compose.yml
	.ignore
	.env

■構成
	laravel
	nginx
	mysql


■スタート手順
	環境の構築
	docker-compose build
	起動
	docker-compose up -d
	マイグレーション
	docker-compose exec app bash
		
		Dockerコンテナ内で
		php artisan migrate

	この状態で localhost:8000/register　にアクセス
