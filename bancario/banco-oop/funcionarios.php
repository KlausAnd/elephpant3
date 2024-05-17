<?php
    require "./autoload.php";
    use Alura\Banco\Modelo\CPF;
    use Alura\Banco\Service\{ControladorBonificacao, Autenticador};
    use Alura\Banco\Funcionario\{Desenvolvedor, Gerente, Diretor};

echo "\tSistema para funcionarios" . PHP_EOL;

$controlador = new ControladorBonificacao();

$dev = new Desenvolvedor(new CPF('111.111.111-11'),'Joao', 1000);
$controlador->addBonificacao($dev);
echo $dev->getNome() . ' - ' . $dev->getSalario() . PHP_EOL;

$manager = new Gerente (new CPF('555.555.555-55'),'Luis', 2000);
$controlador->addBonificacao($manager);
echo $manager->getNome() . ' - ' . $manager->getSalario() . PHP_EOL;

$boss = new Diretor(new CPF('999.999.999-99'),'Raul', 4000);
$controlador->addBonificacao($boss);
echo $boss->getNome() . ' - ' . $boss->getSalario() . PHP_EOL;


echo 'Total de bonificacoes: ' . $controlador->getTotalbonificacoes() . PHP_EOL;

