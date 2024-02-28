<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Beállítások',
    'settings_save' => 'Beállítások mentése',
    'system_version' => 'Rendszerverzió',
    'categories' => 'Kategóriák',

    // App Settings
    'app_customization' => 'Személyre szabás',
    'app_features_security' => 'Jellemzők és biztonság',
    'app_name' => 'Alkalmazás neve',
    'app_name_desc' => 'Ez a név meg fog jelenni a fejlécben és minden a rendszer által küldött emailben.',
    'app_name_header' => 'Név mutatása a fejlécben',
    'app_public_access' => 'Nyilvános hozzáférés',
    'app_public_access_desc' => 'Ha engedélyezett, a nem bejelentkezett felhasználók is hozzá tudnak férni a BookStack példány tartalmaihoz.',
    'app_public_access_desc_guest' => 'A nyilvános látogatók hozzáférése a "Guest" felhasználón keresztül irányítható.',
    'app_public_access_toggle' => 'Nyilvános hozzáférés engedélyezése',
    'app_public_viewing' => 'Nyilvános megtekintés engedélyezve?',
    'app_secure_images' => 'Magasabb biztonságú képfeltöltés',
    'app_secure_images_toggle' => 'Magasabb biztonságú képfeltöltés engedélyezése',
    'app_secure_images_desc' => 'Teljesítmény optimalizálási okokból minden kép nyilvános. Ez a beállítás egy véletlenszerű, nehezen kitalálható karakterláncot illeszt a képek útvonalának elejére. Meg kell győződni róla, hogy a könnyű hozzáférés megakadályozása érdekében a könyvtár indexek nincsenek engedélyezve.',
    'app_default_editor' => 'Alapértelmezett  oldal szerkesztő',
    'app_default_editor_desc' => 'Válassza ki, hogy alapértelmezés szerint melyik szerkesztőt szeretné használni az új oldalak szerkesztésekor. Ezt felülírhatja oldalszintű szinten, amennyiben az engedélyek lehetővé teszik.',
    'app_custom_html' => 'Egyéni HTML fejléc tartalom',
    'app_custom_html_desc' => 'Az itt hozzáadott bármilyen tartalom be lesz illesztve minden oldal <head> szekciójának aljára. Ez hasznos a stílusok felülírásához van analitikai kódok hozzáadásához.',
    'app_custom_html_disabled_notice' => 'Az egyéni HTML fejléc tartalom le van tiltva ezen a beállítási oldalon, hogy az esetleg hibásan megadott módosításokat vissza lehessen állítani.',
    'app_logo' => 'Alkalmazás logó',
    'app_logo_desc' => 'Ez az alkalmazás fejléc sávjában van használva többek között. Ennek a képnek 86 képpont magasnak kell lennie. A nagy képek át lesznek méretezve.',
    'app_icon' => 'Alkalmazás ikon',
    'app_icon_desc' => 'Ez az ikon a böngésző fülekhez és a gyorsikonokhoz használatos. Ez egy 256 képpont négyzet alakú PNG képnek kell lennie.',
    'app_homepage' => 'Alkalmazás kezdőlapja',
    'app_homepage_desc' => 'A kezdőlapon az alapértelmezés szerinti nézet helyett megjelenő nézet kiválasztása. A kiválasztott oldalakon figyelmen kívül lesznek hagyva az oldal engedélyek.',
    'app_homepage_select' => 'Egy oldal kiválasztása',
    'app_footer_links' => 'Lábléc linkek',
    'app_footer_links_desc' => 'Adj hozzá linkeket a weboldal láblécéhez. Ezek a legtöbb oldalon megjelennek, beleértve azokat is, amelyekhez nincs szükség bejelentkezésre. Használhatsz egy "trans::<key>" címkét a rendszer által definiált fordítások használatához. Például: A "trans::common.privacy_policy" használata a lefordított szöveget ("Adatvédelmi Irányelvek") adja vissza, és a "trans::common.terms_of_service" a "Szolgáltatási feltételek" lefordított szöveget adja eredményül.',
    'app_footer_links_label' => 'Link címke',
    'app_footer_links_url' => 'Link URL',
    'app_footer_links_add' => 'Lábléc hivatkozás hozzáadása',
    'app_disable_comments' => 'Megjegyzések letiltása',
    'app_disable_comments_toggle' => 'Megjegyzések letiltása',
    'app_disable_comments_desc' => 'Megjegyzések letiltása az alkalmazás összes oldalán.<br>A már létező megjegyzések el lesznek rejtve.',

    // Color settings
    'color_scheme' => 'Alkalmazás színséma',
    'color_scheme_desc' => 'Állítsd be a színeket az alkalmazás felhasználói felületén. A színeket külön-külön lehet konfigurálni a sötét és a világos módokhoz, hogy a legjobban illeszkedjenek a témához, és biztosítsák az olvashatóságot.',
    'ui_colors_desc' => 'Állítsa be az alkalmazás elsődleges színét és alapértelmezett hivatkozási színét. Az elsődleges színt főként a fejléc szalaghirdetéséhez, a gombokhoz és a felület díszítéséhez használják. Az alapértelmezett hivatkozásszín a szöveges hivatkozásokhoz és műveletekhez használatos, mind az írott tartalomban, mind az alkalmazás felületén.',
    'app_color' => 'Elsődleges szín',
    'link_color' => 'Alapértelmezett link szín',
    'content_colors_desc' => 'Beállítja az elemek színét az oldalszervezési hierarchiában. Az olvashatóság szempontjából javasolt az alapértelmezés szerinti színhez hasonló fényerősséget választani.',
    'bookshelf_color' => 'Polc színe',
    'book_color' => 'Könyv színe',
    'chapter_color' => 'Fejezet színe',
    'page_color' => 'Oldal színe',
    'page_draft_color' => 'Oldalvázlat színe',

    // Registration Settings
    'reg_settings' => 'Regisztráció',
    'reg_enable' => 'Regisztráció engedélyezése',
    'reg_enable_toggle' => 'Regisztráció engedélyezése',
    'reg_enable_desc' => 'Ha a regisztráció engedélyezett, akkor a felhasználó képes lesz bejelentkezni mint az alkalmazás egy felhasználója. Regisztráció után egy egyszerű, alapértelmezés szerinti felhasználói szerepkör lesz hozzárendelve.',
    'reg_default_role' => 'Regisztráció utáni alapértelmezett felhasználói szerepkör',
    'reg_enable_external_warning' => 'A fenti beállítási lehetőség nincs használatban, ha külső LDAP vagy SAML hitelesítés aktív. A nem létező tagok felhasználói fiókjai automatikusan létrejönnek ha a használatban lévő külső rendszeren sikeres a hitelesítés.',
    'reg_email_confirmation' => 'Email megerősítés',
    'reg_email_confirmation_toggle' => 'Email megerősítés szükséges',
    'reg_confirm_email_desc' => 'Ha a tartomány korlátozás be van állítva, akkor email megerősítés szükséges és ez a beállítás figyelmen kívül lesz hagyva.',
    'reg_confirm_restrict_domain' => 'Tartomány korlátozás',
    'reg_confirm_restrict_domain_desc' => 'Azoknak az email tartományoknak a vesszővel elválasztott listája, melyekre a regisztráció korlátozva lesz. A felhasználók egy emailt fognak kapni, hogy megerősítsék az email címüket mielőtt használni kezdhetnék az alkalmazást.<br>Fontos tudni, hogy a felhasználók a sikeres regisztráció után megváltoztathatják az email címüket.',
    'reg_confirm_restrict_domain_placeholder' => 'Nincs beállítva korlátozás',

    // Maintenance settings
    'maint' => 'Karbantartás',
    'maint_image_cleanup' => 'Képek tisztítása',
    'maint_image_cleanup_desc' => 'Végigolvassa az oldalakat és a tartalmak változatait, hogy leellenőrizze jelenleg mely képek és rajzok vannak használatban, és mely képek szerepelnek többször. A futtatása előtt feltétlen készíteni kell egy teljes adatbázis és lemezkép mentést.',
    'maint_delete_images_only_in_revisions' => 'Törölje azokat a képeket is, amelyek csak a régi oldalverziókban léteznek',
    'maint_image_cleanup_run' => 'Tisztítás futtatása',
    'maint_image_cleanup_warning' => ':count potenciálisan nem használt képet találtam. Biztosan törölhetőek ezek a képek?',
    'maint_image_cleanup_success' => ':count potenciálisan nem használt kép megtalálva és törölve!',
    'maint_image_cleanup_nothing_found' => 'Nincsenek nem használt képek, semmi sem lett törölve!',
    'maint_send_test_email' => 'Teszt e-mail küldése',
    'maint_send_test_email_desc' => 'Ez elküld egy teszt emailt a profilban megadott email címre.',
    'maint_send_test_email_run' => 'Teszt e-mail küldése',
    'maint_send_test_email_success' => 'Email elküldve :address címre',
    'maint_send_test_email_mail_subject' => 'Teszt e-mail',
    'maint_send_test_email_mail_greeting' => 'Az email kézbesítés működőképesnek tűnik!',
    'maint_send_test_email_mail_text' => 'Gratulálunk! Mivel ez az email figyelmeztetés megérkezett az email beállítások megfelelőek.',
    'maint_recycle_bin_desc' => 'A törölt polcok, könyvek, fejezetek és oldalak a lomtárba kerülnek, így visszaállíthatók vagy véglegesen törölhetők. A rendszer konfigurációtól függően egy idő után a lomtárban lévő régebbi elemek automatikusan eltávolíthatók.',
    'maint_recycle_bin_open' => 'Lomtár megnyitása',
    'maint_regen_references' => 'Referenciák újragenerálása',
    'maint_regen_references_desc' => 'Ez a művelet újraépíti az adatbázison belüli elemek közötti hivatkozási indexet. Ez általában automatikusan történik, de ez a művelet hasznos lehet régi vagy nem hivatalos módszerekkel hozzáadott tartalom indexeléséhez.',
    'maint_regen_references_success' => 'A referenciaindex újragenerálásra került!',
    'maint_timeout_command_note' => 'Megjegyzés: Ennek a műveletnek a futtatása időbe telhet, ami bizonyos webes környezetekben időtúllépési problémákhoz vezethet. Alternatív megoldásként ezt a műveletet terminálparancs segítségével is végrehajthatja.',

    // Recycle Bin
    'recycle_bin' => 'Lomtár',
    'recycle_bin_desc' => 'Itt visszaállíthatja a törölt elemeket, vagy dönthet úgy, hogy véglegesen eltávolítja őket a rendszerből. Ez a lista nem szűrhető, ellentétben a rendszer hasonló tevékenységlistáival, ahol engedélyszűrőket alkalmaznak.',
    'recycle_bin_deleted_item' => 'Törölt elem',
    'recycle_bin_deleted_parent' => 'Szülő',
    'recycle_bin_deleted_by' => 'Törölte',
    'recycle_bin_deleted_at' => 'Törlés ideje',
    'recycle_bin_permanently_delete' => 'Végleges törlés',
    'recycle_bin_restore' => 'Visszaállítás',
    'recycle_bin_contents_empty' => 'A lomtár jelenleg üres',
    'recycle_bin_empty' => 'Lomtár kiürítése',
    'recycle_bin_empty_confirm' => 'Ezzel véglegesen megsemmisíti a lomtárban lévő összes elemet, beleértve az egyes tételekben található tartalmat is. Biztos benne, hogy ki akarja üríteni a lomtárat?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item from the system, along with any child elements listed below, and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Megsemmisítendő elemek',
    'recycle_bin_restore_list' => 'Visszaállítandó elemek',
    'recycle_bin_restore_confirm' => 'Ez a művelet visszaállítja a törölt elemet, beleértve az utódelemeket is, az eredeti helyükre. Ha az eredeti helyet azóta törölték, és most a lomtárban van, akkor a szülőelemet is vissza kell állítani.',
    'recycle_bin_restore_deleted_parent' => 'Ennek az elemnek a szülője is törölve lett. Ezek mindaddig törölve maradnak, amíg az adott szülőt is vissza nem állítják.',
    'recycle_bin_restore_parent' => 'Szűlő visszaállítása',
    'recycle_bin_destroy_notification' => 'Összesen :count elemet törölt a lomtárból.',
    'recycle_bin_restore_notification' => 'Összesen :count elemet helyreállítottak a lomtárból.',

    // Audit Log
    'audit' => 'Audit napló',
    'audit_desc' => 'Ez a napló a rendszerben nyomon követett tevékenységek listáját jeleníti meg. Ez a lista nem szűrhető, ellentétben a rendszer hasonló tevékenységlistáival, ahol engedélyszűrőket alkalmaznak.',
    'audit_event_filter' => 'Eseményszűrő',
    'audit_event_filter_no_filter' => 'Nincs szűrő',
    'audit_deleted_item' => 'Törölt elem',
    'audit_deleted_item_name' => 'Név: :name',
    'audit_table_user' => 'Felhasználó',
    'audit_table_event' => 'Esemény',
    'audit_table_related' => 'Kapcsolódó elem vagy részlet',
    'audit_table_ip' => 'IP Cím',
    'audit_table_date' => 'Tevékenység időpontja',
    'audit_date_from' => 'Kezdő dátum',
    'audit_date_to' => 'Végdátum',

    // Role Settings
    'roles' => 'Szerepkörök',
    'role_user_roles' => 'Felhasználói szerepkörök',
    'roles_index_desc' => 'A szerepkörök a felhasználók csoportosítására és rendszerengedélyek biztosítására szolgálnak tagjaiknak. Ha egy felhasználó több szerepkör tagja, a megadott jogosultságok halmozódnak, és a felhasználó örökli az összes képességet.',
    'roles_x_users_assigned' => ':count hozzárendelt felhasználó|:count hozzárendelt felhasználó',
    'roles_x_permissions_provided' => ':count jogosultság|:count jogosultság',
    'roles_assigned_users' => 'Hozzárendelt felhasználók',
    'roles_permissions_provided' => 'Megadott jogosultságok',
    'role_create' => 'Új szerepkör létrehozása',
    'role_delete' => 'Szerepkör törlése',
    'role_delete_confirm' => 'Ez törölni fogja \':roleName\' szerepkört.',
    'role_delete_users_assigned' => 'Ehhez a szerepkörhöz :userCount felhasználó van hozzárendelve. Ha a felhasználókat át kell helyezni ebből a szerepkörből, akkor ki kell választani egy új szerepkört.',
    'role_delete_no_migration' => "Nincs felhasználó áthelyezés",
    'role_delete_sure' => 'Biztosan törölhető ez a szerepkör?',
    'role_edit' => 'Szerepkör szerkesztése',
    'role_details' => 'Szerepkör részletei',
    'role_name' => 'Szerepkör neve',
    'role_desc' => 'Szerepkör rövid leírása',
    'role_mfa_enforced' => 'Kétlépcsős hitelesítés megkövetelése',
    'role_external_auth_id' => 'Külső hitelesítés azonosítók',
    'role_system' => 'Rendszer jogosultságok',
    'role_manage_users' => 'Felhasználók kezelése',
    'role_manage_roles' => 'Szerepkörök és szerepkör engedélyek kezelése',
    'role_manage_entity_permissions' => 'Minden könyv, fejezet és oldalengedély kezelése',
    'role_manage_own_entity_permissions' => 'Saját könyv, fejezet és oldalak engedélyeinek kezelése',
    'role_manage_page_templates' => 'Oldalsablonok kezelése',
    'role_access_api' => 'Hozzáférés a rendszer API-hoz',
    'role_manage_settings' => 'Alkalmazás beállításainak kezelése',
    'role_export_content' => 'Tartalom exportálása',
    'role_editor_change' => 'Oldalszerkesztő módosítása',
    'role_notifications' => 'Értesítések fogadása és kezelése',
    'role_asset' => 'Eszköz jogosultságok',
    'roles_system_warning' => 'Ne feledje, hogy a fenti három engedély bármelyikéhez való hozzáférés lehetővé teszi a felhasználó számára, hogy módosítsa saját vagy a rendszerben mások jogosultságait. Csak megbízható felhasználókhoz rendeljen szerepeket ezekkel az engedélyekkel.',
    'role_asset_desc' => 'Ezek a jogosultságok vezérlik az alapértelmezés szerinti hozzáférést a rendszerben található eszközökhöz. A könyvek, fejezetek és oldalak jogosultságai felülírják ezeket a jogosultságokat.',
    'role_asset_admins' => 'Az adminisztrátorok automatikusan hozzáférést kapnak minden tartalomhoz, de ezek a beállítások megjeleníthetnek vagy elrejthetnek felhasználói felület beállításokat.',
    'role_asset_image_view_note' => 'Ez a képkezelőn belüli láthatóságra vonatkozik. A feltöltött képfájlok tényleges elérése a rendszerkép tárolási beállításától függ.',
    'role_all' => 'Összes',
    'role_own' => 'Saját',
    'role_controlled_by_asset' => 'Az általuk feltöltött eszköz által ellenőrzött',
    'role_save' => 'Szerepkör mentése',
    'role_users' => 'Felhasználók ebben a szerepkörben',
    'role_users_none' => 'Jelenleg nincsenek felhasználók hozzárendelve ehhez a szerepkörhöz',

    // Users
    'users' => 'Felhasználók',
    'users_index_desc' => 'Egyéni felhasználói fiókok létrehozása és kezelése a rendszeren belül. A felhasználói fiókok a bejelentkezéshez, valamint a tartalom és tevékenység hozzárendeléséhez használatosak. A hozzáférési engedélyek elsősorban szerepalapúak, de a felhasználói tartalmak tulajdonlása – többek között – befolyásolhatja az engedélyeket és a hozzáférést.',
    'user_profile' => 'Felhasználói profil',
    'users_add_new' => 'Új felhasználó hozzáadása',
    'users_search' => 'Felhasználók keresése',
    'users_latest_activity' => 'Legújabb tevékenység',
    'users_details' => 'Felhasználó részletei',
    'users_details_desc' => 'Egy megjelenítendő név és email cím beállítása ennek a felhasználónak. Az email cím az alkalmazásba történő bejelentkezéshez lesz használva.',
    'users_details_desc_no_email' => 'Egy megjelenítendő név beállítása ennek a felhasználónak amiről mások felismerik.',
    'users_role' => 'Felhasználói szerepkörök',
    'users_role_desc' => 'A felhasználó melyik szerepkörhöz lesz rendelve. Ha a felhasználó több szerepkörhöz van rendelve, akkor ezeknek a szerepköröknek a jogosultságai összeadódnak, és a a felhasználó a hozzárendelt szerepkörök minden képességét megkapja.',
    'users_password' => 'Felhasználó jelszava',
    'users_password_desc' => 'Az alkalmazásba bejelentkezéshez használható jelszó beállítása. Legalább 8 karakter hosszúnak kell lennie.',
    'users_send_invite_text' => 'Lehetséges egy meghívó emailt küldeni ennek a felhasználónak ami lehetővé teszi, hogy beállíthassa a saját jelszavát. Máskülönben a jelszót az erre jogosult felhasználónak kell beállítania.',
    'users_send_invite_option' => 'Felhasználó meghívó levél küldése',
    'users_external_auth_id' => 'Külső hitelesítés azonosítója',
    'users_external_auth_id_desc' => 'Ha külső hitelesítési rendszer van használatban (például SAML2, OIDC vagy LDAP), ez az az azonosító, amely a BookStack felhasználót a hitelesítési rendszerfiókhoz kapcsolja. Ha az alapértelmezett e-mail alapú hitelesítést használja, figyelmen kívül hagyhatja ezt a mezőt.',
    'users_password_warning' => 'Csak akkor töltse ki az alábbi mezőt, ha módosítani szeretné ennek a felhasználónak a jelszavát.',
    'users_system_public' => 'Ez a felhasználó bármelyik, a példányt megtekintő felhasználót képviseli. Nem lehet vele bejelentkezni de automatikusan hozzá lesz rendelve.',
    'users_delete' => 'Felhasználó törlése',
    'users_delete_named' => ':userName felhasználó törlése',
    'users_delete_warning' => '\':userName\' felhasználó teljesen törölve lesz a rendszerből.',
    'users_delete_confirm' => 'Biztosan törölhető ez a felhasználó?',
    'users_migrate_ownership' => 'Tulajdonjog átruházása',
    'users_migrate_ownership_desc' => 'Válasszon itt egy felhasználót, ha azt szeretné, hogy egy másik felhasználó legyen a tulajdonosa az összes, jelenleg a felhasználó tulajdonában lévő elemnek.',
    'users_none_selected' => 'Nincs felhasználó kiválasztva',
    'users_edit' => 'Felhasználó szerkesztése',
    'users_edit_profile' => 'Profil szerkesztése',
    'users_avatar' => 'Avatar használata',
    'users_avatar_desc' => 'A felhasználót ábrázoló kép kiválasztása. Kb. 256px méretű négyzetes képnek kell lennie.',
    'users_preferred_language' => 'Előnyben részesített nyelv',
    'users_preferred_language_desc' => 'Ez a beállítás megváltoztatja az alkalmazás felhasználói felületén használt nyelvet. Nincs hatása a felhasználók által létrehozott tartalomra.',
    'users_social_accounts' => 'Közösségi fiókok',
    'users_social_accounts_desc' => 'Tekintse meg a felhasználó csatlakoztatott közösségi fiókjainak állapotát. A közösségi fiókok az elsődleges hitelesítési rendszer mellett használhatók a rendszerhez való hozzáféréshez.',
    'users_social_accounts_info' => 'Itt lehet egyéb fiókokat hozzákapcsolni a gyorsabb és könnyebb bejelentkezés érdekében. Itt olyan fiókot lehet lecsatlakoztatni, melynek korábban nem volt engedélyezett hozzáférése. Visszavonja a hozzáférést a csatlakoztatott szociális fiók profilbeállításaiból.',
    'users_social_connect' => 'Fiók csatlakoztatása',
    'users_social_disconnect' => 'Fiók lecsatlakoztatása',
    'users_social_status_connected' => 'Csatlakozva',
    'users_social_status_disconnected' => 'Lecsatlakozva',
    'users_social_connected' => ':socialAccount fiók sikeresen csatlakoztatva a profilhoz.',
    'users_social_disconnected' => ':socialAccount fiók sikeresen lecsatlakoztatva a profilról.',
    'users_api_tokens' => 'API vezérjelek',
    'users_api_tokens_desc' => 'A BookStack REST API-val történő hitelesítéshez használt hozzáférési token létrehozása és kezelése. Az API engedélyeit azon a felhasználón keresztül kezelik, akihez a token tartozik.',
    'users_api_tokens_none' => 'Ehhez a felhasználóhoz nincsenek létrehozva API vezérjelek',
    'users_api_tokens_create' => 'Vezérjel létrehozása',
    'users_api_tokens_expires' => 'Lejárat',
    'users_api_tokens_docs' => 'API dokumentáció',
    'users_mfa' => 'Többfaktoros hitelesítés',
    'users_mfa_desc' => 'Állítsa be a többlépcsős azonosítást egy extra biztonsági rétegként a felhasználói fiókjához.',
    'users_mfa_x_methods' => ':count metódus konfigurálva|:count metódus konfigurálva',
    'users_mfa_configure' => 'Módszer beállítása',

    // API Tokens
    'user_api_token_create' => 'API vezérjel létrehozása',
    'user_api_token_name' => 'Név',
    'user_api_token_name_desc' => 'Adjon a tokennek egy olvasható nevet, hogy a jövőben emlékeztessen a tervezett céljára.',
    'user_api_token_expiry' => 'Lejárati dátum',
    'user_api_token_expiry_desc' => 'Dátum megadása ameddig a vezérjel érvényes. Ez után a dátum után az ezzel a vezérjellel történő kérések nem fognak működni. Üresen hagyva a lejárati idő 100 évre lesz beállítva.',
    'user_api_token_create_secret_message' => 'Közvetlenül a token létrehozása után egy „Token ID” és „Token Secret” generálódik és jelenik meg. A Secret csak egyszer jelenik meg, ezért a folytatás előtt másolja át az értéket egy biztonságos helyre.',
    'user_api_token' => 'API vezérjel',
    'user_api_token_id' => 'Vezérjel azonosító',
    'user_api_token_id_desc' => 'Ez egy nem szerkeszthető, a rendszer által létrehozott azonosító ehhez a vezérjelhez amire API kérésekben lehet szükség.',
    'user_api_token_secret' => 'Vezérjel titkos kódja',
    'user_api_token_secret_desc' => 'Ez egy rendszer által generált "secret" ehhez a tokenhez, amelyet meg kell adni az API-kérésekben. Ez csak most jelenik meg, ezért másolja ezt az értéket egy biztonságos helyre.',
    'user_api_token_created' => 'Vezérjel létrehozva :timeAgo',
    'user_api_token_updated' => 'Vezérjel frissítve :timeAgo',
    'user_api_token_delete' => 'Vezérjel törlése',
    'user_api_token_delete_warning' => '\':tokenName\' nevű API vezérjel teljesen törölve lesz a rendszerből.',
    'user_api_token_delete_confirm' => 'Biztosan törölhető ez az API vezérjel?',

    // Webhooks
    'webhooks' => 'Webhook-ok',
    'webhooks_index_desc' => 'A webhookok segítségével adatokat küldhetünk külső URL-ekre, amikor bizonyos műveletek és események történnek a rendszeren belül, ami lehetővé teszi az eseményalapú integrációt külső platformokkal, például üzenetküldő vagy értesítési rendszerekkel.',
    'webhooks_x_trigger_events' => ':count kiváltó esemény|:count kiváltó esemény',
    'webhooks_create' => 'Új webhook létrehozása',
    'webhooks_none_created' => 'Még nincs létrehozva egy webhook sem.',
    'webhooks_edit' => 'Webhook szerkesztése',
    'webhooks_save' => 'Webhook mentése',
    'webhooks_details' => 'Webhook részletei',
    'webhooks_details_desc' => 'Adjon meg egy felhasználóbarát nevet és egy POST-végpontot a webhook-adatok elküldésének helyeként.',
    'webhooks_events' => 'Webhook események',
    'webhooks_events_desc' => 'Jelölje ki az összes eseményt, amely kiváltja a webhook meghívását.',
    'webhooks_events_warning' => 'Ne feledje, hogy ezek az események az összes kiválasztott eseménynél aktiválódnak, még akkor is, ha egyéni engedélyeket alkalmaznak. Győződjön meg arról, hogy a webhook használata nem tesz közzé bizalmas tartalmat.',
    'webhooks_events_all' => 'Minden rendszeresemény',
    'webhooks_name' => 'Webhook neve',
    'webhooks_timeout' => 'Webhook kérés időtúllépése (másodperc)',
    'webhooks_endpoint' => 'Webhook végpont',
    'webhooks_active' => 'Webhook aktív',
    'webhook_events_table_header' => 'Események',
    'webhooks_delete' => 'Webhook törlése',
    'webhooks_delete_warning' => 'Ezzel a \':webhookName\' nevű webhookot teljesen törli a rendszerből.',
    'webhooks_delete_confirm' => 'Biztosan törli ezt a webhookot?',
    'webhooks_format_example' => 'Webhook formátum példa',
    'webhooks_format_example_desc' => 'A Webhook-adatok POST-kérésként kerülnek elküldésre a konfigurált végponthoz JSON-ként az alábbi formátumban. A "related_item" és az "url" tulajdonság nem kötelező, és az aktivált esemény típusától függ.',
    'webhooks_status' => 'Webhook állapota',
    'webhooks_last_called' => 'Utolsó hívás:',
    'webhooks_last_errored' => 'Utolsó hiba:',
    'webhooks_last_error_message' => 'Utolsó hibaüzenet:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fi' => 'Suomi',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nb' => 'Norsk (Bokmål)',
        'nn' => 'Nynorsk',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'uz' => 'O‘zbekcha',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
