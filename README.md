##Esercizio di oggi: PHP Iscrizione Newsletter
nome repo: php-iscrizione-newsletter

Creiamo una pagina web che conterrà un form HTML e implementiamo un sistema di validazione per l'indirizzo email inserito dall'utente, assicurandoci che sia ben formattato e che contenga un punto ed una chiocciola.
a


- [X] Milestone 1 (creazione del form)
Creare un file index.php contenente un form HTML con un campo di input per l'inserimento dell'indirizzo email.
Implementare la logica di controllo dell'email direttamente in index.php.
Mostrare il risultato della validazione sulla stessa pagina.
**soluzione:**
  1. creare form in index.php; nella parte di php definire la funzione per validare le email utilizzando  filter_var($email, FILTER_VALIDATE_EMAIL);
  2. controllare se l'email è stata presa da $_POST; se sì, la var $email = post[email]; allora eseguire un'ulteriore verifica richiamando la funzione validateEmail con parametro l'email presa da post; Se la verifca procede a buon fine, stampa messaggio di conferma; ALTRIMENTI, messaggio di errore



- [X] Milestone 2 (functions.php)
Creare un file functions.php per gestire la logica di controllo dell'email.
Utilizzare l'istruzione include in index.php per incorporare il file functions.php.
Rifattorizzare il codice in modo che la logica di controllo dell'email sia contenuta in functions.php.
**soluzione:**
  1. creare form in index.php; nella parte di php, iniziare la sessione (session start()) e require_once functions.php. 
  2. in function.php, creare funzione per validare l'email utilizzando  filter_var($email, FILTER_VALIDATE_EMAIL);
  3. in index.php, controllare se l'email è stata presa da $_POST; se sì, la var $email = post[email]; allora eseguire un'ulteriore verifica richiamando la funzione validateEmail con parametro l'email presa da post; Se la verifca procede a buon fine, stampa messaggio di conferma; ALTRIMENTI, messaggio di errore


- [] Milestone 3: (Stile dell'alert)
Modificare la classe dell'alert in base all'esito della funzione di validazione.
Utilizzare la classe alert-success per indicare un esito positivo e alert-danger per un esito negativo.

**BONUS:**
- [] Milestone 4: (Redirect)
Implementare un redirect a una pagina di ringraziamento (thankyou.php) in caso di esito positivo.
Utilizzare la session PHP per memorizzare l'indirizzo email registrato durante la procedura di validazione.

- [] Milestone 5: (Visualizzare valore errato)
Nel caso di esito negativo, garantire che il valore inserito precedentemente nel campo di input rimanga visibile.
Sfruttare le variabili GET per mantenere e visualizzare l'indirizzo email errato nell'input.
