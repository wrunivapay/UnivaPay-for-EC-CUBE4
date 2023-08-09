FROM ghcr.io/5ym/ec-cube:4.1
RUN apk add git openssh-client
COPY . /var/lib/nginx/html/app/Plugin/UnivaPay