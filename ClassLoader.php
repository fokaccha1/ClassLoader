<?php

class ClassLoader {
    protected $dirs;

    /**
     * クラスを登録する
     **/
    public function register() {
        spl_autoload_register(array($this, 'loadClass'));
    }

    /**
     * クラスを解除する
     **/
    public function unregister() {
        spl_autoload_unregister(array($this,'loadClass'));
    }

    /**
     *  ディレクトリ登録する
     * @param string $dir
     **/
    public function registerDir($dir) {
        $this->dirs[] = $dir;
    }

    /**
     * auto load classes
     * @param string $class
     **/
    public function loadClass($class) {
        foreach ($this->dirs as $dir) {
            $file = $dir . '/' . $class . '.php';
            if(is_readable($file)) {
                require $file;
                return;
            }
        }
    }
}