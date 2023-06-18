


## TwoHG-Petshop

[Acesse nosso site aqui](https://twohgpetshop.000webhostapp.com/)

### Membros 

#### Um projeto desenvolvido por:
[Giovanna](https://github.com/GiPaiva) | 
[Guilherme](https://github.com/GuiLeoni) | 
[Henrique](https://github.com/Henrique-Botelho) |
[Heitor](https://github.com/heitorsclaudino)

### Introdução

O projeto foi desenvolvido utilizando:

HTML - HyperText Markup Language
CSS - Cascading Style Sheets
PHP - para a integração com o banco de dados e dinâmica das páginas
Javascript - para realizar algumas validações e auxiliar com elementos dinâmicos das páginas

MySQL - foi o banco de dados escolhido

Estrutura do projeto:

Temos as pastas css, html, js e php para agrupar cada linguagem em sua devida pasta.

**Nota** - A pasta HTMl tem seus arquivos em PHP, pois há recursos necessários da linguagem de programação em todas as páginas, mas o código principal se encontra em HTML. 

**Você sabe o que é um CRUD?** Caso não, talvez seja interessante você dar uma olhada nesse [link](https://coodesh.com/blog/dicionario/o-que-e-crud/) antes de prosseguir, é um termo técnico e bem fácil de entender, mas infelizmente não temos como explicar nesse read.me. 

### O que é o TwoHg Petshop?

O TwoHg Petshop é um site desenvolvido para uma empresa fictícia de petshop. Criamos ele com o intuito de treinar nossos conhecimentos em linguagens como o PHP e desenvolvemos alguns CRUDs utilizando banco de dados MySQL. 

Nosso projeto possui:

- Cruds para os clientes e administradores do petshop, pets e agendamentos de consultas.

- Sistema de login para proteção e autenticidade dos usuários

- Páginas inteiramente feitas e estilizadas do zero

- Uma área exclusiva para administradores, onde quem tem acesso pode realizar as operações de CRUD para todas as outras entidades do projeto (funcionários, clientes, pets e consultas)



#### As entidades e suas funcionalidades

***Os clientes*** podem são as pessoas que tem livre acesso a home do nosso site. Ao se cadastrarem, geram um login próprio que garantirá a segurança e autenticidade dos seus dados, agora salvos em banco de dados remoto. Com o login efetuado, esses usuários poderão acessar outras partes da aplicação como o Perfil, onde seus dados e pets ficam à mostra e estão passíveis de edição. Também podem agendar consultas com os profissionais em datas/horários disponíveis.

***Os pets*** também possuem cadastro, porém não possuem conta ou login. Estão sempre vinculados a um dono, previamente cadastrado. Possuem dados como: nome, idade, raça, porte, dono a quem está vinculado e observações. 

***Os agendamentos*** são as consultas marcadas tanto pelos clientes, quanto pelos administradores do site. É a parte do sistema responsável por marcar consultas somente em datas e horários disponíveis no calendário da clínica. A entidade possui dados como: dia, hora, veterinário responsável, pet e dono do pet.

***Os administradores*** ocupam o maior nível da aplicação, possuem acesso a todos os dados de todas as entidades podendo criar, atualizar, ler e excluir qualquer cliente, pet ou agendamento. São os únicos responsáveis por cadastro de novos administradores.
