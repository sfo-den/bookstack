<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Creado recientemente',
    'recently_created_pages' => 'Páginas creadas recientemente',
    'recently_updated_pages' => 'Páginas actualizadas recientemente',
    'recently_created_chapters' => 'Capítulos creados recientemente',
    'recently_created_books' => 'Libros creados recientemente',
    'recently_created_shelves' => 'Estantes creados recientemente',
    'recently_update' => 'Actaulizado recientemente',
    'recently_viewed' => 'Visto recientemente',
    'recent_activity' => 'Actividad reciente',
    'create_now' => 'Crear uno ahora',
    'revisions' => 'Revisiones',
    'meta_revision' => 'Revisión #:revisionCount',
    'meta_created' => 'Creado el :timeLength',
    'meta_created_name' => 'Creado el  :timeLength por :user',
    'meta_updated' => 'Actualizado el :timeLength',
    'meta_updated_name' => 'Actualizado el :timeLength por :user',
    'meta_owned_name' => 'Propiedad de :user',
    'entity_select' => 'Seleccione entidad',
    'images' => 'Imágenes',
    'my_recent_drafts' => 'Mis borradores recientes',
    'my_recently_viewed' => 'Mis visualizaciones recientes',
    'no_pages_viewed' => 'Ud. no ha visto ninguna página',
    'no_pages_recently_created' => 'Ninguna página ha sido creada recientemente',
    'no_pages_recently_updated' => 'Ninguna página ha sido actualizada recientemente',
    'export' => 'Exportar',
    'export_html' => 'Archivo web contenido',
    'export_pdf' => 'Archivo PDF',
    'export_text' => 'Archivo de texto plano',

    // Permissions and restrictions
    'permissions' => 'Permisos',
    'permissions_intro' => 'una vez habilitado, Estos permisos tendrán prioridad por encima de cualquier permiso establecido.',
    'permissions_enable' => 'Habilitar permisos custom',
    'permissions_save' => 'Guardar permisos',
    'permissions_owner' => 'Propietario',

    // Search
    'search_results' => 'Buscar resultados',
    'search_total_results_found' => ':count resultados encontrados|:count total de resultados encontrados',
    'search_clear' => 'Limpiar resultados',
    'search_no_pages' => 'Ninguna página encontrada para la búsqueda',
    'search_for_term' => 'Busqueda por :term',
    'search_more' => 'Más resultados',
    'search_advanced' => 'Búsqueda Avanzada',
    'search_terms' => 'Términos de búsqueda',
    'search_content_type' => 'Tipo de contenido',
    'search_exact_matches' => 'Coincidencias exactas',
    'search_tags' => 'Búsquedas de etiquetas',
    'search_options' => 'Opciones',
    'search_viewed_by_me' => 'Vistos por mí',
    'search_not_viewed_by_me' => 'No vistos por mí',
    'search_permissions_set' => 'Permisos establecidos',
    'search_created_by_me' => 'Creado por mí',
    'search_updated_by_me' => 'Actualizado por mí',
    'search_owned_by_me' => 'Owned by me',
    'search_date_options' => 'Opciones de fecha',
    'search_updated_before' => 'Actualizado antes de',
    'search_updated_after' => 'Actualizado después de',
    'search_created_before' => 'Creado antes de',
    'search_created_after' => 'Creado después de',
    'search_set_date' => 'Esablecer fecha',
    'search_update' => 'Actualizar búsqueda',

    // Shelves
    'shelf' => 'Estante',
    'shelves' => 'Estantes',
    'x_shelves' => ':count Estante|:count Estantes',
    'shelves_long' => 'Estantes de libros',
    'shelves_empty' => 'No se crearon estantes',
    'shelves_create' => 'Crear un estante nuevo',
    'shelves_popular' => 'Estantes Populares',
    'shelves_new' => 'Estantes Nuevos',
    'shelves_new_action' => 'Estante Nuevo',
    'shelves_popular_empty' => 'Los estantes más populares aparecerán aquí.',
    'shelves_new_empty' => 'Los estantes mas nuevos aparecerán aquí.',
    'shelves_save' => 'Guardar estantes',
    'shelves_books' => 'Libros en este estante',
    'shelves_add_books' => 'Agregar libros en este estante',
    'shelves_drag_books' => 'Arrastre los libros aquí para agregarlos a este estante',
    'shelves_empty_contents' => 'Este estante no tiene libros asignados a él',
    'shelves_edit_and_assign' => 'Editar el estante para asignar libros',
    'shelves_edit_named' => 'Editar Estante :name',
    'shelves_edit' => 'Editar Estante',
    'shelves_delete' => 'Eliminar Estante',
    'shelves_delete_named' => 'Eliminar Estante :name',
    'shelves_delete_explain' => "Esta acción eliminará el estante con el nombre ':name'. Los libros contenidos en él no se eliminarán.",
    'shelves_delete_confirmation' => '¿Está seguro que quiere eliminar este estante?',
    'shelves_permissions' => 'Permisos del Estante',
    'shelves_permissions_updated' => 'Permisos del Estante actualizados',
    'shelves_permissions_active' => 'Permisos Activos del Estante',
    'shelves_copy_permissions_to_books' => 'Copiar Permisos a los Libros',
    'shelves_copy_permissions' => 'Copiar Permisos',
    'shelves_copy_permissions_explain' => 'Esta acción aplicará los permisos de este estante a todos los libros contenidos en él. Antes de activarlos, asegúrese que los cambios a los permisos de este estante estén guardados.',
    'shelves_copy_permission_success' => 'Se copiaron los permisos del estante a :count libros',

    // Books
    'book' => 'Libro',
    'books' => 'Libros',
    'x_books' => ':count Libro|:count Libros',
    'books_empty' => 'No hay libros creados',
    'books_popular' => 'Libros populares',
    'books_recent' => 'Libros recientes',
    'books_new' => 'Libros nuevos',
    'books_new_action' => 'Libro nuevo',
    'books_popular_empty' => 'Los libros más populares aparecerán aquí.',
    'books_new_empty' => 'Los libros creados más recientemente aparecerán aquí.',
    'books_create' => 'Crear nuevo libro',
    'books_delete' => 'Borrar libro',
    'books_delete_named' => 'Borrar libro :bookName',
    'books_delete_explain' => 'Esto borrará el libro con el nombre \':bookName\', Todas las páginas y capítulos serán removidos.',
    'books_delete_confirmation' => '¿Está seguro de que desea borrar este libro?',
    'books_edit' => 'Editar Libro',
    'books_edit_named' => 'Editar Libro :bookName',
    'books_form_book_name' => 'Nombre de libro',
    'books_save' => 'Guardar libro',
    'books_permissions' => 'permisos de libro',
    'books_permissions_updated' => 'Permisos de libro actualizados',
    'books_empty_contents' => 'Ninguna página o capítulo ha sido creada para este libro.',
    'books_empty_create_page' => 'Crear una nueva página',
    'books_empty_sort_current_book' => 'Organizar el libro actual',
    'books_empty_add_chapter' => 'Agregar un capítulo',
    'books_permissions_active' => 'Permisos de libro activados',
    'books_search_this' => 'Buscar en este libro',
    'books_navigation' => 'Navegación de libro',
    'books_sort' => 'Organizar contenido de libro',
    'books_sort_named' => 'Organizar libro :bookName',
    'books_sort_name' => 'Organizar por nombre',
    'books_sort_created' => 'Organizar por fecha de creación',
    'books_sort_updated' => 'Organizar por fecha de actualización',
    'books_sort_chapters_first' => 'Capítulos primero',
    'books_sort_chapters_last' => 'Capítulos al final',
    'books_sort_show_other' => 'Mostrar otros libros',
    'books_sort_save' => 'Guardar nuevo orden',

    // Chapters
    'chapter' => 'Capítulo',
    'chapters' => 'Capítulos',
    'x_chapters' => ':count Capítulo|:count Capítulos',
    'chapters_popular' => 'Capítulos populares',
    'chapters_new' => 'Nuevo capítulo',
    'chapters_create' => 'Crear nuevo capítulo',
    'chapters_delete' => 'Borrar capítulo',
    'chapters_delete_named' => 'Borrar capítulo :chapterName',
    'chapters_delete_explain' => 'Esta acción eliminará el capítulo con el nombre \':chapterName\'. Todas las páginas que existen dentro del capítulo también se eliminarán.',
    'chapters_delete_confirm' => '¿Está seguro de borrar este capítulo?',
    'chapters_edit' => 'Editar capítulo',
    'chapters_edit_named' => 'Editar capítulo :chapterName',
    'chapters_save' => 'Guardar capítulo',
    'chapters_move' => 'Mover capítulo',
    'chapters_move_named' => 'Mover Capítulo :chapterName',
    'chapter_move_success' => 'Capítulo movido a :bookName',
    'chapters_permissions' => 'Permisos de capítulo',
    'chapters_empty' => 'No existen páginas en este capítulo.',
    'chapters_permissions_active' => 'Permisos de capítulo activado',
    'chapters_permissions_success' => 'Permisos de capítulo actualizados',
    'chapters_search_this' => 'Buscar en este capítulo',

    // Pages
    'page' => 'Página',
    'pages' => 'Páginas',
    'x_pages' => ':count Página|:count Páginas',
    'pages_popular' => 'Páginas populares',
    'pages_new' => 'Nueva página',
    'pages_attachments' => 'Adjuntos',
    'pages_navigation' => 'Navegación de página',
    'pages_delete' => 'Borrar página',
    'pages_delete_named' => 'Borrar página :pageName',
    'pages_delete_draft_named' => 'Borrar borrador de página :pageName',
    'pages_delete_draft' => 'Borrar borrador de página',
    'pages_delete_success' => 'Página borrada',
    'pages_delete_draft_success' => 'Borrador de página borrado',
    'pages_delete_confirm' => '¿Está seguro de borrar esta página?',
    'pages_delete_draft_confirm' => 'Está seguro de que desea borrar este borrador de página?',
    'pages_editing_named' => 'Editando página :pageName',
    'pages_edit_draft_options' => 'Opciones de borrador',
    'pages_edit_save_draft' => 'Guardar borrador',
    'pages_edit_draft' => 'Editar borrador de página',
    'pages_editing_draft' => 'Editando borrador',
    'pages_editing_page' => 'Editando página',
    'pages_edit_draft_save_at' => 'Borrador guardado el ',
    'pages_edit_delete_draft' => 'Borrar borrador',
    'pages_edit_discard_draft' => 'Descartar borrador',
    'pages_edit_set_changelog' => 'Establecer cambios de registro',
    'pages_edit_enter_changelog_desc' => 'Introduzca una breve descripción de los cambios que ha realizado',
    'pages_edit_enter_changelog' => 'Entrar en cambio de registro',
    'pages_save' => 'Guardar página',
    'pages_title' => 'Título de página',
    'pages_name' => 'Nombre de página',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Previsualizar',
    'pages_md_insert_image' => 'Insertar Imagen',
    'pages_md_insert_link' => 'Insertar link de entidad',
    'pages_md_insert_drawing' => 'Insertar Dibujo',
    'pages_not_in_chapter' => 'La página no esá en el capítulo',
    'pages_move' => 'Mover página',
    'pages_move_success' => 'Página movida a ":parentName"',
    'pages_copy' => 'Copiar página',
    'pages_copy_desination' => 'Destino de la copia',
    'pages_copy_success' => 'Página copiada con éxito',
    'pages_permissions' => 'Permisos de página',
    'pages_permissions_success' => 'Permisos de página actualizados',
    'pages_revision' => 'Revisión',
    'pages_revisions' => 'Revisiones de página',
    'pages_revisions_named' => 'Revisiones de página para :pageName',
    'pages_revision_named' => 'Revisión de ágina para :pageName',
    'pages_revision_restored_from' => 'Restaurado desde #:id; :summary',
    'pages_revisions_created_by' => 'Creado por',
    'pages_revisions_date' => 'Fecha de revisión',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revisión #:id',
    'pages_revisions_numbered_changes' => 'Cambios de Revisión #:id',
    'pages_revisions_changelog' => 'Registro de cambios',
    'pages_revisions_changes' => 'Cambios',
    'pages_revisions_current' => 'Versión actual',
    'pages_revisions_preview' => 'Previsualizar',
    'pages_revisions_restore' => 'Restaurar',
    'pages_revisions_none' => 'Esta página no tiene revisiones',
    'pages_copy_link' => 'Copiar enlace',
    'pages_edit_content_link' => 'Contenido editado',
    'pages_permissions_active' => 'Permisos de página activos',
    'pages_initial_revision' => 'Publicación inicial',
    'pages_initial_name' => 'Página nueva',
    'pages_editing_draft_notification' => 'Usted está actualmente editando un borrador que fue guardado por última vez el :timeDiff.',
    'pages_draft_edited_notification' => 'Esta página ha sido actualizada desde aquel momento. Se recomienda que cancele este borrador.',
    'pages_draft_edit_active' => [
        'start_a' => ':count usuarios han comenzado a editar esta página',
        'start_b' => ':userName ha comenzado a editar esta página',
        'time_a' => 'desde que las página fue actualizada',
        'time_b' => 'en los últimos :minCount minutos',
        'message' => ':start :time. Ten cuidado de no sobreescribir los cambios del otro usuario',
    ],
    'pages_draft_discarded' => 'Borrador descartado, el editor ha sido actualizado con el contenido de la página actual',
    'pages_specific' => 'Página Específica',
    'pages_is_template' => 'Plantilla de Página',

    // Editor Sidebar
    'page_tags' => 'Etiquetas de página',
    'chapter_tags' => 'Etiquetas de capítulo',
    'book_tags' => 'Etiquetas de libro',
    'shelf_tags' => 'Etiquetas de Estante',
    'tag' => 'Etiqueta',
    'tags' =>  'Etiquetas',
    'tag_name' =>  'Nombre de etiqueta',
    'tag_value' => 'Valor de la etiqueta (Opcional)',
    'tags_explain' => "Agregar algunas etiquetas para mejorar la categorización de su contenido. \n Se puede asignar un valor a una etiqueta para una organizacón con mayor detalle.",
    'tags_add' => 'Agregar otra etiqueta',
    'tags_remove' => 'Eliminar esta etiqueta',
    'attachments' => 'Adjuntos',
    'attachments_explain' => 'Subir archivos o agregar enlaces para mostrar en la página. Estos son visibles en la barra lateral de la página.',
    'attachments_explain_instant_save' => 'Los cambios se guardan de manera instantánea.',
    'attachments_items' => 'Elementos adjuntados',
    'attachments_upload' => 'Archivo adjuntado',
    'attachments_link' => 'Adjuntar enlace',
    'attachments_set_link' => 'Establecer enlace',
    'attachments_delete' => '¿Está seguro que desea eliminar el archivo adjunto?',
    'attachments_dropzone' => 'Arrastre archivos aquí o presione aquí para adjuntar un archivo',
    'attachments_no_files' => 'No se adjuntó ningún archivo',
    'attachments_explain_link' => 'Usted puede agregar un enlace o si lo prefiere puede agregar un archivo. Esto puede ser un enlace a otra página o un enlace a un archivo en la nube.',
    'attachments_link_name' => 'Nombre del enlace',
    'attachment_link' => 'Enlace adjunto',
    'attachments_link_url' => 'Enlace a archivo',
    'attachments_link_url_hint' => 'URL del sitio o archivo',
    'attach' => 'Adjuntar',
    'attachments_insert_link' => 'Agregar el Enlace del adjunto a la Página',
    'attachments_edit_file' => 'Editar archivo',
    'attachments_edit_file_name' => 'Nombre del archivo',
    'attachments_edit_drop_upload' => 'Arrastre los archivos o presione aquí para subir o sobreescribir',
    'attachments_order_updated' => 'Orden de adjuntos actualizado',
    'attachments_updated_success' => 'Detalles de adjuntos actualizados',
    'attachments_deleted' => 'Adjunto borrado',
    'attachments_file_uploaded' => 'Archivo subido exitosamente',
    'attachments_file_updated' => 'Archivo actualizado exitosamente',
    'attachments_link_attached' => 'Enlace agregado exitosamente a la página',
    'templates' => 'Plantillas',
    'templates_set_as_template' => 'La Página es una plantilla',
    'templates_explain_set_as_template' => 'Puede establecer esta página como plantilla para que el contenido pueda utilizarse para al crear otras páginas. Otris usuarios podrán utilizar esta plantilla si tienen permisos para ver de esta página.',
    'templates_replace_content' => 'Reemplazar el contenido de la página',
    'templates_append_content' => 'Incorporar al fina del contenido de la página',
    'templates_prepend_content' => 'Incorporar al principio del contenido de la página',

    // Profile View
    'profile_user_for_x' => 'Usuario para :time',
    'profile_created_content' => 'Contenido creado',
    'profile_not_created_pages' => ':userName no ha creado páginas',
    'profile_not_created_chapters' => ':userName no ha creado capítulos',
    'profile_not_created_books' => ':userName no ha creado libros',
    'profile_not_created_shelves' => ':userName no ha creado estantes',

    // Comments
    'comment' => 'Comentario',
    'comments' => 'Comentarios',
    'comment_add' => 'Agregar comentario',
    'comment_placeholder' => 'DEjar un comentario aquí',
    'comment_count' => '{0} Sin Comentarios|{1} 1 Comentario|[2,*] :count Comentarios',
    'comment_save' => 'Guardar comentario',
    'comment_saving' => 'Guardando comentario...',
    'comment_deleting' => 'Borrando comentario...',
    'comment_new' => 'Nuevo comentario',
    'comment_created' => 'comentado :createDiff',
    'comment_updated' => 'Actualizado :updateDiff por :username',
    'comment_deleted_success' => 'Comentario borrado',
    'comment_created_success' => 'Comentario agregado',
    'comment_updated_success' => 'Comentario actualizado',
    'comment_delete_confirm' => '¿Está seguro que quiere borrar este comentario?',
    'comment_in_reply_to' => 'En respuesta a :commentId',

    // Revision
    'revision_delete_confirm' => '¿Está seguro de que quiere eliminar esta revisión?',
    'revision_restore_confirm' => '¿Está seguro de que quiere restaurar esta revisión? Se reemplazará el contenido de la página actual.',
    'revision_delete_success' => 'Revisión eliminada',
    'revision_cannot_delete_latest' => 'No se puede eliminar la última revisión.'
];
