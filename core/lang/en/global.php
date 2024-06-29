<?php
$_lang["about_msg"] = 'Evolution CMS is a <a href="https://evo-cms.com/" target="_blank">PHP Application Framework and Content Management System</a> licensed under the <a href="https://www.gnu.org/licenses/gpl-3.0.html">GNU GPL</a>.';
$_lang["about_title"] = 'About Evolution CMS';

// days
$_lang["monday"] = 'Monday';
$_lang["tuesday"] = 'Tuesday';
$_lang["wednesday"] = 'Wednesday';
$_lang["thursday"] = 'Thursday';
$_lang["friday"] = 'Friday';
$_lang["saturday"] = 'Saturday';
$_lang["sunday"] = 'Sunday';

// templates
$_lang["template"] = 'Template';
$_lang["templates"] = 'Templates';
$_lang['templatecontroller'] = 'Template Controller';
$_lang["template_assignedtv_tab"] = 'Assigned Template Variables';
$_lang["template_code"] = 'Template code (html)';
$_lang["template_desc"] = 'Description';
$_lang["template_edit_tab"] = 'Edit Template';
$_lang["template_inuse"] = 'This template is in use. Please set the documents using the template to another template. Documents using this template:';
$_lang["template_management_msg"] = 'Choose which Template you wish to edit.';
$_lang["template_msg"] = 'Create and edit Templates. Changed or new Templates won\'t be visible in your site\'s cached pages until the cache is emptied, however, you can use the preview function on a page to see the Template in action.';
$_lang["template_name"] = 'Template name';
$_lang["template_no_tv"] = 'No Template Variables have been assigned to this Template yet.';
$_lang["template_notassigned_tv"] = 'These Template Variables are available for assigning.';
$_lang["template_reset_all"] = 'Reset all pages to use Default Template';
$_lang["template_reset_specific"] = 'Reset only \'%s\' pages';
$_lang["template_assigned_blade_file"] = 'Corresponding blade file';
$_lang["template_create_blade_file"] = 'Create template file on save';
$_lang["template_selectable"] = 'Template selectable when creating or editing ressources.';
$_lang["template_title"] = 'Create/edit Template';
$_lang["template_tv_edit"] = 'Edit the TV sort order';
$_lang["template_tv_edit_message"] = 'Drag to reorder the Template Variables for this template.';
$_lang["template_tv_edit_title"] = 'Template Variable Sort Order';
$_lang["template_tv_msg"] = 'The Template Variables assigned to this Template are listed below.';

// tmplvars
$_lang["tv"] = 'TV';
$_lang["tmplvar"] = 'Template Variable';
$_lang["tmplvars"] = 'Template Variables';
$_lang["tmplvar_access_msg"] = 'Select the Resource Groups that are allowed to modify the content or value of this Template Variable';
$_lang["tmplvar_change_template_msg"] = 'Changing this Template will cause the page to reload the Template Variables, losing any unsaved changes.\n\n Are you sure you want to change this Template?';
$_lang["tmplvar_inuse"] = 'The following Resource(s) are currently using this Template Variable. To continue with the delete operation click the Delete button otherwise click the Cancel button.';
$_lang["tmplvar_tmpl_access"] = 'Template Access';
$_lang["tmplvar_tmpl_access_msg"] = 'Select the Templates that are allowed to access/process this Template Variable';
$_lang["tmplvars_binding_msg"] = 'This field supports data source bindings using the @ commands';
$_lang["tmplvars_caption"] = 'Caption';
$_lang["tmplvars_default"] = 'Default Value';
$_lang["tmplvars_description"] = 'Description';
$_lang["tmplvars_elements"] = 'Input Option Values';
$_lang["tmplvars_inherited"] = 'Value inherited';
$_lang["tmplvars_management_msg"] = 'Manage additional Template Variables for your Resources.';
$_lang["tmplvars_msg"] = 'Add or edit Template Variables here. Template Variables must be assigned to Templates in order to access them from Snippets and Resources.';
$_lang["tmplvars_name"] = 'Template Variable Name';
$_lang["tmplvars_novars"] = 'No Template Variables found';
$_lang["tmplvars_rank"] = 'Sort Order';
$_lang["tmplvars_rank_edit_message"] = 'Drag to reorder the Template Variables.';
$_lang["tmplvars_reset_params"] = 'Reset parameters';
$_lang["tmplvars_title"] = 'Create/edit Template Variable';
$_lang["tmplvars_type"] = 'Input Type';
$_lang["tmplvars_widget"] = 'Widget';
$_lang["tmplvars_widget_prop"] = 'Widget Properties';
$_lang["role_no_tv"] = 'No Variables have been assigned to this Role yet.';
$_lang["role_notassigned_tv"] = 'These Variables are available for assigning.';
$_lang["role_tv_msg"] = 'The Variables assigned to this Role are listed below.';
$_lang["tmplvar_roles_access_msg"] = 'Select the Roles that are allowed to access/process this Template Variable';

// snippets
$_lang["snippet"] = 'Snippet';
$_lang["snippets"] = 'Snippets';
$_lang["snippet_code"] = 'Snippet code (php)';
$_lang["snippet_desc"] = 'Description';
$_lang["snippet_execonsave"] = 'Execute Snippet after saving.';
$_lang["snippet_management_msg"] = 'Choose the Snippet you wish to edit.';
$_lang["snippet_msg"] = 'Add/edit Snippets. Remember, Snippets are \'raw\' PHP code, and if you expect the output of the Snippet to be shown at a certain point within the Template, you need to return a value from within the Snippet.';
$_lang["snippet_name"] = 'Snippet name';
$_lang["snippet_properties"] = 'Default Properties';
$_lang["snippet_title"] = 'Create/edit Snippet';

// chunks
$_lang["htmlsnippet"] = 'Chunk';
$_lang["htmlsnippets"] = 'Chunks';
$_lang["htmlsnippet_desc"] = 'Description';
$_lang["htmlsnippet_management_msg"] = 'Select the Chunk you wish to edit.';
$_lang["htmlsnippet_msg"] = 'Add and edit Chunks. Remember, Chunks are \'raw\' HTML code, so any PHP code won\'t be processed.';
$_lang["htmlsnippet_name"] = 'Chunk name';
$_lang["htmlsnippet_title"] = 'Create/edit Chunk';
$_lang["chunk"] = 'Chunk';
$_lang["chunk_code"] = 'Chunk code (html)';
$_lang["chunk_multiple_id"] = 'Error: Multiple Chunks share the same unique ID.';
$_lang["chunk_no_exist"] = 'Chunk does not exist.';

// plugins
$_lang["plugin"] = 'Plugin';
$_lang["plugins"] = 'Plugins';
$_lang["plugin_code"] = 'Plugin code (php)';
$_lang["plugin_config"] = 'Plugin configuration';
$_lang["plugin_desc"] = 'Description';
$_lang["plugin_disabled"] = 'Plugin Disabled';
$_lang["plugin_event_msg"] = 'Select the events that you would like this Plugin to listen to.';
$_lang["plugin_management_msg"] = 'Choose which Plugin you wish to edit.';
$_lang["plugin_msg"] = 'Add/edit Plugins. Plugins use PHP code that is invoked whenever specific System Events trigger.';
$_lang["plugin_name"] = 'Plugin name';
$_lang["plugin_priority"] = 'Edit Plugin Execution Order by Event';
$_lang["plugin_priority_instructions"] = 'Drag to reorder the Plugins under each Event header. The first plugin to execute should go at the top.';
$_lang["plugin_priority_title"] = 'Plugin Execution Order';
$_lang["purge_plugin"] = 'Purge obsolete plugins';
$_lang["purge_plugin_confirm"] = 'Are you sure you want to purge obsolete plugins?';
$_lang["plugin_title"] = 'Create/edit Plugin';

// categories
$_lang["category"] = 'Category';
$_lang["categories"] = 'Categories';
$_lang["category_heading"] = 'Category';
$_lang["category_manager"] = 'Category Manager';
$_lang["category_management"] = 'Category management';
$_lang["category_msg"] = 'View and edit all Elements grouped by category.';

// file
$_lang["file_delete_file"] = 'Delete file';
$_lang["file_delete_folder"] = 'Delete directory';
$_lang["file_deleted"] = 'Success!';
$_lang["file_download_file"] = 'Download File';
$_lang["file_download_unzip"] = 'Unzip File';
$_lang["file_folder_chmod_error"] = 'Unable to change permissions, you will need to change permissions outside of Evolution CMS.';
$_lang["file_folder_created"] = 'Directory created successfully!';
$_lang["file_folder_deleted"] = 'Directory was successfully deleted!';
$_lang["file_folder_not_created"] = 'Unable to create directory';
$_lang["file_folder_not_deleted"] = 'Unable to delete directory. Make sure it is empty before deleting.';
$_lang["file_not_deleted"] = 'Failed!';
$_lang["file_not_saved"] = 'Cannot save file, please ensure target directory is writable!';
$_lang["file_saved"] = 'File updated successfully!';
$_lang["file_unzip"] = 'Unzip was successful!';
$_lang["file_unzip_fail"] = 'Unzip Failed!';

// files
$_lang["files"] = 'Files';
$_lang["files_files"] = 'Files';
$_lang["files_access_denied"] = 'Access denied!';
$_lang["files_data"] = 'Data';
$_lang["files_dir_listing"] = 'Directory listing for:';
$_lang["files_directories"] = 'Directories';
$_lang["files_directory_is_empty"] = 'This directory is empty.';
$_lang["files_dirwritable"] = 'Directory writable?';
$_lang["files_editfile"] = 'Edit file';
$_lang["files_file_type"] = 'File type: ';
$_lang["files_filename"] = 'Filename';
$_lang["files_fileoptions"] = 'Options';
$_lang["files_filesize"] = 'File size';
$_lang["files_filetype_notok"] = 'Uploading of this kind of file is not allowed!';
$_lang["files_management"] = 'Manage Files';
$_lang["files_management_no_permission"] = 'You do not have enough permissions to view or edit these files. Ask the administrator to grant you access to <b>%s</b>.';
$_lang["files_modified"] = 'Modified';
$_lang["files_top_level"] = 'To top level';
$_lang["files_up_level"] = 'Up one level';
$_lang["files_upload_copyfailed"] = 'Failed to copy file to destination directory - upload failed!';
$_lang["files_upload_error"] = 'Error';
$_lang["files_upload_error0"] = 'There was a problem with your upload.';
$_lang["files_upload_error1"] = 'The file you are trying to upload is too big.';
$_lang["files_upload_error2"] = 'The file you are trying to upload is too big.';
$_lang["files_upload_error3"] = 'The file you are trying upload was only partially uploaded.';
$_lang["files_upload_error4"] = 'You must select a file for upload.';
$_lang["files_upload_error5"] = 'There was a problem with your upload.';
$_lang["files_upload_inhibited_msg"] = '<b>Upload feature inhibited</b> - make sure uploads are supported and the directory is writable for PHP.';
$_lang["files_upload_ok"] = 'File uploaded successfully!';
$_lang["files_upload_permissions_error"] = 'Possible permission problems - the directory you want to upload to needs to be writable by your webserver.';
$_lang["files_uploadfile"] = 'Upload file';
$_lang["files_uploadfile_msg"] = 'Select a file to upload:';
$_lang["files_uploading"] = 'Uploading <b>%s</b> to <b>%s/</b>';
$_lang["files_viewfile"] = 'View file';

// modules
$_lang["module"] = 'Module';
$_lang["modules"] = 'Modules';
$_lang["module_code"] = 'Module code (php)';
$_lang["module_config"] = 'Module configuration';
$_lang["module_desc"] = 'Description';
$_lang["module_disabled"] = 'Module disabled';
$_lang["module_edit_click_title"] = 'Click here to edit this Module';
$_lang["module_group_access_msg"] = 'Select the User Groups that are allowed to execute this Module from within the Content Manager.';
$_lang["module_management"] = 'Manage Modules';
$_lang["module_management_msg"] = 'Choose the Module you would like to execute or modify. To run the Module click on the icon in the grid. To modify the Module click on the name of the Module.';
$_lang["module_msg"] = 'Add/edit Modules. A Module is a collection of Elements (e.g. Plugins, Snippets, etc).';
$_lang["module_name"] = 'Module name';
$_lang["module_resource_msg"] = 'Add or remove Elements upon which this Module depends. To add a new Element click on the one of the add buttons below.';
$_lang["module_resource_title"] = 'Module Dependencies';
$_lang["module_title"] = 'Create/edit Module';
$_lang["module_viewdepend_msg"] = 'View the assigned Elements on which this Module depends. Click on the "Manager Dependencies" button to modify the dependencies';

// elements
$_lang["element"] = 'Element';
$_lang["elements"] = 'Elements';
$_lang["element_categories"] = 'Combined View';
$_lang["element_filter_msg"] = 'Type here to filter list';
$_lang["element_management"] = 'Manage Elements';
$_lang["element_name"] = 'Element name';
$_lang["element_selector_msg"] = 'Select the Elements(s) from the list below and click the \'Insert\' button.';
$_lang["element_selector_title"] = 'Element Selector';

