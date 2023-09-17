<div align="center">
  
# FlameSupport 📁 <a href="#">Link da Aplicação</a>

</div>

<div align="center">
  
[![Tech](https://skillicons.dev/icons?i=figma,laravel,mysql)](https://skillicons.dev)

</div>

# 📄 Sistema Tickets/FlameSupport

![status-em-andamento](https://user-images.githubusercontent.com/62897976/185768581-1d051a52-2e60-4378-b31d-39028cbfb5c8.svg)

### Resumo do Projeto

FlameSupport é um sistema online baseado em Laravel 10 que oferece suporte eficiente por meio de tickets, simplificando a comunicação entre clientes e equipes de suporte em um ambiente intuitivo e organizado.

## Passo a passo para rodar o projeto

Clone o projeto
```
git clone https://github.com/Samuraiflamesf/study_laravel.git
cd laravel-10/
```
Crie o Arquivo .env
```
cp .env.example .env
```
Atualize essas variáveis de ambiente no arquivo .env
```
APP_NAME="Nome do App"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```
Suba os containers do projeto
```
docker-compose up -d
docker-compose exec app bash
```
Instale as dependências do projeto e gere a key do projeto Laravel
```
composer install
php artisan key:generate

```
#### Acesse o projeto [http://localhost:8989](http://localhost:8989)

### 🎯 Implementações/Features
- [x] Instalar em Docker
- [x] Versionar Projeto Laravel
- [x] Figma/UI da Aplicação Laravel 10
- [x] Migrations no Laravel 10
- [x] Models no Laravel 10
- [x] Formulários e Segurança (CSRF) no Laravel 10
- [x] Listagem de Dados com Blade
- [x] Inserir Registro (e mass assignment)
- [x] Exibir Detalhes do Registro com Laravel
- [x] UI/UX da Aplicação Laravel com TailwindCSS
- [x] Atualizar Registro com o Laravel 10
- [ ] Deletar Registro com Laravel 10
- [ ] Validações (do jeito certo) com Laravel 10
- [ ] Validar Valor Único no Update com Laravel 10
- [ ] Teoria Service Layer + Repository Pattern + DTO
- [ ] Service Layer no Laravel 10
- [ ] Trabalhar com DTOs no Laravel 10
- [ ] Trabalhar com Repository Pattern e Inversão de Dependência
- [ ] Implementar Repositório no Laravel 10
- [ ] Finalizando o Repositório no Laravel 10
- [ ] Organizar Views no Laravel 10 (com componentes)
- [ ] Paginação Personalizada no Laravel
- [ ] Trabalhar com o Padrão  PRESENTER no Laravel 10
- [ ] Criar Componente de Paginação Personalizado no Laravel 10
- [ ] Criar ENUMs e Helpers no Laravel 10
- [ ] Usando ENUMs no Laravel 10
- [ ] Começando a Rest API no Laravel 10 Cadastrar Registro
- [ ] API Rest no Laravel Exibir e Deletar Registro
- [ ] API Rest no Laravel Atualizar Registro
- [ ] Api Rest no Laravel 10 Listar Registros com Paginação
- [ ] Trabalhar com Padrão Adapter no Laravel 10
- [ ] Usar Componentes do Jeito Certo no Laravel
- [ ] Autenticação no Laravel 10 SIMPLES
- [ ] Autenticação de APIs no Laravel com Sanctum
- [ ] Finalizando o Projeto 

## 🤝 Colaboradores e Links Complementares

**Curso do Youtube**

- [Youtube](https://www.youtube.com/watch?v=AN-LZuw2GIc&list=PLVSNL1PHDWvQ1N6fqhQ5HQzFtN-xrkjNU)

**Github Professor**

- [Carlos Ferreira](https://github.com/carlosfgti)

**Github do Projeto do Curso**

- [Especializati/Curso-de-laravel-10](https://github.com/especializati/curso-de-laravel-10)

**DaisyUI/Lib Tailwind**

- [DaisyUI](https://daisyui.com/)

## Colinha de Dicas

```
# Para subir container
docker-compose up -d 
docker-compose exec app bash
composer install
```

```
#Entrar no container docker
docker-compose exec app bash
# Criar Controller
php artisan make:controller NomedoController
# Criar Model
php artisan make:model NomedoModel
# Criar tabelas
php artisan migrate  
```

### Commit

```
# Adicione as mudanças ao índice
git add .

# Crie um novo commit com uma mensagem
git commit -m "Adicionei novos recursos"

# Atualize o repositório remoto
git push origin main

# Atualize o repositório Local 
git pull
```