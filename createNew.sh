#!/bin/bash

# $1 = password, $2 = email/username, $3 = directory name


# Create .htpasswd with openssl 
htpasswd -cb .htpasswd " . $email . " " . $password