// resource
$_lang["resource"] = 'Resource';
$_lang["resource_alias"] = 'URL alias';
$_lang["resource_alias_help"] = 'Set the URL alias to make the Resource accessible as http://example.com/weburl. This only works Friendly URLs are enabled in the site configuration.';
$_lang["resource_content"] = 'Resource content';
$_lang["resource_description"] = 'Description';
$_lang["resource_description_help"] = 'Enter an optional description of this Resource.';
$_lang["resource_duplicate"] = 'Duplicate Resource';
$_lang["resource_long_title_help"] = 'Enter an optional longer title for your Resource. This can be used for automatic Resource header tags for search engines, and might be more descriptive for your Resource.';
$_lang["resource_metatag_help"] = 'Select the META tags or keywords you wish to assign to this Resource. Hold down the CTRL key to select multiple keywords or meta tags.';
$_lang["resource_opt_contentdispo"] = 'Content-Disposition';
$_lang["resource_opt_contentdispo_help"] = 'Use the content disposition field to specify how this Resource will be handled by the web browser. For file downloads select the Attachment option.';
$_lang["resource_opt_emptycache"] = 'Empty cache';
$_lang["resource_opt_emptycache_help"] = 'Leaving this field checked will make Evolution CMS empty the cache after you save the Resource. This way your visitors will not see an older version of the Resource.';
$_lang["resource_opt_folder"] = 'Container';
$_lang["resource_opt_folder_help"] = 'Check this to make the Resource also act as a Container for other Resources. A \'Container\' is like a folder, only it can also have content.';
$_lang["resource_opt_menu_index"] = 'Menu index';
$_lang["resource_opt_menu_index_help"] = 'Menu Index is a field that can control sorting Resources, particularly in menu Snippet(s). You can also use it for any other purpose in your Snippets.';
$_lang["resource_opt_menu_title"] = 'Menu title';
$_lang["resource_opt_menu_title_help"] = 'Menu title is an optional field used to display a short title in menu Snippet(s) or Modules.';
$_lang["resource_opt_published"] = 'Published';
$_lang["resource_opt_published_help"] = 'Check this field to have the Resource published immediately after saving it.';
$_lang["resource_opt_richtext"] = 'Rich text';
$_lang["resource_opt_richtext_help"] = 'Leave this checked to use the rich text editor for editing Resources. If your Resources contain JavaScript and forms, uncheck this to edit in HTML mode to prevent the editor from incorrectly changing your Resources.';
$_lang["resource_opt_show_menu"] = 'Show in menu';
$_lang["resource_opt_show_menu_help"] = 'Select this option to show Resource inside a web menu. Please note that some Menu Builders might choose to ignore this option.';
$_lang["resource_opt_trackvisit_help"] = 'Log each visitor\'s visit to this page';
$_lang["resource_overview"] = 'Resource overview';
$_lang["resource_parent"] = 'Resource parent';
$_lang["resource_parent_help"] = 'Click the icon to enable setting a Resource parent, then click a Resource in the Site Tree to set a new parent.';
$_lang["resource_permissions_error"] = 'Assign this Resource to at least one Resource Group to which you have access.';
$_lang["resource_setting"] = 'Resource setting';
$_lang["resource_summary"] = 'Summary (introtext)';
$_lang["resource_summary_help"] = 'Type a brief summary of the Resource';
$_lang["resource_title"] = 'Title';
$_lang["resource_title_help"] = 'Enter the name/title of the Resource. Avoid using backslashes in the name.';
$_lang["resource_to_be_moved"] = 'Resource to be moved';
$_lang["resource_type"] = 'Resource Type';
$_lang["resource_type_message"] = 'Weblinks reference Resources on the Internet including another Evolution CMS Resource, an external page, or an image or other file on the Internet. Weblinks should have a text/html Internet Media Type and Inline Content-Disposition.';
$_lang["resource_type_weblink"] = 'Weblink';
$_lang["resource_type_webpage"] = 'Web page';
$_lang["resource_weblink_help"] = 'Type the address of the object you wish to reference with this Weblink here. Alternatively insert from the File Browser or use the link selection icon and select a resource from the Site Tree.';
$_lang["resources_in_container"] = 'Resources in this Container';
$_lang["resources_in_container_no"] = 'This Container does not have child-Resources.';

// role
$_lang["role"] = 'Role';
$_lang["role_about"] = 'View the about page';
$_lang["role_actionok"] = 'View action completed screen';
$_lang["role_assets_images"] = 'Manage assets/images';
$_lang["role_assets_files"] = 'Manage assets/files';
$_lang["role_bk_manager"] = 'Use the Backup Manager';
$_lang["role_cache_refresh"] = 'Empty the site\'s cache';
$_lang["role_category_manager"] = 'Use the Category Manager';
$_lang["role_change_password"] = 'Change password';
$_lang["role_change_resourcetype"] = 'Change Resource-Type';
$_lang["role_chunk_management"] = 'Chunk management';
$_lang["role_config_management"] = 'Configuration management';
$_lang["role_content_management"] = 'Content management';
$_lang["role_create_chunk"] = 'Create new Chunks';
$_lang["role_create_doc"] = 'Create new Resources';
$_lang["role_create_plugin"] = 'Create new Plugins';
$_lang["role_create_snippet"] = 'Create new Snippets';
$_lang["role_create_template"] = 'Create new site Templates';
$_lang["role_credits"] = 'View credits';
$_lang["role_delete_chunk"] = 'Delete Chunks';
$_lang["role_delete_doc"] = 'Delete Resources';
$_lang["role_delete_eventlog"] = 'Delete event log';
$_lang["role_delete_module"] = 'Delete Module';
$_lang["role_delete_plugin"] = 'Delete Plugins';
$_lang["role_delete_role"] = 'Delete roles';
$_lang["role_delete_snippet"] = 'Delete Snippets';
$_lang["role_delete_template"] = 'Delete Templates';
$_lang["role_delete_user"] = 'Delete users';
$_lang["role_delete_web_user"] = 'Delete web users';
$_lang["role_edit_chunk"] = 'Edit Chunks';
$_lang["role_edit_doc"] = 'Edit a Resource';
$_lang["role_edit_doc_metatags"] = 'Edit Resource META tags and keywords';
$_lang["role_edit_module"] = 'Edit Module';
$_lang["role_edit_plugin"] = 'Edit Plugins';
$_lang["role_edit_role"] = 'Edit roles';
$_lang["role_edit_settings"] = 'Change site settings';
$_lang["role_edit_snippet"] = 'Edit Snippets';
$_lang["role_edit_template"] = 'Edit site Templates';
$_lang["role_edit_user"] = 'Edit users';
$_lang["role_edit_web_user"] = 'Edit web users';
$_lang["role_empty_trash"] = 'Permanently purge deleted Resources';
$_lang["role_errors"] = 'View error dialog';
$_lang["role_eventlog_management"] = 'Event log management';
$_lang["role_export_static"] = 'Export Static HTML';
$_lang["role_file_management"] = 'File Management';
$_lang["role_file_manager"] = 'Use the file manager (full root access)';
$_lang["role_frames"] = 'Request manager frames';
$_lang["role_help"] = 'View help pages';
$_lang["role_home"] = 'Request manager intro page';
$_lang["role_import_static"] = 'Import HTML';
$_lang["role_logout"] = 'Log out of the manager';
$_lang["role_list_module"] = 'List Module';
$_lang["role_manage_metatags"] = 'Manage site META tags and keywords';
$_lang["role_management_msg"] = 'Choose the role you wish to edit.';
$_lang["role_management_title"] = 'Roles';
$_lang["role_messages"] = 'View and send messages';
$_lang["role_module_management"] = 'Module management';
$_lang["role_name"] = 'Role name';
$_lang["role_new_module"] = 'Create new Module';
$_lang["role_new_role"] = 'Create new roles';
$_lang["role_new_user"] = 'Create new manager users';
$_lang["role_new_web_user"] = 'Create new web users';
$_lang["role_plugin_management"] = 'Plugin management';
$_lang["role_publish_doc"] = 'Publish Resources';
$_lang["role_remove_locks"] = 'Remove Locks';
$_lang["role_role_management"] = 'Roles';
$_lang["role_run_module"] = 'Run Module';
$_lang["role_save_chunk"] = 'Save Chunks';
$_lang["role_save_doc"] = 'Save Resources';
$_lang["role_save_module"] = 'Save Module';
$_lang["role_save_password"] = 'Save password';
$_lang["role_save_plugin"] = 'Save Plugins';
$_lang["role_save_role"] = 'Save roles';
$_lang["role_save_snippet"] = 'Save Snippets';
$_lang["role_save_template"] = 'Save Templates';
$_lang["role_save_user"] = 'Save users';
$_lang["role_save_web_user"] = 'Save web users';
$_lang["role_snippet_management"] = 'Snippet management';
$_lang["role_template_management"] = 'Template management';
$_lang["role_title"] = 'Create/edit role';
$_lang["role_udperms"] = 'Permissions management';
$_lang["role_user_management"] = 'Manager user management';
$_lang["role_view_docdata"] = 'View a Resource\'s data';
$_lang["role_view_eventlog"] = 'View event log';
$_lang["role_view_logs"] = 'View system logs';
$_lang["role_view_unpublished"] = 'View Unpublished Resources';
$_lang["role_web_access_persmissions"] = 'Web access permissions';
$_lang["role_web_user_management"] = 'Web user management';

// user
$_lang["user"] = 'User';
$_lang["users"] = 'Users';
$_lang["user_block"] = 'Blocked';
$_lang["user_blockedafter"] = 'Blocked After';
$_lang["user_blockeduntil"] = 'Blocked Until';
$_lang["user_changeddata"] = 'Your data has been changed. Please log in again.';
$_lang["user_country"] = 'Country';
$_lang["user_dob"] = 'Date of birth';
$_lang["user_doesnt_exist"] = 'User does not exist';
$_lang["user_edit_self_msg"] = '<b>You may need to log out and log in again after saving to fully update your information.</b> New passwords will be sent to your e-mail address or shown onscreen.';
$_lang["user_email"] = 'E-mail address';
$_lang["user_failedlogincount"] = 'Failed logins';
$_lang["user_fax"] = 'Fax';
$_lang["user_female"] = 'Female';
$_lang["user_full_name"] = 'Full name';
$_lang["user_first_name"] = 'First name';
$_lang["user_last_name"] = 'Last Name';
$_lang["user_middle_name"] = 'Middle Name';
$_lang["user_gender"] = 'Gender';
$_lang["user_is_blocked"] = 'This User is blocked!';
$_lang["user_logincount"] = 'Login count';
$_lang["user_male"] = 'Male';
$_lang["user_management_msg"] = 'Choose the Content Manager to edit. Content Manager Users are those Users who are allowed to log into the Content Manager';
$_lang["user_management_title"] = 'Manager Users';
$_lang["user_mobile"] = 'Mobile phone number';
$_lang["user_phone"] = 'Phone number';
$_lang["user_photo"] = 'User Photo';
$_lang["user_photo_message"] = 'Enter the image url for the this User or use the insert button to selected or upload an image file on the server.';
$_lang["user_prevlogin"] = 'Last login';
$_lang["user_role"] = 'User\'s role';
$_lang["no_user_role"] = 'No user role';
$_lang["user_state"] = 'State';
$_lang["user_title"] = 'Create/Edit Manager User';
$_lang["user_upload_message"] = ' If you wish to stop this User uploading any filetypes in this category, make sure that the \'Use Main Configuration Setting\' checkbox is not ticked and leave the field blank.';
$_lang["user_use_config"] = 'Use System Configuration Setting';
$_lang["user_verification"] = 'User is verified';
$_lang["user_zip"] = 'Zip';
$_lang["username"] = 'Username';
$_lang["username_unique"] = 'User name is already in use!';
$_lang["user_street"] = 'Street';
$_lang["user_city"] = 'City';
$_lang["user_other"] = 'Other';

// add
$_lang["add"] = 'Add';
$_lang["add_chunk"] = 'Add Chunk';
$_lang["add_doc"] = 'Add Resource';
$_lang["add_folder"] = 'New Directory';
$_lang["add_plugin"] = 'Add Plugin';
$_lang["add_resource"] = 'New Resource';
$_lang["add_snippet"] = 'Add Snippet';
$_lang["add_tag"] = 'Add tag';
$_lang["add_template"] = 'Add Template';
$_lang["add_tv"] = 'Add TV';
$_lang["add_weblink"] = 'New Weblink';

// new
$_lang["new_category"] = 'New Category';
$_lang["new_file_permissions_message"] = 'When uploading a new file in the File Manager, the File Manager will attempt to change the file permissions to those entered in this setting. This may not work on some setups, such as IIS, in which case you will need to manually change the permissions.';
$_lang["new_file_permissions_title"] = 'New File Permissions';
$_lang["new_folder_permissions_message"] = 'When creating a new directory in the File Manager, the File Manager will attempt to change the directory permissions to those entered in this setting. This may not work on some setups, such as IIS, in which case you will need to manually change the permissions.';
$_lang["new_folder_permissions_title"] = 'New Directory Permissions';
$_lang["new_permission"] = 'New Permission';
$_lang["new_htmlsnippet"] = 'New Chunk';
$_lang["new_keyword"] = 'Add new keyword:';
$_lang["new_module"] = 'New Module';
$_lang["new_parent"] = 'New parent';
$_lang["new_plugin"] = 'New Plugin';
$_lang["new_role"] = 'New Role';
$_lang["new_snippet"] = 'New Snippet';
$_lang["new_template"] = 'New Template';
$_lang["new_tmplvars"] = 'New Template Variable';
$_lang["new_user"] = 'New Manager User';
$_lang["new_web_user"] = 'New User';
$_lang["new_resource"] = 'New Resource';

// manage
$_lang["manage_categories"] = 'Manage Categories';
$_lang["manage_depends"] = 'Manage Dependencies';
$_lang["manage_files"] = 'Manage Files';
$_lang["manage_htmlsnippets"] = 'Manage Chunks';
$_lang["manage_metatags"] = 'Manage META tags and Keywords';
$_lang["manage_modules"] = 'Manage Modules';
$_lang["manage_plugins"] = 'Manage Plugins';
$_lang["manage_snippets"] = 'Manage Snippets';
$_lang["manage_templates"] = 'Manage Templates';
$_lang["manage_documents"] = 'Manage Documents';
$_lang["manage_permission"] = 'Manage Permissions';

// move
$_lang["move"] = 'Move';
$_lang["move_resource"] = 'Move Resource';
$_lang["move_resource_message"] = 'Move a Resource and all its children by selecting a new parent in the Site Tree. If you select a Resource that is not already a Container, it will be changed into one. Please click on the new parent in the Site Tree.';
$_lang["move_resource_new_parent"] = 'Please select a new parent in the Site Tree.';
$_lang["move_resource_title"] = 'Move Resource';

$_lang["access_permissions"] = 'Access permissions';
$_lang["access_permission_denied"] = 'You do not have the correct permissions for this Resource.';
$_lang["access_permission_parent_denied"] = 'You do not have permission to create or move a Resource here! Please choose another location.';
$_lang["access_permissions_add_resource_group"] = 'Create a new Resource Group';
$_lang["access_permissions_add_user_group"] = 'Create a new User Group';
$_lang["access_permissions_docs_message"] = 'Select which Resource Groups this Resource belongs to';
$_lang["access_permissions_group_link"] = 'Create a new group link';
$_lang["access_permissions_introtext"] = 'Manage the User Groups and Resource Groups used for access permissions. To add a user to a User Group, edit the user and select the groups (s)he should be a member of. To add a Resource to a User Group, edit the Resource and select the groups it should belong to.';
$_lang["access_permissions_link_to_group"] = 'to Resource Group';
$_lang["access_permissions_context"] = 'in context';
$_lang["access_permissions_link_user_group"] = 'Link User Group';
$_lang["access_permissions_links"] = 'User/Resource Group links';
$_lang["access_permissions_links_tab"] = 'Specify which User Groups are given access (i.e. can edit or create children) to the Resource Groups. To link a Resource Group to a User Group, select the appropriate groups from the drop down menus, and click on \'Submit\'. To remove the link for a certain group, press \'Remove\'. This will immediately remove the link.';
$_lang["access_permissions_no_resources_in_group"] = 'None.';
$_lang["access_permissions_no_users_in_group"] = 'None.';
$_lang["access_permissions_off"] = '<span class="warning">Access Permissions are not activated.</span> This means any changes made here will not have any effect until Access Permissions are activated in your Configuration.';
$_lang["access_permissions_resource_groups"] = 'Resource Groups';
$_lang["access_permissions_resources_in_group"] = '<b>Resources in group:</b> ';
$_lang["access_permissions_resources_tab"] = 'See which Resource Groups have been created. Also create new groups, rename groups, delete groups and see which Resources are in the different groups (hover over the id of the Resource to see it\'s name). To add a Resource to a group or remove a Resource from a group, edit the Resource directly.';
$_lang["access_permissions_user_toggle"] = 'Toggle access permissions';
$_lang["access_permissions_user_groups"] = 'User groups';
$_lang["access_permissions_user_message"] = 'Select which User Groups this user belongs to:';
$_lang["access_permissions_users_in_group"] = 'Users in group:';
$_lang["access_permissions_users_tab"] = 'View the User Groups that have been created. You can also create new groups, rename groups, delete groups and see which users are members of the different groups. To add a new user to a group or to remove a user from a group, edit the user directly. Administrators (users who have been assigned the role with ID 1) always have access to all Resources, so they don\'t need to be added to any groups.';

