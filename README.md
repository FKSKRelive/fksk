fksk
====

Site web de la FKSK

Configuration
=============

Executer ceci dans les dossiers d'application pour avoir un droit d'écriture:

chmod 777 assets/
chmod 777 runtime/
chmod 777 /web/assets/

After cloning the repository
============================

1. Execute command "php5 init" or "./init" in root directory.
2. Choose the development environment.
3. Connect to MySQL : mysql -u username -p password
5. Execute command "DROP DATABASE fksk; CREATE DATABASE fksk;"
6. Execute command "php5 yii migrate" or "./yii migrate" in root directory.
7. Further read the docs/yii2-guide.pdf to have a better approach of yii2 framework.
