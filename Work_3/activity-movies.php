<?php

$directors = [
"Steven Spielberg" => ["The Terminal", "Minority Report", "Catch Me If You Can", "Lincoln", "Bridge of Spies"],
"Christopher Nolan" => ["Dunkirk", "Interstellar", "The Dark Knight Rises", "Inception", "Memento"],
"Martin Scorsese" => ["Silence", "Hugo", "Shutter Island", "The Departed", "Gangs of New York"],
"Spike Lee" => ["Do the Right Thing", "Malcolm X", "Summer of Sam", "25th Hour", "Inside Man"],
"Lynne Ramsey" => ["Ratcatcher", "Swimmer", "Morvern Callar", "We Need To Talk About Kevin", "You Were Never Really Here"]
                 ];

foreach($directors as $director => $movies){
	echo "$director's movies: ".PHP_EOL;
	foreach($movies as $movie){
		echo "> $movie".PHP_EOL;
	}
}

?>