$_lang["users_list"] = 'Users list';
$_lang["documents_list"] = 'Resources list';

$_lang["account_email"] = 'Account email';
$_lang["actioncomplete"] = '<b>Action was completed successfully!</b><br /> - Please wait while Evolution CMS cleans up.';
$_lang["activity_message"] = 'This list shows the last Resources you created or edited:';
$_lang["activity_title"] = 'Recently edited/created Resources';

$_lang["administrator_role_message"] = 'This role cannot be edited or deleted.';
$_lang["administrators"] = 'Administrators';
$_lang["after_saving"] = 'After saving';
$_lang["alert_delete_self"] = 'You can\'t delete yourself!';
$_lang["alias"] = 'URL alias';
$_lang["all_doc_groups"] = 'All Resource Groups (Public)';
$_lang["all_events"] = 'All Events';
$_lang["all_usr_groups"] = 'All User Groups (Public)';
$_lang["allow_mgr_access"] = 'Manager Interface Access';
$_lang["allow_mgr_access_message"] = 'Select this option to enable or disable access to the manager interface. <b>NOTE: If this option is set to no then the user will be redirected to the Manager Login Startup or Site Start web page.</b>';
$_lang["already_deleted"] = 'has already been deleted.';
$_lang["attachment"] = 'Attachment';
$_lang["author_infos"] = 'Author information';
$_lang["automatic_alias_message"] = 'Select \'yes\' to have the system automatically generate a URL alias based on the Resource\'s page title when saving.';
$_lang["automatic_alias_title"] = 'Automatically generate URL alias';
$_lang["backup"] = 'Backup';
$_lang["bk_manager"] = 'Backup';
$_lang["block_message"] = 'This user will be blocked after saving the user\'s data!';
$_lang["blocked_minutes_message"] = 'Enter the number of minutes that a user will be blocked for if they reach their maximum number of allowed failed login attempts. Please enter this value as numbers only (no commas, spaces etc.)';
$_lang["blocked_minutes_title"] = 'Blocked Minutes';
$_lang["cache_files_deleted"] = 'The following files were deleted:';
$_lang["cancel"] = 'Cancel';
$_lang["captcha_code"] = 'Security code';
$_lang["captcha_message"] = 'Enable this to strengthen security by requiring users to enter a code which is unreadable by machines (and script-kiddy hacking scripts).';
$_lang["captcha_title"] = 'Use CAPTCHA codes';
$_lang["captcha_words_default"] = 'EVO,Access,Better,BitCode,Chunk,Cache,Desc,Design,Excell,Enjoy,URLs,TechView,Gerald,Griff,Humphrey,Holiday,Intel,Integration,Joystick,Join(),Oscope,Genetic,Light,Likeness,Marit,Maaike,Niche,Netherlands,Ordinance,Oscillo,Parser,Phusion,Query,Question,Regalia,Righteous,Snippet,Sentinel,Template,Thespian,Unity,Enterprise,Verily,Tattoo,Veri,Website,WideWeb,Yap,Yellow,Zebra,Zygote';
$_lang["captcha_words_message"] = 'Enter a list of CAPTCHA words to use if CAPTCHA is enabled. Separate the words with commas. This input field is limited to 255 characters.';
$_lang["captcha_words_title"] = 'CAPTCHA Words';

$_lang["cfg_base_path"] = 'MODX_BASE_PATH';
$_lang["cfg_base_url"] = 'MODX_BASE_URL';
$_lang["cfg_manager_path"] = 'MODX_MANAGER_PATH';
$_lang["cfg_manager_url"] = 'MODX_MANAGER_URL';
$_lang["cfg_site_url"] = 'MODX_SITE_URL';

$_lang["change_name"] = 'Change username';
$_lang["change_password"] = 'Change Password';
$_lang["change_password_confirm"] = 'Confirm password';
$_lang["change_password_message"] = 'Please enter your new password, and then enter it again to confirm. Your password needs to be at least 6 characters long.';
$_lang["change_password_new"] = 'New password';
$_lang["charset_message"] = 'Select the default character encoding for the [(modx_charset)] system variable. This does not affect the Manager.';
$_lang["charset_title"] = 'Character encoding';

$_lang["cleaningup"] = 'Cleaning up';
$_lang["clean_uploaded_filename"] = 'Use Transliteration for File Uploads';
$_lang["clean_uploaded_filename_message"] = 'Use the default or transalias settings for the file name to clean special characters from uploaded file names, preserving dot-characters (periods)';
$_lang["clear_log"] = 'Clear log';
$_lang["click_to_context"] = 'Click to access context menu';
$_lang["click_to_edit_title"] = 'Click here to edit this record';
$_lang["click_to_view_details"] = 'Click here to view details';
$_lang["close"] = 'Close';
$_lang["code"] = 'Code';
$_lang["collapse_tree"] = 'Collapse Site Tree';
$_lang["comment"] = 'Comment';

$_lang["configcheck_admin"] = 'Please contact a systems administrator and warn them about this message!';
$_lang["configcheck_cache"] = 'cache directory is not writable';
$_lang["configcheck_cache_msg"] = 'Evolution CMS cannot write to the cache directory. Evolution CMS will still function as expected, but no caching will take place. To solve this, make the \'cache\' directory writable.';
$_lang["configcheck_configinc"] = 'Config file still writable';
$_lang["configcheck_configinc_msg"] = 'Very naughty people could potentially wreak some havoc on your site and everything associated with it. <strong>Really.</strong> Please make your config file  (/[+MGR_DIR+]/includes/config.inc.php) read only!';
$_lang["configcheck_default_msg"] = 'An unspecified warning was found. Which is strange.';
$_lang["configcheck_errorpage_unavailable"] = 'Your site\'s Error page is not available.';
$_lang["configcheck_errorpage_unavailable_msg"] = 'This means that your Error page is not accessible to normal web surfers or does not exist. This can lead to a recursive looping condition and many errors in your site logs. Make sure there are no Webuser Groups assigned to the page.';
$_lang["configcheck_errorpage_unpublished"] = 'Your site\'s Error page is not published or does not exist.';
$_lang["configcheck_errorpage_unpublished_msg"] = 'This means that your Error page is inaccessible to the general public. Publish the page or make sure it is assigned to an existing Resource in your Site Tree in the Tools &gt; Configuration menu.';
$_lang["configcheck_filemanager_path"] = 'The currently set <a href="index.php?a=17&tab=4">File Manager path</a> seems incorrect.';
$_lang["configcheck_filemanager_path_msg"] = 'This can happen for example by moving your installation to a different directory or server. Please check and update your Evolution CMS configuration.';
$_lang["configcheck_hide_warning"] = '<a href="javascript:hideConfigCheckWarning(\'%s\');"><em>Don\'t show this again.</em></a>';
$_lang["configcheck_images"] = 'Images directory not writable';
$_lang["configcheck_images_msg"] = 'The images directory isn\'t writable, or doesn\'t exist. This means the Image Manager functions in the editor will not work!';
$_lang["configcheck_installer"] = 'Installer still present';
$_lang["configcheck_installer_msg"] = 'The /install directory contains the installer for Evolution CMS. Just imagine what might happen if an evil person finds this directory and runs the installer! They\'d probably not get too far, because they need to enter some user information for the database, but it is still best to remove this directory from your server.';
$_lang["configcheck_lang_difference"] = 'Incorrect number of entries in language file';
$_lang["configcheck_lang_difference_msg"] = 'The currently selected language has a different number of entries than the default language. While not necessarily a problem, this may mean the language file needs to be updated.';
$_lang["configcheck_notok"] = 'One or more configuration details didn\'t check out OK:';
$_lang["configcheck_ok"] = 'Check passed OK - no warnings to report.';
$_lang["configcheck_php_gdzip"] = 'GD and/or Zip PHP extensions not found';
$_lang["configcheck_php_gdzip_msg"] = 'Evolution CMS needs the GD and Zip extension enabled for PHP. While Evolution CMS will work without them, you will not be able to take full advantage of the built-in File Manager, Image Editor or Captcha for logins.';
$_lang["configcheck_rb_base_dir"] = 'The currently set <a href="index.php?a=17&tab=5">File base path</a> seems incorrect.';
$_lang["configcheck_rb_base_dir_msg"] = 'This can happen for example by moving your installation to a different directory or server. Please check and update your Evolution CMS configuration.';
$_lang["configcheck_register_globals"] = 'register_globals is set to ON in your php.ini configuration file';
$_lang["configcheck_register_globals_msg"] = 'This configuration makes your site much more susceptible to Cross Site Scripting (XSS) attacks. You should speak to your host about what you can do to disable this setting.';
$_lang["configcheck_title"] = 'Configuration check';
$_lang["configcheck_templateswitcher_present"] = 'TemplateSwitcher Plugin detected';
$_lang["configcheck_templateswitcher_present_delete"] = '<a href="javascript:deleteTemplateSwitcher();">Delete TemplateSwitcher</a>';
$_lang["configcheck_templateswitcher_present_disable"] = '<a href="javascript:disableTemplateSwitcher();">Disable TemplateSwitcher</a>';
$_lang["configcheck_templateswitcher_present_msg"] = 'The TemplateSwitcher plugin has been found to cause caching and performance problems, and should be used only the functionality is required in your site.';
$_lang["configcheck_unauthorizedpage_unavailable"] = 'Your site\'s Unauthorized page is not published or does not exist.';
$_lang["configcheck_unauthorizedpage_unavailable_msg"] = 'This means that your Unauthorized page is not accessible to normal web surfers or does not exist. This can lead to a recursive looping condition and many errors in your site logs. Make sure there are no Webuser Groups assigned to the page.';
$_lang["configcheck_unauthorizedpage_unpublished"] = 'The Unauthorized page defined in the site configuration settings is not published.';
$_lang["configcheck_unauthorizedpage_unpublished_msg"] = 'This means that your Unauthorized page is inaccessible to the general public. Publish the page or make sure it is assigned to an existing Resource in your Site Tree in the Tools &gt; Configuration menu.';
$_lang["configcheck_validate_referer"] = 'Security Warning: HTTP Header Validation';
$_lang["configcheck_validate_referer_msg"] = 'The configuration setting <strong>Validate HTTP_REFERER headers?</strong> is Off. We recommend turning it On. <a href="index.php?a=17">Go to Configuration options</a>';
$_lang["configcheck_warning"] = 'Configuration warning: ';
$_lang["configcheck_what"] = 'What does this mean?';

$_lang["safe_mode_warning"] = 'Safe mode is enabled. Manager functionality is limited.';

$_lang["confirm_block"] = 'Are you sure you want to block this user?';
$_lang["confirm_delete_category"] = 'Are you sure you want to delete this category?';
$_lang["confirm_delete_eventlog"] = 'Are you sure you want to delete this event log?';
$_lang["confirm_delete_file"] = 'Are you sure you want to delete the file?\n\nThis may stop your site from working properly! Only delete this file if you know for certain what you are doing will not break anything.';
$_lang["confirm_delete_group"] = 'Are you sure you want to delete this group?';
$_lang["confirm_delete_htmlsnippet"] = 'Are you sure you want to delete this Chunk?';
$_lang["confirm_delete_keywords"] = 'Are you sure you want to delete these keywords?';
$_lang["confirm_delete_module"] = 'Are you sure you want to delete this Module?';
$_lang["confirm_delete_plugin"] = 'Are you sure you want to delete this Plugin?';
$_lang["confirm_delete_record"] = 'Are you sure you want to delete the selected record(s)?';
$_lang["confirm_delete_resource"] = 'Are you sure you want to delete this Resource?\nAny children Resources will also be deleted.';
$_lang["confirm_delete_role"] = 'Are you sure you want to delete this role?';
$_lang["confirm_delete_snippet"] = 'Are you sure you want to delete this Snippet?';
$_lang["confirm_delete_tags"] = 'Are you sure you want to delete the selected META tags?';
$_lang["confirm_delete_template"] = 'Are you sure you want to delete this Template?';
$_lang["confirm_delete_tmplvars"] = 'Are you sure you want to remove this Template Variable and all stored values?';
$_lang["confirm_delete_user"] = 'Are you sure you want to delete this User?';

$_lang["delete_yourself"] = 'You can\'t delete yourself';
$_lang["delete_last_admin"] = 'You can\'t delete last admin user';

$_lang["confirm_delete_permission"] = 'Are you sure you want to delete this Permission?';
$_lang["confirm_duplicate_record"] = 'Are you sure you want to duplicate this record?';
$_lang["confirm_empty_trash"] = 'This will permanently remove ALL deleted Resources?\n\nProceed?';
$_lang["confirm_load_depends"] = 'Are you sure you want to load the Manage Dependencies screen without saving your modifications?';
$_lang["confirm_name_change"] = 'Changing the username can affect other applications that are linked to the Content Manager.\n\nAre you sure you want to change this username?';
$_lang["confirm_publish"] = '\n\nPublishing this Resource now will remove any (un)publishing dates that may have been set. If you wish to set or keep publish or unpublish dates, please choose to \'edit\' the Resource instead.\n\nProceed?';
$_lang["confirm_remove_locks"] = 'Users sometimes close their browser while editing Resources, Templates, Snippets or parsers, possibly leaving the item they were editing in locked state. By pressing OK you can remove ALL locks currently in place.\n\nProceed?';
$_lang["confirm_reset_sort_order"] = 'Are you sure you want to reset the \"sort order/index\" of all listed elements to 0 ?';
$_lang["confirm_resource_duplicate"] = 'Are you sure you want to duplicate this Resource? Any item(s) it contains will also be duplicated.';
$_lang["confirm_setting_language_change"] = 'You have modified the default value and will lose the changes. Proceed?';
$_lang["confirm_unblock"] = 'Are you sure you want to unblock this user?';
$_lang["confirm_undelete"] = '\n\nAny children Resources deleted at the same time as this Resource will also be undeleted, but children Resources deleted at an earlier time will still be deleted.';
$_lang["confirm_unpublish"] = '\n\nUn-publishing this Resource now will remove any (un)publishing dates that may have been set. If you wish to set or keep publish or unpublish dates, please choose to \'edit\' the Resource instead.\n\nProceed?';
$_lang["confirm_unzip_file"] = 'Are you sure you want to unzip this file?\n\nExisting files will be overwritten.';

