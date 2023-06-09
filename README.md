**Instruções**

## Após clonar seguir os seguintes comandos na RAIZ do projeto: 

- **composer install (NUNCA COMPOSER UPDATE)**
- ** php artisan mysql:createdb  (SERA CRIADO A TABELA laravel_terrenos baseado  no .env na raiz do projeto pode mudar)**
- ** php artisan migrate **


## Na tabela users add um "nome" na coluna nome: 

- **na coluna email:teste@teste.com.br **
- **na coluna password:"$2y$10$8HPjH9X1aq2x3wmWfEiyi.swyrAYKnJPX9rBixpc6oataHGjMVnsi" **

## Após os procedimentos acima na raiz do projeto: 
- ** php artisan serve (IRA RODAR EM :"localhost:8000")**
- ** Entrar na tabela "profile" e usar essas informacoes como exemplo:  ** 

# MARKDOWN

## TABELA "profile"

| profile |  viewall  | icon            | nameprofile | deleted_at
|:--------|:---------:|----------------:|------------:|----------:|
| ADMIN   |     1     | fas fa-user-cog |    ADMIN    | NULL      |
| MEDIUM  |     0     | fas fa-user-cog |    MÉDIO    | NULL      |
| BASIC   |     0     | fas fa-user-cog |    BÁSICO   | NULL      |


 

  ## Tabela "module"
  
  | **id**   |   name        |    link     |      icon         |      order_module   |   icon_module |  color |  color_text |  deleted_at
  |:---------|:-------------:|------------:|------------------:|--------------------:|--------------:|-------:|------------:|-----------:|
  | 1        |'Visão Geral'  |   '/home'   |'fas fa-chart-pie' |      '1'            |  'dashboard'  | 'red'  |   'white'   |  NULL      |
  | 2        |'Usuários'     |'/users'     |   'x'             |      '2'            | 'pen'         |'white' |  'white'    |  NULL      | 
  | 3        |'Cliente'      |             |   'x'             |      '3'            | 'pencil'      |'white' |  'white'    |  NULL      |

  
  
  ## Tabela "submenu"
  
  | name      |       link  |    page   |   icon |  order | id_module  |  deleted_at| 
  |:----------|:-----------:|----------:|-------:|-------:|-----------:|-----------:|
  | 'Cadastro'| '/customer' | 'empresa' |  'x'   |   '1'  |    '2'     |   NULL     |
   

  ## Tabela "module_profile"
  
   |**id_profile| id_module   | deleted_at** | 
   |:-----------|:-----------:|-------------:|
   |    '1'     |     '1'     |    NULL      |
   |    '1'     |     '2'     |    NULL      |
   |    '1'     |     '3'     |    NULL      |


 
