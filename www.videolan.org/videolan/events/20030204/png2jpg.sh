#!/bin/sh

while read mail
do
        convert $mail.png $mail.jpg
done
