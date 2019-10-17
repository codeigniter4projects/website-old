<?php
/**
 * Help/legal page messages for the CodeIgniter website.
 * The text blocks use markdown format.
 */
$trademarks = <<<'EOS'
CodeIgniter® é uma marca registrada do British Columbia Institute of Technology (BCIT),
sendo transferido da EllisLab, Inc em 2014.

<div>
<img class="pull-left" src="/assets/images/tl-ci.gif"/>
O logotipo do CodeIgniter é uma marca não registrada de propriedade do BCIT,
transferidos da EllisLab, Inc. Fornecemos {marksLink}
para uso em seus projetos, sujeito às diretrizes abaixo.
</div>

![http://creativecommons.org/licenses/by/4.0/](https://i.creativecommons.org/l/by/4.0/88x31.png)
Este trabalho está licenciado sob uma licença Creative Commons Attribution 4.0 International.

---
BCIT e BRITISH COLUMBIA INSTITUTE OF TECHNOLOGY e as marcas distintivas
(ex. o BCIT logo) são marcas registradas da British Columbia Institute of Technology
EOS;

$logoGuidelines = <<<'EOS'
Você pode usar o logotipo CodeIgniter em seu projeto, desde que você ...

- Não faça uso não autorizado ou confuso da marca registrada CodeIgniter ou de uma variação dela, incluindo a impressão de que o BCIT patrocina ou endossa seu site, produtos ou serviços.
- Use o símbolo de registro de marca ® quando usar a marca registrada CodeIgniter.
- Use letras maiúsculas e negrito ou itálico para distinguir a marca registrada do CodeIgniter do texto ao seu redor.
- Coloque uma legenda visível pelo menos uma vez nas páginas da Web usando a marca comercial CodeIgniter e na página de título de qualquer documentação ou literatura de vendas com a marca registrada CodeIgniter.Um exemplo de uma legenda aceitável é: "A marca CodeIgniter pertence e pode ser registrada pelo BCIT".
- coloque um aviso claramente pelo menos uma vez em páginas da Web que usam a marca registrada CodeIgniter e na página de título de qualquer documentação ou literatura de vendas que ostente a marca registrada CodeIgniter. Um exemplo de isenção de responsabilidade aceitável é: "\_________ é um independente \_________ e não foi autorizado, patrocinado ou aprovado pelo BCIT."
	[Em cada caso, preencha o espaço em branco com o nome e o tipo do seu produto.]
- Não altere a ortografia, faça outras alterações na marca comercial do CodeIgniter ou combine a marca comercial do CodeIgniter com qualquer outra marca comercial, termo ou designação.
- Use a marca registrada CodeIgniter apenas em conexão com produtos e serviços diretamente relacionados ao CodeIgniter ou serviços associados a essa marca registrada.
- Não use a marca registrada CodeIgniter ou qualquer variação dela em seu nome de domínio ou URL.
- Não use a marca registrada CodeIgniter para seus próprios produtos e serviços relacionados à publicação na Web, frameworks de programação ou software relacionado.
- Não reivindique direitos de propriedade na marca registrada CodeIgniter.
EOS;

$thirdParty = <<<'EOS'
A menção de empresas e produtos de terceiros neste site é apenas para fins informativos e não constitui um endosso nem uma recomendação.
EOS;

$externalLinks = <<<'EOS'
O BCIT e a CodeIgniter Foundation não fazem nenhuma representação sobre qualquer
outros sites que você pode acessar a partir daqui. Quando você acessa um site externo,
por favor, entenda que é independente do site do BCIT e deste
site e que não temos controle sobre o conteúdo desse site. Um link para um site que não seja do BCIT não significa que o BCIT ou a CodeIgniter Foundation endossem ou aceitem qualquer responsabilidade pelo conteúdo ou uso desse site.
EOS;

return [
	'title'				 => 'As Letras Pequenas',
	'marksTitle'		 => 'Marcas Comerciais',
	'marksText'			 => $trademarks,
	'marksLink'			 => '[várias versões do logo do CodeIgniter](/data/ci-logo.zip)',
	'logoTitle'			 => 'Política de Privacidade',
	'logoText'			 => $logoGuidelines,
	'logoLink'			 => '[várias versões do logo do CodeIgniter 4](/data/ci4-logo.zip)',
	'thirdPartyTitle'	 => 'Dados do Website',
	'thirdPartyText'	 => $thirdParty,
	'externalLinksTitle' => 'Links para Outros Web Sites',
	'externalLinksText'	 => $externalLinks,
	'endText'			 => 'Nós lhe convidamos para ler BCIT\'s [página principal de privacidade](http://www.bcit.ca/privacy/)'
];
