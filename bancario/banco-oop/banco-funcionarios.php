<?php
    require "./autoload.php";
    use Alura\Banco\Modelo\CPF;
    use Alura\Banco\Service\ControladorBonificacao;
    use Alura\Banco\Funcionario\{Funcionario, Gerente, Diretor};

echo "\tSistema para funcionarios" . PHP_EOL;


$employee = new Funcionario(new CPF('111.111.111-11'),'Joao', 2270.75);

$manager = new Gerente (new CPF('555.555.555-55'),'Luis', 4680.50);

$boss = new Diretor(new CPF('999.999.999-99'),'Raul', 8988.80);

$controlador = new ControladorBonificacao();
$controlador->addBonificacao($employee);
$controlador->addBonificacao($manager);
$controlador->addBonificacao($boss);

echo $employee->getNome() . ' - ' . $employee->getSalario() . PHP_EOL;
echo $manager->getNome() . ' - ' . $manager->getSalario() . PHP_EOL;
echo $boss->getNome() . ' - ' . $boss->getSalario() . PHP_EOL;

echo $controlador->getTotalbonificacoes() . PHP_EOL;