<html>
    <head>
        <meta charset='utf-8'>
        <title>OneItem - Example 1</title>
    </head>
    <body>
        
        
        <h1>OneItem - universal HTML generator for php</h1>
        <h3>See source of this file for examples</h3>
        
        
<?php

// Include example .........................
if(!defined(ONEITEM)) {
    include_once '../oneitem.php';
}


// Basic example - how to create and show html with OneItem
$html = new OneItem();
$html->add_h('No more: echo "&lt; h1 class="my-header"&gt;My Header&lt;/h1&gt;"');
$html->add_p('This very easy to show HTML with OneItem...');
$html->add_tag_pairs('span', 'Put some tags (tag1, value1, tag2. value2...): ', 'b', 'Bold text, ', 'i', 'Italic text, ', 'code', 'Code text...');
$html->add_p_ex('id-example', 'class-example', 'Any tag can be added with id and classes. Use functions with "_ex()" prefix: add_div_ex(), add_h_ex(), add_li_ex()...');
$html->add_hr();

$html->add_h('Example UL list:', 3);
$ul = $html->add_ul();
$ul->add_li('Easy and Compact');
$ul->add_li('Valid HTML structure, and full control');
$ul->add_sub_tag('li', 'b', 'Any tags and structure...');

    $ol = $ul->add_ol();
    $ol->add_li('Unlimited structure');
    $ol->add_li('Correct final HTML');
    
    $li = $ol->add_li_ex('', 'active');
    $li->add_span('Mix of tags: ');
    $li->add_a('www.selfishop.com', 'Hyperlink example');
    $li->add_tag_pairs('span', ' - ', 'b', 'Bold, ', 'i', 'Italic...');


$group = $html->add_tag('code');
$group->add_p('Code tag: function myFunction2($var1, $var2) { return false; }');


// example with form items and script
$html->add_h('Example of froms and Javascript:', 3);
$btn = $html->add_tag('input button', 'Click me');
$btn->set_onclick('myOnClick();');
$html->add_script('function myOnClick() { alert("My onClick Alert example..."); }');




$html->show();
echo '<hr>';
// 
$html = new OneItem();

// All you need - to fill data
$index = 0;
for($iRow=0; $iRow<5; $iRow++) {
    for($iCol=0; $iCol<5; $iCol++) {
        $html->add_value('Record ' . $index . '[R' . $iRow . 'xC:' . $iCol . ']');
        $index++;
    }
}

// Show your data as UL
echo '<h4>Show data as UL - LI</h4>';
$txt_html = $html->as_ul()->as_html();
echo $txt_html;
echo '<hr>';


// Show your data as Table
echo '<h4>Show data as Table</h4>';
$table = $html->as_table(5);
$table->set_param('cellpadding', '10');
$table->set_param('border', '1');
echo $table->as_html();
echo '<hr>';


//echo $html->as_ul()->as_html();

?>
    </body>
</html>