$_lang["could_not_find_user"] = 'Could not find user';

$_lang["create_folder_here"] = 'Create Container here';
$_lang["create_resource_here"] = 'Create Resource here';
$_lang["create_resource_title"] = 'Create Resource';
$_lang["create_weblink_here"] = 'Create Weblink here';
$_lang["createdon"] = 'Creation date';
$_lang["create_new"] = 'Create new';

$_lang["credits"] = 'Credits';
$_lang["credits_shouts_msg"] = '<p>Evolution CMS is managed and maintained at <a href="https://evo-cms.com/" target="_blank">evo-cms.com</a>.</p>';
$_lang["custom_contenttype_message"] = 'Add custom content types for Resources. To add a new entry, enter the content type in the text box then click the \'Add\' button.';
$_lang["custom_contenttype_title"] = 'Custom content types';

$_lang["database_charset"] = 'Database Charset';
$_lang["database_collation"] = 'Database Collation Charset';
$_lang["database_name"] = 'Database name';
$_lang["database_overhead"] = '<b style="color:#990033;">Note:</b> Overhead is unused space reserved by MySQL. To free up this space, click on the table\'s overhead figure.';
$_lang["database_server"] = 'Database server';
$_lang["database_table_clickbackup"] = 'Backup &amp; download the selected tables';
$_lang["database_table_clickhere"] = 'Click here';
$_lang["database_table_datasize"] = 'Data size';
$_lang["database_table_droptablestatements"] = 'Generate DROP TABLE statements.';
$_lang["database_table_effectivesize"] = 'Effective size';
$_lang["database_table_indexsize"] = 'Index size';
$_lang["database_table_overhead"] = 'Overhead';
$_lang["database_table_records"] = 'Records';
$_lang["database_table_tablename"] = 'Table name';
$_lang["database_table_totals"] = 'Totals';
$_lang["database_table_totalsize"] = 'Total size';
$_lang["database_tables"] = 'Database tables';
$_lang["database_version"] = 'Database Version';

$_lang["date"] = 'Date';
$_lang["datechanged"] = 'Date changed';
$_lang["datepicker_offset"] = 'Datepicker offset';
$_lang["datepicker_offset_message"] = 'The number of years to show in the past on the datepicker.';
$_lang["datetime_format"] = 'Date format';
$_lang["datetime_format_message"] = 'The format for dates in the Manager.';

$_lang["default"] = 'Default:';
$_lang["defaultcache_message"] = 'Select \'Yes\' to make all new Resources cacheable by default.';
$_lang["defaultcache_title"] = 'Cacheable default';
$_lang["defaultmenuindex_message"] = 'Select \'Yes\' to turn on automatic menu index incrementing by default.';
$_lang["defaultmenuindex_title"] = 'Menu indexing default';
$_lang["defaultpublish_message"] = 'Select \'Yes\' to make all new Resources published by default.';
$_lang["defaultpublish_title"] = 'Published default';
$_lang["defaultsearch_message"] = 'Select \'Yes\' to make all new Resources searchable by default.';
$_lang["defaultsearch_title"] = 'Searchable default';
$_lang["defaulttemplate_message"] = 'Select the Template you wish to use as a system default for new Resources. You can still select a different Template in the Resource editor, this setting just pre-selects one of your Templates for you.';
$_lang["defaulttemplate_title"] = 'System Default Template';
$_lang["defaulttemplate_logic_title"] = 'Automatic Template Assignment';
$_lang["defaulttemplate_logic_general_message"] = 'New Resources will have the following templates, falling back to higher levels if not found:';
$_lang["defaulttemplate_logic_system_message"] = '<strong>System</strong>: the System Default Template.';
$_lang["defaulttemplate_logic_parent_message"] = '<strong>Parent</strong>: the same Template as the parent container.';
$_lang["defaulttemplate_logic_sibling_message"] = '<strong>Sibling</strong>: the same Template as other Resources in the same container.';

$_lang["delete"] = 'Delete';
$_lang["delete_resource"] = 'Delete Resource';
$_lang["delete_tags"] = 'Delete tags';
$_lang["deleting_file"] = 'Deleting file `%s`: ';
$_lang["description"] = 'Description';
$_lang["deselect_keywords"] = 'Clear keywords';
$_lang["deselect_metatags"] = 'Clear META tags';
$_lang["disabled"] = 'Disabled';
$_lang["doc_data_title"] = 'View Resource data';
$_lang["documentation"] = 'Documentation';

$_lang["duplicate"] = 'Duplicate';
$_lang["duplicate_alias_found"] = 'Resource \'%s\' is already using the URL alias \'%s\'. Please enter a unique URL alias.';
$_lang["duplicate_template_alias_found"] = 'Template \'%s\' is already using the URL alias \'%s\'. Please enter a unique alias.';
$_lang["duplicate_alias_message"] = 'Select \'yes\' to allow duplicate URL aliases to be saved. <b>NOTE: This option should be used with \'Friendly URL alias path\' option set to \'Yes\' in order to avoid problems when referencing a Resource.</b>';
$_lang["duplicate_alias_title"] = 'Allow duplicate URL aliases';
$_lang["duplicate_name_found_general"] = 'There is already a %s named \'%s\'. Please enter a unique name.';
$_lang["duplicate_name_found_module"] = 'There is already a Module named \'%s\'. Please enter a unique name.';
$_lang["duplicated_el_suffix"] = 'Duplicate';

$_lang["edit"] = 'Edit';
$_lang["edit_resource"] = 'Edit Resource';
$_lang["edit_resource_title"] = 'Edit Resource';
$_lang["edit_settings"] = 'Configuration';
$_lang["editedon"] = 'Edit date';
$_lang["editing_file"] = 'Editing file: ';
$_lang["editor_css_path_message"] = 'Enter the path to your CSS file that you wish to use within the editor. The best way to enter the path is to enter the path from the root of your server, for example: /assets/site/style.css. If you do not wish to load a style sheet into the editor, leave this field blank.';
$_lang["editor_css_path_title"] = 'Path to CSS file';

$_lang["email"] = 'Email';
$_lang["email_sent"] = 'Email sent';
$_lang["email_unique"] = 'Email is already in use!';
$_lang["emailsender_message"] = 'The email address of the site administrator. For example, this email address will be used as the destination of system notification e-mail etc.';
$_lang["emailsender_title"] = 'E-mail address';
$_lang["emailsubject_default"] = 'Your login details';
$_lang["emailsubject_message"] = 'Specify the value of the subject of the signup e-mail.';
$_lang["emailsubject_title"] = 'E-mail subject';

$_lang["empty_folder"] = 'This Container is empty';
$_lang["empty_recycle_bin"] = 'Purge deleted Resources';
$_lang["empty_recycle_bin_empty"] = 'There are no deleted Resources to purge.';
$_lang["enable_resource"] = 'Enable Element file.';
$_lang["enable_sharedparams"] = 'Enable parameter sharing';
$_lang["enable_sharedparams_msg"] = '<b>NOTE:</b> The above globally unique id (GUID) will be used to uniquely identify this Module and it\'s shared parameters. The GUID is also used to form a link between the Module and the Plugins or Snippets accessing the it\'s shared parameters. ';
$_lang["enabled"] = 'Enabled';
$_lang["error"] = 'Error';
$_lang["error_sending_email"] = 'Error sending email';
$_lang["errorpage_message"] = 'Enter a published and publicly accessible Resource ID to redirect users to when requesting a non-existing Resource.';
$_lang["errorpage_title"] = 'Error page';
$_lang["event_id"] = 'Event Id';
$_lang["eventlog"] = 'Event log';
$_lang["eventlog_msg"] = 'The event log is used to display information, warning and error messages generated by the content manager. The \'source\' column shows the section of the content manager where the message occurred.';
$_lang["eventlog_viewer"] = 'System Events';
$_lang["everybody"] = 'Everybody';
$_lang["existing_category"] = 'Existing Category';
$_lang["expand_tree"] = 'Expand Site Tree';
$_lang["failed_login_message"] = 'Enter the number of failed login attempts allowed before blocking a user.';
$_lang["failed_login_title"] = 'Failed Login Attempts';
$_lang["fe_editor_lang_message"] = 'Choose a language for the editor to use when used as a front-end editor.';
$_lang["fe_editor_lang_title"] = 'Front-end Editor Language';

$_lang["filemanager_path_message"] = 'IIS often does not populate the document_root setting properly, which is used by the file manager to determine what you can see. If you are having problems using the file manager, make sure this path points to the root of your Evolution CMS installation.';
$_lang["filemanager_path_title"] = 'File Manager path';

$_lang["folder"] = 'Folder';
$_lang["forgot_password_email_fine_print"] = '* The URL above will expire once you change your password or after today.';
$_lang["forgot_password_email_instructions"] = 'From there you will be able to change your password from the My Account menu.';
$_lang["forgot_password_email_intro"] = 'A request has been made to change the password on your account.';
$_lang["forgot_password_email_link"] = 'Click here to complete the process.';
$_lang["forgot_your_password"] = 'Forgot your password?';
$_lang["friendly_alias_message"] = 'With Friendly URLs enabled, a Resource URL alias will be used when present instead of the Resource ID. E.g., if a Resource with ID 1 has an URL alias of "introduction", no prefix set (empty) and a suffix of ".html", enabling this option would generate an URL alias of  "introduction.html". If there is no URL alias set, Evolution CMS generates "1.html".';
$_lang["friendly_alias_title"] = 'Use Friendly URL aliases';
$_lang["friendlyurls_message"] = 'Use Search Engine Friendly URLs on Apache webservers with mod_rewrite or IIS with third-party plugins. See the .htaccess file in the site root of the distribution for more info.';
$_lang["friendlyurls_title"] = 'Use FriendlyURLs';
$_lang["friendlyurlsprefix_message"] = 'A prefix setting of "page" will turn the URL /index.php?id=2 to the URL alias "page2.html" (assuming the suffix is set to .html).';
$_lang["friendlyurlsprefix_title"] = 'Friendly URL Prefix';
$_lang["friendlyurlsuffix_message"] = 'Any suffix you choose will work, including no suffix at all. E.g., ".aspx" will append .aspx to all URL aliases.';
$_lang["friendlyurlsuffix_title"] = 'Friendly URL Suffix';
$_lang["functionnotimpl"] = 'Sorry!';
$_lang["functionnotimpl_message"] = 'This function has not been implemented yet.';
$_lang["further_info"] = 'Further information';
$_lang["global_tabs"] = 'Global Tabs';
$_lang["go"] = 'Go';
$_lang["group_access_permissions"] = 'User group access';
$_lang['group_tvs'] = 'Group TV';
$_lang["guid"] = 'GUID';
$_lang["help"] = 'Help';
$_lang["help_msg"] = '<p>You can obtain free community support by <a href="http://forums.modx.com/" target="_blank">visiting the Evolution CMS Forums</a>. There is also a growing body of <a href="http://evolution-docs.com" target="_blank">Evolution CMS Documentation and Guides</a> that touch on virtually every aspect of Evolution CMS.</p><p>We are planning to offer commercial support services for Evolution CMS as well. Please <a href="mailto:dmi3yy@evo.im?subject=Evolution CMS Commercial Support Inquiry">email us if you\'re interested</a>.</p>';
$_lang["help_title"] = 'Help';
$_lang["hide_tree"] = 'Hide Site Tree';
$_lang["home"] = 'Dashboard';

$_lang["icon"] = 'Icon';
$_lang["icon_description"] = 'CSS class value. e.g. fa&nbsp;fa-star';
$_lang["id"] = 'ID';
$_lang["illegal_parent_child"] = 'Parent Assignment:\n\nResource is a child of the selected Resource.';
$_lang["illegal_parent_self"] = 'Parent Assignment:\n\nThe selected Resource cannot be assigned to itself.';
$_lang["images_management"] = 'Manage Images';
$_lang["import_files_found"] = '<b>Found %s Resources for import...</b>';
$_lang["import_params"] = 'Import Module shared parameters';
$_lang["import_params_msg"] = 'You can import the parameters or settings of a Module by selecting the name of the Module from the above drop down menu. <b>NOTE:</b> In order for Modules to appear inside the menu, this Plugin/Snippet must be a part of the Module\'s dependency listing and the Module must have parameter sharing enabled. ';
$_lang["import_parent_resource"] = 'Parent Resource:';
$_lang["update_tree"] = 'Rebuild the tree';
$_lang["update_tree_description"] = '<ul>
<li>Closure table database design pattern that makes working with the document tree more convenient and fast </li>
<li>If the data in the tree is updated not through models, then there is a possibility of an incorrect linking of documents in the database </li>
<li>This operation fixes the problem when site_content is not updated through the model (save, create) and the links (Closure table) are not updated </li>
<li>It is also possible to perform this operation in CLI mode via the \'php artisan closuretable: rebuild\' command </li>
</ul>';
$_lang["update_tree_danger"] = 'If you have more than 1000 resources, it is better to perform this operation in CLI mode using the \'php artisan closuretable: rebuild command\'';
$_lang["update_tree_time"] = 'Rebuild tree finished. Documents processed: <b>%s</b><br>Import took <b>%s</b> seconds to complete.';
$_lang["info"] = 'Info';
$_lang["information"] = 'Information';
$_lang["inline"] = 'Inline';
$_lang["insert"] = 'Insert';
$_lang["maxImageWidth"] = 'Maximum image width';
$_lang["maxImageHeight"] = 'Maximum image height';
$_lang["clientResize"] = 'Resize images on client-side';
$_lang["clientResize_message"] = 'If enabled then images will be resized by browser before upload to the server';
$_lang["noThumbnailsRecreation"] = 'Create thumbnails on upload only';
$_lang["noThumbnailsRecreation_message"] = 'File browser will create thumbnails only on upload; if there\'s no thumbnails for some images, they will not be created';
$_lang["thumbWidth"] = 'Maximum thumbnail width';
$_lang["thumbHeight"] = 'Maximum thumbnail height';
$_lang["thumbsDir"] = 'Thumbnails directory location';
$_lang["jpegQuality"] = 'JPEG compression';
$_lang["denyZipDownload"] = 'Disable zip-archives downloading';
$_lang["denyExtensionRename"] = 'Disable renaming of file extensions';
$_lang["maxImageWidth_message"] = 'If uploaded image resolution exceeds this setting it will be automatically resized. Set 0 to avoid.';
$_lang["maxImageHeight_message"] = 'If uploaded image resolution exceeds this setting it will be automatically resized. Set 0 to avoid.';
$_lang["thumbWidth_message"] = 'Maximum thumbnail width.';
$_lang["thumbHeight_message"] = 'Maximum thumbnail height.';
$_lang["thumbsDir_message"] = 'The name of thumbnail directory.';
$_lang["jpegQuality_message"] = 'JPEG compression quality of thumbnails and resized images';
$_lang["showHiddenFiles"] = 'Show hidden files in file browser';
$_lang["keyword"] = 'Keyword';
$_lang["keywords"] = 'Keywords';
$_lang["keywords_intro"] = 'To edit a keyword, simply type in the new keyword in the text field next to the keyword you wish to change. To delete a keyword, check the \'delete\' box for that keyword. If you check the keyword\'s delete box, and also change it\'s name, it will be deleted, and the renaming of the keyword will not take place!';
$_lang["language_message"] = 'Select the language for the Evolution CMS.';
$_lang["language_title"] = 'Manager language';
$_lang["last_update"] = 'Last update';
$_lang["launch_site"] = 'View Site';
$_lang["license"] = 'License';
$_lang["link_attributes"] = 'Link Attributes';
$_lang["link_attributes_help"] = 'Enter optional attributes for a link for this page, such as target=&quot;_blank&quot; or rel=&quot;external&quot;.';
$_lang["list_mode"] = 'Turn on/off list mode - used to list all records in the grid.';
$_lang["loading_doc_tree"] = 'Loading Site Tree...';
$_lang["loading_menu"] = 'Loading menu...';
$_lang["loading_page"] = 'Please wait while Evolution CMS loads the page...';
$_lang["localtime"] = 'Local Time';

