<?php

return [

    /**
     * Error text strings.
     */

    // Permissions
    'permission' => 'Ud. no tiene permisos para visualizar la p�gina solicitada.',
    'permissionJson' => 'Ud. no tiene permisos para ejecutar la acci�n solicitada.',

    // Auth
    'error_user_exists_different_creds' => 'Un usuario con el email :email ya existe pero con credenciales diferentes.',
    'email_already_confirmed' => 'El email ya ha sido confirmado, Intente loguearse en la aplicaci�n.',
    'email_confirmation_invalid' => 'Este token de confirmación no e válido o ya ha sido usado,Intente registrar uno nuevamente.',
    'email_confirmation_expired' => 'El token de confirmaci�n ha expirado, Un nuevo email de confirmaci�n ha sido enviado.',
    'ldap_fail_anonymous' => 'El acceso con LDAP ha fallado usando binding an�nimo',
    'ldap_fail_authed' => 'El acceso LDAP usando el dn & password detallados',
    'ldap_extension_not_installed' => 'La extensi�n LDAP PHP no se encuentra instalada',
    'ldap_cannot_connect' => 'No se puede conectar con el servidor ldap, la conexi�n inicial ha fallado',
    'social_no_action_defined' => 'Acci�n no definida',
    'social_account_in_use' => 'la cuenta :socialAccount ya se encuentra en uso, intente loguearse a trav�s de la opci�n :socialAccount .',
    'social_account_email_in_use' => 'El email :email ya se encuentra en uso. Si ud. ya dispone de una cuenta puede loguearse a trav�s de su cuenta :socialAccount desde la configuraci�n de perfil.',
    'social_account_existing' => 'La cuenta :socialAccount ya se encuentra asignada a su perfil.',
    'social_account_already_used_existing' => 'La cuenta :socialAccount ya se encuentra usada por otro usuario.',
    'social_account_not_used' => 'La cuenta :socialAccount no est� asociada a ning�n usuario. Por favor adjuntela a su configuraci�n de perfil. ',
    'social_account_register_instructions' => 'Si no dispone de una cuenta, puede registrar una cuenta usando la opción de :socialAccount .',
    'social_driver_not_found' => 'Driver social no encontrado',
    'social_driver_not_configured' => 'Su configuraci�n :socialAccount no es correcta.',

    // System
    'path_not_writable' => 'La ruta :filePath no pudo ser cargada. Asegurese de que es escribible por el servidor.',
    'cannot_get_image_from_url' => 'No se puede obtener la imagen desde :url',
    'cannot_create_thumbs' => 'El servidor no puede crear la imagen miniatura. Por favor chequee que tiene la extensi�n GD instalada.',
    'server_upload_limit' => 'El servidor no permite la subida de ficheros de este tama�o. Por favor intente con un fichero de menor tama�o.',
    'image_upload_error' => 'Ha ocurrido un error al subir la imagen',

    // Attachments
    'attachment_page_mismatch' => 'P�gina no coincidente durante la subida del adjunto ',

    // Pages
    'page_draft_autosave_fail' => 'Fallo al guardar borrador. Asegurese de que tiene conexi�n a Internet antes de guardar este borrador',

    // Entities
    'entity_not_found' => 'Entidad no encontrada',
    'book_not_found' => 'Libro no encontrado',
    'page_not_found' => 'P�gina no encontrada',
    'chapter_not_found' => 'Cap�tulo no encontrado',
    'selected_book_not_found' => 'El libro seleccionado no fue encontrado',
    'selected_book_chapter_not_found' => 'El libro o cap�tulo seleccionado no fue encontrado',
    'guests_cannot_save_drafts' => 'Los invitados no pueden guardar los borradores',

    // Users
    'users_cannot_delete_only_admin' => 'No se puede borrar el �nico administrador',
    'users_cannot_delete_guest' => 'No se puede borrar el usuario invitado',

    // Roles
    'role_cannot_be_edited' => 'Este rol no puede ser editado',
    'role_system_cannot_be_deleted' => 'Este rol es un rol de sistema y no puede ser borrado',
    'role_registration_default_cannot_delete' => 'Este rol no puede ser borrado mientras sea el rol por defecto de registro',

    // Error pages
    '404_page_not_found' => 'P�gina no encontrada',
    'sorry_page_not_found' => 'Lo sentimos, la p�gina que intenta acceder no pudo ser encontrada.',
    'return_home' => 'Volver al home',
    'error_occurred' => 'Ha ocurrido un error',
    'app_down' => 'La aplicaci�n :appName se encuentra caída en este momento',
    'back_soon' => 'Volver� a estar operativa en corto tiempo.',
];
