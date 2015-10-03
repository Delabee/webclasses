<?php
  require( '/home/delabeew/public_html/medbs/classes/classes/modal.class.php' );
  class form extends modal
  { 
    public $c;
    public function __construct(){ echo '<h1 style="text-align:center;font-size:20px;border-bottom:1px solid #d3d3d3;">Producten Beheer.</h1><br />'; }
    public function set_control( $sc )
    { 
      $this->c=$sc;
      $l ='';
      for( $i=0;$i<count( $y=explode( ',',$this->c ) );$i++ )
      {
        $x = explode( ':',$y[ $i ] );
        $l.='<div class="form-group">
                <!--<label for="usr">Naam:</label>-->';
                //1. input
                if( $x[ 0 ]=='input' ){ $l.='<'.$x[ 0 ].' type="'.$x[ 1 ].'" class="form-control" id="'.$x[ 2 ].'" placeholder="'.ucfirst( $x[ 2 ] ).'">'; } 
                if( $x[ 0 ]=='textarea' ){ $l.='<'.$x[ 0 ].' rows="'.$x[ 1 ].'" class="form-control" id="'.$x[ 2 ].'" placeholder="'.ucfirst( $x[ 2 ] ).'"></textarea>'; } 
        $l.='</div>';    
      }
      return $l;
    }
    public function get_form()
    {
      $n ='<form>';
         $n.= $this->set_control( $this->c );
      $n.='</form>';
      return $n;
    }
  }
?>
