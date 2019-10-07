<?php
/**
 * Contribute page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$introductionContribution = <<<'EOS'
CodeIgniter - это проект, управляемый сообществом, и принимает материалы и документы от сообщества. Эти вклады делаются в форме вопросов или запросов извлечения в [хранилище CodeIgniter](https://github.com/bcit-ci/CodeIgniter) на GitHub.

Проблемы - Это быстрый способ указать на ошибку. Если вы обнаружите ошибку в документации или в CodeIgniter, то сначала проверьте несколько вещей:

- Там еще нет открытого вопроса.
- Проблема уже исправлена (проверьте ветку разработки или найдите закрытые проблемы)
- Что-то действительно очевидное, что вы сами это исправляете ?
- Если вы не уверены, что нашли ошибку, создайте новую тему на форуме CodeIgniter в разделе [Проблемы](http://cisite.local/%3C?=%20config_item(%27mybb_forum_url%27)%20?%3E/forum-19.html)!

Отчеты о проблемах полезны, но еще лучший подход - это отправить запрос на извлечение, который выполняется путем «форкирования» основного репозитория и фиксации вашей собственной копии. Это потребует от вас использовать систему контроля версий под названием Git. 		
  
*Примечание: Две ссылки GitHub выше предназначены для репозитория CodeIgniter 3. Они будут заменены на CodeIgniter 4 после его запуска.*		

EOS;

$ci4Contributions = <<<'EOS'
CodeIgniter 4 имеет свой собственный [репозиторий Github](https://github.com/codeigniter4/CodeIgniter4). 
Он достаточно отличается от CodeIgniter 3, поэтому мы хотим их отделить.
Дорожная карта CodeIgniter 4 описана на [нашем форуме](http://forum.codeigniter.com/forum-28.html), 
и работа, которая должна быть сделана, подробно описана в [проблемах хранилища](https://github.com/codeigniter4/CodeIgniter4/issues). 		
EOS;

$securityContributions = <<<'EOS'
О проблемах безопасности следует сообщать в нашу службу безопасности по электронной почте, 
а не поднимать на форуме или поднимать как проблему Github, спасибо !
Подробнее об [ответственном раскрытии](/contribute/responsible). 		
EOS;

$testingContributions = <<<'EOS'
#### Тестеровщики

Нам всегда нужны отзывы о том, что работает, а что нет !

Большая часть усилий по разработке сосредоточена на версии 3, так что именно в этом и есть необходимость.

Если вы обнаружите что-то, что определенно является ошибкой, и вы являетесь пользователем Github, пожалуйста, создайте новую «проблему».

Если вы не являетесь пользователем Github или не уверены, что обнаружили ошибку, создайте новую тему на форуме CodeIgniter в разделе [«Проблемы»](https://forum.codeigniter.com/forum-19.html)!

*CodeIgniter 4 имеет свой собственный [подфорум поддержки](https://forum.codeigniter.com/forum-30.html).		*
EOS;

$writingContributions = <<<'EOS'
#### Писатели
   
Каждый проект нуждается в хорошей документации !

Руководство пользователя CodeIgniter является частью
[проекта Github](https://github.com/bcit-ci/CodeIgniter) (упомянутое выше), 
и всегда есть место для новых уроков.

Руководство пользователя CodeIgniter 4 является частью его собственного [репозитория](https://github.com/codeigniter4/CodeIgniter4).
EOS;

$evangelistContributions = <<<'EOS'
#### PR-менеджеры

Необходимо распространить информацию о хороших и достойных проектах, таких, как мы думаем, CodeIgniter :)
Вы можете помочь, активно участвуя в форумах, отвечая на вопросы и
распространяя информацию внутри вашего сообщества пользователей.		
EOS;

$moderatorContributions = <<<'EOS'
#### Модераторы
   
Форум всегда может использовать модераторов, чтобы убедиться, что обсуждения или темы остаются в своих разделах и отсеять плохих пользователей или комментарии !		
EOS;

$designerContributions = <<<'EOS'
#### Дизайнеры:

Предложения и помощь с нашим сайтом, руководством пользователя и дизайном форума всегда приветствуются !

Мы работаем над темами для каждого из них, которые будут доступны в их собственном репозитории Github. 		
EOS;

$coderContributions = <<<'EOS'
#### Программисты
   
Если вы хотите принять участие в создании следующей версии CodeIgniter,
присоединяйтесь к нам на [Github](https://github.com/bcit-ci/CodeIgniter) ! 
Подробный [справочник по вкладам](http://cisite.local/userguide3/contributing/index.html) 
в руководстве пользователя, но главное, чтобы ваш код соответствовал
нашему [руководству по стилю](http://cisite.local/userguide3/general/styleguide.html), 
что это правильно задокументировано и что вы используете
[GIT-Flow](http://nvie.com/posts/a-successful-git-branching-model/) модель ветвления.

*CodeIgniter 4 эквивалентные ссылки:
его [хранилище](https://github.com/codeigniter4/CodeIgniter4), 
его [руководство вклада](https://github.com/codeigniter4/CodeIgniter4/tree/develop/contributing), 
и его [стиль](https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing/styleguide.rst).*
EOS;

$reviewerContributions = <<<'EOS'
#### Рецензенты

Каждый проект нуждается в основной группе разработчиков, знакомых с проектными стандартами и соглашениями, для рассмотрения предлагаемых улучшений и исправлений.

Нам очень повезло с нашей группой рецензентов, и мы надеемся нанять еще несколько.		
EOS;


return [
	'title'				 => 'Посодействовать CodeIgniter',
	'heading'			 => 'Есть много способов внести свой вклад в проект CodeIgniter, являетесь ли вы разработчиком или нет. ',
	'topText'			 => $introductionContribution,
	'ci4Title'			 => 'CodeIgniter 4',
	'ci4Text'			 => $ci4Contributions,
	'securityText'		 => $securityContributions,
	'notcoderSection'	 => 'Вы не программист ?',
	'testerText'		 => $testingContributions,
	'writerText'		 => $writingContributions,
	'evangelistText'	 => $evangelistContributions,
	'moderatorText'		 => $moderatorContributions,
	'designerText'		 => $designerContributions,
	'coderSection'		 => 'Вы программист ?',
	'coderText'			 => $coderContributions,
	'reviewerText'		 => $reviewerContributions,
	'ackTitle'			 => 'Признание наших лучших участников',
	'ack1'				 => '... CodeIgniter 3',
	'ack2'				 => '... CodeIgniter 3 Переводы',
	'ack3'				 => '... CodeIgniter4',
	'ack4'				 => '... CodeIgniter 4 Переводы',
	'ack5'				 => '... наш оригинальный вебсайт',
	'ack6'				 => '... наш обновленный вебсайт (CI4)',
];
