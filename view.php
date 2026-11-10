
<h2>Cadastro de Imóveis</h2>

<form method="POST">

    <label>Descrição:</label>
    <input type="text" name="descricao"
    class="form-control" required>

    <label>Foto:</label>
    <input type="text" name="foto"
    class="form-control">

    <label>Valor:</label>
    <input type="number" step="0.01"
    name="valor" class="form-control" required>

    <label>Tipo:</label>
    <select name="tipo" class="form-control">
        <option value="C">Casa</option>
        <option value="A">Apartamento</option>
        <option value="T">Terreno</option>
    </select>

    <br>

    <button type="submit" name="salvar"
    class="btn btn-primary">
        Salvar
    </button>

</form>

<?php

if (isset($_POST['salvar'])) {

    require_once "../controller/ImovelController.php";

    $controller = new ImovelController();

    if ($controller->salvar()) {
        echo "Imóvel cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar imóvel!";
    }
}

?>
