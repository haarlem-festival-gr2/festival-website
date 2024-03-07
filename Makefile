dev:
	sudo docker-compose up

format-blade:
	blade-formatter app/pages/**.blade.php --write

format-php: format-blade
	pint

format: format-php
