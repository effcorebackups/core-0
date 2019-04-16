<?php

  ##################################################################
  ### Copyright © 2017—2019 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore\modules\develop {
          use \effcore\core;
          use \effcore\tabs_item;
          use \effcore\tree;
          use \effcore\url;
          abstract class events_page_trees_static {

  static function on_page_init($page) {
    $trees = tree::select_all();
    $id = $page->get_args('id');
    core::array_sort_by_title($trees);
    if (!isset($trees[$id])) url::go($page->get_args('base').'/select/'.reset($trees)->id);
    foreach ($trees as $c_tree) {
      tabs_item::insert(                 $c_tree->title,
        'trees_static_select_'.          $c_tree->id,
        'trees_static_select', 'select/'.$c_tree->id, null, ['class' => [
                  'trees-static-select-'.$c_tree->id =>
                  'trees-static-select-'.$c_tree->id]]);
    }
  }

  static function on_show_block_tree($page) {
    $id = $page->get_args('id');
    if ($id) {
      $tree = clone tree::select($id);
      $tree->build();
      $tree->access = null;
      $tree = core::deep_clone($tree, ['effcore\\tree_item' => 'effcore\\tree_item_managed']);
      $tree->attribute_delete('class');
      $tree->attribute_insert('class', ['managed' => 'managed']);
      $tree->title_state = 'cutted';
      return $tree;
    }
  }

}}
