ファイル構成
	docker
		app
			Dockerrfile
			php.ini
		db
			Dockerfile
			my.cnf
			init
				sampleData.sql
		web
			Dockerfile
			default.conf
	src
		app
			以下laravelファイル

	docker-compose.yml
	.ignore
	.env

構成
	laravel
	nginx
	mysql


スタート手順
	環境の構築
	docker-compose build
	起動
	docker-compose up -d
	マイグレーション
	docker-compose exec app bash
		
		Dockerコンテナ内で
		cd app
		chmod -R 775 ./ ※　ログファイルの権限により起動できないため

		php artisan migrate

	この状態で localhost:8000　にアクセス

感想
docker-composeでの環境構築を行いました。
環境設定がうまくいかず、アプリ側に割く時間がすこし減ってしまいました。
メール送信などの設定もdockerだと勝手がちがい手間取りました。
とてもいい課題をいただけてよかったです。