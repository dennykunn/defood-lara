# 🍔 Defood — Restaurant & Food Delivery

Defood adalah aplikasi web restoran dan food delivery yang dibangun menggunakan **Laravel 10**. Aplikasi ini memiliki dua sisi utama: **halaman publik** untuk pelanggan (melihat menu, cart, wishlist, checkout, dan riwayat pesanan) serta **panel admin (CMS)** untuk mengelola menu, kategori, tipe, cuisine, dan manajemen pengguna. Defood dibuat untuk menyelesaikan tugas akhir pada mata kuliah Web Dinamis di Universitas Muhammadiyah Riau. 

---

## Tech Stack

### Backend

| Teknologi                 | Versi  |
| ------------------------- | ------ |
| PHP                       | ^8.1   |
| Laravel                   | ^10.10 |
| Livewire                  | \*     |
| Laravel Sanctum           | ^3.2   |
| Rappasoft Livewire Tables | ^2.15  |

### Frontend

| Teknologi    | Versi |
| ------------ | ----- |
| Vite         | ^4.0  |
| Tailwind CSS | ^3.3  |
| PostCSS      | ^8.4  |
| Preline UI   | ^1.9  |
| Axios        | ^1.1  |

### Aset Statis (CDN / Bundle)

- **Font Awesome** — Icon library
- **Themify Icons** — Icon library tambahan
- **AOS** — Animate on Scroll
- **Flowbite** — Komponen UI Tailwind
- **Swiper** — Slider/carousel

### Database

- **MySQL** (default)

---

## Fitur Utama

### Sisi Pelanggan (Public)

- **Home** — Landing page dengan menu musiman dan menu unggulan
- **Menu** — Daftar menu dengan filter (Livewire) berdasarkan kategori, tipe, dan cuisine
- **Detail Menu** — Halaman detail produk berdasarkan slug
- **Cart** — Keranjang belanja
- **Wishlist** — Simpan menu favorit
- **Checkout & Payment** — Proses pemesanan
- **History** — Riwayat pesanan
- **About, Contact, Blog** — Halaman informasi

### Sisi Admin (CMS)

- **Dashboard** — Ringkasan data
- **Manajemen Menu** — CRUD menu (create, list, edit, update)
- **Manajemen Tipe Menu** — CRUD tipe (food, drink, dessert)
- **Manajemen Kategori** — CRUD kategori (burger, pizza, taco, dll.)
- **Manajemen Cuisine** — CRUD cuisine (American, Chinese, French, dll.)
- **Manajemen User** — Kelola data admin dan customer

---

## Struktur Database

| Tabel            | Deskripsi                                                                      |
| ---------------- | ------------------------------------------------------------------------------ |
| `users`          | Data pelanggan (nama, email, password, telepon, alamat)                        |
| `admins`         | Data admin untuk akses CMS                                                     |
| `menus`          | Data menu (nama, slug, gambar, harga, diskon, relasi ke category/cuisine/type) |
| `category_menus` | Kategori menu (burger, pizza, dll.)                                            |
| `type_menus`     | Tipe menu (food, drink, dessert)                                               |
| `cuisines`       | Jenis masakan (American, Chinese, dll.)                                        |
| `seasonal_menus` | Menu musiman                                                                   |
| `carts`          | Keranjang belanja pelanggan                                                    |
| `wishlists`      | Wishlist pelanggan                                                             |
| `orders`         | Data pesanan                                                                   |

---

## Autentikasi

Aplikasi menggunakan **dual-guard authentication** berbasis session:

- **Guard `web`** — Untuk pelanggan (model `User`)
- **Guard `admin`** — Untuk admin CMS (model `Admin`)

Autentikasi menggunakan form custom (bukan Laravel Breeze/Jetstream/Fortify).

---

## Prasyarat

Pastikan sistem kamu sudah memiliki:

