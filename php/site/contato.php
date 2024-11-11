<?php
    include "./header.php";
?>

<?php

    if(!empty($_POST)){
        //var_dump($_POST['nome']);

        echo"<div class='alert alert-dark' role='alert'>
        <b>Registro salvo com sucesso!</b><br>
        Nome:{$_POST['nome']} email:{$_POST['email']} Mensagem:{$_POST['mensagem']}
      </div>";
    }

?>

<div class="row">
    <div class="col">
    <h2>Contato</h2>
        <form action="contato.php" method="post" >
            <div class="mb-3">
                <label for="nome" class="form-label">nome</label>
                <input type="text" class="form-control" name="nome" placeholder="nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="email@exemplo.com">
            </div>
            <div class="mb-3">
                <label for="Mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" name="mensagem" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-light">Enviar</button>
        </form>
    </div>
</div>

<?php
    include "./footer.php";
?>