$_lang["lock_htmlsnippet"] = 'Lock Chunk for editing';
$_lang["lock_htmlsnippet_msg"] = 'Only Administrators (Role ID 1) can edit this Chunk.';
$_lang["lock_module"] = 'Lock Module for editing';
$_lang["lock_module_msg"] = 'Only Administrators (Role ID 1) can edit this Module.';
$_lang["lock_msg"] = '%s is currently editing this %s. Please wait until the other user has finished and try again.';
$_lang["lock_plugin"] = 'Lock Plugin for editing';
$_lang["lock_plugin_msg"] = 'Only Administrators (Role ID 1) can edit this Plugin.';
$_lang["lock_settings_msg"] = '%s is currently editing these settings. Please wait until the other user has finished and try again.';
$_lang["lock_snippet"] = 'Lock Snippet for editing';
$_lang["lock_snippet_msg"] = 'Only Administrators (Role ID 1) can edit this Snippet.';
$_lang["lock_template"] = 'Lock Template for editing';
$_lang["lock_template_msg"] = 'Only Administrators (Role ID 1) can edit this Template.';
$_lang["lock_tmplvars"] = 'Lock Template Variable for editing';
$_lang["lock_tmplvars_msg"] = 'Only Administrators (Role ID 1) can edit this Template Variable.';
$_lang["locked"] = 'Locked';

$_lang["login_allowed_days"] = 'Allowed Days';
$_lang["login_allowed_days_message"] = 'Select the days that this user is allowed to login.';
$_lang["login_allowed_ip"] = 'Allowed IP Address';
$_lang["login_allowed_ip_message"] = 'Enter the IP addresses that this user is allowed to login from. <b>NOTE: Separate multiple IP addresses with a comma (,)</b>';
$_lang["login_button"] = 'Login';
$_lang["login_cancelled_install_in_progress"] = 'Install/update of this site is currently in progress. Please retry in a couple of minutes!';
$_lang["login_cancelled_site_was_updated"] = 'Install/update on this site was executed, please login again!';
$_lang["login_captcha_message"] = 'Please enter the security code shown in the graphic. If you can\'t read the code, click the image to generate a new one or contact your site admin.';
$_lang["login_homepage"] = 'Login Home Page';
$_lang["login_homepage_message"] = 'Enter the ID of the Resource you want to send user to after he/she has logged in. <b>NOTE: make sure the ID you enter belongs to an existing Resource, and that it has been published and is accessible by this user!</b>';
$_lang["login_message"] = 'Please enter your login credentials to start your Manager session. Your username and password are case-sensitive, so please enter them carefully!';
$_lang["logo_slogan"] = 'Evolution CMS - \nCreate and do more with less';
$_lang["logout"] = 'Logout';
$_lang["long_title"] = 'Long title';

$_lang["manager"] = 'Manager';
$_lang["manager_lockout_message"] = 'You are currently logged into the Content Manager. If you would like to close your login session please click the "Logout" button. <p />To go to your startup or home page click the "Home" button.';
$_lang["manager_permissions"] = 'Manager Permissions';
$_lang["manager_theme"] = 'Manager Theme';
$_lang["manager_theme_message"] = 'Select the Theme for the Content Manager.';
$_lang["manager_theme_mode"] = 'Color Scheme:';
$_lang["manager_theme_mode1"] = 'everything is light';
$_lang["manager_theme_mode2"] = 'the header is dark';
$_lang["manager_theme_mode3"] = 'header and sidebar are dark';
$_lang["manager_theme_mode4"] = 'everything is dark';
$_lang['manager_theme_mode_message'] = 'This setting is used as the "default" and can be overridden by the manager when using the theme color mode switch button in the Resource Tree: <i class="fa fa-lg fa-adjust"></i>';
$_lang['manager_theme_mode_title'] = 'Theme color mode switch';

$_lang["meta_keywords"] = 'META Keywords';
$_lang["metatag_intro"] = 'On this page you can delete, create or edit META tags. To link META tags to Resources, click on the <u>META Keywords</u> tab when editing the Resource, and select the desired META tags and keywords. To add a new tag enter the name and value and click the \'Add tag\' button. To edit the tag click on the name of the tag from within the data grid.';
$_lang["metatag_notice"] = 'You may wish to reference the <a href="http://www.html-reference.com/META.asp" target="_blank">HTML Reference Guide</a> site for more information. This is not a complete list of possible Meta Tags.';
$_lang["metatags"] = 'META tags';
$_lang["mgr_access_permissions"] = 'Manager access permissions';
$_lang["mgr_login_start"] = 'Manager Login Startup';
$_lang["mgr_login_start_message"] = 'Enter the ID of the Resource you want to send the user to after he/she has logged into the manager. <b>NOTE: make sure the ID you\'ve enter belongs to an existing Resource, and that it has been published and is accessible by this user!</b>';

$_lang["mgrlog_action"] = 'Action';
$_lang["mgrlog_actionid"] = 'Action ID';
$_lang["mgrlog_anyall"] = 'Any/All';
$_lang["mgrlog_datecheckfalse"] = 'checkdate() returned false.';
$_lang["mgrlog_datefr"] = 'Date from';
$_lang["mgrlog_dateinvalid"] = 'Invalid date format.';
$_lang["mgrlog_dateto"] = 'Date to';
$_lang["mgrlog_emptysrch"] = 'Your search query returned an empty result set (i.e. not matching logs found).';
$_lang["mgrlog_field"] = 'Field';
$_lang["mgrlog_itemid"] = 'Item ID';
$_lang["mgrlog_itemname"] = 'Item name';
$_lang["mgrlog_msg"] = 'Message';
$_lang["mgrlog_noquery"] = 'No search query entered yet.';
$_lang["mgrlog_qresults"] = 'Query results';
$_lang["mgrlog_query"] = 'Query logging';
$_lang["mgrlog_query_msg"] = 'Please make a selection for viewing the logs. You can select log entries by date, but be aware that the dates you enter are not inclusive - to select every log entry for 01-01-2004, set \'date from\' to 01-01-2004 and \'date to\' to 02-01-2004.<br /><br />Message and action are usually the same. If you\'re searching for a specific message, it\'s best to set action to \'Any/All\'.';
$_lang["mgrlog_results"] = 'No. of results';
$_lang["mgrlog_searchlogs"] = 'Search logs';
$_lang["mgrlog_sortinst"] = 'Sort the table by clicking on the column headers. If the logs are too large, <a href="index.php?a=55">empty the log file</a> to remove all log entries up to now. This cannot be undone!';
$_lang["mgrlog_time"] = 'Time';
$_lang["mgrlog_user"] = 'User';
$_lang["mgrlog_username"] = 'Username';
$_lang["mgrlog_value"] = 'Value';
$_lang["mgrlog_view"] = 'View manager logs';

$_lang["modx_news"] = 'Evolution CMS News Notices';
$_lang["modx_news_tab"] = 'Evolution CMS News';
$_lang["modx_news_title"] = 'Evolution CMS News';
$_lang["modx_security_notices"] = 'Evolution CMS Security Notices';
$_lang["modx_version"] = 'Evolution CMS version';

$_lang["name"] = 'Username';

$_lang["no"] = 'No';
$_lang["no_active_users_found"] = 'No active users found.';
$_lang["no_activity_message"] = 'You have not yet created or edited any Resources.';
$_lang["no_category"] = 'uncategorized';
$_lang["no_docs_pending_publishing"] = 'No Resources pending publishing.';
$_lang["no_docs_pending_pubunpub"] = 'No Events Found';
$_lang["no_docs_pending_unpublishing"] = 'No Resources pending unpublishing.';
$_lang["no_edits_creates"] = 'No edits or creates found.';
$_lang["no_groups_found"] = 'No groups found.';
$_lang["no_keywords_found"] = 'There are currently no keywords.';
$_lang["no_records_found"] = 'No records found.';
$_lang["no_results"] = 'No results found';
$_lang["nologentries_message"] = 'Enter the number of log entries shown per page when you browse the Audit trail.';
$_lang["nologentries_title"] = 'Number of log entries';
$_lang["none"] = 'None';
$_lang["noresults_message"] = 'Enter the number of results to show in the data grid when viewing listings and search results.';
$_lang["noresults_title"] = 'Number of Results';
$_lang["not_deleted"] = 'has not been deleted.';
$_lang["not_set"] = 'Not set';

$_lang["offline"] = 'Offline';

$_lang["online"] = 'Online';
$_lang["onlineusers_action"] = 'Action';
$_lang["onlineusers_actionid"] = 'Action-ID';
$_lang["onlineusers_ipaddress"] = 'IP address';
$_lang["onlineusers_lasthit"] = 'Last hit';
$_lang["onlineusers_message"] = 'This list shows all users active within the last 20 minutes (current time is ';
$_lang["onlineusers_title"] = 'Online users';
$_lang["onlineusers_user"] = 'Username';
$_lang["onlineusers_userid"] = 'User\'s ID';

$_lang["optimize_table"] = 'Click here to optimize this table';

$_lang["page_data_alias"] = 'Alias';
$_lang["page_data_cacheable"] = 'Cacheable';
$_lang["page_data_cacheable_help"] = 'This allows the Resource to be saved to the site cache, and affects all Snippets on the page.';
$_lang["page_data_cached"] = '<b>Source retrieved from cache:</b>';
$_lang["page_data_changes"] = 'Changes';
$_lang["page_data_contentType"] = 'Internet Media Type';
$_lang["page_data_contentType_help"] = 'Select the content type for this Resource. If you\'re not sure which content type the Resource should have, just leave it as text/html.';
$_lang["page_data_created"] = 'Created';
$_lang["page_data_edited"] = 'Edited';
$_lang["page_data_editor"] = 'Edit using rich text editor';
$_lang["page_data_folder"] = 'Resource is Container';
$_lang["page_data_general"] = 'General';
$_lang["page_data_markup"] = 'Markup/structure';
$_lang["page_data_mgr_access"] = 'Manager access';
$_lang["page_data_notcached"] = 'This Resource has not yet been cached.';
$_lang["page_data_publishdate"] = 'Publish date';
$_lang["page_data_publishdate_help"] = 'If you set a publish date, the Resource will be published as soon as the publish date is reached. Click on the calender icon to select a date, or on the icon next to it to remove the publish date. This will then mean the Resource is never automatically published.';
$_lang["page_data_published"] = 'Published';
$_lang["page_data_searchable"] = 'Searchable';
$_lang["page_data_searchable_help"] = 'Checking this field will allow the Resource to be searched. You can also use this field for other purposes in your Snippets.';
$_lang["page_data_source"] = 'Source';
$_lang["page_data_status"] = 'Status';
$_lang["page_data_template"] = 'Uses Template';
$_lang["page_data_template_help"] = 'Select the Template for this Resource.';
$_lang["page_data_title"] = 'Page data';
$_lang["page_data_unpublishdate"] = 'Un-publish date';
$_lang["page_data_unpublishdate_help"] = 'If you set an unpublish date, the Resource will be unpublished as soon as the unpublish date is reached. Click on the calender icon to select a date, or on the icon next to it to remove the unpublish date. This will then mean the Resource is never automatically unpublished.';
$_lang["page_data_unpublished"] = 'Un-published';
$_lang["page_data_web_access"] = 'Web access';

$_lang["pagetitle"] = 'Resource\'s title';
$_lang["pagination_table_first"] = 'First';
$_lang["pagination_table_gotopage"] = 'Go to page';
$_lang["pagination_table_last"] = 'Last';
$_lang["paging_first"] = 'first';
$_lang["paging_last"] = 'last';
$_lang["paging_next"] = 'next';
$_lang["paging_prev"] = 'prev';
$_lang["paging_showing"] = 'Showing';
$_lang["paging_to"] = 'to';
$_lang["paging_total"] = 'total';
$_lang["parameter"] = 'Parameter';
$_lang["parse_docblock"] = 'Parse DocBlock';
$_lang["parse_docblock_msg"] = 'Attention (!): <b>Resets</b> actual name, configuration, description and category to install-defaults by parsing the source code.';

$_lang["password"] = 'Password';
$_lang["password_change_request"] = 'Password change request';
$_lang["password_confirmed"] = 'Passwords doesn\'t match';
$_lang["password_gen_gen"] = 'Let Evolution CMS generate a password.';
$_lang["password_gen_length"] = 'The password you specify needs to be at least 6 characters long.';
$_lang["password_gen_method"] = 'New password method';
$_lang["password_gen_specify"] = 'Let me specify the password:';
$_lang["password_method"] = 'Password notification method';
$_lang["password_method_email"] = 'Send the new password by e-mail.';
$_lang["password_method_screen"] = 'Show the new password on screen.';
$_lang["password_msg"] = 'The new password for <b>:username</b> is <b>:password</b><br>';

$_lang["php_version_check"] = 'Evolution CMS is compatible with PHP version 7.4 and higher. This server is using version %s%. Please upgrade your PHP installation!';

