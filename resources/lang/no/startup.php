<?php

return [

    /*
    |-----------------------------------------------------
    | This is the translation file for StartUp 5.3
    |-----------------------------------------------------
    |
    | The following language lines are used is StartUp 5.3
    |
    */

    /* General */
    'password'              => 'Passord',
    'password_current'      => 'Nåværende passord',
    'password_new'          => 'Nytt passord',
    'password_confirm'      => 'Bekreft passord',
    'password_confirm_new'  => 'Bekreft nytt passord',
    'email'                 => 'E-post adresse',
    'name'                  => 'Navn',
    'update'                => 'Oppdater',
    'created'               => 'Opprettet',
    'yes'                   => 'Ja',
    'no'                    => 'Nei',
    'name'                  => 'Navn',
    'activated'             => 'Aktivert',
    'status'                => 'Status',
    'role'                  => 'Rolle',
    'roles'                 => 'Roller',
    'online'                => 'Påkoblet',
    'offline'               => 'Frakoblet',
    'close'                 => 'Lukk',
    'delete'                => 'Slett',
    'id'                    => 'Id',
    'cancel'                => 'Avbryt',
    'permission'            => 'Rettighet',
    'permissions'           => 'Rettigheter',
    'type'                  => 'Type',
    'date'                  => 'Dato',
    'size'                  => 'Størrelse',
    'action'                => 'Handling',
    'folder'                => 'Mappe',
    'time'                  => 'Tid',

    /* Notifications */
    'notifications' => [
        'login' => [
            'welcome'                   => 'Velkommen, :user. Du har logget inn',
            'logout'                    => 'Du har blitt logget ut, hade bra!',
        ],
        'register' => [
            'confirm_account'           => 'Du må bekrefte din konto. Vi har sendt deg en aktiveringskode. Sjekk din epost',
            'activation_code'           => 'Vi har sendt deg en aktiveringskode. Sjekk din epost',
        ],
        'profile' => [
            'contact_info'              => 'Kontaktinformasjon ble vellykket oppdatert',
            'password_update'           => 'Passord ble vellykket oppdatert',
            'profile_photo'             => 'Profilbildet ble vellykkt oppdatert',
        ],
    ],

    /* Languages */
    'norwegian'     => 'Norsk',
    'english'       => 'Engelsk',

    /* Pages */
    'pages' => [
        'home' => [
            'title'                     => 'Hjem',
            'dashboard'                 => 'Dashboard',
            'welcome'                   => 'Du er logget inn, velkommen!',
            'read_role_user'            => 'Om du kan lese dette, da har du bruker rollen',
            'read_role_moderator'       => 'Om du kan lese dette, da har du moderator rollen',
            'read_role_administrator'   => 'Om du kan lese dette, da har du administrator rollen',
        ],
        'profile' => [
            'title'                 => 'Min Profil',
            'profile_photo'         => 'Profilbilde',
            'contact_info'          => 'Kontaktinformasjon',
            'browse'                => 'Velg',
            'change_photo'          => 'Endre bilde',
        ],
        'admin_dashboard' => [
            'title'                 => 'Dashboard',
            'welcome'               => 'Du ser nå på admin seksjonen!',
        ],
        'admin_users' => [
            'title'                 => 'Brukere',
            'status_text'           => 'Status indikerer en bruker som har vært påkoblet/frakoblet de siste 5 minuttene.',
            'profile_photo'         => 'Profilbilde',
            'create_user'           => 'Opprett bruker',
            'edit_user'             => 'Rediger bruker',
            'delete_user'           => 'Slett bruker',
            'delete_confirm'        => 'Er du sikker på du vil slette denne brukeren?',
        ],
        'admin_permissions' => [
            'title'                 => 'Rettigheter',
            'create_permissions'    => 'Opprett rettighet',
            'edit_permission'       => 'Rediger rettighet',
            'delete_permission'     => 'Slett rettighet',
            'delete_confirm'        => 'Er du sikker på du vil slette denne rettigheten?',
        ],
        'admin_roles' => [
            'title'                 => 'Roller',
            'create_role'           => 'Opprett rolle',
            'edit_role'             => 'Rediger rolle',
            'delete_role'           => 'Slett rolle',
            'delete_confirm'        => 'Er du sikker på du vil slette denne rollen?',
        ],
        'admin_uploads' => [
            'title'                 => 'Filer',
            'new_folder'            => 'Ny mappe',
            'upload'                => 'Last opp',
            'upload_new'            => 'Last opp ny fil',
            'file'                  => 'Fil',
            'optional'              => 'Valgfritt filnavn',
            'upload_file'           => 'Last opp fil',
            'create_folder'         => 'Opprett mappe',
            'create_new_folder'     => 'Opprett ny mappe',
            'folder_name'           => 'Mappenavn',
            'uploads_message'       => 'Alle filene vil bli lagret under <code>public/uploads</code> mappen',
            'delete_file_confirm'   => 'Vennligst bekreft',
            'delete_message'        => 'Er du sikker på du vil slette',
            'file?'                 => 'filen?',
            'folder'                => 'mappen?',
            'delete_file'           => 'Slett filen',
            'delete_folder'         => 'Slett mappen',
            'image_prew'            => 'Forhåndsvisning',
        ],
        'admin_settings' => [
            'settings'              => 'Innstillinger',
            'global'                => 'Global',
            'title'                 => 'Tittel',
            'url'                   => 'URL',
            'timezone'              => 'Tidssone',
            'settings_text'         => 'Disse innstillingene er hentet fra <code>config\app.php</code>',
        ],
        'admin_activity' => [
            'activity'              => 'Aktivitet',
            'who'                   => 'Hvem',
            'activity_log'          => 'Aktivitetslogg',
        ],
        'admin_backup' => [
            'backup'                => 'Backup',
            'backupfiles'           => 'Backupfiler',
            'take_backup'           => 'Ta backup',
            'message'               => 'Alle filer blir lagret i <code>public/backups</code> mappen. Dette er ikke den mest skikre plassen å lagre backups. Endre dette til S3 eller annen mappe.',
        ],
    ],

    /* NAV */
    'nav' => [
        'front' => [
            'home'          => 'Hjem',
            'login'         => 'Logg inn',
            'register'      => 'Registrer',
            'language'      => 'Språk',
            'profile'       => 'Min profil',
            'admin'         => 'Admin',
            'logout'        => 'Logg ut',
        ],
        'back' => [
            'administration'    => 'Administrasjon',
            'dashboard'         => 'Dashboard',
            'users'             => 'Brukere',
            'roles'             => 'Roller',
            'permissions'       => 'Rettigheter',
            'uploads'           => 'Filer',
            'settings'          => 'Innstillinger',
            'global'            => 'Global',
            'activity'          => 'Aktivitet',
            'backup'            => 'Backup',
        ],
        'profile' => [
            'profile'          => 'Min profil',
            'security'         => 'Sikkerhet',
            'settings'         => 'Innstillinger',
        ],
    ],

    /* Login page */
    'auth' => [
        'login' => [
            'remember_me'       => 'Husk meg',
            'login'             => 'Logg inn',
            'forgot_password'   => 'Glemt ditt passord?',
        ],

        /* Register page */
        'register' => [
            'register'          => 'Registrer',
        ],

        /* Password reset page */
        'password_reset' => [
            'reset'          => 'Tilbakestill passord',
            'send_password'  => 'Send nytt passord',
        ],
    ],

    /* Footer */
    'built_with'    => 'Laget med',
    'and'           => 'og',
    'version'       => 'Versjon',
];
