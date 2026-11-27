# Desain Produk eM-Kost — Wireframe dan UI (Bootstrap 5)

## 1. Sumber dan Prinsip
Dokumen desain ini merangkum wireframe dalam **Wireframe eM-Kost.pdf** dan spesifikasi SRS. Implementasi UI menggunakan **Bootstrap 5** (grid, cards, navbar, forms, tables, badges, alerts, buttons, modal/offcanvas bila diperlukan). Wireframe asal dominan sederhana/monokrom; implementasi dapat memakai styling Bootstrap dengan tetap menjaga struktur dan kemudahan akses.

## 2. Navigasi dan Peran
- **Publik/Calon penghuni:** Beranda, daftar kamar, detail kamar, fasilitas, lokasi, masuk, daftar, pengajuan booking.
- **Penghuni:** Dashboard, pembayaran, riwayat transaksi, keluhan, notifikasi.
- **Admin/Pemilik:** Dashboard, kamar, fasilitas, penghuni, pemesanan, pembayaran, keluhan, laporan keuangan.

## 3. Halaman dan Komponen
### 3.1 Beranda / katalog
- Navbar: brand Kost Rancang, Beranda, Kamar, Fasilitas, Lokasi, Masuk, Daftar.
- Hero: judul, deskripsi, CTA Lihat Kamar dan Daftar; visual bangunan.
- Ringkasan kost: gedung/kamar, ketentuan sewa, alamat.
- Katalog kamar dalam Bootstrap `row` + `col` + `card`: foto, nomor, status, ukuran, fasilitas, harga dan tombol detail.
- Fasilitas bersama ditampilkan sebagai daftar/card.
- Lokasi dan kontak pemilik.

### 3.2 Detail kamar
- Breadcrumb, tombol kembali.
- Layout dua kolom: foto kamar; panel ringkasan kamar, status, harga sewa, iuran air, total, ketentuan, tanggal tersedia.
- Tombol Ajukan Pemesanan dan Hubungi Pemilik.
- Deskripsi, fasilitas kamar dan lokasi.

### 3.3 Masuk
- Form terpusat: email dan password, tombol masuk.
- Informasi bahwa dashboard menyesuaikan peran.
- Link daftar dan kembali ke beranda.

### 3.4 Pendaftaran akun
- Form: nama lengkap, email, WhatsApp, alamat asal, password, konfirmasi password, upload KTP.
- Validasi field, helper text dan pesan error Bootstrap.

### 3.5 Pengajuan booking
- Layout dua kolom.
- Form data calon penghuni dan tanggal mulai sewa.
- Panel ringkasan kamar, biaya dan persetujuan pemilik.
- CTA Ajukan Pemesanan dan Batal; pengajuan berstatus menunggu persetujuan.

### 3.6 Dashboard penghuni
- Navbar akun dan menu: Dashboard, Pembayaran, Riwayat transaksi, Keluhan, Notifikasi.
- Alert tagihan/jatuh tempo.
- Card kamar dan tagihan aktif.
- Tabel ringkas riwayat pembayaran.
- Card keluhan dan notifikasi terbaru.

### 3.7 Keluhan penghuni
- Form keluhan: kamar (terisi otomatis), judul, deskripsi.
- Tabel keluhan: ID, tanggal, isi, status, penanganan terakhir.
- Status alur: Diajukan → Diproses → Selesai.

### 3.8 Pembayaran
- Detail invoice, periode, tanggal terbit, jatuh tempo, rincian sewa dan air.
- Pilihan metode: transfer bank atau tunai kepada pemilik (berdasarkan wireframe).
- Untuk transfer: rekening tujuan, nominal, tanggal pembayaran, nama pengirim, bukti transfer.
- Status pembayaran: belum dibayar, menunggu verifikasi, lunas/ditolak sesuai proses.
- Riwayat transaksi tersedia bagi penghuni.

### 3.9 Dashboard admin/pemilik
- Sidebar: Dashboard, Kamar, Fasilitas, Penghuni, Pemesanan, Pembayaran, Keluhan, Laporan keuangan.
- KPI cards: penghuni aktif, calon penghuni, pemesanan menunggu, pembayaran menunggu, keluhan terbuka.
- Panel ketersediaan kamar dan ringkasan pembayaran periode.
- Tabel tindakan: booking ditinjau, pembayaran diverifikasi, keluhan ditangani.
- CTA pengelolaan penghuni dan laporan.

### 3.10 Laporan keuangan
- Filter periode/bulan.
- Ringkasan total pembayaran diterima dan belum diterima/tertunggak berdasarkan data transaksi.
- Tabel transaksi dan rekap per periode; akses pemilik/admin berwenang.

## 4. Bootstrap 5 Component Mapping
| Pola | Komponen Bootstrap 5 |
|---|---|
| Navbar | `navbar`, `navbar-expand-lg`, `navbar-toggler` |
| Responsive layout | `container`, `row`, `col-*`, `g-*` |
| Card kamar / KPI | `card`, `card-body`, `card-title` |
| Status | `badge`, `alert` |
| Form | `form-label`, `form-control`, `form-select`, `invalid-feedback` |
| Tables | `table`, `table-responsive`, `table-striped` |
| CTA | `btn`, `btn-primary`, `btn-outline-secondary` |
| Sidebar | `list-group`, layout grid / offcanvas pada mobile |
| Breadcrumb | `breadcrumb` |
| Dialog | `modal` (konfirmasi aksi) |

## 5. Responsive behavior
- Mobile: navbar collapsible, card kamar satu kolom, form satu kolom, tabel dalam `table-responsive`, sidebar menjadi offcanvas/menu ringkas.
- Tablet: dua kolom bila ruang cukup.
- Desktop: katalog dua kolom/lebih, dashboard grid, sidebar tetap.
- Gunakan label form, kontras warna, ukuran tombol nyaman dan status tidak hanya dibedakan dengan warna.

## 6. Struktur halaman (sitemap)
```text
/
├── Kamar / Detail Kamar
├── Fasilitas
├── Lokasi
├── Masuk
├── Daftar
└── Area akun
    ├── Calon penghuni: katalog, booking, status
    ├── Penghuni: dashboard, pembayaran, riwayat, keluhan, notifikasi
    └── Admin/Pemilik: dashboard, kamar, fasilitas, penghuni, booking,
        pembayaran, keluhan, laporan
```

## 7. Catatan Implementasi
- Gunakan Bootstrap 5 CSS/JS via package atau CDN (sesuai keputusan proyek).
- Jangan mengandalkan data placeholder wireframe untuk informasi operasional yang benar.
- Lindungi halaman dan aksi berdasarkan peran.
- Validasi input di sisi server; file upload dibatasi tipe/ukuran.
- Format uang Indonesia (`Rp`) dan tanggal lokal.
- Konfirmasi aksi penting (persetujuan booking, verifikasi, perubahan status).
- Wireframe PDF memuat placeholder gambar; implementasi perlu aset nyata atau placeholder yang jelas.
