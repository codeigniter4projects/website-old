<?php
/**
 * Responsible disclosure page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$responsibleDisclosure = <<<'EOS'
Se você descobrir uma vulnerabilidade, gostaríamos de saber sobre ela para que possamos tomar
etapas para resolvê-lo o mais rápido possível. Gostaríamos de pedir que você
ajude-nos a proteger melhor nossos clientes e nossos sistemas.

Por favor, faça o seguinte:

- Envie suas descobertas por e-mail para [security@codeigniter.com](mailto:security@codeigniter.com)
	ou relatá-los em nossa [página no HackerOne](https://hackerone.com/codeigniter)
- Não tire proveito da vulnerabilidade ou problema que você descobriu,
por exemplo, baixando mais dados do que o necessário para demonstrar a
vulnerabilidade ou exclusão ou modificação de dados de outras pessoas
- Não revele o problema a outras pessoas até que ele tenha sido resolvido
- Não use ataques à segurança física, engenharia social, negação de serviço distribuída, spam ou aplicativos de terceiros e
- Forneça informações suficientes para reproduzir o problema, para que possamos
resolvê-lo o mais rápido possível. Vulnerabilidades complexas podem exigir explicações adicionais.

O que prometemos:

- Se você seguiu as instruções acima, não tomaremos nenhuma ação legal contra você em relação ao relatório
- Lidaremos com o seu relatório com estrita confidencialidade e não repassaremos seus dados pessoais a terceiros sem sua permissão
- Manteremos você informado sobre o progresso na resolução do problema, e
- Quando apropriado, temos o prazer de creditar aqueles que encontram ou corrigem problemas de segurança.

Nós nos esforçamos para resolver todos os problemas o mais rápido possível e, se aplicável, gostaríamos de desempenhar um papel na publicação do problema após sua resolução.
EOS;


return [
	'title'		 => 'Divulgação Responsável',
	'heading'	 => 'No CodeIgniter, consideramos a segurança de nossos sistemas uma prioridade top. ',
	'subheading' => 'Mas, não importa quanto esforço seja dedicado à segurança do sistema, ainda pode haver vulnerabilidades presentes. ',
	'theText'	 => $responsibleDisclosure
];
