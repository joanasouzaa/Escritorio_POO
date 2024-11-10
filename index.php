<?php

require_once 'class/Escritorio.php';
require_once 'class/Armario.php';
require_once 'class/Gaveta.php';
require_once 'class/Documento.php';
require_once 'class/Objeto.php';
require_once 'class/Pasta.php';


$documento1 = new Documento("Contrato de Empresa Terceira", "Contrato assinado pela empresa XXX", "2006-03-20");
$documento2 = new Documento("Justificativa de Compra", "Justificava para compra de ar-condicionado da sala de reunião YYYY", "2024-01-09");
$documento3 = new Documento("Relatório de vendas", "Relatório das vendas do mês de agosto/2015", "2015-09-01");
$documento4 = new Documento("Contrato de Venda", "Contrato da venda de um imóvel", "2023-04-01");

$objeto1 = new Objeto("Grampeador", "Grampeador preto da recepção", 0.250);
$objeto2 = new Objeto("Calendário 2024", "Calendário ano 2024 - não utilizado", 0.100);
$objeto3 = new Objeto("Agenda de reuniões", "Agenda de reuniões - ano 2023", 0.300);
$objeto4 = new Objeto("Notebook", "Notebook Dell - queimado", 2.100);

$pasta1 = new Pasta("Relatórios de Compras da empresa", "Pasta contendo relatórios de Compras da empresa", "Financeiro");
$pasta2 = new Pasta("Admissões - Julho/2020", "Pasta com registros das admissões da empresa no no mês de Julho de 2020", "RH");
$pasta3 = new Pasta("Contas a Receber", "Pasta com contas a receber - Maio/2024", "Finaceiro");
$pasta4 = new Pasta("Folders para recepção", "Pasta com folders para deixar na recepção da empresa", "Marketing");


$gaveta1 = new Gaveta([$documento1]);
$gaveta2 = new Gaveta([$documento2, $objeto2, $pasta2]);
$gaveta3 = new Gaveta([$documento3, $objeto3, $pasta3, $objeto1]);
$gaveta4 = new Gaveta([$documento4, $objeto4, $pasta4]);

$armario1 = new Armario([$gaveta1]);
$armario2 = new Armario([$gaveta3]);
$armario3 = new Armario([$gaveta4]);
$armario4 = new Armario([$gaveta2]);

$escritorio = new Escritorio([$armario1, $armario2, $armario3, $armario4]);

$escritorio->auditoria();
