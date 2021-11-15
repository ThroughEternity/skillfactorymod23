# Инструкция для установки докера
В инструкции будет расписан минимальная установка и запуск докера




# Установка


Чтобы получить самую последнюю стабильную версию Docker Compose, мы загрузим это программное обеспечение из официального репозитория Github.

Для начала проверьте, какая последняя версия доступна на странице релизов. На момент написания настоящего документа наиболее актуальной стабильной версией является версия 1.26.0.

Следующая команда загружает версию 1.26.0 и сохраняет исполняемый файл в каталоге /usr/local/bin/docker-compose, в результате чего данное программное обеспечение будет глобально доступно под именем docker-compose:

```
sudo curl -L "https://github.com/docker/compose/releases/download/1.26.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
```

Выполнив команду мы получим пакет докера. Затем необходимо задать правильные разрешения, чтобы сделать команду docker-compose исполняемой:

```
sudo chmod +x /usr/local/bin/docker-compose
```

Чтобы проверить успешность установки, запустите следующую команду:

```
docker-compose --version
```

Вывод будет выглядеть следующим образом:

```
docker-compose version 1.26.0, build 8a1c60f6
```

# Запуск

Выгружаем данный репозиторий в папку с проектом

При первом запуске вам нужно выполнить команду build что бы конфиг развернул все зависимости установил пакеты и скопировал ваш проект

## Команда build

```
docker-compose build
```

После установки больше команду билд не запускаем

## Команда up запуск

Запускает контейнер без установки зависимостей
```
docker-compose up -d
```

## Команда stop
Что бы остановить наш контейнер используйте команду down

```
docker-compose down
```

Остановить текущий контейнер в рабочей области

## Команда restart

Перезапускает контейнер

```
docker-compose restart
```

## Запуск консоли внутри контейнера

Команда нужна если вам нужно выполнить манипуляции с командной строкой. Например обновить зависимости композера. Внимание! Просто выполнение из терминала вне контейнера может не принести результата

```
sudo docker exec -it app bash
```

# Материалы и источники

```
https://docs.docker.com/compose/
```

```
https://google.com
```

## Удачи!:-)