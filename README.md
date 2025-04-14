# Beneficiary Management

## Overview
This repository contains a simple web application for testing beneficiary query times. 

### Getting Started
#### Prerequisites
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) (Windows, Mac)

### Installing
Clone this repo to you computer via git 
```
git clone https://github.com/jude-n/beneficiary_management.git
```
Before installing you will need to copy the `env.example` and `docker-compose.yml.example` to remove the example.
Next you will need to add the correct values for those into the env from 1pass or other documentation.

```
cp .env.example .env
```

and

```
cp docker-compose.yml.example docker-compose.yml
```

In a terminal window, navigate to the root of the project and run the following commands:
```
docker compose up build --no-cache
```

If asked to sign in you can login to your docker account or create a new one. 

To run
In a terminal window, navigate to the root of the project and run the following commands:
```
docker compose up -d
```

Your application will be running on port 9001 
```
http://localhost:9001
```

### Testing
to ensure adminer is running you can go to 
```
http://localhost:8080/
```
server: mysql
and the rest of the fields should be in the env file.

No tables are created you can run the migrations
```
docker compose exec php php artisan migrate --force
```
Then you can run the seeder
```
docker compose exec php php artisan db:seed --force
```
