## binaries
find / -perm -4000 -type f 2>/dev/null

## writable directories
find / -writable -type d 2>/dev/null

## Interesting binaries in PATH
echo $PATH

## cron jobs
~~~
cat /etc/crontab
ls -la /etc/cron*
~~~