# VideoProj
Video-sharing platform, movie trailers, music videos, amateur vlogs and videos of cats if you'd like.


### Requirement

```
PHP v7.2.5 +
Composer v1.10 +
```

## Getting Started

#### Download the source

$ git clone https://github.com/nsplaneta/VideoProj.git

#### Move to the new directory

```
$ cd VideoProj
```

#### Create a new file .env

```
$ vim .env
```

#### Write these enviroment parameters into the new .env file

```
APP_ENV=dev
APP_SECRET=54f04f28edfbdbdfb545df54
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
```

#### Generate autoload file and install requiments

```
$ composer update
```

#### Custom script in order to create and set database with Example Data Fixtures

```
$ ./drop_db
```

#### OR you can run

```
$ php bin/console make:migration
$ php bin/console doctrine:migrations:migrate -n -q
$ php bin/console doctrine:fixtures:load -n -q
```

#### Enjoy the platform.

```
$ symfony serve
```
