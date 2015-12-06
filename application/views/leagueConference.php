<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<div class="ui container">
   <h1>League Conference</h1>
   <input type="button" onclick="window.location.href='/league/page'" value="Table"></input>
   <input type="button" onclick="window.location.href='/league/layout/leagueConference'" value="Conference"></input>
   <input type="button" onclick="window.location.href='/league/layout/leagueDivision'" value="Division"></input>
   
   <div>
	   American Football Conference
	   <table class="ui compact table">
		  <thead>
			 <tr>
				<th>Name</th>
				<th>Wins</th>
				<th>Losses</th>
				<th>Ties</th>
				<th>Points For</th>
				<th>Points Against</th>
				<th>Net Points</th>
			 </tr>
		  </thead>
		  <tbody>
			 {AFCteam}
			 <tr>
				<td>{TeamName}</td>
				<td>{Win}</td>
				<td>{Loss}</td>
				<td>{Tie}</td>
				<td>{PF}</td>
				<td>{PA}</td>
				<td>{NetPts}</td>
			 </tr>
			 {/AFCteam}
		  </tbody>
	   </table>
   </div>
   
   <div>
	   National Football Conference
	   <table class="ui compact table">
		  <thead>
			 <tr>
				<th>Name</th>
				<th>Wins</th>
				<th>Losses</th>
				<th>Ties</th>
				<th>Points For</th>
				<th>Points Against</th>
				<th>Net Points</th>
			 </tr>
		  </thead>
		  <tbody>
			 {NFCteam}
			 <tr>
				<td>{TeamName}</td>
				<td>{Win}</td>
				<td>{Loss}</td>
				<td>{Tie}</td>
				<td>{PF}</td>
				<td>{PA}</td>
				<td>{NetPts}</td>
			 </tr>
			 {/NFCteam}
		  </tbody>
	   </table>
   </div>
</div>