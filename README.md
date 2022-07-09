## Lumen Boilerplate with sample -Friends Management- 

**Prerequisites**
- Docker >= v 20.10.16
- Docker Compose >= v1.29.2

**Development notes**
The source code is built using Lumen framework v8.x and use Clean Code & PSR12 as our standard code format. The code itself will automatically checked and fixed by ECS in pre-commit git hooks. This service is using apidocs.;

####Clone repository

`$ https://github.com/fitrazh/friends-management.git`

####Install dependency module

`$ composer install`

####command all containers will be built and fired up

`$ docker-compose build`

`$ docker-compose up -d`

After finish please try to open this endpoint, as default the this service will be run under port: 8070
`http://localhost:8070/`

to open api-docs
`http://localhost:8070/api/documentation`