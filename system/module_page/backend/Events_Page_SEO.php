<?php

##################################################################
### Copyright © 2017—2024 Maxim Rysevets. All rights reserved. ###
##################################################################

namespace effcore\modules\page;

use effcore\URL;

abstract class Events_Page_SEO {

    static function on_redirect($event, $page) {
        $type = $page->args_get('type');
        if ($type === null) URL::go($page->args_get('base').'/meta');
    }

}
