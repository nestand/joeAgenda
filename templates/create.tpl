{extends file="templates/index.tpl"}
{include file="templates/header.tpl"}
{block name=content}
    <form name="add" method="POST" action="add">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" placeholder="Date" class="form-control">
        <label for="task">Task</label>
        <textarea name="task" id="task" placeholder="Task" class="form-control" ></textarea>
        <label for="annee">Time</label>
        <input type="number" name="time" id="time" placeholder="Time" class="form-control">
        <hr>
        <input type="hidden" name="action" id="action" value="add">
        <a type="button" class="btn btn-secondary" href="index.tpl">Retour</a>
		<button type="Submit" class="btn btn-primary">Save</button>
    </form>
{/block}
{include file="templates/footer.tpl"}