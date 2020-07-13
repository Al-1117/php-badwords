

<!-- Inserisco il paragrafo nel codice PHP -->
<h1>Paragraph:</h1>

<?php
$paragraph = 'Continua a salire,
la vita non è una
scala di cristallo.
Ci sono chiodi
e schegge
ed assi sconnesse,
e tratti senza tappeti sul pavimento.
Ma tu continua a salire
raggiungi un pianerottolo,
e volta angoli
e qualche volta cammini nel buio
dove non c è spiraglio di luce.
non tornare indietro.
Non fermarti sui gradini
perché trovi ardua l’ascesa.
Non cadere ora, vai avanti, continua a salire.
La vita non è una scala di cristallo.';

// Elimino gli spazi bianchi nel paragrafo

$trimmed_paragraph = trim($paragraph);

// Conto la lunghezza del paragrafo

$paragraph_length = strlen($trimmed_paragraph);

// Recupero la "badword" dall'url della pagina

$bad_word = $_GET["badword"];

// Nascondo la badword sostituendola con (***)
$hide_bad_word = str_replace($bad_word, '***', $paragraph);

?>

<!-- Stampo il testo e la relativa lunghezza a schermo -->

<p> <?php echo $hide_bad_word ?></p>

<h2>la lunghezza del testo è <?php echo $paragraph_length ?> caratteri</h2>
