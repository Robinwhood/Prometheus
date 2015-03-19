<?php
	
	/**
	 * Language array
	 * @var array
	 *
	 * When updating this, ONLY change the values on the right hand side.
	 * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
	 * If the new values are not set it will fallback to the default ones.
	 *
	 * French translation courtesy of Hikage and Yellow.
	 */
	$lang = array(

		// Navigation bar
		"home" => "Accueil",
		"store" => "Magasin",
		"buy_credits" => "Acheter des Crédits",
		"raffles" => "Lotterie",
		"profile" => "Profil",
		"support" => "Support",
		"admin" => "Administration",
		"sign_out" => "Se Déconnecter",
		"sign_in" => "Se Connecter",

		// Header errors and messages
		"not_setup" => "Vous n'avez pas configuré votre tableau de bord correctement ! <a href='admin.php?a=gen&settings'>Cliquez ici</a> [Administration ->  Paramètres généraux -> Paramètres]",
		"header_sandbox" => "PayPal Sandbox est activé. N'utilisez le sandbox que pour les tests ! Vous pouvez le désactiver <a href='admin.php?a=gen&settings'>ici</a>",
		"missing_action" => " Il manque une action dans un ou plusieurs pack(s)",
		"unfinished_action" => "Vous avez une action inachevée sur la page 'Profil', <a href='profile.php'>ici</a>",

		// Frontpage
		"welcome" => "Bienvenue - Inscrivez-vous",
		"welcome_text" => "Connectez-vous par le biais de Steam pour utiliser notre system de dons automatisé.",

		// News
		"news" => "News",
		"by" => "Par",
		"no_news" => "Pas de news",
		"no_news_text" => "Il n'y a pas de news.",
		"no_news_articles" => "Pas de nouveaux articles.",

		// Footer
		"tos" => "Conditions générales d'utilisation",
		"powered_by" => "Propulsé par Steam",

		// Store
		"credits" => "Crédits",
		"featured_pkg" => "Pack vedette",
		"permanent" => "Permanent",
		"non_permanent" => "Temporaire",

		"select_credit" => "Selectionner Pack de Crédit",
		"select_raffle" => "Selectionner Pack de lotterie",
		"global_packages" => "Pack Globaux",

		// Raffles
		"raffle_ticket" => "Acheter un ticket",
		"raffle_ended" => "La lotterie a pris fin, le gagnant est: ",
		"raffle_not_compatible" => "Ce pack n'est pas compatible avec celui que vous possédez. L'entrée à la lotterie vous est donc refusée.",
		"raffle_already_own" => "Vous possédez déjà ce pack. L'entrée à la lotterie vous est donc refusée.",
		"raffle_reached_max" => "Vous avez atteint le montant maximum d'entrées de lotterie. L'entrée à la lotterie vous est donc refusée.",

		// Support
		"create_ticket" => "Créer billet",
		"ticket_closed" => "Ce billet est fermé.",
		"reply" => "Répondre",
		"create" => "Créer",

		// Terms of Service
		"tos_edited" => "Les CGU ont été modifiés. Veuillez accepter les <a href='tos.php'>conditions générales d'utilisation</a> avant d'acheter un paquet !",
		"tos_must_accept" => "Vous devez accepter les CGU avant d'acheter !",
		"tos_accept" => "Accepter",

		// Purchase buttons
		"purchase_paypal" => "Acheter avec Paypal",
		"purchase_credits" => "Acheter avec des Crédits",
		"purchase" => "Acheter",
		"buy_sign_in" => "Vous devez être connecté avant d'acheter !",
		"buy_already_own" => "Vous possédez déjà ce pack !",
		"buy_not_compatible" => "Ce pack n'est pas compatible avec celui que vous possédez !",
		"buy_they_already_own" => "Cette personne possède déjà ce pack !",
		"buy_they_not_compatible" => "Ce pack n'est pas compatible avec celui qu'il possède !",

		// Packages
		"buying_someone_else" => "Vous achetez pour quelqu'un d'autre ?",
		"buying_yourself" => "Vous achetez pour vous-même",
		"buying_for" => "Vous achetez pour",
		"packages_custom_amount" => "Montant personnalisé",

		"packages_not_available" => "Aucun pack n'est disponible pour ce serveur.",
		"raffle_not_available" => "Aucun pack de lotterie n'est disponible pour le moment.",
		"credit_not_available" => "Aucun pack de crédit n'est disponible pour le moment.",

		// Buttons
		"submit" => "Envoyer",

		// Profile
		"non_perm_pkg" => "Pack Temporaire",
		"perm_pkg" => "Pack(s) Permanent",
		"acc_info" => "Informations du Compte",
		"pkg_history" => "Historique de Pack",
		"acc_credits" => "Crédits",
		"transfer_credits" => "transfert de Crédits",
		"package" => "Pack",

		// Tables
		"id" => "ID",
		"user" => "Utilisateur",
		"description" => "Description",
		"timestamp" => "Horodatage",
		"action" => "Action",
		"replies" => "Réponses",
		"view" => "Consulter",

		// Select boxes
		"select_server" => "Sélectionnez votre serveur:",
		"select_currency" => "Sélectionnez votre devise:",
		"select_category" => "Sélectionnez votre categorie:",
		"none" => "Aucun",

		// Modals
		"yes" => "Oui",
		"no" => "Non",
		"sure" => "Êtes-vous sûr?",
		"sure_cur" => "Êtes-vous sûr de vouloir supprimer cette devise ?",
		"sure_srv" => "Êtes-vous sûr de vouloir supprimer ce serveur ?",
		"sure_cat" => "Êtes-vous sûr de vouloir supprimer cette catégorie ?",

		// Dangerous settings
		"dangerous" => "Paramètres Dangereux",
		"danger_cur" => "Ou bien, vous pouvez supprimer cette devise.",
		"danger_srv" => "Supprimez ce serveur que si aucun pack ne lui est attribué!",
		"danger_cat" => "Supprimez cette catégorie que si aucun pack ne lui est attribué!",
		"delete" => "Effacer",

		// Admin nav
		"dashboard" => "tableau de bord",
		"general_settings" => "Paramètres généraux",
		"support_tickets" => "Tickets de support",
		"servers" => "Serveurs",
		"currencies" => "Devises",
		"categories" => "Catégories",
		"packages_and_actions" => "Packs & actions",
		"credit_packages" => "Pack de crédits",
		"raffles" => "Lotterie",
		"theme_editor" => "Éditeur de thèmes",
		"documentation" => "Documentation",

		// General Settings
		"settings" => "Paramètres",
		"main_page" => "Page d'accueil",
		"integration_settings" => "Paramètres d'intégration",
		"ingame_notifications" => "Notifications en jeu",

		// Servers page
		"add_srv" => "Ajouter un serveur",
		"edit_srv" => "Editer un serveur",
		"server_name" => "Nom du serveur",
		"featured_pkg_short" => "Pack vedette",

		// Currency page
		"add_cur" => "Ajouter une devise",
		"edit_cur" => "Editer une devise",
		"cc" => "Code de la devise",

		// Category page
		"add_cat" => "Ajouter une catégorie",
		"edit_cat" => "Editer une catégorie",
		"cat_name" => "Nom de la Catégorie",

		// Dashboard nav
		"main_dashboard" => "Tableau de bord",
		"sale" => "Vente",
		"transactions" => "Transactions",
		"users" => "Utilisateurs",
		"logs" => "Logs",
		"update_sql" => "Mise à jour SQL",
		"other_features" => "Autres fonctionnalités",

		// Admin dashboard
		"total" => "Total",
		"full_total" => "Total Global",
		"dashboard_text" => "Bienvenue sur le tableau de bord administrateur, c'est ici que vous serez en mesure de voir les statistiques des dons de vos serveurs.",

		/** 
		 * New in 1.4.7.2
		 */
		"welcome_main" => "Bienvenue",
		"need_credits" => "Besoin de plus de crédits ? <a href='store.php?credits'>Cliquez ici !</a>",
		"no_history" => "Pas d'historique",
		"amount" => "Montant",
		"you_have_none" => "Vous n'en avez aucun !",

		"add_cre" => "Ajouter un pack de crédits",
		"edit_cre" => "Éditer un pack de crédits",
		"pack_title" => "Titre du pack",
		"price" => "Prix",
		"currency" => "Devise",
		"sure_cre" => "Êtes-vous sûr de vouloir supprimer ce pack de crédits ?",
		"danger_cre" => "Ou bien, vous pouvez supprimer ce pack de crédits.",
		"select_package" => "Sélectionner le pack:",
		"choose_cre" => "Choisir le pack de crédits",
		"brief_desc" => "Brève description",
		"amt_of_cre" => "Nombre de crédits",
		"price_of_pkg" => "Prix du pack",
		"no_support" => "Vous n'avez pas de ticket de support",
		"no_other_available" => "Pas d'autres packs disponibles",

		/** 
		 * New in 1.4.8
		 */
		"purchase_free" => "Obtenez ce pack gratuitement !",
		"dashboard_revenuegraph" => "Graphique des Revenues",
		"dashboard_revenuecurrency" => "Affiché dans votre devise principale",
		"dashboard_packagesgraph" => "Packs Vendus",
		"dashboard_serversgraph" => "Packs Serveurs Vendus",
		"between" => "Entre",
		"and" => "Et",
	);

?>
