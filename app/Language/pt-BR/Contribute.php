<?php
/**
 * Contribute page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$introductionContribution = <<<'EOS'
CodeIgniter é um projeto conduzido pela comunidade e aceita contribuições de código e
documentação da comunidade. Essas contribuições são feitas na forma de
Issues ou Pull Requests no [repositório do CodeIgniter](https://github.com/bcit-ci/CodeIgniter) no GitHub.

Issues são uma maneira rápida de apontar um bug. Se você encontrar um bug ou um erro de documentação no CodeIgniter, verifique algumas coisas primeiro:

- Já não há uma Issue aberta
- A issue já foi corrigida (verifique o develop branch, ou olhe por Issues fechadas)
- É algo realmente óbvio que você mesmo possa consertar?
- Se você não tiver certeza se encontrou um erro, inicie um novo thread no fórum CodeIgniter, na [seção Issues](http://cisite.local/%3C?=%20config_item(%27mybb_forum_url%27)%20?%3E/forum-19.html)!

Relatar issues é útil, mas uma abordagem ainda melhor é enviar um Pull Request,
o que é feito por “forcando” o repositório principal e commitando para sua própria cópia.
Isso exigirá que você use o sistema de controle de versão chamado Git.

*Nota: os dois links acima do GitHub são para o repositório do CodeIgniter 3. Eles serão substituídos pelos do CodeIgniter 4 assim que ele for lançado.*

EOS;

$ci4Contributions = <<<'EOS'
CodeIgniter 4 possui seu próprio [repositório no Github](https://github.com/codeigniter4/CodeIgniter4).
Ele desvia o suficiente do CodeIgniter 3 que queremos mantê-los separados.
O roteiro do CodeIgniter 4 é explicado em [nosso fórum](http://forum.codeigniter.com/forum-28.html),
eo trabalho a ser feito é detalhado nas [issues do repositório](https://github.com/codeigniter4/CodeIgniter4/issues).
EOS;

$securityContributions = <<<'EOS'
Problemas de segurança devem ser reportados com um email à nossa equipe de segurança, em vez de serem apresentados no fórum ou levantados como uma issue no Github, obrigado!
Leia mais sobre [divulgação responsável](/contribute/responsible).
EOS;

$testingContributions = <<<'EOS'
#### Testadores
Sempre precisamos de feedback sobre o que funciona e o que não funciona! A maior parte do esforço de desenvolvimento está na versão 3, e é aí que a necessidade é maior.
Se você encontrar algo que definitivamente é um bug e você é um usuário do Github,
por favor crie uma nova "issue". Se você não é um usuário do Github ou não tem certeza se encontrou um erro, inicie um novo thread no CodeIgniter
fórum [seção de Issues](https://forum.codeigniter.com/forum-19.html)!

*CodeIgniter 4 tem seu próprio [subforum de suporte](https://forum.codeigniter.com/forum-30.html).		*
EOS;

$writingContributions = <<<'EOS'
#### Escritores

Todo projeto precisa de boa documentação! O guia do usuário do CodeIgniter faz parte do
[projeto no Github](https://github.com/bcit-ci/CodeIgniter) (mencionado acima),
e sempre há espaço para mais tutoriais.

O guia do usuário do CodeIgniter 4 faz parte de seu próprio [repositório](https://github.com/codeigniter4/CodeIgniter4).
EOS;

$evangelistContributions = <<<'EOS'
#### Evangelistas

É preciso espalhar a palavra sobre projetos bons e dignos, que achamos que o CodeIgniter é :)
Você pode ajudar participando ativamente dos fóruns, respondendo a perguntas e
espalhando a palavra dentro de sua comunidade de desenvolvedores ou usuários..
EOS;

$moderatorContributions = <<<'EOS'
#### Moderadores

O fórum pode sempre usar moderadores, para se certificar de que as discussões/threads permanecem no tópico, e para eliminar os usuários inadequados ou comentários!
EOS;

$designerContributions = <<<'EOS'
#### Designers

Sugestões e ajuda com nosso site, Guia do Usuário e design de fórum são sempre bem-vindos!
Estamos trabalhando em temas para cada um deles, que serão compartilhados em seu próprio repositório Github.
EOS;

$coderContributions = <<<'EOS'
#### Codificadores

Se você deseja se envolver na criação da próxima versão do CodeIgniter, junte-se a nós no [Github](https://github.com/bcit-ci/CodeIgniter)!
Um detalhado [guia de contribuição](http://cisite.local/userguide3/contributing/index.html)
está no Guia do Usuário, mas os pontos principais são garantir que seu código esteja em conformidade com
nosso [guia de estilo](http://cisite.local/userguide3/general/styleguide.html),
que está devidamente documentado e você usa o
[Git-Flow](http://nvie.com/posts/a-successful-git-branching-model/) branching model.

*CodeIgniter 4 links equivalente: seu [repositório](https://github.com/codeigniter4/CodeIgniter4),
seu [guia de contribuição](https://github.com/codeigniter4/CodeIgniter4/tree/develop/contributing),
e seu [estilo](https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing/styleguide.rst).*
EOS;

$reviewerContributions = <<<'EOS'
#### Revisores

Todo projeto precisa de um grupo principal de desenvolvedores, familiarizado com os padrões do projeto
e convenções, para revisar as melhorias e correções propostas.
Temos sido muito feliz com o nosso grupo de revisores até agora, e esperamos recrutar um pouco mais.
EOS;


return [
	'title'				 => 'Contribua para o CodeIgniter',
	'heading'			 => 'Existem várias maneiras de contribuir para o projeto CodeIgniter, seja você um desenvolvedor ou não. ',
	'topText'			 => $introductionContribution,
	'ci4Title'			 => 'CodeIgniter 4',
	'ci4Text'			 => $ci4Contributions,
	'securityText'		 => $securityContributions,
	'notcoderSection'	 => 'Não é um Programador?',
	'testerText'		 => $testingContributions,
	'writerText'		 => $writingContributions,
	'evangelistText'	 => $evangelistContributions,
	'moderatorText'		 => $moderatorContributions,
	'designerText'		 => $designerContributions,
	'coderSection'		 => 'Você é um Programador?',
	'coderText'			 => $coderContributions,
	'reviewerText'		 => $reviewerContributions,
	'ackTitle'			 => 'Reconhecendo nossos principais colaboradores',
	'ack1'				 => '... CodeIgniter 3',
	'ack2'				 => '... traduções do CodeIgniter 3',
	'ack3'				 => '... CodeIgniter4',
	'ack4'				 => '... traduções do CodeIgniter 4',
	'ack5'				 => '... nosso Website original',
	'ack6'				 => '... nosso Website revisado (CI4)',
];
