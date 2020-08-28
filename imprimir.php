<?php
   include_once 'GDgraph.php';
   
  
   $data = array(
      'one' => 1,
      'two' => 2,
      'three' => 3,
      'four' => 4,
     );
   
  
   $text = new GDGraph($data,300,'Title');

   ?>
<html lang="es">
<body>
<h1>GDGraph</h1>
<img src="<?php $text->bar_graph();?>" alt="graph"/>
<img src="<?php $text->pie_graph();?>" alt="graph"/>

</body>
</html>
