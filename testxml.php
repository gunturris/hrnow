<?php 

class xml_to_form{

    public $xmlfile = '';
    public $xmlobject = null;

    public function __construct($path){
        $this->xmlfile = $path;
    }

    public function to_object(){
        if(! file_exists($this->xmlfile) )
            return null;
        
        $string = file_get_contents( $this->xmlfile );
        $xml = simplexml_load_string( $string );
        return $xml;
         
    }

    public static function array_to_form($xmlobject){
         
        foreach($xmlobject as $xmltag){
            $tag = $xmltag->getName();
            if( $tag == 'property')
                $t =0;
            else
                $t = self::xml_attribute($tag, 'name');
           // var_dump($t);
        }
        return 'test';
    }

    public static function xml_attribute($object, $attribute)
    {
        if(isset($object[$attribute]))
            return (string) $object[$attribute];
    }
    
}


$test = (new xml_to_form('sample.xml'))->to_object();
$t =xml_to_form::array_to_form($test );
var_dump($t  );
