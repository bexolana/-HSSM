<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="uploads/settings/favicon.png" type="image/png" />
    <title>
        SMM Portal
    </title>
    <link rel="stylesheet" href="backend/css/jquery-ui7b4a.css" />

    <link rel="stylesheet" href="backend/vendors/font_awesome/css/all.min7b4a.css" />
    <link rel="stylesheet" href="backend/css/themify-icons7b4a.css" />


    <link rel="stylesheet" href="chat/css/style7b4a.css">
    <link rel="stylesheet" href="css/preloader7b4a.css" />
    <link rel="stylesheet" href="whatsapp-support/style7b4a.css" />

    <link rel="stylesheet" href="backend/css/fullcalendar.min7b4a.css">

    <link rel="stylesheet" href="backend/css/app7b4a.css">



    <link rel="stylesheet" href="backend/css/backend_style7b4a.css" />

    <!-- uppy css -->
    <link rel="stylesheet" href="vendor/uppy/uppy.min.css">
    <link rel="stylesheet" href="vendor/uppy/media.css">
    <link rel="stylesheet" href="backend/css/daterangepicker.css">
    <script src="js/common7b4a.js" type="application/javascript"></script>

    <script>
        window.Laravel = {
            "baseUrl": '' + '/',
            "current_path_without_domain": 'dashboard',
            "csrfToken": '{{ csrf_token() }}',
        }
    </script>

    <script>
        window._locale = 'en';
        window._translations = { "data_success": "Success ", "data_update": "Update ", "data_showing": "showing ", "data_entries": " entries", "data_to": "to", "data_of": "of", "data_no_data_available_in_table": "No Data Available In This Table", "data_search": "Search", "data_drag_drop": "Drag & Drop your files or", "data_browse": "Browse", "data_invalid_file": "Field contains invalid files", "data_wait_for_size": "Waiting for size", "data_upload": "Upload", "data_retry": "Retry", "data_undo": "Undo", "data_cancel": "Cancel", "data_abort": "Abort", "data_remove": "Remove", "data_tap_to_undo": "tap to undo", "data_tap_to_retry": "tap to retry", "data_tab_or_wait": "tap to cancel | Wait until see Uploaded completed", "data_error_during_revert": "Error during revert", "data_error_during_upload": "Error during upload", "data_upload_cancel": "Upload cancelled", "data_upload_complete": "Upload Completed", "data_uploading": "Uploading", "data_error_during_remove": "Error during remove", "data_removed": "Removed", "data_error_during_load": "Error during load", "data_added": "Added", "data_loading": "Loading...", "data_files_in_list": "files in list", "data_file_in_list": "file in list", "data_size_not_available": "Size not available", "data_operation_success": "Operation successful", "data_something_went_wrong": "Something went wrong", "data_error": "Error", "data_select_option": "Please select a option", "data_select_match": "Please match a option", "data_write_ans": "Please Write Answer", "data_quick_search": "Quick Search", "data_characters_count": "characters count", "no_data_available": "No data available", "data_all": "All", "data_info_filtered": "filtered from", "data_show": "Show", "data_processing": "Processing...", "data_no_match": "No matching records found", "data_first": "First", "data_last": "Last", "data_col_visibility": "Column Visibility", "data_col_restore": "Restore visibility", "data_collection": "Collection", "data_copy": "Copy", "data_copy_keys": "Press ctrl or u2318 + C to copy the table data to your system clipboard.", "data_copy_cancel": "To cancel, click this message or press escape.", "data_copy_success": "Copied 1 row to clipboard", "data_copied": "Copied", "data_rows_to_clipboard": "rows to clipboard", "data_copy_to_clipboard": "Copy to Clipboard", "data_csv": "CSV", "data_excel": "Excel", "data_show_all_rows": "Show all rows", "data_rows": "rows", "data_pdf": "PDF", "data_print": "Print", "data_restore": "Restore", "data_states": "States", "data_rename": "Rename", "data_remove_all": "Remove All", "data_create": "Create", "data_previous": "Previous", "data_next": "Next", "data_hours": "hours", "data_minutes": "minutes", "data_seconds": "seconds", "data_am": "AM", "data_pm": "PM", "data_Sun": "Sun", "data_Mon": "Mon", "data_Tue": "Tue", "data_Wed": "Wed", "data_Thu": "Thu", "data_Fri": "Fri", "data_Sat": "Sat", "data_January": "January", "data_February": "February", "data_March": "March", "data_April": "April", "data_May": "May", "data_June": "June", "data_July": "July", "data_August": "August", "data_September": "September", "data_October": "October", "data_November": "November", "data_December": "December", "data_info_empty": "Showing 0 to 0 of 0 entries", "data_aora_editor": "Editing with Aora Editor", "data_view_mobile": "View on mobile", "data_view_tablet": "View on tablet", "data_view_laptop": "View on laptop", "data_view_desktop": "View on desktop", "data_preview_on": "Preview ON", "data_preview_off": "Preview OFF", "data_fullscreen_on": "Fullscreen ON", "data_fullscreen_off": "Fullscreen Off", "data_save": "Save", "data_add_content": "Add content", "data_add_content_below": "Add content below", "data_paste_content": "Paste content", "data_paste_content_below": "Paste content below", "data_drag": ["Drag", "Draggable"], "data_move_up": "Move up", "data_move_down": "Move down", "data_setting": "Setting", "data_cut": "Cut", "data_delete": "Delete", "data_category": "Category", "data_type_to_search": "Type to search...", "data_drag_to_resize": "Drag to resize", "data_container_settings": "Container Settings", "data_confirm_delete_container": "Are you sure that you want to delete this container? This action can not be undone!", "data_confirm_delete_component": "Are you sure that you want to delete this component? This action can not be undone!", "data_select_options": "Select options", "data_selected": "selected", "data_select_all": "Select all", "data_unselect_all": "Unselect all", "data_none_selected": "None selected", "data_all_selected": "All selected", "data_select": "Select", "data_apply": "Apply", "data_from": "From", "data_custom": "Custom", "data_today": "Today", "data_yesterday": "Yesterday", "data_last_7_days": "Last 7 Days", "data_last_30_days": "Last 30 Days", "data_this_month": "This Month", "data_last_month": "Last Month", "data_this_year": "This Year", "data_last_year": "Last Year", "data_browse_files": "Browse Files", "data_10": "10", "data_25": "25", "data_50": "50", "data_100": "100", "or": "or", "username": "Username", "email": "Email", "phone": "Phone", "active": "Active", "inactive": "Inactive", "list": "List", "create": "Create", "browse": "Browse", "photo": "Photo", "name": "Name", "update": "Update", "chatting": "Chatting", "method": "Method", "settings": "Settings", "files": "Files", "file": "File", "new": "New", "chat": "Chat", "message": "Message", "type": "Type", "send": "Send", "sent": "Sent", "delete": "Delete", "pusher": "Pusher", "jquery": "jQuery", "yes": "Yes", "select": "Select", "no": "No", "invitation": "invitation", "results": "Results", "user": "User", "requirement": "Requirement", "required": "Required", "not": "Not", "generate": "Generate", "notifications": "Notifications", "notification": "Notification", "permission": "Permission", "connections": "Connections", "connection": "Connection", "connected": "Connected", "for": "For", "group": "Group", "mark_as_read_only": "Mark as Read Only", "remove_read_only": "Remove Read Only", "teacher": "Teacher", "and": "And", "remove": "Remove", "old": "Old", "courses": "Courses", "student": "Student", "request": "Request", "requested": "Requested", "found": "Found", "people": "People", "block": "Block", "unblock": "Unblock", "start": "Start", "to": "To", "with": "With", "add": "Add", "admin": "Admin", "moderator": "Moderator", "user_role": "User Role", "member": "Member", "leave": "Leave", "media_files": "Media Files", "search": "Search", "you": "You", "you_requests": "You Requests", "box": "Box", "blocked": "Blocked", "requests": "Requests", "connect": "Connect", "can_teacher_chat_with_parents": "Can Teacher Chat With Parents", "can_student_chat_with_admin_accounts": "Can Student Chat With Admin, Accounts", "mb": "Megabyte", "can": "Can", "can_staff_or_teacher_ban_tudent": "Can Staff or Teacher Ban Student", "teacher_can_pinned_top_message": "Teacher Can Pinned Top Message", "conversition": "Conversation", "this": "This", "load_more": "Load More", "attachment": "Attachment", "forwarded_message": "Forwarded Message", "forward": "Forward", "quote": "Quote", "replying": "Replying", "preview": "Preview", "keywords": "Keywords", "showing": "Showing", "your_voice_is_recording": "Your Voice Is Recording", "moderate": "Moderate", "write_something_Optional": "Write something (Optional)", "away": "Away", "busy": "Busy", "someone": "Someone", "is_typing": "Is Typing", "mark_all_as_read": "Mark all as read", "you_are_invited_in_new_group": "You are invited in new group", "new_message_in_this_group": "New message in this group", "chat_box": "Chat Box", "Search result of": "Search Result of", "connected_with_you": "Connected with you", "chat_list": "Chat List", "blocked_user": "Blocked User", "block_this_user": "Block This User", "unblock_this_user": "UnBlock This User", "description": "Description", "manage_role": "Manage Role", "people_connected_with_you": "People connected with you", "can_make_group": "Can Make Group", "upload_file_limit": "Upload File Limit", "can_upload_file": "Can Upload File", "open_chat_system": "Open Chat System", "admin_can_chat_without_invitation": "Admin Can Chat Without Invitation", "search_result_of": "Search result of", "chat_not_active": "Chat Disabled", "chat_not_active_hint": "Chat is not available for this class" };
        window.jsLang = function (key, replace) {
            let output = '';

            if (key.includes('.')) {
                const parts = key.split('.');
                key = parts[1];
            }

            if (window._translations.hasOwnProperty(key)) {
                output = window._translations[key];
            } else {
                output = key;
            }
            return output;

        }

        function localizeNumbers(text) {
            let numberMap = {
                '0': '0',
                '1': '1',
                '2': '2',
                '3': '3',
                '4': '4',
                '5': '5',
                '6': '6',
                '7': '7',
                '8': '8',
                '9': '9',
            };
            text = text.toString();
            return text.replace(/[0-9]/g, function (match) {
                return numberMap[match];
            });
        }

        window.translatedNumber = function (data) {

            var parsedValue = parseFloat(data);

            if (!isNaN(parsedValue) && isFinite(parsedValue)) {
                return localizeNumbers(data);
            } else {
                return data;
            }

        }

    </script>


    <div>
        <style data-type="aoraeditor-style">
            :root {
                --system_primery_color: #FB1159;
                --system_secendory_color: #202E3B;
                --footer_background_color: #1E2147;
                --footer_headline_color: #ffffff;
                --footer_text_color: #5B5C6E;
                --footer_text_hover_color: #FB1159;
                --bg_color: #ffffff;

                --menu_bg: #f8f9fa;
                --menu_text: #2b3d4e;
                --menu_hover_text: #FB1159;
                --menu_title_text: #202E3B;


                --system_primery_color_0: #FB115900;
                --system_primery_color_05: #FB11590d;
                --system_primery_color_07: #FB115912;
                --system_primery_color_08: #FB115914;
                --system_primery_color_10: #FB11591a;
                --system_primery_color_20: #FB115933;
                --system_primery_color_30: #FB11594d;
                --system_primery_color_50: #FB115980;
                --system_primery_color_60: #FB115999;
                --system_primery_color_70: #FB1159b3;
                --system_secendory_color_10: #202E3B1a;
                --sytem_gradient_2: #202E3B;


                --font_family1: "Source Sans Pro", sans-serif;
                --font_family2: "Jost", sans-serif;


            }
        </style>
        <script src="/ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: [
                        "Source Sans Pro",
                        "Jost"
                    ]
                }
            });
        </script>
    </div>

    <style>
        :root {
            --white: #fff;
            --icon: #000;
            --backend-main-bg: #F7F7FA;
            --backend-primary-color: #556ee6;
            --header-bg: #fff;
            --sidebar-bg: #2A3042;
            --sidebar-link: #a6b0cf;
            --sidebar-link-active: #fff;
            --dashboard-summery-bg: #fff;
            --header-search-bg: #F3F3F9;
            --theme-default-color: #343a40;
            --notification-count: #fff;
            --icon-color: #555B6D;
            --icon-color-active: #212636;
            --sun-yellow: #c3530f;
            --white-box-bg: #fff;
            --sidebar-mini-link-hover: #2e3548;
            --card-header-bg: rgba(0, 0, 0, 0.03);
            --uppy-title-color: #000;
            --uppy-action-btn-color: #415094;
            --uppy-border: #dfdfdf;
            --selector-bg: #fff;
            --selector-shadow: 0px 10px 20px rgb(0 0 0 / 30%);
            --data-table-info: #415094;
            --data-table-row-hover: #fff;
            --pink-color: var(--backend-primary-color);
            --button-background: #556ee6;
            --button-hover: #485ec4;
            --pagination-bg: #fff;
            --pagination-color: ;
            --disabled-pagination-btn: #fff;
            --disabled-pagination-color: #000;
            --shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, .03);
            --white_box_shadow: 0 0.75rem 1.5rem #12263f08;
            --popup_box_shadow: 0 1rem 3rem rgba(0, 0, 0, .175);
            --backend-border-color: #eff2f7;
            --border-hover-color: #d3dbe9;
            --nav-tab: #cad5f3;
            --nav-tab-active: var(--backend-main-bg);
            --dropdown-bg: var(--white);
            --notification-palse: rgba(85, 110, 230, 0.75);
            --dynamic-text-color: #495057;
            --required-red: #FF0000;
            --table-head: #eff2f7;
            --scroll-thumb: #a6b0cf;
            --scroll-thumb-hover: var(--backend-primary-color);
            --topnav-link: #fff9;
            --topnav-submenu-link: #545a6d;
            --footer-bg: #f2f2f5;
            --muted-text: rgba(33, 37, 41, 0.75);
            --bs-modal-bg: var(--backend-main-bg);
            --payment-logo-border-color: #E7EAEE;

        }


        .dark {
            --white: #fff;
            --icon: #fff;
            --backend-main-bg: #222736;
            --backend-primary-color: #556ee6;
            --header-bg: #262b3c;
            --sidebar-bg: #2A3042;
            --sidebar-link: #a6b0cf;
            --sidebar-link-active: #fff;
            --dashboard-summery-bg: #2A3042;
            --header-search-bg: #2A3042;
            --theme-default-color: #f6f6f6;
            --notification-count: #ffffff;
            --icon-color: #f6f6f6;
            --icon-color-active: #fff;
            --uppy-border-color: #32394e;
            --white-box-bg: #2A3042;
            --sidebar-mini-link-hover: #2e3548;
            --card-header-bg: #2e3548;
            --uppy-title-color: #fff;
            --uppy-action-btn-color: #6275cb;
            --uppy-border: #353d55;
            --selector-bg: #2A3042;
            --selector-shadow: 0px 10px 20px rgb(0 0 0 / 30%);
            --data-table-info: #f6f6f6;
            --data-table-row-hover: #2A3042;
            --pink-color: var(--backend-primary-color);
            --button-background: #556ee6;
            --button-hover: #485ec4;
            --pagination-bg: #2A3042;
            --pagination-color: #fff;
            --disabled-pagination-btn: #2A3042;
            --disabled-pagination-color: #fff;
            --shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, .03);
            --white_box_shadow: 0 0.75rem 1.5rem #12263f08;
            --popup_box_shadow: 0 1rem 3rem rgba(0, 0, 0, .175);
            --backend-border-color: #32394e;
            --border-hover-color: #6a7492;
            --nav-tab: var(--header-bg);
            --nav-tab-active: var(--backend-main-bg);
            --dropdown-bg: var(--backend-main-bg);
            --notification-palse: rgba(255, 255, 255, 0.75);
            --dynamic-text-color: #a6b0cf;
            --required-red: #FF3535;
            --table-head: #32394e;
            --scroll-thumb: #a6b0cf;
            --scroll-thumb-hover: var(--backend-primary-color);
            --topnav-link: #fff9;
            --topnav-submenu-link: var(--topnav-link);
            --footer-bg: #262b3c;
            --muted-text: rgba(255, 255, 255, 0.5);
            --bs-secondary-color: rgba(255, 255, 255, 0.5);
            --bs-modal-bg: var(--backend-main-bg);
            --payment-logo-border-color: #E7EAEE26;
        }
    </style>

    <script>
        const RTL = "";
        const LANG = "en";
    </script>

    <style>
        [wire\:loading],
        [wire\:loading\.delay],
        [wire\:loading\.inline-block],
        [wire\:loading\.inline],
        [wire\:loading\.block],
        [wire\:loading\.flex],
        [wire\:loading\.table],
        [wire\:loading\.grid] {
            display: none;
        }

        [wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short],
        [wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        input:-webkit-autofill,
        select:-webkit-autofill,
        textarea:-webkit-autofill {
            animation-duration: 50000s;
            animation-name: livewireautofill;
        }

        @keyframes livewireautofill {
            from {}
        }
    </style>

</head>

<div class="container-fluid g-0" id="main-nav-for-chat">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="header_iner d-flex justify-content-end justify-content-lg-between align-items-center ">
                <input type="hidden" id="logo_img">
                <input type="hidden" id="logo_title" value="SMM Portal">
                <div class="small_logo_crm d-lg-none">
                    <a href="../index.html"> <img src="uploads/settings/logo.png" alt=""></a>
                </div>
                <div id="sidebarCollapse" class="sidebar_icon  d-lg-none">
                    <i class="ti-menu"></i>
                </div>

                <button class="navbar-toggler sidebar_icon top-fixed d-none d-lg-none" type="button"
                    data-bs-toggle="collapse" data-bs-target="#backendNavBarToggler"
                    aria-controls="backendNavBarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-menu"></i>
                </button>

                <div class="collaspe_icon open_miniSide">
                    <i class="ti-menu"></i>
                </div>

                <div class="d-flex align-items-center">
                    
                </div>



                <div class="header_right d-flex justify-content-between align-items-center">
                    <link rel="stylesheet" href="vendor/flipdown/flipdown.css" />
                    <script src="vendor/flipdown/flipdown.js"></script>
                    <style>
                        .flipdown .rotor {}
                    </style>
                    <div id="flipdown" class="flipdown"></div>


                    <ul class="header_notification_warp d-flex align-items-center gap-25">

                        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Visit Website"
                            data-bs-custom-class="tooltip-zindex">
                            <a target="_blank" class="visit_website_btn" href="/index">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7.99998 3H8.99998C7.04998 8.84 7.04998 15.16 8.99998 21H7.99998"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M15 3C16.95 8.84 16.95 15.16 15 21" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3 16V15C8.84 16.95 15.16 16.95 21 15V16" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3 9.0001C8.84 7.0501 15.16 7.0501 21 9.0001" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>



                        <li class="scroll_notification_list" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Notifications" data-bs-custom-class="tooltip-zindex">
                            <a class="pulse theme_color bell_notification_clicker show_notifications" href="#">
                                <!-- bell   -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M12.02 2.90991C8.70997 2.90991 6.01997 5.59991 6.01997 8.90991V11.7999C6.01997 12.4099 5.75997 13.3399 5.44997 13.8599L4.29997 15.7699C3.58997 16.9499 4.07997 18.2599 5.37997 18.6999C9.68997 20.1399 14.34 20.1399 18.65 18.6999C19.86 18.2999 20.39 16.8699 19.73 15.7699L18.58 13.8599C18.28 13.3399 18.02 12.4099 18.02 11.7999V8.90991C18.02 5.60991 15.32 2.90991 12.02 2.90991Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" />
                                    <path
                                        d="M13.87 3.19994C13.56 3.10994 13.24 3.03994 12.91 2.99994C11.95 2.87994 11.03 2.94994 10.17 3.19994C10.46 2.45994 11.18 1.93994 12.02 1.93994C12.86 1.93994 13.58 2.45994 13.87 3.19994Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M15.02 19.0601C15.02 20.7101 13.67 22.0601 12.02 22.0601C11.2 22.0601 10.44 21.7201 9.90002 21.1801C9.36002 20.6401 9.02002 19.8801 9.02002 19.0601"
                                        stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" />
                                </svg>

                                <!--/ bell   -->
                                <span class="notificationCount notification_count">1</span>
                                <span class="pulse-ring notification_count_pulse"></span>
                            </a>
                            <!-- Menu_NOtification_Wrap  -->
                            <div class="Menu_NOtification_Wrap notifications_wrap">
                                <div class="notification_Header">
                                    <h4>Notifications</h4>
                                </div>
                                <div class="Notification_body">
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-top"
                                        id="menu_notification_show_dd056d92-9dd3-4527-95eb-fcb738645697">
                                        <div class="notify_thumb">
                                            <i class="fa fa-bell"></i>
                                        </div>
                                        <a href="#" class="unread_notification" title="Mark As Read"
                                            data-notification_id="dd056d92-9dd3-4527-95eb-fcb738645697">
                                            <div class="notify_content">
                                                <h5>New Enroll Notification</h5>
                                                <p>1 hour ago</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--/ Menu_NOtification_Wrap  -->
                        </li>




                    </ul>
                    <div class="profile_info">
                        <div class="profileThumb" style="background-image: url('uploads/settings/logo.png')">
                        </div>

                        <div class="profile_info_iner">
                            <div class="use_info px-3 d-flex align-items-center">
                                <div class="thumb" style="background-image: url('uploads/settings/logo.png')">

                                </div>
                                <div class="user_text">
                                    <p>Welcome</p>
                                    <span>Super Admin </span>
                                </div>
                            </div>

                            <div class="profile_info_details">

                                <a href="/ManagerProfile" class="px-4 py-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span>Account Settings </span>
                                </a>
                                <div class="log-out-link-container">
                                    <a href="../index.html" class="px-4 py-2 log-out-link" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        <!-- <i class="ti-shift-left"></i>  -->
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.90002 7.55999C9.21002 3.95999 11.06 2.48999 15.11 2.48999H15.24C19.71 2.48999 21.5 4.27999 21.5 8.74999V15.27C21.5 19.74 19.71 21.53 15.24 21.53H15.11C11.09 21.53 9.24002 20.08 8.91002 16.54" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15 12H3.62" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5.85 8.6499L2.5 11.9999L5.85 15.3499" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span>Logout</span>
                                    </a>
                                    <form id="logout-form" action="https://SMMPortal.com/logout" method="POST"
                                        class="d-none">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>