$_lang["preview"] = 'Preview';
$_lang["preview_msg"] = 'This is a preview of your last saved changes. Click here to <a href="javascript:;" onclick="saveRefreshPreview();">Save and Refresh</a> your current changes';
$_lang["preview_resource"] = 'Preview Resource';

$_lang["private"] = 'Private';
$_lang["public"] = 'Public';
$_lang["publish_date"] = 'Publish Date';
$_lang["publish_events"] = 'Publish Events';
$_lang["publish_resource"] = 'Publish Resource';

$_lang["rb_base_dir_message"] = 'Enter the physical path to the File Browser directory. This setting is usually automatically generated. If you\'re using IIS, however, Evolution CMS may not be able to work the path out on its own, causing the File Browser to show an error. In that case, you can enter the path to the images directory here (the path as you\'d see it in Windows Explorer). <b>NOTE:</b> The File Browser directory must contain the subdirectories images, files, flash and media in order for the file browser to function correctly.';
$_lang["rb_base_dir_title"] = 'File base path';
$_lang["rb_base_url_message"] = 'Enter the virtual path to files directory. This setting is usually automatically generated. If you\'re using IIS, however, Evolution CMS may not be able to work the URL out on it\'s own, causing the File Browser to show an error. In that case, you can enter the URL to the images directory here (the URL as you\'d enter it on Internet Explorer).';
$_lang["rb_base_url_title"] = 'File Browser URL';
$_lang["rb_message"] = 'Select yes to enable the File Browser. This will allow your users to browse and upload files such as images, flash and media files on the server.';
$_lang["rb_title"] = 'Enable File Browser';
$_lang["rb_webuser_message"] = 'Do you want to allow a web user the ability to use the file browser? <b>WARNING:</b> Allowing web users the use of the file browser exposes the files available to manager users.  Only use this option for trusted web users.';
$_lang["rb_webuser_title"] = 'Web Users?';
$_lang["recent_docs"] = 'Recent Resources';
$_lang["recommend_setting_change_title"] = 'Recommended Setting Change';
$_lang["recommend_setting_change_description"] = 'Your site is not configured to validate the HTTP_REFERER of incoming requests to the Manager. We strongly recommend enabling this setting to reduce the risk of a CSRF (Cross Site Request Forgery) attack.';
$_lang["references"] = 'References';
$_lang["refresh_cache"] = 'Cache: Found <b>%s</b> files in cache directory and deleted <b>%d</b> cache files.<p>New cache files will be created when pages are requested.';
$_lang["refresh_published"] = '<b>%s</b> Resources were published.';
$_lang["refresh_site"] = 'Clear Cache';
$_lang["refresh_title"] = 'Refresh site';
$_lang["refresh_tree"] = 'Refresh Site Tree';
$_lang["refresh_unpublished"] = '<b>%s</b> Resources were unpublished.';
$_lang["release_date"] = 'Release date';
$_lang["remember_last_tab"] = 'Remember tabs';
$_lang["remember_last_tab_message"] = 'Tabbed Manager pages load with the last tab viewed instead of defaulting to the first tab';
$_lang["remember_username"] = 'Remember me';
$_lang["remove"] = 'Remove';
$_lang["remove_date"] = 'Remove date';
$_lang["remove_locks"] = 'Remove Locks';
$_lang["rename"] = 'Rename';
$_lang["reports"] = 'Reports';
$_lang["report_issues"] = 'Report issues';
$_lang["required_field"] = 'Field :field is required';
$_lang["require_tagname"] = 'A tag name is required';
$_lang["require_tagvalue"] = 'A tag value is required';
$_lang["reserved_name_warning"] = 'You have used a reserved name.';
$_lang["reset"] = 'Reset';
$_lang["reset_failedlogins"] = 'reset';
$_lang["reset_sort_order"] = 'Reset sort order';

$_lang["manager_access_permissions"] = 'Manager access permission';
$_lang["manage_groups"] = 'Manage document and user groups';
$_lang["manage_document_permissions"] = 'Manage document permissions';
$_lang["manage_module_permissions"] = 'Manage module permissions';
$_lang["manage_tv_permissions"] = 'Manage TV permissions';

$_lang["rss_url_news_default"] = 'https://github.com/evocms-community/evolution/releases.atom';
$_lang["rss_url_news_message"] = 'Enter the URL for the Evolution CMS News Feed.';
$_lang["rss_url_news_title"] = 'RSS News Feed';
$_lang["rss_url_security_default"] = 'https://github.com/extras-evolution/security-fix/releases.atom';
$_lang["rss_url_security_message"] = 'Enter the URL for the Evolution CMS Security Feed.';
$_lang["rss_url_security_title"] = 'RSS Security Feed';

$_lang["run_module"] = 'Run Module';
$_lang["save"] = 'Save';
$_lang["save_all_changes"] = 'Save all changes';
$_lang["save_tag"] = 'Save tag';
$_lang["saving"] = 'Saving, please wait...';

$_lang["search"] = 'Search';
$_lang["search_criteria"] = 'Search criteria';
$_lang["search_criteria_content"] = 'Search by content';
$_lang["search_criteria_content_msg"] = 'Find all Resources with the entered text in their content.';
$_lang["search_criteria_id"] = 'Search by ID';
$_lang["search_criteria_id_msg"] = 'Enter a Resource\'s ID to quickly locate that Resource.';
$_lang["search_criteria_top"] = 'Search in main fields';
$_lang["search_criteria_top_msg"] = 'Pagetitle, Longtitle, Alias, ID';
$_lang["search_criteria_template_id"] = 'Search by template ID';
$_lang["search_criteria_template_id_msg"] = 'Find all Resources using the specified template.';
$_lang["search_criteria_url_msg"] = 'Find Resource by exact URL.';
$_lang["search_criteria_longtitle"] = 'Search by long title';
$_lang["search_criteria_longtitle_msg"] = 'Find all Resources with the entered text in their long title.';
$_lang["search_criteria_title"] = 'Search by title';
$_lang["search_criteria_title_msg"] = 'Find all Resources with the entered text in their title.';
$_lang["search_empty"] = 'Your search returned no results. Please broaden your search criteria and try again.';
$_lang["search_item_deleted"] = 'This item has been deleted';
$_lang["search_results"] = 'Search results';
$_lang["search_results_returned_desc"] = 'Description';
$_lang["search_results_returned_id"] = 'ID';
$_lang["search_results_returned_msg"] = 'Your search criteria returned <b>%s</b> Resources. If a lot of results are being returned, try to enter a more specific search.';
$_lang["search_results_returned_title"] = 'Title';
$_lang["search_view_docdata"] = 'View this item';

$_lang["security"] = 'Users';
$_lang["security_notices_tab"] = 'Security Notices';
$_lang["security_notices_title"] = 'Security Notices';

$_lang["select_date"] = 'Select a date';
$_lang["send"] = 'Send';
$_lang["server_protocol_http"] = 'http';
$_lang["server_protocol_https"] = 'https';
$_lang["server_protocol_message"] = 'If your site is on a https connection, please specify so here.';
$_lang["server_protocol_title"] = 'Server type';
$_lang["serveroffset"] = 'Server offset';
$_lang["serveroffset_message"] = 'Select the number of hours time difference between where you are and where the server is. Current time on server is <b>[%s]</b>, current time on server using the currently saved offset is <b>[%s]</b>.';
$_lang["serveroffset_title"] = 'Server offset time';
$_lang["servertime"] = 'Server Time';
$_lang["set_automatic"] = 'Set automatic';
$_lang["set_default"] = 'Set default';
$_lang["set_default_all"] = 'Set defaults';

$_lang["settings_after_install"] = 'As this is a new install, you are required to review these settings and change any that you wish to. After you have reviewed the settings, press \'Save\' to update the settings database.';
$_lang["settings_config"] = 'Configuration';
$_lang["settings_dependencies"] = 'Dependencies';
$_lang["settings_events"] = 'System Events';
$_lang["settings_furls"] = 'Friendly URLs';
$_lang["settings_general"] = 'General';
$_lang["settings_group_tv_message"] = 'Choose if Template Variables should be grouped in sections or tabs (named by TV category) when editing a Resource';
$_lang["settings_group_tv_options"] = 'No,Sections in General tab,Tabs in General tab,Sections in new tab,Tabs in new tab,New tabs';
$_lang["settings_misc"] = 'File Manager';
$_lang["settings_security"] = 'Security';
$_lang["settings_KC"] = 'File Browser';
$_lang["settings_page_settings"] = 'Settings';
$_lang["settings_photo"] = 'Photo';
$_lang["settings_properties"] = 'Properties';
$_lang["settings_site"] = 'Site';
$_lang["settings_strip_image_paths_message"] = 'If this is set to \'No\', Evolution CMS will write file browser src\'s (images, files, flash, etc.) as absolute URLs. Relative URLs are helpful should you wish to move your Evolution CMS install, e.g., from a staging site to a production site. If you have no idea what this means, it\'s best just to leave it set to \'Yes\'.';
$_lang["settings_strip_image_paths_title"] = 'Rewrite browser paths?';
$_lang["settings_templvars"] = 'Template Variables';
$_lang["settings_title"] = 'System configuration';
$_lang["settings_ui"] = 'Interface & Features';
$_lang["settings_users"] = 'User';
$_lang["settings_email_templates"] = 'Email & Templates';

$_lang["show_fullscreen_btn_message"] = 'Show Menu toggle Fullscreen button';
$_lang["show_newresource_btn_message"] = 'Show Menu New Resource button';
$_lang["settings_show_picker_message"] = 'Customize manager theme and save to localstorage';
$_lang["show_fullscreen_btn"] = 'Toggle Fullscreen button';
$_lang["show_newresource_btn"] = 'New Resource button';

$_lang["show_meta"] = 'Show META Keywords tab';
$_lang["show_meta_message"] = 'Show the deprecated META Keywords tab when editing Resources in the Manager.';
$_lang["show_tree"] = 'Show Site Tree';
$_lang["show_picker"] = 'Show Color Switcher';
$_lang["showing"] = 'Showing';
$_lang["signupemail_message"] = 'Set the email message sent to users when creating accounts including their username and password.<br /><b>Note:</b> The following Placeholders are replaced by the Content Manager when the message is sent: <br /><br />[+sname+] - Name of your web site, <br />[+saddr+] - Your web site email address, <br />[+surl+] - Your site url, <br />[+uid+] - User\'s Login name or id, <br />[+pwd+] - User\'s password, <br />[+ufn+] - User\'s full name. <br />[+u_first_name+] - User\'s first name. <br />  [+u_last_name+] - User\'s last name. <br />   [+u_middle_name+] - User\'s middle name. <br />  <br /><b>Leave the [+uid+] and [+pwd+] in the e-mail, or else the username and password won\'t be sent in the mail and your users won\'t know their username or password!</b>';
$_lang["signupemail_title"] = 'Signup e-mail';
$_lang["site"] = 'Site';
$_lang["site_schedule"] = 'Schedule';
$_lang["sitename_message"] = 'Enter the name of your site here.';
$_lang["sitename_title"] = 'Site name';
$_lang["sitestart_message"] = 'Enter the ID of the Resource you want to use as homepage here. <b>NOTE: make sure this ID you enter belongs to an existing Resource, and that it has been published!</b>';
$_lang["sitestart_title"] = 'Site start';
$_lang["sitestatus_message"] = 'Select \'Online\' to publish your site on the web. If you select \'Offline\', your visitors will see the \'Site unavailable message\', and won\'t be able to browse the site.';
$_lang["sitestatus_title"] = 'Site status';
$_lang["siteunavailable_message"] = 'Message to show when the site is offline or if an error occurs. <b>Note: This message will only be displayed if the Site unavailable page option is not set.</b>';
$_lang["siteunavailable_message_default"] = 'The site is currently unavailable.';
$_lang["siteunavailable_page_message"] = 'Enter the ID of the Resource you want to use as an offline page here. <b>NOTE: make sure this ID you enter belongs to an existing Resource, and that it has been published!</b>';
$_lang["siteunavailable_page_title"] = 'Site unavailable page';
$_lang["siteunavailable_title"] = 'Site unavailable message';
$_lang["controller_namespace"] = 'Controller Namespace';
$_lang["controller_namespace_message"] = 'Specify the full Namespace from which it is worth taking controllers, for example: <b>EvolutionCMS\\Main\\Controllers\\</b>';
$_lang["update_repository"] = 'GitHub repository path';
$_lang["update_repository_message"] = 'Enter GitHub repository path for example: <b>evocms-community/evolution</b>';

$_lang["sort_alphabetically"] = 'Sort alphabetically';
$_lang["sort_asc"] = 'Ascending';
$_lang["sort_desc"] = 'Descending';
$_lang["sort_menuindex"] = 'Sort menu index';
$_lang["sort_tree"] = 'Sort the Site Tree';
$_lang['sort_updating'] = 'Updating ...';
$_lang['sort_updated'] = 'Updated!';
$_lang['sort_nochildren'] = 'Parent does not have any children';
$_lang["sort_elements_msg"] = 'Drag to reorder the listed elements.';

$_lang["source"] = 'Source';
$_lang["stay"] = 'Continue editing';
$_lang["stay_new"] = 'Add another';
$_lang["submit"] = 'Submit';
$_lang["sys_alert"] = 'System Alert';
$_lang["sysinfo_activity_message"] = 'This list show which Resources have been recently edited by your users.';
$_lang["sysinfo_userid"] = 'User';
$_lang["system"] = 'System';
$_lang["system_email_signup"] = 'Hello [+uid+]

Here are your login details for [+sname+] Content Manager:

Username: [+uid+]
Password: [+pwd+]

Once you log into the Content Manager ([+surl+]), you can change your password.

Regards,
Site Administrator';
$_lang["system_email_webreminder"] = 'Hello [+uid+]

To activate your new password click the following link:

[+surl+]

If successful you can use the following password to login:

Password:[+pwd+]

If you did not request this email then please ignore it.

Regards,
Site Administrator';
$_lang["system_email_websignup"] = 'Hello [+uid+]

Here are your login details for [+sname+]:

Username: [+uid+]
Password: [+pwd+]

Once you log into [+sname+] ([+surl+]), you can change your password.

Regards,
Site Administrator';
$_lang["table_hoverinfo"] = 'Hover the mouse cursor over a table\'s name to see a short description of the table\'s function (not all tables have <i>comments</i> set).';
$_lang["table_prefix"] = 'Table prefix';
$_lang["tag"] = 'Tag';

