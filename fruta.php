
<?php
class Fruta {

    public $nome;
    public $cor;

    // metodos

    /*this = este/ atribui; 
    new = cria objt;
    -> = acessa um metodo; 
    function= criar metodo;*/

    function __construct($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;
    }

    function set_name($nome){
        $this->nome = $nome;
    }
    function set_cor($cor){
        $this->cor = $cor;
    }

    function get_name(){
        return $this ->nome;
    }
    function get_cor(){
        return $this ->cor;
    }
}

$laranja = new Fruta("laranja_ifsp", "laranja");

//atribuindo um nome para meu obj pelo metodo set
//$laranja-> set_name("laranja_ifsp");
echo $laranja->nome;
echo "</br>".$laranja->get_name();
//$laranja->set_cor("laranja");
echo "</br>".$laranja ->get_cor();
?>