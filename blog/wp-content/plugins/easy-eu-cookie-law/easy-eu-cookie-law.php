<?php

    /**
    * Plugin Name: Easy EU Cookie law
    * Plugin URI: http://www.albertolabs.com/
    * Description: Plugin for the new European cookie law.
    * Version: 1.2.5
    * Author: Albertolabs.com
    * Author URI: http://www.albertolabs.com/
    * License: GPL2
    */

    include_once("config.php");
    include_once("lib.php");
        
    function run_cookie_law()
    {
        include_once("lang/".lang.".php");
        $cookie = new Cookie_law();

        if($cookie->mostrar_mensaje())
        {            
            echo '<div class="wrap_cookies ' . position . ' font-white '.color.'">
                    <div class="message">
                        '.$lang["cookie_text"].'<a href="'. get_more_info_url() .'" class="under" title="'.ucfirst($lang["polit_cook"]).'">'.$lang["polit_cook"].'</a>. &nbsp;&nbsp;&nbsp; <a href="#" id="cerrar_msj" title="'.$lang["accept"].'"><span class="cerrar_msj">'.strtoupper($lang["accept"]).'</span></a>
                    </div>
                </div>';

        }
    
    }
    
    function panel_admin()
    {
        if(is_admin())
            add_menu_page("Cookie Law","Cookie Law","administrator","slug_menu","cookie_law_settings","dashicons-book-alt");
    }
    
    function get_more_info_url()
    {
        $more_info_url = "#";

        $more_info_file = plugin_dir_path(__FILE__)."more_info.config";

        if(file_exists($more_info_file))
        {
            $more_info_url = file_get_contents($more_info_file);
        }
        else
        {
            file_put_contents($more_info_file, "");
        }

        return $more_info_url;
    }

    function js_save_cookie_law_settings()
    {
        wp_enqueue_script( 'admin_js', plugins_url( '/js/admin.js', __FILE__ ), array('jquery') );
        wp_localize_script( 'admin_js', 'the_ajax_script',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' )) 
        );
    }

    function cookie_law_settings()
    {   
        include_once("lang/".lang.".php");
        require_once("admin_form.php");
    }
    
    function ocultar_msj()
    {
        $cookie = new Cookie_law();
        
        echo ($cookie->ocultar_mensaje()) ? "OK" : "ERROR";
        wp_die();
    }
    
    function set_cookie()
    {
        $cookie = new Cookie_law();
        
        if($cookie->comprobar_cookie())
        {
            $cookie->enviar_cookie();
        }
    }
	
    function cargar_archivos()
    {
        wp_enqueue_style( 'style_cookie_law', plugins_url( 'css/style.min.css' , __FILE__ ), false );
        wp_enqueue_script( 'cookie_law_js', plugins_url( 'js/cookie_law.min.js' , __FILE__ ), array( 'jquery' ) );
        echo '<script>var ocultar_msj_url = "'.admin_url('admin-ajax.php').'";</script>';
    }

    function save_settings()
    {
        $ret = array('STATUS' => 'ERROR', 'ERROR' => 'INIT');

        $more_info_url = get_more_info_url();

        if( ! empty($_POST['formData']))
        {
            $path = plugin_dir_path(__FILE__)."config.php";
            $data = get_text_file_in_array($path);

            if(count($data))
            {
                foreach($_POST['formData'] as $key => $value)
                {
                    if($key != "more_info_url")
                    {
                        $lines = array_search_preg("\"".$key."\"",$data);

                        if(count($lines)==1)
                        {
                            $line = $lines[0];
                            $value = $value; //sanitize $value
                            $data[$line] = "define(\"".$key."\",\"".$value."\");\n";
                        }
                    }
                }
                
                //montar string
                $config = "<?php".mount_text_array_to_string($data);
                
                //write file
                $res = write_file(plugin_dir_path(__FILE__)."config.php",$config);

                // saves url cookies terms
                $more_info_file = plugin_dir_path(__FILE__)."more_info.config";

                if( ! empty($_POST['more_info_url']))
                {
                    file_put_contents($more_info_file, $_POST['more_info_url']);
                }
        
                $ret['STATUS'] = 'OK';
            }
        }

        echo json_encode($ret);
        wp_die();
    }
    
    add_action( 'init', 'set_cookie');
    add_action('wp_enqueue_scripts', 'cargar_archivos');
    add_action('admin_menu', 'panel_admin');
    add_action( 'get_footer', 'run_cookie_law');
    add_action( 'admin_footer', 'js_save_cookie_law_settings');
    
    //ajax
    add_action('wp_ajax_nopriv_ocultar_msj', 'ocultar_msj');
    add_action('wp_ajax_ocultar_msj', 'ocultar_msj');  
    add_action('wp_ajax_nopriv_save_settings', 'save_settings');
    add_action('wp_ajax_save_settings', 'save_settings');

?>
