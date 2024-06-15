<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
    <style>
        .error { color: red; }
        .help-text { color: grey; }
        .error-message { color: red; font-size: 0.9em; display: none; }
        .is-invalid { border-color: red; }
    </style>
</head>
<body>
<form method="POST" action="{{ route('form.submit') }}">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @if ($errors->has('name'))
            <span class="error">{{ $errors->first('name') }}</span>
        @endif
        <span id="nameError" class="error-message">Name is required.</span>
        <span class="help-text">Please enter your full name.</span>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
            <span class="error">{{ $errors->first('email') }}</span>
        @endif
        <span id="emailError" class="error-message">Please enter a valid email address.</span>
        <span class="help-text">Please enter a valid email address.</span>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" minlength="8" required>
        @if ($errors->has('password'))
            <span class="error">{{ $errors->first('password') }}</span>
        @endif
        <span id="passwordError" class="error-message">Password must be at least 8 characters long.</span>
        <span class="help-text">Password must be at least 8 characters long.</span>
    </div>
    <button type="submit">Submit</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input[required], input[minlength], input[type="email"]');

        inputs.forEach(input => {
            input.addEventListener('input', function() {
                const errorMessage = document.getElementById(this.id + 'Error');
                if (this.validity.valid) {
                    this.classList.remove('is-invalid');
                    errorMessage.style.display = 'none';
                } else {
                    this.classList.add('is-invalid');
                    errorMessage.style.display = 'inline';
                }
            });
        });

        form.addEventListener('submit', function(event) {
            let isFormValid = true;
            inputs.forEach(input => {
                const errorMessage = document.getElementById(input.id + 'Error');
                if (!input.validity.valid) {
                    input.classList.add('is-invalid');
                    errorMessage.style.display = 'inline';
                    isFormValid = false;
                }
            });
            if (!isFormValid) {
                event.preventDefault();
            }
        });
    });
</script>
</body>
</html>
