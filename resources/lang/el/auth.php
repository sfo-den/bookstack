<?php
/**
 * Authentication Language Lines
 * The following language lines are used during authentication for various
 * messages that we need to display to the user.
 */
return [

    'failed' => 'Αυτά τα διαπιστευτήρια δεν ταιριάζουν με τα αρχεία μας.',
    'throttle' => 'Πάρα πολλές προσπάθειες σύνδεσης. Δοκιμάστε ξανά σε :δευτερόλεπτα.',

    // Login & Register
    'sign_up' => 'Εγγραφείτε',
    'log_in' => 'Σύνδεση',
    'log_in_with' => 'Συνδεθείτε με το :socialDriver',
    'sign_up_with' => 'Εγγραφείτε με το :socialDriver',
    'logout' => 'Αποσύνδεση',

    'name' => 'Όνομα',
    'username' => 'Όνομα χρήστη',
    'email' => 'Email',
    'password' => 'Ο κωδικός σας',
    'password_confirm' => 'Επιβεβαιώστε τον κωδικό σας',
    'password_hint' => 'Πρέπει να αποτελείται από τουλάχιστον 8 χαρακτήρες',
    'forgot_password' => 'Ξεχάσατε τον κωδικό σας;',
    'remember_me' => 'Θυμήσου με',
    'ldap_email_hint' => 'Εισαγάγετε ένα email για χρήση για αυτόν τον λογαριασμό.',
    'create_account' => 'Δημιουργήστε λογαριασμό',
    'already_have_account' => 'Έχετε ήδη λογαριασμό;',
    'dont_have_account' => 'Δεν έχετε λογαριασμό;',
    'social_login' => 'Είσοδος με Social MEdia',
    'social_registration' => 'Εγγραφήμε Social MEdia ',
    'social_registration_text' => 'Εγγραφείτε και συνδεθείτε χρησιμοποιώντας άλλη υπηρεσία.',

    'register_thanks' => 'Ευχαριστούμε για την εγγραφή!',
    'register_confirm' => 'Ελέγξτε το email σας και κάντε κλικ στο κουμπί επιβεβαίωσης για πρόσβαση στο :appName.',
    'registrations_disabled' => 'Οι εγγραφές είναι προς το παρόν απενεργοποιημένες',
    'registration_email_domain_invalid' => 'Αυτός ο τομέας ηλεκτρονικού ταχυδρομείου δεν έχει πρόσβαση σε αυτήν την εφαρμογή',
    'register_success' => 'Ευχαριστούμε για την εγγραφή! Είστε πλέον εγγεγραμμένοι και συνδεδεμένοι.',

    // Login auto-initiation
    'auto_init_starting' => 'Προσπάθεια Σύνδεσης',
    'auto_init_starting_desc' => 'We\'re contacting your authentication system to start the login process. If there\'s no progress after 5 seconds you can try clicking the link below.',
    'auto_init_start_link' => 'Proceed with authentication',

    // Password Reset
    'reset_password' => 'Επαναφορά κωδικού πρόσβασης',
    'reset_password_send_instructions' => 'Εισαγάγετε τη διεύθυνση του email σας παρακάτω και θα σας σταλεί ένα μήνυμα με έναν σύνδεσμο επαναφοράς του κωδικού πρόσβασης.',
    'reset_password_send_button' => 'Αποστολή Συνδέσμου Επαναφοράς',
    'reset_password_sent' => 'Ένας σύνδεσμος επαναφοράς κωδικού πρόσβασης θα αποσταλεί στο :email εάν αυτή η διεύθυνση email βρεθεί στο σύστημα.',
    'reset_password_success' => 'Ο κωδικός πρόσβασής σας επαναφέρθηκε με επιτυχία.',
    'email_reset_subject' => 'Επαναφέρετε τον κωδικό πρόσβασης :appName',
    'email_reset_text' => 'Λαμβάνετε αυτό το μήνυμα ηλεκτρονικού ταχυδρομείου επειδή λάβαμε ένα αίτημα επαναφοράς κωδικού πρόσβασης για τον λογαριασμό σας.',
    'email_reset_not_requested' => 'Εάν δεν ζητήσατε επαναφορά του κωδικού πρόσβασης, δεν απαιτείται καμία περαιτέρω ενέργεια.',

    // Email Confirmation
    'email_confirm_subject' => 'Επιβεβαιώστε το email σας στο :appName',
    'email_confirm_greeting' => 'Ευχαριστούμε για τη συμμετοχή σας στο :appName!',
    'email_confirm_text' => 'Επιβεβαιώστε τη διεύθυνση email σας κάνοντας κλικ στο παρακάτω κουμπί:',
    'email_confirm_action' => 'Επιβεβαίωση διεύθυνσης ηλεκτρονικού ταχυδρομείου',
    'email_confirm_send_error' => 'Απαιτείται επιβεβαίωση μέσω email, αλλά το σύστημα δεν μπόρεσε να στείλει το email. Επικοινωνήστε με τον διαχειριστή για να βεβαιωθείτε ότι το email έχει ρυθμιστεί σωστά.',
    'email_confirm_success' => 'Το email σας επιβεβαιώθηκε! Θα πρέπει τώρα να μπορείτε να συνδεθείτε χρησιμοποιώντας αυτήν τη διεύθυνση email.',
    'email_confirm_resent' => 'Το email επιβεβαίωσης στάλθηκε εκ νέου. Ελέγξτε τα εισερχόμενά σας.',
    'email_confirm_thanks' => 'Thanks for confirming!',
    'email_confirm_thanks_desc' => 'Please wait a moment while your confirmation is handled. If you are not redirected after 3 seconds press the "Continue" link below to proceed.',

    'email_not_confirmed' => 'Η διεύθυνση email δεν επιβεβαιώθηκε',
    'email_not_confirmed_text' => 'Η διεύθυνση email σας δεν έχει ακόμη επιβεβαιωθεί.',
    'email_not_confirmed_click_link' => 'Κάντε κλικ στο σύνδεσμο στο email που στάλθηκε λίγο μετά την εγγραφή σας.',
    'email_not_confirmed_resend' => 'Εάν δεν μπορείτε να βρείτε το email, μπορείτε να στείλετε ξανά το email επιβεβαίωσης υποβάλλοντας την παρακάτω φόρμα.',
    'email_not_confirmed_resend_button' => 'Ξαναστείλτε μήνυμα επιβεβαίωσης',

    // User Invite
    'user_invite_email_subject' => 'Έχετε προσκληθεί να συμμετάσχετε :appName!',
    'user_invite_email_greeting' => 'Έχει δημιουργηθεί ένας λογαριασμός για εσάς στο :appName.',
    'user_invite_email_text' => 'Κάντε κλικ στο κουμπί παρακάτω για να ορίσετε έναν κωδικό πρόσβασης λογαριασμού και να αποκτήσετε πρόσβαση:',
    'user_invite_email_action' => 'Ορισμός κωδικού πρόσβασης λογαριασμού',
    'user_invite_page_welcome' => 'Καλωσόρισες στο :appName!',
    'user_invite_page_text' => 'Για να οριστικοποιήσετε τον λογαριασμό σας και να αποκτήσετε πρόσβαση, πρέπει να ορίσετε έναν κωδικό πρόσβασης που θα χρησιμοποιείται για να συνδεθείτε στο :appName σε μελλοντικές επισκέψεις.',
    'user_invite_page_confirm_button' => 'Επιβεβαίωση Κωδικού',
    'user_invite_success_login' => 'Ορίστηκε κωδικός πρόσβασης, θα πρέπει τώρα να μπορείτε να συνδεθείτε χρησιμοποιώντας τον καθορισμένο κωδικό πρόσβασης για να αποκτήσετε πρόσβαση στο :appName!',

    // Multi-factor Authentication
    'mfa_setup' => 'Ρύθμιση ελέγχου ταυτότητας πολλαπλών παραγόντων',
    'mfa_setup_desc' => 'Ρυθμίστε τον έλεγχο ταυτότητας πολλαπλών παραγόντων ως ένα επιπλέον επίπεδο ασφάλειας για τον λογαριασμό χρήστη σας.',
    'mfa_setup_configured' => 'Έχει ήδη διαμορφωθεί',
    'mfa_setup_reconfigure' => 'Επαναδιαμόρφωση',
    'mfa_setup_remove_confirmation' => 'Είστε βέβαιοι ότι θέλετε να καταργήσετε αυτήν τη μέθοδο ελέγχου ταυτότητας πολλαπλών παραγόντων;',
    'mfa_setup_action' => 'Ρύθμιση',
    'mfa_backup_codes_usage_limit_warning' => 'Έχετε λιγότερους από 5 εφεδρικούς κωδικούς που απομένουν. Δημιουργήστε και αποθηκεύστε ένα νέο σύνολο προτού εξαντληθούν οι κωδικοί για να αποφύγετε τον αποκλεισμό του λογαριασμού σας.',
    'mfa_option_totp_title' => 'Εφαρμογή για κινητό',
    'mfa_option_totp_desc' => 'Για να χρησιμοποιήσετε τον έλεγχο ταυτότητας πολλαπλών παραγόντων, θα χρειαστείτε μια εφαρμογή για κινητά που υποστηρίζει TOTP, όπως το Google Authenticator, το Authy ή το Microsoft Authenticator.',
    'mfa_option_backup_codes_title' => 'Εφεδρικοί κωδικοί',
    'mfa_option_backup_codes_desc' => 'Αποθηκεύστε με ασφάλεια ένα σύνολο εφεδρικών κωδικών μίας χρήσης τους οποίους μπορείτε να εισαγάγετε για να επαληθεύσετε την ταυτότητά σας.',
    'mfa_gen_confirm_and_enable' => 'Επιβεβαίωση και ενεργοποίηση',
    'mfa_gen_backup_codes_title' => 'Ρύθμιση εφεδρικών κωδικών',
    'mfa_gen_backup_codes_desc' => 'Αποθηκεύστε την παρακάτω λίστα κωδικών σε ασφαλές μέρος. Κατά την πρόσβαση στο σύστημα, θα μπορείτε να χρησιμοποιήσετε έναν από τους κωδικούς ως δεύτερο μηχανισμό ελέγχου ταυτότητας.',
    'mfa_gen_backup_codes_download' => 'Λήψη κωδικών',
    'mfa_gen_backup_codes_usage_warning' => 'Κάθε κωδικός μπορεί να χρησιμοποιηθεί μόνο μία φορά',
    'mfa_gen_totp_title' => 'Ρύθμιση εφαρμογής για κινητά',
    'mfa_gen_totp_desc' => 'Για να χρησιμοποιήσετε τον έλεγχο ταυτότητας πολλαπλών παραγόντων, θα χρειαστείτε μια εφαρμογή για κινητά που υποστηρίζει TOTP, όπως το Google Authenticator, το Authy ή το Microsoft Authenticator.',
    'mfa_gen_totp_scan' => 'Σαρώστε τον παρακάτω κωδικό QR χρησιμοποιώντας την προτιμώμενη εφαρμογή ελέγχου ταυτότητας για να ξεκινήσετε.',
    'mfa_gen_totp_verify_setup' => 'Επαληθεύστε τη ρύθμιση',
    'mfa_gen_totp_verify_setup_desc' => 'Επαληθεύστε ότι όλα λειτουργούν εισάγοντας έναν κωδικό, που δημιουργήθηκε στην εφαρμογή ελέγχου ταυτότητας, στο παρακάτω πλαίσιο εισαγωγής:',
    'mfa_gen_totp_provide_code_here' => 'Εισάγετε τον κώδικα που δημιουργήθηκε από την εφαρμογή σας εδώ',
    'mfa_verify_access' => 'Επαλήθευση πρόσβασης',
    'mfa_verify_access_desc' => 'Ο λογαριασμός σας απαιτεί να επιβεβαιώσετε την ταυτότητά σας μέσω ενός πρόσθετου επιπέδου επαλήθευσης προτού σας παραχωρηθεί πρόσβαση. Επαληθεύστε χρησιμοποιώντας μία από τις διαμορφωμένες μεθόδους σας για να συνεχίσετε.',
    'mfa_verify_no_methods' => 'Δεν έχουν διαμορφωθεί μέθοδοι.',
    'mfa_verify_no_methods_desc' => 'Δεν βρέθηκαν μέθοδοι ελέγχου ταυτότητας πολλαπλών παραγόντων για τον λογαριασμό σας. Θα χρειαστεί να ρυθμίσετε τουλάχιστον μία μέθοδο προτού αποκτήσετε πρόσβαση.',
    'mfa_verify_use_totp' => 'Επαληθεύστε χρησιμοποιώντας μια εφαρμογή για κινητά',
    'mfa_verify_use_backup_codes' => 'Επαληθεύστε χρησιμοποιώντας έναν εφεδρικό κωδικό',
    'mfa_verify_backup_code' => 'Εφεδρικός κωδικός',
    'mfa_verify_backup_code_desc' => 'Εισαγάγετε έναν από τους υπόλοιπους εφεδρικούς κωδικούς σας παρακάτω:',
    'mfa_verify_backup_code_enter_here' => 'Εισαγάγετε τον εφεδρικό κωδικό εδώ:',
    'mfa_verify_totp_desc' => 'Εισαγάγετε τον κωδικό, που δημιουργήθηκε χρησιμοποιώντας την εφαρμογή σας για κινητά, παρακάτω:',
    'mfa_setup_login_notification' => 'Η μέθοδος πολλαπλών παραγόντων έχει διαμορφωθεί. Συνδεθείτε ξανά χρησιμοποιώντας τη ρυθμισμένη μέθοδο.',
];
