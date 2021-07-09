### BACKEND PHP - PROJETO API DE AGRUPAMENTO DE VOOS
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


## Authors

* **RAMON MENDES** - *DEVELOPER* - **[GITHUB]**(https://github.com/RamonSouzaDev/Back_End) \* 