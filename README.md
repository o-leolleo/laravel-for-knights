# Laravel for Knights!

## SETUP 

caso não possua, instale o `docker-compose`

execute o

```shel-session
[pasta to projeto]$ docker-compose up
```

alternativamente, rodando em *background*

```shel-session
[pasta to projeto]$ docker-compose up -d
```

execute o bash, no contêiner do servidor web

```shell-session
[pasta do projeto]$ docker exec -it laravel-for-ninjas_web_1 bash
```

Dentro do contêiner, abra a pasta /home/projetct-folder e execute os passos abaixo

```shell-session
[dentro-do-conteiner]# selectphp 7.1
[dentro-do-conteiner]# cd /home/project-folder
[dentro-do-conteiner]# composer update
[dentro-do-conteiner]# apachelinker /home/project-folder/public
[dentro-do-conteiner]# chown -R www-data:www-data storage
```

## Invoque o cosmos e alimente a tabela de cavaleiros

executando, no conteiner, em `/home/project-foler` o comando abaixo

```shell-session
[dentro-do-conteiner]# php artisan populate:knights
```

## Executando o projeto novamente

Dentro da pasta do projeto, é só executar os comando abaixo

```shell-session
[pasta do projeto]$ docker-compose start
[pasta do projeto]$ docker exec -it laravel-for-ninjas_web_1 bash
```
