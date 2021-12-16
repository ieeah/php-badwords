<?php
	// dichiarazione variabile frase originale
	$sentence = 'ho capito perfettamente php e giuro che non sono sarcastico';
	// dichiarazione variabile dinamica della parola da censurare
	$replace = $_GET['word'];
	// dichiarazione della variabile contentente la nuova frase censurata
	$newSentence = str_ireplace($replace, '***', $sentence);


	echo 'indicare la parola da censurare scrivendo nella barra degli indirizzi "?word=parolaDaCensurare" e premendo invio. <br>';
	echo '<br>';
	echo '<br>';
	echo 'la frase originale è: '.'"'.$sentence.'"';
?>

<form method="get" action="/php-badwords/">
	<input type="text" id="word" name="word" placeholder="parola da censurare">
	<input type="submit"id="loadURL"/>
</form>

<?php
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo 'qui sotto il risultato censurato:'.'<br>';
	echo '"'.$newSentence.'"'.'<br>'.'<br>';
	echo ' lunghezza della frase: '.strlen($newSentence).' caratteri';

	//ho giocato un po' con le concatenazioni per fare un po' di prove a discapito della leggibilità del codice

?>

<style>
	form {
		margin-block: 50px;
	}
</style>