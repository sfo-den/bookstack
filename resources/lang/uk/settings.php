<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Налаштування',
    'settings_save' => 'Зберегти налаштування',
    'settings_save_success' => 'Налаштування збережено',
    'system_version' => 'Версія',
    'categories' => 'Категорії',

    // App Settings
    'app_customization' => 'Налаштування',
    'app_features_security' => 'Особливості та безпека',
    'app_name' => 'Назва програми',
    'app_name_desc' => 'Ця назва показується у заголовку та в усіх листах.',
    'app_name_header' => 'Показати назву програми в заголовку',
    'app_public_access' => 'Публічний доступ',
    'app_public_access_desc' => 'Увімкнення цієї опції дозволить відвідувачам, які не увійшли в систему, отримати доступ до вмісту у вашому екземплярі BookStack.',
    'app_public_access_desc_guest' => 'Доступ для публічних відвідувачів можна контролювати через користувача "Гість".',
    'app_public_access_toggle' => 'Дозволити публічний доступ',
    'app_public_viewing' => 'Дозволити публічний перегляд?',
    'app_secure_images' => 'Вищі налаштування безпеки для зображень',
    'app_secure_images_toggle' => 'Увімкунти вищі налаштування безпеки для завантаження зображень',
    'app_secure_images_desc' => 'З міркувань продуктивності всі зображення є загальнодоступними. Цей параметр додає випадковий, важко передбачуваний рядок перед URL-адресами зображень. Переконайтеся, що індексація каталогів не активована, щоб запобігти легкому доступу.',
    'app_default_editor' => 'Стандартний редактор сторінок',
    'app_default_editor_desc' => 'Виберіть, який редактор буде використовуватися за замовчуванням під час редагування нових сторінок. Це можна перевизначити на рівні дозволів сторінки.',
    'app_custom_html' => 'Користувацький вміст HTML-заголовку',
    'app_custom_html_desc' => 'Будь-який доданий тут вміст буде вставлено в нижню частину розділу <head> кожної сторінки. Це зручно для перевизначення стилів, або додавання коду аналітики.',
    'app_custom_html_disabled_notice' => 'На цій сторінці налаштувань відключений користувацький вміст заголовка HTML, щоб гарантувати, що будь-які невдалі зміни можна буде відновити.',
    'app_logo' => 'Логотип програми',
    'app_logo_desc' => 'Це зображення має бути висотою 43px. <br>Великі зображення будуть зменшені.',
    'app_primary_color' => 'Основний колір програми',
    'app_primary_color_desc' => 'Колір потрібно вказати у hex-форматі. <br>Залиште порожнім, щоб використати стандартний колір.',
    'app_homepage' => 'Домашня сторінка програми',
    'app_homepage_desc' => 'Виберіть сторінку, яка показуватиметься на домашній сторінці замість перегляду за замовчуванням. Права на сторінку не враховуються для вибраних сторінок.',
    'app_homepage_select' => 'Вибрати сторінку',
    'app_footer_links' => 'Посилання нижньої частини сайту',
    'app_footer_links_desc' => 'Додайте посилання до нижньої частини сайту. Вони будуть відображатися в нижній частині більшості сторінок, включаючи ті, що не потребують входу. Для використання системних перекладів ви можете скористатися мітками "trans::<key>". Наприклад: додавання "trans:common.privacy_policy" покаже перекладений текст "Політика конфіденційності" а "trans:common.terms_of_service" покаже перекладений текст "Умови надання послуг".',
    'app_footer_links_label' => 'Назва посилання',
    'app_footer_links_url' => 'URL посилання',
    'app_footer_links_add' => 'Додати посилання до нижньої частини сайту',
    'app_disable_comments' => 'Вимкнути коментарі',
    'app_disable_comments_toggle' => 'Вимкнути коментарі',
    'app_disable_comments_desc' => 'Вимкнути коментарі на всіх сторінках програми. Існуючі коментарі не відображаються.',

    // Color settings
    'content_colors' => 'Кольори вмісту',
    'content_colors_desc' => 'Встановлює кольори для всіх елементів в ієрархії організації сторінок. Рекомендуємо вибирати кольори із яскравістю, схожою на кольори за замовчуванням, для кращої читабельності.',
    'bookshelf_color' => 'Колір полиці',
    'book_color' => 'Колір книги',
    'chapter_color' => 'Колір глави',
    'page_color' => 'Колір сторінки',
    'page_draft_color' => 'Колір чернетки',

    // Registration Settings
    'reg_settings' => 'Реєстрація',
    'reg_enable' => 'Дозвіл на реєстрацію',
    'reg_enable_toggle' => 'Дозволити реєстрацію',
    'reg_enable_desc' => 'При включенні реєстрації відвідувач зможе зареєструватися як користувач програми. Після реєстрації їм надається єдина роль користувача за замовчуванням.',
    'reg_default_role' => 'Роль користувача за умовчанням після реєстрації',
    'reg_enable_external_warning' => 'Цей параметр ігнорується, якщо активна зовнішня автентифікація LDAP або SAML. Облікові записи користувачів для неіснуючих учасників будуть створені автоматично, якщо аутентифікація у зовнішній системі буде успішною.',
    'reg_email_confirmation' => 'Підтвердження електронною поштою',
    'reg_email_confirmation_toggle' => 'Необхідне підтвердження електронною поштою',
    'reg_confirm_email_desc' => 'Якщо використовується обмеження домену, то підтвердження електронною поштою буде потрібно, а нижче значення буде проігноровано.',
    'reg_confirm_restrict_domain' => 'Обмеження по домену',
    'reg_confirm_restrict_domain_desc' => 'Введіть список розділених комами доменів електронної пошти, до яких ви хочете обмежити реєстрацію. Користувачам буде надіслано електронне повідомлення для підтвердження своєї адреси, перш ніж дозволяти взаємодіяти з додатком. <br> Зауважте, що користувачі зможуть змінювати свої електронні адреси після успішної реєстрації.',
    'reg_confirm_restrict_domain_placeholder' => 'Не встановлено обмежень',

    // Maintenance settings
    'maint' => 'Обслуговування',
    'maint_image_cleanup' => 'Очищення зображень',
    'maint_image_cleanup_desc' => 'Сканує вміст сторінки та версій, щоб перевірити, які зображення та малюнки в даний час використовуються, а також які зображення зайві. Переконайтеся, що ви створили повну резервну копію бази даних та зображення, перш ніж запускати це.',
    'maint_delete_images_only_in_revisions' => 'Також видалити зображення, що існують лише в старих версіях сторінки',
    'maint_image_cleanup_run' => 'Запустити очищення',
    'maint_image_cleanup_warning' => ':count потенційно невикористаних зображень було знайдено. Ви впевнені, що хочете видалити ці зображення?',
    'maint_image_cleanup_success' => ':count потенційно невикористані зображення знайдено і видалено!',
    'maint_image_cleanup_nothing_found' => 'Не знайдено невикористовуваних зображень, нічого не видалено!',
    'maint_send_test_email' => 'Надіслати тестове повідомлення',
    'maint_send_test_email_desc' => 'Надіслати тестового листа на адресу електронної пошти, що вказана у вашому профілі.',
    'maint_send_test_email_run' => 'Надіслати тестовий лист',
    'maint_send_test_email_success' => 'Лист відправлений на : адреса',
    'maint_send_test_email_mail_subject' => 'Перевірка електронної пошти',
    'maint_send_test_email_mail_greeting' => 'Доставляння електронної пошти працює!',
    'maint_send_test_email_mail_text' => 'Вітаємо! Оскільки ви отримали цього листа, поштова скринька налаштована правильно.',
    'maint_recycle_bin_desc' => 'Видалені полиці, книги, розділи та сторінки попадають кошик, щоб їх можна було відновити або видалити остаточно. Старіші елементи з кошика можна автоматично видаляти через деякий час, залежно від налаштувань системи.',
    'maint_recycle_bin_open' => 'Відкрити кошик',
    'maint_regen_references' => 'Перегенерувати посилання',
    'maint_regen_references_desc' => 'Ця дія перебудує міжелементний посилальний індекс у базі даних. Зазвичай це виконується автоматично, але ця дія може бути корисною для індексування старого вмісту або вмісту, доданого неофіційними методами.',
    'maint_regen_references_success' => 'Індекс посилань перестворений!',
    'maint_timeout_command_note' => 'Примітка: Ця дія може зайняти час для запуску, що може призвести до тимчасових проблем в деяких веб-середовищах. Як альтернативу, цю дію виконуються за допомогою термінальної команди.',

    // Recycle Bin
    'recycle_bin' => 'Кошик',
    'recycle_bin_desc' => 'Тут ви можете відновити видалені елементи, або назавжди видалити їх із системи. Цей список нефільтрований, на відміну від подібних списків активності в системі, де застосовуються фільтри дозволів.',
    'recycle_bin_deleted_item' => 'Виадлений елемент',
    'recycle_bin_deleted_parent' => 'Батьківський',
    'recycle_bin_deleted_by' => 'Ким видалено',
    'recycle_bin_deleted_at' => 'Час видалення',
    'recycle_bin_permanently_delete' => 'Видалити остаточно',
    'recycle_bin_restore' => 'Відновити',
    'recycle_bin_contents_empty' => 'Зараз кошик порожній',
    'recycle_bin_empty' => 'Очистити кошик',
    'recycle_bin_empty_confirm' => 'Це назавжди знищить усі елементи в кошику, включаючи вміст кожного елементу. Ви впевнені, що хочете очистити кошик?',
    'recycle_bin_destroy_confirm' => 'Ця дія назавжди видалить цей об\'єкт із системи, а також усі дочірні об\'єкти вказані нижче, і ви не зможете відновити його. Ви впевнені, що хочете назавжди видалити цей об\'єкт?',
    'recycle_bin_destroy_list' => 'Елементи для знищення',
    'recycle_bin_restore_list' => 'Елементи для відновлення',
    'recycle_bin_restore_confirm' => 'Ця дія відновить видалений елемент у початкове місце, включаючи всі дочірні елементи. Якщо вихідне розташування відтоді було видалено, і знаходиться у кошику, батьківський елемент також потрібно буде відновити.',
    'recycle_bin_restore_deleted_parent' => 'Батьківський елемент цього об\'єкта також був видалений. Вони залишатимуться видаленими, доки батьківський елемент також не буде відновлений.',
    'recycle_bin_restore_parent' => 'Відновити батьківську',
    'recycle_bin_destroy_notification' => 'Видалено :count елементів із кошика.',
    'recycle_bin_restore_notification' => 'Відновлено :count елементів із кошика.',

    // Audit Log
    'audit' => 'Журнал аудиту',
    'audit_desc' => 'Цей журнал аудиту показує список відстежуваних у системі дій. Цей список нефільтрований, на відміну від подібних списків активності в системі, де застосовуються фільтри дозволів.',
    'audit_event_filter' => 'Фільтр подій',
    'audit_event_filter_no_filter' => 'Без фільтра',
    'audit_deleted_item' => 'Видалений елемент',
    'audit_deleted_item_name' => 'Назва: :name',
    'audit_table_user' => 'Користувач',
    'audit_table_event' => 'Подія',
    'audit_table_related' => 'Пов’язаний елемент',
    'audit_table_ip' => 'IP-адреса',
    'audit_table_date' => 'Дата активності',
    'audit_date_from' => 'Діапазон дат від',
    'audit_date_to' => 'Діапазон дат до',

    // Role Settings
    'roles' => 'Ролі',
    'role_user_roles' => 'Ролі користувача',
    'role_create' => 'Створити нову роль',
    'role_create_success' => 'Роль успішно створена',
    'role_delete' => 'Видалити роль',
    'role_delete_confirm' => 'Це призведе до видалення ролі з назвою \':roleName\'.',
    'role_delete_users_assigned' => 'Цій ролі належать :userCount користувачі(в). Якщо ви хочете перенести користувачів із цієї ролі, виберіть нову роль нижче.',
    'role_delete_no_migration' => "Не мігрувати користувачів",
    'role_delete_sure' => 'Ви впевнені, що хочете видалити цю роль?',
    'role_delete_success' => 'Роль успішно видалена',
    'role_edit' => 'Редагувати роль',
    'role_details' => 'Деталі ролі',
    'role_name' => 'Назва ролі',
    'role_desc' => 'Короткий опис ролі',
    'role_mfa_enforced' => 'Потрібна двофактова автентифікація',
    'role_external_auth_id' => 'Зовнішні ID автентифікації',
    'role_system' => 'Системні дозволи',
    'role_manage_users' => 'Керування користувачами',
    'role_manage_roles' => 'Керування правами ролей та ролями',
    'role_manage_entity_permissions' => 'Керування всіма правами на книги, розділи та сторінки',
    'role_manage_own_entity_permissions' => 'Керування дозволами на власну книгу, розділ та сторінки',
    'role_manage_page_templates' => 'Управління шаблонами сторінок',
    'role_access_api' => 'Доступ до системного API',
    'role_manage_settings' => 'Керування налаштуваннями програми',
    'role_export_content' => 'Вміст експорту',
    'role_editor_change' => 'Змінити редактор сторінок',
    'role_asset' => 'Дозволи',
    'roles_system_warning' => 'Майте на увазі, що доступ до будь-якого з вищезазначених трьох дозволів може дозволити користувачеві змінювати власні привілеї або привілеї інших в системі. Ролі з цими дозволами призначайте лише довіреним користувачам.',
    'role_asset_desc' => 'Ці дозволи контролюють стандартні доступи всередині системи. Права на книги, розділи та сторінки перевизначать ці дозволи.',
    'role_asset_admins' => 'Адміністратори автоматично отримують доступ до всього вмісту, але ці параметри можуть відображати або приховувати параметри інтерфейсу користувача.',
    'role_asset_image_view_note' => 'Це стосується видимості в менеджері зображень. Фактичний доступ завантажуваних зображень буде залежний від опції зберігання системних зображень.',
    'role_all' => 'Все',
    'role_own' => 'Власне',
    'role_controlled_by_asset' => 'Контролюється за об\'єктом, до якого вони завантажуються',
    'role_save' => 'Зберегти роль',
    'role_update_success' => 'Роль успішно оновлена',
    'role_users' => 'Користувачі в цій ролі',
    'role_users_none' => 'Наразі жоден користувач не призначений для цієї ролі',

    // Users
    'users' => 'Користувачі',
    'user_profile' => 'Профіль користувача',
    'users_add_new' => 'Додати нового користувача',
    'users_search' => 'Пошук користувачів',
    'users_latest_activity' => 'Остання активність',
    'users_details' => 'Відомості про користувача',
    'users_details_desc' => 'Встановіть ім\'я та електронну адресу для цього користувача. Адреса електронної пошти буде використана для входу до програми.',
    'users_details_desc_no_email' => 'Встановіть ім\'я для цього користувача, щоб інші могли його розпізнати.',
    'users_role' => 'Ролі користувача',
    'users_role_desc' => 'Виберіть, до яких ролей буде призначено цього користувача. Якщо користувачеві призначено декілька ролей, дозволи з цих ролей будуть складатись і вони отримуватимуть усі можливості призначених ролей.',
    'users_password' => 'Пароль користувача',
    'users_password_desc' => 'Встановіть пароль для входу. Він повинен містити принаймні 5 символів.',
    'users_send_invite_text' => 'Ви можете надіслати цьому користувачеві лист із запрошенням, що дозволить йому встановити пароль власноруч, або ви можете встановити йому пароль самостійно.',
    'users_send_invite_option' => 'Надіслати листа із запрошенням користувачу',
    'users_external_auth_id' => 'Зовнішній ID автентифікації',
    'users_external_auth_id_desc' => 'Цей ідентифікатор використовується для ідентифікації цього користувача під час взаємодії із зовнішньою системою автентифікації.',
    'users_password_warning' => 'Тільки якщо ви хочете змінити свій пароль, заповніть поля нижче:',
    'users_system_public' => 'Цей користувач представляє будь-яких гостьових користувачів, які відвідують ваш екземпляр. Його не можна використовувати для входу, але він призначається автоматично.',
    'users_delete' => 'Видалити користувача',
    'users_delete_named' => 'Видалити користувача :userName',
    'users_delete_warning' => 'Це повне видалення цього користувача з ім\'ям \':userName\' з системи.',
    'users_delete_confirm' => 'Ви впевнені, що хочете видалити цього користувача?',
    'users_migrate_ownership' => 'Право власності при міграції',
    'users_migrate_ownership_desc' => 'Виберіть тут користувача, якщо ви хочете, щоб інший користувач став власником усіх елементів, які зараз належать цьому користувачеві.',
    'users_none_selected' => 'Не вибрано жодного користувача',
    'users_edit' => 'Редагувати користувача',
    'users_edit_profile' => 'Редагувати профіль',
    'users_avatar' => 'Аватар користувача',
    'users_avatar_desc' => 'Це квадратне зображення має бути приблизно 256px.',
    'users_preferred_language' => 'Бажана мова',
    'users_preferred_language_desc' => 'Цей параметр змінить мову інтерфейсу користувача в програмі. Не вплине на створений користувачем вміст.',
    'users_social_accounts' => 'Соціальні акаунти',
    'users_social_accounts_info' => 'Тут ви можете підключити інші облікові записи для швидшого та легшого входу. Від\'єднання соціального облікового запису тут не дозволяється. Скасуйте доступ із налаштувань вашого профілю в пов\'язаній соціальній мережі.',
    'users_social_connect' => 'Підключити обліковий запис',
    'users_social_disconnect' => 'Від\'єднати обліковий запис',
    'users_social_connected' => 'Обліковий запис :socialAccount успішно додано до вашого профілю.',
    'users_social_disconnected' => 'Обліковий запис :socialAccount був успішно відключений від вашого профілю.',
    'users_api_tokens' => 'API токени',
    'users_api_tokens_none' => 'Жодного токена API не створено для цього користувача',
    'users_api_tokens_create' => 'Створити токен',
    'users_api_tokens_expires' => 'Закінчується',
    'users_api_tokens_docs' => 'Документація API',
    'users_mfa' => 'Багатофакторна Автентифікація',
    'users_mfa_desc' => 'Двофакторна аутентифікація додає ще один рівень безпеки для вашого облікового запису.',
    'users_mfa_x_methods' => ':count метод налаштовано|:count методів налаштовано',
    'users_mfa_configure' => 'Налаштувати Методи',

    // API Tokens
    'user_api_token_create' => 'Створити токен API',
    'user_api_token_name' => 'Назва',
    'user_api_token_name_desc' => 'Дайте своєму токену читабельну назву як майбутнє нагадування про його пряме призначення.',
    'user_api_token_expiry' => 'Дата закінчення',
    'user_api_token_expiry_desc' => 'Встановіть дату закінчення терміну дії цього токена. Після цієї дати запити, зроблені за допомогою цього токена, більше не працюватимуть. Якщо залишити це поле порожнім, термін дії токена закінчиться через 100 років.',
    'user_api_token_create_secret_message' => 'Відразу після створення цього токена буде створено та показано «Ідентифікатор токена» та «Ключ токена». Ключ буде показано лише один раз, тому перед тим, як продовжити, не забудьте скопіювати значення ключа в надійне та безпечне місце.',
    'user_api_token_create_success' => 'Токен API успішно створено',
    'user_api_token_update_success' => 'Токен API успішно оновлено',
    'user_api_token' => 'Токен API',
    'user_api_token_id' => 'Ідентифікатор (ID) токена',
    'user_api_token_id_desc' => 'Системний ідентифікатор цього токена, який потрібно буде вказати в запитах API. Його редагування неможливе.',
    'user_api_token_secret' => 'Ключ токена',
    'user_api_token_secret_desc' => 'Це ключ, згенерований системою для цього токена, його потрібно буде надати в запитах API. Він буде видимий лише цього разу, тому скопіюйте це значення в безпечне та надійне місце.',
    'user_api_token_created' => 'Токен створено :timeAgo',
    'user_api_token_updated' => 'Токен оновлено :timeAgo',
    'user_api_token_delete' => 'Видалити токен',
    'user_api_token_delete_warning' => 'Ця дія повністю видалить цей токен API із назвою \':tokenName\' з системи.',
    'user_api_token_delete_confirm' => 'Дійсно хочете видалити цей токен API?',
    'user_api_token_delete_success' => 'Токен API успішно видалено',

    // Webhooks
    'webhooks' => 'Веб-хуки',
    'webhooks_create' => 'Створити новий Веб-хук',
    'webhooks_none_created' => 'Немає створених Веб-хуків.',
    'webhooks_edit' => 'Редагувати Веб-хук',
    'webhooks_save' => 'Зберегти Веб-хук',
    'webhooks_details' => 'Деталі вебхуків',
    'webhooks_details_desc' => 'Вкажіть дружнє ім\'я користувача та кінцеву точку POST як місце для надсилання даних вебхуків.',
    'webhooks_events' => 'Події вебхуків',
    'webhooks_events_desc' => 'Оберіть всі події, які мають викликати цей web-хук, щоб бути викликані.',
    'webhooks_events_warning' => 'Майте на увазі, що ці події будуть запущені для всіх вибраних подій, навіть якщо використовуються користувацькі дозволи. Переконайтеся, що використання цього вебхука не розкриє конфіденційний контент.',
    'webhooks_events_all' => 'Всі системні події',
    'webhooks_name' => 'Назва вебхука',
    'webhooks_timeout' => 'Час очікування запиту веб хука (в секундах)',
    'webhooks_endpoint' => 'Webhook кінцевої точки',
    'webhooks_active' => 'Веб хук активний',
    'webhook_events_table_header' => 'Події',
    'webhooks_delete' => 'Видалити Webhook',
    'webhooks_delete_warning' => 'Ця дія повністю видалить цей токен Api із назвою \':tokenName\' з системи.',
    'webhooks_delete_confirm' => 'Ви впевнені, що хочете видалити цей веб хук?',
    'webhooks_format_example' => 'Приклад формату веб хука',
    'webhooks_format_example_desc' => 'Дані веб хука надсилаються як POST запит до налаштованої кінцевої точки у вигляді JSON з відповідним форматом. Властивості "related_item" і "url" є необов\'язковими та залежатимуть від типу події.',
    'webhooks_status' => 'Статус веб хука',
    'webhooks_last_called' => 'Останній виклик:',
    'webhooks_last_errored' => 'Остання помилка:',
    'webhooks_last_error_message' => 'Останнє повідомлення про помилку:',


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
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
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
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
