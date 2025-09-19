📝 PLAN QUALITÉ – Projet FREDI
I. Présentation de l’équipe du projet
Nom / Prénom
Rôle
Responsabilités principales
MONTANEDE Naëlle (Chef de projet / qualité)
Coordination, suivi qualité, communication client
Organise les réunions, rédige les comptes rendus, met à jour le plan qualité et le planning, contrôle la conformité aux exigences

(Développeur Front & BDD)
Interfaces web, scripts SQL
Développe les pages PHP/HTML, conçoit et implémente la base de données, rédige la documentation technique

(Développeur Back / Tests & Doc utilisateur)
Espace trésorier, génération CERFA, tests
Développe les fonctionnalités back-office, met en place les tests fonctionnels et rédige la documentation utilisateur


II. Règles de suivi de l’avancement du projet
Suivi via Trello avec colonnes “À faire – En cours – Terminé”


Réunion de suivi toutes les 2 semaines


Mise à jour du Diagramme de Gantt tous les 15 jours


Suivi des jalons : SP1, SP2, SP3 (dates fixées dans le planning)


III. Règles de planification des tâches
Les tâches sont découpées par jalon (SP1, SP2, SP3)


Chaque tâche est affectée à une personne (nom visible sur Trello)


Durée estimée et date butoir indiquées


Les retards sont signalés à Personne A qui réajuste le planning


IV. Règles de nommage de la base de données
Tables : noms en minuscules, pluriels, séparés par underscore (ex. adherents, bordereaux_frais)


Champs : id_… pour les clés primaires (ex. id_adherent)


Clés étrangères : id_table (ex. id_ligue)


V. Règles de nommage des variables internes
PHP : $nom_variable en anglais (ex : $user_email)


JS : camelCase (ex : userEmail)


Constantes : majuscules avec underscore (ex : MAX_LINES)


VI. Règles de documentation des éléments programmés et paramétrés
Chaque script PHP/SQL comporte un en-tête (auteur, date, rôle, version)


Chaque fonction est commentée en docblock


Un Wiki du projet regroupe la doc technique


VII. Règles d’adressage des éléments de l’infrastructure
En développement : localhost/fredi/…


En production : https://m2l-fredi.fr/…


Nommage des répertoires : auth/, notes_frais/, tresorier/


VIII. Règles des jeux de tests unitaires
Authentification : inscription, connexion, mot de passe oublié


Notes de frais : ajout, modification, suppression d’une ligne


CERFA : génération du PDF et cohérence des totaux


IX. Règles du jeu de tests d’ensemble
Parcours complet : inscription → saisie frais → validation trésorier → génération CERFA


Test sur plusieurs profils (adhérent, trésorier)


Vérification cohérence base de données et PDF générés


X. Règles de suivi de la qualité du projet
Audit qualité avant chaque jalon (SP1, SP2, SP3)


Vérification de la conformité aux exigences du plan qualité


Archivage des comptes rendus et rapports de tests


XI. Annexes
Exemple CERFA 11580-02


Exemple bordereau note de frais


Planning prévisionnel (ci-dessous)

