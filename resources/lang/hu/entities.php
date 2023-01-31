<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Legutóbb létrehozott',
    'recently_created_pages' => 'Legutóbb létrehozott oldalak',
    'recently_updated_pages' => 'Legutóbb frissített oldalak',
    'recently_created_chapters' => 'Legutóbb létrehozott fejezetek',
    'recently_created_books' => 'Legutóbb létrehozott könyvek',
    'recently_created_shelves' => 'Legutóbb létrehozott polcok',
    'recently_update' => 'Legutóbb frissített',
    'recently_viewed' => 'Legutóbb megtekintett',
    'recent_activity' => 'Legutóbbi tevékenység',
    'create_now' => 'Létrehozás most',
    'revisions' => 'Változatok',
    'meta_revision' => 'Változat #:revisionCount',
    'meta_created' => 'Létrehozva :timeLength',
    'meta_created_name' => ':user hozta létre :timeLength',
    'meta_updated' => 'Frissítve :timeLength',
    'meta_updated_name' => ':user frissítette :timeLength',
    'meta_owned_name' => ':user tulajdona',
    'meta_reference_page_count' => 'Referenced on 1 page|Referenced on :count pages',
    'entity_select' => 'Entitás kiválasztása',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'Képek',
    'my_recent_drafts' => 'Legutóbbi vázlataim',
    'my_recently_viewed' => 'Általam legutóbb megtekintett',
    'my_most_viewed_favourites' => 'Legtöbbet Megtekintett Kedvencek',
    'my_favourites' => 'Kedvencek',
    'no_pages_viewed' => 'Még nincsenek általam megtekintett oldalak',
    'no_pages_recently_created' => 'Nincsenek legutóbb létrehozott oldalak',
    'no_pages_recently_updated' => 'Nincsenek legutóbb frissített oldalak',
    'export' => 'Exportálás',
    'export_html' => 'Webfájlt tartalmaz',
    'export_pdf' => 'PDF fájl',
    'export_text' => 'Egyszerű szövegfájl',
    'export_md' => 'Markdown jegyzetek',

    // Permissions and restrictions
    'permissions' => 'Jogosultságok',
    'permissions_desc' => 'Set permissions here to override the default permissions provided by user roles.',
    'permissions_book_cascade' => 'Permissions set on books will automatically cascade to child chapters and pages, unless they have their own permissions defined.',
    'permissions_chapter_cascade' => 'Permissions set on chapters will automatically cascade to child pages, unless they have their own permissions defined.',
    'permissions_save' => 'Jogosultságok mentése',
    'permissions_owner' => 'Tulajdonos',
    'permissions_role_everyone_else' => 'Everyone Else',
    'permissions_role_everyone_else_desc' => 'Set permissions for all roles not specifically overridden.',
    'permissions_role_override' => 'Override permissions for role',
    'permissions_inherit_defaults' => 'Inherit defaults',

    // Search
    'search_results' => 'Keresési eredmények',
    'search_total_results_found' => ':count találat|összesen :count találat',
    'search_clear' => 'Keresés törlése',
    'search_no_pages' => 'Nincsenek a keresésnek megfelelő oldalak',
    'search_for_term' => ':term keresése',
    'search_more' => 'További eredmények',
    'search_advanced' => 'Részletes keresés',
    'search_terms' => 'Keresési kifejezések',
    'search_content_type' => 'Tartalomtípus',
    'search_exact_matches' => 'Pontos egyezések',
    'search_tags' => 'Címke keresések',
    'search_options' => 'Beállítások',
    'search_viewed_by_me' => 'Általam megtekintett',
    'search_not_viewed_by_me' => 'Általam nem megtekintett',
    'search_permissions_set' => 'Jogosultságok beállítva',
    'search_created_by_me' => 'Általam létrehozott',
    'search_updated_by_me' => 'Általam frissített',
    'search_owned_by_me' => 'Tulajdonomban lévő',
    'search_date_options' => 'Dátum beállítások',
    'search_updated_before' => 'Frissítve ez előtt',
    'search_updated_after' => 'Frissítve ez után',
    'search_created_before' => 'Létrehozva ez előtt',
    'search_created_after' => 'Létrehozva ez után',
    'search_set_date' => 'Dátum beállítása',
    'search_update' => 'Keresés frissítése',

    // Shelves
    'shelf' => 'Polc',
    'shelves' => 'Polcok',
    'x_shelves' => ':count polc|:count polcok',
    'shelves_empty' => 'Nincsenek könyvespolcok létrehozva',
    'shelves_create' => 'Új polc létrehozása',
    'shelves_popular' => 'Népszerű polcok',
    'shelves_new' => 'Új polcok',
    'shelves_new_action' => 'Új polc',
    'shelves_popular_empty' => 'A legnépszerűbb polcok itt fognak megjelenni.',
    'shelves_new_empty' => 'A legutoljára létrehozott polcok itt fognak megjelenni.',
    'shelves_save' => 'Polc mentése',
    'shelves_books' => 'Könyvek ezen a polcon',
    'shelves_add_books' => 'Könyvek hozzáadása ehhez a polchoz',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'Ehhez a polchoz nincsenek könyvek rendelve',
    'shelves_edit_and_assign' => 'Polc szerkesztése könyvek hozzárendeléséhez',
    'shelves_edit_named' => 'Edit Shelf :name',
    'shelves_edit' => 'Edit Shelf',
    'shelves_delete' => 'Delete Shelf',
    'shelves_delete_named' => 'Delete Shelf :name',
    'shelves_delete_explain' => "This will delete the shelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this shelf?',
    'shelves_permissions' => 'Shelf Permissions',
    'shelves_permissions_updated' => 'Shelf Permissions Updated',
    'shelves_permissions_active' => 'Shelf Permissions Active',
    'shelves_permissions_cascade_warning' => 'Permissions on shelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_copy_permissions_to_books' => 'Jogosultság másolása könyvekre',
    'shelves_copy_permissions' => 'Jogosultság másolása',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this shelf to all books contained within. Before activating, ensure any changes to the permissions of this shelf have been saved.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => 'Könyv',
    'books' => 'Könyvek',
    'x_books' => ':count könyv|:count könyv',
    'books_empty' => 'Nincsenek könyvek létrehozva',
    'books_popular' => 'Népszerű könyvek',
    'books_recent' => 'Legutóbbi könyvek',
    'books_new' => 'Új könyvek',
    'books_new_action' => 'Új könyv',
    'books_popular_empty' => 'A legnépszerűbb könyvek itt fognak megjelenni.',
    'books_new_empty' => 'A legutoljára létrehozott könyvek itt fognak megjelenni.',
    'books_create' => 'Új könyv létrehozása',
    'books_delete' => 'Könyv törlése',
    'books_delete_named' => ':bookName könyv törlése',
    'books_delete_explain' => '\':bookName\' nevű könyv törölve lesz. Minden oldal és fejezet el lesz távolítva.',
    'books_delete_confirmation' => 'Biztosan törölhető ez a könyv?',
    'books_edit' => 'Könyv szerkesztése',
    'books_edit_named' => ':bookName könyv szerkesztése',
    'books_form_book_name' => 'Könyv neve',
    'books_save' => 'Könyv mentése',
    'books_permissions' => 'Könyv jogosultságok',
    'books_permissions_updated' => 'Könyv jogosultságok frissítve',
    'books_empty_contents' => 'Ehhez a könyvhöz nincsenek oldalak vagy fejezetek létrehozva.',
    'books_empty_create_page' => 'Új oldal létrehozása',
    'books_empty_sort_current_book' => 'Aktuális könyv rendezése',
    'books_empty_add_chapter' => 'Fejezet hozzáadása',
    'books_permissions_active' => 'Könyv jogosultságok aktívak',
    'books_search_this' => 'Keresés ebben a könyvben',
    'books_navigation' => 'Könyv navigáció',
    'books_sort' => 'Könyv tartalmak rendezése',
    'books_sort_desc' => 'Move chapters and pages within a book to reorganise its contents. Other books can be added which allows easy moving of chapters and pages between books.',
    'books_sort_named' => ':bookName könyv rendezése',
    'books_sort_name' => 'Rendezés név szerint',
    'books_sort_created' => 'Rendezés létrehozás dátuma szerint',
    'books_sort_updated' => 'Rendezés frissítés dátuma szerint',
    'books_sort_chapters_first' => 'Fejezetek elől',
    'books_sort_chapters_last' => 'Fejezetek hátul',
    'books_sort_show_other' => 'Egyéb könyvek mutatása',
    'books_sort_save' => 'Új elrendezés mentése',
    'books_sort_show_other_desc' => 'Add other books here to include them in the sort operation, and allow easy cross-book reorganisation.',
    'books_sort_move_up' => 'Move Up',
    'books_sort_move_down' => 'Move Down',
    'books_sort_move_prev_book' => 'Move to Previous Book',
    'books_sort_move_next_book' => 'Move to Next Book',
    'books_sort_move_prev_chapter' => 'Move Into Previous Chapter',
    'books_sort_move_next_chapter' => 'Move Into Next Chapter',
    'books_sort_move_book_start' => 'Move to Start of Book',
    'books_sort_move_book_end' => 'Move to End of Book',
    'books_sort_move_before_chapter' => 'Move to Before Chapter',
    'books_sort_move_after_chapter' => 'Move to After Chapter',
    'books_copy' => 'Könyv másolása',
    'books_copy_success' => 'Könyv sikeresen lemásolva',

    // Chapters
    'chapter' => 'Fejezet',
    'chapters' => 'Fejezetek',
    'x_chapters' => ':count fejezet|:count fejezetek',
    'chapters_popular' => 'Népszerű fejezetek',
    'chapters_new' => 'Új fejezet',
    'chapters_create' => 'Új fejezet létrehozása',
    'chapters_delete' => 'Fejezet törlése',
    'chapters_delete_named' => ':chapterName fejezet törlése',
    'chapters_delete_explain' => 'A(z) \':chapterName\' törlésére készül. A fejezethez tartozó minden oldal is törlésre fog kerülni.',
    'chapters_delete_confirm' => 'Biztosan törölhető ez a fejezet?',
    'chapters_edit' => 'Fejezet szerkesztése',
    'chapters_edit_named' => ':chapterName fejezet szerkesztése',
    'chapters_save' => 'Fejezet mentése',
    'chapters_move' => 'Fejezet áthelyezése',
    'chapters_move_named' => ':chapterName fejezet áthelyezése',
    'chapter_move_success' => 'Fejezet áthelyezve :bookName könyvbe',
    'chapters_copy' => 'Fejezet másolása',
    'chapters_copy_success' => 'Fejezet sikeresen lemásolva',
    'chapters_permissions' => 'Fejezet jogosultságok',
    'chapters_empty' => 'Jelenleg nincsenek oldalak ebben a fejezetben.',
    'chapters_permissions_active' => 'Fejezet jogosultságok aktívak',
    'chapters_permissions_success' => 'Fejezet jogosultságok frissítve',
    'chapters_search_this' => 'Keresés ebben a fejezetben',
    'chapter_sort_book' => 'Sort Book',

    // Pages
    'page' => 'Oldal',
    'pages' => 'Oldalak',
    'x_pages' => ':count oldal|:count oldal',
    'pages_popular' => 'Népszerű oldalak',
    'pages_new' => 'Új oldal',
    'pages_attachments' => 'Csatolmányok',
    'pages_navigation' => 'Oldal navigáció',
    'pages_delete' => 'Oldal törlése',
    'pages_delete_named' => ':pageName oldal törlése',
    'pages_delete_draft_named' => ':pageName vázlat oldal törlése',
    'pages_delete_draft' => 'Vázlat oldal törlése',
    'pages_delete_success' => 'Oldal törölve',
    'pages_delete_draft_success' => 'Vázlat oldal törölve',
    'pages_delete_confirm' => 'Biztosan törölhető ez az oldal?',
    'pages_delete_draft_confirm' => 'Biztosan törölhető ez a vázlatoldal?',
    'pages_editing_named' => ':pageName oldal szerkesztése',
    'pages_edit_draft_options' => 'Vázlatbeállítások',
    'pages_edit_save_draft' => 'Vázlat mentése',
    'pages_edit_draft' => 'Oldal vázlat szerkesztése',
    'pages_editing_draft' => 'Vázlat szerkesztése',
    'pages_editing_page' => 'Oldal szerkesztése',
    'pages_edit_draft_save_at' => 'Vázlat elmentve:',
    'pages_edit_delete_draft' => 'Vázlat törlése',
    'pages_edit_discard_draft' => 'Vázlat elvetése',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_set_changelog' => 'Változásnapló beállítása',
    'pages_edit_enter_changelog_desc' => 'A végrehajtott módosítások rövid leírása',
    'pages_edit_enter_changelog' => 'Változásnapló megadása',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Oldal mentése',
    'pages_title' => 'Oldal címe',
    'pages_name' => 'Oldal neve',
    'pages_md_editor' => 'Szerkesztő',
    'pages_md_preview' => 'Előnézet',
    'pages_md_insert_image' => 'Kép beillesztése',
    'pages_md_insert_link' => 'Entitás hivatkozás beillesztése',
    'pages_md_insert_drawing' => 'Rajz beillesztése',
    'pages_md_show_preview' => 'Show preview',
    'pages_md_sync_scroll' => 'Sync preview scroll',
    'pages_not_in_chapter' => 'Az oldal nincs fejezetben',
    'pages_move' => 'Oldal áthelyezése',
    'pages_move_success' => 'Oldal áthelyezve ide: ":parentName"',
    'pages_copy' => 'Oldal másolása',
    'pages_copy_desination' => 'Másolás célja',
    'pages_copy_success' => 'Oldal sikeresen lemásolva',
    'pages_permissions' => 'Oldal jogosultságok',
    'pages_permissions_success' => 'Oldal jogosultságok frissítve',
    'pages_revision' => 'Változat',
    'pages_revisions' => 'Oldal változatai',
    'pages_revisions_desc' => 'Listed below are all the past revisions of this page. You can look back upon, compare, and restore old page versions if permissions allow. The full history of the page may not be fully reflected here since, depending on system configuration, old revisions could be auto-deleted.',
    'pages_revisions_named' => ':pageName oldal változatai',
    'pages_revision_named' => ':pageName oldal változata',
    'pages_revision_restored_from' => 'Restored from #:id; :summary',
    'pages_revisions_created_by' => 'Létrehozta:',
    'pages_revisions_date' => 'Változat dátuma',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Revision Number',
    'pages_revisions_numbered' => 'Változat #:id',
    'pages_revisions_numbered_changes' => '#:id változat módosításai',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'Változásnapló',
    'pages_revisions_changes' => 'Módosítások',
    'pages_revisions_current' => 'Aktuális verzió',
    'pages_revisions_preview' => 'Előnézet',
    'pages_revisions_restore' => 'Visszaállítás',
    'pages_revisions_none' => 'Ennek az oldalnak nincsenek változatai',
    'pages_copy_link' => 'Hivatkozás másolása',
    'pages_edit_content_link' => 'Tartalom szerkesztése',
    'pages_permissions_active' => 'Oldal jogosultságok aktívak',
    'pages_initial_revision' => 'Kezdeti közzététel',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => 'Új oldal',
    'pages_editing_draft_notification' => 'A jelenleg szerkesztett vázlat legutóbb ekkor volt elmentve: :timeDiff.',
    'pages_draft_edited_notification' => 'Ezt az oldalt azóta már frissítették. Javasolt ennek a vázlatnak az elvetése.',
    'pages_draft_page_changed_since_creation' => 'This page has been updated since this draft was created. It is recommended that you discard this draft or take care not to overwrite any page changes.',
    'pages_draft_edit_active' => [
        'start_a' => ':count felhasználók kezdte el szerkeszteni ezt az oldalt',
        'start_b' => ':userName elkezdte szerkeszteni ezt az oldalt',
        'time_a' => 'mióta az oldal utoljára frissítve volt',
        'time_b' => 'az utolsó :minCount percben',
        'message' => ':start :time. Ügyeljen arra, hogy ne írjuk felül egymás frissítéseit!',
    ],
    'pages_draft_discarded' => 'Vázlat elvetve, a szerkesztő frissítve lesz az oldal aktuális tartalmával',
    'pages_specific' => 'Egy bizonyos oldal',
    'pages_is_template' => 'Oldalsablon',

    // Editor Sidebar
    'page_tags' => 'Oldal címkék',
    'chapter_tags' => 'Fejezet címkék',
    'book_tags' => 'Könyv címkék',
    'shelf_tags' => 'Polc címkék',
    'tag' => 'Címke',
    'tags' =>  'Címkék',
    'tags_index_desc' => 'Tags can be applied to content within the system to apply a flexible form of categorization. Tags can have both a key and value, with the value being optional. Once applied, content can then be queried using the tag name and value.',
    'tag_name' =>  'Címkenév',
    'tag_value' => 'Címke érték (nem kötelező)',
    'tags_explain' => "Címkék hozzáadása a tartalom jobb kategorizálásához.\nA mélyebb szervezettség megvalósításához hozzá lehet rendelni egy értéket a címkéhez.",
    'tags_add' => 'Másik címke hozzáadása',
    'tags_remove' => 'Címke eltávolítása',
    'tags_usages' => 'Total tag usages',
    'tags_assigned_pages' => 'Oldalakhoz Rendelt',
    'tags_assigned_chapters' => 'Fejezetekhez rendelt',
    'tags_assigned_books' => 'Könyvekhez Rendelt',
    'tags_assigned_shelves' => 'Polcokhoz Rendelt',
    'tags_x_unique_values' => ':count egyedi érték',
    'tags_all_values' => 'Összes érték',
    'tags_view_tags' => 'Címke megtekintése',
    'tags_view_existing_tags' => 'Címkék megtekintése',
    'tags_list_empty_hint' => 'Tags can be assigned via the page editor sidebar or while editing the details of a book, chapter or shelf.',
    'attachments' => 'Csatolmányok',
    'attachments_explain' => 'Az oldalon megjelenő fájlok feltöltése vagy hivatkozások csatolása. Az oldal oldalsávjában fognak megjelenni.',
    'attachments_explain_instant_save' => 'Az itt történt módosítások azonnal el lesznek mentve.',
    'attachments_items' => 'Csatolt elemek',
    'attachments_upload' => 'Fájlfeltöltés',
    'attachments_link' => 'Hivatkozás csatolása',
    'attachments_set_link' => 'Hivatkozás beállítása',
    'attachments_delete' => 'Biztosan törölhető ez a melléklet?',
    'attachments_dropzone' => 'Fájlok csatolása ejtéssel vagy kattintással',
    'attachments_no_files' => 'Nincsenek fájlok feltöltve',
    'attachments_explain_link' => 'Fájl feltöltése helyett hozzá lehet kapcsolni egy hivatkozást. Ez egy hivatkozás lesz egy másik oldalra vagy egy fájlra a felhőben.',
    'attachments_link_name' => 'Hivatkozás neve',
    'attachment_link' => 'Csatolmány hivatkozás',
    'attachments_link_url' => 'Hivatkozás fájlra',
    'attachments_link_url_hint' => 'Weboldal vagy fájl webcíme',
    'attach' => 'Csatolás',
    'attachments_insert_link' => 'Melléklet hivatkozás hozzáadása oldalhoz',
    'attachments_edit_file' => 'Fájl szerkesztése',
    'attachments_edit_file_name' => 'Fájl neve',
    'attachments_edit_drop_upload' => 'Feltöltés és felülírás ejtéssel vagy kattintással',
    'attachments_order_updated' => 'Csatolmány sorrend frissítve',
    'attachments_updated_success' => 'Csatolmány részletei frissítve',
    'attachments_deleted' => 'Csatolmány törölve',
    'attachments_file_uploaded' => 'Fájl sikeresen feltöltve',
    'attachments_file_updated' => 'Fájl sikeresen frissítve',
    'attachments_link_attached' => 'Hivatkozás sikeresen hozzácsatolva az oldalhoz',
    'templates' => 'Sablonok',
    'templates_set_as_template' => 'Az oldal egy sablon',
    'templates_explain_set_as_template' => 'Ez az oldal sablonnak lett beállítva, így a tartalma felhasználható más oldalak létrehozásakor. Más felhasználók is használhatják ezt a sablont ha megtekintési jogosultságuk van ehhez az oldalhoz.',
    'templates_replace_content' => 'Oldal tartalmának cseréje',
    'templates_append_content' => 'Hozzáfűzés az oldal tartalmához',
    'templates_prepend_content' => 'Hozzáadás az oldal tartalmának elejéhez',

    // Profile View
    'profile_user_for_x' => 'Felhasználó ez óta: :time',
    'profile_created_content' => 'Létrehozott tartalom',
    'profile_not_created_pages' => ':userName még nem hozott létre oldalt',
    'profile_not_created_chapters' => ':userName még nem hozott létre fejezetet',
    'profile_not_created_books' => ':userName még nem hozott létre könyvet',
    'profile_not_created_shelves' => ':userName még nem hozott létre polcot',

    // Comments
    'comment' => 'Megjegyzés',
    'comments' => 'Megjegyzések',
    'comment_add' => 'Megjegyzés hozzáadása',
    'comment_placeholder' => 'Megjegyzés írása',
    'comment_count' => '{0} Nincs megjegyzés|{1} 1 megjegyzés|[2,*] :count megjegyzés',
    'comment_save' => 'Megjegyzés mentése',
    'comment_saving' => 'Megjegyzés mentése...',
    'comment_deleting' => 'Megjegyzés törlése...',
    'comment_new' => 'Új megjegyzés',
    'comment_created' => 'megjegyzést fűzött hozzá :createDiff',
    'comment_updated' => 'Frissítve :updateDiff :username által',
    'comment_deleted_success' => 'Megjegyzés törölve',
    'comment_created_success' => 'Megjegyzés hozzáadva',
    'comment_updated_success' => 'Megjegyzés frissítve',
    'comment_delete_confirm' => 'Biztosan törölhető ez a megjegyzés?',
    'comment_in_reply_to' => 'Válasz erre: :commentId',

    // Revision
    'revision_delete_confirm' => 'Biztosan törölhető ez a változat?',
    'revision_restore_confirm' => 'Biztosan visszaállítható ez a változat? A oldal jelenlegi tartalma le lesz cserélve.',
    'revision_delete_success' => 'Változat törölve',
    'revision_cannot_delete_latest' => 'A legutolsó változat nem törölhető.',

    // Copy view
    'copy_consider' => 'Kérem, fontolja meg az alábbiakat, amikor tartalmat kíván másolni.',
    'copy_consider_permissions' => 'Custom permission settings will not be copied.',
    'copy_consider_owner' => 'Minden lemásolt tartalomnak Ön lesz a tulajdonosa.',
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

    // References
    'references' => 'References',
    'references_none' => 'There are no tracked references to this item.',
    'references_to_desc' => 'Shown below are all the known pages in the system that link to this item.',
];
