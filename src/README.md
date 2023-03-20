<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2</h1>
    <br>
</p>

## Instruction:
Requirement by installation:
1. OS X, any distr Linux, Windows with WSL
2. Docker
3. Make

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 8.1.2


DIRECTORY STRUCTURE
-------------------

      common/                 contains core application
         - components         contains components
         - config             contains base config
         - containers         contains realized DI-containers
         - controllers/        contains Web controller classes
               -rest          contains Rest controller classes
         - entities           contains model classes
         - enums              contains enums variables
         - forms              contains forms with validation
         - groups             contains groups variables
         - helpers            contains help to classes
         - queries            contains queries to db
         - repositories       contains work to db
         - services           contains services layers
      console/                contains console commands (controllers)
         - controllers        contains console controllers
         - migrations         contains migrations to db
         - fixtures           contains variables migrate to db
      admin/                  contains application configurations
         - assets             contains assets definition
         - config             contains front configuration
         - mail               contains view files for e-mails
         - public             contains the entry script and Web resources
         - runtime            contains files generated during runtime
         - tests              contains various tests for the front application
         - views              contains view files for the Web application
      front/                  contains Web controller classes
         - assets             contains assets definition
         - config             contains front configuration
         - mail               contains view files for e-mails
         - public             contains the entry script and Web resources
         - runtime            contains files generated during runtime
         - tests              contains various tests for the front application
         - views              contains view files for the Web application
      vendor/             contains dependent 3rd-party packages
