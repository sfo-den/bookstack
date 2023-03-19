<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Ayarlar',
    'settings_save' => 'Ayarları Kaydet',
    'settings_save_success' => 'Ayarlar kaydedildi',
    'system_version' => 'Sistem Sürümü',
    'categories' => 'Kategoriler',

    // App Settings
    'app_customization' => 'Özelleştirme',
    'app_features_security' => 'Özellikler & Güvenlik',
    'app_name' => 'Uygulama Adı',
    'app_name_desc' => 'Bu isim, başlıkta ve sistem tarafından gönderilen bütün e-postalarda gösterilecektir.',
    'app_name_header' => 'İsmi başlıkta göster',
    'app_public_access' => 'Açık Erişim',
    'app_public_access_desc' => 'Bu özelliği aktifleştirmek, giriş yapmamış misafir kullanıcıların BookStack uygulamanıza erişimini sağlar.',
    'app_public_access_desc_guest' => 'Kayıtlı olmayan kullanıcılar için erişim yetkileri, "Guest" kullanıcısı üzerinden kontrol edilebilir.',
    'app_public_access_toggle' => 'Açık erişime izin ver',
    'app_public_viewing' => 'Herkese açık görüntülemeye izin verilsin mi?',
    'app_secure_images' => 'Daha Güvenli Görsel Yüklemeleri',
    'app_secure_images_toggle' => 'Daha güvenli görsel yüklemelerini aktifleştir',
    'app_secure_images_desc' => 'Bütün görseller, performans sebepleri nedeniyle herkes tarafından görüntülenebilir durumdadır. Bu seçeneği aktif ederseniz; görsel bağlantılarının önüne rastgele, tahmini zor karakterler eklenmesini sağlarsınız. Kolay erişimin önlenmesi için dizin indekslerinin kapalı olduğundan emin olun.',
    'app_default_editor' => 'Varsayılan Yazı Düzenleyici',
    'app_default_editor_desc' => 'Select which editor will be used by default when editing new pages. This can be overridden at a page level where permissions allow.',
    'app_custom_html' => 'Özel HTML "Head" İçeriği',
    'app_custom_html_desc' => 'Buraya yazacağınız içerik, <head> etiketinin içine ve en sonuna eklenecektir. Bu işlem, stil değişikliklerinin uygulanmasında ya da analytics kodlarının eklenmesinde yararlı olmaktadır.',
    'app_custom_html_disabled_notice' => 'Olası hatalı değişikliklerin geriye alınabilmesi için bu sayfanın özelleştirilmiş HTML "head" içeriği devre dışı bırakıldı.',
    'app_logo' => 'Uygulama Logosu',
    'app_logo_desc' => 'This is used in the application header bar, among other areas. This image should be 86px in height. Large images will be scaled down.',
    'app_icon' => 'Application Icon',
    'app_icon_desc' => 'This icon is used for browser tabs and shortcut icons. This should be a 256px square PNG image.',
    'app_homepage' => 'Ana Sayfa',
    'app_homepage_desc' => 'Varsayılan görünüm yerine ana sayfada görünmesi için bir görünüm seçin. Sayfa izinleri, burada seçeceğiniz sayfalar için yok sayılacaktır.',
    'app_homepage_select' => 'Bir sayfa seçin',
    'app_footer_links' => 'Altbilgi Bağlantıları',
    'app_footer_links_desc' => 'Add links to show within the site footer. These will be displayed at the bottom of most pages, including those that do not require login. You can use a label of "trans::<key>" to use system-defined translations. For example: Using "trans::common.privacy_policy" will provide the translated text "Privacy Policy" and "trans::common.terms_of_service" will provide the translated text "Terms of Service".',
    'app_footer_links_label' => 'Bağlantı Etiketi',
    'app_footer_links_url' => 'Bağlantı adresi',
    'app_footer_links_add' => 'Altbilgi Bağlantısı Ekle',
    'app_disable_comments' => 'Yorumları Devre Dışı Bırak',
    'app_disable_comments_toggle' => 'Yorumları devre dışı bırak',
    'app_disable_comments_desc' => 'Bütün sayfalar için yorumları devre dışı bırakır. <br> Mevcut yorumlar gösterilmeyecektir.',

    // Color settings
    'color_scheme' => 'Application Color Scheme',
    'color_scheme_desc' => 'Set the colors to use in the BookStack interface. Colors can be configured separately for dark and light modes to best fit the theme and ensure legibility.',
    'ui_colors_desc' => 'Set the primary color and default link color for BookStack. The primary color is mainly used for the header banner, buttons and interface decorations. The default link color is used for text-based links and actions, both within written content and in the Bookstack interface.',
    'app_color' => 'Primary Color',
    'link_color' => 'Default Link Color',
    'content_colors_desc' => 'Set colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Raf Rengi',
    'book_color' => 'Kitap Rengi',
    'chapter_color' => 'Bölüm Rengi',
    'page_color' => 'Sayfa Rengi',
    'page_draft_color' => 'Sayfa Taslağı Rengi',

    // Registration Settings
    'reg_settings' => 'Kayıt İşlemleri',
    'reg_enable' => 'Kayıtları Aktifleştir',
    'reg_enable_toggle' => 'Kayıtları aktifleştir',
    'reg_enable_desc' => 'Kullanıcılar kaydolduktan sonra sizin belirleyeceğiniz bir role otomatik olarak atanabilirler.',
    'reg_default_role' => 'Kayıttan sonraki varsayılan kullanıcı rolü',
    'reg_enable_external_warning' => 'Harici LDAP veya SAML kimlik doğrulaması etkinken yukarıdaki seçenek yok sayılır. Mevcut harici üyelere yönelik kimlik doğrulama başarılı olursa, mevcut olmayan üyelerin kullanıcı hesapları otomatik olarak oluşturulur.',
    'reg_email_confirmation' => 'E-posta Doğrulaması',
    'reg_email_confirmation_toggle' => 'E-posta doğrulamasını zorunlu kıl',
    'reg_confirm_email_desc' => 'Eğer alan adı kısıtlaması kullanılıyorsa, bu seçenek yok sayılarak e-posta doğrulaması zorunlu kılınacaktır.',
    'reg_confirm_restrict_domain' => 'Alan Adı Kısıtlaması',
    'reg_confirm_restrict_domain_desc' => 'Kısıtlamak istediğiniz e-posta alan adlarını vigül ile ayırarak yazınız. Kullanıcılara, uygulamaya erişmeden önce adreslerini doğrulamaları için bir e-posta gönderilecektir. <br> Başarılı bir kayıt işleminden sonra kullanıcıların e-posta adreslerini değiştirebileceklerini unutmayın.',
    'reg_confirm_restrict_domain_placeholder' => 'Hiçbir kısıtlama tanımlanmamış',

    // Maintenance settings
    'maint' => 'Bakım',
    'maint_image_cleanup' => 'Görselleri Temizle',
    'maint_image_cleanup_desc' => 'Sayfaları ve revizyon içeriklerini tarayarak hangi görsellerin ve çizimlerin kullanımda olduğunu ve hangilerinin gereksiz olduğunu tespit eder. Bunu başlatmadan önce veritabanının ve görsellerin tam bir yedeğinin alındığından emin olun.',
    'maint_delete_images_only_in_revisions' => 'Eski sayfa revizyonlarındaki görselleri de sil',
    'maint_image_cleanup_run' => 'Temizliği Başlat',
    'maint_image_cleanup_warning' => 'Muhtemelen kullanılmayan :count adet görsel bulundu. Bu görselleri silmek istediğinize emin misiniz?',
    'maint_image_cleanup_success' => 'Muhtemelen kullanılmayan :count adet görsel bulundu ve silindi!',
    'maint_image_cleanup_nothing_found' => 'Kullanılmayan görsel bulunamadığından hiçbir şey silinmedi!',
    'maint_send_test_email' => 'Deneme E-postası Gönder',
    'maint_send_test_email_desc' => 'Bu işlem, profilinize tanımladığınız e-posta adresine bir deneme e-postası gönderir.',
    'maint_send_test_email_run' => 'Deneme e-postasını gönder',
    'maint_send_test_email_success' => 'E-posta, :address adresine gönderildi',
    'maint_send_test_email_mail_subject' => 'Deneme E-postası',
    'maint_send_test_email_mail_greeting' => 'E-posta iletimi çalışıyor gibi görünüyor!',
    'maint_send_test_email_mail_text' => 'Tebrikler! Eğer bu e-posta bildirimini alıyorsanız, e-posta ayarlarınız doğru bir şekilde ayarlanmış demektir.',
    'maint_recycle_bin_desc' => 'Silinen raflar, kitaplar, bölümler ve sayfalar geri dönüşüm kutusuna gönderilir, böylece geri yüklenebilir veya kalıcı olarak silinebilir. Geri dönüşüm kutusundaki daha eski öğeler, sistem yapılandırmasına bağlı olarak bir süre sonra otomatik olarak kaldırılabilir.',
    'maint_recycle_bin_open' => 'Geri Dönüşüm Kutusunu Aç',
    'maint_regen_references' => 'Regenerate References',
    'maint_regen_references_desc' => 'This action will rebuild the cross-item reference index within the database. This is usually handled automatically but this action can be useful to index old content or content added via unofficial methods.',
    'maint_regen_references_success' => 'Reference index has been regenerated!',
    'maint_timeout_command_note' => 'Note: This action can take time to run, which can lead to timeout issues in some web environments. As an alternative, this action be performed using a terminal command.',

    // Recycle Bin
    'recycle_bin' => 'Geri Dönüşüm Kutusu',
    'recycle_bin_desc' => 'Burada silinen öğeleri geri yükleyebilir veya bunları sistemden kalıcı olarak kaldırmayı seçebilirsiniz. Bu liste, izin filtrelerinin uygulandığı sistemdeki benzer etkinlik listelerinden farklı olarak filtrelenmez.',
    'recycle_bin_deleted_item' => 'Silinen öge',
    'recycle_bin_deleted_parent' => 'Üst',
    'recycle_bin_deleted_by' => 'Tarafından silindi',
    'recycle_bin_deleted_at' => 'Silinme Zamanı',
    'recycle_bin_permanently_delete' => 'Kalıcı Olarak Sil',
    'recycle_bin_restore' => 'Geri Yükle',
    'recycle_bin_contents_empty' => 'Geri dönüşüm kutusu boş',
    'recycle_bin_empty' => 'Geri Dönüşüm Kutusunu Boşalt',
    'recycle_bin_empty_confirm' => 'Bu işlem, her bir öğenin içinde bulunan içerik de dahil olmak üzere geri dönüşüm kutusundaki tüm öğeleri kalıcı olarak imha edecektir. Geri dönüşüm kutusunu boşaltmak istediğinizden emin misiniz?',
    'recycle_bin_destroy_confirm' => 'Bu işlem, bu öğeyi kalıcı olarak ve aşağıda listelenen alt öğelerle birlikte sistemden silecek ve bu içeriği geri yükleyemeyeceksiniz. Bu öğeyi kalıcı olarak silmek istediğinizden emin misiniz?',
    'recycle_bin_destroy_list' => 'Kalıcı Olarak Silinecek Öğeler',
    'recycle_bin_restore_list' => 'Geri Yüklenecek Öğeler',
    'recycle_bin_restore_confirm' => 'Bu eylem, tüm alt öğeler dahil olmak üzere silinen öğeyi orijinal konumlarına geri yükleyecektir. Orijinal konum o zamandan beri silinmişse ve şimdi geri dönüşüm kutusunda bulunuyorsa, üst öğenin de geri yüklenmesi gerekecektir.',
    'recycle_bin_restore_deleted_parent' => 'Bu öğenin üst öğesi de silindi. Bunlar, üst öğe de geri yüklenene kadar silinmiş olarak kalacaktır.',
    'recycle_bin_restore_parent' => 'Restore Parent',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Denetim Kaydı',
    'audit_desc' => 'Bu denetim günlüğü, sistemde izlenen etkinliklerin bir listesini görüntüler. Bu liste, izin filtrelerinin uygulandığı sistemdeki benzer etkinlik listelerinden farklı olarak filtrelenmez.',
    'audit_event_filter' => 'Etkinlik Filtresi',
    'audit_event_filter_no_filter' => 'Filtre Yok',
    'audit_deleted_item' => 'Silinen Öge',
    'audit_deleted_item_name' => 'Isim: :name',
    'audit_table_user' => 'Kullanıcı',
    'audit_table_event' => 'Etkinlik',
    'audit_table_related' => 'İlgili Öğe veya Detay',
    'audit_table_ip' => 'IP Adresi',
    'audit_table_date' => 'Aktivite Tarihi',
    'audit_date_from' => 'Tarih Aralığından',
    'audit_date_to' => 'Tarih Aralığına',

    // Role Settings
    'roles' => 'Roller',
    'role_user_roles' => 'Kullanıcı Rolleri',
    'roles_index_desc' => 'Roles are used to group users & provide system permission to their members. When a user is a member of multiple roles the privileges granted will stack and the user will inherit all abilities.',
    'roles_x_users_assigned' => ':count user assigned|:count users assigned',
    'roles_x_permissions_provided' => ':count permission|:count permissions',
    'roles_assigned_users' => 'Assigned Users',
    'roles_permissions_provided' => 'Provided Permissions',
    'role_create' => 'Yeni Rol Oluştur',
    'role_delete' => 'Rolü Sil',
    'role_delete_confirm' => 'Bu işlem, \':roleName\' adlı rolü silecektir.',
    'role_delete_users_assigned' => 'Bu role atanmış :userCount adet kullanıcı var. Eğer bu kullanıcıların rollerini değiştirmek istiyorsanız, aşağıdan yeni bir rol seçin.',
    'role_delete_no_migration' => "Kullanıcıları taşıma",
    'role_delete_sure' => 'Bu rolü silmek istediğinize emin misiniz?',
    'role_edit' => 'Rolü Düzenle',
    'role_details' => 'Rol Detayları',
    'role_name' => 'Rol Adı',
    'role_desc' => 'Rolün Kısa Tanımı',
    'role_mfa_enforced' => 'Çok Aşamalı Kimlik Doğrulama Gerekiyor',
    'role_external_auth_id' => 'Harici Doğrulama Kimlikleri',
    'role_system' => 'Sistem Yetkileri',
    'role_manage_users' => 'Kullanıcıları yönet',
    'role_manage_roles' => 'Rolleri ve rol izinlerini yönet',
    'role_manage_entity_permissions' => 'Bütün kitap, bölüm ve sayfa izinlerini yönet',
    'role_manage_own_entity_permissions' => 'Kendine ait kitabın, bölümün ve sayfaların izinlerini yönet',
    'role_manage_page_templates' => 'Sayfa şablonlarını yönet',
    'role_access_api' => 'Sistem programlama arayüzüne (API) eriş',
    'role_manage_settings' => 'Uygulama ayarlarını yönet',
    'role_export_content' => 'İçeriği dışa aktar',
    'role_editor_change' => 'Yazı editörünü değiştir',
    'role_asset' => 'Varlık Yetkileri',
    'roles_system_warning' => 'Yukarıdaki üç izinden herhangi birine erişimin, kullanıcının kendi ayrıcalıklarını veya sistemdeki diğerlerinin ayrıcalıklarını değiştirmesine izin verebileceğini unutmayın. Yalnızca bu izinlere sahip rolleri güvenilir kullanıcılara atayın.',
    'role_asset_desc' => 'Bu izinler, sistem içindeki varlıklara varsayılan erişim izinlerini ayarlar. Kitaplar, bölümler ve sayfalar üzerindeki izinler, buradaki izinleri geçersiz kılar.',
    'role_asset_admins' => 'Yöneticilere otomatik olarak bütün içeriğe erişim yetkisi verilir ancak bu seçenekler, kullanıcı arayüzündeki bazı seçeneklerin gösterilmesine veya gizlenmesine neden olabilir.',
    'role_asset_image_view_note' => 'This relates to visibility within the image manager. Actual access of uploaded image files will be dependant upon system image storage option.',
    'role_all' => 'Hepsi',
    'role_own' => 'Kendine Ait',
    'role_controlled_by_asset' => 'Yüklendikleri varlık tarafından kontrol ediliyor',
    'role_save' => 'Rolü Kaydet',
    'role_users' => 'Bu roldeki kullanıcılar',
    'role_users_none' => 'Bu role henüz bir kullanıcı atanmadı',

    // Users
    'users' => 'Kullanıcılar',
    'users_index_desc' => 'Create & manage individual user accounts within the system. User accounts are used for login and attribution of content & activity. Access permissions are primarily role-based but user content ownership, among other factors, may also affect permissions & access.',
    'user_profile' => 'Kullanıcı Profili',
    'users_add_new' => 'Yeni Kullanıcı Ekle',
    'users_search' => 'Kullanıcı Ara',
    'users_latest_activity' => 'Son Etkinlik',
    'users_details' => 'Kullanıcı Detayları',
    'users_details_desc' => 'Bu kullanıcı için gösterilecek bir isim ve e-posta adresi belirleyin. Buraya yazacağınız e-posta adresi, uygulamaya giriş yaparken kullanılacaktır.',
    'users_details_desc_no_email' => 'Diğer kullanıcılar tarafından tanınabilmesi için bir isim belirleyin.',
    'users_role' => 'Kullanıcı Rolleri',
    'users_role_desc' => 'Bu kullanıcının hangi rollere atanacağını belirleyin. Birden fazla role sahip kullanıcılar, atandığı bütün rollerin yetkilerine sahip olurlar.',
    'users_password' => 'Kullanıcı Şifresi',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'Bu kullanıcıya kendi şifresini belirleyebilmesi için bir davetiye e-postası gönderebilir ya da kullanıcının şifresini kendiniz belirleyebilirsiniz.',
    'users_send_invite_option' => 'Kullanıcıya davetiye e-postası gönder',
    'users_external_auth_id' => 'Harici Doğrulama Kimliği',
    'users_external_auth_id_desc' => 'Bu kimlik numarası (ID), harici kimlik doğrulama sisteminizle iletişim kurarken bu kullanıcıyla eşleştirmek için kullanılır.',
    'users_password_warning' => 'Şifrenizi değiştirmek istiyorsanız, aşağıdaki formu doldurunuz.',
    'users_system_public' => 'Bu kullanıcı, uygulamanızı ziyaret eden bütün misafir kullanıcıları temsil eder. Giriş yapmak için kullanılamaz ancak otomatik olarak atanır.',
    'users_delete' => 'Kullanıcıyı Sil',
    'users_delete_named' => ':userName kullanıcısını sil ',
    'users_delete_warning' => 'Bu işlem \':userName\' kullanıcısını sistemden tamamen silecektir.',
    'users_delete_confirm' => 'Bu kullanıcıyı tamamen silmek istediğinize emin misiniz?',
    'users_migrate_ownership' => 'Sahipliği Taşıyın',
    'users_migrate_ownership_desc' => 'Başka bir kullanıcının şu anda bu kullanıcıya ait olan tüm öğelerin sahibi olmasını istiyorsanız buradan bir kullanıcı seçin.',
    'users_none_selected' => 'Hiçbir kullanıcı seçilmedi',
    'users_edit' => 'Kullanıcıyı Düzenle',
    'users_edit_profile' => 'Profili Düzenle',
    'users_avatar' => 'Avatar',
    'users_avatar_desc' => 'Bu kullanıcıyı temsil eden bir görsel seçin. Bu görsel yaklaşık 256px boyutunda bir kare olmalıdır.',
    'users_preferred_language' => 'Tercih Edilen Dil',
    'users_preferred_language_desc' => 'Bu seçenek, kullanıcı arayüzünün dilini değiştirmek için kullanılır. Burada yapılan değişiklik herhangi bir kullanıcı tarafından oluşturulmuş içeriği etkilemeyecektir.',
    'users_social_accounts' => 'Sosyal Hesaplar',
    'users_social_accounts_info' => 'Buraya diğer hesaplarınızı ekleyerek, uygulamaya daha hızlı ve kolay bir giriş sağlayabilirsiniz. Bir hesabın bağlantısını kesmek daha önce sahip olduğunuz erişimi kaldırmaz. Bağlı sosyal hesabınızın erişimini, profil ayarlarınızdan kaldırabilirsiniz.',
    'users_social_connect' => 'Hesabı Bağla',
    'users_social_disconnect' => 'Hesabın Bağlantısını Kes',
    'users_social_connected' => ':socialAccount hesabı, profilinize başarıyla bağlandı.',
    'users_social_disconnected' => ':socialAccount hesabınızın profilinizle ilişiği başarıyla kesildi.',
    'users_api_tokens' => 'API Anahtarları',
    'users_api_tokens_none' => 'Bu kullanıcı için oluşturulmuş herhangi bir API anahtarı bulunamadı',
    'users_api_tokens_create' => 'Anahtar Oluştur',
    'users_api_tokens_expires' => 'Bitiş süresi',
    'users_api_tokens_docs' => 'API Dokümantasyonu',
    'users_mfa' => 'Çok Aşamalı Kimlik Doğrulama',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Yöntemleri Yapılandır',

    // API Tokens
    'user_api_token_create' => 'API Anahtarı Oluştur',
    'user_api_token_name' => 'İsim',
    'user_api_token_name_desc' => 'Anahtarınıza gelecekte ne amaçla kullanıldığını hatırlatması açısından anlamlı bir isim veriniz.',
    'user_api_token_expiry' => 'Bitiş Tarihi',
    'user_api_token_expiry_desc' => 'Bu anahtarın süresinin dolduğu bir tarih belirleyin. Bu tarihten sonra, bu anahtar kullanılarak yapılan istekler artık çalışmaz. Bu alanı boş bırakmak, bitiş tarihini 100 yıl sonrası yapar.',
    'user_api_token_create_secret_message' => 'Bu anahtar oluşturulduktan hemen sonra bir "ID Anahtarı" ve "Gizli Anahtar" üretilip görüntülenecektir. Gizli anahtar sadece bir defa gösterilecektir, bu yüzden devam etmeden önce bu değeri güvenli bir yere kopyaladığınızdan emin olun.',
    'user_api_token_create_success' => 'API anahtarı başarıyla oluşturuldu',
    'user_api_token_update_success' => 'API anahtarı başarıyla güncellendi',
    'user_api_token' => 'API Erişim Anahtarı',
    'user_api_token_id' => 'Anahtar ID',
    'user_api_token_id_desc' => 'Bu, API isteklerini karşılamak için sistem tarafından oluşturulmuş ve sonradan düzenlenemeyen bir tanımlayıcıdır.',
    'user_api_token_secret' => 'Gizli Anahtar',
    'user_api_token_secret_desc' => 'Bu, API isteklerinde sağlanması gereken anahtar için sistem tarafından oluşturulan bir gizli anahtardır. Bu anahtar sadece bir defa görüntülenecektir, bu nedenle bu değeri güvenli bir yere kopyalayın.',
    'user_api_token_created' => 'Anahtar :timeAgo Oluşturuldu',
    'user_api_token_updated' => 'Anahtar :timeAgo Güncellendi',
    'user_api_token_delete' => 'Anahtarı Sil',
    'user_api_token_delete_warning' => 'Bu işlem \':tokenName\' adındaki API anahtarını sistemden tamamen silecektir.',
    'user_api_token_delete_confirm' => 'Bu API anahtarını silmek istediğinize emin misiniz?',
    'user_api_token_delete_success' => 'API anahtarı başarıyla silindi',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Webhooks are a way to send data to external URLs when certain actions and events occur within the system which allows event-based integration with external platforms such as messaging or notification systems.',
    'webhooks_x_trigger_events' => ':count trigger event|:count trigger events',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Etkinlikler',
    'webhooks_delete' => 'Web Kancasını Sil',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Bu web kancası silmek istediğinize emin misiniz?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',


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
        'da' => 'Danca',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'İbranice',
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
        'sl' => 'Slovence',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
