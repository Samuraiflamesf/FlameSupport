
# Setup Docker Laravel 10 com PHP 8.1
Acesse o projeto
[http://localhost:8989](http://localhost:8989)

```
# Para subir container
docker-compose up -d 
docker-compose exec app bash
composer install
```

```
# Criar Controller
php artisan make:controller NomedoController
```

## Commit via terminal

```
# Adicione as mudanças ao índice
git add .

# Crie um novo commit com uma mensagem
git commit -m "Adicionei novos recursos"

# Atualize o repositório remoto (substitua 'main' pelo nome da sua branch)
git push origin main
```
