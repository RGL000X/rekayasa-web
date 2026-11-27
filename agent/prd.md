# Product Requirements Document (PRD) — eM-Kost

## 1. Ringkasan Produk
**eM-Kost** adalah sistem informasi berbasis web untuk membantu pengelolaan Kost Rancang: pencarian kamar, pendaftaran dan booking, pengelolaan penghuni, pembayaran, keluhan, notifikasi, serta laporan keuangan bulanan.

## 2. Latar Belakang
Pengelolaan Kost Rancang masih dilakukan secara manual dan melalui WhatsApp. Calon penghuni kesulitan mendapatkan informasi kamar, harga, dan fasilitas; keluhan dapat terlewat; serta pemilik perlu memisahkan pembayaran lunas dan belum lunas dan menyusun rekap keuangan.

## 3. Tujuan
- Menyediakan informasi kamar, harga, fasilitas, dan ketersediaan.
- Mendigitalisasi pendaftaran dan persetujuan booking.
- Memudahkan pencatatan serta verifikasi pembayaran.
- Memudahkan penghuni mengirim keluhan dan pemilik menindaklanjutinya.
- Menyediakan laporan keuangan bulanan.

## 4. Pengguna
| Peran | Tujuan dan akses |
|---|---|
| Calon penghuni | Menjelajahi kamar/fasilitas, mendaftar dan mengajukan booking. |
| Penghuni | Melihat tagihan, konfirmasi pembayaran, melihat riwayat, notifikasi dan mengajukan keluhan. |
| Admin/Pemilik kost | Mengelola kamar, penghuni, booking, pembayaran, keluhan, notifikasi dan laporan. |

## 5. Cakupan Produk
### In scope
- Informasi kost, gedung, kamar, fasilitas dan lokasi.
- Registrasi dan autentikasi akun.
- Pengajuan serta persetujuan/penolakan booking.
- Pengelolaan penghuni.
- Tagihan, pembayaran, unggah bukti, verifikasi dan riwayat.
- Pengingat jatuh tempo.
- Keluhan, status penanganan dan notifikasi.
- Laporan rekap keuangan per bulan dan dashboard berdasarkan peran.

### Out of scope
Layanan kebersihan langsung, keamanan fisik, renovasi bangunan dan pengelolaan keuangan pemilik di luar transaksi penghuni. Integrasi payment gateway/VA/e-wallet belum dipastikan dan merupakan fitur opsional.

## 6. Alur Utama
1. Calon penghuni melihat daftar kamar dan detail.
2. Calon penghuni mendaftar; pengajuan booking dilakukan setelah/ melalui proses pendaftaran dan menunggu persetujuan pemilik.
3. Admin mengelola data dan menyetujui/menolak booking.
4. Penghuni melihat tagihan, memilih metode pembayaran sesuai opsi, mengirim konfirmasi/bukti bila diperlukan.
5. Admin memverifikasi pembayaran; status diperbarui dan riwayat tercatat.
6. Sistem mengingatkan tagihan mendekati atau melewati jatuh tempo.
7. Penghuni mengirim keluhan; admin memperbarui status Diajukan → Diproses → Selesai.
8. Pemilik melihat ringkasan dan laporan bulanan.

## 7. Fitur dan Prioritas
| ID | Fitur | Prioritas |
|---|---|---|
| KF-01 | Informasi kamar | Must |
| KF-02 | Pendaftaran | Must |
| KF-03 | Booking dan persetujuan | Must |
| KF-04 | Data penghuni | Must |
| KF-05 | Pencatatan pembayaran | Must |
| KF-06 | Notifikasi jatuh tempo | Must |
| KF-07 | Riwayat transaksi | Should |
| KF-08 | Form keluhan | Must |
| KF-09 | Manajemen keluhan | Must |
| KF-10 | Laporan keuangan bulanan | Must |
| KF-11 | Notifikasi laporan tersedia | Should |
| KF-12 | Verifikasi pembayaran | Must |
| KF-13 | Integrasi pembayaran digital (bank/VA/e-wallet) | Could, perlu ditinjau |
| KF-14 | Notifikasi keluhan baru | Should |
| KF-15 | Dashboard admin/pemilik | Must |
| KF-16 | Dashboard penghuni | Must |
| KF-17 | Dashboard calon penghuni | Must |

## 8. Kriteria Keberhasilan
- Calon penghuni dapat menemukan detail kamar dan mengirim pendaftaran/booking.
- Admin dapat meninjau booking dan mengelola penghuni.
- Status pembayaran dapat dicatat dan diverifikasi, serta riwayat tersedia.
- Penghuni dapat mengirim keluhan dan memantau status.
- Pemilik dapat mengakses rekap bulanan berdasarkan transaksi tercatat.

## 9. Batasan dan Asumsi
- Sistem web responsif dan digunakan melalui browser pada smartphone maupun komputer.
- Sistem direncanakan menggunakan MySQL, dengan lingkungan pengembangan XAMPP/hosting.
- Target awal waktu muat halaman maksimal 5 detik pada koneksi stabil.
- Sistem dapat diakses 24 jam selama server dan koneksi tersedia; respons pemilik tidak dijamin.
- Data pribadi dan keuangan dibatasi sesuai hak akses dan tidak disebarkan.

## 10. Risiko
- Perubahan kebutuhan selama pengembangan: dokumentasi dan konfirmasi stakeholder.
- Kebocoran data: autentikasi, hak akses, hashing password, HTTPS dan backup.
- Kegagalan notifikasi: logging dan pemeriksaan berkala.
- Integrasi pembayaran: tetap tersedia pencatatan/verifikasi manual.
- Ketidaksesuaian laporan: validasi dan uji perhitungan.
