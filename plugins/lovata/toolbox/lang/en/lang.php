<?php return [
    'plugin'     => [
        'name'        => 'Toolbox',
        'description' => 'Toolbox is a set of helpers for faster development for October CMS.',
    ],
    'field'      => [
        'id'                       => 'ID',
        'name'                     => 'Name',
        'title'                    => 'Title',
        'active'                   => 'Active',
        'hidden'                   => 'Hidden',
        'code'                     => 'Code',
        'slug'                     => 'URL',
        'external_id'              => 'External ID',
        'preview_text'             => 'Preview text',
        'preview_image'            => 'Preview image',
        'image'                    => 'Image',
        'images'                   => 'Images (gallery)',
        'icon'                     => 'Icon',
        'description'              => 'Description',
        'category'                 => 'Category',
        'category_parent_id'       => 'Parent category ID',
        'category_parent'          => 'Parent category',
        'children_category'        => 'Children categories',
        'email'                    => 'Email',
        'phone'                    => 'Phone',
        'moderation'               => 'Moderation',
        'mode'                     => 'Mode',
        'status'                   => 'Status',
        'city'                     => 'City',
        'address'                  => 'Address',
        'street'                   => 'Street',
        'lat'                      => 'lat',
        'lng'                      => 'lng',
        'type'                     => 'Type',
        'avatar'                   => 'Avatar',
        'property'                 => 'Property',
        'property_list_value'      => 'Available property values',
        'property_mode'            => 'Property mode',
        'property_tab'             => 'Tab name',
        'property_is_translatable' => 'Property is translatable',
        'key'                      => 'Key',
        'value'                    => 'Value',
        'label'                    => 'Label',
        'date'                     => 'Date',
        'datetime'                 => 'Date and time',
        'time'                     => 'Time',
        'file'                     => 'File',
        'decimals'                 => 'Number of decimal places',
        'dec_point'                => 'Fractional part separator',
        'thousands_sep'            => 'Thousands separator',
        'dot'                      => 'Dot',
        'comma'                    => 'Comma',
        'together'                 => 'Merge',
        'space'                    => 'Space',
        'date_begin'               => 'Date of the beginning',
        'date_end'                 => 'Date of the ending',
        'discount_value'           => 'Discount value',
        'discount_type'            => 'Discount type',
        'discount_price'           => 'Discount price',
        'discount'                 => 'Discount',
        'product'                  => 'Product',
        'priority'                 => 'Priority',
        'group'                    => 'Group',
        'count'                    => 'Count',
        'amount'                   => 'Amount',
        'author'                   => 'Author',
        'link'                     => 'Link',
        'view_count'               => 'View count',
        'is_default'               => 'Is default',
        'symbol'                   => 'Symbol',
        'field'                    => 'Field',
        'weight'                   => 'Weight',
        'height'                   => 'Height',
        'length'                   => 'Length',
        'width'                    => 'Width',
        'site_list'                => 'Site list',
        'site_id'                  => 'Site ID',
        'site'                     => 'Site',

        'sort_order' => 'Sorting',
        'created_at' => 'Created',
        'updated_at' => 'Updated',
        'deleted_at' => 'Deleted',
        'deleted'    => 'deleted',
        'empty'      => 'Empty',
        'password'   => 'Password',

        'site_settings'                 => 'Application settings',
        'site_settings_description'     => 'Common settings of application',
        'queue_on'                      => 'Sending messages from the queue',
        'queue_name'                    => 'The name of the queue for sending the emails',
        'import_queue_on'               => 'Use queue when processing import items',
        'import_queue_name'             => 'The name of the queue for processing import items',
        'email_list_description'        => 'Fill out list of emails separated by commas',
        'import_deactivate'             => 'Deactivate elements',
        'import_deactivate_description' => 'All active elements that are not in file will be deactivated.',

        'country'  => 'Country',
        'state'    => 'State',
        'house'    => 'House number',
        'flat'     => 'Flat number',
        'address1' => 'Address 1',
        'address2' => 'Address 2',
        'postcode' => 'Postcode',

        'import_file_list'             => 'Import file list',
        'import_from_file'             => 'Import from file',
        'import_file_path'             => 'Relative path from storage folder to file',
        'import_path_prefix'           => 'Prefix for fields paths',
        'import_file_namespace'        => 'File namespace',
        'import_image_folder'          => 'Relative path from storage folder to image folder',
        'import_path_to_list'          => 'Path to node with list of elements',
        'import_path_to_list_example'  => 'main/elements/element',
        'import_field_list'            => 'Field list',
        'import_path_to_field'         => 'Path to field node',
        'import_path_to_field_example' => 'fields/field[@code="active"]',
    ],
    'tab'        => [
        'preview_content' => 'Preview content',
        'full_content'    => 'Content',
        'images'          => 'Images',
        'files'           => 'Files',
        'settings'        => 'Settings',
        'description'     => 'Description',
        'properties'      => 'Properties',
        'mail'            => 'Sending emails',
        'import'          => 'Import',
        'permissions'     => 'Manage site settings',
        'prices_format'   => 'Price format',
    ],
    'component'  => [
        'property_name_error_404' => 'View 404 page',
        'property_slug'           => 'Slug',
        'property_slug_required'  => 'Slug is required',
        'property_url_check'      => 'Smart url check',
        'pagination'              => 'Pagination',
        'pagination_desc'         => 'Render button of pagination',

        'property_redirect_page'         => 'Redirect page',
        'property_redirect_success_page' => 'Redirect success page',
        'property_redirect_fail_page'    => 'Redirect fail page',
        'property_redirect_on'           => 'Redirect ON',
        'property_flash_on'              => 'Flash ON',
        'property_mode'                  => 'Component mode',
        'mode_submit'                    => 'Form submit',
        'mode_ajax'                      => 'Ajax',
        'has_wildcard'                   => 'URL section is wildcard',
        'skip_error'                     => 'Skip "Not found" error',
    ],
    'message'    => [
        'create_success'                  => 'Create :name was successful',
        'update_success'                  => 'Update :name was successful',
        'delete_success'                  => 'Delete :name was successful',
        'restore_confirm'                 => 'Do you want to restore selected items?',
        'restore_success'                 => 'Restore elements was successful',
        'e_not_correct_request'           => 'Request is not correct',
        'row_is_empty'                    => 'Row is empty.',
        'external_id_is_empty'            => 'External ID is empty.',
        'import_additional_info'          => 'Additional import information.',
        'import_active_field_info'        => 'Value of “active” field will be set to “true”, if it is not in CSV file.',
        'import_preview_image_field_info' => 'Path to preview image file must be set relative to storage directory of your project. For example: "app/media/image.jpg".',
        'import_images_field_info'        => 'Path to image file must be set relative to storage directory of your project. For example: "app/media/image.jpg". Paths to image files must be separated by commas.',
        'import_from_xml_confirm'         => 'Start import from XML file?',
        'import_from_xml_report'          => 'Import results: created - :created, updated - :updated, skipped - :skipped, processed - :processed.',

        'table_toolbox_helper' => 'Display command list.',
        'table_toolbox_create' => 'Create :description',

        'choice_field_list'   => 'Choice available fields (Example: 1,2,3,4)',
        'choice_sorting'      => 'Choice sorting',
        'choice_lang_list'    => 'Choice lang',
        'choice_extend_model' => 'Choice extend model',
        'set'                 => 'Set :name (Example: :example)',
        'create'              => 'Create :name?',
        'force_file'          => 'File :file already exists. Create forced?',
        'add_side_menu'       => 'Add side menu to plugin.yaml?',
        'version_up'          => 'Add new version to version.yaml?',
    ],
    'settings'   => [
        'count_per_page'                => 'Count elements per page',
        'available_count_per_page'      => 'List of available values for "count_per_page"',
        'available_count_per_page_desc' => 'Set allowed values separated by commas.',
        'number_validation'             => 'You must enter the number',
        'pagination_limit'              => 'Max count buttons',
        'active_class'                  => 'Class for active button',
        'button_list'                   => 'Button list',
        'button_list_description'       => 'main,first,first-more,prev,prev-more,next,next-more,last,last-more',
        'button_name'                   => 'Button name',
        'button_limit'                  => 'Show button after page',
        'button_number'                 => 'Show number button name',
        'button_class'                  => 'CSS class',
        'last_button'                   => '"Last" button',
        'last-more_button'              => '"More" (before "Last")',
        'next_button'                   => '"Next" button',
        'next-more_button'              => '"More" (before "Next")',
        'prev_button'                   => '"Prev" button',
        'prev-more_button'              => '"More" (after "Prev")',
        'first_button'                  => '"First" button',
        'first-more_button'             => '"More" (after "First")',
        'main_button'                   => '"Main" button',
        'slug_is_translatable'          => 'URL is translatable',
    ],
    'button'     => [
        'add_property_value' => 'Add property value',
        'import_from_csv'    => 'Import from CSV',
        'export_in_csv'      => 'Export in CSV',
        'import_button'      => 'Import records',
        'import_from_xml'    => 'Import from XML',
    ],
    'type'       => [
        'input'            => 'Text field (input)',
        'number'           => 'Text field (number)',
        'textarea'         => 'Text field (textarea)',
        'rich_editor'      => 'Text field (wysiwyg)',
        'single_checkbox'  => 'Single checkbox',
        'switch'           => 'Switch',
        'checkbox'         => 'Checkbox list (checkbox)',
        'balloon_selector' => 'Balloon selector',
        'tag_list'         => 'Tag list',
        'select'           => 'Select',
        'radio'            => 'Radio button',
        'date'             => 'Date picker (datetime)',
        'colorpicker'      => 'Color picker (colorpicker)',
        'mediafinder'      => 'File',
    ],
    'permission' => [
        'settings' => 'Manage settings',
    ],
];
