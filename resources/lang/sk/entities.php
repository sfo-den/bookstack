<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Nedávno vytvorené',
    'recently_created_pages' => 'Nedávno vytvorené stránky',
    'recently_updated_pages' => 'Nedávno aktualizované stránky',
    'recently_created_chapters' => 'Nedávno vytvorené kapitoly',
    'recently_created_books' => 'Nedávno vytvorené knihy',
    'recently_created_shelves' => 'Nedávno vytvorené knižnice',
    'recently_update' => 'Nedávno aktualizované',
    'recently_viewed' => 'Nedávno zobrazené',
    'recent_activity' => 'Nedávna aktivita',
    'create_now' => 'Vytvoriť teraz',
    'revisions' => 'Revízie',
    'meta_revision' => 'Upravené vydanie #:revisionCount',
    'meta_created' => 'Vytvorené :timeLength',
    'meta_created_name' => 'Vytvorené :timeLength používateľom :user',
    'meta_updated' => 'Aktualizované :timeLength',
    'meta_updated_name' => 'Aktualizované :timeLength používateľom :user',
    'meta_owned_name' => 'Vlastník :user',
    'meta_reference_page_count' => 'Referenced on 1 page|Referenced on :count pages',
    'entity_select' => 'Entita vybraná',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'Obrázky',
    'my_recent_drafts' => 'Moje nedávne koncepty',
    'my_recently_viewed' => 'Nedávno mnou zobrazené',
    'my_most_viewed_favourites' => 'Moje najčastejšie zobrazené obľubené',
    'my_favourites' => 'Moje obľúbené',
    'no_pages_viewed' => 'Nepozreli ste si žiadne stránky',
    'no_pages_recently_created' => 'Žiadne stránky neboli nedávno vytvorené',
    'no_pages_recently_updated' => 'Žiadne stránky neboli nedávno aktualizované',
    'export' => 'Exportovať',
    'export_html' => 'Obsahovaný webový súbor',
    'export_pdf' => 'PDF súbor',
    'export_text' => 'Súbor s čistým textom',
    'export_md' => 'Súbor Markdown',

    // Permissions and restrictions
    'permissions' => 'Oprávnenia',
    'permissions_intro' => 'Ak budú tieto oprávnenia povolené, budú mať prioritu pred oprávneniami roly.',
    'permissions_enable' => 'Povoliť vlastné oprávnenia',
    'permissions_save' => 'Uložiť oprávnenia',
    'permissions_owner' => 'Vlastník',

    // Search
    'search_results' => 'Výsledky hľadania',
    'search_total_results_found' => ':count výsledok found|:počet nájdených výsledkov',
    'search_clear' => 'Vyčistiť hľadanie',
    'search_no_pages' => 'Žiadne stránky nevyhovujú tomuto hľadaniu',
    'search_for_term' => 'Hľadať :term',
    'search_more' => 'Načítať ďalšie výsledky',
    'search_advanced' => 'Rozšírené vyhľadávanie',
    'search_terms' => 'Hľadané výrazy',
    'search_content_type' => 'Typ obsahu',
    'search_exact_matches' => 'Presná zhoda',
    'search_tags' => 'Vyhľadávanie značiek',
    'search_options' => 'Možnosti',
    'search_viewed_by_me' => 'Videné mnou',
    'search_not_viewed_by_me' => 'Nevidené mnou',
    'search_permissions_set' => 'Oprávnenia',
    'search_created_by_me' => 'Vytvorené mnou',
    'search_updated_by_me' => 'Aktualizované mnou',
    'search_owned_by_me' => 'Patriace mne',
    'search_date_options' => 'Možnosti dátumu',
    'search_updated_before' => 'Aktualizované pred',
    'search_updated_after' => 'Aktualizované po',
    'search_created_before' => 'Vytvorené pred',
    'search_created_after' => 'Vytvorené po',
    'search_set_date' => 'Nastaviť Dátum',
    'search_update' => 'Aktualizujte vyhľadávanie',

    // Shelves
    'shelf' => 'Polica',
    'shelves' => 'Police',
    'x_shelves' => ':count Shelf|:count Police',
    'shelves_empty' => 'Neboli vytvorené žiadne police',
    'shelves_create' => 'Vytvoriť novú policu',
    'shelves_popular' => 'Populárne police',
    'shelves_new' => 'Nové police',
    'shelves_new_action' => 'Nová polica',
    'shelves_popular_empty' => 'Najpopulárnejšie police sa objavia tu.',
    'shelves_new_empty' => 'Najpopulárnejšie police sa objavia tu.',
    'shelves_save' => 'Uložiť policu',
    'shelves_books' => 'Knihy na tejto polici',
    'shelves_add_books' => 'Pridať knihy do tejto police',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'Táto polica nemá priradené žiadne knihy',
    'shelves_edit_and_assign' => 'Uprav policu a priraď knihy',
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
    'shelves_copy_permissions_to_books' => 'Kopírovať oprávnenia pre knihy',
    'shelves_copy_permissions' => 'Kopírovať oprávnenia',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this shelf to all books contained within. Before activating, ensure any changes to the permissions of this shelf have been saved.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => 'Kniha',
    'books' => 'Knihy',
    'x_books' => '{0}:count kníh|{1}:count kniha|[2,3,4]:count knihy|[5,*]:count kníh',
    'books_empty' => 'Žiadne knihy neboli vytvorené',
    'books_popular' => 'Populárne knihy',
    'books_recent' => 'Nedávne knihy',
    'books_new' => 'Nové knihy',
    'books_new_action' => 'Nová kniha',
    'books_popular_empty' => 'Najpopulárnejšie knihy sa objavia tu.',
    'books_new_empty' => 'Najnovšie knihy sa zobrazia tu.',
    'books_create' => 'Vytvoriť novú knihu',
    'books_delete' => 'Zmazať knihu',
    'books_delete_named' => 'Zmazať knihu :bookName',
    'books_delete_explain' => 'Toto zmaže knihu s názvom \':bookName\', všetky stránky a kapitoly budú odstránené.',
    'books_delete_confirmation' => 'Ste si istý, že chcete zmazať túto knihu?',
    'books_edit' => 'Upraviť knihu',
    'books_edit_named' => 'Upraviť knihu :bookName',
    'books_form_book_name' => 'Názov knihy',
    'books_save' => 'Uložiť knihu',
    'books_permissions' => 'Oprávnenia knihy',
    'books_permissions_updated' => 'Oprávnenia knihy aktualizované',
    'books_empty_contents' => 'Pre túto knihu neboli vytvorené žiadne stránky alebo kapitoly.',
    'books_empty_create_page' => 'Vytvoriť novú stránku',
    'books_empty_sort_current_book' => 'Zoradiť aktuálnu knihu',
    'books_empty_add_chapter' => 'Pridať kapitolu',
    'books_permissions_active' => 'Oprávnenia knihy aktívne',
    'books_search_this' => 'Hľadať v tejto knihe',
    'books_navigation' => 'Navigácia knihy',
    'books_sort' => 'Zoradiť obsah knihy',
    'books_sort_named' => 'Zoradiť knihu :bookName',
    'books_sort_name' => 'Zoradiť podľa mena',
    'books_sort_created' => 'Zoradiť podľa dátumu vytvorenia',
    'books_sort_updated' => 'Zoradiť podľa dátumu aktualizácie',
    'books_sort_chapters_first' => 'Kapitoly ako prvé',
    'books_sort_chapters_last' => 'Kapitoly ako posledné',
    'books_sort_show_other' => 'Zobraziť ostatné knihy',
    'books_sort_save' => 'Uložiť nové zoradenie',
    'books_copy' => 'Copy Book',
    'books_copy_success' => 'Book successfully copied',

    // Chapters
    'chapter' => 'Kapitola',
    'chapters' => 'Kapitoly',
    'x_chapters' => '{0}:count Kapitol|{1}:count Kapitola|[2,3,4]:count Kapitoly|[5,*]:count Kapitol',
    'chapters_popular' => 'Populárne kapitoly',
    'chapters_new' => 'Nová kapitola',
    'chapters_create' => 'Vytvoriť novú kapitolu',
    'chapters_delete' => 'Zmazať kapitolu',
    'chapters_delete_named' => 'Zmazať kapitolu :chapterName',
    'chapters_delete_explain' => 'Týmto sa odstráni kapitola s názvom \':chapterName\'. Spolu s ňou sa odstránia všetky stránky v tejto kapitole.',
    'chapters_delete_confirm' => 'Ste si istý, že chcete zmazať túto kapitolu?',
    'chapters_edit' => 'Upraviť kapitolu',
    'chapters_edit_named' => 'Upraviť kapitolu :chapterName',
    'chapters_save' => 'Uložiť kapitolu',
    'chapters_move' => 'Presunúť kapitolu',
    'chapters_move_named' => 'Presunúť kapitolu :chapterName',
    'chapter_move_success' => 'Kapitola presunutá do :bookName',
    'chapters_copy' => 'Copy Chapter',
    'chapters_copy_success' => 'Chapter successfully copied',
    'chapters_permissions' => 'Oprávnenia kapitoly',
    'chapters_empty' => 'V tejto kapitole nie sú teraz žiadne stránky.',
    'chapters_permissions_active' => 'Oprávnenia kapitoly aktívne',
    'chapters_permissions_success' => 'Oprávnenia kapitoly aktualizované',
    'chapters_search_this' => 'Hladať v kapitole',
    'chapter_sort_book' => 'Sort Book',

    // Pages
    'page' => 'Stránka',
    'pages' => 'Stránky',
    'x_pages' => ':count stránok',
    'pages_popular' => 'Populárne stránky',
    'pages_new' => 'Nová stránka',
    'pages_attachments' => 'Prílohy',
    'pages_navigation' => 'Navigácia',
    'pages_delete' => 'Zmazať stránku',
    'pages_delete_named' => 'Zmazať stránku :pageName',
    'pages_delete_draft_named' => 'Zmazať koncept :pageName',
    'pages_delete_draft' => 'Zmazať koncept',
    'pages_delete_success' => 'Stránka zmazaná',
    'pages_delete_draft_success' => 'Koncept stránky zmazaný',
    'pages_delete_confirm' => 'Ste si istý, že chcete zmazať túto stránku?',
    'pages_delete_draft_confirm' => 'Ste si istý, že chcete zmazať tento koncept stránky?',
    'pages_editing_named' => 'Upraviť stránku :pageName',
    'pages_edit_draft_options' => 'Možnosti konceptu',
    'pages_edit_save_draft' => 'Uložiť koncept',
    'pages_edit_draft' => 'Upraviť koncept stránky',
    'pages_editing_draft' => 'Upravuje sa koncept',
    'pages_editing_page' => 'Upravuje sa stránka',
    'pages_edit_draft_save_at' => 'Koncept uložený pod ',
    'pages_edit_delete_draft' => 'Uložiť koncept',
    'pages_edit_discard_draft' => 'Zrušiť koncept',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_set_changelog' => 'Nastaviť záznam zmien',
    'pages_edit_enter_changelog_desc' => 'Zadajte krátky popis zmien, ktoré ste urobili',
    'pages_edit_enter_changelog' => 'Zadať záznam zmien',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Uložiť stránku',
    'pages_title' => 'Titulok stránky',
    'pages_name' => 'Názov stránky',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Náhľad',
    'pages_md_insert_image' => 'Vložiť obrázok',
    'pages_md_insert_link' => 'Vložiť odkaz na entitu',
    'pages_md_insert_drawing' => 'Vložiť kresbu',
    'pages_not_in_chapter' => 'Stránka nie je v kapitole',
    'pages_move' => 'Presunúť stránku',
    'pages_move_success' => 'Stránka presunutá do ":parentName"',
    'pages_copy' => 'Kpoírovať stránku',
    'pages_copy_desination' => 'Ciel kopírovania',
    'pages_copy_success' => 'Stránka bola skopírovaná',
    'pages_permissions' => 'Oprávnenia stránky',
    'pages_permissions_success' => 'Oprávnenia stránky aktualizované',
    'pages_revision' => 'Revízia',
    'pages_revisions' => 'Revízie stránky',
    'pages_revisions_named' => 'Revízie stránky :pageName',
    'pages_revision_named' => 'Revízia stránky :pageName',
    'pages_revision_restored_from' => 'Obnovené z #:id; :summary',
    'pages_revisions_created_by' => 'Vytvoril',
    'pages_revisions_date' => 'Dátum revízie',
    'pages_revisions_number' => 'č.',
    'pages_revisions_numbered' => 'Revízia č. :id',
    'pages_revisions_numbered_changes' => 'Zmeny revízie č. ',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'Záznam zmien',
    'pages_revisions_changes' => 'Zmeny',
    'pages_revisions_current' => 'Aktuálna verzia',
    'pages_revisions_preview' => 'Náhľad',
    'pages_revisions_restore' => 'Obnoviť',
    'pages_revisions_none' => 'Táto stránka nemá žiadne revízie',
    'pages_copy_link' => 'Kopírovať odkaz',
    'pages_edit_content_link' => 'Upraviť obsah',
    'pages_permissions_active' => 'Oprávnienia stránky aktívne',
    'pages_initial_revision' => 'Prvé zverejnenie',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => 'Nová stránka',
    'pages_editing_draft_notification' => 'Práve upravujete koncept, ktorý bol naposledy uložený :timeDiff.',
    'pages_draft_edited_notification' => 'Táto stránka bola odvtedy upravená. Odporúča sa odstrániť tento koncept.',
    'pages_draft_page_changed_since_creation' => 'Táto stránka bola aktualizovaná od vytvorenia tohto konceptu. Odporúča sa, aby ste tento koncept zahodili alebo aby ste neprepísali žiadne zmeny stránky.',
    'pages_draft_edit_active' => [
        'start_a' => ':count používateľov začalo upravovať túto stránku',
        'start_b' => ':userName začal upravovať túto stránku',
        'time_a' => 'odkedy boli stránky naposledy aktualizované',
        'time_b' => 'za posledných :minCount minút',
        'message' => ':start :time. Dávajte pozor aby ste si navzájom neprepísali zmeny!',
    ],
    'pages_draft_discarded' => 'Koncept ostránený, aktuálny obsah stránky bol nahraný do editora',
    'pages_specific' => 'Konkrétna stránka',
    'pages_is_template' => 'Šablóna stránky',

    // Editor Sidebar
    'page_tags' => 'Štítky stránok',
    'chapter_tags' => 'Štítky kapitol',
    'book_tags' => 'Štítky kníh',
    'shelf_tags' => 'Štítky knižníc',
    'tag' => 'Štítok',
    'tags' =>  'Štítky',
    'tag_name' =>  'Názov štítku',
    'tag_value' => 'Hodnota štítku (Voliteľné)',
    'tags_explain' => "Pridajte pár štítkov pre uľahčenie kategorizácie Vášho obsahu. \n Štítku môžete priradiť hodnotu pre ešte lepšiu organizáciu.",
    'tags_add' => 'Pridať ďalší štítok',
    'tags_remove' => 'Odstrániť tento štítok',
    'tags_usages' => 'Celkové využitie značiek',
    'tags_assigned_pages' => 'Priradené k stránkam',
    'tags_assigned_chapters' => 'Priradené ku kapitolám',
    'tags_assigned_books' => 'Priradené ku knihám',
    'tags_assigned_shelves' => 'Priradené k poličkám',
    'tags_x_unique_values' => ':count jedinečné hodnoty',
    'tags_all_values' => 'Všetky hodnoty',
    'tags_view_tags' => 'Zobraziť značky',
    'tags_view_existing_tags' => 'Zobraziť existujúce značky',
    'tags_list_empty_hint' => 'Značky je možné priradiť prostredníctvom postranného panela editora stránok alebo pri úprave podrobností o knihe, kapitole alebo poličke.',
    'attachments' => 'Prílohy',
    'attachments_explain' => 'Nahrajte nejaké súbory alebo priložte zopár odkazov pre zobrazenie na Vašej stránke. Budú viditeľné v bočnom paneli.',
    'attachments_explain_instant_save' => 'Zmeny budú okamžite uložené.',
    'attachments_items' => 'Priložené položky',
    'attachments_upload' => 'Nahrať súbor',
    'attachments_link' => 'Priložiť odkaz',
    'attachments_set_link' => 'Nastaviť odkaz',
    'attachments_delete' => 'Naozaj chcete odstrániť túto prílohu?',
    'attachments_dropzone' => 'Presuňte súbory alebo klinknite sem pre priloženie súboru',
    'attachments_no_files' => 'Žiadne súbory neboli nahrané',
    'attachments_explain_link' => 'Ak nechcete priložiť súbor, môžete priložiť odkaz. Môže to byť odkaz na inú stránku alebo odkaz na súbor v cloude.',
    'attachments_link_name' => 'Názov odkazu',
    'attachment_link' => 'Odkaz na prílohu',
    'attachments_link_url' => 'Odkaz na súbor',
    'attachments_link_url_hint' => 'Url stránky alebo súboru',
    'attach' => 'Priložiť',
    'attachments_insert_link' => 'Pridať odkaz na prílohu',
    'attachments_edit_file' => 'Upraviť súbor',
    'attachments_edit_file_name' => 'Názov súboru',
    'attachments_edit_drop_upload' => 'Presuňte súbory sem alebo klinknite pre nahranie a prepis',
    'attachments_order_updated' => 'Poradie príloh aktualizované',
    'attachments_updated_success' => 'Detaily prílohy aktualizované',
    'attachments_deleted' => 'Príloha zmazaná',
    'attachments_file_uploaded' => 'Súbor úspešne nahraný',
    'attachments_file_updated' => 'Súbor úspešne aktualizovaný',
    'attachments_link_attached' => 'Odkaz úspešne pripojený k stránke',
    'templates' => 'Šablóny',
    'templates_set_as_template' => 'Táto stránka je šablóna',
    'templates_explain_set_as_template' => 'Túto stránku môžete nastaviť ako šablónu, aby sa jej obsah použil pri vytváraní ďalších stránok. Ostatní používatelia budú môcť použiť túto šablónu, ak majú povolenia na zobrazenie tejto stránky.',
    'templates_replace_content' => 'Nahradiť obsah',
    'templates_append_content' => 'Pripojiť k obsahu stránky',
    'templates_prepend_content' => 'Pridať pred obsah stránky',

    // Profile View
    'profile_user_for_x' => 'Používateľ už :time',
    'profile_created_content' => 'Vytvorený obsah',
    'profile_not_created_pages' => ':userName nevytvoril žiadne stránky',
    'profile_not_created_chapters' => ':userName nevytvoril žiadne kapitoly',
    'profile_not_created_books' => ':userName nevytvoril žiadne knihy',
    'profile_not_created_shelves' => ':userName nevytvoril(a) žiadne kapitoly',

    // Comments
    'comment' => 'Komentár',
    'comments' => 'Komentáre',
    'comment_add' => 'Pridať komentár',
    'comment_placeholder' => 'Tu zadajte svoje pripomienky',
    'comment_count' => '{0} Bez komentárov|{1} 1 komentár|[2,3,4] :count komentáre|[5,*] :count komentárov',
    'comment_save' => 'Uložiť komentár',
    'comment_saving' => 'Ukladanie komentára...',
    'comment_deleting' => 'Mazanie komentára...',
    'comment_new' => 'Nový komentár',
    'comment_created' => 'komentované :createDiff',
    'comment_updated' => 'Aktualizované :updateDiff užívateľom :username',
    'comment_deleted_success' => 'Komentár odstránený',
    'comment_created_success' => 'Komentár pridaný',
    'comment_updated_success' => 'Komentár aktualizovaný',
    'comment_delete_confirm' => 'Ste si istý, že chcete odstrániť tento komentár?',
    'comment_in_reply_to' => 'Odpovedať na :commentId',

    // Revision
    'revision_delete_confirm' => 'Naozaj chcete túto revíziu odstrániť?',
    'revision_restore_confirm' => 'Naozaj chcete obnoviť túto revíziu? Aktuálny obsah stránky sa nahradí.',
    'revision_delete_success' => 'Revízia bola vymazaná',
    'revision_cannot_delete_latest' => 'Nie je možné vymazať poslednú revíziu.',

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

    // References
    'references' => 'References',
    'references_none' => 'There are no tracked references to this item.',
    'references_to_desc' => 'Shown below are all the known pages in the system that link to this item.',
];
