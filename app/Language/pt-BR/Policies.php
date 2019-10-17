<?php
/**
 * Help/policies page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$termsOfService = <<<'EOS'
Todas as mensagens postadas neste site ou fórum expressam a opinião dos autores,
e não refletem necessariamente as opiniões dos proprietários e administradores deste site.

Ao se registrar no fórum, você concorda em não postar nenhuma mensagem que seja obscena,
vulgar, caluniosa, odiosa, ameaçadora ou que viole quaisquer leis.
Baniremos permanentemente todos os usuários que fizerem isso.

Reservamo-nos o direito de remover, editar ou mover qualquer mensagem por qualquer motivo.
EOS;

$privacyPolicy = <<<'EOS'
Estamos compromissados a respeitar e proteger sua privacidade online..

Só coletamos suas informações pessoais quando você se inscreve voluntariamente em uma
conta de associação para usar o fórum CodeIgniter. Acesso ao nosso
o site geralmente é irrestrito e você pode visitá-lo anonimamente.

Qualquer informação coletada de você não será divulgada, de acordo com BC's
Freedom of Information and Protection of Privacy Act (RSBC 1996 ch. 165).
EOS;

$websiteData = <<<'EOS'
Nossos servidores coletam automaticamente informações essenciais para operar e
mantendo a segurança do site. As informações coletadas podem incluir:
tipo de navegador, nome do provedor de serviços de Internet (ISP) e endereço IP.

Este site contém links para sites de terceiros e não somos responsáveis pelas disposições de privacidade desses outros sites.

Algumas partes do site podem distribuir pequenas informações
(chamados "cookies") para navegadores da Web, para ajudá-lo quando você retornar a
áreas específicas do site. Se você tiver dúvidas sobre cookies, pode alterar
as configurações do navegador da web para não aceitar essas informações ou exibir mensagens de aviso..

Nós convidamos você a ler BCIT's [página principal de privacidade](http://www.bcit.ca/privacy/)
EOS;

return [
	'title'			 => 'Políticas',
	'termsTitle'	 => 'Termos de Serviço',
	'termsText'		 => $termsOfService,
	'privacyTitle'	 => 'Política de Privacidade',
	'privacyText'	 => $privacyPolicy,
	'dataTitle'		 => 'Dados do Website',
	'dataText'		 => $websiteData,
];
