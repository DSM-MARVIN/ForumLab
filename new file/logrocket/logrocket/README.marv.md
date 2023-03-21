# exporting msql data on the command promt 

mysqldump -u marvin -p laragigs | gzip > laragigs.sql.zip

# laravel 8 cpanel htaccess code

<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule ^(.*)$ public/$1 [L]
</IfModule>