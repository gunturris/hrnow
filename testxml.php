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
    
    public function field_dynamic($datas , $value){
        return "<input type=\"{$datas['type']}\" name=\"{$datas['name']}\" value=\"{$value}\" />\n";
    }

    public function field_textarea($datas , $value){
        return "<textarea name=\"{$datas['name']}\" >{$value}</textarea>";
    }

    public function field_dropdown($datas , $value , $options){
        $view =  "<select name=\"{$datas['name']}\" value=\"{$value}\">\n";
            foreach($options as $val => $optlabel){
                $view .= "<option value=\"{$val}\">{$optlabel}</option>\n";
            }
        $view .= "</select>";

        return $view;
    }

    public function field_time($datas , $value){

    }

    public function field_calendar($datas , $value){
        return '
        <div class="form-group ">
        <label class="control-label col-sm-2 requiredField" for="date">
         Date
         <span class="asteriskField">
          *
         </span>
        </label>
        <div class="col-sm-10">
         <div class="input-group">
          <div class="input-group-addon">
           <i class="fa fa-calendar">
           </i>
          </div>
          <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
         </div>
        </div>
       </div>
        ';
    }

    public function form_field_present($form_field , $label , $is_require = false){
        $view = '
        <div class="form-group ">
        <label class="control-label col-sm-2 requiredField" for="date">
         '.$label ;
         
         if($is_require){ 
            $view .= '<span class="asteriskField">  * </span>';
         }

        $view .= '</label>
        <div class="col-sm-10">
         '.$form_field.'
        </div>
       </div>
       ';
       return $view;
    }
}


$test = (new xml_to_form('sample.xml'))->to_object();
$t = xml_to_form::array_to_form($test );
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>FormDen Example</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=rHAJK17U1fIIAGLY9MxRfKiARQRFp9n6jcC4OfjYkRwgWE17tIYl73g_XvlTp14kghMwZOqasPaNOKeIUXxH2RVy7CPiO02iSpdR71u8eJ8" charset="UTF-8"></script></head>
<body>

<!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form action="https://formden.com/post/MlKtmY4x/" class="form-horizontal" method="post">
     <div class="form-group ">
      <label class="control-label col-sm-2 requiredField" for="date">
       Date
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
       </div>
      </div>
     </div>
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
       <input name="_honey" style="display:none" type="text"/>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

</body>

</html>
