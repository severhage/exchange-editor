# exchange-editor
 Exchange Editor voor iRedadmin free licenties

 # Gebruik

 1. Installeer de files onder je webserver (Subdomein is mogelijk [vhost])
 2. Geef de webserver alle rechten [sudo chmod -R +rwx ./] [sudo chown -R www-data:www-data ./]
 3. Connect de database.
 4. Importeer de exchangeeditor.sql in je mysql/mariadb-server (LET OP! Wachtwoorden worden nog als TEXT opgeslagen, encryptie is nog work in progress).
