<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Hiljuti lisatud',
    'recently_created_pages' => 'Hiljuti lisatud lehed',
    'recently_updated_pages' => 'Hiljuti muudetud lehed',
    'recently_created_chapters' => 'Hiljuti lisatud peatükid',
    'recently_created_books' => 'Hiljuti lisatud raamatud',
    'recently_created_shelves' => 'Hiljuti lisatud riiulid',
    'recently_update' => 'Hiljuti muudetud',
    'recently_viewed' => 'Viimati vaadatud',
    'recent_activity' => 'Hiljutised tegevused',
    'create_now' => 'Lisa uus',
    'revisions' => 'Redaktsioonid',
    'meta_revision' => 'Redaktsioon #:revisionCount',
    'meta_created' => 'Lisatud :timeLength',
    'meta_created_name' => 'Lisatud :timeLength kasutaja :user poolt',
    'meta_updated' => 'Muudetud :timeLength',
    'meta_updated_name' => 'Muudetud :timeLength kasutaja :user poolt',
    'meta_owned_name' => 'Kuulub kasutajale :user',
    'meta_reference_page_count' => 'Viidatud :count lehel|Viidatud :count lehel',
    'entity_select' => 'Objekti valik',
    'entity_select_lack_permission' => 'Sul pole õiguseid selle objekti valimiseks',
    'images' => 'Pildid',
    'my_recent_drafts' => 'Minu hiljutised mustandid',
    'my_recently_viewed' => 'Minu viimati vaadatud',
    'my_most_viewed_favourites' => 'Minu enim vaadatud lemmikud',
    'my_favourites' => 'Minu lemmikud',
    'no_pages_viewed' => 'Sa pole veel ühtegi lehte vaadanud',
    'no_pages_recently_created' => 'Hiljuti pole ühtegi lehte lisatud',
    'no_pages_recently_updated' => 'Hiljuti pole ühtegi lehte muudetud',
    'export' => 'Ekspordi',
    'export_html' => 'HTML-fail',
    'export_pdf' => 'PDF fail',
    'export_text' => 'Tekstifail',
    'export_md' => 'Markdown fail',

    // Permissions and restrictions
    'permissions' => 'Õigused',
    'permissions_desc' => 'Sea siin õigused, et kirjutada üle rollide vaikimisi õigused.',
    'permissions_book_cascade' => 'Raamatutele seatud õigused rakenduvad automaatselt peatükkidele ja lehtedele, kui neile pole seatud oma õiguseid.',
    'permissions_chapter_cascade' => 'Peatükkidele seatud õigused rakenduvad automaatselt lehtedele, kui neile pole seatud oma õiguseid.',
    'permissions_save' => 'Salvesta õigused',
    'permissions_owner' => 'Omanik',
    'permissions_role_everyone_else' => 'Kõik muud',
    'permissions_role_everyone_else_desc' => 'Sea õigused kõigile rollidele, mida pole üle kirjutatud.',
    'permissions_role_override' => 'Kirjuta rolli õigused üle',
    'permissions_inherit_defaults' => 'Päri vaikimisi seaded',

    // Search
    'search_results' => 'Otsingutulemused',
    'search_total_results_found' => 'leitud :count vaste|leitud :count vastet',
    'search_clear' => 'Tühjenda otsing',
    'search_no_pages' => 'Otsing ei leidnud ühtegi lehte',
    'search_for_term' => 'Otsi terminit :term',
    'search_more' => 'Rohkem tulemusi',
    'search_advanced' => 'Täpsem otsing',
    'search_terms' => 'Otsinguterminid',
    'search_content_type' => 'Sisu tüüp',
    'search_exact_matches' => 'Täpsed vasted',
    'search_tags' => 'Sildi otsing',
    'search_options' => 'Valikud',
    'search_viewed_by_me' => 'Minu vaadatud',
    'search_not_viewed_by_me' => 'Minu vaatamata',
    'search_permissions_set' => 'Õigused seatud',
    'search_created_by_me' => 'Minu lisatud',
    'search_updated_by_me' => 'Minu muudetud',
    'search_owned_by_me' => 'Minu omad',
    'search_date_options' => 'Kuupäeva valikud',
    'search_updated_before' => 'Muudetud enne kui',
    'search_updated_after' => 'Muudetud hiljem kui',
    'search_created_before' => 'Lisatud enne kui',
    'search_created_after' => 'Lisatud hiljem kui',
    'search_set_date' => 'Vali kuupäev',
    'search_update' => 'Värskenda otsingutulemusi',

    // Shelves
    'shelf' => 'Riiul',
    'shelves' => 'Riiulid',
    'x_shelves' => ':count riiul|:count riiulit',
    'shelves_empty' => 'Ühtegi riiulit pole lisatud',
    'shelves_create' => 'Lisa uus riiul',
    'shelves_popular' => 'Populaarsed riiulid',
    'shelves_new' => 'Uued riiulid',
    'shelves_new_action' => 'Uus riiul',
    'shelves_popular_empty' => 'Siia tulevad kõige populaarsemad riiulid.',
    'shelves_new_empty' => 'Siia tulevad hiljuti lisatud riiulid.',
    'shelves_save' => 'Salvesta riiul',
    'shelves_books' => 'Raamatud sellel riiulil',
    'shelves_add_books' => 'Lisa sellele riiulile raamatuid',
    'shelves_drag_books' => 'Lohista raamatuid siia, et neid sellele riiulile lisada',
    'shelves_empty_contents' => 'Sellel riiulil ei ole ühtegi raamatut',
    'shelves_edit_and_assign' => 'Muuda riiulit, et siia raamatuid lisada',
    'shelves_edit_named' => 'Muuda riiulit :name',
    'shelves_edit' => 'Muuda riiulit',
    'shelves_delete' => 'Kustuta riiul',
    'shelves_delete_named' => 'Kustuta riiul :name',
    'shelves_delete_explain' => "See kustutab riiuli nimega ':name'. Raamatuid, mis on sellel riiulil, ei kustutata.",
    'shelves_delete_confirmation' => 'Kas oled kindel, et soovid selle riiuli kustutada?',
    'shelves_permissions' => 'Riiuli õigused',
    'shelves_permissions_updated' => 'Riiuli õigused muudetud',
    'shelves_permissions_active' => 'Riiuli õigused on aktiivsed',
    'shelves_permissions_cascade_warning' => 'Riiuli õigused ei rakendu automaatselt sellel olevatele raamatutele, kuna raamat võib olla korraga mitmel riiulil. Alloleva valiku abil saab aga riiuli õigused kopeerida raamatutele.',
    'shelves_permissions_create' => 'Shelf create permissions are only used for copying permissions to child books using the action below. They do not control the ability to create books.',
    'shelves_copy_permissions_to_books' => 'Kopeeri õigused raamatutele',
    'shelves_copy_permissions' => 'Kopeeri õigused',
    'shelves_copy_permissions_explain' => 'See rakendab riiuli praegused õigused kõigile sellel olevatele raamatutele. Enne jätkamist veendu, et riiuli õiguste muudatused oleks salvestatud.',
    'shelves_copy_permission_success' => 'Riiuli õigused kopeeritud :count raamatule',

    // Books
    'book' => 'Raamat',
    'books' => 'Raamatud',
    'x_books' => ':count raamat|:count raamatut',
    'books_empty' => 'Ühtegi raamatut pole lisatud',
    'books_popular' => 'Populaarsed raamatud',
    'books_recent' => 'Hiljutised raamatud',
    'books_new' => 'Uued raamatud',
    'books_new_action' => 'Uus raamat',
    'books_popular_empty' => 'Siia tulevad kõige populaarsemad raamatud.',
    'books_new_empty' => 'Siia tulevad hiljuti lisatud raamatud.',
    'books_create' => 'Lisa uus raamat',
    'books_delete' => 'Kustuta raamat',
    'books_delete_named' => 'Kustuta raamat :bookName',
    'books_delete_explain' => 'See kustutab raamatu nimega \':bookName\'. Kõik lehed ja peatükid kustutatakse samuti.',
    'books_delete_confirmation' => 'Kas oled kindel, et soovid selle raamatu kustutada?',
    'books_edit' => 'Muuda raamatut',
    'books_edit_named' => 'Muuda raamatut :bookName',
    'books_form_book_name' => 'Raamatu pealkiri',
    'books_save' => 'Salvesta raamat',
    'books_permissions' => 'Raamatu õigused',
    'books_permissions_updated' => 'Raamatu õigused muudetud',
    'books_empty_contents' => 'Ühtegi lehte ega peatükki pole lisatud.',
    'books_empty_create_page' => 'Lisa uus leht',
    'books_empty_sort_current_book' => 'Sorteeri raamat',
    'books_empty_add_chapter' => 'Lisa uus peatükk',
    'books_permissions_active' => 'Raamatu õigused on aktiivsed',
    'books_search_this' => 'Otsi sellest raamatust',
    'books_navigation' => 'Raamatu sisukord',
    'books_sort' => 'Sorteeri raamatu sisu',
    'books_sort_desc' => 'Liiguta peatükke ja lehti raamatu sisu ümber organiseerimiseks. Teisi raamatuid lisades saad peatükke ja lehti lihtsasti raamatute vahel liigutada.',
    'books_sort_named' => 'Sorteeri raamat :bookName',
    'books_sort_name' => 'Sorteeri nime järgi',
    'books_sort_created' => 'Sorteeri loomisaja järgi',
    'books_sort_updated' => 'Sorteeri muutmisaja järgi',
    'books_sort_chapters_first' => 'Peatükid eespool',
    'books_sort_chapters_last' => 'Peatükid tagapool',
    'books_sort_show_other' => 'Näita teisi raamatuid',
    'books_sort_save' => 'Salvesta uus järjekord',
    'books_sort_show_other_desc' => 'Lisa siia teisi raamatuid, et neid järjestamisel kasutada ja võimaldada raamatutevahelist organiseerimist.',
    'books_sort_move_up' => 'Liiguta üles',
    'books_sort_move_down' => 'Liiguta alla',
    'books_sort_move_prev_book' => 'Liiguta eelmisesse raamatusse',
    'books_sort_move_next_book' => 'Liiguta järgmisesse raamatusse',
    'books_sort_move_prev_chapter' => 'Liiguta eelmisesse peatükki',
    'books_sort_move_next_chapter' => 'Liiguta järgmisesse peatükki',
    'books_sort_move_book_start' => 'Liiguta raamatu algusesse',
    'books_sort_move_book_end' => 'Liiguta raamatu lõppu',
    'books_sort_move_before_chapter' => 'Liiguta peatüki ette',
    'books_sort_move_after_chapter' => 'Liiguta peatüki järele',
    'books_copy' => 'Kopeeri raamat',
    'books_copy_success' => 'Raamat on kopeeritud',

    // Chapters
    'chapter' => 'Peatükk',
    'chapters' => 'Peatükid',
    'x_chapters' => ':count peatükk|:count peatükki',
    'chapters_popular' => 'Populaarsed peatükid',
    'chapters_new' => 'Uus peatükk',
    'chapters_create' => 'Lisa uus peatükk',
    'chapters_delete' => 'Kustuta peatükk',
    'chapters_delete_named' => 'Kustuta peatükk :chapterName',
    'chapters_delete_explain' => 'See kustutab peatüki nimega \':chapterName\'. Kõik lehed selles peatükis kustutatakse samuti.',
    'chapters_delete_confirm' => 'Kas oled kindel, et soovid selle peatüki kustutada?',
    'chapters_edit' => 'Muuda peatükki',
    'chapters_edit_named' => 'Muuda peatükki :chapterName',
    'chapters_save' => 'Salvesta peatükk',
    'chapters_move' => 'Liiguta peatükk',
    'chapters_move_named' => 'Liiguta peatükk :chapterName',
    'chapters_copy' => 'Kopeeri peatükk',
    'chapters_copy_success' => 'Peatükk on kopeeritud',
    'chapters_permissions' => 'Peatüki õigused',
    'chapters_empty' => 'Selles peatükis ei ole lehti.',
    'chapters_permissions_active' => 'Peatüki õigused on aktiivsed',
    'chapters_permissions_success' => 'Peatüki õigused muudetud',
    'chapters_search_this' => 'Otsi sellest peatükist',
    'chapter_sort_book' => 'Sorteeri raamat',

    // Pages
    'page' => 'Leht',
    'pages' => 'Lehed',
    'x_pages' => ':count leht|:count lehte',
    'pages_popular' => 'Populaarsed lehed',
    'pages_new' => 'Uus leht',
    'pages_attachments' => 'Manused',
    'pages_navigation' => 'Lehe sisukord',
    'pages_delete' => 'Kustuta leht',
    'pages_delete_named' => 'Kustuta leht :pageName',
    'pages_delete_draft_named' => 'Kustuta mustand :pageName',
    'pages_delete_draft' => 'Kustuta mustand',
    'pages_delete_success' => 'Leht kustutatud',
    'pages_delete_draft_success' => 'Mustand kustutatud',
    'pages_delete_confirm' => 'Kas oled kindel, et soovid selle lehe kustutada?',
    'pages_delete_draft_confirm' => 'Kas oled kindel, et soovid selle mustandi kustutada?',
    'pages_editing_named' => 'Lehe :pageName muutmine',
    'pages_edit_draft_options' => 'Mustandi valikud',
    'pages_edit_save_draft' => 'Salvesta mustand',
    'pages_edit_draft' => 'Muuda mustandit',
    'pages_editing_draft' => 'Mustandi muutmine',
    'pages_editing_page' => 'Lehe muutmine',
    'pages_edit_draft_save_at' => 'Mustand salvestatud ',
    'pages_edit_delete_draft' => 'Kustuta mustand',
    'pages_edit_delete_draft_confirm' => 'Kas oled kindel, et soovid mustandi muudatused kustutada? Kõik viimasest salvestamisest saadik tehtud muudatused kaovad ning redaktorisse laetakse viimati salvestatud seis.',
    'pages_edit_discard_draft' => 'Loobu mustandist',
    'pages_edit_switch_to_markdown' => 'Kasuta Markdown redaktorit',
    'pages_edit_switch_to_markdown_clean' => '(Puhas sisu)',
    'pages_edit_switch_to_markdown_stable' => '(Stabiilne sisu)',
    'pages_edit_switch_to_wysiwyg' => 'Kasuta WYSIWYG redaktorit',
    'pages_edit_set_changelog' => 'Muudatuste logi',
    'pages_edit_enter_changelog_desc' => 'Sisesta tehtud muudatuste lühikirjeldus',
    'pages_edit_enter_changelog' => 'Salvesta muudatuste logi',
    'pages_editor_switch_title' => 'Vaheta redaktorit',
    'pages_editor_switch_are_you_sure' => 'Kas oled kindel, et soovid selle lehe redaktorit muuta?',
    'pages_editor_switch_consider_following' => 'Redaktori muutmisel pea meeles järgnevat:',
    'pages_editor_switch_consideration_a' => 'Pärast salvestamist kasutatakse valitud redaktorit ka tulevikus, sh. olukordades, kus ei pruugi olla võimalik redaktori tüüpi muuta.',
    'pages_editor_switch_consideration_b' => 'See võib teatud olukordades põhjustada detailide ja süntaksi kaotsiminekut.',
    'pages_editor_switch_consideration_c' => 'Viimasest salvestamisest saadik tehtud siltide ja muudatuste logi muudatused ei jää alles.',
    'pages_save' => 'Salvesta leht',
    'pages_title' => 'Lehe pealkiri',
    'pages_name' => 'Lehe nimetus',
    'pages_md_editor' => 'Redaktor',
    'pages_md_preview' => 'Eelvaade',
    'pages_md_insert_image' => 'Lisa pilt',
    'pages_md_insert_link' => 'Lisa viide',
    'pages_md_insert_drawing' => 'Lisa joonis',
    'pages_md_show_preview' => 'Näita eelvaadet',
    'pages_md_sync_scroll' => 'Sünkrooni eelvaate kerimine',
    'pages_drawing_unsaved' => 'Unsaved Drawing Found',
    'pages_drawing_unsaved_confirm' => 'Unsaved drawing data was found from a previous failed drawing save attempt. Would you like to restore and continue editing this unsaved drawing?',
    'pages_not_in_chapter' => 'Leht ei kuulu peatüki alla',
    'pages_move' => 'Liiguta leht',
    'pages_copy' => 'Kopeeri leht',
    'pages_copy_desination' => 'Kopeerimise sihtpunkt',
    'pages_copy_success' => 'Leht on kopeeritud',
    'pages_permissions' => 'Lehe õigused',
    'pages_permissions_success' => 'Lehe õigused muudetud',
    'pages_revision' => 'Redaktsioon',
    'pages_revisions' => 'Lehe redaktsioonid',
    'pages_revisions_desc' => 'Allpool on toodud kõik selle lehe eelmised redaktsioonid. Kui õigused lubavad, saad sa vanu redaktsioone vaadata, võrrelda ja taastada. Siin ei pruugi kajastuda lehe täielik ajalugu, kuna sõltuvalt süsteemi seadistusest võidakse vanu redaktsioone automaatselt kustutada.',
    'pages_revisions_named' => 'Lehe :pageName redaktsioonid',
    'pages_revision_named' => 'Lehe :pageName redaktsioon',
    'pages_revision_restored_from' => 'Taastatud redaktsioonist #:id; :summary',
    'pages_revisions_created_by' => 'Autor',
    'pages_revisions_date' => 'Redaktsiooni aeg',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Redaktsiooni number',
    'pages_revisions_numbered' => 'Redaktsioon #:id',
    'pages_revisions_numbered_changes' => 'Redaktsiooni #:id muudatused',
    'pages_revisions_editor' => 'Redaktori tüüp',
    'pages_revisions_changelog' => 'Muudatuste ajalugu',
    'pages_revisions_changes' => 'Muudatused',
    'pages_revisions_current' => 'Praegune versioon',
    'pages_revisions_preview' => 'Eelvaade',
    'pages_revisions_restore' => 'Taasta',
    'pages_revisions_none' => 'Sellel lehel ei ole redaktsioone',
    'pages_copy_link' => 'Kopeeri link',
    'pages_edit_content_link' => 'Hüppa redaktoris sektsioonini',
    'pages_pointer_enter_mode' => 'Enter section select mode',
    'pages_pointer_label' => 'Lehe sektsiooni valikud',
    'pages_pointer_permalink' => 'Page Section Permalink',
    'pages_pointer_include_tag' => 'Page Section Include Tag',
    'pages_pointer_toggle_link' => 'Permalink mode, Press to show include tag',
    'pages_pointer_toggle_include' => 'Include tag mode, Press to show permalink',
    'pages_permissions_active' => 'Lehe õigused on aktiivsed',
    'pages_initial_revision' => 'Esimene redaktsioon',
    'pages_references_update_revision' => 'Seesmiste linkide automaatne uuendamine',
    'pages_initial_name' => 'Uus leht',
    'pages_editing_draft_notification' => 'Sa muudad mustandit, mis salvestati viimati :timeDiff.',
    'pages_draft_edited_notification' => 'Seda lehte on sellest ajast saadid uuendatud. Soovitame mustandist loobuda.',
    'pages_draft_page_changed_since_creation' => 'Seda lehte on pärast mustandi loomist muudetud. Soovitame mustandi ära visata või olla hoolikas, et mitte lehe muudatusi üle kirjutada.',
    'pages_draft_edit_active' => [
        'start_a' => ':count kasutajat on selle lehe muutmist alustanud',
        'start_b' => ':userName alustas selle lehe muutmist',
        'time_a' => 'lehe viimasest muutmisest alates',
        'time_b' => 'viimase :minCount minuti jooksul',
        'message' => ':start :time. Ärge teineteise muudatusi üle kirjutage!',
    ],
    'pages_draft_discarded' => 'Mustand ära visatud! Redaktorisse laeti lehe värske sisu',
    'pages_draft_deleted' => 'Mustand kustutatud! Redaktorisse laeti lehe värske sisu',
    'pages_specific' => 'Spetsiifiline leht',
    'pages_is_template' => 'Lehe mall',

    // Editor Sidebar
    'page_tags' => 'Lehe sildid',
    'chapter_tags' => 'Peatüki sildid',
    'book_tags' => 'Raamatu sildid',
    'shelf_tags' => 'Riiuli sildid',
    'tag' => 'Silt',
    'tags' =>  'Sildid',
    'tags_index_desc' => 'Silte saab kasutada süsteemis oleva sisu paindlikuks kategoriseerimiseks. Siltidel saab olla nii võti kui väärtus, millest viimane on valikuline. Pärast määramist saab sisu otsida sildi nime ja väärtuse kaudu.',
    'tag_name' =>  'Sildi nimi',
    'tag_value' => 'Sildi väärtus (valikuline)',
    'tags_explain' => "Lisa silte, et sisu paremini organiseerida.\nVeel täpsemaks organiseerimiseks saad siltidele väärtuseid määrata.",
    'tags_add' => 'Lisa veel üks silt',
    'tags_remove' => 'Eemalda see silt',
    'tags_usages' => 'Siltide kasutus',
    'tags_assigned_pages' => 'Lisatud lehtedele',
    'tags_assigned_chapters' => 'Lisatud peatükkidele',
    'tags_assigned_books' => 'Lisatud raamatutele',
    'tags_assigned_shelves' => 'Lisatud riiulitele',
    'tags_x_unique_values' => ':count unikaalset',
    'tags_all_values' => 'Kõik väärtused',
    'tags_view_tags' => 'Vaata silte',
    'tags_view_existing_tags' => 'Vaata olemasolevaid silte',
    'tags_list_empty_hint' => 'Silte saab lisada lehe redaktori külgmenüü kaudu või raamatu, peatüki või riiuli andmeid muutes.',
    'attachments' => 'Manused',
    'attachments_explain' => 'Laadi üles faile või lisa linke, mida lehel kuvada. Need on nähtavad külgmenüüs.',
    'attachments_explain_instant_save' => 'Muudatused salvestatakse koheselt.',
    'attachments_upload' => 'Laadi fail üles',
    'attachments_link' => 'Lisa link',
    'attachments_upload_drop' => 'Saad ka faile siia lohistada, et neid manusena üles laadida.',
    'attachments_set_link' => 'Määra link',
    'attachments_delete' => 'Kas oled kindel, et soovid selle manuse kustutada?',
    'attachments_dropzone' => 'Lohista failid üleslaadimiseks siia',
    'attachments_no_files' => 'Üleslaaditud faile ei ole',
    'attachments_explain_link' => 'Faili üleslaadimise asemel saad lingi lisada. See võib viidata teisele lehele või failile kuskil pilves.',
    'attachments_link_name' => 'Lingi nimi',
    'attachment_link' => 'Manuse link',
    'attachments_link_url' => 'Link failile',
    'attachments_link_url_hint' => 'Lehekülje või faili URL',
    'attach' => 'Lisa',
    'attachments_insert_link' => 'Lisa manuse link lehele',
    'attachments_edit_file' => 'Muuda faili',
    'attachments_edit_file_name' => 'Faili nimi',
    'attachments_edit_drop_upload' => 'Manuse üle kirjutamiseks lohista failid või klõpsa siin',
    'attachments_order_updated' => 'Manuste järjekord muudetud',
    'attachments_updated_success' => 'Manuse andmed muudetud',
    'attachments_deleted' => 'Manus kustutatud',
    'attachments_file_uploaded' => 'Fail on üles laaditud',
    'attachments_file_updated' => 'Fail on muudetud',
    'attachments_link_attached' => 'Link on lehele lisatud',
    'templates' => 'Mallid',
    'templates_set_as_template' => 'Leht on mall',
    'templates_explain_set_as_template' => 'Sa saad määrata selle lehe malliks, nii et selle sisu saab kasutada uute lehtede lisamisel. Kui teistel kasutajatel on selle lehe vaatamiseks õigus, saavad ka nemad seda mallina kasutada.',
    'templates_replace_content' => 'Asenda lehe sisu',
    'templates_append_content' => 'Lisa lehe sisu järele',
    'templates_prepend_content' => 'Lisa lehe sisu ette',

    // Profile View
    'profile_user_for_x' => 'Kasutaja olnud :time',
    'profile_created_content' => 'Lisatud sisu',
    'profile_not_created_pages' => ':userName ei ole ühtegi lehte lisanud',
    'profile_not_created_chapters' => ':userName ei ole ühtegi peatükki lisanud',
    'profile_not_created_books' => ':userName ei ole ühtegi raamatut lisanud',
    'profile_not_created_shelves' => ':userName ei ole ühtegi riiulit lisanud',

    // Comments
    'comment' => 'Kommentaar',
    'comments' => 'Kommentaarid',
    'comment_add' => 'Lisa kommentaar',
    'comment_placeholder' => 'Jäta siia kommentaar',
    'comment_count' => '{0} Kommentaare pole|{1} 1 kommentaar|[2,*] :count kommentaari',
    'comment_save' => 'Salvesta kommentaar',
    'comment_new' => 'Uus kommentaar',
    'comment_created' => 'kommenteeris :createDiff',
    'comment_updated' => 'Muudetud :updateDiff :username poolt',
    'comment_updated_indicator' => 'Uuendatud',
    'comment_deleted_success' => 'Kommentaar kustutatud',
    'comment_created_success' => 'Kommentaar lisatud',
    'comment_updated_success' => 'Kommentaar muudetud',
    'comment_delete_confirm' => 'Kas oled kindel, et soovid selle kommentaari kustutada?',
    'comment_in_reply_to' => 'Vastus kommentaarile :commentId',
    'comment_editor_explain' => 'Here are the comments that have been left on this page. Comments can be added & managed when viewing the saved page.',

    // Revision
    'revision_delete_confirm' => 'Kas oled kindel, et soovid selle redaktsiooni kustutada?',
    'revision_restore_confirm' => 'Kas oled kindel, et soovid selle redaktsiooni taastada? Lehe praegune sisu asendatakse.',
    'revision_cannot_delete_latest' => 'Kõige viimast redaktsiooni ei saa kustutada.',

    // Copy view
    'copy_consider' => 'Sisu kopeerimisel pea järgnevat meeles.',
    'copy_consider_permissions' => 'Kohandatud õiguseid ei kopeerita.',
    'copy_consider_owner' => 'Sind määratakse kopeeritud sisu omanikuks.',
    'copy_consider_images' => 'Lehel olevaid pildifaile ei dubleerita. Pildid säilitavad viite lehele, millele nad algselt lisati.',
    'copy_consider_attachments' => 'Lehe manuseid ei kopeerita.',
    'copy_consider_access' => 'Asukoha, omaniku või õiguste muudatused võivad teha sisu kättesaadavaks neile, kellel varem sellele ligipääs puudus.',

    // Conversions
    'convert_to_shelf' => 'Muuda riiuliks',
    'convert_to_shelf_contents_desc' => 'Saad muuta selle raamatu uueks, sama sisuga riiuliks. Raamatu peatükid muudetakse uuteks raamatuteks. Kui raamat sisaldab lehti, mis ei kuulu ühegi peatüki alla, nimetatakse see raamat ümber ning see saab uue riiuli osana sisaldama neid lehti.',
    'convert_to_shelf_permissions_desc' => 'Raamatule määratud õigused kopeeritakse uuele riiulile ja kõigile uutele raamatutele, millel ei ole endal määratud õiguseid. Pane tähele, et riiulitele määratud õigused ei rakendu automaatselt sisule, nagu raamatute puhul.',
    'convert_book' => 'Muuda raamat',
    'convert_book_confirm' => 'Kas oled kindel, et soovid selle raamatu muuta?',
    'convert_undo_warning' => 'Seda ei saa lihtsasti tagasi võtta.',
    'convert_to_book' => 'Muuda raamatuks',
    'convert_to_book_desc' => 'Saad muuta selle peatüki uueks, sama sisuga raamatuks. Peatükile määratud õigused kopeeritakse uuele raamatule, aga olemasolevalt raamatult pärit õiguseid ei kopeerita, mis võib põhjustada muudatusi ligipääsudes.',
    'convert_chapter' => 'Muud peatükk',
    'convert_chapter_confirm' => 'Kas oled kindel, et soovid selle peatüki muuta?',

    // References
    'references' => 'Viited',
    'references_none' => 'Sellele objektile ei ole viiteid.',
    'references_to_desc' => 'Allpool on kõik teadaolevad lehed, mis sellele objektile viitavad.',

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
