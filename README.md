**Instruções**

## Após clonar seguir os seguintes comandos na RAIZ do projeto: 

- **composer install (NUNCA COMPOSER UPDATE)** 

execute o comando dessa forma:  composer install --ignore-platform-reqs


- criar o banco com o seguinte comando : **php artisan mysql:createdb db_doadores**  (SERA CRIADO A TABELA db_doadores baseado  no .env na raiz do projeto pode mudar)
-  depois executar: **php artisan migrate** 
-  caso queira add 50 registros fake na tabela rodar : **php artisan db:seed --class=DoadoresTableSeeder**
-  foi criado dentro de command um schedulle para ser ativado as 00:00 e somar a qtde de cartoes debito e credito 

-- ** a data de nascimento não deu tempo de formatar para o padrão Brasil e o Observer e Listener tb não deu tempo pra fazer o restante esta ok!

