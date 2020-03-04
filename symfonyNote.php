<?php 


	Creation entity from database existing =>
	     php bin/console mapping:import "App/Entity" annotation --path:src/Entity

	Pour annuler La modification du Git => git checkout --chemin/fichier

	Symfony problem resolved => sudo apt-get install php7.0-curl php7.0-mbstring php7.0-pgsql php7.0-intl

	\t = tabulation
	\r = retour chariot
	\n = nouvelle ligne


	php bin/console make:auth = generer login avec fonctionnalité d utilisateur en symfony 4

	App/Security/AppLoginAuthenticator.php(erreur) = OnAuthenticationSuccess ->return RedirectResponse();

	Fontion recursive =>c estune fonction qui appel elle-meme (c a d appel lui à linterieur de lui)

	Reseau Neurone = est une systeme dont la conception est à l origine schematiquement inspiré du fonctionnement des neurone biologique

	Class abstraite = class definie sans valeur/sans method à l interieur;

	Interface meme Class Abs mais juste fonction definie à l'interieur(constante d'interface);

	BigData = solution destinée pour permettre à tout le monde acceder en temps réel de bdd ;
		Ou ensemble de donnée devenues si volumineux

	3V du big data 
	      Volume = dimension relative 
	      Vélocité = represente la frequence
	      Variété = Centre de donnée


	Symfony Flex est un plugin composer qui modifie le comportement des commandes (ex:update,remove);

	vhost - apache = install apache-pack


	LOI DE PARETO = Ce qui a un projet de 100%
		->80% de reflexion
		->20% de code


		Date intervale : new DateInterval('P1M') = INTERVALE D UN MOIS
						new DateInterval('P1Y') = intervale d une année



	CONCEPTION OU ANALYSE

		ex: 	CLIENT	(1,n) ---------------------------------->(1,1) FACTURE

			id anzay lehibe mankany @kely id_client mipetaka ao @facture



			DIAGRAMME DE SEQUENCE EXEMPLE


			USER                                                       OPENFLEX
					Acceder à openflex(se connecter dans opneflex)
				--------------------------------------------------------->

					                 Page d abonnement						unNom de fonction par un action
				<---------------------------------------------------------

								Choix d abonnement							unNom de fonction par un action
				---------------------------------------------------------->
				
								Choix mode de payment							unNom de fonction par un action

				----------------------------------------------------------->
				
								Choix de durée									unNom de fonction par un action

				----------------------------------------------------------->	

								Page de validation								unNom de fonction par un action
				<------------------------------------------------------------



	Generer Getters et Setters d Entity => php bin/console make:entity --regenerate App	



	PAYMENT PAR PAYPAL EN LIGNE 


	1- Creer compte developper PAYPAL
	2- Creer 2Comptes sandbox: 
		*compte Personnal = compte buyer pour faire achat 
		*compte Business = compte merchant pour faire la vente

	3-Modifier les mots de passes des 2Comptes
	4-Lié un compte avec App/Credentials ->Create App 
	5-Quand le payment est 
		AVEC PAYPAL RECCURENT: mettre username,password,signature d API credentials dans le fichier php	
		AVEC EXPRESS CHECKOUT: mettre clientID,SECRETID dans un fichier php	

	6-Si tu demarre le payment et faire l achat,entrer le compte dans personnal pour faire ça 

	7-Si tu voir les payment fait mieux,connecter dans un sandbox.paypal.com avec le compte business  


	Demarre ngrok,telecharger et mettre dans le dossier du projet ->demarre avec commande /.ngrok http -header-host= (rewrite ou pas de rewrite )nom de vhost 80 ou :80

	Si tu utilise ngrok;Cliquer =>parametre du compte=>Payment sur site=>preference du notification =>Notification instantannée de paiment(IPN)
		=>choisir parametre ipn et coller le lien http de ngrok avec route de controller ou fichier en php et activer le recevoir de notification


		REQUIRE FICHIER PHP DANS UN CONTROLLER SYMFONY
		=>require_once(__DIR__.'/fichier.php');


		Recuperer POST DE NGROK dans un fichier =>$_POST simplement