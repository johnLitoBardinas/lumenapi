# Lumen API

Local Host URI: [http://luminapi.test](http://luminapi.test)

### Local Setup Requirements
* [Docker](https://www.docker.com/)
* [Docker Compose](https://docs.docker.com/compose/)

### Available Commands
Use below available command to spin up containers

Build Containers (run containers in foreground)
> docker-compose up --build

Bring Up container (run containers in background)
> docker-compose up -d

Run artisan container (when php not installed in machine)
> docker-compose up --rm artisan [artisan command]


### Default Database Credentials

You can change the default mysql environment variables here at `mysql` inside `docker-compose.yml` file.
**This is only for local development**

<!-- Tables -->
| MYSQL     | Email          |
| -------- | -------------- |
| MYSQL_DATABASE | lumen |
| MYSQL_USER | lumen |
| MYSQL_PASSWORD | secret |
| MYSQL_ROOT_PASSWORD | secret |