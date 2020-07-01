# notebook

Quelle est la différence entre Unset() et unlink() ?

L'utilisation de unset() permet au développeur de changer la variable en un état indéfini, tandis que la commande unlink() supprime le fichier qui est envoyé par le système.

	Lorsque tu définis une contrainte de clé étrangère, tu peux déterminer l'action que doit faire MySQL en cas de suppression (DELETE) ou mise à jour (UPDATE) :

CASCADE : si je tente de supprimer la clé primaire, alors supprime tous les enregistrements avec l\'id associé
SET NULL : si je tente de supprimer la clé primaire, alors met NULL dans les enregistrements avec l\'id associé
NO ACTION : si je tente de supprimer la clé primaire, laisse les enregistrements dépendants avec l\'id associé (perte d\'intégrité)
RESTRICT : si je tente de supprimer la clé primaire, empêche la suppression si id référencée ailleurs


Que pensez-vous de la programmation en binôme ?

La programmation par paires est une nouvelle méthode de travail qui consiste à faire travailler deux développeurs ensemble sur le même poste de travail.


Quel est le rôle des méthodes _construct() et _destruct() dans une classe PHP ?

La réponse à cette question d'entretien détermine si le candidat a des connaissances en matière de programmation orientée objet. Tous les objets du langage PHP intègrent des méthodes de construction et de destruction. La méthode Constructor est utilisée à chaque fois qu'une nouvelle instance de classe est créée, elle est alors appelée pour initialiser les propriétés de cette classe. La méthode de destruction n'accepte aucun paramètre.
