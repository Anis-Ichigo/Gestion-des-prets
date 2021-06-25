<?php

//profil.php
//Mes informations

define('TXT_ACCUEIL_PROFIL', 'Mon Profil');
define('TXT_INFORMATION', 'Mes informations');
define('TXT_PRENOM', 'Prénom');
define('TXT_NOM', 'Nom');
define('TXT_EMAIL', 'Email');
define('TXT_ADRESSE', 'Adresse');
define('TXT_TEL', 'N° de téléphone');
define('TXT_IDENTITE', 'Vous êtes');
define('TXT_FORMATION', 'Formation');
define('TXT_MODIFP', 'Modifier le profil');

//Mot de passe

define('TXT_MDP', 'Mon Mot de passe');
define('TXT_ANCIENMDP', 'Votre mot de passe actuel');
define('TXT_NOUVEAUMDP', 'Nouveau mot de passe');
define('TXT_CONFIRMERMDP', 'Confirmer le nouveau mot de passe');
define('TXT_MODIFMDP', 'Modifier le mot de passe');

//Message mot_de_passe

define('SUCCES_MDP', 'Votre mot de passe a été modifié');
define('ERREUR_MDP', 'Erreur');
define('MDP_DIFFERENT', 'Les mots de passe ne sont pas identiques');
define('MDP_INCORRECT', 'Mot de passe incorrect');
define('MDP_INCOMPLET', 'Veuillez remplir tous les champs !');

//Mes rendez-Vous

define('TXT_RDV', 'Mes rendez-vous');
define('TXT_NUMERO', 'N° de matériel');
define('TXT_TYPE', 'Type de matériel');
define('TXT_DATE', 'Date');
define('TXT_HEURE', 'Heure');

//Bouton
define('TXT_RETOUR', 'Retour');
define('TXT_MODIFIER', 'Modifier');
define('TXT_ENVOYER', 'Envoyer');
define('TXT_OK', 'OK');
define('TXT_CONFIRMER', 'Confirmer');
define('TXT_ANNULER', 'Annuler');
define('TXT_SUPPRIMER', 'Supprimer');
define('TXT_MENU', 'Menu');


//suppression RDV
define('TXT_CONFIRMATION_SUPPRESSION_RDV', 'Souhaitez-vous annuler le rendez-vous ?');
define('TXT_INFO_SUPPRESSION', "Confirmez-vous l'annulation de votre rendez-vous ?");
define('TXT_ALERTE_SUCCES_SUPPRESSION', 'Votre rendez-vous a été annulé');

//Modifiez RDV
define('TXT_CONFIRMATION_MODIFICATION', 'Souhaitez-vous modifier votre rendez-vous ?');
define('TXT_CONFIRMER_MODIFIER', 'Confirmer modification RDV');
define('TXT_ALERTE_SUCCES_MODIFIER', 'Votre créneau a bien été modifié');
//mes_reservations.php

define('TXT_ACCUEIL_RESERVATION', 'Mes Réservations');
define('TXT_RETRAIT', 'Date de retrait');
define('TXT_DATER', 'Date de retour');
define('TXT_PROLONGER', 'Prolonger');
define('TXT_PROBLEME', 'Déclarer un problème');
define('TXT_RESTITUER', 'Restituer le matériel');
define('TXT_DATERA', 'Date de retour actuelle');
define('TXT_DATERS', 'Nouvelle date de retour souhaitée');
define('TXT_ALERTE_SUCCES_PROLONGATION', 'Votre demande de prolongation a bien été transmise');
define('TXT_ERREUR_DATE', 'Veuillez saisir une date de retour valide');
define('TXT_TITRE', 'Titre');
define('TXT_DESCRIPTION', 'Description');
define('TXT_ALERTE_SUCCES_DEMANDE', 'Votre demande a bien été envoyée');
define('TXT_LUNDI', 'Lundi');
define('TXT_MARDI', 'Mardi');
define('TXT_MERCREDI', 'Mercredi');
define('TXT_JEUDI', 'Jeudi');
define('TXT_VENDREDI', 'Vendredi');
define('TXT_CONFIRMATION_RDV', 'Souhaitez-vous confirmer le RDV ?');
define('TXT_BUREAU', 'Bureau');
define('TXT_CONFIRMER_RDV', 'Confirmer RDV');
define('TXT_ALERTE_SUCCES_CRENEAU', 'Votre créneau a bien été réservé');

//reservation_portable.php

