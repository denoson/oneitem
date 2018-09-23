# oneitem (php class)
OneItem is a universal HTML structure generator for php

No more: 
 echo '&lt;h2 id="my-id" class="my-class"&gt;My Header&lt;/h2&gt;';
 
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
