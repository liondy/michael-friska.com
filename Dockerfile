FROM golang:1.15-alpine:3.12

RUN apk update && \
    apk add git && \
    apk add vim && \
    apk add curl

    