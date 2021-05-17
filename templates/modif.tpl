{extends file="tamplates/index.tpl"}
{include file="templates/header.tpl"}
{block name=content}
    
    <form name="create" method="POST" action="update">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" placeholder="date" class="form-control" value="{$task->date}">
        <label for="time">Time</label>
        <input type="time" id="time" class="time" placeholder="time" value="{$task->time}">
        <label for="task">Task</label>
        <input type="text" name="task" id="task" placeholder="task" class="form-control" value="{$task->task}">
        <hr>
        <input type="hidden" name="action" id="action" value="update">
        <input type="hidden" name="id" id="id" value="{$task->id}">
        <a type="button" class="btn btn-secondary" href="accueil">Retour</a>
		<button type="Submit" class="btn btn-primary">Save</button>
    </form>
{/block}
{include file="templates/footer.tpl"}