define('TXT_ACCUEIL_NOUVELLER', 'Nouvelle Réservation');
define('TXT_DEMANDE_CONCERNE', 'Votre demande concerne');
define('TXT_CHOIX_RETOUR', 'Choisissez la date de retour');
define('TXT_CHOIX_MATERIEL', 'Type de matériel emprunté');
define('TXT_CHOIX_DATE', "Date d'emprunt");
define('TXT_JOUR', 'Jour');
define('TXT_CRENEAU', 'Créneau');
define('TXT_INFO_RESERVATION', "Attention, vous devez fournir les documents demandés (photocopie de pièce d'identité recto/verso et photocopie de carte étudiante). Sans cela, aucun matériel ne pourra vous être prêté.");
define('MDP_COURT', 'Le mot de passe est trop court !');
define('MDP_CHAMPS', 'Veuillez saisir tous les champs !');
define('TXT_CHOIX_CRENEAU','Veuillez choisir un créneau pour récuperer le matériel');
define('TXT_ERREUR_JOUR', 'Veuillez choisir une date autre que le samedi ou le dimanche');
define('TXT_RES_URG',"NB : Dans le cas d'une urgence merci de prendre le premier creneau disponible et de s'adresser au secretariat");

//Page_Inscription.php

define('TXT_ACCUEIL_INSCRIPTION', 'Inscription');
define('TXT_MDP_INS', 'Mot de passe' );
define('TXT_CONFIRMER_MDP_INS', 'Confirmez le mot de passe');
define('TXT_CONFIDENTIEL', "J'ai lu et j'accepte la politique de confidentialité");
define('TXT_CGU', "J'ai lu et j'accepte les conditions générales d'utilisation");
define('TXT_REINITIALISER', 'Réinitialiser');
define('ALERTE_MDP', 'Les deux mots de passe ne sont pas identiques !');
define('ALERTE_SUCCES_COMPTE', 'Le compte a été créé avec succès !');
define('VALIDER', 'Valider');
define('ALERTE_ERREUR_MDP', 'Les mots de passes ne correspondent pas. Veuillez recommencer !');
define('ERREUR_MDP_COURT', 'Le mot de passe choisi est trop court !');
define('TXT_MAIL_INCORRECT', 'Veuillez saisir votre adresse universitaire');


//FAQ.php

define('TXT_ACCUEIL_FAQ', 'Foire Aux Questions');
define('TXT_QUESTION1', 'Comment fonctionne cet outil ?');
define('TXT_REPONSE1_A', "Cet outil sert à faciliter le prêt de matériel à l'Université Toulouse 1 Capitole. En effet, si vous souhaitez emprunter un ordinateur, une tablette, une clé 4G ou d'autres matériels que met UT1 à votre disposition, il vous suffit de vous rendre dans le menu sous");
define('TXT_REPONSE1_B', 'Nouvelle Réservation');
define('TXT_REPONSE1_C', "A partir de là vous serez guidé afin de choisir le matériel que vous désirez puis de prendre un rendez-vous qui vous convient. Il ne vous restera plus qu'à vous rendre au rendez-vous avec une pièce d'identité. Après une photocopie de cette dernière, le matériel vous sera remis. Le retour pourra se faire soit à la date que vous avez déterminé, soit d'office en fin d'année scolaire. Dans tous les cas, un avertissement vous sera envoyé afin de faire dérouler cette procédure dans les meilleures conditions.");
define('TXT_QUESTION2', 'Puis-je emprunter plusieurs matériels?');
define('TXT_REPONSE2', "Oui, cela est tout à fait possible! Dans ce cas, il vous suffira de remplir plusieurs demandes d'emprunt. A chaque fois vous choisirez le matériel, la date de retour souhaitée ainsi que le créneau du rendez-vous. La procédure est la même pour tous les emprunts.");
define('TXT_QUESTION3', 'Puis-je prolonger mon prêt?');
define('TXT_REPONSE3_A', 'Oui, cela est tout à fait possible! Dans ce cas, il vous suffira de cliquer sur le bouton');
define('TXT_REPONSE3_B', 'Prolongation');
define('TXT_REPONSE3_C', "sur l'emprunt dont vous souhaitez prolonger le contrat.");
define('TXT_QUESTION4', 'Que faire en cas de dysfonctionnement de mon matériel?');
define('TXT_REPONSE4_A', 'Lorsque le matériel ne fonctionne plus, ou présente un défaut de fonctionnement, il vous faut');
define('TXT_REPONSE4_B', 'déclarer un problème');
define('TXT_REPONSE4_C', "dans Mes reservations . Dans ce cas, une personne s'occupera de votre question. En effet, si la question peut être résolue à distance, la personne vous accompagnera dans la résolution jusqu'à aboutissement. Dans le cas contraire, la personne vous invitera à prendre un rendez-vous avec le / la secrétaire afin de vous remettre un nouvel exemplaire du matériel.");
define('TXT_QUESTION5', "Relire l'avis de confidentialité des données");
define('TXT_REPONSE5_A', "Veuillez trouver l'Avis de Confidentialité");
define('TXT_REPONSE5_B', 'ici');
define('TXT_QUESTION6', "Relire les conditions générales d'utilisation des données");
define('TXT_REPONSE6', "Veuillez trouver les Conditions Générales d'Utilisation");
define('TXT_QUESTION7', 'Vous avez une autre question?');
define('TXT_REPONSE7', "En cas d'autres questions de votre part, ou en cas de souhait de plus de précisions sur un point, Nous nous tenons à votre disposition pour toute demande. Vous pouvez nous contacter via la page Mes Réservations que vous trouverez");

