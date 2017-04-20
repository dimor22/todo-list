{extends file='master_layout.tpl'}
{block name=subtitle}Update Task{/block}
{block name=content}
{form_open('task/update/')}
	<input type="text" name="task-name" value="{$task->name}">
	<input type="hidden" name="id" value="{$id}">
	<input type="submit" value="Save">
</form>
{/block}
