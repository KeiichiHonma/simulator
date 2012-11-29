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
    public $logo = FALSE;
    public $its_link = FALSE;
    public $direction = DIRECTION_VERTICAL;
    public $direction_count = array('horizon'=>0,'vertical'=>0);
    
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
                    
                    if( strstr($element->alt,'iPhone Screenshot') !== FALSE || strstr($element->alt,'iPhone &#12473;&#12463;&#12522;&#12540;&#12531;&#12471;&#12519;&#12483;&#12488;') !== FALSE){
                        $this->screenshots[] = trim($element->src);
                        //縦横チェック
                        list($width, $height, $type, $attr) = getimagesize( trim($element->src) );
                        if($width > $height){
                            $this->direction_count['horizon']++;
                        }else{
                            $this->direction_count['vertical']++;
                        }
                    }
                    
                    //icon
                    if( strstr($element->src,'175x175') !== FALSE ){
                        $this->logo = $element->src;
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
        if($this->h1_text && $this->screenshots && $this->logo){
            if($this->direction_count['horizon'] > $this->direction_count['vertical']){
                $this->direction = DIRECTION_HORIZON;
            }else{
            
            }
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
?>