//CGU.php

define('TXT_ACCUEIL_CGU', 'Conditions générales d’utilisation');
define('CGU', 'I.	Définitions');
define('CGU1', 'Client');
define('CGU2', ': tout professionnel ou personne physique capable au sens des articles 1123 et suivants du Code civil, ou personne morale, qui visite le Site objet des présentes conditions générales.');
define('CGU3', 'Contenu');
define('CGU4', ": Ensemble des éléments constituants l’information présente sur le Site, notamment textes – images – vidéos.");
define('CGU5', 'Informations clients');
define('CGU6', ": Ci-après dénommé « Information (s) » qui correspondent à l’ensemble des données personnelles susceptibles d’être détenues par l’application pour la gestion de votre compte, de la gestion de la relation client et à des fins d’analyses et de statistiques.");
define('CGU7', 'Utilisateur');
define('CGU8', ': Internaute se connectant, utilisant le site susnommé.');
define('CGU9', 'Informations personnelles');
define('CGU10', ": « Les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).");
define('CGU11', "Les termes « données à caractère personnel », « personne concernée », « sous traitant » et « données sensibles » ont le sens défini par le Règlement Général sur la Protection des Données (RGPD : n° 2016-679). </br></br>
<h3> 1. Présentation du site internet. </h3>
  En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs de l’application l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi: </br>
  <ul>
    <li><b> Propriétaire </b> : UFR Informatique d’UT1 – 2 rue du Doyen-Gabriel-Marty 31042 Toulouse </li>
    <li><b> Responsable publication </b> : UFR Informatique d’UT1 – 2 rue du Doyen-Gabriel-Marty 31042 Toulouse. Le responsable publication est une personne physique ou une personne morale.  </li>
    <li><b> Webmaster </b> : UFR Informatique d’UT1 – 2 rue du Doyen-Gabriel-Marty 31042 Toulouse </li>
    <li><b> Hébergeur </b> : 2 rue du Doyen-Gabriel-Marty 31042 Toulouse 05 61 63 36 36 </li>
    <li><b> Délégué à la protection des données </b> : ??? </li>
  </ul>
<h3> 2. Conditions générales d’utilisation du site et des services proposés.</h3>
  <p align='justify'>Le Site constitue une œuvre de l’esprit protégée par les dispositions du Code de la Propriété Intellectuelle et des Réglementations Internationales applicables. Le Client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre compte tout ou partie des éléments ou travaux du Site.
  L’utilisation de l’application implique l’acceptation pleine et entière des CGU, conditions générales d’utilisation, ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site sont donc invités à les consulter de manière régulière.
  Ce site internet est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée, après communication préalable aux utilisateurs les dates et heures de l’intervention. </p></br></br>
<h3> 3. Description des services fournis. </h3>
  <p align='justify'>Le site a pour objet de fournir un service de gestion des prêts de matériel mis à disposition pour de la part de l’Université Toulouse 1, Capitole, à ses étudiants et son personnel. L’application s’efforce à être la plus précise possible. Toutefois, il ne pourra être tenu responsable des oublis, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
  Toutes les informations indiquées sur le site sont données à titre indicatif et non-exhaustifs, et sont susceptibles d’évoluer. Ils sont donc donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. </p></br></br>
<h3> 4. Limitations contractuelles sur les données techniques. </h3>
  <p align='justify'>Le site utilise la technologie JavaScript. Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour L’hébergement se fait chez un prestataire sur le territoire de l’Union Européenne conformément aux dispositions du Règlement Général sur la Protection des Données (RGPD : n° 2016-679) </br>
  L’objectif est d’apporter une prestation qui assure le meilleur taux d’accessibilité. L’hébergeur assure la continuité de son service 24 Heures sur 24, tous les jours de l’année. Il se réserve néanmoins la possibilité d’interrompre le service d’hébergement pour les durées les plus courtes possibles notamment à des fins de maintenance, d’amélioration de ses infrastructures, de défaillance de ses infrastructures ou si les Prestations et Services génèrent un trafic réputé anormal.
  Le site ainsi que son hébergeur ne pourront être tenus responsables en cas de dysfonctionnement du réseau Internet, des lignes téléphoniques ou du matériel informatique et de téléphonie, lié notamment à l’encombrement du réseau empêchant l’accès au serveur. </p></br></br>
<h3> 5. Propriété intellectuelle et contrefaçons. </h3>
  <p align='justify'>L’Université Toulouse 1 Capitole est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, icônes et sons. Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite.
  Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de la Propriété Intellectuelle. </p></br></br>
<h3> 6. Limitations de responsabilité. </h3></br>
  <p align='justify'>L’UFR Informatique et la DSI de l’Université UT1 agissent en tant qu’éditeur du site et sont responsables de la qualité et de la véracité du Contenu qu’il publie.
  Le site, son responsable et son hébergeur ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité. Ces derniers ne pourront également être tenu responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site.
  Des espaces interactifs (possibilité de poser des questions dans l’espace contact, ou la prise de contact par formulaire) sont à la disposition des utilisateurs. Les responsables se réservent le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, il se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …). </p></br>
