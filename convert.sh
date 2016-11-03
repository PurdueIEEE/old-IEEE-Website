#!/bin/bash

for f in $(echo *.php); do
    FILE=$(echo $f | sed -e 's/php/html/');
    rm $FILE
    php $f > $FILE;
done
