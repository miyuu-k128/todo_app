# ToDoアプリ

## 📌 概要
Laravelを使用して作成したシンプルなToDoアプリです。  
タスクの追加・完了・削除といった基本的なCRUD機能を実装しています。

---

## 🛠️ 使用技術
- PHP（Laravel）
- SQLite (または MySQL)
- Blade
- Tailwind CSS

---

## ✨ 機能一覧
- タスクの追加
- タスク一覧表示
- タスク完了機能
- タスク削除機能
- ユーザー登録・ログイン機能

---

## 💡 工夫した点
- シンプルな構成でCRUD処理を理解しやすく設計
- LaravelのMVC構造を意識して実装

---

## 🚀 セットアップ方法

ローカル環境でこのアプリを動かすための手順です。

```bash
# 1. リポジトリをクローン
git clone https://github.com/miyuu-k128/todo_app.git
cd todo_app

# 2. PHPのパッケージをインストール
composer install

# 3. 環境変数ファイルを作成
cp .env.example .env

# 4. アプリケーションキーを生成
php artisan key:generate

# 5. フロントエンドのパッケージをインストールし、ビルド
npm install
npm run build

# 6. データベースのマイグレーションを実行（SQLiteファイルが自動生成されます）
php artisan migrate

# 7. ローカルサーバーを起動
php artisan serve
```

サーバー起動後、ブラウザで `http://localhost:8000` にアクセスしてください。

---

## 📷 画面イメージ

![ToDo画面](./screenshot.png)

---