<h3> 7. Gestion des données personnelles. </h3> </br>
  <p align='justify'> Le Client est informé des réglementations concernant la communication marketing, la loi du 21 Juin 2014 pour la confiance dans l’Economie Numérique, la Loi Informatique et Liberté du 06 Août 2004 ainsi que du Règlement Général sur la Protection des Données (RGPD : n° 2016-679). </br>
    <h4>7.1 Responsables de la collecte des données personnelles</h4>
      <p align='justify'>Pour les Données Personnelles collectées dans le cadre de la création du compte personnel de l’Utilisateur et de sa navigation sur le Site, le responsable du traitement des Données Personnelles est : XXX. Le site est représenté par l’UFR de l’Université Toulouse 1 Capitole, son représentant légal.
      En tant que responsable du traitement des données qu’il collecte, il s’engage à respecter le cadre des dispositions légales en vigueur. Il lui appartient notamment au Client d’établir les finalités de ses traitements de données, de fournir à ses prospects et clients, à partir de la collecte de leurs consentements, une information complète sur le traitement de leurs données personnelles et de maintenir un registre des traitements conforme à la réalité.
      Chaque fois que l’application traite des Données Personnelles, UT1 prend toutes les mesures raisonnables pour s’assurer de l’exactitude et de la pertinence des Données Personnelles au regard des finalités pour lesquelles il les traite.</p>
    <h4>7.2 Finalité des données collectées</h4>
      <p align='justify'>Le site est susceptible de traiter tout ou partie des données :
        <ul>
          <li><b>Pour permettre la navigation sur le Site et la gestion et la traçabilité des prestations et services commandés par l’utilisateur</b> : données de connexion et d’utilisation du Site, historique des emprunts, etc.</li>
          <li><b>Pour prévenir et lutter contre la fraude informatique (spamming, hacking…)</b> : matériel informatique utilisé pour la navigation, l’adresse IP, le mot de passe (hashé), l’identifiant</li>
          <li><b>Pour améliorer la navigation sur le Site</b> : données de connexion et d’utilisation</li>
          <li><b>Pour d’éventuelles communications en dehors de l’outil</b> : l’adresse électronique</li>
          <li><b>Pour mener des campagnes de communication</b> : numéro de téléphone, adresse électronique </li>
        </ul>
      En effet, l’application ne commercialise pas vos données personnelles qui sont donc uniquement utilisées par nécessité ou à des fins statistiques et d’analyses.</p>
    <h4>7.3 Droit d’accès, de rectification et d’opposition</h4>
      Conformément à la réglementation européenne en vigueur, les utilisateurs de disposent des droits suivants :
        <ul>
          <li>Droit d'accès (article 15 RGPD) et de rectification (article 16 RGPD), de mise à jour, de complétude des données des Utilisateurs droit de verrouillage ou d’effacement des données des Utilisateurs à caractère personnel (article 17 du RGPD), lorsqu’elles sont inexactes, incomplètes, équivoques, périmées, ou dont la collecte, l'utilisation, la communication ou la conservation est interdite</li>
          <li>Droit de retirer à tout moment un consentement (article 13-2c RGPD)</li>
          <li>Droit à la limitation du traitement des données des Utilisateurs (article 18 RGPD)</li>
          <li>Droit d’opposition au traitement des données des Utilisateurs (article 21 RGPD)</li>
          <li>Droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces données font l’objet de traitements automatisés fondés sur leur consentement ou sur un contrat (article 20 RGPD)</li>
          <li>Droit de définir le sort des données des Utilisateurs après leur mort et de choisir à qui l’outil devra communiquer (ou non) ses données à un tiers qu’ils aura préalablement désigné.</li>
        </ul>
      Si l’Utilisateur souhaite savoir comment l’application utilise ses Données Personnelles, demander à les rectifier ou s’oppose à leur traitement, l’Utilisateur peut contacter le responsable de l’outil par écrit à l’adresse suivante :
      Université Toulouse 1 Capitole</br>
      2 rue du Doyen-Gabriel-Marty</br>
      31042 Toulouse</br>
      France.</br>
      <p align='justify'>Dans ce cas, l’Utilisateur doit indiquer les Données Personnelles qu’il souhaiterait que le site corrige, mette à jour ou supprime, en s’identifiant précisément avec une copie d’une pièce d’identité (carte d’identité ou passeport). Les demandes de suppression de Données Personnelles seront soumises aux obligations imposées par la loi, notamment en matière de conservation ou d’archivage des documents. Enfin, les Utilisateurs peuvent déposer une réclamation auprès des autorités de contrôle, et notamment de la <a href='https://www.cnil.fr/fr/plaintes'> CNIL </a></p>
    <h4>7.4 Non-communication des données personnelles</h4>
      <p align='justify'>L’application s’interdit de traiter, héberger ou transférer les Informations collectées sur ses Clients vers un pays situé en dehors de l’Union européenne ou reconnu comme « non adéquat » par la Commission européenne sans en informer préalablement le client. Pour autant, il reste libre du choix de ses sous-traitants techniques et commerciaux à la condition qu’ils présentent les garanties suffisantes au regard des exigences du Règlement Général sur la Protection des Données (RGPD : n° 2016-679).
      Le site s’engage également à prendre toutes les précautions nécessaires afin de préserver la sécurité des Informations et notamment qu’elles ne soient pas communiquées à des personnes non autorisées. Cependant, si un incident impactant l’intégrité ou la confidentialité des Informations du Client est portée à la connaissance du responsable de l’outil, celui-ci devra dans les meilleurs délais informer le Client et lui communiquer les mesures de corrections prises.
      Les Données Personnelles de l’Utilisateur peuvent être traitées par des filiales d’UT1, à savoir les différentes UFR, et des sous-traitants (prestataires de services) si existants, exclusivement afin de réaliser les finalités de la présente politique.</br></br>
    <h3>8. Notification d’incident</h3>
      <p align='justify'>Quels que soient les efforts fournis, aucune méthode de transmission sur Internet et aucune méthode de stockage électronique n'est complètement sûre. Nous ne pouvons en conséquence pas garantir une sécurité absolue. Si nous prenions connaissance d'une brèche de la sécurité, nous avertirions les utilisateurs concernés afin qu'ils puissent prendre les mesures appropriées. Nos procédures de notification d’incident tiennent compte de nos obligations légales, qu'elles se situent au niveau national ou européen. Nous nous engageons à informer pleinement nos clients de toutes les questions relevant de la sécurité de leur compte et à leur fournir toutes les informations nécessaires pour les aider à respecter leurs propres obligations réglementaires en matière de reporting.
      Aucune information personnelle de l'utilisateur du site n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers.
      Pour assurer la sécurité et la confidentialité des Données Personnelles, UT1 utilise des réseaux protégés par des dispositifs standards tels que par pare-feu, la pseudonymisation, l’encryption et mot de passe.
      Lors du traitement des Données Personnelles, UT1 prend toutes les mesures raisonnables visant à les protéger contre toute perte, utilisation détournée, accès non autorisé, divulgation, altération ou destruction.</p></br>
    <h3>9. Liens hypertextes « cookies » et balises (“tags”) internet</h3>
      Sauf si vous décidez de désactiver les cookies, vous acceptez que le site puisse les utiliser. Vous pouvez à tout moment désactiver ces cookies et ce gratuitement à partir des possibilités de désactivation qui vous sont offertes et rappelées ci-après, sachant que cela peut réduire ou empêcher l’accessibilité à tout ou partie des Services proposés par le site.
      <h4>9.1. « COOKIES »</h4>
        <p align='justify'>Un « cookie » est un petit fichier d’information envoyé sur le navigateur de l’Utilisateur et enregistré au sein du terminal de l’Utilisateur (ex : ordinateur, smartphone), (ci-après « Cookies »). Ce fichier comprend des informations telles que le nom de domaine de l’Utilisateur, le fournisseur d’accès Internet de l’Utilisateur, le système d’exploitation de l’Utilisateur, ainsi que la date et l’heure d’accès.
        Les Cookies ne risquent en aucun cas d’endommager le terminal de l’Utilisateur. Ce site est susceptible de traiter les informations de l’Utilisateur concernant sa visite du Site, telles que les pages consultées, les recherches effectuées. Ces informations permettent au responsable de l’outil d’améliorer le contenu du Site, de la navigation de l’Utilisateur.
        Les Cookies facilitant la navigation et/ou la fourniture des services proposés par le Site, l’Utilisateur peut configurer son navigateur pour qu’il lui permette de décider s’il souhaite ou non les accepter de manière à ce que des Cookies soient enregistrés dans le terminal ou, au contraire, qu’ils soient rejetés, soit systématiquement, soit selon leur émetteur. L’Utilisateur peut également configurer son logiciel de navigation de manière à ce que l’acceptation ou le refus des Cookies lui soient proposés ponctuellement, avant qu’un Cookie soit susceptible d’être enregistré dans son terminal. Dans ce cas, il se peut que les fonctionnalités de son logiciel de navigation ne soient pas toutes disponibles.
        Si l’Utilisateur refuse l’enregistrement de Cookies dans son terminal ou son navigateur, ou si l’Utilisateur supprime ceux qui y sont enregistrés, l’Utilisateur est informé que sa navigation et son expérience sur le Site peuvent être limitées. Cela pourrait également être le cas lorsque le site ou l’un de ses prestataires ne peut pas reconnaître, à des fins de compatibilité technique, le type de navigateur utilisé par le terminal, les paramètres de langue et d’affichage ou le pays depuis lequel le terminal semble connecté à Internet.
        Le cas échéant, UT1 décline toute responsabilité pour les conséquences liées au fonctionnement dégradé du Site et des services éventuellement proposés par le site, résultant (i) du refus de Cookies par l’Utilisateur (ii) de l’impossibilité pour le site d’enregistrer ou de consulter les Cookies nécessaires à leur fonctionnement du fait du choix de l’Utilisateur. Pour la gestion des Cookies et des choix de l’Utilisateur, la configuration de chaque navigateur est différente. Elle est décrite dans le menu d’aide du navigateur, qui permettra de savoir de quelle manière l’Utilisateur peut modifier ses souhaits en matière de Cookies.
        À tout moment, l’Utilisateur peut faire le choix d’exprimer et de modifier ses souhaits en matière de Cookies. L’application et UT1 pourront en outre faire appel aux services de prestataires externes pour l’aider à recueillir et traiter les informations décrites dans cette section.</p></br>
    <h3>10. Droit applicable et attribution de juridiction.</h3>
      <p align='justify'>Tout litige en relation avec l’utilisation du site est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Toulouse.</p>");

