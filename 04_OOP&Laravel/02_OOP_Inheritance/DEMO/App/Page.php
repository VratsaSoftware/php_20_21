<?php

class Page
{
    public $title;
    public $header;
    public $content;
    public $footer;
    public $db; //DB object

    public function __construct($titleArg, $headerArg, $contentArg, $footerArg){

    	$this->title = $titleArg;
    	$this->header = $headerArg;
    	$this->content = $contentArg;
    	$this->footer = $footerArg;
        $this->db = new Database();

    }

    public function renderTitle(){
    	$title = "<title> $this->title </title>";
    	return $title;
    }

    public function renderHeader(){
    	$header = "<h1>$this->title</h1>".PHP_EOL.$this->header;
        return $header;
    }

    public function renderContent(){
        return "<div> $this->content</div>";
    }

    public function renderFooter(){
        $footer = "<div style=\"position: absolute; bottom: 5px; \"> $this->footer </div>";
        return $footer;
    }


}

