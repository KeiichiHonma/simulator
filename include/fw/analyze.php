<?php
include('fw/define.php');
include('fw/simple_html_dom.php');
class analyze
{
    private $html;
    //private $handleTagList = array('img','link','script','input','meta','title');
    //private $handleTagList = array('h1','img','a[class=view-in-itunes]');
    private $handleTagList = array('h1','img');
    public $h1_text = FALSE;
    public $screenshots = FALSE;
    public $icon = FALSE;
    public $its_link = FALSE;
    
    public function analyzeHtmlSource($url){
        $ret = FALSE;
        unset($this->html);
        $this->html = '';
        $this->html = file_get_html($url);
        if(!$this->html) return FALSE;
        foreach ($this->handleTagList as $tag){
            foreach($this->html->find($tag) as $element){
                switch ($tag){
                case 'h1':
                    $this->h1_text = $element->innertext;
                break;
                case 'img':
                    //iPhone Screenshot 1
                    /*
                    日本語
                    &#12473;&#12463;&#12522;&#12540;&#12531;&#12471;&#12519;&#12483;&#12488;
                    
                    //icon
                    http://a4.mzstatic.com/us/r1000/108/Purple/v4/30/9f/8e/309f8ef6-a5ea-3140-f743-a1a4b8ba1559/mzm.femjaeqa.175x175-75.jpg
                    
                    */
                    
                    if( strstr($element->alt,'iPhone Screenshot') !== FALSE ){
                        //$screenshots = $explode(' ',$element->alt);
                        $this->screenshots[] = trim($element->src);
                    }elseif( strstr($element->alt,'&#12473;&#12463;&#12522;&#12540;&#12531;&#12471;&#12519;&#12483;&#12488;') !== FALSE ){
                        $this->screenshots[] = trim($element->src);
                    }
                    
                    //icon
                    if( strstr($element->src,'175x175') !== FALSE ){
                        $this->icon = $element->src;
                    }
                break;
/*                case 'a[class=view-in-itunes]':
                    //view-in-itunes
                    $this->its_link = $element->onclick;
                break;*/

                }
            }
        }
        //全てOKだったら許可
        if($this->h1_text && $this->screenshots && $this->icon){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
?>