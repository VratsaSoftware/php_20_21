<?php

final class Homepage extends Page{

	public $slider;
	public $banner;
	public $article =[];

	public function __construct($titleArg, $headerArg, $contentArg, $footerArg, $sliderArg, $bannerArg, $articleArg)
	{
		parent::__construct($titleArg, $headerArg, $contentArg, $footerArg);
		$this->slider = $sliderArg;
		$this->banner = $bannerArg;
		$this->article = $articleArg;

	}

	public function renderTitle2(){
		return $this->title;
	}

	public function renderContent(){
		$parentContent = parent::renderContent();

		$content = '
		<div>
			<h2> '.$this->article['article_name'].'</h2>
			<article> '.$this->article['article_content'].'</article>
		</div>';
		return $parentContent.$content.$this->db->getContent();
	}

	public function renderSlider(){
		return "<div> $this->slider</div>";
	}

	public function renderBanner(){
		return "<div class=\"ad\">$this->banner</div>";
	}

	public function dbConnect(){
		return $this->db->connect();
	}
}