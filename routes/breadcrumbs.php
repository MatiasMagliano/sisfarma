<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Spatie\Permission\Models\Role;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(__('Home'), route('home'));
});

// Home > Role & permissions management
Breadcrumbs::for('rolemanagement', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Roles & Permissions management'), route('roles.index'));
});

// Home > Role & permissions management > Create
Breadcrumbs::for('createrolemanagement', function (BreadcrumbTrail $trail) {
    $trail->parent('rolemanagement');
    $trail->push(__('Add New Role'), route('roles.create'));
});

// Home > Role & permissions management > Edit
Breadcrumbs::for('editrolemanagement', function (BreadcrumbTrail $trail, Role $role) {
    $trail->parent('rolemanagement');
    $trail->push($role->name, route('roles.edit', $role));
});

// Home > Role & permissions management > Show
Breadcrumbs::for('showrolemanagement', function (BreadcrumbTrail $trail, Role $role) {
    $trail->parent('rolemanagement');
    $trail->push($role->name, route('roles.show', $role));
});

// Home > User profile
Breadcrumbs::for('userprofile', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('User profile'), route('profile.edit'));
});
