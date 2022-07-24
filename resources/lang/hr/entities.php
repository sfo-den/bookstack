<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Nedavno stvoreno',
    'recently_created_pages' => 'Nedavno stvorene stranice',
    'recently_updated_pages' => 'Nedavno ažurirane stranice',
    'recently_created_chapters' => 'Nedavno stvorena poglavlja',
    'recently_created_books' => 'Nedavno stvorene knjige',
    'recently_created_shelves' => 'Nedavno stvorene police',
    'recently_update' => 'Nedavno ažurirano',
    'recently_viewed' => 'Nedavno viđeno',
    'recent_activity' => 'Nedavna aktivnost',
    'create_now' => 'Stvori sada',
    'revisions' => 'Revizije',
    'meta_revision' => 'Revizija #:revisionCount',
    'meta_created' => 'Stvoreno :timeLength',
    'meta_created_name' => 'Stvoreno :timeLength od :user',
    'meta_updated' => 'Ažurirano :timeLength',
    'meta_updated_name' => 'Ažurirano :timeLength od :user',
    'meta_owned_name' => 'Vlasništvo :user',
    'entity_select' => 'Odaberi subjekt',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'Slike',
    'my_recent_drafts' => 'Nedavne skice',
    'my_recently_viewed' => 'Nedavno viđeno',
    'my_most_viewed_favourites' => 'My Most Viewed Favourites',
    'my_favourites' => 'My Favourites',
    'no_pages_viewed' => 'Niste pogledali nijednu stranicu',
    'no_pages_recently_created' => 'Nema nedavno stvorenih stranica',
    'no_pages_recently_updated' => 'Nema nedavno ažuriranih stranica',
    'export' => 'Izvoz',
    'export_html' => 'Web File',
    'export_pdf' => 'PDF File',
    'export_text' => 'Text File',
    'export_md' => 'Markdown File',

    // Permissions and restrictions
    'permissions' => 'Dopuštenja',
    'permissions_intro' => 'Jednom postavljene, ove dozvole bit će prioritetne ostalim dopuštenjima.',
    'permissions_enable' => 'Omogući dopuštenje za korištenje',
    'permissions_save' => 'Spremi dopuštenje',
    'permissions_owner' => 'Vlasnik',

    // Search
    'search_results' => 'Pretraži rezultate',
    'search_total_results_found' => ':count rezultat|:count ukupno pronađenih rezultata',
    'search_clear' => 'Očisti pretragu',
    'search_no_pages' => 'Nijedna stranica ne podudara se s ovim pretraživanjem',
    'search_for_term' => 'Traži :term',
    'search_more' => 'Više rezultata',
    'search_advanced' => 'Napredno pretraživanje',
    'search_terms' => 'Pretraži pojmove',
    'search_content_type' => 'Vrsta sadržaja',
    'search_exact_matches' => 'Podudarnosti',
    'search_tags' => 'Označi pretragu',
    'search_options' => 'Opcije',
    'search_viewed_by_me' => 'Pregledano od mene',
    'search_not_viewed_by_me' => 'Nije pregledano od mene',
    'search_permissions_set' => 'Set dopuštenja',
    'search_created_by_me' => 'Stvoreno od mene',
    'search_updated_by_me' => 'Ažurirano od mene',
    'search_owned_by_me' => 'Moje vlasništvo',
    'search_date_options' => 'Opcije datuma',
    'search_updated_before' => 'Ažurirano prije',
    'search_updated_after' => 'Ažurirano nakon',
    'search_created_before' => 'Stvoreno prije',
    'search_created_after' => 'Stvoreno nakon',
    'search_set_date' => 'Datumi',
    'search_update' => 'Ažuriraj pretragu',

    // Shelves
    'shelf' => 'Polica',
    'shelves' => 'Police',
    'x_shelves' => ':count polica|:count polica',
    'shelves_long' => 'Police za knjige',
    'shelves_empty' => 'Nijedna polica nije stvorena',
    'shelves_create' => 'Stvori novu policu',
    'shelves_popular' => 'Popularne police',
    'shelves_new' => 'Nove police',
    'shelves_new_action' => 'Nova polica',
    'shelves_popular_empty' => 'Najpopularnije police pojavit će se. ovdje.',
    'shelves_new_empty' => 'Nedavno stvorene police pojavit će se ovdje.',
    'shelves_save' => 'Spremi policu',
    'shelves_books' => 'Knjige na ovoj polici',
    'shelves_add_books' => 'Dodaj knjige na ovu policu',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'Ova polica još nema dodijeljene knjige',
    'shelves_edit_and_assign' => 'Uredi policu za dodavanje knjiga',
    'shelves_edit_named' => 'Uredi policu :name',
    'shelves_edit' => 'Uredi policu',
    'shelves_delete' => 'Izbriši policu',
    'shelves_delete_named' => 'Izbriši policu :name',
    'shelves_delete_explain' => "This will delete the bookshelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Jeste li sigurni da želite obrisati policu?',
    'shelves_permissions' => 'Dopuštenja za policu',
    'shelves_permissions_updated' => 'Ažurirana dopuštenja za policu',
    'shelves_permissions_active' => 'Aktivirana dopuštenja za policu',
    'shelves_permissions_cascade_warning' => 'Permissions on bookshelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_copy_permissions_to_books' => 'Kopiraj dopuštenja za knjige',
    'shelves_copy_permissions' => 'Kopiraj dopuštenja',
    'shelves_copy_permissions_explain' => 'Ovo će promijeniti trenutna dopuštenja za policu i knjige u njoj. Prije aktivacije provjerite jesu li sve dopuštenja za ovu policu spremljena.',
    'shelves_copy_permission_success' => 'Dopuštenja za policu kopirana za :count knjiga',

    // Books
    'book' => 'Knjiga',
    'books' => 'Knjige',
    'x_books' => ':count knjiga|:count knjiga',
    'books_empty' => 'Nijedna knjiga nije stvorena',
    'books_popular' => 'Popularne knjige',
    'books_recent' => 'Nedavne knjige',
    'books_new' => 'Nove knjige',
    'books_new_action' => 'Nova knjiga',
    'books_popular_empty' => 'Najpopularnije knjige pojavit će se ovdje.',
    'books_new_empty' => 'Najnovije knjige pojavit će se ovdje.',
    'books_create' => 'Stvori novu knjigu',
    'books_delete' => 'Izbriši knjigu',
    'books_delete_named' => 'Izbriši knjigu :bookName',
    'books_delete_explain' => 'Ovaj korak će izbrisati knjigu \':bookName\'. Izbrisati će sve stranice i poglavlja.',
    'books_delete_confirmation' => 'Jeste li sigurni da želite izbrisati ovu knjigu?',
    'books_edit' => 'Uredi knjigu',
    'books_edit_named' => 'Uredi knjigu :bookName',
    'books_form_book_name' => 'Ime knjige',
    'books_save' => 'Spremi knjigu',
    'books_permissions' => 'Dopuštenja za knjigu',
    'books_permissions_updated' => 'Ažurirana dopuštenja za knjigu',
    'books_empty_contents' => 'U ovoj knjizi još nema stranica ni poglavlja.',
    'books_empty_create_page' => 'Stvori novu stranicu',
    'books_empty_sort_current_book' => 'Razvrstaj postojeće knjige',
    'books_empty_add_chapter' => 'Dodaj poglavlje',
    'books_permissions_active' => 'Aktivna dopuštenja za knjigu',
    'books_search_this' => 'Traži knjigu',
    'books_navigation' => 'Navigacija knjige',
    'books_sort' => 'Razvrstaj sadržaj knjige',
    'books_sort_named' => 'Razvrstaj knjigu :bookName',
    'books_sort_name' => 'Razvrstaj po imenu',
    'books_sort_created' => 'Razvrstaj po datumu nastanka',
    'books_sort_updated' => 'Razvrstaj po datumu ažuriranja',
    'books_sort_chapters_first' => 'Prva poglavlja',
    'books_sort_chapters_last' => 'Zadnja poglavlja',
    'books_sort_show_other' => 'Pokaži ostale knjige',
    'books_sort_save' => 'Spremi novi poredak',
    'books_copy' => 'Copy Book',
    'books_copy_success' => 'Book successfully copied',

    // Chapters
    'chapter' => 'Poglavlje',
    'chapters' => 'Poglavlja',
    'x_chapters' => ':count poglavlje|:count poglavlja',
    'chapters_popular' => 'Popularna poglavlja',
    'chapters_new' => 'Novo poglavlje',
    'chapters_create' => 'Stvori novo poglavlje',
    'chapters_delete' => 'Izbriši poglavlje',
    'chapters_delete_named' => 'Izbriši poglavlje :chapterName',
    'chapters_delete_explain' => 'Ovaj korak briše poglavlje \':chapterName\'. Sve stranice u njemu će biti izbrisane.',
    'chapters_delete_confirm' => 'Jeste li sigurni da želite izbrisati poglavlje?',
    'chapters_edit' => 'Uredi poglavlje',
    'chapters_edit_named' => 'Uredi poglavlje :chapterName',
    'chapters_save' => 'Spremi poglavlje',
    'chapters_move' => 'Premjesti poglavlje',
    'chapters_move_named' => 'Premjesti poglavlje :chapterName',
    'chapter_move_success' => 'Poglavlje premješteno u :bookName',
    'chapters_copy' => 'Copy Chapter',
    'chapters_copy_success' => 'Chapter successfully copied',
    'chapters_permissions' => 'Dopuštenja za poglavlje',
    'chapters_empty' => 'U ovom poglavlju nema stranica.',
    'chapters_permissions_active' => 'Aktivna dopuštenja za poglavlje',
    'chapters_permissions_success' => 'Ažurirana dopuštenja za poglavlje',
    'chapters_search_this' => 'Pretraži poglavlje',

    // Pages
    'page' => 'Stranica',
    'pages' => 'Stranice',
    'x_pages' => ':count stranice|:count stranica',
    'pages_popular' => 'Popularne stranice',
    'pages_new' => 'Nova stranica',
    'pages_attachments' => 'Prilozi',
    'pages_navigation' => 'Navigacija stranice',
    'pages_delete' => 'Izbriši stranicu',
    'pages_delete_named' => 'Izbriši stranicu :pageName',
    'pages_delete_draft_named' => 'Izbriši nacrt stranice :pageName',
    'pages_delete_draft' => 'Izbriši nacrt stranice',
    'pages_delete_success' => 'Izbrisana stranica',
    'pages_delete_draft_success' => 'Izbrisan nacrt stranice',
    'pages_delete_confirm' => 'Jeste li sigurni da želite izbrisati stranicu?',
    'pages_delete_draft_confirm' => 'Jeste li sigurni da želite izbrisati nacrt stranice?',
    'pages_editing_named' => 'Uređivanje stranice :pageName',
    'pages_edit_draft_options' => 'Izrada skice',
    'pages_edit_save_draft' => 'Spremi nacrt',
    'pages_edit_draft' => 'Uredi nacrt stranice',
    'pages_editing_draft' => 'Uređivanja nacrta',
    'pages_editing_page' => 'Uređivanje stranice',
    'pages_edit_draft_save_at' => 'Nacrt spremljen kao',
    'pages_edit_delete_draft' => 'Izbriši nacrt',
    'pages_edit_discard_draft' => 'Odbaci nacrt',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_set_changelog' => 'Postavi dnevnik promjena',
    'pages_edit_enter_changelog_desc' => 'Ukratko opišite promjene koje ste napravili',
    'pages_edit_enter_changelog' => 'Unesi dnevnik promjena',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Spremi stranicu',
    'pages_title' => 'Naslov stranice',
    'pages_name' => 'Ime stranice',
    'pages_md_editor' => 'Uređivač',
    'pages_md_preview' => 'Pregled',
    'pages_md_insert_image' => 'Umetni sliku',
    'pages_md_insert_link' => 'Umetni poveznicu',
    'pages_md_insert_drawing' => 'Umetni crtež',
    'pages_not_in_chapter' => 'Stranica nije u poglavlju',
    'pages_move' => 'Premjesti stranicu',
    'pages_move_success' => 'Stranica premještena u ":parentName"',
    'pages_copy' => 'Kopiraj stranicu',
    'pages_copy_desination' => 'Kopiraj odredište',
    'pages_copy_success' => 'Stranica je uspješno kopirana',
    'pages_permissions' => 'Dopuštenja stranice',
    'pages_permissions_success' => 'Ažurirana dopuštenja stranice',
    'pages_revision' => 'Revizija',
    'pages_revisions' => 'Revizija stranice',
    'pages_revisions_named' => 'Revizije stranice :pageName',
    'pages_revision_named' => 'Revizija stranice :pageName',
    'pages_revision_restored_from' => 'Oporavak iz #:id; :summary',
    'pages_revisions_created_by' => 'Stvoreno od',
    'pages_revisions_date' => 'Datum revizije',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revizija #:id',
    'pages_revisions_numbered_changes' => 'Revizija #:id Promjene',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'Dnevnik promjena',
    'pages_revisions_changes' => 'Promjene',
    'pages_revisions_current' => 'Trenutna verzija',
    'pages_revisions_preview' => 'Pregled',
    'pages_revisions_restore' => 'Vrati',
    'pages_revisions_none' => 'Ova stranica nema revizija',
    'pages_copy_link' => 'Kopiraj poveznicu',
    'pages_edit_content_link' => 'Uredi sadržaj',
    'pages_permissions_active' => 'Aktivna dopuštenja stranice',
    'pages_initial_revision' => 'Početno objavljivanje',
    'pages_initial_name' => 'Nova stranica',
    'pages_editing_draft_notification' => 'Uređujete nacrt stranice posljednji put spremljen :timeDiff.',
    'pages_draft_edited_notification' => 'Ova je stranica u međuvremenu ažurirana. Preporučujemo da odbacite ovaj nacrt.',
    'pages_draft_page_changed_since_creation' => 'This page has been updated since this draft was created. It is recommended that you discard this draft or take care not to overwrite any page changes.',
    'pages_draft_edit_active' => [
        'start_a' => ':count korisnika koji uređuju ovu stranicu',
        'start_b' => ':userName je počeo uređivati ovu stranicu',
        'time_a' => 'otkad je stranica posljednji put ažurirana',
        'time_b' => 'u zadnjih :minCount minuta',
        'message' => ':start :time. Pripazite na uzajamna ažuriranja!',
    ],
    'pages_draft_discarded' => 'Nacrt je odbijen jer je uređivač ažurirao postoječi sadržaj',
    'pages_specific' => 'Predlošci stranice',
    'pages_is_template' => 'Predložak stranice',

    // Editor Sidebar
    'page_tags' => 'Oznake stranice',
    'chapter_tags' => 'Oznake poglavlja',
    'book_tags' => 'Oznake knjiga',
    'shelf_tags' => 'Oznake polica',
    'tag' => 'Oznaka',
    'tags' =>  'Tags',
    'tag_name' =>  'Tag Name',
    'tag_value' => 'Oznaka vrijednosti (neobavezno)',
    'tags_explain' => "Add some tags to better categorise your content. \n You can assign a value to a tag for more in-depth organisation.",
    'tags_add' => 'Dodaj oznaku',
    'tags_remove' => 'Makni oznaku',
    'tags_usages' => 'Total tag usages',
    'tags_assigned_pages' => 'Assigned to Pages',
    'tags_assigned_chapters' => 'Assigned to Chapters',
    'tags_assigned_books' => 'Assigned to Books',
    'tags_assigned_shelves' => 'Assigned to Shelves',
    'tags_x_unique_values' => ':count unique values',
    'tags_all_values' => 'All values',
    'tags_view_tags' => 'View Tags',
    'tags_view_existing_tags' => 'View existing tags',
    'tags_list_empty_hint' => 'Tags can be assigned via the page editor sidebar or while editing the details of a book, chapter or shelf.',
    'attachments' => 'Prilozi',
    'attachments_explain' => 'Dodajte datoteke ili poveznice za prikaz na vašoj stranici. Vidljive su na rubnoj oznaci stranice.',
    'attachments_explain_instant_save' => 'Promjene se automatski spremaju.',
    'attachments_items' => 'Dodane stavke',
    'attachments_upload' => 'Dodaj datoteku',
    'attachments_link' => 'Dodaj poveznicu',
    'attachments_set_link' => 'Postavi poveznicu',
    'attachments_delete' => 'Jeste li sigurni da želite izbrisati ovu stavku?',
    'attachments_dropzone' => 'Dodajte datoteke ili kliknite ovdje',
    'attachments_no_files' => 'Nijedna datoteka nije prenesena',
    'attachments_explain_link' => 'Možete dodati poveznicu ako ne želite prenijeti datoteku. Poveznica može voditi na drugu stranicu ili datoteku.',
    'attachments_link_name' => 'Ime poveznice',
    'attachment_link' => 'Poveznica na privitak',
    'attachments_link_url' => 'Poveznica na datoteku',
    'attachments_link_url_hint' => 'Url ili stranica ili datoteka',
    'attach' => 'Dodaj',
    'attachments_insert_link' => 'Dodaj poveznicu na stranicu',
    'attachments_edit_file' => 'Uredi datoteku',
    'attachments_edit_file_name' => 'Ime datoteke',
    'attachments_edit_drop_upload' => 'Dodaj datoteku ili klikni ovdje za prijenos',
    'attachments_order_updated' => 'Ažurirani popis priloga',
    'attachments_updated_success' => 'Ažurirani detalji priloga',
    'attachments_deleted' => 'Izbrisani prilozi',
    'attachments_file_uploaded' => 'Datoteka je uspješno prenešena',
    'attachments_file_updated' => 'Datoteka je uspješno ažurirana',
    'attachments_link_attached' => 'Poveznica je dodana na stranicu',
    'templates' => 'Predlošci',
    'templates_set_as_template' => 'Stranica je predložak',
    'templates_explain_set_as_template' => 'Ovu stranicu možete postaviti pomoću predloška koji možete koristiti tijekom stvaranja drugih stranica. Ostali korisnici će ga također moći koristiti ako imaju dopuštenje.',
    'templates_replace_content' => 'Zamjeni sadržaj stranice',
    'templates_append_content' => 'Dodaj sadržaju stranice',
    'templates_prepend_content' => 'Dodaj na sadržaj stranice',

    // Profile View
    'profile_user_for_x' => 'Korisnik za :time',
    'profile_created_content' => 'Stvoreni sadržaj',
    'profile_not_created_pages' => ':userName nije kreirao nijednu stranicu',
    'profile_not_created_chapters' => ':userName nije kreirao nijedno poglavlje',
    'profile_not_created_books' => ':userName nije kreirao nijednu knjigu',
    'profile_not_created_shelves' => ':userName nije kreirao nijednu policu',

    // Comments
    'comment' => 'Komentar',
    'comments' => 'Komentari',
    'comment_add' => 'Dodaj komentar',
    'comment_placeholder' => 'Komentar ostavi ovdje',
    'comment_count' => '{0} Nema komentara|{1} 1 Komentar|[2,*] :count Komentara',
    'comment_save' => 'Spremi komentar',
    'comment_saving' => 'Spremanje komentara',
    'comment_deleting' => 'Brisanje komentara',
    'comment_new' => 'Novi komentar',
    'comment_created' => 'komentirano :createDiff',
    'comment_updated' => 'Ažurirano :updateDiff od :username',
    'comment_deleted_success' => 'Izbrisani komentar',
    'comment_created_success' => 'Dodani komentar',
    'comment_updated_success' => 'Ažurirani komentar',
    'comment_delete_confirm' => 'Jeste li sigurni da želite izbrisati ovaj komentar?',
    'comment_in_reply_to' => 'Odgovor na :commentId',

    // Revision
    'revision_delete_confirm' => 'Jeste li sigurni da želite izbrisati ovaj ispravak?',
    'revision_restore_confirm' => 'Jeste li sigurni da želite vratiti ovaj ispravak? Trenutni sadržaj će biti zamijenjen.',
    'revision_delete_success' => 'Izbrisani ispravak',
    'revision_cannot_delete_latest' => 'Posljednji ispravak se ne može izbrisati.',

    // Copy view
    'copy_consider' => 'Please consider the below when copying content.',
    'copy_consider_permissions' => 'Custom permission settings will not be copied.',
    'copy_consider_owner' => 'You will become the owner of all copied content.',
    'copy_consider_images' => 'Page image files will not be duplicated & the original images will retain their relation to the page they were originally uploaded to.',
    'copy_consider_attachments' => 'Page attachments will not be copied.',
    'copy_consider_access' => 'A change of location, owner or permissions may result in this content being accessible to those previously without access.',

    // Conversions
    'convert_to_shelf' => 'Convert to Shelf',
    'convert_to_shelf_contents_desc' => 'You can convert this book to a new shelf with the same contents. Chapters contained within this book will be converted to new books. If this book contains any pages, that are not in a chapter, this book will be renamed and contain such pages, and this book will become part of the new shelf.',
    'convert_to_shelf_permissions_desc' => 'Any permissions set on this book will be copied to the new shelf and to all new child books that don\'t have their own permissions enforced. Note that permissions on shelves do not auto-cascade to content within, as they do for books.',
    'convert_book' => 'Convert Book',
    'convert_book_confirm' => 'Are you sure you want to convert this book?',
    'convert_undo_warning' => 'This cannot be as easily undone.',
    'convert_to_book' => 'Convert to Book',
    'convert_to_book_desc' => 'You can convert this chapter to a new book with the same contents. Any permissions set on this chapter will be copied to the new book but any inherited permissions, from the parent book, will not be copied which could lead to a change of access control.',
    'convert_chapter' => 'Convert Chapter',
    'convert_chapter_confirm' => 'Are you sure you want to convert this chapter?',
];
