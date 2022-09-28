<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOG IN</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
        <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
      
    </head>
      
    <body>
          <!-- SING IN (REGISTRO DE CUENTA) -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Crear Cuenta</h1>
                
                <input id="userName" placeholder="Nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="userName" value="{{ old('userName') }}" required autocomplete="userName" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="email" placeholder="E-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input placeholder="Confirmar contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <button type="submit" class="btn btn-primary">
                    {{ __('Registrar') }}
                </button>
            </form>
        </div>

        <!-- LOG IN (INICIO DE SESIÓN) -->
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Inicia Sesión</h1>
               
                <input id="email" placeholder="E-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <a href="#">Olvidaste tu Contraseña?</a>
                <button type="submit" class="btn btn-primary">
                    {{ __('Ingresar') }}
                </button>
            </form>
        </div>
        <!-- BANNER QUE CAMBIA SEGÚN EL MENÚ -->
        <div class="overlay-container">
            <div class="overlay">
                <!-- SI ESTÁ EN SING IN...--->
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenido de Vuelta!</h1>
                    <p>Regresa a tu materializador personal de ideas</p>
                    <button class="ghost" id="signIn">Ingresa</button>
                    <br>
                    
                </div>
                <!-- SI ESTÁ EN LOG IN...--->
                <div class="overlay-panel overlay-right">
                    <h1>Hola, Nuevo por Aquí?</h1>
                    <p>Estás a un clic de inovar con tus ideas</p>
                    <button class="ghost" id="signUp">Registrarte</button>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>

        
        
        <!-- Código JavaScript -->
        <script  src="{{ asset('js/loginScript.js') }}"></script>
        
    </body>
</html>