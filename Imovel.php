
<?php
require_once "Banco.php";
require_once "../Conexao.php";

class Imovel extends Banco {

    private $id;
    private $descricao;
    private $foto;
    private $valor;
    private $tipo;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function save() {
        $sql = "INSERT INTO imovel
        (descricao, foto, valor, tipo)
        VALUES
        (:descricao, :foto, :valor, :tipo)";

        $conexao = Conexao::getConexao();
        $comando = $conexao->prepare($sql);

        $comando->bindValue(":descricao", $this->descricao);
        $comando->bindValue(":foto", $this->foto);
        $comando->bindValue(":valor", $this->valor);
        $comando->bindValue(":tipo", $this->tipo);

        return $comando->execute();
    }

    public function listAll() {}
    public function find() {}
    public function remove() {}
}
?>
