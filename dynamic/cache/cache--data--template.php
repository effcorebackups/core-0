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
  cache::$data['data--template']['page']['page'] = new \stdClass();
  cache::$data['data--template']['page']['page']->type = 'file';
  cache::$data['data--template']['page']['page']->path = 'frontend/template--page.html';
  cache::$data['data--template']['page']['page_simple'] = new \stdClass();
  cache::$data['data--template']['page']['page_simple']->type = 'file';
  cache::$data['data--template']['page']['page_simple']->path = 'frontend/template--page_simple.html';
  cache::$data['data--template']['page']['form_container'] = new \stdClass();
  cache::$data['data--template']['page']['form_container']->type = 'file';
  cache::$data['data--template']['page']['form_container']->path = 'frontend/template--form_container.html';
  cache::$data['data--template']['page']['canvas_svg'] = new \stdClass();
  cache::$data['data--template']['page']['canvas_svg']->type = 'file';
  cache::$data['data--template']['page']['canvas_svg']->path = 'frontend/template--canvas_svg.xml';
  cache::$data['data--template']['tree']['tree'] = new \stdClass();
  cache::$data['data--template']['tree']['tree']->type = 'file';
  cache::$data['data--template']['tree']['tree']->path = 'frontend/template--tree.html';
  cache::$data['data--template']['tree']['tree_item'] = new \stdClass();
  cache::$data['data--template']['tree']['tree_item']->type = 'file';
  cache::$data['data--template']['tree']['tree_item']->path = 'frontend/template--tree_item.html';
  cache::$data['data--template']['tree']['tree_item_children'] = new \stdClass();
  cache::$data['data--template']['tree']['tree_item_children']->type = 'file';
  cache::$data['data--template']['tree']['tree_item_children']->path = 'frontend/template--tree_item_children.html';

}