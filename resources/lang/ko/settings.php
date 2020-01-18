<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => '설정',
    'settings_save' => '적용',
    'settings_save_success' => '설정 적용함',

    // App Settings
    'app_customization' => '맞춤',
    'app_features_security' => '보안',
    'app_name' => '사이트 제목',
    'app_name_desc' => '메일을 보낼 때 이 제목을 씁니다.',
    'app_name_header' => '사이트 헤더 사용',
    'app_public_access' => '사이트 공개',
    'app_public_access_desc' => '계정 없는 사용자가 문서를 볼 수 있습니다.',
    'app_public_access_desc_guest' => '이들의 권한은 사용자 이름이 Guest인 사용자로 관리할 수 있습니다.',
    'app_public_access_toggle' => '사이트 공개',
    'app_public_viewing' => '공개할 건가요?',
    'app_secure_images' => '이미지 주소 보호',
    'app_secure_images_toggle' => '이미지 주소 보호',
    'app_secure_images_desc' => '성능상의 문제로 이미지에 누구나 접근할 수 있기 때문에 이미지 주소를 무작위한 문자로 구성합니다. 폴더 색인을 끄세요.',
    'app_editor' => '에디터',
    'app_editor_desc' => '모든 사용자에게 적용합니다.',
    'app_custom_html' => '헤드 작성',
    'app_custom_html_desc' => '설정 페이지를 제외한 모든 페이지 head 태그 끝머리에 추가합니다.',
    'app_custom_html_disabled_notice' => '문제가 생겨도 설정 페이지에서 되돌릴 수 있어요.',
    'app_logo' => '사이트 로고',
    'app_logo_desc' => '높이를 43px로 구성하세요. 큰 이미지는 축소합니다.',
    'app_primary_color' => '사이트 색채',
    'app_primary_color_desc' => '16진수로 구성하세요. 비웠을 때는 기본 색채로 설정합니다.',
    'app_homepage' => '처음 페이지',
    'app_homepage_desc' => '고른 페이지에 설정한 권한은 무시합니다.',
    'app_homepage_select' => '문서 고르기',
    'app_disable_comments' => '댓글 사용 안 함',
    'app_disable_comments_toggle' => '댓글 사용 안 함',
    'app_disable_comments_desc' => '모든 페이지에서 댓글을 숨깁니다.',

    // Color settings
    'content_colors' => '본문 색상',
    'content_colors_desc' => '페이지에 있는 모든 요소에 대한 색상 지정하세요. 가독성을 위해 기본 색상과 유사한 밝기를 가진 색상으로 추천됩니다.',
    'bookshelf_color' => '책선반 색상',
    'book_color' => '책 색상',
    'chapter_color' => '챕터 색상',
    'page_color' => '페이지 색상',
    'page_draft_color' => '드래프트 페이지 색상',

    // Registration Settings
    'reg_settings' => '가입',
    'reg_enable' => '사이트 가입 허용',
    'reg_enable_toggle' => '사이트 가입 허용',
    'reg_enable_desc' => '가입한 사용자는 단일한 권한을 가집니다.',
    'reg_default_role' => '가입한 사용자의 기본 권한',
    'reg_enable_ldap_warning' => 'LDAP 인증이 활성화되었다면 위 옵션은 사용되지 않습니다. LDAP 시스템 인증 사용시 존재하지 않은 멤버 계정은 자동으로 생성됩니다.',
    'reg_email_confirmation' => '메일 주소 확인',
    'reg_email_confirmation_toggle' => '주소 확인 요구',
    'reg_confirm_email_desc' => '도메인 차단을 쓰고 있으면 메일 주소를 확인해야 하고, 이 설정은 무시합니다.',
    'reg_confirm_restrict_domain' => '도메인 차단',
    'reg_confirm_restrict_domain_desc' => '쉼표로 분리해서 가입을 차단할 메일 주소 도메인을 쓰세요. 이 설정과 관계없이 사용자가 메일을 보내고, 가입한 사용자가 메일 주소를 바꿀 수 있습니다.',
    'reg_confirm_restrict_domain_placeholder' => '없음',

    // Maintenance settings
    'maint' => '데이터',
    'maint_image_cleanup' => '이미지 정리',
    'maint_image_cleanup_desc' => "중복한 이미지를 찾습니다. 실행하기 전에 이미지를 백업하세요.",
    'maint_image_cleanup_ignore_revisions' => '수정본에 있는 이미지 제외',
    'maint_image_cleanup_run' => '실행',
    'maint_image_cleanup_warning' => '이미지 :count개를 지울 건가요?',
    'maint_image_cleanup_success' => '이미지 :count개 삭제함',
    'maint_image_cleanup_nothing_found' => '삭제한 것 없음',
    'maint_send_test_email' => '테스트 메일 보내기',
    'maint_send_test_email_desc' => '프로필에 명시된 이메일주소로 테스트 메일이 전송됩니다.',
    'maint_send_test_email_run' => '테스트 메일 보내기',
    'maint_send_test_email_success' => '보낼 이메일 주소',
    'maint_send_test_email_mail_subject' => '테스트 메일',
    'maint_send_test_email_mail_greeting' => '이메일 전송이 성공하였습니다.',
    'maint_send_test_email_mail_text' => '축하합니다! 이 메일을 받음으로 이메일 설정이 정상적으로 되었음을 확인하였습니다.',

    // Role Settings
    'roles' => '권한',
    'role_user_roles' => '사용자 권한',
    'role_create' => '권한 만들기',
    'role_create_success' => '권한 만듦',
    'role_delete' => '권한 지우기',
    'role_delete_confirm' => ':roleName(을)를 지웁니다.',
    'role_delete_users_assigned' => '이 권한을 가진 사용자 :userCount명에 할당할 권한을 고르세요.',
    'role_delete_no_migration' => "할당하지 않음",
    'role_delete_sure' => '이 권한을 지울 건가요?',
    'role_delete_success' => '권한 지움',
    'role_edit' => '권한 수정',
    'role_details' => '권한 정보',
    'role_name' => '권한 이름',
    'role_desc' => '설명',
    'role_external_auth_id' => 'LDAP 확인',
    'role_system' => '시스템 권한',
    'role_manage_users' => '사용자 관리',
    'role_manage_roles' => '권한 관리',
    'role_manage_entity_permissions' => '문서별 권한 관리',
    'role_manage_own_entity_permissions' => '직접 만든 문서별 권한 관리',
    'role_manage_page_templates' => '템플릿 관리',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => '사이트 설정 관리',
    'role_asset' => '권한 항목',
    'role_asset_desc' => '책자, 챕터, 문서별 권한은 이 설정에 우선합니다.',
    'role_asset_admins' => 'Admin 권한은 어디든 접근할 수 있지만 이 설정은 사용자 인터페이스에서 해당 활동을 표시할지 결정합니다.',
    'role_all' => '모든 항목',
    'role_own' => '직접 만든 항목',
    'role_controlled_by_asset' => '저마다 다름',
    'role_save' => '저장',
    'role_update_success' => '권한 저장함',
    'role_users' => '이 권한을 가진 사용자들',
    'role_users_none' => '그런 사용자가 없습니다.',

    // Users
    'users' => '사용자',
    'user_profile' => '사용자 프로필',
    'users_add_new' => '사용자 만들기',
    'users_search' => '사용자 검색',
    'users_details' => '사용자 정보',
    'users_details_desc' => '메일 주소로 로그인합니다.',
    'users_details_desc_no_email' => '사용자 이름을 바꿉니다.',
    'users_role' => '사용자 권한',
    'users_role_desc' => '고른 권한 모두를 적용합니다.',
    'users_password' => '비밀번호',
    'users_password_desc' => '여섯 글자를 넘어야 합니다.',
    'users_send_invite_text' => '비밀번호 설정을 권유하는 메일을 보내거나 내가 정할 수 있습니다.',
    'users_send_invite_option' => '메일 보내기',
    'users_external_auth_id' => 'LDAP 확인',
    'users_external_auth_id_desc' => 'LDAP 서버에 연결할 때 사용자를 확인합니다.',
    'users_password_warning' => '비밀번호를 바꿀 때만 쓰세요.',
    'users_system_public' => '계정 없는 모든 사용자에 할당한 사용자입니다. 이 사용자로 로그인할 수 없어요.',
    'users_delete' => '사용자 삭제',
    'users_delete_named' => ':userName 삭제',
    'users_delete_warning' => ':userName에 관한 데이터를 지웁니다.',
    'users_delete_confirm' => '이 사용자를 지울 건가요?',
    'users_delete_success' => '사용자 삭제함',
    'users_edit' => '사용자 수정',
    'users_edit_profile' => '프로필 바꾸기',
    'users_edit_success' => '프로필 바꿈',
    'users_avatar' => '프로필 이미지',
    'users_avatar_desc' => '이미지 규격은 256x256px 내외입니다.',
    'users_preferred_language' => '언어',
    'users_preferred_language_desc' => '문서 내용에는 아무런 영향을 주지 않습니다.',
    'users_social_accounts' => '소셜 계정',
    'users_social_accounts_info' => '다른 계정으로 간단하게 로그인하세요. 여기에서 계정 연결을 끊는 것과 소셜 계정에서 접근 권한을 취소하는 것은 별개입니다.',
    'users_social_connect' => '계정 연결',
    'users_social_disconnect' => '계정 연결 끊기',
    'users_social_connected' => ':socialAccount(와)과 연결했습니다.',
    'users_social_disconnected' => ':socialAccount(와)과의 연결을 끊었습니다.',
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
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'nl' => 'Nederlands',
        'pt_BR' => 'Português do Brasil',
        'sk' => 'Slovensky',
        'cs' => 'Česky',
        'sv' => 'Svenska',
        'ko' => '한국어',
        'ja' => '日本語',
        'pl' => 'Polski',
        'it' => 'Italian',
        'ru' => 'Русский',
        'uk' => 'Українська',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
        'hu' => 'Magyar',
        'tr' => 'Türkçe',
    ]
    //!////////////////////////////////
];
