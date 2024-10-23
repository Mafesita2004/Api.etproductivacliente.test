<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Etapa Productiva</title>
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="{{ asset('img/logo.png') }}" alt="Etapa Seguimiento Logo" class="logo">
            <h1>Etapa Productiva</h1>
        </div>
    </header>

    <main>
        <div class="content">
            <div class="welcome-text">
                <h2>¡Regístrate en Etapa de<br>Productiva!</h2>
                <p>Completa el formulario para unirte.</p>
            </div>
            <img src="{{ asset('img/persona.png') }}" alt="Persona" class="persona-img">
        </div>

        <div class="registro-container">
            <h3>REGISTRO</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="input-group">
                    <img src="{{ asset('img/user-icon.png') }}" alt="Usuario" class="input-icon">
                    <input id="name" type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus autocomplete="name">
                </div>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror

                <!-- Email Address -->
                <div class="input-group">
                    <img src="{{ asset('img/mail.png.png') }}" alt="Correo electrónico" class="input-icon">
                    <input id="email" type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required autocomplete="email">
                </div>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror

                <!-- Password -->
                <div class="input-group">
                    <img src="{{ asset('img/lock-icon.png') }}" alt="Contraseña" class="input-icon">
                    <input id="password" type="password" name="password" placeholder="Contraseña" required autocomplete="new-password">
                </div>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror

                <!-- Confirm Password -->
                <div class="input-group">
                    <img src="{{ asset('img/lock-icon.png') }}" alt="Confirmar contraseña" class="input-icon">
                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password">
                </div>
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror

                <!-- Role -->
                <div class="input-group">
                    <img src="{{ asset('img/roles.png') }}" alt="Rol" class="input-icon">
                    <select id="role" name="role" required>
                        <option value="superadmin">Superadmin</option>
                        <option value="administrator">Administrator</option>
                        <option value="trainer">Trainer</option>
                        <option value="apprentice">Apprentice</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2..." crossorigin="anonymous"></script>
</body>
</html>
