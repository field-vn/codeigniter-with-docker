# Dockerize Codeigniter App With docker-compose

## Test Running Application

1. docker-compose -f docker-compose.yml up -d
2. App running in port 8080 ==> http://127.0.0.1:8080
3. phpmyadmin running in port 8888 ==> http://127.0.0.1:8888
4. Database
    - User: ci
    - Password: ci
    - Database name: ci_app

## Run Codeigniter
1. Go to http://127.0.0.1:8080
2. Import DB: /public/db/demo.sql
3. Login user: admin@admin.com / admin