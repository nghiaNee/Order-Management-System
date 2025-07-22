
---

## 📄 `README.md`

````markdown
# 🧾 Order Management System

Hệ thống quản lý đơn hàng được phát triển với Laravel và kiến trúc Clean Architecture, áp dụng các nguyên lý DDD, RESTful API, Swagger UI.

---

## 🚀 Tính năng chính

- Quản lý sản phẩm: tạo, truy xuất danh sách sản phẩm
- Quản lý đơn hàng: tạo đơn hàng, tính tổng tiền, VAT, tổng thanh toán
- API RESTful chuẩn
- Swagger UI cho tài liệu API
- Lọc đơn hàng theo ngày
- Áp dụng Clean Architecture & DDD

---

## 🛠️ Công nghệ sử dụng

| Thành phần             | Công nghệ                     |
|------------------------|-------------------------------|
| Backend                | Laravel >= 10.x               |
| ORM                    | Eloquent (Laravel ORM)        |
| DBMS                   | MySQL / SQLite                |
| API Docs               | Swagger UI (L5 Swagger)       |
| Validation             | Laravel + Validator           |
| Kiến trúc              | Clean Architecture + DDD      |
| RESTful API            | ✅                             |

---

## ⚙️ Yêu cầu hệ thống

- PHP >= 8.1
- Composer >= 2.x
- Laravel >= 10.x
- Node.js + NPM (nếu có front-end)
- MySQL / SQLite

---

## 🧪 Cài đặt & Chạy dự án

### 1. Clone Project

```bash
git clone https://github.com/nghiaNee/Order-Management-System.git
cd Order-Management-System
````

### 2. Cài đặt Laravel Packages

```bash
composer install
```

### 3. Tạo file `.env`

```bash
cp .env.example .env
```

Cấu hình `.env` cho database (MySQL):

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=order_management
DB_USERNAME=root
DB_PASSWORD=
```

Hoặc dùng SQLite:

```
touch database/database.sqlite
```

```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite
```

### 4. Tạo APP Key

```bash
php artisan key:generate
```

### 5. Migration + Seed (nếu có)

```bash
php artisan migrate
php artisan db:seed # nếu có dữ liệu mẫu
```

### 6. Chạy Server

```bash
php artisan serve
```

Truy cập tại: [http://localhost:8000](http://localhost:8000)

---

## 📘 API Endpoints

### 🔹 Product APIs

| Method | Endpoint      | Mô tả                  |
| ------ | ------------- | ---------------------- |
| POST   | /api/products | Tạo sản phẩm mới       |
| GET    | /api/products | Lấy danh sách sản phẩm |

### 🔹 Order APIs

| Method | Endpoint         | Mô tả                      |
| ------ | ---------------- | -------------------------- |
| POST   | /api/orders      | Tạo đơn hàng mới           |
| GET    | /api/orders      | Lọc đơn hàng theo ngày tạo |
| GET    | /api/orders/{id} | Chi tiết đơn hàng          |

---

## 📑 Swagger (API Documentation)

Truy cập tài liệu API:

```
http://localhost:8000/api/documentation
```

---

## 🗂 ERD (Sơ đồ cơ sở dữ liệu)

> Đính kèm trong thư mục `docs/erd.png` (nếu có)

* **products**
* **orders**
* **order\_items**

---

## 📦 Bonus Features (tuỳ chọn)

* [x] Swagger UI
* [ ] Docker Compose
* [ ] Unit Test
* [ ] CQRS với MediatR (nếu dùng .NET)
* [ ] AutoMapper hoặc tương tự (MapStruct)



```

---

```
