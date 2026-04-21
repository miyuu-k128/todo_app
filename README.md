# ToDoアプリ

## 📌 概要
Laravelを使用して作成したシンプルなToDoアプリです。  
タスクの追加・完了・削除といった基本的なCRUD機能を実装しています。

---

## 🛠️ 使用技術
- PHP（Laravel）
- MySQL
- Blade

---

## ✨ 機能一覧
- タスクの追加
- タスク一覧表示
- タスク完了機能
- タスク削除機能

---

## 💡 工夫した点
- シンプルな構成でCRUD処理を理解しやすく設計
- LaravelのMVC構造を意識して実装

---

## 🚀 セットアップ方法

```bash
git clone https://github.com/ユーザー名/todo-app.git
cd todo-app
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

---

## 📷 画面イメージ

![ToDo画面](./screenshot.png)


---
