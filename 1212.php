<?php
$diretor = calcularDirecao();
$funcionario = calcularfuncionario();
$estagiario = calcularEstagiario();

function calcularDirecao(){
$diretor=9600;
$salario= $diretor*0.20;
$salario= $diretor+$salario;
return $salario;
}
echo "O salário do Diretor + o bonus é de $diretor <br/>";
function calcularfuncionario(){
    $funcionario=2000;
    $salario= $funcionario*0.10;
    $salario= $funcionario+$salario;
    return $salario;
    }
    echo "O salário do funcionário + o bonus é de: $funcionario <br/>";
    function calcularEstagiario(){
        $estagiario=1000;
        $salario= $estagiario*0.05;
        $salario= $estagiario+$salario;
        return $salario;
        }
        echo "O salário d o estagiário + o bonus é de $estagiario <br/>";
?>