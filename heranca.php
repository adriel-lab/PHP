<?php

echo "<h1> Resolver o exercício a seguir utilizando código PHP com “Classes” e “Heranças” </h1>";
echo "<h2> Crie um progrma que utiliza classes de herança que podem ser utilizadas para diversar
marcas e veículos </h2>";
//Metodos getter e setter conforme as instancias passadas.
class Carro extends Veiculo {
  public function SetModelo($modelo) {
    $this -> modelo = $modelo;
  } 
  public function GetModelo(){
   return $this -> modelo;
}
public function SetCor($cor) {
    $this -> cor = $cor;
    } 
    public function GetCor(){
        return $this -> cor;
  }

  public function SetMarca($marca) {
    $this -> marca = $marca;
    } 
    public function GetMarca(){
        return $this -> marca;
  }
  public function SetAno($ano) {
    $this -> ano = $ano;
      } 
      public function GetAno(){
    return $this -> ano;
    }
    public function SetVersao($versao) {
        $this -> versao = $versao;
        } 
        public function GetVersao(){
      return $this -> versao;
      }

}
// As instancias declaradas, ou propriedades.
class Veiculo{
    public $modelo;
    public $cor;
    public $marca;
    public $ano;
    public $versao;
}
//Crição e saida do objeto;
$carro = new Carro();
$carro -> SetModelo('Cobalt');
$carro -> SetCor('Prata');
$carro -> SetMarca('Chevrolet');
$carro -> SetAno('2018');
$carro -> SetVersao('LTZ');
echo "Modelo: " . $carro -> GetModelo();
echo "<br>";
echo "Cor: " . $carro -> GetCor();
echo "<br>";
echo "Marca: " . $carro -> GetMarca();
echo "<br>";
echo "Ano: " . $carro -> GetAno();
echo "<br>";
echo "Versao: " . $carro -> GetVersao();
echo "<br>";
echo "<br>";
$carro1 = new Carro();
$carro1 -> SetModelo('Corolla');
$carro1 -> SetCor('Branco');
$carro1 -> SetMarca('Toyota');
$carro1 -> SetAno('2022');
$carro1 -> SetVersao('Altis');
echo "Modelo: " . $carro1 -> GetModelo();
echo "<br>";
echo "Cor: " . $carro1 -> GetCor();
echo "<br>";
echo "Marca: " . $carro1 -> GetMarca();
echo "<br>";
echo "Ano: " . $carro1 -> GetAno();
echo "<br>";
echo "Versao: " . $carro1 -> GetVersao();
//faça seu teste aqui a baixo no objeto que esta comentado! ;
echo "<br>";
echo "<br>";
/*
$carro2 = new Carro();
$carro2 -> SetModelo(' ');
$carro2 -> SetCor('  ');
$carro2 -> SetMarca(' ');
$carro2 -> SetAno('  ');
$carro2 -> SetVersao(' ');
echo "Modelo: " . $carro2 -> GetModelo();
echo "<br>";
echo "Cor: " . $carro2 -> GetCor();
echo "<br>";
echo "Marca: " . $carro2 -> GetMarca();
echo "<br>";
echo "Ano: " . $carro2 -> GetAno();
echo "<br>";
echo "Versao: " . $carro2 -> GetVersao();

*/


?>