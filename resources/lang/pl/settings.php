<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Ustawienia',
    'settings_save' => 'Zapisz ustawienia',
    'settings_save_success' => 'Ustawienia zapisane',

    // App Settings
    'app_customization' => 'Dostosowywanie',
    'app_features_security' => 'Funkcje i bezpieczeństwo',
    'app_name' => 'Nazwa aplikacji',
    'app_name_desc' => 'Ta nazwa jest wyświetlana w nagłówku i e-mailach.',
    'app_name_header' => 'Pokazać nazwę aplikacji w nagłówku?',
    'app_public_access' => 'Dostęp publiczny',
    'app_public_access_desc' => 'Włączenie tej opcji umożliwi niezalogowanym odwiedzającym dostęp do treści w Twojej instancji BookStack.',
    'app_public_access_desc_guest' => 'Dostęp dla niezalogowanych odwiedzających jest dostępny poprzez użytkownika "Guest".',
    'app_public_access_toggle' => 'Zezwalaj na dostęp publiczny',
    'app_public_viewing' => 'Zezwolić na publiczne przeglądanie?',
    'app_secure_images' => 'Włączyć przesyłanie obrazów o wyższym poziomie bezpieczeństwa?',
    'app_secure_images_toggle' => 'Włącz wyższy poziom bezpieczeństwa dla obrazów',
    'app_secure_images_desc' => 'Ze względów wydajnościowych wszystkie obrazki są publiczne. Ta opcja dodaje dodatkowy, trudny do odgadnięcia losowy ciąg na początku nazwy obrazka. Upewnij się że indeksowanie katalogów jest zablokowane, aby uniemożliwić łatwy dostęp do obrazków.',
    'app_editor' => 'Edytor strony',
    'app_editor_desc' => 'Wybierz edytor używany przez użytkowników do edycji zawartości.',
    'app_custom_html' => 'Własna zawartość w tagu <head>',
    'app_custom_html_desc' => 'Zawartość dodana tutaj zostanie dołączona na dole sekcji <head> każdej strony. Przydatne przy nadpisywaniu styli lub dodawaniu analityki.',
    'app_custom_html_disabled_notice' => 'Niestandardowa zawartość nagłówka HTML jest wyłączona na tej stronie ustawień aby zapewnić, że wszystkie błedne zmiany (braking change) mogą zostać cofnięte.',
    'app_logo' => 'Logo aplikacji',
    'app_logo_desc' => 'Ten obrazek powinien mieć nie więcej niż 43px wysokosci. <br>Większe obrazki zostaną zmniejszone.',
    'app_primary_color' => 'Podstawowy kolor aplikacji',
    'app_primary_color_desc' => 'To powinna być wartość HEX. <br>Zostaw to pole puste, by powrócić do podstawowego koloru.',
    'app_homepage' => 'Strona główna',
    'app_homepage_desc' => 'Wybierz widok, który będzie wyświetlany na stronie głównej zamiast w widoku domyślnego. Uprawnienia dostępowe są ignorowane dla wybranych stron.',
    'app_homepage_select' => 'Wybierz stronę',
    'app_disable_comments' => 'Wyłącz komentarze',
    'app_disable_comments_toggle' => 'Wyłącz komentowanie',
    'app_disable_comments_desc' => 'Wyłącz komentarze na wszystkich stronach w aplikacji. Istniejące komentarze nie będą pokazywane.',

    // Color settings
    'content_colors' => 'Kolory zawartości',
    'content_colors_desc' => 'Ustawia kolory dla wszystkich elementów w hierarchii organizacji stron. Wybór kolorów o podobnej jasności do domyślnych kolorów jest zalecany dla czytelności.',
    'bookshelf_color' => 'Kolor półki',
    'book_color' => 'Kolor książki',
    'chapter_color' => 'Kolor rozdziału',
    'page_color' => 'Kolor strony',
    'page_draft_color' => 'Kolor szkicu strony',

    // Registration Settings
    'reg_settings' => 'Ustawienia rejestracji',
    'reg_enable' => 'Włącz rejestrację',
    'reg_enable_toggle' => 'Włącz rejestrację',
    'reg_enable_desc' => 'Kiedy rejestracja jest włączona użytkownicy mogą się rejestrować. Po rejestracji otrzymują jedną domyślną rolę użytkownika.',
    'reg_default_role' => 'Domyślna rola użytkownika po rejestracji',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'Potwierdzenie adresu email',
    'reg_email_confirmation_toggle' => 'Wymagaj potwierdzenia adresu email',
    'reg_confirm_email_desc' => 'Jeśli restrykcje domenowe zostały ustawione, potwierdzenie adresu stanie się konieczne, a poniższa wartośc zostanie zignorowana.',
    'reg_confirm_restrict_domain' => 'Restrykcje domenowe dot. adresu e-mail',
    'reg_confirm_restrict_domain_desc' => 'Wprowadź listę domen adresów e-mail, rozdzieloną przecinkami, którym chciałbyś zezwolić na rejestrację. Wymusi to konieczność potwierdzenia adresu e-mail przez użytkownika przed uzyskaniem dostępu do aplikacji. <br> Pamiętaj, że użytkownicy będą mogli zmienić adres e-mail po rejestracji.',
    'reg_confirm_restrict_domain_placeholder' => 'Brak restrykcji',

    // Maintenance settings
    'maint' => 'Konserwacja',
    'maint_image_cleanup' => 'Czyszczenie obrazków',
    'maint_image_cleanup_desc' => "Skanuje zawartość strony i poprzednie wersje, aby sprawdzić, które obrazy i rysunki są aktualnie używane, a które obrazy są zbędne. Przed uruchomieniem tej opcji należy utworzyć pełną kopię zapasową bazy danych i obrazków.",
    'maint_image_cleanup_ignore_revisions' => 'Ignoruje obrazki w poprzednich wersjach',
    'maint_image_cleanup_run' => 'Uruchom czyszczenie',
    'maint_image_cleanup_warning' => 'Znaleziono :count potencjalnie niepotrzebnych obrazków. Czy na pewno chcesz je usunąć?',
    'maint_image_cleanup_success' => ':count potencjalnie nieużywane obrazki zostały znalezione i usunięte!',
    'maint_image_cleanup_nothing_found' => 'Nie znaleziono żadnych nieużywanych obrazków. Nic nie zostało usunięte!',
    'maint_send_test_email' => 'Wyślij testową wiadomość e-mail',
    'maint_send_test_email_desc' => 'Ta opcje wyśle wiadomość testową na adres e-mail podany w Twoim profilu',
    'maint_send_test_email_run' => 'Wyślij testową wiadomość e-mail',
    'maint_send_test_email_success' => 'E-mail wysłany na adres :address',
    'maint_send_test_email_mail_subject' => 'E-mail testowy',
    'maint_send_test_email_mail_greeting' => 'Wygląda na to, że wysyłka wiadomości e-mail działa!',
    'maint_send_test_email_mail_text' => 'Gratulacje! Otrzymałeś tego e-maila więc Twoje ustawienia poczty elektronicznej wydają się być prawidłowo skonfigurowane.',

    // Role Settings
    'roles' => 'Role',
    'role_user_roles' => 'Role użytkowników',
    'role_create' => 'Utwórz nową rolę',
    'role_create_success' => 'Rola utworzona pomyślnie',
    'role_delete' => 'Usuń rolę',
    'role_delete_confirm' => 'To spowoduje usunięcie roli \':roleName\'.',
    'role_delete_users_assigned' => 'Tę rolę ma przypisanych :userCount użytkowników. Jeśli chcesz zmigrować użytkowników z tej roli, wybierz nową poniżej.',
    'role_delete_no_migration' => "Nie migruj użytkowników",
    'role_delete_sure' => 'Czy na pewno chcesz usunąć tę rolę?',
    'role_delete_success' => 'Rola usunięta pomyślnie',
    'role_edit' => 'Edytuj rolę',
    'role_details' => 'Szczegóły roli',
    'role_name' => 'Nazwa roli',
    'role_desc' => 'Krótki opis roli',
    'role_external_auth_id' => 'Zewnętrzne identyfikatory uwierzytelniania',
    'role_system' => 'Uprawnienia systemowe',
    'role_manage_users' => 'Zarządzanie użytkownikami',
    'role_manage_roles' => 'Zarządzanie rolami i uprawnieniami ról',
    'role_manage_entity_permissions' => 'Zarządzanie uprawnieniami książek, rozdziałów i stron',
    'role_manage_own_entity_permissions' => 'Zarządzanie uprawnieniami własnych książek, rozdziałów i stron',
    'role_manage_page_templates' => 'Zarządzaj szablonami stron',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Zarządzanie ustawieniami aplikacji',
    'role_asset' => 'Zarządzanie zasobami',
    'role_asset_desc' => 'Te ustawienia kontrolują zarządzanie zasobami systemu. Uprawnienia książek, rozdziałów i stron nadpisują te ustawienia.',
    'role_asset_admins' => 'Administratorzy mają automatycznie dostęp do wszystkich treści, ale te opcję mogą być pokazywać lub ukrywać opcje interfejsu użytkownika.',
    'role_all' => 'Wszyscy',
    'role_own' => 'Własne',
    'role_controlled_by_asset' => 'Kontrolowane przez zasób, do którego zostały udostępnione',
    'role_save' => 'Zapisz rolę',
    'role_update_success' => 'Rola zapisana pomyślnie',
    'role_users' => 'Użytkownicy w tej roli',
    'role_users_none' => 'Brak użytkowników zapisanych do tej roli',

    // Users
    'users' => 'Użytkownicy',
    'user_profile' => 'Profil użytkownika',
    'users_add_new' => 'Dodaj użytkownika',
    'users_search' => 'Wyszukaj użytkownika',
    'users_details' => 'Szczegóły użytkownika',
    'users_details_desc' => 'Ustaw wyświetlaną nazwę i adres e-mail dla tego użytkownika. Adres e-mail zostanie wykorzystany do zalogowania się do aplikacji.',
    'users_details_desc_no_email' => 'Ustaw wyświetlaną nazwę dla tego użytkownika, aby inni mogli go rozpoznać.',
    'users_role' => 'Role użytkownika',
    'users_role_desc' => 'Wybierz role, do których ten użytkownik zostanie przypisany. Jeśli użytkownik jest przypisany do wielu ról, uprawnienia z tych ról zostaną nałożone i otrzyma wszystkie uprawnienia przypisanych ról.',
    'users_password' => 'Hasło użytkownika',
    'users_password_desc' => 'Ustaw hasło logowania do aplikacji. Hasło musi mieć przynajmniej 6 znaków.',
    'users_send_invite_text' => 'Możesz wybrać wysłanie do tego użytkownika wiadomości e-mail z zaproszeniem, która pozwala mu ustawić własne hasło, w przeciwnym razie możesz ustawić je samemu.',
    'users_send_invite_option' => 'Wyślij e-mail z zaproszeniem',
    'users_external_auth_id' => 'Zewnętrzne identyfikatory autentykacji',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Wypełnij poniżej tylko jeśli chcesz zmienić swoje hasło:',
    'users_system_public' => 'Ten użytkownik reprezentuje każdego gościa odwiedzającego tę aplikację. Nie można się na niego zalogować, lecz jest przyznawany automatycznie.',
    'users_delete' => 'Usuń użytkownika',
    'users_delete_named' => 'Usuń :userName',
    'users_delete_warning' => 'To usunie użytkownika \':userName\' z systemu.',
    'users_delete_confirm' => 'Czy na pewno chcesz usunąć tego użytkownika?',
    'users_delete_success' => 'Użytkownik usunięty pomyślnie',
    'users_edit' => 'Edytuj użytkownika',
    'users_edit_profile' => 'Edytuj profil',
    'users_edit_success' => 'Użytkownik zaktualizowany pomyśłnie',
    'users_avatar' => 'Avatar użytkownika',
    'users_avatar_desc' => 'Ten obrazek powinien posiadać wymiary 256x256px.',
    'users_preferred_language' => 'Preferowany język',
    'users_preferred_language_desc' => 'Opcja ta zmieni język używany w interfejsie użytkownika aplikacji. Nie wpłynie to na zawartość stworzoną przez użytkownika.',
    'users_social_accounts' => 'Konta społecznościowe',
    'users_social_accounts_info' => 'Tutaj możesz połączyć kilka kont społecznościowych w celu łatwiejszego i szybszego logowania. Odłączenie konta tutaj nie autoryzowało dostępu. Odwołaj dostęp z ustawień profilu na podłączonym koncie społecznościowym.',
    'users_social_connect' => 'Podłącz konto',
    'users_social_disconnect' => 'Odłącz konto',
    'users_social_connected' => ':socialAccount zostało dodane do Twojego profilu.',
    'users_social_disconnected' => ':socialAccount zostało odłączone od Twojego profilu.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID"" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token Created :timeAgo',
    'user_api_token_updated' => 'Token Updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
