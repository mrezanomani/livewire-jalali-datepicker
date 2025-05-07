# Livewire Jalali Datepicker

A lightweight, Alpine.js-based Jalali (Persian) datepicker for Laravel Livewire 3 — with full Livewire 3 support, wire:model compatibility, and no need for jQuery or npm packages.

---

## ✅ Features

- Jalali (Persian) calendar support
- Compatible with Livewire 3
- Alpine.js powered
- Lightweight, no Vue/React
- Optional time selection
- Works out of the box via CDN

---

## 📦 Installation

### 1. Install via Composer (local or from GitHub)

```bash
composer require mrezanomani/livewire-jalali-datepicker
```

> If installing from GitHub directly, use:

```bash
composer require mrezanomani/livewire-jalali-datepicker:@dev
```

---

## 📁 Publish views (optional)

If you want to customize the blade view:

```bash
php artisan vendor:publish --tag=views
```

---

## 🛠 Setup JS & CSS (via CDN)

Add the following to your main Blade layout (e.g. `resources/views/layouts/app.blade.php`):

### In `<head>`:

```html
<link
  rel="stylesheet"
  href="https://unpkg.com/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css"
/>
```

### Before closing `</body>` tag:

```html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/persian-date@1.1.0/dist/persian-date.min.js"></script>
<script src="https://unpkg.com/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>
```

> ℹ️ No need to use npm or Vite build. This component works with CDN scripts!

---

## ✅ Usage

In any Blade file:

```blade
<x-jalali-datepicker
    wire:model="date"
    format="YYYY-MM-DD"
    :with-time="false"
/>
```

### In Livewire component:

```php
public string $date = '';
```

---

## 🧩 Parameters

| Prop         | Type    | Description                         |
| ------------ | ------- | ----------------------------------- |
| `wire:model` | string  | Livewire bound model                |
| `format`     | string  | Output format (default: YYYY-MM-DD) |
| `with-time`  | boolean | Enable time picker (default: false) |

---

## 🤝 Contributing

Pull requests are welcome!  
If you encounter a bug or want a new feature, feel free to open an issue.

---

## 📄 License

MIT © Mrezanomani
