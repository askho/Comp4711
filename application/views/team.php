<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="ui container">
<div>
	<h1>New England Patriots</h1>
    <div class="ui toggle checkbox">
    <input type="checkbox" name="public" onchange="window.location.href='/team/layout/gallery'">
    <label>View In Gallery Mode</label>
  </div>
	<table class="ui single line table">
		<thead>
			<tr>
				<th><a href="/team/order/{pageNum}/PlayerName/{orderdir}">Name <i class="sort icon"></i></a></th>
				<th><a href="/team/order/{pageNum}/Num/{orderdir}">Number <i class="sort icon"></i></a></th>
				<th><a href="/team/order/{pageNum}/Pos/{orderdir}">Position <i class="sort icon"></i></a></th>
			</tr>
		</thead>
		<tbody>
			{roster}
			<tr class="appTableHover"onclick="window.location.href='/SinglePlayer/index/{PlayerID}'">
				<td>{PlayerName}</td>
				<td>{Num}</td>
				<td>{Pos}</td>
			</tr>
			{/roster}
		</tbody>
		<tfoot>
         <tr>
            <th>
                <a href="/team/page/" class="ui small button">Page 1</a>
              {options}
            </th>
            <th colspan="5">
               <div class="ui right floated menu">
				  <a class="icon item {goFirst}" href="/team/page/{firstPage}">First</a>
                  <a class="icon item {showLeft}" href="/team/page/{previousPage}">
                  <i class="left chevron icon"></i>
                  </a>
                  {pages}
                    <a class="item" href="/team/page/{pageNum}">{pageNum}</a>
                  {/pages}
                  <a class="icon item First " href="/team/page/{nextPage}">
                  <i class="right chevron icon"></i>
				  </a>
				  <a class="icon item {goLast}" href="/team/page/{lastPage}">Last</a>
               </div>
            </th>
         </tr>
      </tfoot>
	</table>
</div>
</div>
