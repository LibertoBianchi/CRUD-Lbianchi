# CRUD-Lbianchi
## Faltan parcialmente algunos apartados como por ejemplo, no están todos los tipos de imputs, las gates para denegar permiso al admin,@lang esta creado pero no supe como se implementaba, entre otras carencias, pese a esto, funciona y se debería poder usar pese a algunas carencias.
# Link al repo
https://github.com/LibertoBianchi/CRUD-Lbianchi
# Usuario
## Para logearte desde dashboard el usuario sería admin@gmail.com y su contraseña "admin123"
# URL
## http://lbianchi.ifc33b.cifpfbmoll.eu/proyectos/CRUD-Lbianchi/CRUD-Lbianchi/public/
# Aviso
## He tenido una confusión con las url y no he sabido como arreglarlas, por lo tanto, al crear o editar datos de la tabla dará un error 404 ya que no encontrará dicha url. Por eso mismo, si quieres ver esa funcionalidad tal y como tendría que ser, abrelo en local, ya sea en xampp, wamp, etcetera. Y todo debería funcionar según lo esperado, gracias
# .env
## En caso de que quieras correr el zip en local el archivo .env sería el siguiente :

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:MWcRcObHCdBkiUhxWujkR/H7vJ+PQQfSALtPzBWVJx4=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_HOST=g1.ifc33b.cifpfbmoll.eu
DB_PORT=5432
DB_DATABASE=Lbianchi_crud
DB_USERNAME=lbianchi
DB_PASSWORD=abc123.

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
