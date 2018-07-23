#!/bin/bash

. .env

bx wsk package update email-to-sms -p apikey $NEXMO_API_KEY -p apisecret $NEXMO_API_SECRET

cd send_sms
zip -rq send_sms.zip index.php vendor
bx wsk action update email-to-sms/send-sms --kind php:7.1 --web raw -p tonumber $TO_NUMBER send_sms.zip
cd ..


