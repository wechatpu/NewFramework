Hallo {$name}, herzlich Willkommen! <br /><hr />
Lets test out smarty looping and pdo database
<hr />
Test user from database:
<ul>
	{foreach from=$array key=k item=value}
	  <li>index:{$k} - {$value.first_name}</li>
	{/foreach}
</ul>

<br />
<a href="Home/Test/">Next page</a>