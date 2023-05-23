# SITE PLAYSTATION 5

Site desenvolvido simulando o site oficial da SONY.




## Rodando localmente

Para rodar o projeto utilizar XAMPP ou WAMP (APACHE) com MYSQL. 

Recomendado utilizar o usuário 'root' e não atribuir uma senha. Caso altere o usuário e/ou senha, alterar user e/ou senha no arquivo:

```bash
  php/db_connection.php
```

É preciso rodar os scripts de criação da database e suas tabelas antes.
Pasta com scripts são encontradas em: (Caso esteja utilizando XAMP/WAMP basta acessar http://localhost/phpmyadmin/ e rodar os scripts)

```bash
  sql/script.sql
```

Para acessar o site basta ir na URL:

```bash
  http://localhost/site_ps5
```
