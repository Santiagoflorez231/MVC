<form method="POST">
    <div class="form-group">
        <label for="exampleInputPassword1">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Correo</label>
        <input name="email" type="email" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group form-check">
        <a href="index.php?page=login" class="form-check-label" for="exampleCheck1">Acceder</a>
    </div>


    <?php

        $register = authenticationUsers::register();
        echo $register;
        if($register == true){
            echo '
                <script>
                Swal.fire({
                    position: "top",
                    icon: "success",
                    title: "Registro exitoso!",
                    showConfirmButton: false,
                    timer: 1500
                  });
                </script>
            ';

            header('Location: views/inicio.php');
        }
    ?>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>