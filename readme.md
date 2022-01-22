
# Tecnologias:
- PHP 7
- Jquery 3.6.0
- javaScript 
- Mysql 8

# Soluções:
Como estrutura das pastas, usei MVC por ser de fácil manutenção e ótima organização.
Para fazer enviar os dados da VIEW para o CONTROLER/MODEL usei AJAX, pois fornece boas opções de interatividade e dinâmica. 
Logo, feito isso ficou tranquilo de pegar os dados inseridos no formulário, enviar para a CONTROLLER que faz toda a regra de negocio
finalizando na MODEL que faz a inclusão dos dados no Banco. 
Os arquivos da view mudei para PHP para fazer chamadas via URL, pra isso criei a APP.PHP que faz todo controle do que é colocado na URL e também faz o intermédio do que acontece na VIEW e vai pra CONTROLLER.

Tambem alterei o cadastro de produtos para receber as categorias cadastradas, dessa forma, sempre que cadastrar uma nova categoria
ela vai aparecer tambem no cadastro do produto.

# Como iniciar o projeto:
**Requisitos:**
- Mysql 8
- php 7
- XAMPP (Ou outro parecido)

**Iniciando o projeto:**
0 - Após o download do projeto, coloque ele na pasta htdocs do XAMPP (Ou outro parecido)
1 - Rode o Sql que está na pasta "bd";
2 - Inicie o Apache
3 - No seu navegador de preferencia acesse esssa URL: http://127.0.0.1/assessment-backend-xp/
4 - Sucesso ;)

