
<div class="login-register">
    <div class="login-box">
        <h2>Registrarse</h2>
        <form action="<?= APP_URL . 'account/signup' ?>" method="POST">
            <div class="user-box">
                <input type="text" name="id" required="">
                <label>ID orden de trabajo</label>
            </div>
            <div class="user-box">
                <input type="text" name="rut" required="">
                <label>Rut</label>
            </div>
            <div class="user-box">
                <input type="text" name="firstname" required="">
                <label>Nombre</label>
            </div>
            <div class="user-box">
                <input type="text" name="lastname" required="">
                <label>Apellido</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" required="">
                <label>Correo Electronico</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Contraseña</label>
            </div>
            <div class="user-box">
                <input type="password" name="confirm-password" required="">
                <label>Confirmar Contraseña</label>
            </div>
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Ingresar
            </button>
        </form>
    </div>
</div>