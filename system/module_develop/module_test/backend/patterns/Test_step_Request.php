<?php

##################################################################
### Copyright © 2017—2024 Maxim Rysevets. All rights reserved. ###
##################################################################

namespace effcore;

#[\AllowDynamicProperties]

class Test_step_Request {

    public $url;
    public $is_https = false;
    public $proxy    = '';
    public $headers  = [];
    public $post     = [];
    static $history  = [];

    function run(&$test, $dpath) {
        yield new Text_simple('');
        yield Test_message::send_dpath($dpath);

        $proxy            = $this->proxy instanceof Param_from_form ?
                            $this->proxy->get() :
                            $this->proxy;
        $prepared_url     = $this->prepared_url_get    ();
        $prepared_headers = $this->prepared_headers_get();
        $prepared_post    = $this->prepared_post_get   ();

                                                          yield new Text('make request to "%%_url"', ['url'   => $this->prepared_url_get()]);
        if ($proxy)                                       yield new Text('proxy server = %%_proxy' , ['proxy' => $proxy]);
        foreach ($prepared_headers as           $c_value) yield new Text('- request header "%%_value"'                , [                  'value' => $c_value]);
        foreach ($prepared_post    as $c_key => $c_value) yield new Text('- request post param "%%_name" = "%%_value"', ['name' => $c_key, 'value' => $c_value]);

        # make request
        $response = Request::make(
            $prepared_url,
            $prepared_headers,
            $prepared_post, ['proxy' => $proxy]
        );

        if (isset($response['info'   ]['http_code'                 ])) yield new Text('- response param "%%_name" = "%%_value"',  ['name' => 'http_code'                 , 'value' => $response['info'   ]['http_code'   ]]);
        if (isset($response['info'   ]['primary_ip'                ])) yield new Text('- response param "%%_name" = "%%_value"',  ['name' => 'primary_ip'                , 'value' => $response['info'   ]['primary_ip'  ]]);
        if (isset($response['info'   ]['primary_port'              ])) yield new Text('- response param "%%_name" = "%%_value"',  ['name' => 'primary_port'              , 'value' => $response['info'   ]['primary_port']]);
        if (isset($response['info'   ]['local_ip'                  ])) yield new Text('- response param "%%_name" = "%%_value"',  ['name' => 'local_ip'                  , 'value' => $response['info'   ]['local_ip'    ]]);
        if (isset($response['info'   ]['local_port'                ])) yield new Text('- response param "%%_name" = "%%_value"',  ['name' => 'local_port'                , 'value' => $response['info'   ]['local_port'  ]]);
        if (isset($response['headers']['x-web-server-name'         ])) yield new Text('- response header "%%_name" = "%%_value"', ['name' => 'x-web-server-name'         , 'value' => $response['headers']['x-web-server-name'         ] ]);
        if (isset($response['headers']['x-time-total'              ])) yield new Text('- response header "%%_name" = "%%_value"', ['name' => 'x-time-total'              , 'value' => $response['headers']['x-time-total'              ].' ('.Locale::format_msecond($response['headers']['x-time-total'      ]).')' ]);
        if (isset($response['headers']['x-php-memory-usage'        ])) yield new Text('- response header "%%_name" = "%%_value"', ['name' => 'x-php-memory-usage'        , 'value' => $response['headers']['x-php-memory-usage'        ].' ('.Locale::format_bytes  ($response['headers']['x-php-memory-usage']).')' ]);
        if (isset($response['headers']['x-return-level'            ])) yield new Text('- response header "%%_name" = "%%_value"', ['name' => 'x-return-level'            , 'value' => $response['headers']['x-return-level'            ] ]);
        if (isset($response['headers']['x-form-submit-errors-count'])) yield new Text('- response header "%%_name" = "%%_value"', ['name' => 'x-form-submit-errors-count', 'value' => $response['headers']['x-form-submit-errors-count'] ]);
        if (isset($response['headers']['location'                  ])) yield new Text('- response header "%%_name" = "%%_value"', ['name' => 'location'                  , 'value' => $response['headers']['location'                  ] ]);
        if (isset($response['headers']['content-length'            ])) yield new Text('- response header "%%_name" = "%%_value"', ['name' => 'content-length'            , 'value' => $response['headers']['content-length'            ] ]);
        if (isset($response['headers']['set-cookie'                ])) {
            foreach ($response['headers']['set-cookie'] as $c_cookie) {
                yield new Text('- response header "%%_name" = "%%_value"', ['name' => 'set-cookie', 'value' => $c_cookie['raw']]);
            }
        }

        $c_results['response'] = $response;
        static::$history[    ] = $response;
    }

    function prepared_url_get() {
        $is_https = $this->is_https instanceof Param_from_form ?
                    $this->is_https->get() :
                    $this->is_https;
        $protocol = $is_https ? 'https' : 'http';
        $domain = Request::server_name_get();
        $port = Request::port_get();
        $url = $this->url;
        if ($port !== '80' && $port !== '443')
             return $protocol.'://'.$domain.':'.$port.$url;
        else return $protocol.'://'.$domain.          $url;
    }

    function prepared_headers_get() {
        $result = [];
        foreach ($this->headers as $c_key => $c_value)
            if (is_string($c_value))
                $result[$c_key] = $c_key.': '.Token::apply($c_value);
        return $result;
    }

    function prepared_post_get() {
        $result = [];
        foreach ($this->post as $c_key => $c_value)
            if (is_string($c_value))
                $result[$c_key] = Token::apply($c_value);
        return $result;
    }

}
