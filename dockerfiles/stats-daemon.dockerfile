FROM alpine:3.11.5

WORKDIR /home/stats/

RUN set -x \
    && apk add --no-cache \
        perl \
        perl-utils \
        bash \
        su-exec \
        perl-dbd-mysql \
        perl-dbi \
    && addgroup -S stats \
    && adduser -S -h /home/stats/ -s /bin/bash -g stats stats \
    && rm -rf /var/cache/apk/*

COPY dockerfiles/stats-entrypoint /usr/local/bin/stats-entrypoint
COPY psychostats .

RUN chmod +x /usr/local/bin/stats-entrypoint stats.pl \
    && chown stats:stats -R .

USER stats

ENTRYPOINT ["stats-entrypoint"]

CMD ["/home/stats/stats.pl", "-v", "-logsource", "stream://0.0.0.0:27500"]
