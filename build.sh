#!/usr/bin/env bash
# Keluar dari skrip jika ada galat
set -o errexit
# Menjalankan migrasi untuk membuat ulang tabel dan mengisi data awal (seeder)
# --force diperlukan agar berjalan di mode produksi tanpa konfirmasi
php artisan migrate:fresh --seed --force

# Membersihkan dan membuat cache untuk konfigurasi
# Ini membuat aplikasi berjalan lebih cepat
php artisan config:cache

# Membersihkan dan membuat cache untuk rute
# Ini mempercepat pemuatan rute
php artisan route:cache

# Membersihkan dan membuat cache untuk tampilan (view)
# Ini mempercepat pemuatan halaman Blade
php artisan view:cache
