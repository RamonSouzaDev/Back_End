<h4 align="center"> 
	🚧 BACKEND PHP API 123 Milhas 🚀 PROJETO API DE AGRUPAMENTO DE VOOS 🚧
</h4> 

### 💻
Desenvolvimento de API para agrupamento de voos, conforme a ida, volta, tarifação e o preço.

**implementação:**

- ### Arquitetura 
- PHP7: https://www.php.net/downloads
- Laravel 5.6: https://laravel.com/docs/5.6

- ### Configurações
- O endereço da api utilizada como fonte de dados (http://prova.123milhas.net/) pode ser alterado no arquivo .env:
- MILHAS_API_ADDRESS

**ENDPOINT:**

| Operação        | Entrada      | Saída |
| ------|-----|-----|
| **/api/getFlights**<br> | <span style="color:green">**GET**</span>  |  (array com todos voos)    | 
| **/api/getFlights/groupFlight**<br>  |  <span style="color:red">**GET**</span> |  (array com voos ordenados) |

## 🚀 Como executar o projeto

Podemos considerar este projeto como sendo com uma parte:
1. Back end Laravel

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [PHP][PHP], , [Laravel][Laravel]. 
Além disto é bom ter um editor para trabalhar com o código como [VSCode][vscode]


### 🧭 Rodando a aplicação (Back End)

```bash 
# Clone este repositório
$ git clone https://github.com/RamonSouzaDev/Back_End

# Acesse a pasta do projeto no seu terminal/cmd
$ cd back_end

# Instale as dependências
$ composer install / composer update

# Execute a aplicação em modo de desenvolvimento
$ php artisan serve

# A aplicação será aberta na porta:8000 - acesse http://localhost:8000

```

## 🛠 Testes Unitários

As seguintes ferramentas foram usadas na construção do projeto:

- Acesse a pasta do projeto no seu terminal/cmd
- Execute o seguinte comando no terminal
- vendor/bin/phpunit  
- Será gerado 4 testes.

## Authors

* **RAMON MENDES** - *DEVELOPER* - **[GITHUB]**(https://github.com/RamonSouzaDev/Back_End) \* 