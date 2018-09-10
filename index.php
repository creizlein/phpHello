<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="en">
  <title>phpHello App</title>
 </head>
 <body text="#000000" vlink="#000000" link="#000000" alink="#000000" style="background-color:#cccccc;">
  <style type="text/css">
     body    { background-color: #cccccc; color: #222; font-family: sans-serif; margin:0px; }
     a:link  { color: #009; text-decoration: none; }
     a:hover { text-decoration: underline; }
     td.one  { text-align:center; font-size:20px; font-weight:bolder; color:#007070; height:60px; vertical-align:middle; }
     td.two  { text-align:center; font-size:20px; font-weight:bolder; color:#700070; height:60px; vertical-align:middle; }
   </style>
   <div align="center"><br/><table border="2" cellspacing="2" cellpadding="2" width="60%" style="background-color:#909090;border-collapse:collapse;"><tr>
     <td width="50%" class="one">Hello World in HTML</td>
     <td width="50%" class="two"><?php echo('Hello World in PHP!'); ?></td>
   </tr></table></div>
   <?php if (isset($_GET['php'])) {
     phpinfo();
   } else { 
     echo('<p align="center"><a href="?php">Click here to show PHP Info</a></p>');
   }; ?>
 </body>
</html>
