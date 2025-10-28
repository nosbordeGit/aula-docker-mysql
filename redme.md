Comandos básicos

    docker version: Exibe a versão do Docker.
    docker run: Executa um comando em um novo contêiner.
    docker ps: Lista os contêineres em execução.
    docker images: Lista as imagens locais.
    docker pull: Baixa uma imagem de um registro (como o Docker Hub).
    docker build: Constrói uma imagem a partir de um Dockerfile.
    docker search: Procura por imagens no Docker Hub. 

Comandos de contêiner

    docker start: Inicia um contêiner parado.
    docker stop: Para um contêiner em execução.
    docker restart: Reinicia um contêiner.
    docker rm: Remove um ou mais contêineres.
    docker exec: Executa um comando dentro de um contêiner em execução.
    docker pause: Pausa um contêiner.
    docker unpause: Remove a pausa de um contêiner. 

Comandos de imagem

    docker rmi: Remove uma ou mais imagens.
    docker tag: Marca uma imagem com uma tag.
    docker save: Salva uma imagem em um arquivo .tar. 

Comandos avançados

    docker network: Gerencia redes Docker para conectar contêineres.
    docker volume: Gerencia volumes Docker para persistência de dados.
    docker service: Gerencia serviços Docker.
    docker swarm: Gerencia um cluster Docker. 



PARTE 1 — MySQL temporário

1 - Puxar a imagem (opcional)
docker pull mysql:8.0


2 - Executar o MySQL em modo temporário

# roda o MySQL em background e remove o container automaticamente ao parar (--rm)
docker run --rm --name mysql-temp \
  -e MYSQL_ROOT_PASSWORD=senha123 \
  -p 3306:3306 \
  -d mysql:8.0

3 - Conectar ao MySQL no container (para testar)

# entrar no cliente mysql dentro do container
docker exec -it mysql-temp mysql -u root -p

# Ou, se quiser usar o cliente do host (se tiver instalado):

mysql -h 127.0.0.1 -P 3306 -u root -p

4 - Teste Rapido vamos criar um banco de dados e uma tabela e inserir 2 registros 

CREATE DATABASE palestra_test;
USE palestra_test;
CREATE TABLE t1 (id INT PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(50));
INSERT INTO t1 (nome) VALUES ('Ana Clara '), ('Cecilia');
SELECT * FROM t1;




