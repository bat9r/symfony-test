FROM php:8.1.16-cli

COPY . /app

WORKDIR /app

CMD [ "php", "-S", "0.0.0.0:8000", "-t", "public/" ]


