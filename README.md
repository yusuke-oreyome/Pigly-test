# Pigly

## 環境構築
**Dockerビルド**
1. `git clone git@github.com:git@github.com:Estra-Coachtech/coachtech-Checktest-mogitate.git
2. cd coachtech-Checktest-mogitate
3. DockerDesktopアプリを立ち上げる
4. `docker-compose up -d --build`
5. マイグレーションの実行
``` bash
php artisan migrate
```
7. シーディングの実行
``` bash
php artisan db:seed
```

## 使用技術(実行環境)
- PHP8.3.0
- Laravel8.83.27
- MySQL8.0.26


## ER図

## URL
- 開発環境：http://localhost/
- phpMyAdmin:：http://localhost:8080/
