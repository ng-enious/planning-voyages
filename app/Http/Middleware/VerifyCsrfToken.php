<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/register','/login','logout','/ajoutertrajet','/ajoutermoyendetransport','/ajouterlieu',
      '/suggerertrajet','/suggerermoyendetransport','/suggererlieu','/planifier','/test123','get_trajet','/donneavis','enregistreavis','/ajoutermoyen',
      '/ajoutertrajetuser','/ajoutertrajetadmin','/get_trajetadmin' ,'/ajoutermoyenuser'
    ];
}
