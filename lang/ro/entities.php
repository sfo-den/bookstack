<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Creat recent',
    'recently_created_pages' => 'Pagini create recent',
    'recently_updated_pages' => 'Pagini actualizate recent',
    'recently_created_chapters' => 'Capitole create recent',
    'recently_created_books' => 'Cărți create recent',
    'recently_created_shelves' => 'Rafturi create recent',
    'recently_update' => 'Actualizate recent',
    'recently_viewed' => 'Vizualizate recent',
    'recent_activity' => 'Activitate recentă',
    'create_now' => 'Creează unul acum',
    'revisions' => 'Revizii',
    'meta_revision' => 'Revizuirea #:revisionCount',
    'meta_created' => 'Creat :timeLength',
    'meta_created_name' => 'Creat de :timeLength de :user',
    'meta_updated' => 'Actualizat :timeLength',
    'meta_updated_name' => 'Actualizat :timeLength de :user',
    'meta_owned_name' => 'Deținut de :user',
    'meta_reference_page_count' => 'Referenced on :count page|Referenced on :count pages',
    'entity_select' => 'Selectare entitate',
    'entity_select_lack_permission' => 'Nu ai drepturile necesare pentru a selecta acest element',
    'images' => 'Imagini',
    'my_recent_drafts' => 'Ciornele mele recente',
    'my_recently_viewed' => 'Vizualizarea mea recentă',
    'my_most_viewed_favourites' => 'Favoritele mele cele mai vizualizate',
    'my_favourites' => 'Favoritele Mele',
    'no_pages_viewed' => 'Nu ai vizualizat nicio pagină',
    'no_pages_recently_created' => 'Nicio pagină nu a fost creată recent',
    'no_pages_recently_updated' => 'Nicio pagină nu a fost actualizată recent',
    'export' => 'Exportă',
    'export_html' => 'Fișier web inclus',
    'export_pdf' => 'Fișier PDF',
    'export_text' => 'Fișier text simplu',
    'export_md' => 'Fișier Markdown',

    // Permissions and restrictions
    'permissions' => 'Permisiuni',
    'permissions_desc' => 'Set permissions here to override the default permissions provided by user roles.',
    'permissions_book_cascade' => 'Permissions set on books will automatically cascade to child chapters and pages, unless they have their own permissions defined.',
    'permissions_chapter_cascade' => 'Permissions set on chapters will automatically cascade to child pages, unless they have their own permissions defined.',
    'permissions_save' => 'Salvează permisiuni',
    'permissions_owner' => 'Proprietar',
    'permissions_role_everyone_else' => 'Toți ceilalți',
    'permissions_role_everyone_else_desc' => 'Set permissions for all roles not specifically overridden.',
    'permissions_role_override' => 'Override permissions for role',
    'permissions_inherit_defaults' => 'Moștenește valorile implicite',

    // Search
    'search_results' => 'Rezultatele căutării',
    'search_total_results_found' => ':count rezultat găsit|:count rezultate totale găsite',
    'search_clear' => 'Șterge căutarea',
    'search_no_pages' => 'Nicio pagină nu se potrivește cu această căutare',
    'search_for_term' => 'Caută după :term',
    'search_more' => 'Mai multe rezultate',
    'search_advanced' => 'Căutare avansată',
    'search_terms' => 'Termeni de căutare',
    'search_content_type' => 'Tip conținut',
    'search_exact_matches' => 'Potriviri exacte',
    'search_tags' => 'Căutări cu etichete',
    'search_options' => 'Opţiuni',
    'search_viewed_by_me' => 'Vizualizat de mine',
    'search_not_viewed_by_me' => 'Nevizualizate de mine',
    'search_permissions_set' => 'Permisiuni setate',
    'search_created_by_me' => 'Creat de mine',
    'search_updated_by_me' => 'Actualizat de mine',
    'search_owned_by_me' => 'Deținut de mine',
    'search_date_options' => 'Opțiuni dată',
    'search_updated_before' => 'Actualizat înainte de',
    'search_updated_after' => 'Actualizat după',
    'search_created_before' => 'Creat înainte de',
    'search_created_after' => 'Creat după',
    'search_set_date' => 'Setează data',
    'search_update' => 'Actualizează căutarea',

    // Shelves
    'shelf' => 'Raft',
    'shelves' => 'Rafturi',
    'x_shelves' => ':count Raft|:count Rafturi',
    'shelves_empty' => 'Nu a fost creat niciun raft',
    'shelves_create' => 'Creează raft nou',
    'shelves_popular' => 'Rafturi populare',
    'shelves_new' => 'Rafturi noi',
    'shelves_new_action' => 'Raft nou',
    'shelves_popular_empty' => 'Cele mai populare rafturi vor apărea aici.',
    'shelves_new_empty' => 'Cele mai recente rafturi vor apărea aici.',
    'shelves_save' => 'Salvează raft',
    'shelves_books' => 'Cărți pe acest raft',
    'shelves_add_books' => 'Adaugă cărți pe acest raft',
    'shelves_drag_books' => 'Trage cărțile mai jos pentru a le adăuga pe acest raft',
    'shelves_empty_contents' => 'Acest raft nu are cărți atribuite lui',
    'shelves_edit_and_assign' => 'Editare raft pentru a atribui cărți',
    'shelves_edit_named' => 'Editează raft :name',
    'shelves_edit' => 'Editați raftul',
    'shelves_delete' => 'Ștergeți raft',
    'shelves_delete_named' => 'Șterge raftul :name',
    'shelves_delete_explain' => "This will delete the shelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this shelf?',
    'shelves_permissions' => 'Permisiuni raft',
    'shelves_permissions_updated' => 'Permisiunile raftului au fost actualizate',
    'shelves_permissions_active' => 'Shelf Permissions Active',
    'shelves_permissions_cascade_warning' => 'Permissions on shelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_permissions_create' => 'Shelf create permissions are only used for copying permissions to child books using the action below. They do not control the ability to create books.',
    'shelves_copy_permissions_to_books' => 'Copiază permisiunile către cărți',
    'shelves_copy_permissions' => 'Copiază permisiunile',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this shelf to all books contained within. Before activating, ensure any changes to the permissions of this shelf have been saved.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => 'Carte',
    'books' => 'Cărți',
    'x_books' => ':count Carte|:count Cărți',
    'books_empty' => 'Nicio carte nu a fost creată',
    'books_popular' => 'Cărți populare',
    'books_recent' => 'Cărți recente',
    'books_new' => 'Cărți noi',
    'books_new_action' => 'Carte nouă',
    'books_popular_empty' => 'Cele mai populare cărți vor apărea aici.',
    'books_new_empty' => 'Cele mai recente cărți create vor apărea aici.',
    'books_create' => 'Creează o carte nouă',
    'books_delete' => 'Șterge carte',
    'books_delete_named' => 'Șterge cartea :bookName',
    'books_delete_explain' => 'Aceasta operațiune va șterge cartea cu numele \':bookName\'. Toate paginile și capitolele vor fi eliminate.',
    'books_delete_confirmation' => 'Ești sigur că vrei să ștergi această carte?',
    'books_edit' => 'Editează carte',
    'books_edit_named' => 'Editează cartea :bookName',
    'books_form_book_name' => 'Nume carte',
    'books_save' => 'Salvează cartea',
    'books_permissions' => 'Permisiuni carte',
    'books_permissions_updated' => 'Permisiuni carte actualizate',
    'books_empty_contents' => 'Nu au fost create pagini sau capitole pentru această carte.',
    'books_empty_create_page' => 'Creează pagină nouă',
    'books_empty_sort_current_book' => 'Sortează cartea curentă',
    'books_empty_add_chapter' => 'Adaugă un capitol',
    'books_permissions_active' => 'Permisiuni carte active',
    'books_search_this' => 'Caută în această carte',
    'books_navigation' => 'Navigare carte',
    'books_sort' => 'Sortează conținutul cărții',
    'books_sort_desc' => 'Move chapters and pages within a book to reorganise its contents. Other books can be added which allows easy moving of chapters and pages between books.',
    'books_sort_named' => 'Sortează cartea :bookName',
    'books_sort_name' => 'Sortează după nume',
    'books_sort_created' => 'Sortează după data creării',
    'books_sort_updated' => 'Sortează după data actualizării',
    'books_sort_chapters_first' => 'Capitole mai întâi',
    'books_sort_chapters_last' => 'Capitole la final',
    'books_sort_show_other' => 'Arată alte cărți',
    'books_sort_save' => 'Salvează noua ordine',
    'books_sort_show_other_desc' => 'Add other books here to include them in the sort operation, and allow easy cross-book reorganisation.',
    'books_sort_move_up' => 'Mută în sus',
    'books_sort_move_down' => 'Mută în jos',
    'books_sort_move_prev_book' => 'Move to Previous Book',
    'books_sort_move_next_book' => 'Move to Next Book',
    'books_sort_move_prev_chapter' => 'Move Into Previous Chapter',
    'books_sort_move_next_chapter' => 'Move Into Next Chapter',
    'books_sort_move_book_start' => 'Move to Start of Book',
    'books_sort_move_book_end' => 'Move to End of Book',
    'books_sort_move_before_chapter' => 'Move to Before Chapter',
    'books_sort_move_after_chapter' => 'Move to After Chapter',
    'books_copy' => 'Copiază cartea',
    'books_copy_success' => 'Carte copiată cu succes',

    // Chapters
    'chapter' => 'Capitol',
    'chapters' => 'Capitole',
    'x_chapters' => ':count Capitol|:count Capitole',
    'chapters_popular' => 'Capitole populare',
    'chapters_new' => 'Capitol nou',
    'chapters_create' => 'Creează un nou capitol',
    'chapters_delete' => 'Șterge capitol',
    'chapters_delete_named' => 'Şterge capitolul :chapterName',
    'chapters_delete_explain' => 'Se va șterge capitolul cu numele \':chapterName\'. Toate paginile care există în acest capitol vor fi, de asemenea, șterse.',
    'chapters_delete_confirm' => 'Ești sigur că vrei să ștergi acest capitol?',
    'chapters_edit' => 'Editează capitol',
    'chapters_edit_named' => 'Editați capitolul :chapterName',
    'chapters_save' => 'Salvează capitolul',
    'chapters_move' => 'Mută capitolul',
    'chapters_move_named' => 'Mutați capitolul :chapterName',
    'chapters_copy' => 'Copiază capitolul',
    'chapters_copy_success' => 'Capitolul a fost copiat',
    'chapters_permissions' => 'Permisiuni capitol',
    'chapters_empty' => 'În prezent nu există pagini în acest capitol.',
    'chapters_permissions_active' => 'Permisiuni capitol active',
    'chapters_permissions_success' => 'Permisiuni capitol actualizate',
    'chapters_search_this' => 'Caută în acest capitol',
    'chapter_sort_book' => 'Ordonare carte',

    // Pages
    'page' => 'Pagină',
    'pages' => 'Pagini',
    'x_pages' => ':count Pagină|:count Pagini',
    'pages_popular' => 'Pagini populare',
    'pages_new' => 'Pagină nouă',
    'pages_attachments' => 'Atașamente',
    'pages_navigation' => 'Navigație pagină',
    'pages_delete' => 'Șterge pagină',
    'pages_delete_named' => 'Șterge pagina :pageNume',
    'pages_delete_draft_named' => 'Șterge schița paginii :pageNume',
    'pages_delete_draft' => 'Șterge ciorna',
    'pages_delete_success' => 'Pagină ștearsă',
    'pages_delete_draft_success' => 'Pagină ciornă ștearsă',
    'pages_delete_confirm' => 'Ești sigur că dorești să ștergi acestă pagină?',
    'pages_delete_draft_confirm' => 'Ești sigur că vrei să ștergi această pagină schiță?',
    'pages_editing_named' => 'Editare pagină :pageNume',
    'pages_edit_draft_options' => 'Opțiuni ciornă',
    'pages_edit_save_draft' => 'Salvare ciornă',
    'pages_edit_draft' => 'Editare ciornă pagină',
    'pages_editing_draft' => 'Editare ciornă',
    'pages_editing_page' => 'Editare pagină',
    'pages_edit_draft_save_at' => 'Ciornă salvată la ',
    'pages_edit_delete_draft' => 'Șterge ciorna',
    'pages_edit_delete_draft_confirm' => 'Are you sure you want to delete your draft page changes? All of your changes, since the last full save, will be lost and the editor will be updated with the latest page non-draft save state.',
    'pages_edit_discard_draft' => 'Renunță la ciornă',
    'pages_edit_switch_to_markdown' => 'Comută la editorul Markdown',
    'pages_edit_switch_to_markdown_clean' => '(Curăță conținut)',
    'pages_edit_switch_to_markdown_stable' => '(Conținut stabil)',
    'pages_edit_switch_to_wysiwyg' => 'Comută la editorul WYSIWYG',
    'pages_edit_set_changelog' => 'Setare jurnal modificări',
    'pages_edit_enter_changelog_desc' => 'Adaugă o scurtă descriere a modificărilor făcute',
    'pages_edit_enter_changelog' => 'Intră în jurnalul de modificări',
    'pages_editor_switch_title' => 'Schimbă editorul',
    'pages_editor_switch_are_you_sure' => 'Ești sigur că vrei să schimbi editorul pentru această pagină?',
    'pages_editor_switch_consider_following' => 'Ia în considerare următoarele la schimbarea editorilor:',
    'pages_editor_switch_consideration_a' => 'Odată salvată, noua opțiune de editor va fi utilizată de orice editori viitori, inclusiv de cei care nu pot schimba însuși tipul de editor.',
    'pages_editor_switch_consideration_b' => 'Acest lucru poate duce la pierderea detaliilor și a sintaxei în anumite circumstanțe.',
    'pages_editor_switch_consideration_c' => 'Schimbări de etichete sau schimbări de jurnal de modificări, făcute de la ultima salvare, nu vor persista în această schimbare.',
    'pages_save' => 'Salvează pagina',
    'pages_title' => 'Titlu pagină',
    'pages_name' => 'Nume pagină',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Previzualizare',
    'pages_md_insert_image' => 'Inserare imagine',
    'pages_md_insert_link' => 'Inserează link-ul entității',
    'pages_md_insert_drawing' => 'Inserează desen',
    'pages_md_show_preview' => 'Arată previzualizarea',
    'pages_md_sync_scroll' => 'Sync preview scroll',
    'pages_drawing_unsaved' => 'Unsaved Drawing Found',
    'pages_drawing_unsaved_confirm' => 'Unsaved drawing data was found from a previous failed drawing save attempt. Would you like to restore and continue editing this unsaved drawing?',
    'pages_not_in_chapter' => 'Pagina nu este într-un capitol',
    'pages_move' => 'Mută pagina',
    'pages_copy' => 'Copiază pagina',
    'pages_copy_desination' => 'Destinație copiere',
    'pages_copy_success' => 'Pagină copiată cu succes',
    'pages_permissions' => 'Permisiunile paginii',
    'pages_permissions_success' => 'Permisiuni pagină actualizate',
    'pages_revision' => 'Revizuire',
    'pages_revisions' => 'Revizuiri pagină',
    'pages_revisions_desc' => 'Listed below are all the past revisions of this page. You can look back upon, compare, and restore old page versions if permissions allow. The full history of the page may not be fully reflected here since, depending on system configuration, old revisions could be auto-deleted.',
    'pages_revisions_named' => 'Revizuiri pagină pentru :pageName',
    'pages_revision_named' => 'Revizuire pagină pentru :pageName',
    'pages_revision_restored_from' => 'Restaurat de la #:id; :summary',
    'pages_revisions_created_by' => 'Creat de',
    'pages_revisions_date' => 'Data revizuirii',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Revision Number',
    'pages_revisions_numbered' => 'Revizuire #:id',
    'pages_revisions_numbered_changes' => 'Revizuirea #:id Modificări',
    'pages_revisions_editor' => 'Tip editor',
    'pages_revisions_changelog' => 'Jurnal de modificări',
    'pages_revisions_changes' => 'Modificări',
    'pages_revisions_current' => 'Vrsiunea curentă',
    'pages_revisions_preview' => 'Previzualizare',
    'pages_revisions_restore' => 'Restaurare',
    'pages_revisions_none' => 'Această pagină nu are revizuiri',
    'pages_copy_link' => 'Copiază link',
    'pages_edit_content_link' => 'Jump to section in editor',
    'pages_pointer_enter_mode' => 'Enter section select mode',
    'pages_pointer_label' => 'Page Section Options',
    'pages_pointer_permalink' => 'Page Section Permalink',
    'pages_pointer_include_tag' => 'Page Section Include Tag',
    'pages_pointer_toggle_link' => 'Permalink mode, Press to show include tag',
    'pages_pointer_toggle_include' => 'Include tag mode, Press to show permalink',
    'pages_permissions_active' => 'Permisiuni carte active',
    'pages_initial_revision' => 'Publicare inițiala',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => 'Pagină nouă',
    'pages_editing_draft_notification' => 'Momentan editezi o schiță care a fost salvată ultima dată :timeDiff.',
    'pages_draft_edited_notification' => 'Această pagină a fost actualizată de atunci. Este recomandat să aruncați această ciornă.',
    'pages_draft_page_changed_since_creation' => 'Această pagină a fost actualizată de la crearea acestei ciorne. Este recomandat să renunțați la această schiță sau să aveți grijă să nu suprascrieți modificările paginii.',
    'pages_draft_edit_active' => [
        'start_a' => ':count utilizatori au început să editeze această pagină',
        'start_b' => ':userName a început să editeze această pagină',
        'time_a' => 'de când pagina a fost actualizată ultima dată',
        'time_b' => 'în ultimele :minCount minute',
        'message' => ':start :time. Aveți grijă să nu vă suprascrieți reciproc actualizările!',
    ],
    'pages_draft_discarded' => 'Draft discarded! The editor has been updated with the current page content',
    'pages_draft_deleted' => 'Draft deleted! The editor has been updated with the current page content',
    'pages_specific' => 'Pagina specifică',
    'pages_is_template' => 'Şablon pagină',

    // Editor Sidebar
    'page_tags' => 'Etichete pagină',
    'chapter_tags' => 'Etichete capitol',
    'book_tags' => 'Etichete carte',
    'shelf_tags' => 'Etichete raft',
    'tag' => 'Etichetă',
    'tags' =>  'Etichete',
    'tags_index_desc' => 'Tags can be applied to content within the system to apply a flexible form of categorization. Tags can have both a key and value, with the value being optional. Once applied, content can then be queried using the tag name and value.',
    'tag_name' =>  'Nume etichetă',
    'tag_value' => 'Valoare etichetă (opțional)',
    'tags_explain' => "Adăugați unele etichete pentru a clasifica mai bine conținutul. \n Puteți atribui o valoare unei etichete pentru o organizare mai aprofundată.",
    'tags_add' => 'Adaugă o altă etichetă',
    'tags_remove' => 'Elimină această etichetă',
    'tags_usages' => 'Total utilizări etichetă',
    'tags_assigned_pages' => 'Atribuit paginilor',
    'tags_assigned_chapters' => 'Atribuit capitolelor',
    'tags_assigned_books' => 'Atribuit cărților',
    'tags_assigned_shelves' => 'Atribuit rafturilor',
    'tags_x_unique_values' => ':count valori unice',
    'tags_all_values' => 'Toate valorile',
    'tags_view_tags' => 'Vezi etichete',
    'tags_view_existing_tags' => 'Vezi etichetele existente',
    'tags_list_empty_hint' => 'Etichetele pot fi atribuite prin bara laterală a editorului de pagini sau în timpul editării detaliilor unei cărți, capitole sau raft.',
    'attachments' => 'Atașamente',
    'attachments_explain' => 'Încarcă unele fișiere sau atașează unele link-uri pentru a fi afișate pe pagina ta. Acestea sunt vizibile în bara laterală a paginii.',
    'attachments_explain_instant_save' => 'Modificările de aici sunt salvate instant.',
    'attachments_upload' => 'Încarcă fișier',
    'attachments_link' => 'Atașare link',
    'attachments_upload_drop' => 'Alternatively you can drag and drop a file here to upload it as an attachment.',
    'attachments_set_link' => 'Setează link',
    'attachments_delete' => 'Ești sigur că dorești să ștergi acest atașament?',
    'attachments_dropzone' => 'Trageți fișierele aici pentru a le încărca',
    'attachments_no_files' => 'Niciun fișier nu a fost încărcat',
    'attachments_explain_link' => 'Poți atașa un link dacă ai prefera să nu încarci un fișier. Acesta poate fi un link către o altă pagină sau un link către un fișier în cloud.',
    'attachments_link_name' => 'Nume link',
    'attachment_link' => 'Link atașament',
    'attachments_link_url' => 'Link către fișier',
    'attachments_link_url_hint' => 'Url site sau fișier',
    'attach' => 'Atașează',
    'attachments_insert_link' => 'Adăugare link atașament la pagină',
    'attachments_edit_file' => 'Editare fișier',
    'attachments_edit_file_name' => 'Nume fișier',
    'attachments_edit_drop_upload' => 'Trage fișierele aici sau apasă aici pentru a încărca și suprascrie',
    'attachments_order_updated' => 'Ordine atașament actualizată',
    'attachments_updated_success' => 'Detalii atașament actualizate',
    'attachments_deleted' => 'Atașament șters',
    'attachments_file_uploaded' => 'Fișier încărcat cu succes',
    'attachments_file_updated' => 'Fișier actualizat cu succes',
    'attachments_link_attached' => 'Link atașat cu succes la pagină',
    'templates' => 'Șabloane',
    'templates_set_as_template' => 'Pagina este un șablon',
    'templates_explain_set_as_template' => 'Poți seta această pagină ca șablon astfel încât conținutul său să fie utilizat la crearea altor pagini. Alți utilizatori vor putea utiliza acest șablon dacă au permisiuni de vizualizare pentru această pagină.',
    'templates_replace_content' => 'Înlocuiește conținutul paginii',
    'templates_append_content' => 'Adaugă la conținutul paginii',
    'templates_prepend_content' => 'Adaugă la începutul conținutului paginii',

    // Profile View
    'profile_user_for_x' => 'Utilizator pentru :time',
    'profile_created_content' => 'Conținut creat',
    'profile_not_created_pages' => ':userName nu a creat nicio pagină',
    'profile_not_created_chapters' => ':userName nu a creat niciun capitol',
    'profile_not_created_books' => ':userName nu a creat nicio carte',
    'profile_not_created_shelves' => ':userName nu a creat niciun raft',

    // Comments
    'comment' => 'Comentariu',
    'comments' => 'Comentarii',
    'comment_add' => 'Adaugă comentariu',
    'comment_placeholder' => 'Lasă un comentariu aici',
    'comment_count' => '{0} Niciun comentariu|{1} 1 Comentariu [2,*] :count Comentarii',
    'comment_save' => 'Salvează comentariul',
    'comment_new' => 'Comentariu nou',
    'comment_created' => 'comentat :createDiff',
    'comment_updated' => 'Actualizat :updateDiff de :username',
    'comment_updated_indicator' => 'Actualizat',
    'comment_deleted_success' => 'Comentariu șters',
    'comment_created_success' => 'Comentariu adăugat',
    'comment_updated_success' => 'Comentariu actualizat',
    'comment_delete_confirm' => 'Ești sigur că vrei să ștergi acest comentariu?',
    'comment_in_reply_to' => 'Ca răspuns la :commentId',
    'comment_editor_explain' => 'Here are the comments that have been left on this page. Comments can be added & managed when viewing the saved page.',

    // Revision
    'revision_delete_confirm' => 'Ești sigur că vrei să ștergi această revizuire?',
    'revision_restore_confirm' => 'Ești sigur că vei să restaurezi această revizuire? Conținutul paginii curente va fi înlocuit.',
    'revision_cannot_delete_latest' => 'Nu se poate șterge ultima revizuire.',

    // Copy view
    'copy_consider' => 'Te rugăm să ie în considerare cele de mai jos atunci când copiezi conținut.',
    'copy_consider_permissions' => 'Setările de permisiuni personalizate nu vor fi copiate.',
    'copy_consider_owner' => 'Vei deveni proprietarul întregului conținut copiat.',
    'copy_consider_images' => 'Fișierele imagine ale paginii nu vor fi duplicate, iar imaginile originale își vor păstra relația cu pagina în care au fost încărcate inițial.',
    'copy_consider_attachments' => 'Atașamentele paginii nu vor fi copiate.',
    'copy_consider_access' => 'O schimbare a locației, a proprietarului sau a permisiunilor poate duce la accesul acestui conținut pentru cei care nu aveau acces anterior.',

    // Conversions
    'convert_to_shelf' => 'Convertește în raft',
    'convert_to_shelf_contents_desc' => 'Poți converti această carte într-un raft nou cu același conținut. Capitolele cuprinse în această carte vor fi convertite în cărți noi. Dacă această carte conține pagini, care nu sunt într-un capitol, această carte va fi redenumită și conține astfel de pagini, iar această carte va deveni parte a noului raft.',
    'convert_to_shelf_permissions_desc' => 'Orice permisiuni stabilite în această carte vor fi copiate pe noul raft și la toate noile cărți copii care nu au drepturi impuse proprii. Țineți cont că permisiunile de pe rafturi nu se aplică în cascadă pentru conținut cuprins în ele, așa cum se întâmplă pentru cărți.',
    'convert_book' => 'Convertește cartea',
    'convert_book_confirm' => 'Ești sigur că vrei să convertești această carte?',
    'convert_undo_warning' => 'Acest lucru nu poate fi anulat la fel de uşor.',
    'convert_to_book' => 'Convertește în carte',
    'convert_to_book_desc' => 'Poți converti acest capitol într-o nouă carte cu același conținut. Orice permisiuni stabilite pe acest capitol vor fi copiate în noua carte, dar orice permisiuni moștenite, din cartea părinte nu vor fi copiate, ceea ce ar putea duce la o schimbare a controlului de acces.',
    'convert_chapter' => 'Convertește capitolul',
    'convert_chapter_confirm' => 'Ești sigur că dorești să convertești acest capitol?',

    // References
    'references' => 'Referințe',
    'references_none' => 'There are no tracked references to this item.',
    'references_to_desc' => 'Shown below are all the known pages in the system that link to this item.',

    // Watch Options
    'watch' => 'Watch',
    'watch_title_default' => 'Default Preferences',
    'watch_desc_default' => 'Revert watching to just your default notification preferences.',
    'watch_title_ignore' => 'Ignore',
    'watch_desc_ignore' => 'Ignore all notifications, including those from user-level preferences.',
    'watch_title_new' => 'New Pages',
    'watch_desc_new' => 'Notify when any new page is created within this item.',
    'watch_title_updates' => 'All Page Updates',
    'watch_desc_updates' => 'Notify upon all new pages and page changes.',
    'watch_desc_updates_page' => 'Notify upon all page changes.',
    'watch_title_comments' => 'All Page Updates & Comments',
    'watch_desc_comments' => 'Notify upon all new pages, page changes and new comments.',
    'watch_desc_comments_page' => 'Notify upon page changes and new comments.',
    'watch_change_default' => 'Change default notification preferences',
    'watch_detail_ignore' => 'Ignoring notifications',
    'watch_detail_new' => 'Watching for new pages',
    'watch_detail_updates' => 'Watching new pages and updates',
    'watch_detail_comments' => 'Watching new pages, updates & comments',
    'watch_detail_parent_book' => 'Watching via parent book',
    'watch_detail_parent_book_ignore' => 'Ignoring via parent book',
    'watch_detail_parent_chapter' => 'Watching via parent chapter',
    'watch_detail_parent_chapter_ignore' => 'Ignoring via parent chapter',
];
