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
| **/getFlights**<br>(N/A) | <span style="color:green">**GET**</span>  |  (array com todos voos)    | 
| **/getFlights/groupFlight**<br>(N/A)  |  <span style="color:red">**GET**</span> |  (array com voos ordenados) |


## Authors

* **RAMON MENDES** - *DEVELOPER* - **[LinkeDin]**(https://github.com/RamonSouzaDev/Back_End) \* 