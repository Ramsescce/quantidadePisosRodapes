<!--Lasse Retangulo: |Crie uma classe que modele um retangulo: a.Atributos:LadoA,LadoB(ou Comprimento e Largura), ou Base e Altura, a escolher)
b.Metodos:Mudar valor dos lados,Retornar valor dos lados, calcular Area e calcular Perimetro; c.Crie um programa que utilize esta classe.
Ele deve pedir ao usuario que infome as medidas de um local .Depois, deve criar um objeto com as medidas e calcular a quantidade
de pisos e de rodapés necessarias para o loca. -->
<?php
class Retangulo{
    private $base;
    private $altura;
    
    function alteraBase($base){
$this->base=$base;
    }
    function alteraAtura($altura){
        $this->altura =$altura;
    }
    //outra opção
    function alteraLados($base,$altura){
        $this->base =$base;
        $this->altura =$altura;
    }
    function retornaBase(){
        return $this->base;
    }
    function retornaAltura(){
        return $this->altura;
    }
    function retornaLados(){
    $lados = array($this->base, $this->altura);
        return $lados;
    }
    function calculaArea(){
        return $this->base*$this->altura;
    }
    function calculaPerimetro(){
        return base+base+altura+altura;
    }
}
echo "Digite o valor da base";
$base = rtrim(fgets(STDIN));
echo "Digite a altura:";
$altura=rtrim(fgets(STDIN));

$retangulo = new Retangulo();
$retangulo->alteraLados($base,$altura);
echo "Quantidade de Pisos:".$retangulo->calculaArea()."\n";
echo "Quantidade de rodapes :".$retangulo->calculaPerimetro();
