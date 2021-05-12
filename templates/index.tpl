<!DOCTYPE html>
<html lang="en">
<header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</header>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

{config_load file="test.conf" section="setup"}
 {include file="templates/header.tpl"}
      <section class="container-fluid" id="content">
        {block name=body}{/block}
      </section>

<PRE>
<div class="p-3 mb-3 bg-primary text-white">
<h3> Hello <strong>{$FirstName[0]} {$LastName[0]} </strong> <br> </h3>
</div>
<div class="p-4 mb-3 bg-light text-dark shadow-lg p-3 mb-5 bg-body rounded">
<h4>We are glad to see you again!</h4></div> 
<hr>
<div class="d-inline p-2 bg-dark text-white">
You are in the class {$Class[0][1]} <br>
</div>
<!-- to see our list of contacts
<br>
{$contacts|@print_r} 
-->


You are in the same group as 
<hr>
{$FirstName[1]} {$LastName[1]} <br>
{$FirstName[2]} {$LastName[2]} <br>


You can join your University by 
{foreach name=number item=phone from=$contacts}
  <hr />
  {foreach key=key item=item from=$phone}
    {$key}: {$item}<br />
  {/foreach}
{/foreach}

Your time-table is 
<hr>


You can join student exchange university programm and move to: 
<hr>
<ul>
{foreach key=key item=item from=$option_output}
<li> {$item}<br /></li>
{/foreach} 
</ul>
</PRE>
{include file="templates/footer.tpl"}
</body>
</html>