//AC.php

define('AC', "  <center><h1>Avis de confidentialité sur la protection des données personnelles</h1></center>
    <b>Dernière actualisation : Mai 2021</b><br>
      <h2>Préambule</h2>
      <p align='justify'>Notre société est soucieuse de la protection et de la confidentialité des données personnelles et s’engage à assurer le meilleur niveau de protection à vos données personnelles en conformité avec les réglementations en vigueur sur la protection des données personnelles, applicables en Europe (RGPD) et en France.
      Cette politique de confidentialité a pour objectif de vous informer sur les mesures et engagements pratiques pris par notre société afin de veiller au respect et à la protection de vos données personnelles, et celles de vos clients.</p>
      <ul>
        <li>« Nous » et « Notre » se rapportent au Responsable de Traitement des données insérées sur le site de capitolehelpdes.ut-capitole.fr, et aux Services que nous fournissons.</li>
        <li>« Vous » et « Vos / Votre » se rapportent à tous les utilisateurs de nos services ou visiteurs de l’outil.</li>
        <li>Le terme « Client » définit nos clients.</li>
      </ul>
      <h2>1 – Identité du responsable du traitement des données</h2>
        <p align='justify'>Conformément au cadre juridique de la gestion des traitements de données applicable depuis le 25 mai 2018 en application du règlement européen 2016/679 du 27 avril 2016 dit « règlement général sur la protection des données » (RGPD), l’Université Toulouse 1, UT1 Capitole est le Responsable de Traitement (R.T.) au sens donné à ce terme par ledit Règlement.
        Notre Délégué à la Protection des Données (DPO) est XXX. Il peut être contacté par mail à l’adresse XXX@ut-capitole.fr ou par voie postale à l’adresse du propriétaire :
        Université Toulouse 1 Capitole,<br>
        2 Rue Gabriel Marty<br>
        31042 Toulouse <br>
        France <br></p>
      <h2>2 - Données à caractère personnel que nous collectons</h2>
        <p align='justify'>Lorsque vous vous inscrivez à l’un de nos services, il se peut que vous nous fournissiez : <br>
        • Vos détails personnels comme votre adresse, votre adresse électronique, votre numéro étudiant, votre date de naissance, votre numéro de téléphone et une pièce d’identité (CNI, passeport, carte étudiante, ou toute pièce valide permettant une identification claire de votre personne) ; <br>
        En fournissant les données à caractère personnel d’autres personnes, vous devez être certain qu’elles y consentent et que vous êtes autorisé à le faire. Vous devriez également vous assurer, le cas échéant, qu’elles comprennent comment nous pouvons utiliser leurs données à caractère personnel.
      <h2>3 - Utilisation de vos données à caractère personnel</h2>
          Nous utilisons vos données à caractère personnel de diverses manières décrites ci-dessous.
          <ol>
            <li>Afin de vous procurer les produits et services que vous demandez.<br>
            Nous devons procéder au traitement de vos données à caractère personnel en vue de gérer votre compte ou votre communication et de vous prêter assistance dans le cadre de toute aide que vous puissiez demander en rapport avec l’outil ou les services que nous vous fournissons.</li>
            <li>Afin de gérer et d’améliorer nos produits, services et opérations quotidiennes.<br>
            Nous utilisons des données à caractère personnel pour gérer et améliorer nos services, et site web. Nous surveillons la manière dont nos services sont utilisés afin de protéger vos données à caractère personnel, détecter et prévenir les fraudes, les autres délits et l’utilisation abusive de nos services. Cela permet de nous assurer que vous recouriez à nos services en toute sécurité.
            Nous pouvons utiliser des données à caractère personnel à des fins d’études de marché, de recherche et développement internes, et en vue de déployer et d’améliorer notre gamme de produits et services, nos shops, nos systèmes informatiques, notre sécurité, notre savoir-faire et la manière dont nous communiquons avec vous.</li>
            <li>Afin de vous contacter et d’interagir avec vous. <br>
            Nous sommes toujours soucieux de vous procurer le meilleur service possible en tant que client et utilisateur. Ainsi, si vous nous contactez, par exemple par courrier électronique, courrier postal, téléphone ou au moyen des réseaux sociaux, nous pouvons utiliser vos données à caractère personnel pour toute clarification ou assistance que vous demandez.
            Nous pouvons vous inviter à prendre part à des sondages, à des questionnaires et à d’autres études de marché destinés aux clients réalisés par notre Société et d’autres organisations pour notre compte. Nous ne vendons pas vos données à caractère personnel à des tiers.</li>
          </ol>
      <h2> 4 - Base légale du traitement de données à caractère personnel</h2>
        Nous collecterons et utiliserons vos données à caractère personnel uniquement si au moins une des conditions suivantes s’applique :<br>
        <ul>
          <li>Nous avons votre autorisation ; Exemple : inscription.</li>
          → Lorsque vous vous réalisez une inscription à l’outil, vous nous autorisez à traiter vos données à caractère personnel.<br>
          <li>Cela apparaît nécessaire en vue du respect d’une obligation légale ; Exemple : partage des données à caractère personnel avec les autorités de contrôle.</li>
          <li>C’est nécessaire pour protéger vos intérêts vitaux ou ceux d’autres personnes ; Exemple : en cas d’urgence.</li>
          <li>Cela relève de l’intérêt public où nous détenons une autorisation officielle ; Exemple : opérations de sécurité.</li>
          -> Nous pouvons utiliser des données à caractère personnel pour réagir aux opérations de sécurité, aux accidents ou aux autres incidents similaires et les gérer, y compris à des fins médicales et d’assurance.
          <li>Cela relève de nos intérêts légitimes ou de ceux d’un tiers, et ceux-ci ne sont pas annulés par vos intérêts ou droits. Exemple : afin de personnaliser votre expérience.</li>
          -> Il se peut que nous utilisions vos données à caractère personnel pour mieux comprendre vos centres d’intérêt, de manière à essayer de prédire quels produits, services et informations vous intéresseraient le plus. Cela nous permet d’affiner nos communications pour qu’elles soient les plus pertinentes et intéressantes possibles pour vous.
        </ul>
      <h2>5 - Partage des données à caractère personnel avec des prestataires</h2>
        <p align='justify'>En vue de vous procurer les produits ou services que vous demandez, nous pouvons être amenés à partager vos données à caractère personnel avec les prestataires des modalités de votre communication, dont les gérants de l’outil, les vacataires permettant la résolution des problèmes, la direction de l’université, …
        Nous collaborons également avec des prestataires soigneusement sélectionnés qui assurent certaines fonctions pour notre compte. Des sociétés s’occupent, par exemple, des services informatiques, du stockage et de la compilation des données.
        Il se peut aussi que nous devions partager des données à caractère personnel afin d’établir, d’exercer ou de défendre nos droits juridiques ; ceci inclut la transmission de données à caractère personnel à des tiers afin de prévenir la fraude. Lorsque nous partageons des données à caractère personnel avec d’autres organisations, nous leur demandons de sécuriser ces données et de ne pas les utiliser pour leurs propres fins commerciales. Ces organisations ont l’obligation notamment de limiter la durée de conservation de vos données au temps nécessaire à l’exécution de la prestation, ou pour se conformer à leurs obligations légales ou réglementaires, et de garantir une procédure de destruction des données personnelles RGPD conforme, au terme de ladite durée de conservation.
        Nous partageons uniquement les données à caractère personnel strictement nécessaires pour permettre à nos prestataires de vous/nous fournir leurs services.</p>
      <h2>6 - Partage des données à caractère personnel avec les autorités de contrôle</h2>
        <p align='justify'>Pour vous permettre de communiquer, il se peut que la divulgation et le traitement de vos données à caractère personnel soient obligatoires en cas de fraude, de communication abusive ou de communication inadéquate.
        Nous pouvons partager les données à caractère personnel strictement nécessaires avec d’autres instances publiques si la loi l’exige ou si nous y sommes juridiquement autorisés ou contraints.
      <h2>7 - Protection de vos données à caractère personnel</h2>
        Nous connaissons l’importance de la protection et de la gestion de vos données à caractère personnel. Nous prenons des mesures de sécurité appropriées pour vous aider à protéger vos données à caractère personnel contre toute perte accidentelle et tout accès, toute utilisation, toute altération et toute divulgation non autorisé(e).
        Ainsi :
        <ul>
          <li>Nous utilisons des moyens informatiques cryptés pour stocker l’accès à vos données ;</li>
          <li>Nous ne stockons pas vos données bancaires sur des bases informatiques ;</li>
          <li>Nous ne stockons pas les données sensibles allant à l’encontre du RGPD ;</li>
          <li>Nous insérons des clauses de confidentialité dans nos conventions avec nos fournisseurs ou prestataires, permettant d’identifier les informations communiquées et nous attribuant un droit de contrôle inopiné du respect des procédures de protection ;</li>
          <li>Nous mettons à jour régulièrement nos registres de traitement.</li>
          <li>S’agissant de notre personnel, nous sensibilisons régulièrement (formations, publications réunions) l’ensemble de notre équipe quant à l’importance de la protection et de la gestion responsable de vos données personnelles. Nous avons inséré des clauses de confidentialité dans nos contrats de travail, et les salariés ont pris des engagements dans ce sens. Nous vous rappelons que la sécurité de vos données dépend également de vous.</li>
        </ul>
      <h2>8 - Conservation des données personnelles</h2>
        <p align='justify'>Nous conserverons vos données à caractère personnel le temps nécessaire aux fins définies dans le présent avis et/ou afin de respecter les prescriptions juridiques et réglementaires, c’est-à-dire par cycles de 3 ans renouvelables.
        Lorsque vous formulez une demande de renseignements, nous conservons vos données pendant une durée de 3 ans.
        Lorsque vous communiquez avec une personne par le biais de nos services, nous conservons vos données pendant une durée de 3 ans à compter de l’envoi de votre demande. Passé ce délai, nous effacerons les données des communications. Si vos données sont nécessaires après ce délai à des fins analytiques, historiques ou à d’autres fins commerciales légitimes, nous prendrons les mesures adéquates pour les rendre anonymes.</p>
      <h2>9 - Accès et mise à jour de vos données à caractère personnel et plaintes</h2>
        <p align='justify'>Vous avez le droit de demander une copie des données à caractère personnel que nous détenons à votre égard. Vous pouvez nous écrire pour demander une copie des autres données à caractère personnel que nous possédons à votre sujet.
        Veuillez inclure tout détail qui nous aidera à vous identifier et à localiser vos données à caractère personnel. L’accès à vos données, lorsque nous sommes en mesure de vous l’offrir, est gratuit. Nous tenons à nous assurer que les données à caractère personnel que nous détenons à votre égard sont exactes et actualisées. Si l’une des informations que nous possédons n’est pas correcte, veuillez le communiquer à la scolarité de votre formation.
        Vous pouvez également demander de rectifier ou de supprimer vos données à caractère personnel, vous opposer à leur traitement et, lorsque c’est techniquement possible, demander que les données à caractère personnel fournies soient transmises à une autre organisation. Néanmoins, cette opposition ne sera prise en compte que par la plateforme de l’outil, et pas par les autres organismes en disposant, comme notamment l’université. <br><br>
        Nous mettrons à jour ou effacerons vos données, à moins d’être tenus de les conserver à des fins commerciales ou juridiques légitimes.
        Vous pouvez aussi nous contacter si vous avez une plainte concernant la façon dont nous collectons, stockons ou utilisons vos données à caractère personnel. Nous mettons tout en œuvre pour résoudre les plaintes mais, si vous n’êtes pas satisfait de notre réaction, vous pouvez déposer une plainte auprès des autorités locales de protection des données : https://www.cnil.fr/fr/plaintes.
        Veuillez soumettre votre demande ou votre plainte par écrit au Délégué à la Protection des Données (DPO) sur papier libre (de préférence en R.A.R.) en indiquant :<p>
        <ul>
          <li>Votre nom et prénom ;</li>
          <li>Votre adresse postale ;</li>
          <li>Votre adresse e-mail ;</li>
          <li>Votre numéro de téléphone ;</li>
          <li>Les motifs de votre plainte.</li>
        </ul>
        À l’adresse :<br>
        Université Toulouse 1 Capitole, <br>
        2 Rue Gabriel Marty <br>
        31042 Toulouse <br>
        France <br> <br>
        Ou par courriel électronique à XXX@ut-capitole.fr <br> <br>
        Nous tenons à souligner que nous devons contrôler votre identité avant de traiter votre demande ou plainte. Il se peut que nous vous demandions davantage d’informations en vue de nous assurer que vous êtes autorisé à déposer une telle requête ou plainte lorsque vous nous contactez pour le compte d’une autre personne.<br><br>");


//reglage.php

define('TXT_ACCUEIL_REGLAGE', 'Réglages');
define('CHOIX_LANGUE', 'Choix de la langue');
define('ENREGISTRER', 'Enregistrer');

//menu2.php

define('DECONNEXION', 'Déconnexion');
define('FAQ', 'FAQ');

 ?>
