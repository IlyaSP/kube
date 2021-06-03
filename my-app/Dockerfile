FROM ubuntu:18.04

ENV TZ=Europe/Moscow
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get -y update && \
    apt-get -y install apache2 && \
	apt-get -y install php && \
	apt-get -y autoremove && \
	apt-get -y autoclean
	
COPY ./index1.php /var/www/html/index.php

CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]

EXPOSE 80