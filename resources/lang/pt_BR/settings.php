<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Configurações',
    'settings_save' => 'Salvar Configurações',
    'settings_save_success' => 'Configurações salvas',

    // App Settings
    'app_customization' => 'Customização',
    'app_features_security' => 'Recursos & Segurança',
    'app_name' => 'Nome da Aplicação',
    'app_name_desc' => 'Esse nome será mostrado no cabeçalho e em e-mails.',
    'app_name_header' => 'Mostrar o nome no cabeçalho',
    'app_public_access' => 'Acesso Público',
    'app_public_access_desc' => 'Habilitar esta opção irá permitir que visitantes, que não estão logados, acessem o conteúdo em sua instância do BookStack.',
    'app_public_access_desc_guest' => 'O acesso de visitantes públicos pode ser controlado através do usuário "Convidado".',
    'app_public_access_toggle' => 'Permitir acesso público',
    'app_public_viewing' => 'Permitir visualização pública?',
    'app_secure_images' => 'Upload de Imagens mais Seguro',
    'app_secure_images_toggle' => 'Habilitar uploads de imagem mais seguro',
    'app_secure_images_desc' => 'Por razões de performance, todas as imagens são públicas. Esta opção adiciona uma string randômica na frente das URLs de imagens. Certifique-se de que os diretórios não possam ser indexados para prevenir acesso indesejado.',
    'app_editor' => 'Editor de Página',
    'app_editor_desc' => 'Selecione qual editor será utilizado pelos usuários ao editar páginas.',
    'app_custom_html' => 'Conteúdo customizado para <head> HTML',
    'app_custom_html_desc' => 'Quaisquer conteúdos aqui adicionados serão inseridos no final da seção <head> de cada página. Essa é uma maneira útil de sobrescrever estilos e adicionar códigos de análise de site.',
    'app_custom_html_disabled_notice' => 'O conteúdo customizado do <head> HTML está desabilitado nesta página de configurações, para garantir que quaisquer alterações danosas possam ser revertidas.',
    'app_logo' => 'Logo da Aplicação',
    'app_logo_desc' => 'A imagem deve ter 43px de altura. <br>Imagens maiores serão reduzidas.',
    'app_primary_color' => 'Cor Primária da Aplicação',
    'app_primary_color_desc' => 'Define a cor primária para a aplicação, incluindo o banner, botões e links.',
    'app_homepage' => 'Página Inicial',
    'app_homepage_desc' => 'Selecione uma opção para ser exibida como página inicial em vez da padrão. Permissões de página serão ignoradas para as páginas selecionadas.',
    'app_homepage_select' => 'Selecione uma página',
    'app_footer_links' => 'Links do Rodapé',
    'app_footer_links_desc' => 'Add links to show within the site footer. These will be displayed at the bottom of most pages, including those that do not require login. You can use a label of "trans::<key>" to use system-defined translations. For example: Using "trans::common.privacy_policy" will provide the translated text "Privacy Policy" and "trans::common.terms_of_service" will provide the translated text "Terms of Service".',
    'app_footer_links_label' => 'Etiqueta do Link',
    'app_footer_links_url' => 'URL do Link',
    'app_footer_links_add' => 'Adicionar Link de Rodapé',
    'app_disable_comments' => 'Desativar Comentários',
    'app_disable_comments_toggle' => 'Desativar comentários',
    'app_disable_comments_desc' => 'Desativar comentários em todas as páginas no aplicativo.<br> Comentários existentes não serão exibidos.',

    // Color settings
    'content_colors' => 'Cores do Conteúdo',
    'content_colors_desc' => 'Define as cores para todos os elementos da hierarquia de organização de páginas. Escolher cores com brilho similar ao das cores padrão é aconselhável para a legibilidade.',
    'bookshelf_color' => 'Cor da Prateleira',
    'book_color' => 'Cor do Livro',
    'chapter_color' => 'Cor do Capítulo',
    'page_color' => 'Cor da Página',
    'page_draft_color' => 'Cor do Rascunho',

    // Registration Settings
    'reg_settings' => 'Cadastro',
    'reg_enable' => 'Habilitar Cadastro',
    'reg_enable_toggle' => 'Habilitar cadastro',
    'reg_enable_desc' => 'Quando o cadastro é habilitado, visitantes poderão cadastrar-se como usuários do aplicativo. Realizado o cadastro, recebem um único cargo padrão.',
    'reg_default_role' => 'Cargo padrão para usuários após o cadastro',
    'reg_enable_external_warning' => 'A opção acima é ignorada enquanto a autenticação externa LDAP ou SAML estiver ativa. Contas de usuários para membros não existentes serão criadas automaticamente se a autenticação pelo sistema externo em uso for bem sucedida.',
    'reg_email_confirmation' => 'Confirmação de E-mail',
    'reg_email_confirmation_toggle' => 'Requerer confirmação de e-mail',
    'reg_confirm_email_desc' => 'Em caso da restrição de domínios estar em uso, a confirmação de e-mail será requerida e essa opção será ignorada.',
    'reg_confirm_restrict_domain' => 'Restrição de Domínios',
    'reg_confirm_restrict_domain_desc' => 'Entre com uma lista separada por vírgulas de domínios de e-mails aos quais você deseja restringir o cadastro. Um e-mail de confirmação será enviado para o usuário validar seu endereço de e-mail antes de ser permitido a interagir com a aplicação. <br> Note que os usuários serão capazes de alterar o seus endereços de e-mail após o sucesso na confirmação do cadastro.',
    'reg_confirm_restrict_domain_placeholder' => 'Nenhuma restrição definida',

    // Maintenance settings
    'maint' => 'Manutenção',
    'maint_image_cleanup' => 'Limpeza de Imagens',
    'maint_image_cleanup_desc' => 'Examina páginas e revisa seus conteúdos para verificar quais imagens e desenhos estão atualmente em uso e quais são redundantes. Certifique-se de criar um backup completo do banco de dados e imagens antes de executar esta ação.',
    'maint_delete_images_only_in_revisions' => 'Também excluir imagens que existem apenas em revisões de página antigas',
    'maint_image_cleanup_run' => 'Executar Limpeza',
    'maint_image_cleanup_warning' => ':count imagens potencialmente não utilizadas foram encontradas. Tem certeza de que deseja excluir estas imagens?',
    'maint_image_cleanup_success' => ':count imagens potencialmente não utilizadas foram encontradas e excluídas!',
    'maint_image_cleanup_nothing_found' => 'Nenhuma imagem não utilizada foi encontrada, nada foi excluído!',
    'maint_send_test_email' => 'Enviar um E-mail de Teste',
    'maint_send_test_email_desc' => 'Esta opção envia um e-mail de teste para o endereço especificado no seu perfil.',
    'maint_send_test_email_run' => 'Enviar e-mail de teste',
    'maint_send_test_email_success' => 'E-mail enviado para :address',
    'maint_send_test_email_mail_subject' => 'E-mail de Teste',
    'maint_send_test_email_mail_greeting' => 'O envio de e-mails parece funcionar!',
    'maint_send_test_email_mail_text' => 'Parabéns! Já que você recebeu esta notificação, suas opções de e-mail parecem estar configuradas corretamente.',
    'maint_recycle_bin_desc' => 'Prateleiras, livros, capítulos e páginas deletados são mandados para a lixeira podendo assim ser restaurados ou excluídos permanentemente. Itens mais antigos da lixeira podem vir a ser automaticamente removidos da lixeira após um tempo dependendo da configuração do sistema.',
    'maint_recycle_bin_open' => 'Abrir Lixeira',

    // Recycle Bin
    'recycle_bin' => 'Lixeira',
    'recycle_bin_desc' => 'Aqui você pode restaurar itens que foram excluídos ou escolher removê-los permanentemente do sistema. Esta lista não é filtrada diferentemente de listas de atividades similares no sistema onde filtros de permissão são aplicados.',
    'recycle_bin_deleted_item' => 'Item excluído',
    'recycle_bin_deleted_parent' => 'Parent',
    'recycle_bin_deleted_by' => 'Excluído por',
    'recycle_bin_deleted_at' => 'Momento de Exclusão',
    'recycle_bin_permanently_delete' => 'Excluir permanentemente',
    'recycle_bin_restore' => 'Restaurar',
    'recycle_bin_contents_empty' => 'A lixeira está vazia',
    'recycle_bin_empty' => 'Esvaziar Lixeira',
    'recycle_bin_empty_confirm' => 'Isso irá destruir permanentemente todos os itens na lixeira inclusive o conteúdo de cada item. Tem certeza de que quer esvaziar a lixeira?',
    'recycle_bin_destroy_confirm' => 'Esta ação irá excluir permanentemente do sistema este item junto com todos os elementos filhos listados abaixo. Você não poderá restaurar esse conteúdo. Tem certeza de que deseja excluir permanentemente este item?',
    'recycle_bin_destroy_list' => 'Itens a serem Destruídos',
    'recycle_bin_restore_list' => 'Itens a serem restaurados',
    'recycle_bin_restore_confirm' => 'Esta ação irá restaurar o item excluído, inclusive quaisquer elementos filhos, para seu local original. Se a localização original tiver, entretanto, sido eliminada e estiver agora na lixeira, o item pai também precisará ser restaurado.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_restore_parent' => 'Restore Parent',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Registro de auditoria',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Filtro de Eventos',
    'audit_event_filter_no_filter' => 'Sem filtro',
    'audit_deleted_item' => 'Item excluído',
    'audit_deleted_item_name' => 'Nome: :name',
    'audit_table_user' => 'Usuário',
    'audit_table_event' => 'Evento',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_ip' => 'IP Address',
    'audit_table_date' => 'Data da Atividade',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => 'Cargos',
    'role_user_roles' => 'Cargos de Usuário',
    'role_create' => 'Criar novo Cargo',
    'role_create_success' => 'Cargo criado com sucesso',
    'role_delete' => 'Excluir Cargo',
    'role_delete_confirm' => 'A ação vai excluír o cargo de nome \':roleName\'.',
    'role_delete_users_assigned' => 'Esse cargo tem :userCount usuários vinculados a ele. Se quiser migrar usuários desse cargo para outro, selecione um novo cargo.',
    'role_delete_no_migration' => 'Não migre os usuários',
    'role_delete_sure' => 'Tem certeza que deseja excluir esse cargo?',
    'role_delete_success' => 'Cargo excluído com sucesso',
    'role_edit' => 'Editar Cargo',
    'role_details' => 'Detalhes do Cargo',
    'role_name' => 'Nome do Cargo',
    'role_desc' => 'Breve Descrição do Cargo',
    'role_mfa_enforced' => 'Requires Multi-Factor Authentication',
    'role_external_auth_id' => 'IDs de Autenticação Externa',
    'role_system' => 'Permissões do Sistema',
    'role_manage_users' => 'Gerenciar usuários',
    'role_manage_roles' => 'Gerenciar cargos e permissões de cargos',
    'role_manage_entity_permissions' => 'Gerenciar todos os livros, capítulos e permissões de páginas',
    'role_manage_own_entity_permissions' => 'Gerenciar permissões de seu próprio livro, capítulo e paginas',
    'role_manage_page_templates' => 'Gerenciar modelos de página',
    'role_access_api' => 'Acessar API do sistema',
    'role_manage_settings' => 'Gerenciar configurações da aplicação',
    'role_export_content' => 'Export content',
    'role_asset' => 'Permissões de Ativos',
    'roles_system_warning' => 'Esteja ciente de que o acesso a qualquer uma das três permissões acima pode permitir que um usuário altere seus próprios privilégios ou privilégios de outros usuários no sistema. Apenas atribua cargos com essas permissões para usuários confiáveis.',
    'role_asset_desc' => 'Essas permissões controlam o acesso padrão para os ativos dentro do sistema. Permissões em Livros, Capítulos e Páginas serão sobrescritas por essas permissões.',
    'role_asset_admins' => 'Administradores recebem automaticamente acesso a todo o conteúdo, mas essas opções podem mostrar ou ocultar as opções da Interface de Usuário.',
    'role_all' => 'Todos',
    'role_own' => 'Próprio',
    'role_controlled_by_asset' => 'Controlado pelos ativos nos quais o upload foi realizado',
    'role_save' => 'Salvar Cargo',
    'role_update_success' => 'Cargo atualizado com sucesso',
    'role_users' => 'Usuários com este cargo',
    'role_users_none' => 'Nenhum usuário está atualmente vinculado a este cargo',

    // Users
    'users' => 'Usuários',
    'user_profile' => 'Perfil do Usuário',
    'users_add_new' => 'Adicionar Novo Usuário',
    'users_search' => 'Pesquisar Usuários',
    'users_latest_activity' => 'Última Atividade',
    'users_details' => 'Detalhes do Usuário',
    'users_details_desc' => 'Defina um nome de exibição e um endereço de e-mail para este usuário. O endereço de e-mail será usado para fazer login na aplicação.',
    'users_details_desc_no_email' => 'Defina um nome de exibição para este usuário para que outros usuários possam reconhecê-lo',
    'users_role' => 'Cargos do Usuário',
    'users_role_desc' => 'Selecione os cargos aos quais este usuário será vinculado. Se um usuário for vinculado a múltiplos cargos, suas permissões serão empilhadas e ele receberá todas as habilidades dos cargos atribuídos.',
    'users_password' => 'Senha do Usuário',
    'users_password_desc' => 'Defina uma senha usada para fazer login na aplicação. Esta deve ter pelo menos 6 caracteres.',
    'users_send_invite_text' => 'Você pode escolher enviar a este usuário um convite por e-mail que o possibilitará definir sua própria senha, ou defina você uma senha.',
    'users_send_invite_option' => 'Enviar convite por e-mail',
    'users_external_auth_id' => 'ID de Autenticação Externa',
    'users_external_auth_id_desc' => 'Este ID é usado para relacionar o usuário quando comunicando com algum sistema de autenticação externo.',
    'users_password_warning' => 'Apenas preencha os dados abaixo caso queira modificar a sua senha.',
    'users_system_public' => 'Esse usuário representa quaisquer convidados que visitam o aplicativo. Ele não pode ser usado para login mas é automaticamente atribuído.',
    'users_delete' => 'Excluir Usuário',
    'users_delete_named' => 'Excluir :userName',
    'users_delete_warning' => 'A ação vai excluir completamente o usuário de nome \':userName\' do sistema.',
    'users_delete_confirm' => 'Tem certeza que deseja excluir esse usuário?',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'Nenhum usuário selecionado',
    'users_delete_success' => 'Usuário removido com sucesso',
    'users_edit' => 'Editar Usuário',
    'users_edit_profile' => 'Editar Perfil',
    'users_edit_success' => 'Usuário atualizado com sucesso',
    'users_avatar' => 'Imagem de Usuário',
    'users_avatar_desc' => 'Defina uma imagem para representar este usuário. Essa imagem deve ser um quadrado com aproximadamente 256px de altura e largura.',
    'users_preferred_language' => 'Linguagem de Preferência',
    'users_preferred_language_desc' => 'Esta opção irá alterar o idioma utilizado para a interface de usuário da aplicação. Isto não afetará nenhum conteúdo criado por usuários.',
    'users_social_accounts' => 'Contas Sociais',
    'users_social_accounts_info' => 'Aqui você pode conectar outras contas para acesso mais rápido. Desconectar uma conta não retira a possibilidade de acesso usando-a. Para revogar o acesso ao perfil através da conta social, você deverá fazê-lo na sua conta social.',
    'users_social_connect' => 'Contas Conectadas',
    'users_social_disconnect' => 'Desconectar Conta',
    'users_social_connected' => 'Conta :socialAccount foi conectada com sucesso ao seu perfil.',
    'users_social_disconnected' => 'Conta :socialAccount foi desconectada com sucesso de seu perfil.',
    'users_api_tokens' => 'Tokens de API',
    'users_api_tokens_none' => 'Nenhum token de API foi criado para este usuário',
    'users_api_tokens_create' => 'Criar Token',
    'users_api_tokens_expires' => 'Expira',
    'users_api_tokens_docs' => 'Documentação da API',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Criar Token de API',
    'user_api_token_name' => 'Nome',
    'user_api_token_name_desc' => 'Dê ao seu token um nome legível como um futuro lembrete de seu propósito.',
    'user_api_token_expiry' => 'Data de Expiração',
    'user_api_token_expiry_desc' => 'Defina uma data em que este token expira. Depois desta data, as requisições feitas usando este token não funcionarão mais. Deixar este campo em branco definirá um prazo de 100 anos futuros.',
    'user_api_token_create_secret_message' => 'Imediatamente após a criação deste token, um "ID de token" e "Secreto de token" serão gerados e exibidos. O segredo só será mostrado uma única vez, portanto, certifique-se de copiar o valor para algum lugar seguro antes de prosseguir.',
    'user_api_token_create_success' => 'Token de API criado com sucesso',
    'user_api_token_update_success' => 'Token de API atualizado com sucesso',
    'user_api_token' => 'Token de API',
    'user_api_token_id' => 'ID do Token',
    'user_api_token_id_desc' => 'Este é um identificador de sistema não editável, gerado para este token, que precisará ser fornecido em solicitações de API.',
    'user_api_token_secret' => 'Segredo do Token',
    'user_api_token_secret_desc' => 'Este é um segredo de sistema gerado para este token que precisará ser fornecido em requisições de API. Isto só será mostrado nesta única vez, portanto, copie este valor para um lugar seguro.',
    'user_api_token_created' => 'Token Criado :timeAgo',
    'user_api_token_updated' => 'Token Atualizado :timeAgo',
    'user_api_token_delete' => 'Excluir Token',
    'user_api_token_delete_warning' => 'Isto irá excluir completamente este token de API com o nome \':tokenName\' do sistema.',
    'user_api_token_delete_confirm' => 'Você tem certeza que deseja excluir este token de API?',
    'user_api_token_delete_success' => 'Token de API excluído com sucesso',

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
        'et' => 'Eesti keel',
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
