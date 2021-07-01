<?php

namespace Foostart\Filemanager\Handlers;

class ConfigHandler
{
    public function userField()
    {
        
       //original
        //return auth()->user()->id;
        $auth = \App::make('authenticator');
        $user = $auth->getLoggedUser();
        if (empty($user)) {
            return NULL;
        }
        return $user->id;
        
}
