<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php google faq</title>
</head>
<body>
    <?php
    $faqs= [
            [
                'question' => '<h2 class="SbNcad">Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?</h2> ',   
                'reply' => '<p>La recente <a href="http://curia.europa.eu/juris/document/document.jsf?text=&amp;docid=152065&amp;amppageIndex=0&amp;doclang=it&amp;mode=lst&amp;dir=&amp;occ=first&amp;part=1&amp;cid=276332">decisione della Corte di giustizia dell\'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.</p>' 
            ],
            [
                'question' => '<h2 class="SbNcad">Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?</h2> ',   
                'reply' => '<p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.</p>
                            <p>Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e le impostazioni relative agli annunci personalizzati disponibili in Il mio centro per gli annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.</p>
                            <p>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href="https://www.google.com/safetycenter/">Centro Google per la sicurezza online</a>.</p>
                            <p><a href="https://privacy.google.com">Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.</p>' 
            ],
            [
                'question' => '<h2 class="SbNcad">Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?</h2>',
                'reply' => '<p>I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href="https://support.google.com/websearch/answer/9109?hl=it">contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href="https://support.google.com/legal/contact/lr_eudpa?product=websearch&amp;hl=it">fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href="https://support.google.com/websearch/troubleshooter/3111061?hl=it">visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>.</p>'
            ],
            [
                'question' => '<h2 class="SbNcad">Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?</h2>',
                'reply' => '<p>In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l\'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href="privacy/key-terms#toc-terms-referrer-url">URL referrer</a>. Talvolta, l\'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell\'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href="https://support.google.com/websearch/answer/173733">qui</a>. Le query di ricerca o le informazioni contenute nell\'URL referrer potrebbero essere disponibili mediante Google Analytics o un\'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all\' esatte parole chiave che hanno determinato il clic su un annuncio.</p>'
            ],
        ];
        foreach($faqs as $qr){
            echo $qr['question'];
            echo $qr['reply'];

        };
    ?>
</body>
</html>