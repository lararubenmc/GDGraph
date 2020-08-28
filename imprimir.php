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
   $data = array(
      'One' => 1,
      'Two' => 2,
      'Three' => 3,
      'Four' => 4
     );
   
  /*
   * instantiate the object with the parameters:
   * (data: array of pairs, width of the graph in pixels, title as string)
   */
   $graph = new GDGraph($data,300,'Title');

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sample page</title>
</head>
<body>
<h1>Sample page</h1>
<!-- Insert php code function in image src  -->
<img src="<?php $graph->bar_graph();?>" alt="graph"/>
<img src="<?php $graph->pie_graph();?>" alt="graph"/>
</body>
</html>
