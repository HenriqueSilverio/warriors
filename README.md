# Warriors

Controle seu "clã de guerreiros" com cadastro de: tipo, especialidade, e outros atributos de cada um.

## Instalação

O processo de instalação pode variar de acordo com seu ambiente.

Para facilitar, recomendamos que utilize o [Homestead](https://laravel.com/docs/5.6/homestead), uma VM padrão, que vem com todos softwares necessários configurados para você.

Supondo que você já tem um servidor configurado com todos os requisitos necessários, de forma geral, basta seguir os seguintes passos:

**1.** Clone este repositório e acesse o diretório em sua máquina:

```
git clone git@github.com:HenriqueSilverio/warriors.git && cd warriors
```

**2.** Renomeie o arquivo `.env.example` para `.env`:

```
cp .env.example .env
```

**3.** Preencha o arquivo `.env` com os dados de conexão do banco de dados.

**4.** Gere as tabelas com alguns registros "fakes" para testar:

```
php artisan migrate --seed
```

**5.** Inicie o servidor:

```
php artisan serve
```

Pronto! Para usar a aplicação acesse `http://127.0.0.1:8000`.
