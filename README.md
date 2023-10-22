# Development
 
If you want to run in port 80
```bash
COMPOSE_FILE=docker-compose.yml:docker/overrides/port-80.yml docker compose up -d
```

Run Composer
```bash
docker compose exec php composer
```

Run Artisan
```bash
docker compose exec php artisan
```

### Files Quick Access
[Composer](./composer.json)

[Docker Compose](./docker-compose.yml) / [Overrides](./docker/overrides/)