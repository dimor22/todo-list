<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{block name=title}TODO LIST - CI3{/block}</title>
  {block name=head}
    <!-- CSS -->
    <!-- JS -->
  {/block}
</head>
<body>

<!-- HEADER -->
<h1>TODO APP</h1>
<h3>{block name=subtitle}List of Tasks ({$total}){/block}</h3>

<!-- CONTENT -->
{block name=content}
  <ul>
  {foreach $tasks as $task}
      <li>{$task->name}
          <a href="{site_url('task/edit/')}{$task->id}">Edit</a>
          <a href="{site_url('task/delete/')}{$task->id}">Delete</a>
      </li>
  {/foreach}
  </ul>

  {anchor('task/create', 'New Task', 'title="Create New Task"')}

{/block}




<!-- FOOTER  -->
{block name=footer}<p>This is the footer</p>{/block}
</body>
</html>
