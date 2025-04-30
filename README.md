# DoDoList-back

## Instruções para rodar o projeto

1. Certifique-se de ter o Node.js instalado em sua máquina, php 8.4.

2. Clone este repositório em sua máquina local.

    ```bash
    git clone https://github.com/Rolig4n/DoDoList-back.git
    ```

3. Navegue até o diretório do projeto.

    ```bash
    cd DoDoList-back
    ```

4. Instale as dependências do projeto.

    ```bash
    npm install
    ```

5. Renomeie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente necessárias como o banco de dados

6. Execute as migrações para o banco de dados.

```bash
php artisan migrate
```

7. Inicie o servidor de desenvolvimento.

    ```bash
    php artisan serve
    ```

8. O servidor estará em execução em `http://localhost:8000`.

caso tenha um problema de *Failed to listen on 127.0.0.1:8000 (reason: ?)*, abre o terminal e rode o seguinte comando

```bash
    php --ini
```
isso era listar o arquivo de configuração php.ini carregado, clique nele e verifique se a variavel `variables_order` tem o seguinte valor `"GPCS"`

## Decisões

- O Back end foi a parte mais fácil do projeto, iniciar por ele foi o mais natural pela minha facilidade
Comecei criando a classe, controller e a migração do banco de dados relacionado a Tarefa.
Depois estabeleci as rotas da api, atualizei a controller para fazer as o CRUD funcionar corretamente.
Meu principal desafio foi a autenticação, pois por padrão, o laravel 12 usa o sanctum para as SPAs (Singel Page Aplication) e por conta da aplicação Backend e Frontend ser hospedada no mesmo "dominio pai", se faz necessário aplicar CORS (Cross-Origin Resource Sharing). A configuração foi simples e o próprio laravel ajudou nisso.
- model Tarefa Enum: foi a melhor decisão para o campo status, pois creio q guardar 0 ou 1 para um status string como "Em andamento" é melhor para criar lista na view, tirando a necessecidade de criar conversões de difícil manutenção.
- A autenticação de login já esta pronta, foi feita usanda a configuração já existente no projeto, unico ponto a ser revisado são os dados do front end.

### Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
