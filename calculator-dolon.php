<?php
/**
Plugin Name: Dolon's Calculator 
Author: Md. Mamdudur Rahman
Description: Exam Purpose

*/


function dolon_calcutaor_menu(){

	add_menu_page('Forms','Calculator','manage_options','dolon-calculator-menu','dolon_calculator_menu_main','dashicons-calculator', 2);
}

add_action ('admin_menu', 'dolon_calcutaor_menu');


function dolon_calculator_menu_main(){

	echo '<h1><div class="wrap">Welcome To My Calculator</div></h1>';

	?>
	<br>
	<form>

	<input type="hidden" name="page" value="dolon-calculator-menu">
	<input type="text" name="number_1" placeholder="Number 1">

			<select id="operators" name="operators">
				<option>None</option>
			    <option>+</option>
			    <option>-</option>
			    <option>*</option>
			    <option>/</option>
			    <option>%</option>
		  	</select>
	<input type="text" name="number_2" placeholder="Number 2">

	<button type="submit" name="submit" value="submit">Calculate</button>

	</form>

	<p> The answer is: </p>
	<?php


	if (isset($_GET['submit'])) {
		$result1 = $_GET['number_1'];
		$result2 = $_GET['number_2'];
		$operators = $_GET['operators'];


		switch ($operators) {
		case 'None':
			echo "Warning!!!....You need to select a method!!";
			break;
		
		case '+':
			echo $result1 + $result2;
			break;

		case '-':
			echo $result1 - $result2;
			break;

		case '*':
			echo $result1 * $result2;
			break;

		case '/':
			echo $result1 / $result2;
			break;

		case '%':
			echo $result1 % $result2;
			break;
	}

	
	}

}

?>