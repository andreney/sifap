# Projeto Fabrica de Perfume
> Este é um exemplo de aplicativo solicitado no Processo Seletivo - Desenvolvedor Instituto Flexpeak. Este projeto utilizará o CodeIgniter 3, Bootstrap v4.5.0 e algumas bibliotecas e plug-ins que utilizam principalmente JQuery.

[![NPM](https://img.shields.io/npm/l/react)](https://github.com/andreney/sifap/blob/main/LICENSE)

O sistema basicamente registra matérias primas como fragrâncias, controla um estoque destas matérias e registra os pedidos de fabricação.

## Como Executar o Projeto
* Coloque os arquivos de código deste projeto na localização da pasta web (htdocs, www etc ) em seu servidor.
* Este projeto usou como gerenciador de banco de dados o MySQL, instale e importe o arquivo sysdb.sql que está na raiz do repositório (obs. o banco já vem populado com testes).
* Com o banco criado, modifique o arquivo application / config / database.php. A modificação será somente para informar o username e o password de acesso ao MySQL uma vez que o arquivo importado do SQL já criou o database.
![Exemplo_Edicao](https://github.com/andreney/assets/blob/main/img/mudar_database.png)

## Recursos
> Inclui os seguintes recursos:
* Registro e Atualização de Perfumes
* Registro e Atualização de Matéria Prima (controle do estoque)
* Registro de Pedidos de Fabricação
* Relatórios
    * Perfumes mais fabricados
	* Fragrâncias mais utilizadas

## Frameworks, Bibliotecas e Plugins Utilizados
CodeIgniter Versão 3.1.11
Server Requirements
Recomendado PHP versão 5.6 ou posterior.

Bootstrap v4.5.0 (https://getbootstrap.com/)
Copyright 2011-2020 The Bootstrap Authors
Copyright 2011-2020 Twitter, Inc.
Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
Template: Atlantis Bootstrap 4 Admin Dashboard

Font Awesome Free 5.8.1 by @fontawesome - https://fontawesome.com
License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)

Web Font Loader v1.6.16

jQuery v3.5.1 | (c) JS Foundation and other contributors | jquery.org/license

Select2 4.1.0-beta.1 | https://github.com/select2/select2/blob/master/LICENSE.md

DataTables 1.10.16
©2008-2018 SpryMedia Ltd - datatables.net/license
This source file is free software, available under the following license:
MIT license - http://datatables.net/license

Datetimepicker for Bootstrap 4, version : 4.17.47

Datepicker for Bootstrap v1.9.0

jQuery Mask Plugin v1.14.16
github.com/igorescobar/jQuery-Mask-Plugin

Sweetalert v.2.0