- **PHP** >= 8.1
- **Composer** >= 2.x
- **Node.js** >= 16.x dan **NPM**
- **MySQL** >= 5.7 atau **MariaDB** >= 10.3
- Ekstensi PHP yang dibutuhkan Laravel 10 (`openssl`, `pdo`, `mbstring`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`)

---

## Instalasi

### 1. Clone Repository

```bash
git clone <repository-url> defood-lara
cd defood-lara
```

### 2. Install Dependensi

```bash
composer install
npm install
```

### 3. Konfigurasi Environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit file `.env` dan sesuaikan konfigurasi database:

```env
APP_NAME=Defood
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=defood
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Setup Database

```bash
php artisan migrate
php artisan db:seed
```

Seeder akan mengisi data awal:

- **6 Cuisine** — American, Chinese, French, Indian, Italian, Japanese
- **3 Tipe Menu** — Food, Drink, Dessert
- **10 Kategori** — Burger, Taco, Pizza, dll.
- **6 Menu Musiman**
- **~10 Menu Contoh** dengan gambar
- **2 Akun Admin**

### 5. Storage Link

```bash
php artisan storage:link
```

### 6. Build Frontend Assets

Development:

```bash
npm run dev
```

Production:

```bash
npm run build
```

### 7. Jalankan Server

```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`.

---

## Akun Default

Setelah menjalankan seeder, akun berikut tersedia:

### Admin

| Email                 | Password   |
| --------------------- | ---------- |
| `admin@defood.com`    | `admin123` |
| `dennykunn@gmail.com` | `denny123` |

### Pelanggan

Silakan register melalui halaman `/register`.

---

## URL Penting

| Halaman            | URL                |
| ------------------ | ------------------ |
| Home               | `/`                |
| Menu               | `/menu`            |
| Login Pelanggan    | `/login`           |
| Register Pelanggan | `/register`        |
| Cart               | `/cart`            |
| Wishlist           | `/wishlist`        |
| Login Admin        | `/admin/login`     |
| Dashboard Admin    | `/admin/dashboard` |

---

## Struktur Project

```
defood-lara/
├── app/
│   ├── Http/
│   │   ├── Controllers/        # Controller utama
│   │   ├── Livewire/           # Komponen Livewire (tabel, filter)
│   │   └── Middleware/          # AdminMiddleware, UserMiddleware
│   └── Models/                 # Eloquent Models
├── database/
│   ├── migrations/             # Schema database
│   └── seeders/                # Data awal (menu, kategori, admin, dll.)
├── public/
│   └── assets/                 # Aset statis (CSS, JS, gambar, font)
├── resources/
│   ├── css/                    # Tailwind CSS source
│   ├── js/                     # JavaScript source (app.js, cms.js, dll.)
│   └── views/
│       ├── layouts/
│       │   ├── admin/          # Layout CMS
│       │   ├── authentication/ # Layout halaman auth
│       │   ├── errors/         # Layout halaman error
│       │   └── simple/         # Layout halaman publik
│       ├── admin/              # View panel admin
│       ├── authentication/     # View login/register
│       ├── livewire/           # View komponen Livewire
│       └── ...                 # View halaman publik
├── routes/
│   ├── web.php                 # Route utama aplikasi
│   └── api.php                 # Route API (Sanctum)
├── .env.example                # Template environment
├── composer.json               # Dependensi PHP
├── package.json                # Dependensi Node.js
├── tailwind.config.js          # Konfigurasi Tailwind CSS
└── vite.config.js              # Konfigurasi Vite
```

---

## Perintah Berguna

```bash
# Menjalankan development server
php artisan serve

# Menjalankan Vite dev server (hot reload)
npm run dev

# Build asset untuk production
npm run build

# Jalankan migrasi
php artisan migrate

# Reset dan seed ulang database
php artisan migrate:fresh --seed

# Membersihkan cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Melihat daftar route
php artisan route:list
```

---

## Lisensi

Project ini menggunakan lisensi [MIT](https://opensource.org/licenses/MIT).
