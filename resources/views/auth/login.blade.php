<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#faf9ff">

        <title>Masuk SIM-LAB | Sistem Kampus</title>

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <main class="login-shell">
            <div class="login-card card">
                <div class="row g-0 h-100">
                    <aside class="col-md-5 brand-panel" aria-label="Informasi SIM-LAB">
                        <span class="portal-pill">
                            <span class="status-dot" aria-hidden="true"></span>
                            Portal Resmi Akademik v3.4
                        </span>

                        <div class="brand-copy">
                            <h1>Akses Riset &amp; Fasilitas Kampus Terpadu</h1>
                            <p>
                                Kelola reservasi 48 laboratorium sains terakreditasi,
                                12 gedung perkuliahan, dan inventaris instrumen riset
                                tingkat lanjut.
                            </p>
                        </div>

                        <div class="brand-highlights">
                            <section class="brand-stat-card" aria-label="Statistik fasilitas riset hari ini">
                                <div class="brand-stat-heading">
                                    <span><i class="bi bi-clipboard2-pulse me-1" aria-hidden="true"></i>Lab Riset Aktif Hari Ini</span>
                                    <span class="brand-stat-badge">89% Siap Pakai</span>
                                </div>
                                <div class="brand-stat-grid">
                                    <div class="brand-stat-item">
                                        <span class="brand-stat-label">Lab Komputer &amp; AI</span>
                                        <span class="brand-stat-value">14/16</span>
                                        <span class="brand-stat-detail">Tersedia</span>
                                    </div>
                                    <div class="brand-stat-item">
                                        <span class="brand-stat-label">Instrumen Kimia/Fisika</span>
                                        <span class="brand-stat-value">28/32</span>
                                        <span class="brand-stat-detail">Terjadwal</span>
                                    </div>
                                </div>
                            </section>

                            <div class="brand-connection">
                                <i class="bi bi-shield-check" aria-hidden="true"></i>
                                <span>
                                    Terintegrasi dengan Single Sign-On PDDikti &amp;
                                    Google Workspace for Education.
                                </span>
                            </div>
                        </div>

                        <p class="brand-footer mb-0">
                            Direktorat Sistem Teknologi Informasi &amp; Fasilitas Akademik
                        </p>
                    </aside>

                    <section class="col-md-7 auth-panel" aria-labelledby="login-title">
                        <header class="institution-heading">
                            <div class="institution-mark" aria-hidden="true">
                                <i class="bi bi-bank2"></i>
                            </div>
                            <div>
                                <span class="institution-badge">
                                    <i class="bi bi-building" aria-hidden="true"></i>
                                    SIM-LAB Kampus
                                </span>
                                <h2 id="login-title">Sistem Informasi Manajemen Peminjaman Fasilitas</h2>
                                <p>Portal resmi peminjaman ruang kelas, auditorium, laboratorium komputer &amp; sains Universitas.</p>
                            </div>
                        </header>

                        <div class="login-notice" role="note">
                            <i class="bi bi-info-circle-fill" aria-hidden="true"></i>
                            <span>
                                <strong>Informasi:</strong>
                                Pengajuan laboratorium biologi &amp; kimia memerlukan surat rekomendasi
                                pembimbing serta kartu identitas laboratorium aktif.
                            </span>
                        </div>

                        <form class="login-form" id="login-form" method="post">
                            <div class="login-field">
                                <label class="login-field-label" for="identifier">NIM / NIP</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-vcard" aria-hidden="true"></i>
                                    </span>
                                    <input
                                        class="form-control"
                                        id="identifier"
                                        name="identifier"
                                        type="text"
                                        placeholder="Masukkan NIM (Mahasiswa) atau NIP (Dosen/Tendik)"
                                        autocomplete="username"
                                        required
                                    >
                                </div>
                            </div>

                            <div class="login-field">
                                <div class="login-field-label">
                                    <label for="password">Kata Sandi (Password)</label>
                                    <button
                                        class="forgot-password"
                                        type="button"
                                        data-login-message="Pemulihan kata sandi belum terhubung ke layanan kampus."
                                    >
                                        Lupa Password?
                                    </button>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-lock" aria-hidden="true"></i>
                                    </span>
                                    <input
                                        class="form-control"
                                        id="password"
                                        name="password"
                                        type="password"
                                        placeholder="Masukkan kata sandi terdaftar"
                                        autocomplete="current-password"
                                        required
                                    >
                                    <button
                                        class="password-toggle input-group-text"
                                        id="password-toggle"
                                        type="button"
                                        aria-label="Tampilkan kata sandi"
                                        aria-pressed="false"
                                    >
                                        <i class="bi bi-eye" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>

                            <label class="remember-device">
                                <input class="form-check-input" type="checkbox" name="remember" value="1">
                                <span>Ingat Saya di Perangkat Ini</span>
                            </label>

                            <p class="login-feedback d-none" id="login-feedback" role="status" aria-live="polite"></p>

                            <button class="login-submit btn" type="submit">
                                Masuk ke SIM-LAB
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </button>

                            <div class="login-divider" aria-hidden="true">ATAU</div>

                            <button
                                class="sso-button btn"
                                type="button"
                                data-login-message="Single Sign-On kampus belum terhubung."
                            >
                                <i class="bi bi-google" aria-hidden="true"></i>
                                Masuk dengan Akun SSO Kampus (Google Workspace / Dikti)
                            </button>
                        </form>

                        <footer class="login-footer">
                            <span>&copy; {{ now()->year }} Universitas. All rights reserved.</span>
                            <nav class="login-footer-links" aria-label="Bantuan">
                                <button
                                    class="forgot-password"
                                    type="button"
                                    data-login-message="Layanan IT Helpdesk belum dihubungkan."
                                >
                                    <i class="bi bi-headset" aria-hidden="true"></i>
                                    Layanan IT Helpdesk
                                </button>
                                <span class="login-footer-separator" aria-hidden="true">&bull;</span>
                                <button
                                    class="forgot-password"
                                    type="button"
                                    data-login-message="Panduan SOP belum tersedia."
                                >
                                    Panduan SOP
                                </button>
                            </nav>
                        </footer>
                    </section>
                </div>
            </div>
        </main>
    </body>
</html>
