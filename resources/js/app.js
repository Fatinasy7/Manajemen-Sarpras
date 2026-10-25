const passwordInput = document.querySelector('#password');
const passwordToggle = document.querySelector('#password-toggle');
const loginForm = document.querySelector('#login-form');
const loginFeedback = document.querySelector('#login-feedback');

passwordToggle?.addEventListener('click', () => {
    if (!(passwordInput instanceof HTMLInputElement)) {
        return;
    }

    const shouldShowPassword = passwordInput.type === 'password';
    const passwordIcon = passwordToggle.querySelector('i');

    passwordInput.type = shouldShowPassword ? 'text' : 'password';
    passwordToggle.setAttribute('aria-label', shouldShowPassword ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
    passwordToggle.setAttribute('aria-pressed', String(shouldShowPassword));
    passwordIcon?.classList.toggle('bi-eye', !shouldShowPassword);
    passwordIcon?.classList.toggle('bi-eye-slash', shouldShowPassword);
});

loginForm?.addEventListener('submit', (event) => {
    event.preventDefault();

    if (!(loginFeedback instanceof HTMLElement)) {
        return;
    }

    loginFeedback.textContent = 'Autentikasi belum terhubung ke layanan kampus.';
    loginFeedback.classList.remove('d-none');
});

document.querySelectorAll('[data-login-message]').forEach((button) => {
    button.addEventListener('click', () => {
        if (!(loginFeedback instanceof HTMLElement)) {
            return;
        }

        loginFeedback.textContent = button.dataset.loginMessage ?? 'Layanan ini belum tersedia.';
        loginFeedback.classList.remove('d-none');
    });
});
