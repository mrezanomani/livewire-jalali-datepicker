# Livewire Jalali Datepicker

A lightweight, Alpine-based Jalali (Persian) datepicker for Laravel Livewire 3. No jQuery or external dependencies required.

## Installation

```bash
composer require meysamtech/livewire-jalali-datepicker
```

## Usage

```blade
<x-jalali-datepicker wire:model="start_date" format="YYYY-MM-DD" :with-time="true" />
```

## Publish views (optional)
```bash
php artisan vendor:publish --tag=views
```