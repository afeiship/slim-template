#slim-template
A very slim &amp; simple php template.


##usage:
+ set data:
```php
<?php
include "../src/Template.php";
include "../src/SlimTemplate.php";

$list_data = [
  'blog_title' => 'My Blog Title',
  'blog_heading' => 'My Blog Heading',
  'blog_entries' => [
    ['title' => 'Title 1', 'body' => 'Body 1'],

    ['title' => 'Title 2', 'body' => 'Body 2'],
    ['title' => 'Title 3', 'body' => 'Body 3'],
    ['title' => 'Title 4', 'body' => 'Body 4'],
    ['title' => 'Title 5', 'body' => 'Body 5']
  ]
];

print_r($list_data);
$page1 = \nx\module\SlimTemplate::display('./tpl/demo-list.php', $list_data);

echo $page1;

```


+ template page:
```php

 <?php
 //Template page:

 <h1><?php echo $blog_title ?></h1>
 <h2><?php echo $blog_heading ?></h2>

 <ul>
   <?php foreach ($blog_entries as $item): ?>

     <li>
       <h3><?php echo $item['title'] ?></h3>

       <p><?php echo $item['body'] ?></p>
     </li>

   <?php endforeach; ?>
 </ul>

```
