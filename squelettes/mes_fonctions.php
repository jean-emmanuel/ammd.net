<?php

    // $GLOBALS['flag_preserver'] = true;

    function filtre_minify_css($css) {
        $css = preg_replace('/\n/', '', $css);
        $css = preg_replace('/\s+/', ' ', $css);
        // $css = preg_replace('/\/\*.*\*/', '', $css);
        $css = preg_replace('/;?\}/', "}", $css);
        $css = preg_replace('/\s*\{\s*/', "{", $css);
        $css = preg_replace('/\s*,\s*/', ",", $css);
        $css = preg_replace('/\s*;\s*/', ";", $css);
        $css = preg_replace('/:\s+/', ":", $css);
        return $css;
    }

?>
