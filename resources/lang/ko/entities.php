<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => '최근에 수정함',
    'recently_created_pages' => '최근에 만든 문서',
    'recently_updated_pages' => '최근에 수정한 문서',
    'recently_created_chapters' => '최근에 만든 챕터',
    'recently_created_books' => '최근에 만든 책자',
    'recently_created_shelves' => '최근에 만든 서가',
    'recently_update' => '최근에 수정함',
    'recently_viewed' => '최근에 읽음',
    'recent_activity' => '최근에 활동함',
    'create_now' => '바로 만들기',
    'revisions' => '수정본',
    'meta_revision' => '판본 #:revisionCount',
    'meta_created' => '만듦 :timeLength',
    'meta_created_name' => '만듦 :timeLength, :user',
    'meta_updated' => '수정함 :timeLength',
    'meta_updated_name' => '수정함 :timeLength, :user',
    'entity_select' => '항목 선택',
    'images' => '이미지',
    'my_recent_drafts' => '쓰다 만 문서',
    'my_recently_viewed' => '내가 읽은 문서',
    'no_pages_viewed' => '문서 없음',
    'no_pages_recently_created' => '문서 없음',
    'no_pages_recently_updated' => '문서 없음',
    'export' => '파일로 받기',
    'export_html' => 'Contained Web(.html) 파일',
    'export_pdf' => 'PDF 파일',
    'export_text' => 'Plain Text(.txt) 파일',

    // Permissions and restrictions
    'permissions' => '권한',
    'permissions_intro' => '한번 허용하면 이 설정은 사용자 권한에 우선합니다.',
    'permissions_enable' => '설정 허용',
    'permissions_save' => '권한 저장',

    // Search
    'search_results' => '검색 결과',
    'search_total_results_found' => ':count개|총 :count개',
    'search_clear' => '기록 지우기',
    'search_no_pages' => '결과 없음',
    'search_for_term' => ':term 검색',
    'search_more' => '더 많은 결과',
    'search_filters' => '고급 검색',
    'search_content_type' => '형식',
    'search_exact_matches' => '정확히 일치',
    'search_tags' => '꼬리표 일치',
    'search_options' => '선택',
    'search_viewed_by_me' => '내가 읽음',
    'search_not_viewed_by_me' => '내가 읽지 않음',
    'search_permissions_set' => '권한 설정함',
    'search_created_by_me' => '내가 만듦',
    'search_updated_by_me' => '내가 수정함',
    'search_date_options' => '날짜',
    'search_updated_before' => '이전에 수정함',
    'search_updated_after' => '이후에 수정함',
    'search_created_before' => '이전에 만듦',
    'search_created_after' => '이후에 만듦',
    'search_set_date' => '날짜 설정',
    'search_update' => '검색',

    // Shelves
    'shelf' => '서가',
    'shelves' => '서가',
    'x_shelves' => '서가 :count개|총 :count개',
    'shelves_long' => '서가',
    'shelves_empty' => '만든 서가가 없습니다.',
    'shelves_create' => '서가 만들기',
    'shelves_popular' => '많이 읽은 서가',
    'shelves_new' => '새로운 서가',
    'shelves_new_action' => '새로운 서가',
    'shelves_popular_empty' => '많이 읽은 서가 목록',
    'shelves_new_empty' => '새로운 서가 목록',
    'shelves_save' => '저장',
    'shelves_books' => '이 서가에 있는 책자들',
    'shelves_add_books' => '이 서가에 책자 추가',
    'shelves_drag_books' => '여기에 책자를 드롭하세요.',
    'shelves_empty_contents' => '이 서가에 책자가 없습니다.',
    'shelves_edit_and_assign' => '서가 바꾸기로 책자를 추가하세요.',
    'shelves_edit_named' => ':name 바꾸기',
    'shelves_edit' => '서가 바꾸기',
    'shelves_delete' => '서가 지우기',
    'shelves_delete_named' => ':name 지우기',
    'shelves_delete_explain' => ":name을 지웁니다. 책자는 지우지 않습니다.",
    'shelves_delete_confirmation' => '이 서가를 지울 건가요?',
    'shelves_permissions' => '서가 권한',
    'shelves_permissions_updated' => '서가 권한 바꿈',
    'shelves_permissions_active' => '서가 권한 허용함',
    'shelves_copy_permissions_to_books' => '권한 맞춤',
    'shelves_copy_permissions' => '실행',
    'shelves_copy_permissions_explain' => '서가의 모든 책자에 이 권한을 적용합니다. 서가의 권한을 저장했는지 확인하세요.',
    'shelves_copy_permission_success' => '책자 :count개 권한 바꿈',

    // Books
    'book' => '서고',
    'books' => '서고',
    'x_books' => '책자 :count개|총 :count개',
    'books_empty' => '만든 책자가 없습니다.',
    'books_popular' => '많이 읽은 책자',
    'books_recent' => '최근에 읽은 책자',
    'books_new' => '새로운 책자',
    'books_new_action' => '새로운 책자',
    'books_popular_empty' => '많이 읽은 책자 목록',
    'books_new_empty' => '새로운 책자 목록',
    'books_create' => '책자 만들기',
    'books_delete' => '책자 지우기',
    'books_delete_named' => ':bookName(을)를 지웁니다.',
    'books_delete_explain' => ':bookName에 있는 모든 챕터와 문서도 지웁니다.',
    'books_delete_confirmation' => '이 책자를 지울 건가요?',
    'books_edit' => '책자 바꾸기',
    'books_edit_named' => ':bookName(을)를 바꿉니다.',
    'books_form_book_name' => '책자 이름',
    'books_save' => '저장',
    'books_permissions' => '책자 권한',
    'books_permissions_updated' => '권한 저장함',
    'books_empty_contents' => '이 책자에 챕터나 문서가 없습니다.',
    'books_empty_create_page' => '문서 만들기',
    'books_empty_sort_current_book' => '읽고 있는 책자 정렬',
    'books_empty_add_chapter' => '챕터 만들기',
    'books_permissions_active' => '책자 권한 허용함',
    'books_search_this' => '이 책자에서 검색',
    'books_navigation' => '목차',
    'books_sort' => '다른 책자들',
    'books_sort_named' => ':bookName 정렬',
    'books_sort_name' => '제목',
    'books_sort_created' => '만든 날짜',
    'books_sort_updated' => '수정한 날짜',
    'books_sort_chapters_first' => '챕터 우선',
    'books_sort_chapters_last' => '문서 우선',
    'books_sort_show_other' => '다른 책자들',
    'books_sort_save' => '적용',

    // Chapters
    'chapter' => '챕터',
    'chapters' => '챕터',
    'x_chapters' => '챕터 :count개|총 :count개',
    'chapters_popular' => '많이 읽은 챕터',
    'chapters_new' => '새로운 챕터',
    'chapters_create' => '챕터 만들기',
    'chapters_delete' => '챕터 지우기',
    'chapters_delete_named' => ':chapterName(을)를 지웁니다.',
    'chapters_delete_explain' => ':chapterName에 있는 모든 문서는 챕터에서 벗어날 뿐 지우지 않습니다.',
    'chapters_delete_confirm' => '이 챕터를 지울 건가요?',
    'chapters_edit' => '챕터 바꾸기',
    'chapters_edit_named' => ':chapterName 바꾸기',
    'chapters_save' => '저장',
    'chapters_move' => '챕터 옮기기',
    'chapters_move_named' => ':chapterName 옮기기',
    'chapter_move_success' => ':bookName(으)로 옮김',
    'chapters_permissions' => '챕터 권한',
    'chapters_empty' => '이 챕터에 문서가 없습니다.',
    'chapters_permissions_active' => '문서 권한 허용함',
    'chapters_permissions_success' => '권한 저장함',
    'chapters_search_this' => '이 챕터에서 검색',

    // Pages
    'page' => '문서',
    'pages' => '문서',
    'x_pages' => '문서 :count개|총 :count개',
    'pages_popular' => '많이 읽은 문서',
    'pages_new' => '새로운 문서',
    'pages_attachments' => '첨부',
    'pages_navigation' => '목차',
    'pages_delete' => '문서 지우기',
    'pages_delete_named' => ':pageName 지우기',
    'pages_delete_draft_named' => ':pageName 지우기',
    'pages_delete_draft' => '쓰다 만 문서 지우기',
    'pages_delete_success' => '문서 지움',
    'pages_delete_draft_success' => '쓰다 만 문서 지움',
    'pages_delete_confirm' => '이 문서를 지울 건가요?',
    'pages_delete_draft_confirm' => '쓰다 만 문서를 지울 건가요?',
    'pages_editing_named' => ':pageName 수정',
    'pages_edit_draft_options' => '쓰다 만 문서 선택',
    'pages_edit_save_draft' => '보관',
    'pages_edit_draft' => '쓰다 만 문서 수정',
    'pages_editing_draft' => '쓰다 만 문서 수정',
    'pages_editing_page' => '문서 수정',
    'pages_edit_draft_save_at' => '보관함: ',
    'pages_edit_delete_draft' => '삭제',
    'pages_edit_discard_draft' => '폐기',
    'pages_edit_set_changelog' => '수정본 설명',
    'pages_edit_enter_changelog_desc' => '수정본 설명',
    'pages_edit_enter_changelog' => '설명',
    'pages_save' => '저장',
    'pages_title' => '문서 제목',
    'pages_name' => '문서 이름',
    'pages_md_editor' => '에디터',
    'pages_md_preview' => '미리 보기',
    'pages_md_insert_image' => '이미지 추가',
    'pages_md_insert_link' => '내부 링크',
    'pages_md_insert_drawing' => '드로잉 추가',
    'pages_not_in_chapter' => '챕터에 있는 문서가 아닙니다.',
    'pages_move' => '문서 옮기기',
    'pages_move_success' => ':parentName(으)로 옮김',
    'pages_copy' => '문서 복제',
    'pages_copy_desination' => '복제할 위치',
    'pages_copy_success' => '복제함',
    'pages_permissions' => '문서 권한',
    'pages_permissions_success' => '문서 권한 바꿈',
    'pages_revision' => '수정본',
    'pages_revisions' => '문서 수정본',
    'pages_revisions_named' => ':pageName 수정본',
    'pages_revision_named' => ':pageName 수정본',
    'pages_revisions_created_by' => '만든 사용자',
    'pages_revisions_date' => '수정한 날짜',
    'pages_revisions_number' => 'No.',
    'pages_revisions_numbered' => '수정본 :id',
    'pages_revisions_numbered_changes' => '수정본 :id에서 바꾼 부분',
    'pages_revisions_changelog' => '설명',
    'pages_revisions_changes' => '바꾼 부분',
    'pages_revisions_current' => '현재 판본',
    'pages_revisions_preview' => '미리 보기',
    'pages_revisions_restore' => '복원',
    'pages_revisions_none' => '수정본이 없습니다.',
    'pages_copy_link' => '주소 복사',
    'pages_edit_content_link' => '수정',
    'pages_permissions_active' => '문서 권한 허용함',
    'pages_initial_revision' => '처음 판본',
    'pages_initial_name' => '제목 없음',
    'pages_editing_draft_notification' => ':timeDiff에 쓰다 만 문서입니다.',
    'pages_draft_edited_notification' => '최근에 수정한 문서이기 때문에 쓰다 만 문서를 폐기하는 편이 좋습니다.',
    'pages_draft_edit_active' => [
        'start_a' => ':count명이 이 문서를 수정하고 있습니다.',
        'start_b' => ':userName이 이 문서를 수정하고 있습니다.',
        'time_a' => '수정본이 생겼습니다.',
        'time_b' => '(:minCount분 전)',
        'message' => ':start :time. 다른 사용자의 수정본을 덮어쓰지 않도록 주의하세요.',
    ],
    'pages_draft_discarded' => '쓰다 만 문서를 지웠습니다. 에디터에 현재 판본이 나타납니다.',
    'pages_specific' => '특정한 문서',
    'pages_is_template' => '템플릿',

    // Editor Sidebar
    'page_tags' => '문서 꼬리표',
    'chapter_tags' => '챕터 꼬리표',
    'book_tags' => '책자 꼬리표',
    'shelf_tags' => '서가 꼬리표',
    'tag' => '꼬리표',
    'tags' =>  '꼬리표',
    'tag_name' =>  '꼬리표 이름',
    'tag_value' => '리스트 값 (선택 사항)',
    'tags_explain' => "태그로 문서를 분류하세요.",
    'tags_add' => '태그 추가',
    'tags_remove' => '태그 삭제',
    'attachments' => '첨부 파일',
    'attachments_explain' => '파일이나 링크를 첨부하세요. 정보 탭에 나타납니다.',
    'attachments_explain_instant_save' => '여기에서 바꾼 내용은 바로 적용합니다.',
    'attachments_items' => '첨부한 파일들',
    'attachments_upload' => '파일 올리기',
    'attachments_link' => '링크로 첨부',
    'attachments_set_link' => '링크 설정',
    'attachments_delete_confirm' => '삭제하려면 버튼을 한 번 더 클릭하세요.',
    'attachments_dropzone' => '여기에 파일을 드롭하거나 여기를 클릭하세요.',
    'attachments_no_files' => '올린 파일 없음',
    'attachments_explain_link' => '파일을 올리지 않고 링크로 첨부할 수 있습니다.',
    'attachments_link_name' => '링크 이름',
    'attachment_link' => '파일 주소',
    'attachments_link_url' => '파일로 링크',
    'attachments_link_url_hint' => '파일 주소',
    'attach' => '파일 첨부',
    'attachments_edit_file' => '파일 수정',
    'attachments_edit_file_name' => '파일 이름',
    'attachments_edit_drop_upload' => '여기에 파일을 드롭하거나 여기를 클릭하세요. 파일을 올리거나 덮어쓸 수 있습니다.',
    'attachments_order_updated' => '첨부 순서 바꿈',
    'attachments_updated_success' => '첨부 파일 정보 수정함',
    'attachments_deleted' => '첨부 파일 삭제함',
    'attachments_file_uploaded' => '파일 올림',
    'attachments_file_updated' => '파일 바꿈',
    'attachments_link_attached' => '링크 첨부함',
    'templates' => '템플릿',
    'templates_set_as_template' => '템플릿',
    'templates_explain_set_as_template' => '템플릿은 보기 권한만 있어도 문서에 쓸 수 있습니다.',
    'templates_replace_content' => '문서 대체',
    'templates_append_content' => '문서 앞에 추가',
    'templates_prepend_content' => '문서 뒤에 추가',

    // Profile View
    'profile_user_for_x' => ':time 전에 가입함',
    'profile_created_content' => '활동한 이력',
    'profile_not_created_pages' => ':userName(이)가 만든 문서 없음',
    'profile_not_created_chapters' => ':userName(이)가 만든 챕터 없음',
    'profile_not_created_books' => ':userName(이)가 만든 책자 없음',
    'profile_not_created_shelves' => ':userName(이)가 만든 서가 없음',

    // Comments
    'comment' => '댓글',
    'comments' => '댓글',
    'comment_add' => '댓글 쓰기',
    'comment_placeholder' => '이곳에 댓글을 쓰세요...',
    'comment_count' => '{0} 댓글 없음|{1} 댓글 1개|[2,*] 댓글 :count개',
    'comment_save' => '등록',
    'comment_saving' => '저장하는 중...',
    'comment_deleting' => '삭제하는 중...',
    'comment_new' => '새로운 댓글',
    'comment_created' => '댓글 등록함 :createDiff',
    'comment_updated' => ':username(이)가 댓글 수정함 :updateDiff',
    'comment_deleted_success' => '댓글 지움',
    'comment_created_success' => '댓글 등록함',
    'comment_updated_success' => '댓글 수정함',
    'comment_delete_confirm' => '이 댓글을 지울 건가요?',
    'comment_in_reply_to' => ':commentId(을)를 향한 답글',

    // Revision
    'revision_delete_confirm' => '이 수정본을 지울 건가요?',
    'revision_restore_confirm' => '이 수정본을 되돌릴 건가요? 현재 판본을 바꿉니다.',
    'revision_delete_success' => '수정본 지움',
    'revision_cannot_delete_latest' => '현재 판본은 지울 수 없습니다.'
];