<?php

namespace effectivecore { # cache for data--template

  cache::$data['data--template']['page']['markup_html'] = new \stdClass();
  cache::$data['data--template']['page']['markup_html']->type = 'inline';
  cache::$data['data--template']['page']['markup_html']->markup = '<%%_tag_name %%_attributes>%%_content</%%_tag_name>';
  cache::$data['data--template']['page']['markup_html_simple'] = new \stdClass();
  cache::$data['data--template']['page']['markup_html_simple']->type = 'inline';
  cache::$data['data--template']['page']['markup_html_simple']->markup = '<%%_tag_name %%_attributes>';
  cache::$data['data--template']['page']['markup_xml'] = new \stdClass();
  cache::$data['data--template']['page']['markup_xml']->type = 'inline';
  cache::$data['data--template']['page']['markup_xml']->markup = '<%%_tag_name %%_attributes>%%_content</%%_tag_name>';
  cache::$data['data--template']['page']['markup_xml_simple'] = new \stdClass();
  cache::$data['data--template']['page']['markup_xml_simple']->type = 'inline';
  cache::$data['data--template']['page']['markup_xml_simple']->markup = '<%%_tag_name %%_attributes />';
  cache::$data['data--template']['page']['form_container'] = new \stdClass();
  cache::$data['data--template']['page']['form_container']->type = 'inline';
  cache::$data['data--template']['page']['form_container']->markup = '<%%_tag_name %%_attributes> %%_title_t %%_content %%_title_b %%_description </%%_tag_name>';
  cache::$data['data--template']['page']['page'] = new \stdClass();
  cache::$data['data--template']['page']['page']->type = 'file';
  cache::$data['data--template']['page']['page']->path = 'frontend/template--page.html';
  cache::$data['data--template']['page']['page_simple'] = new \stdClass();
  cache::$data['data--template']['page']['page_simple']->type = 'file';
  cache::$data['data--template']['page']['page_simple']->path = 'frontend/template--page_simple.html';
  cache::$data['data--template']['page']['canvas_svg'] = new \stdClass();
  cache::$data['data--template']['page']['canvas_svg']->type = 'file';
  cache::$data['data--template']['page']['canvas_svg']->path = 'frontend/template--canvas_svg.xml';
  cache::$data['data--template']['tree']['tree'] = new \stdClass();
  cache::$data['data--template']['tree']['tree']->type = 'inline';
  cache::$data['data--template']['tree']['tree']->markup = '<x-tree %%_attributes> <h3 class="hidden">%%_self</h3> <ul>%%_children</ul> </x-tree>';
  cache::$data['data--template']['tree']['tree_item'] = new \stdClass();
  cache::$data['data--template']['tree']['tree_item']->type = 'inline';
  cache::$data['data--template']['tree']['tree_item']->markup = '<li %%_attributes> %%_self %%_children </li>';
  cache::$data['data--template']['tree']['tree_item_children'] = new \stdClass();
  cache::$data['data--template']['tree']['tree_item_children']->type = 'inline';
  cache::$data['data--template']['tree']['tree_item_children']->markup = '<ul> %%_children </ul>';

}