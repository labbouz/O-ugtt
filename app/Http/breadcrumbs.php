<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push(trans('main.dashboard'), route('home'));
});

// stats
Breadcrumbs::register('stats', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('main.stats'), route('stats'));
});

// contacts
Breadcrumbs::register('contacts', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('main.contacts'), route('contacts'));
});

// My profile
Breadcrumbs::register('myprofile', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('main.mypofile'), route('myprofile'));
});

Breadcrumbs::register('changepassword', function($breadcrumbs) {
    $breadcrumbs->parent('myprofile');
    $breadcrumbs->push(trans('users.change_my_password'), route('changepassword'));
});

Breadcrumbs::register('myprofile.edit', function($breadcrumbs) {
    $breadcrumbs->parent('myprofile');
    $breadcrumbs->push(trans('users.change_my_profile'), route('myprofile.edit'));
});

Breadcrumbs::register('users.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('main.users'), route('users.index'));
});

Breadcrumbs::register('users.create', function($breadcrumbs) {
    $breadcrumbs->parent('users.index');
    $breadcrumbs->push(trans('main.add_user'), route('users.create'));
});

Breadcrumbs::register('users.edit', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('users.index');
    $breadcrumbs->push(trans('main.edit_user') . ' ' . $user->name, route('users.edit', $user->id));
});



Breadcrumbs::register('admins', function($breadcrumbs) {
    $breadcrumbs->parent('users.index');
    $breadcrumbs->push(trans('main.users'), route('admins'));
});
Breadcrumbs::register('observateurs', function($breadcrumbs) {
    $breadcrumbs->parent('users.index');
    $breadcrumbs->push(trans('main.users'), route('observateurs'));
});
Breadcrumbs::register('observateurs-regional', function($breadcrumbs) {
    $breadcrumbs->parent('users.index');
    $breadcrumbs->push(trans('main.obesrvateurs_regional'), route('observateurs-regional'));
});
Breadcrumbs::register('observateurs-secteur', function($breadcrumbs) {
    $breadcrumbs->parent('users.index');
    $breadcrumbs->push(trans('main.obesrvateurs_secteur'), route('observateurs-secteur'));
});


/*
 *  Breadcrumbs secteur
 */

Breadcrumbs::register('secteur.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('secteur.secteurs'), route('secteur.index'));
});

Breadcrumbs::register('secteur.create', function($breadcrumbs) {
    $breadcrumbs->parent('secteur.index');
    $breadcrumbs->push(trans('secteur.add_secteur'), route('secteur.create'));
});

Breadcrumbs::register('secteur.edit', function($breadcrumbs, $secteur)
{
    $breadcrumbs->parent('secteur.index');
    $breadcrumbs->push(trans('secteur.edit_secteur') . ' ' . $secteur->nom_secteur, route('secteur.edit', $secteur->id));
});

Breadcrumbs::register('secteur.show', function($breadcrumbs, $secteur)
{
    $breadcrumbs->parent('secteur.index');
    $breadcrumbs->push(trans('secteur.la_conventions_sectorielles_conjointes') . '  '  . trans('secteur.pour_secteur') . $secteur->nom_secteur, route('secteur.show', $secteur->id));
});


/*
 *  Breadcrumbs move
 */

Breadcrumbs::register('move.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('move.moves'), route('move.index'));
});

Breadcrumbs::register('move.create', function($breadcrumbs) {
    $breadcrumbs->parent('move.index');
    $breadcrumbs->push(trans('move.add_move'), route('move.create'));
});

Breadcrumbs::register('move.edit', function($breadcrumbs, $move)
{
    $breadcrumbs->parent('move.index');
    $breadcrumbs->push(trans('move.edit_move') . ' ' . $move->nom_move, route('move.edit', $move->id));
});


/*
 *  Breadcrumbs delegation
 */

Breadcrumbs::register('delegation.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('delegations.delegations'), route('delegation.index'));
});

Breadcrumbs::register('delegation.create', function($breadcrumbs) {
    $breadcrumbs->parent('delegation.index');
    $breadcrumbs->push(trans('delegations.add_delegation'), route('delegation.create'));
});

