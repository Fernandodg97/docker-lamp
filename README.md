# docker-lamp

Docker with Apache, MySQL 8.0, PHPMyAdmin and PHP.

Database user: admin, password: admin, root password: admin

I use docker-compose as an orchestrator. To run these containers:

- `docker-compose up -d`

To stop the containers:

- `docker-compose down`

Open phpmyadmin at [http://127.0.0.1:8080](http://127.0.0.1:8080)  
Open web browser to look at a simple php example at [http://127.0.0.1:80](http://127.0.0.1:80)

Clone your-project on `html/` and then, open web [http://127.0.0.1/your-project](http://127.0.0.1/your-project)

Run MySQL client:

- `docker-compose exec db mysql -u root -p`