# prognoos-magento-plugin

1. Para baixar o modman, execute na linha de comando:
	`modman -> bash < <(wget -q --no-check-certificate -O https://raw.github.com/colinmollenhour/modman/master/modman-installer)`
2. Instale o modman com o comando a seguir:
	`source ~/.profile`
3. Caso queira confirmar a instalação do modman, rode o seguinte comando: 
	`modman --help`
4. Agora, na raiz do projeto Magento, execute: 
	`modman init`
5. Pronto! Uma pasta com nome de ".modman" foi criada na raiz do projeto. Basta entrar nesta pasta e executar o comando abaixo para clonar nosso projeto:
	`git clone https://github.com/Prognoos/magento-plugin.git`
6. Na raiz do projeto, rode este comando para a criação do link simbólico (isto fará com que o módulo baixado seja "copiado" para o seu projeto):
	`modman deploy-all`
7. Legal! O módulo está instalado no seu projeto.
