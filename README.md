Laravel Notifiacations

a simple app to test the realtime function in Supabase PGSql (Pub/Sub)

Getting started:

Supabase:

> Sign in to supabase https://supabase.com/

    User : khairymujahed@gmail.com
    Pass : Supabase@1

> Select the Supabase project

laravel app:

( Note: the .env file exposed so the SupaBase Database Config is ready to use no need to configure

DB_CONNECTION=pgsql
DB_HOST=aws-0-eu-central-1.pooler.supabase.com
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres.bfqngtlcqlmjadfzjcwo
DB_PASSWORD=1sJGkiXWzXQootTy

)

Run these commands to Start the server:

> composer install ( to install the packages and dependencies required for the app to run)

> php artisan serve ( run the development sever)

Using the notification form:

> click the address ( the default is http://127.0.0.1:8000) check the port for you server

> register a new user ( click Register or folow this link http://127.0.0.1:8001/register )

> Go to the form page to register a new entry to the database ( http://127.0.0.1:8001/notifications/form )

> Check the Supabase Dashboard for the Data base Requests

To Use the Realtime feature on Supabase:
The User Table and the notification Table are registered to work with realtime
use these configs to setup the client app:
Api Settings (https://supabase.com/dashboard/project/bfqngtlcqlmjadfzjcwo/settings/api)
Postgres Changes Client (https://supabase.com/docs/guides/realtime/postgres-changes)
