#!/bin/sh
#
# Script to call the PHP Hypertext Processor as a CGI script
#  -- Courmisch 21/10/2004
#
# $Id: phpcgi.sh 1960 2004-11-01 16:52:30Z dionoea $

# It won't work if you call the PHP CLI usually in /usr/bin or /usr/local/bin
if [ -x /usr/lib/cgi-bin/php5 ]; then
    PHP=/usr/lib/cgi-bin/php5
else
    PHP=/usr/bin/php-cgi
fi

# CGI/1.1 interface variables
export SERVER_SOFTWARE="Shell CGI/0.1"
export SERVER_NAME="localhost"
export GATEWAY_INTERFACE="CGI/1.1"
export SERVER_PROTOCOL="HTTP/1.1"
export SERVER_PORT="80"
export REQUEST_METHOD="GET"

export PATH_INFO=`echo "$1" | cut -d '?' -f1`

export PATH_TRANSLATED="${2}${PATH_INFO}"

export SCRIPT_NAME="/cgi-bin/php5"
export QUERY_STRING=`echo "$1" | cut -d '?' -f2`
export REMOTE_HOST="localhost"
export REMOTE_ADDR="127.0.0.1"
#export AUTH_TYPE
#export REMOTE_USER
#export REMOTE_IDENT

# CGI Redirect security workaround
export REDIRECT_STATUS=200
export REDIRECT_QUERY_STRING="$QUERY_STRING"
export REDIRECT_URL="$PATH_INFO"

$PHP < /dev/null

