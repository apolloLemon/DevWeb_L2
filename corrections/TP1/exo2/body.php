<body><hr/><h1>CORPS</h1>
<h2><?php echo 'Fichier'.__FILE__;?></h2>
<p><?php echo htmlentities('Méthode HTTP utilisée : '.http_method);?></p>
<p><?php echo htmlentities('Chemin du fichier en cours d\'exécution : '.executing_file);?></p>
<p><?php echo htmlentities('Répertoire du fichier courant/inclus : '.__DIR__);?></p>
