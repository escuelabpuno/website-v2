cd web
drush updb -y
drush config-import --partial -y
drush entity-updates -y
drush cr
