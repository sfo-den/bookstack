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
    'app_footer_links' => '푸터 링크',
    'app_footer_links_desc' => '사이트 푸터에 표시할 링크를 추가합니다. 로그인이 필요하지 않은 페이지들을 포함하여 대부분의 페이지 하단에 표시됩니다. 시스템 정의 번역을 사용하기 위해 "trans::<key>"를 사용할 수 있습니다. 예를 들어: "trans::common.privacy_policy"를 사용하면 번역된 "개인정보처리방침"이 제공되며, "trans::common.terms_of_service"는 번역된 "이용약관"를 제공합니다.',
    'app_footer_links_label' => '링크 라벨',
    'app_footer_links_url' => '링크 URL',
    'app_footer_links_add' => '푸터 링크 추가',
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
    'page_draft_color' => '초안 페이지 색상',

    // Registration Settings
    'reg_settings' => '가입',
    'reg_enable' => '사이트 가입 허용',
    'reg_enable_toggle' => '사이트 가입 허용',
    'reg_enable_desc' => '가입한 사용자는 단일한 권한을 가집니다.',
    'reg_default_role' => '가입한 사용자의 기본 권한',
    'reg_enable_external_warning' => '외부 LDAP 또는 SAML 인증이 활성화되어 있는 동안에는 위의 옵션이 무시된다. 사용 중인 외부 시스템에 대해 인증이 성공하면, 존재하지 않는 회원에 대한 사용자 계정이 자동으로 생성된다.',
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
    'maint_delete_images_only_in_revisions' => '구 문서 수정본에만 있는 이미지도 삭제하기',
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
    'maint_recycle_bin_desc' => '삭제된 서가, 책자, 챕터 & 문서들을 휴지통으로 보내져 복구하거나 또는 영구적으로 삭제할 수 있습니다. 휴지통의 오래된 항목은 시스템 구성에 따라 잠시 후 자동으로 삭제될 수 있습니다.',
    'maint_recycle_bin_open' => '휴지통 열기',

    // Recycle Bin
    'recycle_bin' => '휴지통',
    'recycle_bin_desc' => '여기서 삭제된 항목을 복원하거나 시스템에서 영구적으로 제거하도록 선택할 수 있습니다. 이 목록은 권한 필터가 적용되는 시스템의 유사한 활동 목록과 달리 필터링되지 않습니다.',
    'recycle_bin_deleted_item' => '삭제된 항목',
    'recycle_bin_deleted_by' => '삭제자',
    'recycle_bin_deleted_at' => '삭제 시간',
    'recycle_bin_permanently_delete' => '영구적으로 삭제하기',
    'recycle_bin_restore' => '복원하기',
    'recycle_bin_contents_empty' => '휴지통은 현재 비어있습니다.',
    'recycle_bin_empty' => '휴지통 비우기',
    'recycle_bin_empty_confirm' => '각 항목에 포함된 내용을 포함하여 휴지통의 모든 항목이 영구히 삭제됩니다. 휴지통을 비우시겠습니까?',
    'recycle_bin_destroy_confirm' => '이 작업을 수행하면 아래 나열된 하위 요소와 함께 이 항목이 시스템에서 영구적으로 삭제되고 이 내용을 복원할 수 없습니다. 이 항목을 완전히 삭제하시겠습니까?',
    'recycle_bin_destroy_list' => '삭제할 항목들',
    'recycle_bin_restore_list' => '복원할 항목들',
    'recycle_bin_restore_confirm' => '이 작업을 수행하면 하위 요소를 포함하여 삭제된 항목이 원래 위치로 복원됩니다. 원래 위치가 삭제되고 현재 휴지통에 있는 경우 상위 항목도 복원해야 합니다.',
    'recycle_bin_restore_deleted_parent' => '이 항목의 상위 항목도 삭제되었습니다. 상위 항목도 복원될 때까지 삭제된 상태로 유지됩니다.',
    'recycle_bin_destroy_notification' => '휴지통에서 총 :count 개의 항목들이 삭제되었습니다.',
    'recycle_bin_restore_notification' => '휴지통에서 총 :count 개의 항목들이 복원되었습니다.',

    // Audit Log
    'audit' => '감사 기록',
    'audit_desc' => '이 감사 로그는 시스템에서 추적한 활동 목록을 표시합니다. 이 목록은 권한 필터가 적용되는 시스템의 유사한 활동 목록과 달리 필터링되지 않습니다.',
    'audit_event_filter' => '이벤트 필터',
    'audit_event_filter_no_filter' => '필터 없음',
    'audit_deleted_item' => '삭제된 항목',
    'audit_deleted_item_name' => '이름: :name',
    'audit_table_user' => '사용자',
    'audit_table_event' => '이벤트',
    'audit_table_related' => '관련 항목 또는 세부 정보',
    'audit_table_date' => '활동 날짜',
    'audit_date_from' => '날짜 범위 시작',
    'audit_date_to' => '날짜 범위 끝',

    // Role Settings
    'roles' => '권한',
    'role_user_roles' => '사용자 권한',
    'role_create' => '권한 만들기',
    'role_create_success' => '권한 만듦',
    'role_delete' => '권한 제거',
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
    'role_access_api' => '시스템 접근 API',
    'role_manage_settings' => '사이트 설정 관리',
    'role_asset' => '권한 항목',
    'roles_system_warning' => '위의 세 가지 권한 중 하나에 액세스하면 사용자가 자신의 권한이나 시스템 내 다른 사용자의 권한을 변경할 수 있습니다. 이러한 권한이 있는 역할만 신뢰할 수 있는 사용자에게 할당합니다.',
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
    'users_latest_activity' => '최근 활동',
    'users_details' => '사용자 정보',
    'users_details_desc' => '메일 주소로 로그인합니다.',
    'users_details_desc_no_email' => '사용자 이름을 바꿉니다.',
    'users_role' => '사용자 권한',
    'users_role_desc' => '고른 권한 모두를 적용합니다.',
    'users_password' => '사용자 비밀번호',
    'users_password_desc' => '여섯 글자를 넘어야 합니다.',
    'users_send_invite_text' => '비밀번호 설정을 권유하는 메일을 보내거나 내가 정할 수 있습니다.',
    'users_send_invite_option' => '메일 보내기',
    'users_external_auth_id' => 'LDAP 확인',
    'users_external_auth_id_desc' => '외부 인증 시스템과 통신할 때 사용자와 연결시키는 데 사용되는 ID 입니다.',
    'users_password_warning' => '비밀번호를 바꿀 때만 쓰세요.',
    'users_system_public' => '계정 없는 모든 사용자에 할당한 사용자입니다. 이 사용자로 로그인할 수 없어요.',
    'users_delete' => '사용자 삭제',
    'users_delete_named' => ':userName 삭제',
    'users_delete_warning' => ':userName에 관한 데이터를 지웁니다.',
    'users_delete_confirm' => '이 사용자를 지울 건가요?',
    'users_migrate_ownership' => '소유권 이전',
    'users_migrate_ownership_desc' => '다른 사용자가 현재 이 사용자가 소유하고 있는 모든 항목의 소유자가 되려면 여기서 사용자를 선택하십시오.',
    'users_none_selected' => '선택된 사용자가 없습니다.',
    'users_delete_success' => '사용자가 성공적으로 삭제되었습니다.',
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
    'users_api_tokens' => 'API 토큰',
    'users_api_tokens_none' => '이 사용자를 위해 생성된 API 토큰이 없습니다.',
    'users_api_tokens_create' => '토큰 만들기',
    'users_api_tokens_expires' => '만료',
    'users_api_tokens_docs' => 'API 설명서',

    // API Tokens
    'user_api_token_create' => 'API 토큰 만들기',
    'user_api_token_name' => '제목',
    'user_api_token_name_desc' => '토큰이 의도한 목적을 향후에 상기시키기 위해 알아보기 쉬운 이름을 지정한다.',
    'user_api_token_expiry' => '만료일',
    'user_api_token_expiry_desc' => '이 토큰이 만료되는 날짜를 설정한다. 이 날짜가 지나면 이 토큰을 사용하여 만든 요청은 더 이상 작동하지 않는다. 이 칸을 공백으로 두면 100년 뒤가 만기가 된다.',
    'user_api_token_create_secret_message' => '이 토큰을 만든 직후 "토큰 ID"와 "토큰 시크릿"이 생성되서 표시 된다. 시크릿은 한 번만 표시되므로 계속 진행하기 전에 안전하고 안심할 수 있는 곳에 값을 복사한다.',
    'user_api_token_create_success' => 'API 토큰이 성공적으로 생성되었다.',
    'user_api_token_update_success' => 'API 토큰이 성공적으로 갱신되었다.',
    'user_api_token' => 'API 토큰',
    'user_api_token_id' => '토큰 ID',
    'user_api_token_id_desc' => '이 토큰은 API 요청으로 제공되어야 하는 편집 불가능한 시스템이 생성한 식별자다.',
    'user_api_token_secret' => '토큰 시크릿',
    'user_api_token_secret_desc' => '이것은 API 요청시 제공되어야 할 이 토큰에 대한 시스템에서 생성된 시크릿이다. 이 값은 한 번만 표시되므로 안전하고 한심할 수 있는 곳에 이 값을 복사한다.',
    'user_api_token_created' => ':timeAgo 전에 토큰이 생성되었다.',
    'user_api_token_updated' => ':timeAgo 전에 토큰이 갱신되었다.',
    'user_api_token_delete' => '토큰 삭제',
    'user_api_token_delete_warning' => '이렇게 하면 시스템에서 \':tokenName\'이라는 이름을 가진 이 API 토큰이 완전히 삭제된다.',
    'user_api_token_delete_confirm' => '이 API 토큰을 삭제하시겠습니까?',
    'user_api_token_delete_success' => 'API 토큰이 성공적으로 삭제되었다.',

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
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => '히브리어',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
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
