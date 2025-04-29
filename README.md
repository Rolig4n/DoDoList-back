# DoDoList-back

## Instruções para rodar o projeto

1. Certifique-se de ter o Node.js instalado em sua máquina, php 8.4.

2. Clone este repositório em sua máquina local.

    ```bash
    git clone https://github.com/seu-usuario/DoDoList-back.git
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

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

### 