$_lang["to"] = 'to';
$_lang["toggle_fullscreen"] = 'Toggle Fullscreen';
$_lang["tools"] = 'Tools';
$_lang["top_howmany_message"] = 'When viewing reports, how large should the \'Top ...\' lists be?';
$_lang["top_howmany_title"] = 'Top how many';
$_lang["total"] = 'total';
$_lang["track_visitors_message"] = 'Check to show the child resources in the document tree';
$_lang["track_visitors_title"] = 'Show child resources';
$_lang["tree_page_click"] = 'Page Click Behavior';
$_lang["tree_page_click_message"] = 'The default behavior when clicking on a page in the site tree.';
$_lang["use_breadcrumbs"] = 'Show navigation';
$_lang["use_breadcrumbs_message"] = 'Show the navigation when creating or editing Resource in the Manager';
$_lang["tree_show_protected"] = 'Show protected pages';
$_lang["tree_show_protected_message"] = 'When set to "No", Protected Resources (and all their child-Resources) do not appear in the Site Tree menu. "No" is the legacy setting for Evolution CMS.';
$_lang["truncate_table"] = 'Click here to truncate this table';
$_lang["type"] = 'Type';
$_lang["udperms_allowroot_message"] = 'Allow Users to create new Resources in the site root. ';
$_lang["udperms_allowroot_title"] = 'Allow root';
$_lang["udperms_message"] = 'Control access to Resources via User Groups and Resource Groups.';
$_lang["udperms_title"] = 'Use access permissions';
$_lang["unable_set_link"] = 'Unable to set the link!';
$_lang["unable_set_parent"] = 'Unable to set new parent!';
$_lang["unauthorizedpage_message"] = 'Enter a published and publicly accessible Resource ID to redirect Users to when requesting a secured/unauthorized Resource.';
$_lang["unauthorizedpage_title"] = 'Unauthorized page';
$_lang["unblock_message"] = 'This User will not be blocked after saving the User\'s data.';
$_lang["undelete_resource"] = 'Undelete Resource';
$_lang["unpublish_date"] = 'Unpublish Date';
$_lang["unpublish_events"] = 'Un-publish Events';
$_lang["unpublish_resource"] = 'Un-publish Resource';
$_lang["untitled_resource"] = 'Untitled Resource';
$_lang["untitled_weblink"] = 'Untitled Weblink';
$_lang["update_params"] = 'Update parameter display';
$_lang["update_settings_from_language"] = 'Replace current with:';

$_lang["upload_maxsize_message"] = 'Enter the maximum file size that can be uploaded via the file manager. Upload file size must be entered in bytes. <b>NOTE: Large files can take a very long time to upload!</b>';
$_lang["upload_maxsize_title"] = 'Maximum upload size';
$_lang["uploadable_files_message"] = 'Enter a list of files that can be uploaded into \'assets/files/\' using the File Browser. Please enter the extensions for the filetypes, separated by commas.';
$_lang["uploadable_files_title"] = 'Uploadable File Types';
$_lang["uploadable_flash_message"] = 'Enter a list of files that can be uploaded into \'assets/flash/\' using the File Browser. Please enter the extensions for the flash types, separated by commas.';
$_lang["uploadable_flash_title"] = 'Uploadable Flash Types';
$_lang["uploadable_images_message"] = 'Enter a list of files that can be uploaded into \'assets/images/\' using the File Browser. Please enter the extensions for the image types, separated by commas.';
$_lang["uploadable_images_title"] = 'Uploadable Image Types';
$_lang["uploadable_media_message"] = 'Enter a list of files that can be uploaded into \'assets/media/\' using the File Browser. Please enter the extensions for the media types, separated by commas.';
$_lang["uploadable_media_title"] = 'Uploadable Media Types';
$_lang["use_alias_path_message"] = 'Enabling this option generates a virtual path to the Resource. E.g., if a Resource "child.html" is located in a Container Resource "parent", then the full URL alias path URL will be "/parent/child.html".';
$_lang["use_alias_path_title"] = 'Use Friendly URL alias path';
$_lang["use_editor_message"] = 'Enable editing with a Rich Text Editor (RTE). This setting applies to all Resources, but can be overridden in the User settings.';
$_lang["use_editor_title"] = 'Enable editor';
$_lang["use_global_tabs"] = 'Use global Tabs';

$_lang["valid_hostnames_message"] = 'Help prevent XSS exploits misusing the site_url system setting by providing a comma separated list of valid hostnames for this installation. This is important for some types of shared hosts or hosts direct accessible via an IP address. First hostname in the list is used if the HTTP_HOST does not match any valid hostname.';
$_lang["valid_hostnames_title"] = 'Valid hostnames';
$_lang["validate_referer_message"] = 'Validate the HTTP_REFERER headers to reduce the risk of your content editors being tricked into performing unintended actions in the manager as victims of a CSRF (Cross Site Request Forgery) attack. Some configurations may not be able to use this option if the server is not sending HTTP_REFERER headers.';
$_lang["validate_referer_title"] = 'Validate HTTP_REFERER headers?';
$_lang["value"] = 'Value';
$_lang["version"] = 'Version';
$_lang["view"] = 'View';
$_lang["view_child_resources_in_container"] = 'View children';
$_lang["view_log"] = 'View log';
$_lang["view_logging"] = 'Manager Actions';
$_lang["view_sysinfo"] = 'System Info';
$_lang["warning"] = 'Warning!';
$_lang["warning_not_saved"] = 'The changes you have made have not been saved yet. You can choose to stay on the current page in order to save the changes (\'Cancel\'), or you can leave this page, losing any changes you have made (\'OK\').';
$_lang["warning_visibility"] = 'Configuration Warnings visible to';
$_lang["warning_visibility_message"] = 'Control the visibility of the configuration warnings shown on the Manager welcome page';
$_lang["web_access_permissions"] = 'Access permissions';
$_lang["web_access_permissions_user_groups"] = 'User groups';
$_lang["web_permissions"] = 'Permissions';
$_lang["web_user_management_msg"] = 'Choose the User you wish to edit. Users are those Users who are allowed to log into the web site and manager';
$_lang["web_user_management_title"] = 'Users';
$_lang["web_user_management_select_role"] = 'All roles';
$_lang["web_user_title"] = 'Create/edit User';
$_lang["web_users"] = 'Users';
$_lang["weblink"] = 'Weblink';
$_lang["webpwdreminder_message"] = 'Enter a message to be sent to your Web Users whenever they request a new password via email. The Content Manager will send an e-mail containing their new password and activation information. <br /><b>Note:</b> The following Placeholders are replaced by the Content Manager when the message is sent: <br /><br />[+sname+] - Name of your web site, <br />[+saddr+] - Your web site email address, <br />[+surl+] - Your site url, <br />[+uid+] - User\'s Login name or id, <br />[+pwd+] - User\'s password, <br />[+ufn+] - User\'s full name. <br />   [+u_first_name+] - User\'s first name. <br />  [+u_last_name+] - User\'s last name. <br />   [+u_middle_name+] - User\'s middle name. <br />     <br /><b>Leave the [+uid+] and [+pwd+] in the e-mail, or else the username and password won\'t be sent in the mail and your Users won\'t know their username or password!</b>';
$_lang["webpwdreminder_title"] = 'Web Reminder Email';
$_lang["websignupemail_message"] = 'Set the email message sent to Users when creating accounts including their username and password<br /><b>Note:</b> The following Placeholders are replaced by the Content Manager when the message is sent: <br /><br />[+sname+] - Name of your web site, <br />[+saddr+] - Your web site email address, <br />[+surl+] - Your site url, <br />[+uid+] - User\'s Login name or id, <br />[+pwd+] - User\'s password, <br />[+ufn+] - User\'s full name. <br />[+u_first_name+] - User\'s first name. <br />  [+u_last_name+] - User\'s last name. <br />   [+u_middle_name+] - User\'s middle name. <br /><br /><b>Leave the [+uid+] and [+pwd+] in the e-mail, or else the username and password won\'t be sent in the mail and your Users won\'t know their username or password!</b>';
$_lang["websignupemail_title"] = 'Web Signup e-mail';
$_lang["allow_multiple_emails_title"] = 'Duplicate Web User email address';
$_lang["allow_multiple_emails_message"] = 'Allows Web Users to share the same email address for situations when a member may not have their own email address or there is just one family email address.<br/>Note: Any password reminder and registration logic will need to account for this option if set to yes.';
$_lang["welcome_title"] = 'Welcome to your Evolution CMS Content Manager';
$_lang["which_editor_message"] = 'Select the rich text editor (RTE). You can download and install additional RTEs from the Evolution CMS download page.';
$_lang["which_editor_title"] = 'Editor to use';
$_lang["working"] = 'Working...';
$_lang["wrap_lines"] = 'Wrap lines';
$_lang["xhtml_urls_message"] = 'Replaces ampersand (&amp;) characters in urls that are generated by Evolution CMS with the validating &amp;<!-- -->amp; htmlentity';
$_lang["xhtml_urls_title"] = 'XHTML URLs';
$_lang["yes"] = 'Yes';
$_lang["you_got_mail"] = 'You got mail';

$_lang["yourinfo_message"] = 'This section shows some information about you:';
$_lang["yourinfo_previous_login"] = 'Your last login:';
$_lang["yourinfo_role"] = 'Your role is:';
$_lang["yourinfo_title"] = 'Your info';
$_lang["yourinfo_total_logins"] = 'Total number of logins:';
$_lang["yourinfo_username"] = 'You are logged in as:';

$_lang["a17_error_reporting_title"] = 'Detection level of PHP errors';
$_lang["a17_error_reporting_msg"] = 'Set the detection level of the PHP errors.';
$_lang["a17_error_reporting_opt0"] = 'Ignore all';
$_lang["a17_error_reporting_opt1"] = 'Ignore warnings of a slight notice level (<a href="https://www.google.com/search?q=E_DEPRECATED+E_STRICT" target="_blank">E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT</a>)';
$_lang["a17_error_reporting_opt2"] = 'Detect all errors except E_NOTICE and E_USER_DEPRECATED';
$_lang["a17_error_reporting_opt99"] = 'Detect all except E_USER_DEPRECATED';
$_lang["a17_error_reporting_opt199"] = 'Detect all';

$_lang["pwd_hash_algo_title"] = 'Hash algorithm';
$_lang["pwd_hash_algo_message"] = 'Password hash algorithm.';

$_lang["enable_bindings_title"] = 'Enable @Bindings commands';
$_lang["enable_bindings_message"] = 'Prevents the execution of PHP functions through TV @Bindings. Useful if you have Manager users who should not be able to create PHP code but need to be able to create or edit TVs. The output of any TV with an @Binding will be "@Bindings disabled".';
$_lang["enable_filter_title"] = 'Enable filters';
$_lang["enable_filter_message"] = 'Filters allow you to manipulate the way data is presented or parsed in a tag. They allow you to modify values from inside your templates. This is analogous to PHx. <a href="https://github.com/modxcms/evolution/issues/623" target="ext_help">More info</a>'; // todo: change link to documentation
$_lang["enable_filter_phx_warning"] = 'When PHx plugin enabled, built-in filters are disabled by default';

$_lang["enable_at_syntax_title"] = 'Enable &lt;@SYNTAX&gt;';
$_lang["enable_at_syntax_message"] = '&lt;@SYNTAX&gt;(atmark syntax) is simple and lightweight template syntax. This is designed to consider coexistence with HTML tags and content strings.';

$_lang["bkmgr_alert_mkdir"] = 'A file cannot be created in a directory.  Please check the permission of [+snapshot_path+]';
$_lang["bkmgr_restore_msg"] = '<p>Database tables could be restored by SQL:</p>';
$_lang["bkmgr_restore_title"] = 'Restore';
$_lang["bkmgr_import_ok"] = 'SQL recovery was performed normally.';
$_lang["bkmgr_snapshot_ok"] = 'The snapshot was saved normally.';
$_lang["bkmgr_run_sql_file_label"] = 'Execute by SQL file';
$_lang["bkmgr_run_sql_direct_label"] = 'Direct execute SQL commands';
$_lang["bkmgr_run_sql_submit"] = 'Execute restore';
$_lang["bkmgr_run_sql_result"] = 'Result';
$_lang["bkmgr_snapshot_title"] = 'Snapshot save and recovery';
$_lang["bkmgr_snapshot_msg"] = '<p>The contents of the database are saved in and restored from a server directory.<br />Location: [+snapshot_path+] ($modx->config[\'snapshot_path\'])</p>';
$_lang["bkmgr_snapshot_submit"] = 'Add Snapshot';
$_lang["bkmgr_snapshot_list_title"] = 'List of snapshots';
$_lang["bkmgr_restore_submit"] = 'Revert this data';
$_lang["bkmgr_restore_confirm"] = 'Are you sure you want to revert backup\n[+filename+] ?';
$_lang["bkmgr_snapshot_nothing"] = 'No snapshots available';

$_lang["files.dynamic.php1"] = 'New File';
$_lang["files.dynamic.php2"] = 'This directory cannot be displayed.';
$_lang["files.dynamic.php3"] = 'There is a problem in a file name.';
$_lang["files.dynamic.php4"] = 'The text file was created.';
$_lang["files.dynamic.php5"] = 'File could not be duplicated.';
$_lang["files.dynamic.php6"] = 'File or directory could not be renamed.';
$_lang["files_dynamic_new_folder_name"] = 'Enter new directory name:';
$_lang["files_dynamic_new_file_name"] = 'Enter new file name:';
$_lang["not_readable_dir"] = 'Can not read this directory.';
$_lang["confirm_delete_dir"] = 'Are you sure you want to delete the directory?';
$_lang["confirm_delete_dir_recursive"] = 'Are you sure you want to delete this directory?\n\nAll files inside this directory will also be deleted.';

$_lang["make_folders_title"] = 'End Container URL with Slash';
$_lang["make_folders_message"] = 'Append trailing slash to Resources that are set as containers when using Friendly URLs.';

$_lang["check_files_onlogin_title"] = 'Check core files on login';
$_lang["check_files_onlogin_message"] = 'By enabling this option, important system files will be checked for modification typical of scripted website attacks. While not a foolproof guarantee, it may alert you to a compromised Evolution CMS file and website.';

$_lang["configcheck_sysfiles_mod"] = 'Important System Files have been modified.';
$_lang["configcheck_sysfiles_mod_msg"] = 'You have configured Evolution CMS to check important system files for possible website script attacks. This warning does not necessarily mean your site has been compromised, however, you should review the watched files in your installation (set in System configuration -> User -> Check core files on login). If you find your files unaltered or changes were made by site administrators, go to System Configuration and click to re-save settings to dismiss this message. Changes in the following files have been found:';

$_lang['email_method_title'] = 'Sendmail method';
$_lang['email_method_mail'] = 'PHP mail() function';
$_lang['email_method_smtp'] = 'SMTP Server';
$_lang['smtp_auth_title'] = 'SMTP-AUTH';
$_lang['smtp_autotls_title'] = 'SMTPAutoTLS';
$_lang['smtp_host_title'] = 'SMTP host';
$_lang['smtp_secure_title'] = 'Encrypted SMTP';
$_lang['smtp_username_title'] = 'SMTP username';
$_lang['smtp_password_title'] = 'SMTP password';
$_lang['smtp_port_title'] = 'SMTP port';

