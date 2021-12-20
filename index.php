<?php
		// dichiarazione variabile frase originale
		$sentence = 'ho capito perfettamente php e giuro che non sono sarcastico';
		// dichiarazione variabile dinamica della parola da censurare
		$replace = $_GET['word'];
		// dichiarazione della variabile contentente la nuova frase censurata
		$newSentence = str_ireplace($replace, '***', $sentence);

		?>

<form method="get" action="">
	<input type="text" id="word" name="word" placeholder="parola da censurare">
	<input type="submit"/>
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


<!-- // Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
// che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
// Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

