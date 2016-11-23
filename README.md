# oneitem
OneItem is a universal HTML generator for php

No more: 
 echo '<h2 id="my-id" class="my-class">My Header</h2>';
 
 Just use OneItem class:
 
  $html = new OneItem();
  $html->add_h('My Header');
 
 or with id and class:
 
  $html->add_h_ex('my-id', 'my-class', 'My Header');
  
Other examples:

$html->add_p('This very easy to show HTML with OneItem...');
$html->add_tag_pairs('span', 'Put some tags (tag1, value1, tag2. value2...): ', 'b', 'Bold text, ', 'i', 'Italic text, ', 'code', 'Code text...');
 
 
Lists:

$ul = $html->add_ul();
$ul->add_li('Easy and Compact');
$ul->add_li('Valid HTML structure, and full control');
$ul->add_sub_tag('li', 'b', 'Any tags and structure...');
