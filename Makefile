dev:
	sudo docker-compose up

format-blade:
	find . -name "*.blade.php" | xargs prettier --write --parser html
format-php: format-blade
	pint

format: format-php
