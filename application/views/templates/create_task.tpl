{extends file='master_layout.tpl'}
{block name=subtitle}Create New Task{/block}
{block name=content}
	{form_open('task/put')}
		<input type="text" name="task-name" value="">
		<input type="submit" value="Create">
	</form>
{/block}