Breadcrumbs::register('delegation.edit', function($breadcrumbs, $delegation)
{
    $breadcrumbs->parent('delegation.index');
    $breadcrumbs->push(trans('delegations.edit_delegation') . ' ' . $delegation->nom_delegation, route('delegation.edit', $delegation->id));
});

/*
 *  Breadcrumbs structure_syndicale
 */

Breadcrumbs::register('structure_syndicale.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('syndicale.structures_syndicales'), route('structure_syndicale.index'));
});

Breadcrumbs::register('structure_syndicale.create', function($breadcrumbs) {
    $breadcrumbs->parent('structure_syndicale.index');
    $breadcrumbs->push(trans('syndicale.add_structure_syndicale'), route('structure_syndicale.create'));
});

Breadcrumbs::register('structure_syndicale.edit', function($breadcrumbs, $structure_syndicale)
{
    $breadcrumbs->parent('structure_syndicale.index');
    $breadcrumbs->push(trans('syndicale.edit_structure_syndicale') . ' ' . $structure_syndicale->type_structure_syndicale, route('structure_syndicale.edit', $structure_syndicale->id));
});


/*
 *  Breadcrumbs violation
 */

Breadcrumbs::register('violation.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('violations.les_violations'), route('violation.index'));
});

Breadcrumbs::register('violation.show', function($breadcrumbs, $typeViolation) {
    $breadcrumbs->parent('violation.index');
    $breadcrumbs->push(trans('violations.les_violations') . ' '. trans('violations.la') . $typeViolation->nom_type_violation, route('violation.show', $typeViolation->id));
});

Breadcrumbs::register('violation.create', function($breadcrumbs) {
    $breadcrumbs->parent('violation.index');
    $breadcrumbs->push(trans('violations.add_violation'), route('violation.create'));
});

Breadcrumbs::register('violation.create_via_type', function($breadcrumbs, $typeViolation) {
    $breadcrumbs->parent('violation.index');
    $breadcrumbs->push(trans('violations.add_violation'), route('violation.create_via_type', $typeViolation->id));
});

Breadcrumbs::register('violation.edit', function($breadcrumbs, $violation)
{
    $breadcrumbs->parent('violation.index');
    $breadcrumbs->push(trans('violations.edit_violation') . ' ' . $violation->nom_violation, route('violation.edit', $violation->id));
});

/*
 *  Breadcrumbs societe
 */

Breadcrumbs::register('societe.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('societe.Institutions_infractions_commises'), route('societe.index'));
});

Breadcrumbs::register('societe.create', function($breadcrumbs) {
    $breadcrumbs->parent('societe.index');
    $breadcrumbs->push(trans('societe.add_societe'), route('societe.create'));
});

Breadcrumbs::register('societe.edit', function($breadcrumbs, $societe)
{
    $breadcrumbs->parent('societe.index');
    $breadcrumbs->push(trans('societe.edit_societe') . ' ' . $societe->nom_delegation, route('societe.edit', $societe->id));
});


/*
 *  Breadcrumbs dossier
 */

Breadcrumbs::register('dossier.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('dossier.dossiers'), route('dossier.index'));
});

Breadcrumbs::register('dossier.create', function($breadcrumbs, $societe) {
    $breadcrumbs->parent('dossier.index');
    $breadcrumbs->push(trans('dossier.add_dossier'), route('dossier.create', route('dossier.create', $societe->id)));
});

Breadcrumbs::register('dossier.edit', function($breadcrumbs, $dossier)
{
    $breadcrumbs->parent('dossier.index');
    $breadcrumbs->push(trans('dossier.edit_dossier') . ' ' . $dossier->societe->nom_societe, route('dossier.edit', $dossier->societe_id));
});

Breadcrumbs::register('dossier.select', function($breadcrumbs) {
    $breadcrumbs->parent('dossier.index');
    $breadcrumbs->push(trans('dossier.select_societe'), route('dossier.select'));
});
