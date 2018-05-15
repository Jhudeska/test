<?php
require_once 'common/basic/text.php';

define('WEB_ROOT', $_SERVER['DOCUMENT_ROOT']);

class FS {
    protected $path;
    protected $handle;

    /**
     * 
     * @param array $args : array of Folders and/or strings
     */
    protected function __construct($args) {
        
        $path = '';
        foreach ($args as $arg) {
            if (is_string($arg)) {
                $path = FS::std($path, $arg);
            } else {
                $path = FS::std($path, $arg->path);
            }
        }
        $this->path = $path;
        $this->handle = false;
    }

    /**
     * @params: varargs string
     * @return string path
     */
    private static function std() {
        $path = '';
        foreach (func_get_args() as $arg) {
            if ($path != '') {
                $path .= '/';
            }
            $path .= str_replace('\\', '/', $arg);
        }
        $t = str_replace('//', '/', $path);
        if(defined('IMG_FILE_ROOT')) {
            return str_replace(IMG_FILE_ROOT.IMG_FILE_ROOT, IMG_FILE_ROOT, $t);
        } else {
            return $t;
        }
    }

    /**
     * split a path in parts, delimited by slash
     * split('aap/noot') => ['aap', 'noot']
     * split('aap/noot/mies', 3) => ['aap', 'noot', 'mies']
     * split('aap/noot/mies', 2) => ['aap/noot', 'mies']
     * split('aap', 2) => ['', 'aap']
     * 
     * @param string $path
     * @param int $n = 2 or 3
     * @return array of string
     */
    private static function split($path, $n = 2) {
        if ($n == 2) {
            $pos = strrpos($path, '/');
            if ($pos == false) {
                return ['', $path];
            }
            return [substr($path, 0, $pos), substr($path, $pos + 1)];
        } else if ($n == 3) {
            $a = self::split($path, 2);
            $b = self::split($a[0], 2);
            return [$b[0], $b[1], $a[1]];
        }
    }

    function getPath($relto = null) {
        if($relto != null && startsWith($this->path, $relto)) {
            return substr($this->path, strlen($relto));
        } else {
            return $this->path;
        }
    }
    
    function isFolder() {
        return is_dir($this->path);
    }

    function getFolder($subfolder = null) {

        $p = self::split($this->path);
        if ($subfolder !== null) {
            return new Folder($p[0] . '/' . $subfolder);
        } else {
            return new Folder($p[0]);
        }
    }

    function getFilename() {
        $p = self::split($this->path);
        return $p[1];
    }

    /**
     * Get extension including dot
     * @return string 
     */
    function getExtension() {
        $filename = $this->getFilename();
        $extension = strrchr($filename, '.');
        if ($extension === false) {
            return '';
        }
        return $extension;
    }

    /**
     * Get filename w/o extension
     * @return string 
     */
    function getNoExtension() {
        $filename = $this->getFilename();
        $extension = strrchr($filename, '.');
        if ($extension === false) {
            return $filename;
        }
        $len = strlen($extension);
        return substr($filename, 0, -$len);
    }

}
