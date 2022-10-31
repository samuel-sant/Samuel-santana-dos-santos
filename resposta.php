<?php 
$sql = "SELECT TB_banco.nome, TB_convenio.verba, TB_contrato.codigo, TB_contrato.data_inclusao, TB_contrato.valor, TB_contrato.prazo FROM TB_banco inner join TB_convenio on TB_banco.codigo=TB_convenio.codigo
inner join TB_contrato em TB_convenio.codigo= TB_contrato.codigo"
?>
