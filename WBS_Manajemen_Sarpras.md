# WBS dan Sprint Backlog — Manajemen Sarana dan Prasarana

> Dokumen ini menyusun Work Breakdown Structure (WBS) dan sprint backlog berdasarkan Project/issue, `PROJECTS_SETUP.md`, dan timeline `GANTT_CHART.md` di [Fatinasy7/Manajemen-Sarpras](https://github.com/Fatinasy7/Manajemen-Sarpras). Format mengikuti contoh dokumen WBS dan Sprint Backlog di repositori ini.
>
> **Catatan:** Timeline dan durasi di bawah mengikuti dokumen proyek sumber (W1–W13, 14 Oktober 2026–26 Januari 2027). Penanggung jawab menggunakan role/nama yang tercantum di dokumen sumber. Detail yang belum ditetapkan di Projects ditandai untuk konfirmasi.

## 1. Informasi Proyek

| Atribut | Keterangan |
|---|---|
| Nama proyek | Sistem Manajemen Sarana, Prasarana, Fasilitas, dan Laboratorium |
| Tujuan | Membangun aplikasi web untuk mengelola fasilitas/laboratorium, pengajuan peminjaman, jadwal, persetujuan, serta administrasi dan pengujian sistem. |
| Metode kerja | Pengembangan bertahap dengan pekerjaan analisis, desain, backend, frontend, integrasi, QA, dan dokumentasi berjalan paralel bila dependensi memungkinkan. |
| Rentang rencana | W1–W13; 14 Oktober 2026–26 Januari 2027 |
| Referensi utama | [`PROJECTS_SETUP.md`](https://github.com/Fatinasy7/Manajemen-Sarpras/blob/main/PROJECTS_SETUP.md), [`GANTT_CHART.md`](https://github.com/Fatinasy7/Manajemen-Sarpras/blob/main/GANTT_CHART.md), dan daftar [Issues/Project tasks](https://github.com/Fatinasy7/Manajemen-Sarpras/issues) |

### Tim dan peran

| Peran | Penanggung jawab sesuai dokumen sumber |
|---|---|
| Project Manager (PM) | Wahyu Bonita (`bonitabonita13`) |
| System Analyst | Khansa Mufidah (`khansamufidahh`) |
| Backend Developer | Akmal Palqah (`Muhammad-Akmal-Palqah`) |
| Frontend Developer | Fatin Asyifa (`Fatinasy7`) |
| QA / Testing | Caryksha Aulia (`carykshaaulia`) |

## 2. WBS (Work Breakdown Structure)

### 1.0 Manajemen Proyek Manajemen Sarpras

#### 1.1 Fase 1 — Team Setup & KAK (W1–W2)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.1.1 | Membentuk tim, struktur organisasi, dan pembagian jobdesk | PM | Struktur tim dan jobdesk |
| 1.1.2 | Menetapkan tema Facility & Laboratory Management dan ruang lingkup | PM + Analyst | Tema dan ruang lingkup proyek |
| 1.1.3 | Mengidentifikasi masalah, melakukan studi lapangan, dan merumuskan masalah | Analyst | Problem statement dan temuan lapangan |
| 1.1.4 | Menyusun, meninjau, dan memfinalisasi KAK | PM + Analyst | KAK yang disetujui |
| 1.1.5 | Menyelenggarakan kickoff dan menyepakati protokol komunikasi | PM + seluruh tim | Catatan kickoff dan kesepakatan tim |

#### 1.2 Fase 2A — System Analysis (W3–W5)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.2.1 | Analisis kebutuhan pengguna (mahasiswa, dosen, admin) | Analyst | Daftar kebutuhan pengguna |
| 1.2.2 | Menyusun dan meninjau Software Requirements Specification (SRS) | Analyst | Dokumen SRS |
| 1.2.3 | Merancang use case dan activity diagram | Analyst | Diagram sistem |
| 1.2.4 | Merancang Conceptual Data Model (CDM), ERD, tabel, dan relasi | Analyst + Backend | ERD dan rancangan skema data |
| 1.2.5 | Menetapkan aturan bisnis peminjaman, persetujuan, dan deteksi bentrok jadwal | Analyst + Backend | Spesifikasi aturan bisnis dan validasi |
| 1.2.6 | Menyepakati API contract dan format request/response | Analyst + Backend; konsultasi Frontend | Dokumen API contract |
| 1.2.7 | Melakukan review kebutuhan, desain, dan arsitektur | PM + Analyst + tim pengembang | Hasil review dan keputusan desain |

#### 1.3 Fase 2B — UI/UX Design (W3–W5)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.3.1 | Melakukan riset UI/UX dan analisis aplikasi sejenis | Frontend | Ringkasan riset dan referensi desain |
| 1.3.2 | Membuat wireframe dan rancangan layout halaman | Frontend | Wireframe yang ditinjau |
| 1.3.3 | Menetapkan design system dan komponen antarmuka | Frontend | Panduan visual dan komponen UI |
| 1.3.4 | Menyiapkan framework, CSS, dan build tools frontend | Frontend | Lingkungan frontend siap |

#### 1.4 Fase 2C — Backend Setup (W3–W5)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.4.1 | Menyiapkan struktur repository, Git, dan alur kerja kontribusi | Backend | Repository dan workflow siap |
| 1.4.2 | Menyiapkan framework dan konfigurasi lingkungan backend | Backend | Aplikasi backend siap dikembangkan |
| 1.4.3 | Mengimplementasikan skema database, migration, dan data awal | Backend + Analyst | Database dan migration |
| 1.4.4 | Mendokumentasikan endpoint dan menyiapkan mock API bila dibutuhkan | Backend | API spec/mock endpoint |

#### 1.5 Fase 3A — Backend Development (W6–W8)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.5.1 | Membangun autentikasi dan otorisasi pengguna | Backend | Fitur autentikasi dan kontrol akses |
| 1.5.2 | Membangun CRUD fasilitas dan laboratorium | Backend | API pengelolaan fasilitas/laboratorium |
| 1.5.3 | Membangun alur pengajuan peminjaman dan pemeriksaan ketersediaan | Backend | API pengajuan dan ketersediaan |
| 1.5.4 | Menerapkan deteksi konflik jadwal dan validasi aturan bisnis | Backend | Validasi jadwal dan aturan peminjaman |
| 1.5.5 | Membangun workflow persetujuan dan notifikasi/status | Backend | Alur approval dan status permohonan |
| 1.5.6 | Menyiapkan data uji dan menguji endpoint secara bertahap | Backend + QA | Data uji dan hasil pengujian API |

#### 1.6 Fase 3B — Frontend Development (W6–W8)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.6.1 | Membangun halaman login dan autentikasi | Frontend | Halaman autentikasi |
| 1.6.2 | Membangun dashboard dan katalog fasilitas/laboratorium | Frontend | Dashboard dan katalog |
| 1.6.3 | Membangun halaman detail fasilitas dan formulir peminjaman | Frontend | Halaman detail dan form pengajuan |
| 1.6.4 | Menampilkan kalender/ketersediaan dan informasi konflik jadwal | Frontend | Tampilan jadwal dan peringatan konflik |
| 1.6.5 | Membangun halaman daftar dan tindakan persetujuan | Frontend | Antarmuka approval dan pelacakan status |
| 1.6.6 | Melakukan verifikasi komponen, integrasi API, dan perbaikan UI | Frontend + QA | Komponen terverifikasi |

#### 1.7 Fase 3C — Integration & Testing / Prototype (W6–W8)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.7.1 | Menyusun test plan, test case, dan acceptance criteria | QA | Dokumen test plan dan skenario |
| 1.7.2 | Melakukan smoke test pada prototype/mock API | QA | Hasil smoke test |
| 1.7.3 | Mengintegrasikan frontend dan backend | Backend + Frontend | Prototype terintegrasi |
| 1.7.4 | Menjalankan integration/E2E test dan memeriksa konsistensi data | QA + tim pengembang | Hasil integration test |
| 1.7.5 | Mencatat, mengategorikan, dan melacak bug | QA | Bug log dan status perbaikan |
| 1.7.6 | Menyiapkan lingkungan, skenario, dan demonstrasi prototype | PM + QA + tim pengembang | Prototype demo siap |

#### 1.8 Fase 4A — QA & Comprehensive Testing (W9–W13)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.8.1 | Menguji fungsionalitas seluruh fitur terhadap SRS | QA | Laporan functional testing |
| 1.8.2 | Menguji performa dan beban sesuai kapasitas yang disepakati | QA + Backend | Laporan performa |
| 1.8.3 | Memverifikasi kontrol akses dan praktik keamanan aplikasi | QA + Backend | Hasil pemeriksaan keamanan |
| 1.8.4 | Melaksanakan User Acceptance Testing (UAT) bersama stakeholder | QA + stakeholder | Catatan UAT dan umpan balik |
| 1.8.5 | Melakukan retesting, verifikasi akhir, dan memperoleh sign-off QA | QA + PM | Laporan akhir dan sign-off |

#### 1.9 Fase 4B — Bug Fixes & Polish (W9–W13)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.9.1 | Memperbaiki bug kritis dan prioritas tinggi dari demo/pengujian | Backend + Frontend | Perbaikan terverifikasi |
| 1.9.2 | Mengoptimalkan query dan performa database | Backend | Performa backend/database ditingkatkan |
| 1.9.3 | Menyempurnakan responsivitas dan kompatibilitas browser | Frontend | Antarmuka responsif |
| 1.9.4 | Menyelesaikan fitur admin dan penyempurnaan penjadwalan sesuai scope | Backend + Frontend | Fitur admin/pengembangan yang disepakati |
| 1.9.5 | Merapikan kode dan memperbarui dokumentasi teknis | Backend + Frontend | Kode dan dokumentasi diperbarui |

#### 1.10 Fase 4C — Production Ready (W13)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.10.1 | Menyiapkan lingkungan deployment dan konfigurasi produksi | Backend | Lingkungan produksi siap |
| 1.10.2 | Menyiapkan strategi migrasi, backup, restore, dan rollback | Backend | Prosedur database dan pemulihan |
| 1.10.3 | Menyusun checklist deployment, dokumentasi, dan release notes | PM + Backend | Dokumen deployment |
| 1.10.4 | Melakukan deployment dan menyiapkan monitoring/logging | Backend | Aplikasi ter-deploy dan termonitor |
| 1.10.5 | Memberikan dukungan pasca-rilis dan meninjau umpan balik | Backend + Frontend + PM | Catatan pasca-rilis |

#### 1.11 Lintas Fase — Team Communication & Risks (W1–W13)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.11.1 | Mengadakan standup/status meeting dan memperbarui progres | PM + seluruh tim | Status dan blocker terkini |
| 1.11.2 | Memelihara risk register dan rencana mitigasi | PM + pemilik risiko | Risk register |
| 1.11.3 | Menyampaikan progres dan demo milestone kepada stakeholder | PM + tim terkait | Presentasi dan umpan balik |
| 1.11.4 | Mengelola eskalasi dan penyelesaian hambatan | PM | Keputusan dan catatan eskalasi |

#### 1.12 Lintas Fase — Documentation & Sign-off (W1–W13)

| WBS | Paket pekerjaan / aktivitas | Penanggung jawab | Keluaran |
|---|---|---|---|
| 1.12.1 | Menyelesaikan KAK dan dokumentasi kebutuhan | Analyst + PM | KAK/SRS disetujui |
| 1.12.2 | Menyusun dokumentasi arsitektur, diagram, ERD, dan aturan bisnis | Analyst | Dokumen desain sistem |
| 1.12.3 | Menjaga dokumentasi API dan spesifikasi backend | Backend | Dokumentasi API terkini |
| 1.12.4 | Menyusun panduan pengguna/admin dan materi troubleshooting | Analyst + tim pengembang | Panduan penggunaan |
| 1.12.5 | Menyusun laporan akhir, presentasi, dan lessons learned | PM + Analyst + seluruh tim | Laporan akhir dan penutupan proyek |

## 3. Sprint Backlog

Sprint berikut mengelompokkan pekerjaan menurut minggu pada Gantt Chart sumber. Pekerjaan paralel dapat berlangsung bersamaan; penyelesaian tetap mengikuti dependensi dan acceptance criteria. Item yang berulang (monitoring, dokumentasi, bug log) berjalan lintas sprint.

| Sprint | Periode rencana | Fokus dan item backlog utama | Hasil/exit criteria |
|---|---|---|---|
| Sprint 1 — Inisiasi | W1, 14–20 Okt 2026 | WBS 1.1.1, 1.1.3; mulai identifikasi masalah dan pembentukan tim | Tim, jobdesk, dan rumusan masalah awal tersedia |
| Sprint 2 — KAK & kickoff | W2, 21–27 Okt 2026 | WBS 1.1.2, 1.1.4, 1.1.5; finalisasi KAK dan alignment tim | KAK ditinjau/disetujui dan scope dipahami tim |
| Sprint 3 — Analisis, desain awal, setup | W3–W4, 28 Okt–10 Nov 2026 | WBS 1.2.1–1.2.4, 1.3.1–1.3.2, 1.4.1–1.4.2; analisis kebutuhan, SRS, diagram/ERD awal, wireframe, setup framework | Requirement dan desain awal tersedia; backend/frontend siap dikembangkan |
| Sprint 4 — Desain final & kontrak | W5, 11–17 Nov 2026 | WBS 1.2.5–1.2.7, 1.3.3–1.3.4, 1.4.3–1.4.4, 1.7.1; aturan bisnis, API contract, schema/migration, design system, test plan | API/schema/design diselaraskan; test case disiapkan |
| Sprint 5 — Implementasi inti | W6–W7, 18 Nov–1 Des 2026 | WBS 1.5.1–1.5.3, 1.6.1–1.6.3, 1.7.2; autentikasi, CRUD, halaman inti, smoke test | Fitur inti tersedia pada backend/frontend dan dapat diuji |
| Sprint 6 — Booking, workflow & integrasi | W8, 2–8 Des 2026 | WBS 1.5.4–1.5.6, 1.6.4–1.6.6, 1.7.3–1.7.6; deteksi bentrok, approval, integrasi, E2E, persiapan demo | Prototype terintegrasi dan demo siap; bug dicatat |
| Sprint 7 — Uji fungsional & perbaikan awal | W9–W10, 9–30 Des 2026 | WBS 1.8.1, 1.9.1; functional testing dan perbaikan bug demo/prioritas tinggi | Hasil uji dan daftar perbaikan prioritas tersedia |
| Sprint 8 — Optimasi & UAT | W11–W12, 6–19 Jan 2027 | WBS 1.8.2–1.8.4, 1.9.2–1.9.4; performa, keamanan, UAT, responsivitas, penyempurnaan admin/scheduling sesuai scope | Umpan balik UAT dan hasil optimasi ditindaklanjuti |
| Sprint 9 — Finalisasi & rilis | W13, 20–26 Jan 2027 | WBS 1.8.5, 1.9.5, 1.10.1–1.10.5, 1.12.4–1.12.5; retest/sign-off, dokumentasi, deployment readiness, rilis dan evaluasi akhir | QA sign-off, dokumen final, dan keputusan kesiapan rilis |

### Backlog berulang di setiap sprint

- **PM:** memantau progres, risiko, dependensi, komunikasi, dan milestone (WBS 1.11).
- **Tim pengembang:** memperbarui dokumentasi teknis dan menjaga kualitas kode (WBS 1.12).
- **QA:** memperbarui test case/bug log dan melakukan retest pada perbaikan yang selesai.
- **Tim:** meninjau perubahan ruang lingkup dan mengonfirmasi fitur tambahan sebelum dimasukkan ke sprint.

## 4. Dependensi dan Milestone

### Dependensi utama

1. KAK dan ruang lingkup menjadi dasar analisis dan desain.
2. SRS/requirement mendahului implementasi fitur; desain UI dan kontrak API perlu disepakati sebelum integrasi frontend-backend.
3. ERD/schema database diperlukan sebelum CRUD dan autentikasi menggunakan database.
4. Aturan bisnis peminjaman diperlukan sebelum engine ketersediaan dan deteksi bentrok jadwal selesai.
5. API/backend yang tersedia diperlukan untuk integrasi halaman frontend dan pengujian end-to-end.
6. Integrasi prototype mendahului demo; hasil testing menjadi masukan perbaikan dan retesting.
7. QA sign-off, checklist deployment, dan kesiapan lingkungan merupakan gerbang sebelum rilis.

### Milestone rencana dari dokumen sumber

| Milestone | Target |
|---|---|
| KAK dan SRS finalized | Akhir fase awal analisis (sekitar W2–W4; tanggal rinci mengikuti persetujuan tim) |
| Prototype demo ready | W8, target 8 Desember 2026 |
| Final testing dan verification | W13, target 26 Januari 2027 |
| Production readiness / project closure | W13, target 26 Januari 2027 |

## 5. Kriteria penerimaan umum

- Setiap paket pekerjaan memiliki keluaran yang dapat ditinjau dan statusnya diperbarui di Project/issue terkait.
- Fitur mengikuti kebutuhan yang disepakati di SRS dan aturan bisnis yang telah ditinjau.
- Perubahan backend dan frontend terintegrasi dan lolos pengujian yang relevan.
- Bug kritis diselesaikan atau memiliki keputusan/mitigasi yang disetujui sebelum sign-off.
- Dokumentasi, panduan, dan hasil pengujian diperbarui sebelum penutupan proyek.
- Deployment hanya dilakukan setelah checklist dan persetujuan yang diperlukan terpenuhi.

## 6. Catatan sinkronisasi dengan GitHub Projects

WBS ini menyatukan task yang disusun pada project boards sumber: **Phase 1 – Team Setup & KAK**, **Phase 2 – System Analysis**, **Phase 2 – UI/UX Design**, **Phase 2 – Backend Setup**, **Phase 3 – Backend Development**, **Phase 3 – Frontend Development**, **Phase 3 – Integration & Testing**, **Phase 4 – QA & Comprehensive Testing**, **Phase 4 – Bug Fixes & Polish**, **Phase 4 – Production Ready**, serta pekerjaan lintas fase **Team Communication & Risks** dan **Documentation & Sign-off**. Gunakan issue di repository sumber untuk status aktual; tabel sprint di dokumen ini adalah rencana, bukan klaim status penyelesaian.

---

**Disusun berdasarkan:** repositori [Manajemen-Sarpras](https://github.com/Fatinasy7/Manajemen-Sarpras) dan format contoh di repositori [wbs](https://github.com/bonitabonita13/wbs).  
**Versi:** 1.0  
**Tanggal penyusunan:** 7 November 2026
