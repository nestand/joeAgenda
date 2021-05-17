<!DOCTYPE html>
<html lang="en">
<header>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</header>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

{config_load file="test.conf" section="setup"}
 {include file="templates/header.tpl"}
 
      <section class="container-fluid" id="content">
        {block name=body}{/block}
      </section>


<div class="p-3 mb-3 bg-primary text-white">
<h3> Hello <strong>{$FirstName[0]} {$LastName[0]} </strong> <br> </h3>
</div>
<div class="p-4 mb-3 bg-light text-dark shadow-lg p-3 mb-5 bg-body rounded">
<h4>We are glad to see you again!</h4></div> 
<hr>
<br>
<div class="d-inline p-2 bg-dark text-white">
You are in the class {$Class[0][1]} <br>
</div>
<hr>
<!-- to see our list of contacts
<br>
{$contacts|@print_r} 
-->
<br>
<hr>
You are in the same group as 
<br>
{$FirstName[1]} {$LastName[1]} <br>
{$FirstName[2]} {$LastName[2]} <br>
<hr>
<br>
You can join your University by 
<br>
{foreach name=number item=phone from=$contacts}
  <hr />
  {foreach key=key item=item from=$phone}
    {$key}: {$item}<br />
  {/foreach}
{/foreach}
<br>
<hr>
Your time-table is 
<br>
{block name=content}
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover" id="agenda">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Task</th>
                        <th colspan="2" class="text-center"><a href="create" class="btn btn-outline-success btn-block"><i class="fas fa-plus"></i></a></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Id</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Task</th>
                    <th colspan="2"></th>
                    </tr>
                </tfoot>
                <tbody>
                {foreach $getTasks as $task}
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->date}}</td>
                        <td>{{$task->time}}</td>
                        <td>{{$task->task}}</td>
                        <td>
                            <a href="update/{{$task->id}}" class="btn btn-outline-warning btn-block"><i class="far fa-edit"></i></a>
                        </td>
                        <td>
                            <a href="delete/{{$task->id}}" class="btn btn-outline-danger btn-block delete"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>

    <script>
    (function(){
        var itemsToDelete = document.querySelectorAll('.delete');
        itemsToDelete.forEach(function(item){
            // console.log(item);
            item.addEventListener("click", function(e) {
                if(!confirm("Are you sure you want to delete ?")){
                    e.preventDefault();
                }
            });
        });
    })();
    </script>
{/block}
<br>
<hr>
You can join student exchange university programm and move to: 
<br>
<ul>
{foreach key=key item=item from=$option_output}
<li> {$item}<br /></li>
{/foreach} 
</ul>

{include file="templates/footer.tpl"}
</body>
</html>