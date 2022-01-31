<?php
    
    /*
     * Example
     * Basic graph pie & bar
     *
     */
   include_once 'GDgraph.php';
   
   /*
    * create an array of key-value pairs
    */
   $data1 = array(
      'One' => 1,
      'Two' => 2,
      'Three' => 3,
      'Four' => 5,
      'five' => 6,
      'seven' => 7,
      'eigth' => 8,
      'nine' => 9,
      'twenty'=>20,
       );
    $data2 = array(
      'dogs' => 6,
      'cats' => 2,
      'pigs' => 3,
      'turtles' => 5,      
      );

   
  /*
   * instantiate the object with the parameters:
   * (data: array of pairs, width of the graph in pixels, title as string)
   */
   $graph1 = new GDGraph($data1,200,'Bar Numbers');
   $graph2 = new GDGraph($data2,200,'Pie Animals');

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sample page</title>
</head>
<body>
<h1>Sample page</h1>
<!-- Insert php code function in image src  -->
<img src="<?php $graph1->bar_graph();?>" alt="graph"/>
<img src="<?php $graph2->pie_graph();?>" alt="graph"/>
</body>
</html>
