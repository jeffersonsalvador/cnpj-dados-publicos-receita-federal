🇧🇷 Versão em Português [aqui](README.md).

---

# Project under development, launch in January 2024

[//]: # (# Project Name: CNPJ Data Processing Application)

---

![License](https://img.shields.io/badge/license-MIT-blue.svg)

## Description

This repository contains a web application designed for processing CNPJ data (the Brazilian equivalent of a business tax identification number). It's built using the Laravel framework for PHP and utilizes Docker for easy setup and deployment. The application handles large CSV files, processes them, and stores the data in a PostgreSQL database for further analysis.

The download of the Receita Federal data files can be done [here](https://dados.gov.br/dados/conjuntos-dados/cadastro-nacional-da-pessoa-juridica---cnpj) -
last updated on 2023-11-24.


## Features

- Process large CSV files with CNPJ data.
- Store processed data in a PostgreSQL database.
- Redis integration for performance optimization.
- Nginx as a reverse proxy for the web server.
- Containerized setup with Docker and Docker Compose.

## Project structure

```
/cnoj-dados-publicos-receita-federal
│
├── /docker
│   ├── docker-compose.yml
│   ├── Dockerfile.app
│   └── /nginx
│       └── default.conf
│
│── /src
│   ├── /app
│   ├── .env.example
│   ├── ...
│
│── /data
```

- `/docker` - Docker configuration files.
- `/src` - Laravel application source code.
- `/data` - Receita Federal data zip files.
  
## Prerequisites

Before you begin, ensure you have met the following requirements:

- Docker and Docker Compose installed on your machine.
- Basic knowledge of Laravel, Docker, and PostgreSQL.

## Installation
To set up the project for development, follow these steps:

1. Clone the repository:

```
git clone https://github.com/jeffersonsalvador/cnpj-dados-publicos-receita-federal.git
cd cnpj-dados-publicos-receita-federal
```
2. Navigate to the docker directory and start the services:

```
cd docker
make up
```

This will build and run the following services:

- `app`: The Laravel application.
- `nginx`: The web server for the application.
- `postgres`: The PostgreSQL database.
- `redis`: The Redis server.

## Usage
Once the containers are up and running, you can:

- Access the application via http://localhost:8080.
- Connect to the database using the credentials provided in the .env file.
- Monitor the Redis instance on port 6379.

- To process CNPJ data:

1. Place your CSV files in the designated directory (as mentioned in the application documentation).
2. Use the application's web interface (not finished yet) or CLI commands to start the processing.

## License
Distributed under the MIT License. See LICENSE for more information.

## Contact
Jefferson Costa – contact@jeffersoncota.dev

Project Link: https://github.com/jeffersonsalvador/cnpj-dados-publicos-receita-federal