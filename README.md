# Squelette pour SPIP 4

## Plugins

cextras (config à importer depuis champs_extra.yaml)
facteur
favicon
historique_spip32_h3
iextras
inserer_modeles
lim
mailshot
mailsubscribers
newsletters
oembed
saisies
scssphp
spip_bonux
verifier
yaml


## Structure

Les rubriques de niveau 0 appairaissent sur le site:
 - #TITRE dans la navigation
 - #TEXTE sur la page
 - #COLONNE à droite si non vide

Les sous rubriques le sont pas listées.

Les articles ne sont pas listés pas à moins d'être appelés par des modèles.

Le contenu d'un article est affiché quand on est sur son url:
 - #TEXTE sur la page
 - #COLONNE à droite si non vide
 - lien pour revenir à la rubrique parente de niveau 0

Les url de youtube/vimeo sont transformées automatiquement si seules sur une ligne.

Les url peertube doivent être intégrées avec le modèle <peertube|url=URL>

Les boutons rouges sont intégrables avec le modèle <lien|texte=TEXT|url=URL>

Les images sont intégrables avec les modèles par défaut auxquels on peut donner les paramètre hauteur et largeur si besoin.

Certains articles sont des redirections, c'est géré avec le champ idoine en bas à gauche de la page d'admin d'un article (pas dans le mode édition).

## Autres

`<blogX>` affiche les articles de la rubrique X sous forme de blog.

`<articlesX> affiche`la liste des articles de la rubriques X sous forme de liens (titre + description entre parenthèses)
