<!-- Make sure your form has an id like 'loginForm', and the password field has id 'password' -->
<script>
document.getElementById('loginForm').addEventListener('submit', function(event) {
    var password = document.getElementById('password').value;

    var hasSpecialCharacter = /[!@#$%^&*(),.?":{}|<>]/;
    var hasUppercaseLetter = /[A-Z]/;
    var hasNumber = /[0-9]/;

    if (!hasSpecialCharacter.test(password)) {
        alert('Password must contain at least one special character.');
        event.preventDefault();
    } else if (!hasUppercaseLetter.test(password)) {
        alert('Password must contain at least one uppercase letter.');
        event.preventDefault();
    } else if (!hasNumber.test(password)) {
        alert('Password must contain at least one number.');
        event.preventDefault();
    }
});
</script>
