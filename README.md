                                             TOUS UNIS, NOUS POUVONS CHANGER LE MONDE
                                                  ALL UNITED, WE CAN CHANGE THE WORLD


(?) Version française plus bas...

The G.O.D. Project - Introduction
=================================

G.O.D stands for Greater Organism Design.

Problem
-------

We are 99% of the whole world. How come we do choices once a blue moon and then let
only that small amount of people to make all the decisions? It's time to awake
social consciousness.

Proposed Solution
-----------------

G.O.D. main purpose it's to be able to get everybody's issue and let the government, our
executives, take **Informed** actions. For the time being this might evolve to something
other than weblog, social network or forum.

This is meant to become non-centralized. Cities could start their polling sessions
by themselves, results grids will be populated. Moderator will populate and collect
the questions and the suggestions.

Quoting occupymontreal.tk "We are students, workers, unemployed, families, young,
retired, public service employees, lawyers, nurses, grand-parents, security guards,
construction workers, of all nationalities, your children’s teachers, atheists,
christians, muslims, buddhists, jedis and artists."

Contributors
------------

This project is done by passionate people who happens to be web developers. We
use open-source software to build a tool to get people's opinion on issues
that matters to them.

**devLAB Montreal** is the initiator group and we welcome any web developer who want
to contribute we, at devLAB Montréal, will take care of the hosting and the code base.

How this will work? Technically - Overview
========================

This is the first iteration, so don't expect too much about it.

Since the whole idea is to take action and propose viable solutions to real society problems we thought that, basically:

* The application will ask questions and suggests two solutions, voter choose his favorite.
* The application calculate the most favorite solution.

If you want to propose new solutions, the forum at http://godproject.devlabmtl.org/discussions/ will take
your suggestions, people can add comments and at some point, moderators could modify
questions from the forum.

WHAT WE NEED? - Ideas, concepts
========================

* Suggest the most important issue you want to fix
* Propose three to five viable (short) solutions (per issue)
* Discuss about them on http://godproject.devlabmtl.org/discussions/
* Let us do the rest.

Commit code? - How to contribute
========================

You code? In what is this built on.

* PHP 5.3
* Symfony 2 as the polling engine
* Git hosted on Git hub for source control
* Vanilla forum as the discussion engine

Commit your code proposal on the https://github.com/siegfried1e/The-G.O.D-project on the develop
branch.

Official version is hosted on http://godproject.devlabmtl.org/, we take care of the deployment
and scaling issues whenever they come.

Proposing new questions and solutions is supported on the forum http://godproject.devlabmtl.org/discussions/

You need to know about Git (http://progit.org/book/), and Symfony 2 (http://symfony.com/).

It's too early in the project to explain how technically we will have a distributed database 
system, but let's start somewhere, the wiki is there to sketch the concepts and the model.

Go ahead!

Help with Quality?
========================

Explain all found bugs on our bug tracker:

https://github.com/siegfried1e/The-G.O.D-project/issues

An efficient way to do so:

* Subject is a 10 words summary of what failed
* Description should contain short description of the bug
* Steps to reproduce
* Web address where the problem was found

One of the organizers of Occupy {yourcity}?
========================

Drop us an email at board@devlabmtl.org give us your vanilla user id on
http://godproject.devlabmtl.org/discussions/ you created.



***


Le projet G.O.D.
=================

«Greater Organism Design»



But:
========================
Faire des instances gouvernementales un éxécutif plutôt que des instances décisionnelles.


Motivations:
========================
* Le système actuel est déficient et non adapté à l'évolution de la société autant au point de vue humain
que techologique.

**Plus précisément** On nous demande de nous prononcer une seule fois pour mettre en place des personnes qui vont par la suite
nous représenter dans un ensemble de décisions sans vraiment avoir à nous reconsulté.


Pourquoi ?
========================
Simplement à cause de la difficulté de consulter les citoyens «dans le vieux monde» rendant totalement
impensable de consulter rapidement les citoyens. Des systèmes de sondages et autres ont été mis en place
pour arriver à aller chercher au moins un échantillon de ce que les gens désirent. Mais malheureusement
rien n'oblige les gouvernements à baser leurs actions sur les résultats. De plus le contrôle de cette
information étant entre les mains de corporations, la recette est trop intéressante pour ne pas intéresser
les gens mal intentionnés et le crime organisé.


Résultat escompté:
========================
Ai-je besoin de mentionner ?

* Des gens assoiffés de pouvoir étudient le système et se positionne dans des rôles décisionnels
stratégiques leurs donnant accès aux ressources de la communauté,
* Le système leurs permet même lorsqu'ils sont mis en question de créer de nouvelles lois qui
ne les obligent pas de répondre de leurs actions,
* Comme les demandes de la communauté sont nombreuses et que le système n'est pas fait pour réagir
rapidement, quand les millions sont partis il est trop tard pour réagir, et les gens en pouvoir au
moment des actes ne sont plus en poste, donc plus responsabilisé.


Notre solution:
========================
**Créer un système de consultation social pour:**

1. Énumérer des problèmes
2. Énumérer des solutions, nouvelles ou existantes
3. Déterminer la meilleur
4. Si plusieurs sont au même niveau
    4.1. Combiner les solutions en de nouvelles proposition
    4.2. retour à 3
5. Proposer des actions pour mettre en place la solution

**Techniquement:**

* À l'aide d'un forum (http://godproject.devlabmtl.org/discussions/) énumérer les problèmes,
* Permettre un vote sur les priorités,
* Pour les prioritaires, énumérer des solutions concrètes, envisageable rapidement,
* Placer les questions avec 3 a 5 solutions dans notre système de consultation:
* Mettre en comparaison les solutions (exemple: préférez-vous solution 1 ou 2),
* Rendre le système de questionnement simple, disponible et rapide,
* Publier les résultats
