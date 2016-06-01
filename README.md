# Awesome Tours API
---
Usage:Running the API locally

1. Update the file __app/config/parameters.yml__ to match your development environment's database credentials
2. In your terminal, navigate to the project root and run __bin/console doctrine:database:create__ in order to create the database
3. Run bin/console __doctrine:schema:create__ to create the database's schema
4. Boot the API up by running __bin/console server:run__ by default the api will run on [http://localhost:8000](http://localhost:8000)
