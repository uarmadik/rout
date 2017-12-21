<?php

namespace app\core;

class View
{
    public function generate($localization, $name_of_view, $data)
    {
        switch ($localization){
            case 'ua':
                $path_to_templates = '../app/views/ua';
				////$localization = 'ua';
                break;
            case 'ru':
                $path_to_templates = '../app/views/ru';
				//$localization = 'ru';
                break;
            default :
                $path_to_templates = '../app/views/ua';
				//$localization = 'ua';
                break;
        }

        $loader = new \Twig_Loader_Filesystem($path_to_templates);
        $twig = new \Twig_Environment($loader, array(
            'cache'=>'../vendor/twig/twig/lib/Twig/Cache',
            'auto_reload' => true
        ));
        $twig->addGlobal('session',$_SESSION);
        echo $twig->render($name_of_view, ['parameters' => $data, 'localization'=>$localization]);
    }
}