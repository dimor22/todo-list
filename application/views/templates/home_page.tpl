<ul>
{foreach $tasks as $task}
    <li>{$task} {anchor('task/edit', 'Edit', 'title="Edit This Task"')}</li>
{/foreach}
</ul>

{anchor('task/create', 'New Task', 'title="Create New Task"')}
