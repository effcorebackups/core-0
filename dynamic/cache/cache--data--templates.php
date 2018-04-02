<?php

namespace effcore { # cache for data--templates

  cache::$data['data--templates']['page']['markup_html'] = new \stdClass();
  cache::$data['data--templates']['page']['markup_html']->type = 'inline';
  cache::$data['data--templates']['page']['markup_html']->markup = '<%%_tag_name %%_attributes>%%_content</%%_tag_name>';
  cache::$data['data--templates']['page']['markup_html_simple'] = new \stdClass();
  cache::$data['data--templates']['page']['markup_html_simple']->type = 'inline';
  cache::$data['data--templates']['page']['markup_html_simple']->markup = '<%%_tag_name %%_attributes>';
  cache::$data['data--templates']['page']['markup_xml'] = new \stdClass();
  cache::$data['data--templates']['page']['markup_xml']->type = 'inline';
  cache::$data['data--templates']['page']['markup_xml']->markup = '<%%_tag_name %%_attributes>%%_content</%%_tag_name>';
  cache::$data['data--templates']['page']['markup_xml_simple'] = new \stdClass();
  cache::$data['data--templates']['page']['markup_xml_simple']->type = 'inline';
  cache::$data['data--templates']['page']['markup_xml_simple']->markup = '<%%_tag_name %%_attributes />';
  cache::$data['data--templates']['page']['form_container'] = new \stdClass();
  cache::$data['data--templates']['page']['form_container']->type = 'inline';
  cache::$data['data--templates']['page']['form_container']->markup = '<%%_tag_name %%_attributes> %%_title_t %%_content %%_title_b %%_description </%%_tag_name>';
  cache::$data['data--templates']['page']['page'] = new \stdClass();
  cache::$data['data--templates']['page']['page']->type = 'file';
  cache::$data['data--templates']['page']['page']->path = 'frontend/template--page._template';
  cache::$data['data--templates']['page']['page_access_denided'] = new \stdClass();
  cache::$data['data--templates']['page']['page_access_denided']->type = 'file';
  cache::$data['data--templates']['page']['page_access_denided']->path = 'frontend/template--page--access_denided._template';
  cache::$data['data--templates']['page']['page_not_found'] = new \stdClass();
  cache::$data['data--templates']['page']['page_not_found']->type = 'file';
  cache::$data['data--templates']['page']['page_not_found']->path = 'frontend/template--page--not_found._template';
  cache::$data['data--templates']['page']['page_simple'] = new \stdClass();
  cache::$data['data--templates']['page']['page_simple']->type = 'file';
  cache::$data['data--templates']['page']['page_simple']->path = 'frontend/template--page_simple._template';
  cache::$data['data--templates']['page']['canvas_svg'] = new \stdClass();
  cache::$data['data--templates']['page']['canvas_svg']->type = 'file';
  cache::$data['data--templates']['page']['canvas_svg']->path = 'frontend/template--canvas_svg._template';
  cache::$data['data--templates']['tree']['tree'] = new \stdClass();
  cache::$data['data--templates']['tree']['tree']->type = 'inline';
  cache::$data['data--templates']['tree']['tree']->markup = '<x-tree %%_attributes> <h3 class="hidden">%%_self</h3> <ul>%%_children</ul> </x-tree>';
  cache::$data['data--templates']['tree']['tree_item'] = new \stdClass();
  cache::$data['data--templates']['tree']['tree_item']->type = 'inline';
  cache::$data['data--templates']['tree']['tree_item']->markup = '<li %%_attributes> %%_self %%_children </li>';
  cache::$data['data--templates']['tree']['tree_item_children'] = new \stdClass();
  cache::$data['data--templates']['tree']['tree_item_children']->type = 'inline';
  cache::$data['data--templates']['tree']['tree_item_children']->markup = '<ul> %%_children </ul>';
  cache::$data['data--templates']['tree']['tabs'] = new \stdClass();
  cache::$data['data--templates']['tree']['tabs']->type = 'inline';
  cache::$data['data--templates']['tree']['tabs']->markup = '<x-tabs> %%_top_items %%_sub_items </x-tabs>';
  cache::$data['data--templates']['tree']['tabs_top_items'] = new \stdClass();
  cache::$data['data--templates']['tree']['tabs_top_items']->type = 'inline';
  cache::$data['data--templates']['tree']['tabs_top_items']->markup = '<x-top-items> %%_children </x-top-items>';
  cache::$data['data--templates']['tree']['tabs_sub_items'] = new \stdClass();
  cache::$data['data--templates']['tree']['tabs_sub_items']->type = 'inline';
  cache::$data['data--templates']['tree']['tabs_sub_items']->markup = '<x-sub-items> %%_children </x-sub-items>';
  cache::$data['data--templates']['tree']['tabs_item'] = new \stdClass();
  cache::$data['data--templates']['tree']['tabs_item']->type = 'inline';
  cache::$data['data--templates']['tree']['tabs_item']->markup = '%%_self %%_children';

}