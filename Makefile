up:
	docker-compose up -d --build

down:
	docker-compose down

restart:
	docker-compose down && docker-compose up -d --build

artisan-cmd:
	docker exec -it laravel_app php artisan $(cmd)

composer:
	docker exec -it laravel_app composer $(cmd)

npm:
	docker exec -it laravel_node npm $(cmd)

logs:
	docker logs -f laravel_app
