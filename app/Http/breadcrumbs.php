<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push(trans('main.dashboard'), route('home'));
});

// My profile
Breadcrumbs::register('myprofile', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('main.mypofile'), route('myprofile'));
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



