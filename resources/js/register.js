document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.querySelector('#register-password');
    const togglePassword = document.querySelector('.toggle-register-password');

    if (passwordInput && togglePassword) {
        togglePassword.addEventListener('click', function () {
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });
    }
});