$_lang["setting_resource_tree_node_name"] = 'Display Name in Resource Tree';
$_lang["setting_resource_tree_node_name_desc"] = 'Select the Resource field to show as the Resource name in the Resource Tree. The default setting is pagetitle.';
$_lang["setting_resource_tree_node_name_desc_add"] = 'Note: Since Evolution CMS 1.1 you can change this Display Name within Resource-Tree´s sorting option. This setting is used when Display Name in Resource Tree is set to &quot;Default&quot;.';

$_lang["resource_opt_alvisibled"] = 'Use current alias in alias path';
$_lang["resource_opt_alvisibled_help"] = 'The alias of this Resource is inserted in Friendly URL alias path';
$_lang['resource_opt_is_published'] = 'Published';

$_lang["enable_cache_title"] = 'Document caching';
$_lang["disable_chunk_cache_title"] = 'Disable chunk caching';
$_lang["disable_snippet_cache_title"] = 'Disable snippet caching';
$_lang["disable_plugins_cache_title"] = 'Disable plugins caching';
$_lang["disabled_at_login"] = 'Disabled at login';

$_lang["cache_type_title"] = 'Document caching type';
$_lang["cache_type_1"] = 'Cache is based only on Resource ID (standard)';
$_lang["cache_type_2"] = 'Cache is based on Resource ID and $_GET parameters';
$_lang["seostrict_title"] = 'Use SEO Strict URLs';
$_lang["seostrict_message"] = 'Enforces the use of strict URLs to prevent duplicate content (if needed)';

$_lang["alias_listing_title"] = 'Use AliasListing cache';
$_lang["alias_listing_message"] = 'Caching page aliases, have to be disabled if a site have huge amount of resources. "Disabled" reduces memory consumption when site have large number of resources.';
$_lang["alias_listing_disabled"] = 'Disabled';
$_lang["alias_listing_folders"] = 'Only for folders';
$_lang["alias_listing_enabled"] = 'Enabled';

$_lang["settings_friendlyurls_alert"] = 'It is necessary to rename the ht.access file in the Evolution CMS installation directory at .htaccess to use the Friendly URL function.';
$_lang["settings_friendlyurls_alert2"] = 'Since Evolution CMS was installed in a subdirectory, it is necessary to change the content of .htaccess.';

$_lang["mutate_settings.dynamic.php6"] = 'Send mail on Evolution CMS errors';
$_lang["mutate_settings.dynamic.php7"] = 'not notify';
$_lang["mutate_settings.dynamic.php8"] = 'A mail with the error source will be sent to [(emailsender)] ([+emailsender+]) if a Evolution CMS error occurs. The details of the error could be seen in the Evolution CMS events log.';

$_lang["error_no_privileges"] = "You don't have enough privileges for this action!";
$_lang["error_no_optimise_tablename"] = "Table to optimise not found in request!";
$_lang["error_no_truncate_tablename"] = "Table to truncate not found in request!";
$_lang["error_double_action"] = "Double action (GET & POST) posted!";
$_lang["error_no_id"] = "ID not passed in request!";
$_lang["error_id_nan"] = "ID passed in request is NaN!";
$_lang["error_parent_deleted"] = "Failed because resource parent is deleted!";
$_lang["error_no_parent"] = "Couldn't find parent document's name!";
$_lang["error_many_results"] = "Too many results returned from database!";
$_lang["error_no_results"] = "Not enough/ no results returned from database!";
$_lang["error_no_user_selected"] = "No user selected as recipient of this message!";
$_lang["error_no_group_selected"] = "No group selected as recipient of this message!";
$_lang["error_movedocument1"] = "Document cannot be it's own parent!";
$_lang["error_movedocument2"] = "Document's ID not passed in request!";
$_lang["error_movedocument3"] = "New parent not set in request!";
$_lang["error_internet_connection"] = "Server isn't available. Check your internet connection!";

$_lang["login_processor_unknown_user"] = "Incorrect username or password entered!";
$_lang["login_processor_wrong_password"] = "Incorrect username or password entered!";
$_lang["login_processor_many_failed_logins"] = "Due to too many failed logins, you have been blocked!";
$_lang["login_processor_verified"] = "User verification required!";
$_lang["login_processor_blocked1"] = "You are blocked and cannot log in!";
$_lang["login_processor_blocked2"] = "You are blocked and cannot log in! Please try again later.";
$_lang["login_processor_blocked3"] = "You are blocked automatic after a specified date and you cannot log in anymore!";
$_lang["login_processor_bad_code"] = "The security code you entered didn't validate! Please try to login again!";
$_lang["login_processor_remotehost_ip"] = "Your hostname doesn't point back to your IP!";
$_lang["login_processor_remote_ip"] = "You are not allowed to login from this location.";
$_lang["login_processor_date"] = "You are not allowed to login at this time. Please try again later.";
$_lang["login_processor_captcha_config"] = "Captcha is not configured properly.";

$_lang["dp_dayNames"] = "['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']";
$_lang["dp_monthNames"] = "['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']";
$_lang["dp_startDay"] = "1";

$_lang["check_all"] = "Select all";
$_lang["check_none"] = "Select none";
$_lang["check_toggle"] = "Toggle selection";

$_lang["version_notices"] = "Version Notices";

$_lang["em_button_shift"] = " (Shift-Mouseclick to open multiple windows)";

$_lang["reset_sysfiles_checksum_button"] = "Rebuild Checksums";
$_lang["reset_sysfiles_checksum_alert"] = "Are you sure you want to reset the system files checksums?";

$_lang["file_browser_disabled_msg"] = "The File Browser Feature is not enabled.";
$_lang["which_browser_default_title"] = "Default File Browser";
$_lang["which_browser_default_msg"] = "Choose the File Browser you prefer as default. In User-Settings you can choose a Custom Browser per User, or leave it on &quot;default&quot;.";
$_lang["which_browser_title"] = "File Browser";
$_lang["which_browser_msg"] = "You can choose a custom File Browser for this user. To use the System´s default Browser, leave it on &quot;Default&quot;.";
$_lang["option_default"] = "Default";
$_lang["position"] = "Position";
$_lang["are_you_sure"] = "Are you sure?";

$_lang['evo_downloads_title'] = "Evolution CMS Downloads";
$_lang['help_translating_title'] = "Help translating Evolution CMS";
$_lang['download'] = "Download";
$_lang['downloads'] = "Downloads";
$_lang["previous_releases"] = "Previous Releases";
$_lang["extras"] = "Extras";

$_lang["display_locks"] = "Display Locks";
$_lang["role_display_locks"] = "Display Locks";
$_lang["session_timeout"] = "Session Timeout";
$_lang["session_timeout_msg"] = "Evolution CMS will ping the server, if the last ping exceeds this setting, the associated session will be considered invalid and all related locks will be removed automatically. Set value in minutes (>2min, default 15min).";
$_lang["unlock_element_id_warning"] = "Are you sure you want to unlock this [+element_type+] (ID [+id+])?";
$_lang["lock_element_type_1"] = "Template";
$_lang["lock_element_type_2"] = "Template-Variable";
$_lang["lock_element_type_3"] = "Chunk";
$_lang["lock_element_type_4"] = "Snippet";
$_lang["lock_element_type_5"] = "Plugin";
$_lang["lock_element_type_6"] = "Module";
$_lang["lock_element_type_7"] = "Resource";
$_lang["lock_element_type_8"] = "Role";
$_lang["lock_element_editing"] = "You are editing this [+element_type+] since\n[+lasthit_df+]";
$_lang["lock_element_locked_by"] = "This [+element_type+] is locked by user\n[+username+] since [+lasthit_df+]";

$_lang["minifyphp_incache_title"] = 'Minify php code in site cache';
$_lang["minifyphp_incache_message"] = 'Minify php code (snippets and plugins) and store in the site cache file, ref:<a href="https://github.com/modxcms/evolution/issues/938" target="_blank">#938</a>';

$_lang["logout_reminder_msg"] = "Reminder: It seems on [+date+] you forgot to logout. Please pay attention in future to do so after your work is finished.";

$_lang["allow_eval_title"] = "Eval php code in snippet call";
$_lang["allow_eval_msg"] = "For developer : Please use \$modx-&gt;safeEval().";
$_lang["allow_eval_with_scan"] = "Execute only permitted functions";
$_lang["allow_eval_with_scan_at_post"] = "Execute all. However, at POST, only permitted functions";
$_lang["allow_eval_everytime_eval"] = "Unlimited (Use only for debugging)";
$_lang["allow_eval_dont_eval"] = "Do not allow all functions";

$_lang["safe_functions_at_eval_title"] = "Functions to allow eval";
$_lang["safe_functions_at_eval_msg"] = "Comma separated list";

$_lang["multiple_sessions_msg"] = "Information: Multiple active user sessions (total [+total+]) found for user <b>[+username+]</b>.";
$_lang["iconv_not_available"] = "It is important to install/enable extension iconv. Please speak to your host if you don´t know how to enable it.";

$_lang["cm_create_new_category"] = "Create the new category";
$_lang["cm_category_name"] = "Category name";
$_lang["cm_category_position"] = "Category position";
$_lang["cm_no_x_assigned"] = "No %s assigned";
$_lang["cm_save_categorization"] = "Save categorization";
$_lang["cm_update_categories"] = "Update categories";
$_lang["cm_assigned_elements"] = "Assigned elements";
$_lang["cm_edit_name"] = "Edit name";
$_lang["cm_mark_for_deletion"] = "Mark for deletion";
$_lang["cm_delete_now"] = "Delete immediately";
$_lang["cm_delete_element_x_now"] = "Delete &quot;%s&quot; immediately";
$_lang["cm_select_element_group"] = "Select an element group";
$_lang["cm_global_messages"] = "Global Messages";
$_lang["cm_add_new_category"] = "Add a new category";
$_lang["cm_edit_categories"] = "Edit categories";
$_lang["cm_sort_categories"] = "Sort categories";
$_lang["cm_categorize_elements"] = "Categorize elements";
$_lang["cm_translation"] = "Translation";
$_lang["cm_translations"] = "Translations";
$_lang["cm_categorize_x"] = "Categorize <span class=\"highlight\">%s</span>";
$_lang["cm_unknown_error"] = "Something went wrong.";
$_lang["cm_x_assigned_to_category_y"] = "<span class=\"highlight\">%s(%s)</span> has been assigned to category <span class=\"highlight\">%s(%s)</span>";
$_lang["cm_no_categorization"] = "No categorization made.";
$_lang["cm_no_changes"] = "Nothing to change, so no changes made.";
$_lang["cm_x_changes_made"] = "<span class=\"highlight\">%s</span> changes made";
$_lang["cm_enter_name_for_category"] = "Please enter a name for the new category.";
$_lang["cm_category_x_exists"] = "Category <span class=\"highlight\">%s</span> already exists.";
$_lang["cm_category_x_saved_at_position_y"] = "The new category <span class=\"highlight\">%s</span> was saved at position <span class=\"highlight\">%s</span>.";
$_lang["cm_category_x_moved_to_position_y"] = "Category <span class=\"highlight\">%s</span> was moved to position <span class=\"highlight\">%s</span>";
$_lang["cm_category_x_deleted"] = "Category <span class=\"highlight\">%s</span> has been deleted";
$_lang["cm_category_x_renamed_to_y"] = "Category <span class=\"highlight\">%s</span> was renamed to <span class=\"highlight\">%s</span>";
$_lang["cm_translation_for_x_empty"] = "Translation for <span class=\"highlight\">%s</span> was empty";
$_lang["cm_translation_for_x_to_y_success"] = "Translation for <span class=\"highlight\">%s</span> to <span class=\"highlight\">%s</span> successfully saved";
$_lang["cm_save_new_sorting"] = "Save new sorting";
$_lang["cm_translate_phrases"] = "Translate phrases";
$_lang["cm_translate_module_phrases"] = "Translate module-phrases";
$_lang["cm_native_phrase"] = "Native phrase";

$_lang["btn_view_options"] = 'View Options';
$_lang["view_options_msg"] = 'The display & listing of elements can be customized via &quot;View Options&quot;-button. Settings are saved and restored per Browser using HTML5´s localStorage.';
$_lang["viewopts_title"] = 'View Options';
$_lang["viewopts_cb_buttons"] = 'Buttons';
$_lang["viewopts_cb_descriptions"] = 'Descriptions';
$_lang["viewopts_cb_icons"] = 'Icons';
$_lang["viewopts_radio_list"] = 'List';
$_lang["viewopts_radio_inline"] = 'Inline';
$_lang["viewopts_radio_flex"] = 'Flex';
$_lang["viewopts_fontsize"] = 'Font-Size';
$_lang["viewopts_cb_alltabs"] = 'All Tabs';

$_lang['email_sender_method'] = 'The envelope sender of the message';
$_lang['auto'] = 'Auto-detect';
$_lang['use_emailsender'] = 'Use [(emailsender)] value';
$_lang['email_sender_method_message'] = 'The envelope sender of the message. This will usually be turned into a Return-Path header by the receiver, and is the address that bounces will be sent to. Auto-detect will work in most cases.';

$_lang['login_form_position_title'] = 'Login form postiton';
$_lang['login_form_position_left'] = 'left';
$_lang['login_form_position_center'] = 'center';
$_lang['login_form_position_right'] = 'right';
$_lang["login_form_style"] = 'Login form style:';
$_lang["login_form_style_dark"] = 'dark';
$_lang["login_form_style_light"] = 'light';
$_lang['login_logo_title'] = 'Login page logo image';
$_lang['login_logo_message'] = 'Recomended login logo image width: 360px, type .png';
$_lang['login_bg_title'] = 'Login page background image';
$_lang['login_bg_message'] = 'Recomended login page background image width: 1920px  ';

$_lang['manager_menu_position_title'] = 'Main menu position';
$_lang['manager_menu_position_top'] = 'top';
$_lang['manager_menu_position_left'] = 'left';

$_lang['invalid_event_response'] = 'The %s event has ivalid output';

$_lang['chunk_processor'] = 'Chunks processing class';

$_lang["permission_title"] = 'Create / edit permission';
$_lang["groups_permission_title"] = 'Create / edit category';
$_lang["lang_key_desc"] = 'Key language from array $_lang';
$_lang["key_desc"] = 'Key for checked permission';

$_lang["setting_from_file"] = '<strong class="text-danger">Parameter value is defined in core/custom/config/cms/settings</strong>';
$_lang['disable'] = 'Disable';
$_lang['enable'] = 'Enable';

return $_lang;
