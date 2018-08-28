<?php

namespace effcore { # cache for data--forms-demo-demo

  cache::$data['data--forms-demo-demo'] = new \effcore\form();
  cache::$data['data--forms-demo-demo']->children['form_elements'] = new \effcore\fieldset();
  cache::$data['data--forms-demo-demo']->children['form_elements']->title = 'Form elements';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file'] = new \effcore\field_file();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->min_files_number = 3;
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->max_files_number = 3;
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->allowed_types['gif'] = 'gif';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->allowed_types['jpeg'] = 'jpeg';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->allowed_types['jpg'] = 'jpg';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->allowed_types['png'] = 'png';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->upload_dir = 'demo/';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->element_attributes['name'] = 'file[]';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->element_attributes['multiple'] = 'multiple';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->description->args['type'] = 'field_file';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['file']->description->text = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['text'] = new \effcore\field_text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['text']->element_attributes['name'] = 'text';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['text']->element_attributes['value'] = 'text in input';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['text']->element_attributes['minlength'] = 5;
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['text']->element_attributes['pattern'] = '%^[a-zA-Z0-9 ]+$%';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['text']->description_state = 'opened';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['text']->description = new \effcore\text_multiline();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['text']->description->text[0] = 'This description is always shown.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['text']->description->text[1] = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['text']->description->args['type'] = 'field_text';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['password'] = new \effcore\field_password();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['password']->element_attributes['name'] = 'password';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['password']->element_attributes['value'] = 'text in password';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['password']->description = new \effcore\text_multiline();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['password']->description->text[0] = 'This description is shown on top.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['password']->description->text[1] = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['password']->description->args['type'] = 'field_password';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['password']->description_position = 'top';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['search'] = new \effcore\field_search();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['search']->element_attributes['name'] = 'search';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['search']->element_attributes['value'] = 'text in search';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['search']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['search']->description->args['type'] = 'field_search';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['search']->description->text = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['url'] = new \effcore\field_url();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['url']->element_attributes['name'] = 'url';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['url']->element_attributes['value'] = 'http://example.com';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['url']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['url']->description->args['type'] = 'field_url';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['url']->description->text = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['phone'] = new \effcore\field_phone();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['phone']->description = new \effcore\text_multiline();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['phone']->description->text[0] = 'Use international format of mobile phone numbers.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['phone']->description->text[1] = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['phone']->description->args['type'] = 'field_phone';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['phone']->element_attributes['name'] = 'phone';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['phone']->element_attributes['value'] = '&#43;000112334455';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['email'] = new \effcore\field_email();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['email']->element_attributes['name'] = 'email';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['email']->element_attributes['value'] = 'test1@example.com,test2@example.com';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['email']->element_attributes['multiple'] = 'multiple';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['email']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['email']->description->args['type'] = 'field_email';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['email']->description->text = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['number'] = new \effcore\field_number();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['number']->element_attributes['name'] = 'number';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['number']->element_attributes['min'] = -1000;
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['number']->element_attributes['max'] = 1000;
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['number']->element_attributes['step'] = 0.2;
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['number']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['number']->description->args['type'] = 'field_number';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['number']->description->text = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['range'] = new \effcore\field_range();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['range']->element_attributes['name'] = 'range';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['range']->element_attributes['min'] = -1;
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['range']->element_attributes['max'] = 1;
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['range']->element_attributes['step'] = 0.2;
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['range']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['range']->description->args['type'] = 'field_range';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['range']->description->text = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['date'] = new \effcore\field_date();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['date']->title = 'UTC Date';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['date']->element_attributes['name'] = 'date';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['date']->element_attributes['value'] = '2020-01-01';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['date']->description = new \effcore\text_multiline();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['date']->description->text[0] = 'If the initial value is not specified, the current value in the UTC time zone will be used.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['date']->description->text[1] = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['date']->description->args['type'] = 'field_date';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['time'] = new \effcore\field_time();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['time']->title = 'UTC Time';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['time']->element_attributes['name'] = 'time';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['time']->element_attributes['value'] = '01:23:45';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['time']->description = new \effcore\text_multiline();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['time']->description->text[0] = 'If the initial value is not specified, the current value in the UTC time zone will be used.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['time']->description->text[1] = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['time']->description->args['type'] = 'field_time';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['timezone'] = new \effcore\field_timezone();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['timezone']->selected[424] = 424;
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['timezone']->element_attributes['name'] = 'timezone';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['timezone']->element_attributes['required'] = 'required';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['timezone']->title = 'Timezone';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['timezone']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['timezone']->description->args['type'] = 'field_timezone';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['timezone']->description->text = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['color'] = new \effcore\field_color();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['color']->description = new \effcore\text_multiline();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['color']->description->text[0] = 'The color should be in the format "#abcdef", where "ab" is the value of the red component, "cd" - green and "ef" - blue.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['color']->description->text[1] = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['color']->description->args['type'] = 'field_color';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['color']->element_attributes['name'] = 'color';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['color']->element_attributes['value'] = '#ffffff';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['textarea'] = new \effcore\field_textarea();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['textarea']->element_attributes['name'] = 'textarea';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['textarea']->element_attributes['value'] = 'text in textarea';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['textarea']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['textarea']->description->args['type'] = 'field_textarea';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['textarea']->description->text = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select'] = new \effcore\field_select();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->values['not_selected'] = '- select -';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->values['option_1'] = 'Option 1 (selected)';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->values['option_2'] = 'Option 2 (disabled)';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->values['option_3'] = 'Option 3';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->values['group_1'] = new \stdClass();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->values['group_1']->title = 'Group 1';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->values['group_1']->values['option_4'] = 'Option 4';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->selected['option_1'] = 'option_1';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->disabled['option_2'] = 'option_2';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->element_attributes['name'] = 'select';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->title = 'Selection list';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->description = new \effcore\text_multiline();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->description->text[0] = 'Attribute "multiple" is not supported on touch devices (tablets, smartphones, monitors with touch screens).';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->description->text[1] = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['select']->description->args['type'] = 'field_select';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all'] = new \effcore\fieldset();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->state = 'opened';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->title = 'Checkboxes';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkbox'] = new \effcore\field_checkbox();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkbox']->element_attributes['name'] = 'checkbox';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkbox']->element_attributes['value'] = 'checkbox';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkbox']->element_attributes['checked'] = 'checked';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkbox']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkbox']->description->args['type'] = 'field_checkbox';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkbox']->description->text = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes'] = new \effcore\group_checkboxes();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->element_attributes['name'] = 'checkboxes[]';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->values['checkboxes_1'] = 'Checkbox 1';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->values['checkboxes_2'] = 'Checkbox 2 (checked)';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->values['checkboxes_3'] = 'Checkbox 3 (disabled)';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->values['checkboxes_4'] = 'Checkbox 4 (disabled + checked)';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->disabled['checkboxes_3'] = 'checkboxes_3';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->disabled['checkboxes_4'] = 'checkboxes_4';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->checked['checkboxes_2'] = 'checkboxes_2';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->checked['checkboxes_4'] = 'checkboxes_4';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->title = 'Checkboxes';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->description->args['type'] = 'group_checkboxes';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['checkboxes_all']->children['checkboxes']->description->text = 'Group %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all'] = new \effcore\fieldset();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->state = 'opened';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->title = 'Radiobuttons';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobutton'] = new \effcore\field_radiobutton();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobutton']->element_attributes['name'] = 'radiobutton';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobutton']->element_attributes['value'] = 'radiobutton';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobutton']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobutton']->description->args['type'] = 'field_radiobutton';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobutton']->description->text = 'Field %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobuttons'] = new \effcore\group_radiobuttons();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobuttons']->element_attributes['name'] = 'radiobuttons';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobuttons']->values['radiobuttons_1'] = 'Radiobutton 1';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobuttons']->values['radiobuttons_2'] = 'Radiobutton 2 (checked)';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobuttons']->values['radiobuttons_3'] = 'Radiobutton 3 (disabled)';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobuttons']->disabled['radiobuttons_3'] = 'radiobuttons_3';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobuttons']->checked['radiobuttons_2'] = 'radiobuttons_2';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobuttons']->title = 'Radiobuttons';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobuttons']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobuttons']->description->args['type'] = 'group_radiobuttons';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['radiobuttons']->description->text = 'Group %%_type.';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['palette'] = new \effcore\group_palette();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['palette']->element_attributes['name'] = 'palette_color';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['palette']->title = 'Color';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['palette']->description = new \effcore\text();
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['palette']->description->args['type'] = 'group_palette';
  cache::$data['data--forms-demo-demo']->children['form_elements']->children['radiobuttons_all']->children['palette']->description->text = 'Group %%_type.';
  cache::$data['data--forms-demo-demo']->children['button_submit'] = new \effcore\button();
  cache::$data['data--forms-demo-demo']->children['button_submit']->attributes['type'] = 'submit';
  cache::$data['data--forms-demo-demo']->children['button_submit']->attributes['name'] = 'button';
  cache::$data['data--forms-demo-demo']->children['button_submit']->attributes['value'] = 'submit';
  cache::$data['data--forms-demo-demo']->children['button_submit']->title = 'submit';
  cache::$data['data--forms-demo-demo']->children['button_reset'] = new \effcore\button();
  cache::$data['data--forms-demo-demo']->children['button_reset']->attributes['type'] = 'submit';
  cache::$data['data--forms-demo-demo']->children['button_reset']->attributes['name'] = 'button';
  cache::$data['data--forms-demo-demo']->children['button_reset']->attributes['value'] = 'reset';
  cache::$data['data--forms-demo-demo']->children['button_reset']->title = 'reset';
  cache::$data['data--forms-demo-demo']->attributes['id'] = 'demo';
  cache::$data['data--forms-demo-demo']->attributes['enctype'] = 'multipart/form-data';
  cache::$data['data--forms-demo-demo']->attributes['method'] = 'post';
  cache::$data['data--forms-demo-demo']->attributes['novalidate'] = 'novalidate';

}