# Laravel Maps App

Este projeto é uma API e aplicação web em Laravel para cadastro, visualização e gerenciamento de locais geográficos em um mapa interativo.

## Funcionalidades
- Cadastro de locais com nome, descrição, endereço, categoria, latitude e longitude
- Visualização dos locais em lista e em mapa (Leaflet/OpenStreetMap)
- Edição e exclusão de locais
- Visualização detalhada de cada local
- Interface responsiva com Bootstrap 5

## Tecnologias Utilizadas
- Laravel 10+
- PHP 8+
- Bootstrap 5
- Leaflet.js
- Font Awesome
- SQLite (padrão, mas pode ser adaptado para outros bancos)

## Instalação

1. Clone o repositório:
	```bash
	git clone <url-do-repositorio>
	cd API_Laravel
	```
2. Instale as dependências:
	```bash
	composer install
	```
3. Copie o arquivo `.env.example` para `.env` e configure conforme necessário:
	```bash
	cp .env.example .env
	```
4. Gere a chave da aplicação:
	```bash
	php artisan key:generate
	```
5. Configure o banco de dados no `.env` (por padrão, já está configurado para SQLite):
	```env
	DB_CONNECTION=sqlite
	DB_DATABASE=./database/database.sqlite
	```
	> Crie o arquivo `database/database.sqlite` se não existir.

6. Execute as migrations:
	```bash
	php artisan migrate
	```
7. Inicie o servidor de desenvolvimento:
	```bash
	php artisan serve
	```
8. Acesse em [http://localhost:8000](http://localhost:8000)

## Estrutura de Pastas
- `app/Models/Location.php` — Model principal dos locais
- `app/Http/Controllers/LocationController.php` — Controller CRUD dos locais
- `resources/views/locations/` — Telas Blade para criar, editar, listar e visualizar locais
- `resources/views/layouts/app.blade.php` — Layout base
- `routes/web.php` — Rotas web
- `database/migrations/` — Migrations do banco

## Observações
- O projeto utiliza Leaflet para mapas, sem dependência de Google Maps.
- O layout é responsivo e pronto para uso em desktop e mobile.
- Para customizações, edite os arquivos Blade em `resources/views/locations/`.

  <img width="1880" height="866" alt="image" src="https://github.com/user-attachments/assets/d81ac5c6-a057-4da0-a6d5-d43bb0c9ab66" />
  <img width="1887" height="865" alt="image" src="https://github.com/user-attachments/assets/f1b25d86-b3f1-4906-94af-af01007a9424" />
  <img width="1867" height="862" alt="image" src="https://github.com/user-attachments/assets/e3f76607-21d6-4474-9cb2-e08851c3fa98" />





