# wp-hello-world

Simple Hello World WordPress Plugin for figuring out testing with CircleCI and integration via Composer

This uses Docker Compose to set up a VIP-like WordPress environment, with the versions of MariaDB, WordPress and PHP set in the .env file. These are (currently) correct to what VIP Go uses.

Within Circle we utilise the same Docker Compose as what might be used to run the tests locally. Basically the tests have to be run via a docker container to ensure network access is available on CircleCI.

## Running locally

```
docker-compose up -d
docker-compose run --rm wp-cli wp core install \
            --title="Hello World" \
            --admin_user="wordpress" \
            --admin_password="wordpress" \
            --admin_email="admin@example.com" \
            --url="http://wordpress" \
            --skip-email
docker-compose run --rm tests curl -I http://wordpress | grep '200 OK'
```

At the moment the "test suite" is actually just the command "curl -I http://wordpress" and ensuring we get a good response back.
