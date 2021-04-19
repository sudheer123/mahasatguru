FROM wordpress
WORKDIR /var/www/html
COPY . /var/www/html
EXPOSE 8081
RUN ls -al
RUN cd /var/www/html
