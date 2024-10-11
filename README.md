# Mini Blog V2
Versão melhorada do mini blog 
=======

# Mini Blog V2

Este é um projeto de Mini Blog desenvolvido utilizando a VILT Stack (Vue.js, Inertia.js, Laravel e Tailwind CSS). O objetivo deste projeto é explorar a integração das tecnologias mencionadas em um ambiente de blog minimalista.

## Tecnologias Utilizadas

- **Laravel**: Framework backend para a estrutura do projeto.
- **Inertia.js**: Permite interações suaves entre frontend e backend.
- **Vue.js**: Framework JavaScript utilizado no frontend para criar componentes dinâmicos.
- **Tailwind CSS**: Biblioteca de CSS para estilizar o projeto com facilidade e responsividade.

## Instalação

Para rodar o projeto localmente, siga os passos abaixo:

1. Clone o repositório:
    ```bash
    git clone https://github.com/misaelrcDev/mini-blog-V2.git
    ```

2. Navegue até o diretório do projeto:
    ```bash
    cd mini-blog-V2
    ```

3. Instale as dependências do PHP e do JavaScript:
    ```bash
    composer install
    npm install
    ```

4. Configure o arquivo `.env` com suas credenciais de banco de dados e outras variáveis de ambiente.

5. Execute as migrações e o seeder para criar as tabelas e os dados:
    ```bash
    php artisan migrate --seed
    ```

6. Compile os assets do frontend:
    ```bash
    npm run dev
    ```

7. Inicie o servidor local do Laravel:
    ```bash
    php artisan serve
    ```

O projeto estará acessível em `http://localhost:8000`.

## Contribuições

Sinta-se à vontade para contribuir com o projeto enviando pull requests ou relatando issues.

## Licença

Este projeto está sob a licença MIT.
