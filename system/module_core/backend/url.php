<?php

  ##################################################################
  ### Copyright © 2017—2019 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class url {

  # valid urls:
  # ┌──────────────────────────────────────────────────────────┐
  # │ url                                                      │
  # ╞══════════════════════════════════════════════════════════╡
  # │                        /                                 │
  # │                        /?key=value                       │
  # │                        /#anchor                          │
  # │                        /?key=value#anchor                │
  # │                        /dir/subdir/page                  │
  # │                        /dir/subdir/page?key=value        │
  # │                        /dir/subdir/page#anchor           │
  # │                        /dir/subdir/page?key=value#anchor │
  # │        subdomain.domain                                  │
  # │        subdomain.domain/?key=value                       │
  # │        subdomain.domain/#anchor                          │
  # │        subdomain.domain/?key=value#anchor                │
  # │        subdomain.domain/dir/subdir/page                  │
  # │        subdomain.domain/dir/subdir/page?key=value        │
  # │        subdomain.domain/dir/subdir/page#anchor           │
  # │        subdomain.domain/dir/subdir/page?key=value#anchor │
  # │ http://subdomain.domain                                  │
  # │ http://subdomain.domain/?key=value                       │
  # │ http://subdomain.domain/#anchor                          │
  # │ http://subdomain.domain/?key=value#anchor                │
  # │ http://subdomain.domain/dir/subdir/page                  │
  # │ http://subdomain.domain/dir/subdir/page?key=value        │
  # │ http://subdomain.domain/dir/subdir/page#anchor           │
  # │ http://subdomain.domain/dir/subdir/page?key=value#anchor │
  # └──────────────────────────────────────────────────────────┘

  # wrong urls:
  # ┌──────────────────────────╥─────────────────────────────────────────────────────────────-─────────────┐
  # │ url                      ║ behavior                                                                  │
  # ╞══════════════════════════╬═══════════════════════════════════════════════════════════════════════════╡
  # │ http://subdomain.domain/ ║ should be redirected to 'http://subdomain.domain'                         │
  # │ subdomain.domain/        ║ should be redirected to 'http://subdomain.domain'                         │
  # │ /subdomain.domain        ║ this domain described like a directory (first character is the slash)     │
  # │ dir/subdir/page          ║ this directory described like a domain (first character is not the slash) │
  # └──────────────────────────╨───────────────────────────────────────────────────────────────────────────┘

  # note:
  # ════════════════════════════════════════════════════════════════════════════════════════════
  # 1. in the next url 'http://name:pass@subdomain.domain:port/dir/subdir/page?key=value#anchor'
  #    the name, password and port values after parsing will be in the $domain property
  # ────────────────────────────────────────────────────────────────────────────────────────────

  public $protocol;
  public $domain;
  public $path;
  public $query;
  public $anchor;

  function __construct($url) {
    $matches = [];
    preg_match('%^(?:(?<protocol>[a-z]+)://|)'.
                    '(?<domain>[^/]*)'.
                    '(?<path>[^?#]*)'.
              '(?:\\?(?<query>[^#]*)|)'.
              '(?:\\#(?<anchor>.*)|)$%S', core::sanitize_url($url), $matches);
    $this->protocol = !empty($matches['protocol']) ? $matches['protocol'] : (!empty($matches['domain']) ? 'http' : ( /* case for local ulr */ core::server_request_scheme_get()));
    $this->domain   = !empty($matches['domain'  ]) ? $matches['domain'  ] :                                        ( /* case for local ulr */ core::server_host_get());
    $this->path     = !empty($matches['path'    ]) ? $matches['path'    ] : '/';
    $this->query    = !empty($matches['query'   ]) ? $matches['query'   ] : '';
    $this->anchor   = !empty($matches['anchor'  ]) ? $matches['anchor'  ] : '';
  }

  function name_get() {}
  function type_get() {return ltrim(strtolower(strrchr($this->path, '.')), '.');}

  function protocol_get() {return $this->protocol;}
  function domain_get()   {return $this->domain;}
  function path_get()     {return $this->path;}
  function query_get()    {return $this->query;}
  function anchor_get()   {return $this->anchor;}

  function relative_get() {return ($this->path == '/' && !$this->query && !$this->anchor ? '' : $this->path).
                                  ($this->query  ? '?'.$this->query  : '').
                                  ($this->anchor ? '#'.$this->anchor : '');}
  function full_get()     {return ($this->protocol.'://'.$this->domain).
                                  ($this->path == '/' && !$this->query && !$this->anchor ? '' : $this->path).
                                  ($this->query  ? '?'.$this->query  : '').
                                  ($this->anchor ? '#'.$this->anchor : '');}

  function query_arg_select($name)         {$args = []; parse_str($this->query, $args); return $args[$name] ?? null;}
  function query_arg_insert($name, $value) {$args = []; parse_str($this->query, $args); $args[$name] = $value; $this->query = http_build_query($args);}
  function query_arg_delete($name)         {$args = []; parse_str($this->query, $args); unset($args[$name]);   $this->query = http_build_query($args);}

  function path_arg_select($name) {
    $args = explode('/', $this->path);
    return $args[$name] ?? null;
  }

  ###########################
  ### static declarations ###
  ###########################

  static protected $cache;

  static function cache_cleaning() {
    static::$cache = null;
  }

  static function init() {
    static::$cache = new static(core::server_request_uri_get());
  }

  static function current_get() {
    if    (static::$cache == null) static::init();
    return static::$cache;
  }

  static function back_url_get() {
    $back_url = static::current_get()->query_arg_select('back');
    return $back_url ? urldecode($back_url) : '';
  }

  static function back_part_make() {
    return 'back='.urlencode(static::current_get()->full_get());
  }

  static function is_local($url) {
    return (new static($url))->domain == core::server_host_get();
  }

  static function is_active($url, $compare_type = 'full') {
    $checked_url = new static($url);
    $current_url =     static::current_get();
    switch ($compare_type) {
      case 'full': return $checked_url->full_get() ==
                          $current_url->full_get();
      case 'path': return $checked_url->domain_get().$checked_url->path_get() ==
                          $current_url->domain_get().$current_url->path_get();
    }
  }

  static function is_active_trail($url) {
    $checked_url = new static($url);
    $current_url =     static::current_get();
    return strpos($current_url->full_get().'/',
                  $checked_url->full_get().'/') === 0;
  }

  static function go($url) {
    core::send_header_and_exit('redirect', '', '',
      (new static($url))->full_get()
    );
  }

}}