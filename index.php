<?php 

//https://www.youtube.com/watch?v=QaM22Qgo3gM&list=PLwXQLZ3FdTVEau55kNj_zLgpXL4JZUg8I&index=3

// class Pessoa {
//     public $nome;
//     public $idade;

//     public function Falar(){
//         echo "Falou";
//     }
// }

// $rodrigo = new Pessoa();
// $rodrigo->nome = "Rodrigo Santod de Oliveira";
// $rodrigo->idade = 25;
// $rodrigo->Falar();

class Login {

    public $email;
    public $senha;
//criação de um método construtor inicializado ao criar uma instancia
    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){

        return $this->email;
    }
    public function getSenha(){

        return $this->senha;
    }

    public function setEmail($e){ //passados por parametro
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }   

    public function setSenha($s){

        $this->senha = $s;
    }

    public function Logar() {
    if($this->email == "teste@teste.com" and $this->senha == "123456"):
        echo "Logado com sucesso !";
    else:
         echo "Dados inválidos";
    endif;

    }
}

$logar = new Login("teste@teste.com", "123456", "Inaldo Monteiro");
// $logar->setEmail("teste/@teste.com");
// $logar->setSenha("123456");
// $logar-> Logar();
// echo "<br>";
// echo $logar->getEmail();
// echo $logar->getNome();


//Criando classe genérica

class Veiculo{

    protected $modelo;
    public $cor;
    public $ano;

    public function Andar(){

    }

    public function Parar(){

    }

    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getModelo(){
        return  $this->modelo;
    }
}





class Carro extends Veiculo{

    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }

    public function limpador(){
        echo "Liguei o limpador";
    }

   
}

class Moto extends Veiculo {

    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){

    }

    public function Parar(){

    }

    public function grau(){
        echo "Dei o grau";
    }
}

// $carro = new Carro();
// $carro->modelo = "Gol";
// $carro->cor = "Vermelho";
// $carro->modelo = "2018";
// $carro->Andar();
// var_dump($carro);
// $moto = new Moto();
// $moto->grau();
$veiculo = new Veiculo();
$veiculo->setModelo("HILUX");
echo $veiculo->getModelo();

//Estamos na aula 06