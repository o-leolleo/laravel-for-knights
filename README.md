# Laravel for Knights!

## SETUP 

caso não possua, instale o `docker-compose`

execute o

```shel-session
[pasta to projeto]$ docker-compose up
```

execute o bash, no contêiner do servidor web

```shell-session
[pasta do projeto]$ docker exec -it laravelforninjas_web_1 bash
```

Dentro do contêiner, abra a pasta /home/projetct-folder e execute os passos abaixo

```shell-session
[dentro-do-conteiner]# selectphp 7.1
[dentro-do-conteiner]# composer update
[dentro-do-conteiner]# apachelinker /home/project-folder/public
```

## Executando o projeto novamente

Dentro da pasta do projeto, é só executar os comando abaixo

```shell-session
[pasta do projeto]$ docker-compose start
[pasta do projeto]$ docker exec -it laravelforninjas_web_1 bash
```
