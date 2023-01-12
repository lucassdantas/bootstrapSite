<?php
require 'includes/head.php';
include 'includes/header.php';
?>
<section class='p-4'>
    <h1>Faça seu Login</h1>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Lembrar Login</label>
        </div>
        <button type="submit" class="btn bgPurple">Enviar</button>
    </form>
</section>

<?php
include 'includes/footer.php';
?>