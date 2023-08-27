<?php

/* General stuff */
$LANGS['language'] = 'Italiano';
$LANGS['languageenglish'] = 'Italian';
$LANGS['languagecode'] = 'it_IT.UTF-8'; /* Leave the ".UTF-8" in the end as-is, as it might break some dates */
$LANGS['languagechange'] = 'La lingua è stata impostata a Italiano.';
$LANGS['numberformat'] = 1; /* If your language uses comma separators (example: 1,000,000), value will be 1. If it uses dots (example: 1.000.000) or doesn't use separators, value will be 0.*/

/* Language window */
$LANGS['welcometobitview'] = 'Benvenuto su BitView!';
$LANGS['languagesuggestion'] = 'Lingua suggerita (abbiamo impostato le tue preferenze a questo):';
$LANGS['languagesuggestiondesc1'] = 'Per cambiare la lingua del sito, usa il selettore lingue nel footer (fine della pagina).';
$LANGS['languagesuggestiondesc2'] = 'Clicca "OK" per accettare questa impostazione, o clicca "Annulla" per cambiare la lingua del sito a Inglese.';

/* Time, dates, etc */
$LANGS['second'] = 'secondo';
$LANGS['minute'] = 'minuto';
$LANGS['hour'] = 'ora';
$LANGS['day'] = 'giorno';
$LANGS['week'] = 'settimana';
$LANGS['month'] = 'mese';
$LANGS['year'] = 'anno';
$LANGS['seconds'] = 'secondi';
$LANGS['minutes'] = 'minuti';
$LANGS['hours'] = 'ore';
$LANGS['days'] = 'giorni';
$LANGS['weeks'] = 'settimane';
$LANGS['months'] = 'mesi';
$LANGS['years'] = 'anni';
$LANGS['ago1'] = ''; /* Explanation: Text before "x seconds/minutes/hours..." Example: "hace (1 día)" in Spanish. If your language doesn't use this, leave it empty like this: ''*/
$LANGS['ago2'] = ' fa'; /* Explanation: ago2 -> Text after "x seconds/minutes/hours..." Example: "(1 day) ago" in English, "(1 anno) fa" in Italian. If your language doesn't use this, leave it empty like this: ''*/
$LANGS['january'] = 'Gennaio';
$LANGS['february'] = 'Febbraio';
$LANGS['march'] = 'Marzo';
$LANGS['april'] = 'Aprile';
$LANGS['may'] = 'Maggio';
$LANGS['june'] = 'Giugno';
$LANGS['july'] = 'Luglio';
$LANGS['august'] = 'Agosto';
$LANGS['september'] = 'Settembre';
$LANGS['october'] = 'Ottobre';
$LANGS['november'] = 'Novembre';
$LANGS['december'] = 'Dicembre';
$LANGS['shorttimeformat'] = '%b %e, %Y';
$LANGS['videotimeformat'] = '%b %e, %Y';
$LANGS['longtimeformat'] = '%B %e, %Y';
$LANGS['timehourformat'] = '%b %e, %Y %H:%M';
$LANGS['myvideostimeformat'] = '%A, %b %e %Y, %H:%M:%S';
$LANGS['blogpostformat'] = '%A, %B %e, %Y';
$LANGS['timenumberformat'] = 'd.m.Y';

/* Header */
$LANGS['home'] = 'Home';
$LANGS['videos'] = 'Video';
$LANGS['channels'] = 'Canali';
$LANGS['community'] = 'Comunità';
$LANGS['search'] = 'Cerca';
$LANGS['login'] = 'Accedi';
$LANGS['or'] = 'o';
$LANGS['signup'] = 'Crea account';
$LANGS['logout'] = 'Esci';
$LANGS['upload'] = 'Carica';
$LANGS['subscriptions'] = 'Iscrizioni';
$LANGS['history'] = 'Cronologia';
$LANGS['account'] = 'Account';
$LANGS['myvideos'] = 'I miei video';
$LANGS['favorites'] = 'Preferiti';
$LANGS['playlists'] = 'Playlist';
$LANGS['help'] = 'Aiuto';

/* Homepage */
$LANGS['viewall'] = 'guarda tutto';
$LANGS['videoviews'] = 'visualizzazioni';
$LANGS['beingwatched'] = 'Video guardati ora';
$LANGS['featured'] = 'In primo piano';
$LANGS['recommendedforyou'] = 'Recommended for You';
$LANGS['mostpopular'] = 'I più popolari';
$LANGS['inboxstats'] = 'Messaggi & Statistiche';
$LANGS['profilesettings'] = 'Impostazioni account';
$LANGS['messages'] = 'Messaggi';
$LANGS['message'] = 'Messaggio';
$LANGS['comments'] = 'Commenti';
$LANGS['comment'] = 'Commento';
$LANGS['friendinvites'] = 'Richieste di amicizia';
$LANGS['friendinvite'] = 'Richiesta di amicizia';
$LANGS['subscribers'] = 'Iscritti';
$LANGS['subscriber'] = 'Iscritto';
$LANGS['totalviews'] = 'Visualizzazioni totali';
$LANGS['sendmessage'] = 'Invia messaggio';
$LANGS['whatsnew'] = "Cosa c'è di nuovo";
$LANGS['readmore'] = 'Leggi di più sul nostro Blog';
$LANGS['videocontest'] = 'Videoconcorso';
$LANGS['joincontest'] = 'Unisciti al concorso ora!';
$LANGS['personalize'] = 'Vuoi personalizzare questa pagina home?';
$LANGS['signinnow'] = '<a href="/login">Accedi</a> o <a href="/signup">Crea un account</a> ora!';
$LANGS['nowconverting'] = "This video is converting, wait a few minutes.";
$LANGS['modules'] = "Add / Remove Modules";
$LANGS['friendactivity'] = "Friend Activity";
$LANGS['customizehomepage'] = "Customize Homepage";
$LANGS['customizethehomepage'] = "Customize the Homepage";
$LANGS['customizehomepagedesc'] = "Select the modules you want to see on your customized homepage.";
$LANGS['displaypreferences'] = "Display Preferences";
$LANGS['thefeed'] = "The Feed";
$LANGS['thefeeddesc'] = "Combine all of your modules into a single feed.";
$LANGS['friendactivitytitle'] = "Friend Activity - Can people see what I do?";
$LANGS['friendactivitydesc'] = "This section shows your confirmed friends the actions that you're publicly broacasting in your recent activity history. For example, if you favorite a video, then your new favorite video might show up in your channel's Recent Activity box, as well as on your friends' homepages.";
$LANGS['feedfeatured'] = "Featured Video";
$LANGS['feedbeingwatched'] = "Video Being Watched Now";
$LANGS['feedrecommended'] = "Recommended Video";
$LANGS['nosubscriptions'] = "You haven't subscribed to any channel yet.";
$LANGS['nosubscriptionsdesc'] = "When you add new subscriptions, we'll show their uploads here on this page.";
$LANGS['nofriendactivity'] = "Your friends haven't been active lately.";
$LANGS['nofriendactivitydesc'] = "You can try adding some friends. Then, we'll show their activity here on this page.";

/* Page title */
$LANGS['homepretitle'] = "BitView di "; /* Explanation: Use if "BitView" goes before the username. Example: "BitView de username" in Spanish. If your language doesn't use this, leave it empty like this: ''*/
$LANGS['homeposttitle'] = ""; /* Explanation: Use if "BitView" goes after the username. Example: "username's BitView" in English. If your language doesn't use this, leave it empty like this: '' */
$LANGS['chpretitle'] = "Canale di "; /* Explanation: Use if "channel" goes before the username. Example: "Canal de username" in Spanish. If your language doesn't use this, leave it empty like this: ''*/
$LANGS['chposttitle'] = ""; /* Explanation: Use if "channel" goes after the username. Example: "username's Channel" in English. If your language doesn't use this, leave it empty like this: '' */
$LANGS['signintitle'] = "Accedi";
$LANGS['historytitle'] = "Cronologia video";
$LANGS['favtitle'] = "Preferiti";
$LANGS['pltitle'] = "Playlist";
$LANGS['partnerprogram'] = "Programma Partner";

/* Notifications */
$LANGS['searcherror'] = 'Il tuo testo di ricerca deve essere lungo almeno 2 caratteri!';
$LANGS['addvideoplaylist1'] = "Hai aggiunto";
$LANGS['addvideoplaylist2'] = 'video nella tua playlist!';
$LANGS['addfavorite1'] = "Hai aggiunto nei preferiti";
$LANGS['addfavorite2'] = 'video!';
$LANGS['groupdoesnotexist'] = "Questo gruppo non esiste!";
$LANGS['uploaddisabled'] = "L'aggiunta di video è stata disattivata per la manutenzione.";
$LANGS['10vidsday'] = 'Non puoi caricare più di 10 video al giorno! Prova domani.';
$LANGS['3mins'] = 'Attendi 3 minuti prima di caricare un nuovo video!';
$LANGS['backgroundsuccess'] = 'Lo sfondo è stato aggiunto con successo!';
$LANGS['backgrounderror'] = 'Lo sfondo deve essere sotto i 2MB e essere un file immagine!';
$LANGS['backgrounddeleted'] = 'Lo sfondo è stato eliminato con successo!';
$LANGS['bannersuccess'] = 'Il banner è stato aggiunto con successo!';
$LANGS['bannererror'] = 'Il banner deve essere sotto i 2MB e essere un file immagine!';
$LANGS['bannerdeleted'] = 'Il tuo banner è stato eliminato con successo!';
$LANGS['minibannersuccess'] = 'Il mini banner è stato aggiunto con successo!';
$LANGS['minibannererror'] = 'Il mini banner deve essere sotto i 2MB e essere un file immagine!';
$LANGS['minibannerdeleted'] = 'Il tuo mini banner è stato eliminato con successo!';
$LANGS['sideimagesuccess'] = "L'immagine laterale è stata aggiunta con successo!";
$LANGS['sideimageerror'] = "L'immagine laterale deve essere sotto i 2MB e essere un file immagine!";
$LANGS['sideimagedeleted'] = "L'immagine laterale è stata eliminata con successo!";
$LANGS['avatarsuccess'] = "L'avatar è stato aggiunto con successo!";
$LANGS['avatarerror'] = "L'avatar deve essere sotto i 2MB e essere un file immagine!";
$LANGS['avatardeleted'] = "L'avatar è stato eliminato con successo!";
$LANGS['changessaved'] = 'Le preferenze sono state salvate con successo!';
$LANGS['profilesdisabled'] = 'I profili sono stati disattivati per la manutenzione.';
$LANGS['bulletinposted'] = 'Il bollettino è stato pubblicato!';
$LANGS['channelcommentsent'] = 'Il commento è stato pubblicato!';
$LANGS['somethingwentwrong'] = 'Qualcosa è andato storto!';
$LANGS['replysubmitted'] = 'La risposta è stata pubblicata!';
$LANGS['onlyonecomment'] = 'Puoi solo lasciare un commento!';
$LANGS['vpnbrowser'] = "Non puoi usare una VPN per creare un account BitView!";
$LANGS['torbrowser'] = "Non puoi usare TOR per creare un account BitView!";
$LANGS['captchaincorrect'] = "Il captcha è sbagliato.";
$LANGS['toomanyaccounts'] = 'Hai troppi account!';
$LANGS['banned2times'] = "Sei stato bannato 2 volte. Non puoi creare più account!";
$LANGS['nohistory'] = "Non hai ancora guardato nessun video durante questa sessione!";
$LANGS['historycleared'] = 'La tua cronologia è stata cancellata.';
$LANGS['watchdisabled'] = 'La visione del video è stata disattivata per la manutenzione.';
$LANGS['videonotexist'] = 'Questo video non esiste o è stato rimosso perché ha violato i Termini di Utilizzo.';
$LANGS['responseerror'] = "Qualcosa è andato storto con la tua risposta video! Controlla l'URL.";
$LANGS['responseexist'] = 'Il video è stato già richiesto!';
$LANGS['responseadded'] = 'Risposta video aggiunta con successo!';
$LANGS['responseaccepted'] = 'Accettala la nuova risposta video!';
$LANGS['60secscomment'] = 'Attendi 1 minuto prima di aggiungere un altro commento!';
$LANGS['plnotexist'] = "Questa playlist non esiste!";
$LANGS['positionnotexist'] = "Questa posizione non esiste!";
$LANGS['positionchanged'] = "La posizione del video è stata cambiata!";
$LANGS['invalidurl'] = 'URL invalido!';
$LANGS['videopladded'] = 'Video aggiunto con successo!';
$LANGS['videoalreadyinpl'] = 'Questo video è già nella playlist!';
$LANGS['plvideoremoved'] = 'Il video è stato rimosso!';
$LANGS['plinfochanged'] = 'Le informazioni sulla playlist sono state cambiate con successo!';
$LANGS['pltitleneeded'] = 'Devi mettere un titolo per la playlist!';
$LANGS['flashenabled'] = 'Adobe Flash Player attivato!';
$LANGS['flashdisabled'] = 'Adobe Flash Player disattivato!';
$LANGS['messagesent'] = 'Il messaggio è stato mandato con successo!';
$LANGS['usernotexist'] = "Questo utente non esiste!";
$LANGS['nocriteria'] = "Non soddisfi i criteri richiesti!";
$LANGS['alreadypartner'] = 'Sei stato già accettato nel Programma Partner!';
$LANGS['alreadyapplied'] = 'Sei stato già applicato!';
$LANGS['applicationsent'] = 'La tua applicazione è stata mandata!';
$LANGS['joinedgroup'] = 'Sei entrato nel gruppo con successo!';
$LANGS['leftgroup'] = 'Sei uscito dal gruppo con successo!';
$LANGS['grouprequest'] = 'Hai inviato con successo una richiesta di gruppo! Ora devi aspettare che venga accettata.';
$LANGS['groupdeleted'] = 'Il gruppo è stato eliminato con successo!';
$LANGS['groupvideoadded'] = 'Il video è stato aggiunto!';
$LANGS['groupvideoalreadyadded'] = 'Hai già aggiunto questo video!';
$LANGS['groupvideonotowned'] = "Non possiedi questo video!";
$LANGS['3groups'] = 'Puoi possedere solo fino a 3 gruppi!';
$LANGS['groupnameempty'] = 'Il nome del gruppo non può essere vuoto!';
$LANGS['groupdescempty'] = 'La descrizione del gruppo non può essere vuoto!';
$LANGS['groupnoimage'] = "Devi aggiungere un'immagine per il tuo gruppo!";
$LANGS['groupimageerror'] = "L'immagine del gruppo deve essere sotto 1MB e essere un file immagine!";
$LANGS['groupcreated'] = 'Il gruppo è stato creato con successo!';
$LANGS['urlnotvalid'] = "Questo URL video è invalido!";
$LANGS['discussiondeleted'] = 'Topico eliminato con successo!';
$LANGS['videodeleted'] = 'Il video è stato eliminato con successo!';
$LANGS['pldeleted'] = 'Playlist has successfully been deleted!';
$LANGS['invitesent'] = 'La richiesta di amicizia è stata inviata con successo!';
$LANGS['descriptionchanged'] = 'La descrizione è stata cambiata!';
$LANGS['emptymessage'] = 'Non puoi mandare messaggi vuoti!';
$LANGS['styleupdated'] = 'Lo stile del gruppo è stato aggiornato con successo!';
$LANGS['imageupdated'] = "L'immagine del gruppo è stato aggiornato con successo!";
$LANGS['plcreated'] = 'La playlist è stata creata con successo!';
$LANGS['discussiontitle2chars'] = 'Il titolo deve superare i 2 caratteri!';
$LANGS['discussiondesc10chars'] = 'Le descrizioni devono superare i 10 caratteri!';
$LANGS['5discussionsday'] = 'Puoi fare solo fino a 5 discussioni al giorno!';
$LANGS['discussionsuccess'] = 'Discussione creata con successo!';
$LANGS['memberaccepted1'] = '';
$LANGS['memberaccepted2'] = 'è stato accettato con successo!';
$LANGS['memberdeclined1'] = '';
$LANGS['memberdeclined2'] = 'è stato rifiutato con successo!';
$LANGS['videoaccepted'] = 'Il video è stato accettato con successo!';
$LANGS['bulletindeleted'] = 'Il bollettino è stato eliminato con successo!';
$LANGS['messagedeleted'] = 'Il messaggio è stato eliminato con successo!';
$LANGS['responsedeleted'] = 'La risposta video è stata eliminatA con successo!';
$LANGS['flagmod'] = 'Non puoi segnalare utenti che hanno i permessi moderatore!';
$LANGS['userflagged'] = 'La segnalazione è stata inviata!';
$LANGS['discussionreplysubmitted'] = 'La risposta è stata inviata con successo!';
$LANGS['discussionreplyempty'] = 'Una risposta non può essere vuota!';

/* Watch */
$LANGS['moreinfo'] = 'più informazioni';
$LANGS['lessinfo'] = 'meno informazioni';
$LANGS['category'] = 'Categoria';
$LANGS['recordedon'] = 'Registrato in data';
$LANGS['location'] = 'Posizione';
$LANGS['tags'] = 'Tag';
$LANGS['embed'] = 'Incorpora';
$LANGS['partnervideo'] = 'Video Partner';
$LANGS['subscribe'] = 'Iscriviti';
$LANGS['unsubscribe'] = 'Disiscriviti';
$LANGS['nodesc'] = 'Nessuna descrizione...';
$LANGS['logintosub'] = 'Accedi per Iscriverti!';
$LANGS['logintosubbox'] = 'Vuoi iscriverti?';
$LANGS['subyourself'] = 'Non puoi iscriverti al tuo profilo!';
$LANGS['videoowner'] = 'Opzioni del proprietario del video';
$LANGS['editvideo'] = 'Modifica video';
$LANGS['insight'] = 'Statistiche visualizzazioni';
$LANGS['morefrom'] = 'Di più da:';
$LANGS['relatedvideos'] = 'Video correlati';
$LANGS['novideosfound'] = 'Nessun video trovato...';
$LANGS['morevideos'] = 'Guarda tutti i video';
$LANGS['changeplayersize'] = 'Cambia le dimensioni del player';
$LANGS['newwindow'] = 'Guarda questo video in una nuova finestra';
$LANGS['featuredtext'] = 'Questo video è stato messo in primo piano. Vuoi vedere altri video in primo piano? <a href="/browse?t=2">Clicca qui</a>.';
$LANGS['ratings'] = 'recensioni';
$LANGS['rating'] = 'recensione';
$LANGS['favorite'] = 'Preferito';
$LANGS['addtofav'] = 'Aggiungi ai Preferiti';
$LANGS['removefav'] = 'Rimuovi dai Preferiti';
$LANGS['favadded'] = 'Questo video è stato <strong>aggiunto</strong> ai tuoi <a href="/my_favorites">Preferiti</a>.';
$LANGS['favremoved'] = 'Questo video è stato <strong>rimosso</strong> dai tuoi <a href="/my_favorites">Preferiti</a>.';
$LANGS['undo'] = 'Annulla';
$LANGS['thanksforrating'] = 'Grazie per la recensione!';
$LANGS['playlistdesc'] = 'Per aggiungere un video alla tua playlist, vai alla pagina <a href="/my_playlists">"Playlist"</a> .';
$LANGS['addtoplaylist'] = 'Aggiungi a una Playlist';
$LANGS['addtoplaylistsuccess'] = 'Il video è stato aggiunto alla tua Playlist.';
$LANGS['share'] = 'Condividi';
$LANGS['flag'] = 'Segnala';
$LANGS['flagthisvid'] = 'Segnala questo Video';
$LANGS['removeflag'] = 'Rimuovi Segnalazione';
$LANGS['flagnote'] = "Prima di segnalare: assicurati che il video infranga qualsiasi regola. Non segnalare solo perché non ti piace quel video, altrimenti ostacolerai il lavoro dei moderatori.";
$LANGS['statadded'] = 'Aggiunto';
$LANGS['statviews'] = 'Visualizzazioni';
$LANGS['statratings'] = 'Recensione';
$LANGS['statresponses'] = 'Risposte';
$LANGS['statcomments'] = 'Commenti';
$LANGS['statfavorited'] = 'Preferito';
$LANGS['statsdata'] = 'Statistiche & Data';
$LANGS['honors'] = 'Onori per questo video';
$LANGS['mostviewed'] = 'Più visualizzati';
$LANGS['topfavorited'] = 'I top tra i Preferiti';
$LANGS['times'] = 'volte';
$LANGS['mostdiscussed'] = 'I più discussi';
$LANGS['toprated'] = 'I più votati';
$LANGS['videolinks'] = 'Siti che rimandano a questo video';
$LANGS['clicksfrom'] = 'click da';
$LANGS['responses'] = 'Risposte video';
$LANGS['responsespost'] = 'Pubblica una risposta video';
$LANGS['textcomments'] = 'Commenti testuali';
$LANGS['commentpost'] = 'Pubblica un commento testuale';
$LANGS['commentonthisvideo'] = 'Commenta questo video';
$LANGS['postcomment'] = 'Pubblica commento';
$LANGS['remainingcounter'] = 'Numero di caratteri rimanenti';
$LANGS['nocomments'] = 'Questo video non ha <b>nessun commento</b>.';
$LANGS['noresponses'] = 'This video has <b>no Responses</b>.';
$LANGS['commviewall'] = 'Guarda tutti i';
$LANGS['delete'] = 'Elimina';
$LANGS['reply'] = 'Rispondi';
$LANGS['commentlogin'] = 'Vuoi commentare?';
$LANGS['commentlogindesc'] = '<a href="/signup">Unisciti a BitView</a> per un account gratuito o <a href="/login">accedi</a> se sei già un membro.';
$LANGS['logintoresponse'] = 'Accedi per pubblicare una risposta video';
$LANGS['logintocomment'] = 'Accedi per pubblicare un Commento';
$LANGS['logintofav'] = 'Vuoi aggiungere a Preferiti? <a href="/login">Accedi</a> o <a href="/signup">Crea un account</a> ora!';
$LANGS['logintopl'] = 'Vuoi aggiungere a una Playlist? <a href="/login">Accedi</a> o <a href="/signup">Crea un account</a> ora!';
$LANGS['logintoflag'] = 'Vuoi segnalare un video? <a href="/login">Accedi</a> o <a href="/signup">Crea un account</a> ora!';
$LANGS['close'] = 'chiudi';
$LANGS['addresponse'] = 'Aggiungi risposta';
$LANGS['recentlyrated'] = 'Recently rated';
$LANGS['commentsdisabled'] = 'Adding comments has been disabled for this video.';
$LANGS['ratingsdisabled'] = 'Ratings disabled';

/* Watch comments */
$LANGS['allcomments'] = 'Tutti i Commenti';

/* Sign In */
$LANGS['username'] = "Username";
$LANGS['password'] = "Password";
$LANGS['logindesc'] = "Accedi a BitView con il tuo account";
$LANGS['forgot'] = "Non puoi accedere al tuo account?";
$LANGS['forgotmsg'] = 'Contattaci su Twitter (@BitView_) o invia un messaggio ai Moderatori su Discord. (link nel footer)';
$LANGS['noaccount'] = "Non hai un account?";
$LANGS['signuptobv'] = "Crea un account per BitView!";
$LANGS['signintobv'] = "Accedi a BitView!";
$LANGS['signindesc1'] = "Unisciti alla più grande comunità mondiale di condivisione di video!";
$LANGS['signindesc2'] = "BitView è un modo per portare i tuoi video alle persone che contano per te. Con BitView puoi:";
$LANGS['signindesc3'] = "Mostrare i tuoi video preferiti al mondo";
$LANGS['signindesc4'] = "Bloggare i video che fai con la tua fotocamera digitale o il tuo cellulare";
$LANGS['signindesc5'] = "Mostra video in modo sicuro e privato ai tuoi amici e familiari in tutto il mondo";
$LANGS['notallowed'] = "Sei già stato bannato 3 volte. Non sei più autorizzato a usare BitView!";
$LANGS['wrongpassword'] = 'Password sbagliata! Prova di nuovo.';
$LANGS['staysigned'] = "Stay signed in";

/* Sign Up */
$LANGS['email'] = "Indirizzo e-mail";
$LANGS['passwordstrength'] = "Sicurezza della password";
$LANGS['psnone'] = "Nessuna";
$LANGS['psweak'] = "Debole";
$LANGS['psfair'] = "Equa";
$LANGS['psgood'] = "Buona";
$LANGS['psstrong'] = "Forte";
$LANGS['repassword'] = "Riscrivi password";
$LANGS['usernamedesc'] = "Il tuo nome utente può contenere solo lettere dalla A alla Z o numeri da 0 a 9.";
$LANGS['captcha'] = "Captcha";
$LANGS['acceptterms'] = "Sono d'accordo con i <a href='/terms'>Termini di Utilizzo</a> e l'<a href='/privacy'>Informativa sulla privacy</a>.";
$LANGS['copyrighttext'] = 'Il caricamento di materiali che non si possiedono è una violazione del copyright e contro la legge. Se carichi materiale che non possiedi, il tuo account verrà eliminato.';
$LANGS['mustaccept'] = "Devi accettare i Termini di utilizzo e l'Informativa sulla privacy per creare il tuo account";
$LANGS['createaccount'] = 'Crea il mio account';
$LANGS['signuperror'] = 'Si è verificato un errore durante la creazione del tuo account.';
$LANGS['sameemail'] = 'Questo nome utente o e-mail è già in uso!';
$LANGS['usernamechar'] = 'I nomi utente possono contenere solo caratteri e numeri!';
$LANGS['required'] = 'Tutti i campi di testo sono obbligatori!';
$LANGS['notmatch'] = "Le password non corrispondono!";
$LANGS['signuphead'] = 'Inizia con il tuo account';

/* Videos Page */
$LANGS['recentvideos'] = 'Video recenti';
$LANGS['random'] = 'A caso';
$LANGS['dropdownmore'] = 'di più';
$LANGS['allcatin'] = 'su';
$LANGS['allcat'] = 'Tutte le categorie';
$LANGS['categories'] = 'Categorie';
$LANGS['nomorevideos'] = 'Non sono stati trovati altri video...';
$LANGS['timetoday'] = 'Oggi';
$LANGS['timeweek'] = 'Questa settimana';
$LANGS['timemonth'] = 'Questo mese';
$LANGS['alltime'] = 'Tutto il tempo';
$LANGS['when'] = 'When';
$LANGS['videofavorites'] = 'favorites';
$LANGS['videocomments'] = 'comments';
$LANGS['trendingtopics'] = 'Trending Topics';

/* Channels Page */
$LANGS['mostsubscribed'] = 'Con più iscritti';
$LANGS['lastlogin'] = 'Ultimo accesso';
$LANGS['cstatviews'] = 'Visualizzazioni';
$LANGS['cstatvideos'] = 'Video';
$LANGS['cstatsubs'] = 'Iscritti';
$LANGS['nochannels'] = 'Non sono stati trovati altri canali...';

/* Video Categories */
$LANGS['cat1'] = "Film & Animazione";
$LANGS['cat2'] = "Auto & Veicoli";
$LANGS['cat3'] = "Educazione & Istruzione";
$LANGS['cat4'] = "Intrattenimento";
$LANGS['cat5'] = "Eventi & Matrimoni";
$LANGS['cat6'] = "Famiglia";
$LANGS['cat7'] = "Prezzi & Aste";
$LANGS['cat8'] = "Hobby & Interessi";
$LANGS['cat9'] = "Umore";
$LANGS['cat10'] = "Musica";
$LANGS['cat11'] = "Notizie & Politiche";
$LANGS['cat12'] = "Strano & Oltraggioso";
$LANGS['cat13'] = "Persone & Blog";
$LANGS['cat14'] = "Personali & Incontri";
$LANGS['cat15'] = "Animali Domestici & Animali";
$LANGS['cat16'] = "Scienza & Tecnologia";
$LANGS['cat17'] = "Cortometraggi";
$LANGS['cat18'] = "Sport";
$LANGS['cat19'] = "Viaggi & Eventi";
$LANGS['cat20'] = "Videogiochi";
$LANGS['cat21'] = "Videoblog";

/* Channel Types */
$LANGS['type0'] = "Nessuno";
$LANGS['type1'] = "Membro";
$LANGS['type1p'] = "Membri";
$LANGS['type2'] = "Commediante";
$LANGS['type2p'] = "Commedianti";
$LANGS['type3'] = "Direttore";
$LANGS['type3p'] = "Direttori";
$LANGS['type4'] = "Guru";
$LANGS['type4p'] = "Guru";
$LANGS['type5'] = "Musicista";
$LANGS['type5p'] = "Musicisti";
$LANGS['type6'] = "Segnalatore";
$LANGS['type6p'] = "Segnalatori";

/* Countries */
$LANGS['cat_AF'] = "Afghanistan";
$LANGS['cat_AX'] = "Isole Åland";
$LANGS['cat_AL'] = "Albania";
$LANGS['cat_DZ'] = "Algeria";
$LANGS['cat_AS'] = "Samoa Americane";
$LANGS['cat_AD'] = "Andorra";
$LANGS['cat_AO'] = "Angola";
$LANGS['cat_AI'] = "Anguilla";
$LANGS['cat_AQ'] = "Antartide";
$LANGS['cat_AG'] = "Antigua e Barbuda";
$LANGS['cat_AR'] = "Argentina";
$LANGS['cat_AM'] = "Armenia";
$LANGS['cat_AW'] = "Aruba";
$LANGS['cat_AU'] = "Australia";
$LANGS['cat_AT'] = "Austria";
$LANGS['cat_AZ'] = "Azerbaigian";
$LANGS['cat_BS'] = "Bahamas";
$LANGS['cat_BH'] = "Bahrein";
$LANGS['cat_BD'] = "Bangladesh";
$LANGS['cat_BB'] = "Barbados";
$LANGS['cat_BY'] = "Bielorussia";
$LANGS['cat_BE'] = "Belgio";
$LANGS['cat_BZ'] = "Belize";
$LANGS['cat_BJ'] = "Benin";
$LANGS['cat_BM'] = "Bermuda";
$LANGS['cat_BT'] = "Bhutan";
$LANGS['cat_BO'] = "Bolivia";
$LANGS['cat_BQ'] = "Caraibi Paesi Bassi";
$LANGS['cat_BA'] = "Bosnia ed Erzegovina";
$LANGS['cat_BW'] = "Botswana";
$LANGS['cat_BV'] = "Isola Bouvet";
$LANGS['cat_BR'] = "Brasile";
$LANGS['cat_IO'] = "Territorio Britannico dell'Oceano Indiano";
$LANGS['cat_BN'] = "Brunei Darussalam";
$LANGS['cat_BG'] = "Bulgaria";
$LANGS['cat_BF'] = "Burkina Faso";
$LANGS['cat_BI'] = "Burundi";
$LANGS['cat_KH'] = "Cambogia";
$LANGS['cat_CM'] = "Camerun";
$LANGS['cat_CA'] = "Canada";
$LANGS['cat_CV'] = "Capo Verde";
$LANGS['cat_KY'] = "Isole Cayman";
$LANGS['cat_CF'] = "Repubblica Centrafricana";
$LANGS['cat_TD'] = "Ciad";
$LANGS['cat_CL'] = "Cile";
$LANGS['cat_CN'] = "Cina";
$LANGS['cat_CX'] = "Isola di Natale";
$LANGS['cat_CC'] = "Isole Cocos (Keeling)";
$LANGS['cat_CO'] = "Colombia";
$LANGS['cat_KM'] = "Comore";
$LANGS['cat_CG'] = "Repubblica del Congo";
$LANGS['cat_CD'] = "Repubblica Democratica del Congo";
$LANGS['cat_CK'] = "Isole Cook";
$LANGS['cat_CR'] = "Costarica";
$LANGS['cat_CI'] = "Costa d'Avorio";
$LANGS['cat_HR'] = "Croazia";
$LANGS['cat_CU'] = "Cuba";
$LANGS['cat_CW'] = "Curaçao";
$LANGS['cat_CY'] = "Cipro";
$LANGS['cat_CZ'] = "Repubblica Ceca";
$LANGS['cat_DK'] = "Danimarca";
$LANGS['cat_DJ'] = "Gibuti";
$LANGS['cat_DM'] = "Dominica";
$LANGS['cat_DO'] = "Repubblica Dominicana";
$LANGS['cat_EC'] = "Ecuador";
$LANGS['cat_EG'] = "Egitto";
$LANGS['cat_SV'] = "El Salvador";
$LANGS['cat_GQ'] = "Guinea Equatoriale";
$LANGS['cat_ER'] = "Eritrea";
$LANGS['cat_EE'] = "Estonia";
$LANGS['cat_ET'] = "Etiopia";
$LANGS['cat_FK'] = "Isole Falkland (Malvine)";
$LANGS['cat_FO'] = "Isole Faroe";
$LANGS['cat_FJ'] = "Fiji";
$LANGS['cat_FI'] = "Finlandia";
$LANGS['cat_FR'] = "Francia";
$LANGS['cat_GF'] = "Guyana Francese";
$LANGS['cat_FG'] = "Guyana Francese";
$LANGS['cat_PF'] = "Polinesia francese";
$LANGS['cat_TF'] = "Territori Francesi del Sud";
$LANGS['cat_GA'] = "Gabon";
$LANGS['cat_GM'] = "Gambia";
$LANGS['cat_GE'] = "Georgia";
$LANGS['cat_DE'] = "Germania";
$LANGS['cat_GH'] = "Ghana";
$LANGS['cat_GI'] = "Gibilterra";
$LANGS['cat_GR'] = "Grecia";
$LANGS['cat_GL'] = "Groenlandia";
$LANGS['cat_GD'] = "Grenada";
$LANGS['cat_GP'] = "Guadalupa";
$LANGS['cat_GU'] = "Guam";
$LANGS['cat_GT'] = "Guatemala";
$LANGS['cat_GG'] = "Guernsey";
$LANGS['cat_GN'] = "Guinea";
$LANGS['cat_GW'] = "Guinea Bissau";
$LANGS['cat_GY'] = "Guyana";
$LANGS['cat_HT'] = "Haiti";
$LANGS['cat_HM'] = "Isola Heard e Isole McDonald";
$LANGS['cat_VA'] = "Santa Sede (Stato Città del Vaticano)";
$LANGS['cat_HN'] = "Honduras";
$LANGS['cat_HK'] = "Hong Kong";
$LANGS['cat_HU'] = "Ungheria";
$LANGS['cat_IS'] = "Islanda";
$LANGS['cat_IN'] = "India";
$LANGS['cat_ID'] = "Indonesia";
$LANGS['cat_IR'] = "Iran";
$LANGS['cat_IQ'] = "Iraq";
$LANGS['cat_IE'] = "Irlanda";
$LANGS['cat_IM'] = "Isola di Man";
$LANGS['cat_IL'] = "Israele";
$LANGS['cat_IT'] = "Italia";
$LANGS['cat_JM'] = "Giamaica";
$LANGS['cat_JP'] = "Giappone";
$LANGS['cat_JE'] = "Maglia";
$LANGS['cat_JO'] = "Giordania";
$LANGS['cat_KZ'] = "Kazakistan";
$LANGS['cat_KE'] = "Kenia";
$LANGS['cat_KI'] = "Kiribati";
$LANGS['cat_XK'] = "Kosovo";
$LANGS['cat_KP'] = "Corea del Nord";
$LANGS['cat_KR'] = "Corea del Sud";
$LANGS['cat_KW'] = "Kuwait";
$LANGS['cat_KG'] = "Kirghizistan";
$LANGS['cat_LA'] = "Laos";
$LANGS['cat_LV'] = "Lettonia";
$LANGS['cat_LB'] = "Libano";
$LANGS['cat_LS'] = "Lesotho";
$LANGS['cat_LR'] = "Liberia";
$LANGS['cat_LY'] = "Libia";
$LANGS['cat_LI'] = "Liechtenstein";
$LANGS['cat_LT'] = "Lituania";
$LANGS['cat_LU'] = "Lussemburgo";
$LANGS['cat_MO'] = "Macao";
$LANGS['cat_MK'] = "Macedonia del Nord";
$LANGS['cat_MG'] = "Madagascar";
$LANGS['cat_MW'] = "Malawi";
$LANGS['cat_MY'] = "Malesia";
$LANGS['cat_MV'] = "Maldive";
$LANGS['cat_ML'] = "Mali";
$LANGS['cat_MT'] = "Malta";
$LANGS['cat_MH'] = "Isole Marshall";
$LANGS['cat_MQ'] = "Martinica";
$LANGS['cat_MR'] = "Mauritania";
$LANGS['cat_MU'] = "Maurizio";
$LANGS['cat_YT'] = "Maiotte";
$LANGS['cat_MX'] = "Messico";
$LANGS['cat_FM'] = "Micronesia";
$LANGS['cat_MD'] = "Moldavia";
$LANGS['cat_MC'] = "Monaco";
$LANGS['cat_MN'] = "Mongolia";
$LANGS['cat_ME'] = "Montenegro";
$LANGS['cat_MS'] = "Montserrat";
$LANGS['cat_MA'] = "Marocco";
$LANGS['cat_MZ'] = "Mozambico";
$LANGS['cat_MM'] = "Myanmar";
$LANGS['cat_NA'] = "Namibia";
$LANGS['cat_NR'] = "Nauru";
$LANGS['cat_NP'] = "Nepal";
$LANGS['cat_NL'] = "Paesi Bassi";
$LANGS['cat_AN'] = "Antille Olandesi";
$LANGS['cat_NC'] = "Nuova Caledonia";
$LANGS['cat_NZ'] = "Nuova Zelanda";
$LANGS['cat_NI'] = "Nicaragua";
$LANGS['cat_NE'] = "Niger";
$LANGS['cat_NG'] = "Nigeria";
$LANGS['cat_NU'] = "Niue";
$LANGS['cat_NF'] = "Isola Norfolk";
$LANGS['cat_MP'] = "Isole Marianne Settentrionali";
$LANGS['cat_NO'] = "Norvegia";
$LANGS['cat_OM'] = "Oman";
$LANGS['cat_PK'] = "Pakistan";
$LANGS['cat_PW'] = "Palau";
$LANGS['cat_PS'] = "Palestina";
$LANGS['cat_PA'] = "Panama";
$LANGS['cat_PG'] = "Papua Nuova Guinea";
$LANGS['cat_PY'] = "Paraguay";
$LANGS['cat_PE'] = "Perù";
$LANGS['cat_PH'] = "Filippine";
$LANGS['cat_PN'] = "Pitcairn";
$LANGS['cat_PL'] = "Polonia";
$LANGS['cat_PT'] = "Portogallo";
$LANGS['cat_PR'] = "Porto Rico";
$LANGS['cat_QA'] = "Qatar";
$LANGS['cat_RE'] = "Riunione";
$LANGS['cat_RO'] = "Romania";
$LANGS['cat_RU'] = "Russia";
$LANGS['cat_RW'] = "Ruanda";
$LANGS['cat_BL'] = "San Bartolomeo";
$LANGS['cat_SH'] = "Sant'Elena";
$LANGS['cat_KN'] = "Saint Kitts e Nevis";
$LANGS['cat_LC'] = "Santa Lucia";
$LANGS['cat_MF'] = "Saint Martin (parte francese)";
$LANGS['cat_PM'] = "San Pietro e Miquelon";
$LANGS['cat_VC'] = "Saint Vincent e Grenadine";
$LANGS['cat_WS'] = "Samoa";
$LANGS['cat_SM'] = "San Marino";
$LANGS['cat_ST'] = "Sao Tomè e Principe";
$LANGS['cat_SA'] = "Arabia Saudita";
$LANGS['cat_SN'] = "Senegal";
$LANGS['cat_RS'] = "Serbia";
$LANGS['cat_SC'] = "Seychelles";
$LANGS['cat_SL'] = "Sierra Leone";
$LANGS['cat_SG'] = "Singapore";
$LANGS['cat_SX'] = "Sint Maarten";
$LANGS['cat_SK'] = "Slovacchia";
$LANGS['cat_SI'] = "Slovenia";
$LANGS['cat_SB'] = "Isole Salomone";
$LANGS['cat_SO'] = "Somalia";
$LANGS['cat_ZA'] = "Sud Africa";
$LANGS['cat_GS'] = "Georgia del Sud e Isole Sandwich Australi";
$LANGS['cat_ES'] = "Spagna";
$LANGS['cat_LK'] = "Sri Lanka";
$LANGS['cat_SD'] = "Sudan";
$LANGS['cat_SR'] = "Suriname";
$LANGS['cat_SJ'] = "Svalbard e Jan Mayen";
$LANGS['cat_SZ'] = "Swaziland";
$LANGS['cat_SE'] = "Svezia";
$LANGS['cat_CH'] = "Svizzera";
$LANGS['cat_SS'] = "Sud Sudan";
$LANGS['cat_SY'] = "Siria";
$LANGS['cat_TW'] = "Taiwan";
$LANGS['cat_TJ'] = "Tagikistan";
$LANGS['cat_TZ'] = "Tanzania";
$LANGS['cat_TH'] = "Thailandia";
$LANGS['cat_TL'] = "Timor Est";
$LANGS['cat_TG'] = "Togo";
$LANGS['cat_TK'] = "Tokelau";
$LANGS['cat_TO'] = "Tonga";
$LANGS['cat_TT'] = "Trinidad e Tobago";
$LANGS['cat_TN'] = "Tunisia";
$LANGS['cat_TR'] = "Turchia";
$LANGS['cat_TM'] = "Turkmenistan";
$LANGS['cat_TC'] = "Isole Turks e Caicos";
$LANGS['cat_TV'] = "Tuvalu";
$LANGS['cat_UG'] = "Uganda";
$LANGS['cat_UA'] = "Ucraina";
$LANGS['cat_AE'] = "Emirati Arabi Uniti";
$LANGS['cat_GB'] = "Regno Unito";
$LANGS['cat_US'] = "Stati Uniti";
$LANGS['cat_UM'] = "Isole minori esterne degli Stati Uniti";
$LANGS['cat_UY'] = "Uruguay";
$LANGS['cat_UZ'] = "Uzbekistan";
$LANGS['cat_VU'] = "Vanatu";
$LANGS['cat_VE'] = "Venezuela";
$LANGS['cat_VN'] = "Vietnam";
$LANGS['cat_VG'] = "Isole Vergini Britanniche";
$LANGS['cat_VI'] = "Isole Vergini, Stati Uniti";
$LANGS['cat_WF'] = "Wallis e Futuna";
$LANGS['cat_EH'] = "Sahara Occidentale";
$LANGS['cat_YE'] = "Yemen";
$LANGS['cat_ZM'] = "Zambia";
$LANGS['cat_ZW'] = "Zimbabwe";

/* My Subscriptions */
$LANGS['newvideos'] = "Video nuovi";

/* Account */
$LANGS['myaccount'] = "Il mio account";
$LANGS['vidsfavs'] = "Video, Preferiti e Playlist";
$LANGS['accountsettings'] = "Impostazioni Account";
$LANGS['viewinghistory'] = "Cronologia";
$LANGS['mychannel'] = "Il mio canale";
$LANGS['uploadedvideos'] = "Video caricati";
$LANGS['new'] = "Nuovo";
$LANGS['playlist'] = "Playlist";
$LANGS['videoupload'] = "Caricamento di video";
$LANGS['nosubvideos'] = "Non hai nessuna iscrizione...";
$LANGS['nofavvideos'] = "Non hai aggiunto alcun video ai preferiti...";

/* My Videos */
$LANGS['sortby'] = "Ordina per";
$LANGS['sorttitle'] = "Titolo";
$LANGS['sorttime'] = "Tempo";
$LANGS['sortdateadded'] = "Data aggiunta";
$LANGS['sortviews'] = "Visualizzazioni";
$LANGS['sortrating'] = "Recensione";
$LANGS['stattime'] = "Tempo";
$LANGS['statrating'] = "Recensione";
$LANGS['statbroadcast'] = "Trasmissione";
$LANGS['statrawfile'] = "File Raw";
$LANGS['public'] = "Pubblico";
$LANGS['private'] = "Privato";
$LANGS['live'] = "Dal vivo!";
$LANGS['converting'] = "Conversione...";
$LANGS['uploading'] = "Pubblicazione...";
$LANGS['addvidsto'] = "Aggiungi video a";
$LANGS['play'] = "Play";
$LANGS['edit'] = "Modifica";
$LANGS['setasavatar'] = "Imposta Miniatura come Avatar";
$LANGS['downloadmp4'] = "Download del file MP4";
$LANGS['deleteconfirmation'] = "Sei sicuro di voler eliminare questo video?";
$LANGS['novideos'] = 'Non hai caricato alcun video. <a href="/my_videos_upload">Inizia subito a caricare un video</a>!';
$LANGS['nomyvideosresults'] = "Nessun risultato. Controlla se l'ortografia è corretta.";

/* Edit Video */
$LANGS['title'] = "Titolo";
$LANGS['desc'] = "Descrizione";
$LANGS['privacy'] = "Privacy";
$LANGS['saveinfo'] = "Salva Informazioni";
$LANGS['saveinfoconfirm'] = "Sei sicuro di voler cambiare le informazioni sul video?";
$LANGS['viewchart'] = "Visualizza grafico";
$LANGS['backtopreviouspage'] = "Back to Previous Page";
$LANGS['editsavechanges'] = "Save Changes";
$LANGS['editcancel'] = "cancel";
$LANGS['videoinfo'] = "Video Information";
$LANGS['videothumbnail'] = "Video Thumbnail";
$LANGS['uploadthumbnail'] = "Upload Thumbnail";
$LANGS['customthumbdesc'] = 'To set a custom thumbnail, click the thumbnail on the left side and select your desired image file. Then, click "Upload Thumbnail".';
$LANGS['customthumbtitle'] = 'Do you want to change this thumbnail?';
$LANGS['customthumbinfo'] = 'Custom thumbnails are exclusive to partners. To read more about the advantages of joining the partner program and its requirements, click the button below.';
$LANGS['partnerreadmore'] = 'Read more';
$LANGS['broadcastingoptions'] = 'Broadcasting and Sharing Options';
$LANGS['publicdesc'] = "anyone can search for and view - recommended";
$LANGS['privatedesc'] = "only specific BitView users can view";
$LANGS['allowcomments'] = "Allow comments automatically";
$LANGS['allowfriendcomments'] = "Only friends can comment";
$LANGS['disablecomments'] = "Don't allow comments";
$LANGS['dateandmap'] = "Date and Map";
$LANGS['clear'] = "Clear";
$LANGS['allowratings'] = "Yes, allow this video to be rated by others.";
$LANGS['dontallowratings'] = "No, don't allow this video to be rated.";

/* My Playlists */
$LANGS['addedpl'] = "Added";
$LANGS['frompl'] = "From";
$LANGS['nopl'] = "No Playlists were found....";

/* My Playlist */
$LANGS['playlistedit'] = "Modifica Playlist";
$LANGS['videourl'] = "URL del Video";
$LANGS['add'] = "Aggiungi";
$LANGS['editinfo'] = "Modifica Informazioni";

/* Edit Playlist */
$LANGS['pledittitle'] = "Modifica Playlist";
$LANGS['pleditdesc'] = "Le playlist sono raccolte di video che puoi impostare nel modo che preferisci.";
$LANGS['cancel'] = "Annulla";

/* Create Playlist */
$LANGS['createplaylisttitle'] = "Crea playlist video";
$LANGS['createplaylist'] = "Crea playlist";

/* View Playlist */
$LANGS['plpermalink'] = "Playlist/URL (Permalink):";
$LANGS['sortcomments'] = "Comments";
$LANGS['unsorted'] = "Unsorted";
$LANGS['playallvideos'] = "Play All Videos";

/* Inbox */
$LANGS['compose'] = "Componi";
$LANGS['from'] = "Da";
$LANGS['subject'] = "Soggetto";
$LANGS['date'] = "Data";
$LANGS['allmsg'] = "Tutti i Messaggi";
$LANGS['msgcom'] = "Commenti";
$LANGS['sentmsg'] = "Messaggi inviati";
$LANGS['nomsg'] = "Non hai messaggi...";


/* Send Message */
$LANGS['messagecont'] = "Messaggio";
$LANGS['to'] = "A";
$LANGS['sendmessagebutton'] = "Invia messaggio";

/* Groups */
$LANGS['groups'] = "Gruppi";
$LANGS['joinedgroups'] = "Gruppi a cui ti sei unito";
$LANGS['recentgroups'] = "Gruppi recenti";
$LANGS['mostmembers'] = "Maggior parte dei membri";
$LANGS['mostvideos'] = "Maggior parte dei video";
$LANGS['groupmostdiscussed'] = "Più discusso";
$LANGS['createagroup'] = "Crea un gruppo";
$LANGS['groupvideos'] = "Video";
$LANGS['groupmembers'] = "Membri";
$LANGS['discussions'] = "Discussioni";
$LANGS['groupcreated'] = "Creato";
$LANGS['nogroups'] = "Nessun gruppo trovato...";

/* Group */
$LANGS['jointhisgroup'] = "Unisciti a questo gruppo";
$LANGS['removerequest'] = "Rimuovi Richiesta";
$LANGS['leavegroup'] = "Lascia il Gruppo";
$LANGS['moderation'] = "Moderazione";
$LANGS['viewallvideos'] = "Vedi tutti i video";
$LANGS['addvideo'] = "Aggiungi Video";
$LANGS['novideos'] = "Nessun video...";
$LANGS['nodiscussions'] = "Nessuna discussione...";
$LANGS['creatediscussion'] = "Crea discussione";
$LANGS['topostatopic'] = "per inserire un argomento.";
$LANGS['topic'] = "Argomento";
$LANGS['author'] = "Autore";
$LANGS['replies'] = "Risposte";
$LANGS['lastpost'] = "Ultimo post";
$LANGS['viewallmembers'] = "Visualizza tutti i membri";
$LANGS['owner'] = "Proprietario";
$LANGS['grouptype'] = "Tipo";
$LANGS['instantjoin'] = "Collegamento istantaneo";
$LANGS['approvalrequired'] = "Approvazione richiesta";
$LANGS['groupurl'] = "URL";
$LANGS['deletediscussion'] = "Elimina discussione";
$LANGS['postreply'] = "Invia risposta";
$LANGS['post'] = "Posta";
$LANGS['accept'] = "Accetta";
$LANGS['decline'] = "Rifiuta";

/* Group Moderation */
$LANGS['groupmoderation'] = "Moderazione di gruppo";
$LANGS['approvemembers'] = "Approva membri";
$LANGS['approvevideos'] = "Approva video";
$LANGS['yes'] = "Sì";
$LANGS['no'] = "No";
$LANGS['changeinfo'] = "Cambia info";
$LANGS['changeimage'] = "Cambia immagine";
$LANGS['image'] = "Immagine";
$LANGS['styling'] = "Stilizzazione";
$LANGS['cssdesc'] = "Avere sfondi o grafica che fanno o mostrano cose illegali comporterà la tua risoluzione.";
$LANGS['updatecss'] = "Aggiorna CSS";
$LANGS['groupmessage'] = "Messaggio";
$LANGS['sendmessagetomembers'] = "Invia messaggi ai Membri";
$LANGS['delgroup'] = "Elimina gruppo";

/* Submit Group Video */
$LANGS['submitvideotitle'] = "Invia video al gruppo";
$LANGS['submitvideo'] = "Invia video";

/* Create Group */
$LANGS['groupname'] = "Nome del gruppo";
$LANGS['groupimage'] = "Immagine del gruppo";
$LANGS['creategroup'] = "Crea gruppo";
$LANGS['creategroupdesc'] = "I gruppi ti consentono di creare discussioni con altri membri e di condividere facilmente i tuoi video con altri.";

/* Create Group Discussion */
$LANGS['discussiontitle'] = "Titolo della discussione";
$LANGS['creatediscussiondesc'] = "Le discussioni sono parti di gruppi in cui si discute l'argomento impostato.";

/* Search Results */
$LANGS['resultspre'] = ""; /* Explanation: Use if the search query goes before "results". Example: "Resultados para search" in Spanish. If your language doesn't use this, leave it empty like this: ''*/
$LANGS['resultspost'] = ""; /* Explanation: Use if "BitView" goes after the username. Example: "search results" in English. If your language doesn't use this, leave it empty like this: '' */
$LANGS['relevance'] = 'Rilevanza';
$LANGS['viewcount'] = 'Conteggio visualizzazioni';
$LANGS['searchrating'] = 'Recensioni';
$LANGS['newest'] = 'Più nuovo';
$LANGS['nochannelsfound'] = 'Nessun canale trovato...';
$LANGS['noplfound'] = 'Nessuna Playlist trovata...';
$LANGS['nogroupsfound'] = 'Nessun gruppo trovato...';

/* Profile */
$LANGS['channelsuspended'] = 'Questo account è stato sospeso.';
$LANGS['accountnotfound'] = 'Questo account non è stato trovato.';
$LANGS['channel'] = 'Canale';
$LANGS['friends'] = 'Amici';
$LANGS['channelsubscribers'] = 'Iscritti';
$LANGS['linkcomments'] = 'Commenti';
$LANGS['bulletins'] = 'Bollettini';
$LANGS['editchannel'] = 'Modifica canale';
$LANGS['type'] = 'Tipo';
$LANGS['joined'] = 'Iscritto su BitView';
$LANGS['videoswatched'] = 'Video guardati';
$LANGS['channelviews'] = 'Visualizzazioni Canale';
$LANGS['age'] = 'Età';
$LANGS['gender'] = 'Sesso';
$LANGS['male'] = 'Uomo';
$LANGS['female'] = 'Femmina';
$LANGS['status'] = 'Stato';
$LANGS['single_m'] = 'Singolo';
$LANGS['single_f'] = 'Singolo';
$LANGS['taken_m'] = 'Preso';
$LANGS['taken_f'] = 'Preso';
$LANGS['married_m'] = 'Sposato';
$LANGS['married_f'] = 'Sposato';
$LANGS['country'] = 'Paese';
$LANGS['website'] = 'Sito Web';
$LANGS['hobbies'] = 'Interessi e Hobby';
$LANGS['music'] = 'Musica';
$LANGS['movies'] = 'Film e Spettacoli';
$LANGS['books'] = 'Libri';
$LANGS['mostsub'] = 'Con più iscritti';
$LANGS['report'] = 'Segnala';
$LANGS['pfpviolation'] = 'violazione immagine profilo';
$LANGS['connectwith'] = 'Connettiti con';
$LANGS['profilesendmessage'] = 'Invia messaggio';
$LANGS['messagetoyourself'] = 'Non puoi inviare messaggi a te stesso!';
$LANGS['logintomessage'] = 'Accedi per inviare messaggi!';
$LANGS['addcomment'] = 'Aggiungi commento';
$LANGS['logintocommentchannel'] = 'Accedi per commentare';
$LANGS['sharechannel'] = 'Condividi canale';
$LANGS['addfriend'] = 'Aggiungi come amico';
$LANGS['retractinvite'] = 'Ritira Invito';
$LANGS['removefriend'] = 'Rimuovi amico';
$LANGS['notfriendyourself'] = 'Non puoi aggiungere te stesso agli amici!';
$LANGS['logintofriend'] = 'Accedi per aggiungere amici!';
$LANGS['blockuser'] = 'Blocca Utente';
$LANGS['channelembed'] = 'Incorpora questo canale';
$LANGS['recentratings'] = 'Recent Activity';
$LANGS['seeall'] = 'vedi tutto';
$LANGS['writebulletin'] = 'Scrivi Bollettino';
$LANGS['bulletin'] = 'Bollettino';
$LANGS['subvideos1'] = 'Iscriviti a ';
$LANGS['subvideos2'] = "i video di";
$LANGS['plvideos'] = 'Video';
$LANGS['playall'] = 'Riproduci tutto';
$LANGS['featuredchannels'] = 'Canali in primo piano';
$LANGS['channelcomments'] = 'Commenti Canale';
$LANGS['bggraphic'] = 'grafica di sfondo';
$LANGS['reportthisuser'] = 'questo utente.';
$LANGS['norecentratings'] = 'No Recent Activity Found...';
$LANGS['nosubscribers'] = 'Nessun iscritto...';
$LANGS['nosubscriptions'] = 'Nessun abbonamento...';
$LANGS['nofriends'] = 'Nessun amico...';
$LANGS['nobulletins'] = 'Nessun Bollettino...';
$LANGS['novideoschannel'] = 'Nessun video...';
$LANGS['nofavs'] = 'Nessun video preferito...';
$LANGS['noplchannel'] = 'Nessuna playlist...';
$LANGS['pvideos'] = 'Video Privati';
$LANGS['pvideosallow'] = 'Non sei autorizzato a vedere questi video...';
$LANGS['plvideoamount'] = 'video';
$LANGS['bulletinpost'] = 'Bollettino postale';
$LANGS['deletebulletin'] = 'Elimina Bollettino';
$LANGS['body'] = 'Corpo';
$LANGS['bulletincomments'] = 'Commenti Bollettino';
$LANGS['tocommentbulletin'] = 'per inviare una risposta a questo bollettino!';
$LANGS['addacomment'] = 'Aggiungi un commento:';
$LANGS['postreplychannel'] = 'Invia risposta';
$LANGS['writecomment'] = 'Scrivi commento';
$LANGS['for'] = 'per';
$LANGS['commentdesc'] = 'I commenti del canale appaiono sul canale degli utenti.';
$LANGS['postbulletin'] = 'Invia Bollettino';
$LANGS['writeabulletin'] = 'Scrivi un bollettino';
$LANGS['bulletindesc'] = 'I bollettini appaiono sulle tue pagine canale e su quelle dei tuoi amici.';
$LANGS['sharingoptions'] = 'Opzioni di condivisione';
$LANGS['sharingoptionsdesc'] = 'Ci sono 2 modi per condividere questo canale.';
$LANGS['sharingoptions1'] = "1. Copia e incolla questo link in un'email o in un messaggio istantaneo.";
$LANGS['sharingoptions2'] = "2. Invia questo canale utilizzando il programma di posta elettronica del tuo computer.";
$LANGS['clicktosend'] = 'Clicca per inviare!';
$LANGS['honorless'] = 'less';
$LANGS['activitycomment'] = 'commented on';
$LANGS['activityfavorite'] = 'favorited a video';
$LANGS['activityrating'] = 'rated a video:';
$LANGS['activityupload'] = 'uploaded a new video';
$LANGS['activityfriend'] = 'became friends with';
$LANGS['activitysubscription'] = 'subscribed to';

/* My Profile page */
$LANGS['myprofiledesc'] = 'Questa pagina contiene tutte le impostazioni per il tuo canale BitView.';
$LANGS['profileimages'] = 'Immagini del profilo';
$LANGS['avatar'] = 'Avatar';
$LANGS['backgroundimage'] = 'Immagine dello sfondo';
$LANGS['deleteimage'] = 'Elimina immagine';
$LANGS['channelinformation'] = 'Informazioni del canale';
$LANGS['genderrelationprivate'] = 'Privato';
$LANGS['fctitle'] = 'Titolo F.C.';
$LANGS['relationship'] = 'Rapporto';
$LANGS['birthday'] = 'Compleanno';
$LANGS['showage'] = 'Mostra età';
$LANGS['aboutme'] = 'Su di me';
$LANGS['emailprefs'] = 'Preferenze e-mail';
$LANGS['emailpm'] = "Inviami un'e-mail sui messaggi privati";
$LANGS['emailcomm'] = "Inviami un'e-mail sui commenti video";
$LANGS['emailsub'] = "Inviami un'e-mail sui momenti salienti dell'abbonamento settimanale";
$LANGS['layoutprefs'] = 'Preferenze layout';
$LANGS['bgcolor'] = 'Colore di sfondo';
$LANGS['bgfixed'] = 'Corretto';
$LANGS['bgrepeat'] = 'Ripeti';
$LANGS['norepeat'] = 'Non ripetere';
$LANGS['repeat'] = 'Ripeti';
$LANGS['repeatx'] = 'Ripeti X';
$LANGS['repeaty'] = 'Ripeti Y';
$LANGS['bgposition'] = 'Posizione';
$LANGS['top'] = 'In alto';
$LANGS['middle'] = 'Centro';
$LANGS['bottom'] = 'In basso';
$LANGS['fontcolor'] = 'Colore carattere';
$LANGS['titlefontcolor'] = 'Colore carattere titolo';
$LANGS['linkcolor'] = 'Colore Link';
$LANGS['hlfontcolor'] = 'Colore font finestra info canale';
$LANGS['hlheadercolor'] = 'Colore intestazione finestra info canale';
$LANGS['hlinsidecolor'] = 'Colore sfondo finestra info canale';
$LANGS['headercolor'] = 'Colore instestazione altre finestre';
$LANGS['insidecolor'] = 'Colore sfondo altre finestre';
$LANGS['font'] = 'Carattere Canale';
$LANGS['featuredvideobox'] = 'Riquadro video in primo piano';
$LANGS['subscribersbox'] = 'Finestra Iscritti';
$LANGS['subscriptionsbox'] = 'Finestra dei tuoi Iscritti';
$LANGS['friendsbox'] = 'Finestra Amici';
$LANGS['bulletinsbox'] = 'Finestra Bollettini';
$LANGS['videosbox'] = 'Finestra Video';
$LANGS['favoritesbox'] = 'Finestra Preferiti';
$LANGS['playlistsbox'] = 'Finestra Playlist';
$LANGS['commentsbox'] = 'Finestra Commenti';
$LANGS['ratingsbox'] = 'Recent Activity Box';
$LANGS['partnersettings'] = 'Impostazioni partner';
$LANGS['bannerimage'] = 'Immagine banner';
$LANGS['minibannerimage'] = 'Immagine Mini Banner';
$LANGS['sideimage'] = 'Immagine laterale';
$LANGS['recommendedsize'] = 'dimensione consigliata';
$LANGS['bannerlink'] = 'Sito Web Banner';
$LANGS['sideimagelink'] = 'Sito web immagine laterale';
$LANGS['custombox'] = 'Finestra personalizzata';
$LANGS['customboxtitle'] = 'Titolo Finestra personalizzata';
$LANGS['customboxcontent'] = 'Contenuto Finestra personalizzata';
$LANGS['savechanges'] = 'Salva modifiche';
$LANGS['submitimage'] = 'Invia immagine';

/* Upload page */
$LANGS['uploadpagetitle'] = 'Pubblicazione video';
$LANGS['step1of2'] = 'Passo 1 of 2';
$LANGS['step2of2'] = 'Passo 2 of 2';
$LANGS['videocategory'] = 'Categoria video';
$LANGS['tagsdesc'] = 'I tag sono parole chiave utilizzate per aiutare le persone a trovare il tuo video.<br> <i>(separati dalle virgole)</i>';
$LANGS['requiredfield'] = '(* indica un campo obbligatorio)';
$LANGS['datemapoptions'] = 'Opzioni data e mappa';
$LANGS['optional'] = '(opzionale)';
$LANGS['chooseoptions'] = 'scegli opzioni';
$LANGS['lessoptions'] = 'meno opzioni';
$LANGS['addressrecorded'] = 'Indirizzo registrato';
$LANGS['uploadcontinue'] = 'Scegli un file...';
$LANGS['file'] = 'File';
$LANGS['broadcastoptions'] = 'Opzioni di trasmissione';
$LANGS['uploadvideo'] = 'Pubblica Video';
$LANGS['needfilevideotoupload'] = 'Please select a video file to upload!';
$LANGS['aboutuploading'] = 'About uploading...';
$LANGS['uploaddesc1'] = 'I caricamenti in genere richiedono 1-5 minuti per MB su una connessione ad alta velocità e la conversione del video richiede alcuni minuti.';
$LANGS['videolimit1'] = 'Il tuo video è limitato a 100 MB - la durata massima del video è di 15 minuti.';
$LANGS['videolimit2'] = 'Il tuo video è limitato a 2GB - la durata massima del video è di 15 minuti.';
$LANGS['partnervideolimit1'] = 'Il tuo video è limitato a 100 MB - la durata massima del video è di 30 minuti.';
$LANGS['partnervideolimit2'] = 'Il tuo video è limitato a 2GB - la durata massima del video è di 30 minuti.';
$LANGS['myvideosdesc'] = 'Dopo il caricamento puoi modificare o rimuovere questo video in qualsiasi momento tramite il link "<a href="/my_videos">I miei video</a>" nella parte superiore della pagina.';
$LANGS['newuploader'] = 'Usa il nuovo caricatore di video';
$LANGS['olduploader'] = 'Usa il vecchio caricatore di video';
$LANGS['videoadded'] = 'Il tuo video è stato aggiunto con successo!';
$LANGS['videoaddeddesc'] = 'Il tuo video è attualmente in fase di elaborazione e sarà disponibile per la visualizzazione tra pochi minuti.';
$LANGS['thankyou'] = 'Grazie';
$LANGS['sharelink'] = 'Condividi il link del tuo video! Copia e incolla qui sotto:';
$LANGS['embedlink'] = 'Riproduci questo video direttamente SUL tuo sito web! Copia e incolla il seguente frammento:';
$LANGS['allrequiredinfo'] = 'Si prega di compilare tutti i campi obbligatori!';

/* Partners */
$LANGS['partnerhead'] = 'Partnership';
$LANGS['partnertitle'] = 'Collabora con BitView';
$LANGS['partnerdesc'] = "Hai ottimi video e un pubblico in crescita. Lascia che BitView ti aiuti a portarlo al livello successivo attraverso il nostro Programma Partner.";
$LANGS['applynow'] = 'Applica ora';
$LANGS['contentpartners'] = 'Partner per i contenuti';
$LANGS['partnerbenefits'] = 'Vantaggi per i partner';
$LANGS['partnerbenefitsdesc'] = 'Ci sono molti vantaggi nel diventare un partner BitView. Alcuni di essi includono:<br><br>- Branding: mettiti in risalto con il branding personalizzato, che include banner, una casella personalizzata per il tuo canale e un badge partner su tutti i tuoi video.<br><br>- Ci sono altri vantaggi in arrivo in futuro!';
$LANGS['qualificationsfaq'] = 'Qualifications & FAQ';
$LANGS['qualificationsfaqdesc'] = 'Per qualificarti per il programma BitView Partner, devi soddisfare alcuni criteri minimi:<br><br>- Crei video originali adatti allo streaming online.<br><br>- Hai >75 iscritti.<br><br> - Il tuo account non viola alcuna <a href="/guidelines">Linee guida della community.</a>';

/* Staff */
$LANGS['bvstaff'] = 'BitView Staff';
$LANGS['bvstaffdesc'] = "Questo è un elenco di persone che hanno lavorato (o lavorano ancora) su BitView - mantenendo vivo il sito - in modo che gli utenti possano esprimersi.";
$LANGS['owners'] = 'Proprietari';
$LANGS['ownerdesc'] = 'Persone che - che fatto scioccante - possiedono la cosa di BitView.';
$LANGS['coowndev'] = 'Comproprietario & Sviluppatore <br>';
$LANGS['owndev'] = 'Proprietario & <br> Sviluppatore';
$LANGS['coownserver'] = 'Comproprietario &<br>Proprietario/Sviluppatore del server';
$LANGS['modsanddevs'] = 'Moderatori e Sviluppatori';
$LANGS['modsanddevsdesc'] = 'Persone che mantengono il sito sicuro e chiaro. Hai qualche problema con il tuo account? Dovresti contattarli.';
$LANGS['moderator'] = 'Moderatore';
$LANGS['moddev'] = 'Sviluppatore &<br>Moderatore';
$LANGS['lettertitle'] = 'Lettera a tutte le persone che hanno aiutato con il sito';
$LANGS['letter'] = "Cari comproprietari, sviluppatori e moderatori di BitView,<br><br>
                 A nome dell'intero team di BitView, vorrei esprimere la mia sincera gratitudine per l'eccezionale dedizione e il duro lavoro. Come uno dei proprietari, mi riempie di immenso orgoglio assistere alla crescita e al successo della nostra piattaforma di condivisione video, e non sarebbe stato possibile senza il tuo prezioso contributo.
                 <br><br>
                 Per il resto dei comproprietari, grazie per il vostro incrollabile supporto e visione. Il tuo impegno per lo sviluppo e il miglioramento della piattaforma è stato determinante nel plasmare BitView.net nella straordinaria comunità che è oggi. La tua leadership e la tua guida strategica sono state fondamentali per affrontare le sfide e le opportunità che si sono presentate sulla nostra strada.
                 <br><br>
                 Ai nostri talentuosi sviluppatori, la tua competenza tecnica e le tue idee innovative hanno trasformato BitView in una piattaforma all'avanguardia che rappresenta perfettamente l'aspetto di YouTube ai tempi. Le tue innumerevoli ore di codifica, risoluzione dei problemi e implementazione delle funzionalità hanno migliorato l'esperienza dell'utente e reso la nostra piattaforma un centro di creatività e intrattenimento. La tua dedizione nel perfezionare la funzionalità e le prestazioni del sito è stata davvero encomiabile.
                 <br><br>
                 Ai nostri diligenti moderatori, estendo il mio più profondo apprezzamento per il mantenimento dell'integrità e della sicurezza della nostra comunità. La tua vigilanza nel far rispettare le regole e le linee guida, garantire interazioni rispettose e affrontare rapidamente eventuali problemi che si presentano è stata fondamentale per promuovere un ambiente accogliente per tutti gli utenti. I tuoi sforzi per mantenere BitView uno spazio per un coinvolgimento costruttivo e contenuti positivi sono altamente encomiabili.
                 <br><br>
                 Insieme, come un team unito, abbiamo raggiunto traguardi significativi e superato numerosi ostacoli. Il successo di BitView è una testimonianza dello sforzo collettivo e della passione che ognuno di voi mette in campo. Il tuo impegno per la nostra visione condivisa è stato davvero stimolante e sono grato di avere persone così eccezionali al mio fianco.
                 <br><br>
                 Mentre continuiamo a crescere ed evolverci, amiamo i legami che abbiamo stretto e rimaniamo fedeli ai valori che definiscono il nostro piccolo sito. Insieme, continueremo quel viaggio nostalgico e forniremo una piattaforma per i creatori per mostrare i loro talenti.
                 <br><br>
                 Ancora una volta, grazie: comproprietari, sviluppatori e moderatori, per la vostra incrollabile dedizione, competenza e incrollabile supporto. Il tuo duro lavoro non è passato inosservato e sono incredibilmente orgoglioso di far parte di questo straordinario team.
                 <br><br>
                 Continua a esprimerti,<br>
                 <3 vistafan12";
$LANGS['backtobitview'] = "Torna a BitView";

/* My Friends */
$LANGS['myfriends'] = 'I miei amici';
$LANGS['invites'] = 'Inviti';
$LANGS['myinvites'] = 'I miei inviti';
$LANGS['incominginvites'] = 'Inviti in arrivo';
$LANGS['noinvites'] = 'Non hai inviti...';
$LANGS['actions'] = 'Azioni';
$LANGS['retract'] = 'Ritiro';

/* About */
$LANGS['aboutus'] = 'Chi siamo';
$LANGS['abouttitle'] = "Cos'è BitView?";
$LANGS['aboutdesc'] = 'BitView è un modo per portare i tuoi video alle persone che ti interessano. Con BitView puoi:';
$LANGS['about1'] = 'Mostra al mondo i tuoi video preferiti';
$LANGS['about2'] = 'Registra video dei tuoi cani, gatti e altri animali domestici';
$LANGS['about3'] = 'Blog i video che fai con la tua fotocamera digitale o cellulare';
$LANGS['about4'] = 'Mostra video in modo sicuro e privato ai tuoi amici e familiari in tutto il mondo';
$LANGS['about5'] = '... e molto, molto altro!';
$LANGS['aboutsignup'] = '<a href="/signup">Registrati ora</a> e apri un account gratuito.';
$LANGS['abouthelp'] = 'Per saperne di più sul nostro servizio, consulta la nostra sezione <a href="help">Aiuto</a>.';
$LANGS['aboutmail'] = 'Non esitare a <a href="mailto:contact@vidlii.co">contattarci</a>.';

/* Community Guidelines */
$LANGS['bvguidelines'] = 'BitView Community Guidelines';
$LANGS['cgtitle1'] = 'Respect the BitView Community';
$LANGS['cgtitle2'] = "Don't Cross the Line";
$LANGS['cgtitle3'] = 'We Enforce These Guidelines';
$LANGS['cgtitle4'] = 'BitView is for the Community';
$LANGS['cgtitle5'] = 'Community Guideline Tips';
$LANGS['cgdesc1'] = "We're not asking for the kind of respect reserved for nuns, the elderly, and brain surgeons. We mean don't abuse the site. Every cool new community feature on BitView involves a certain level of trust. We trust you to be responsible, and millions of users respect that trust. Please be one of them.";
$LANGS['cgdesc2'] = "Here are some common-sense rules that will help you steer clear of trouble:";
$LANGS['cgdesc3'] = "Please take these rules seriously and take them to heart. Don't try to look for loopholes or try to lawyer your way around the guidelines — just understand them and try to respect the spirit in which they were created. If you'd like more details, check out our <a href='#tips'>Community Guideline Tips</a>.";
$LANGS['cgdesc4'] = "Okay, this one is more about us than you. BitView staff review flagged videos 24 hours a day, seven days a week to determine whether they violate our Community Guidelines. When they do, we remove them. Sometimes a video doesn’t violate our Community Guidelines, but may not be appropriate for everyone. These videos may be age-restricted. Accounts are penalized for Community Guidelines violations and serious or repeated violations can lead to account termination. If your account is terminated, you won’t be allowed to create any new accounts. For more information about how the Community Guidelines are enforced and the consequences of violating them, please visit the <a href='/help'>Help Center</a>.";
$LANGS['cgdesc5'] = "Remember that this is your community! Each and every  user of BitView makes the site what it is, so don't be afraid to dig in and get involved!";
$LANGS['cgdesc6'] = "That's it! Thanks for reading!";
$LANGS['cgdesc7'] = "Want a little more insight into the limits and exceptions in the Community Guidelines? Here are some helpful examples and tips:";
$LANGS['rule1'] = "BitView is not for pornography or sexually explicit content. If this describes your video, even if it's a video of yourself, don't post it on BitView. Also, be advised that we work closely with law enforcement and we report child exploitation.";
$LANGS['rule2'] = "Don't post videos showing bad stuff like animal abuse, drug abuse, under-age drinking and smoking, or bomb making.";
$LANGS['rule3'] = "Graphic or gratuitous violence is not allowed. If your video shows someone being physically hurt, attacked, or humiliated, don't post it.";
$LANGS['rule4'] = "BitView is not a shock site. Don't post gross-out videos of accidents, dead bodies or similar things intended to shock or disgust.";
$LANGS['rule5'] = "Respect copyright. Only upload videos that you made or that you are authorized to use. This means don't upload videos you didn't make, or use content in your videos that someone else owns the copyright to, such as music tracks, snippets of copyrighted programs, or videos made by other users, without necessary authorizations.";
$LANGS['rule6'] = "We encourage free speech and defend everyone's right to express unpopular points of view. But we don't permit hate speech (speech which attacks or demeans a group based on race or ethnic origin, religion, disability, gender, age, veteran status, and sexual orientation/gender identity). This also applies to the promotion of extremist ideologies in a positive light.";
$LANGS['rule7'] = "Things like predatory behavior, stalking, threats, harassment, intimidation, invading privacy, revealing other people’s personal information, and inciting others to commit violent acts or to violate the Terms of Use are taken very seriously. Anyone caught doing these things may be permanently banned from BitView.";
$LANGS['rule8'] = "Everyone hates spam. Don’t create misleading descriptions, tags, titles or thumbnails in order to increase views. It's not okay to post large amounts of untargeted, unwanted or repetitive content, including comments and private messages.";
$LANGS['rule9'] = "Let's keep the website safe. Don't try to brute force an account you do not own. Moreover, sharing an account's login information publicly is not allowed.";
$LANGS['rule10'] = "Multi-accounts suck. We want genuine numbers on videos and channels. Don't use more than one account to rate videos and/or comments. You are not allowed to use multiple accounts to subscribe to yourself either.";
$LANGS['rule11'] = "Did you break one of this rules and your account has been suspended? It goes without saying that evading this punishment is not accepted. Every new account that has been created by a suspended person will be automatically deleted.";
$LANGS['cglist1'] = "Have fun with the site. There's a lot to see here, and lots of folks making amazing stuff — one of them might be you! Equipment's getting cheaper and easier to use all the time, so dive in and enjoy.";
$LANGS['cglist2'] = "Let folks know what you think. Feedback's part of the experience, and when done with respect, can be a great way to make friends, share stories, and make your time on BitView richer. So leave comments, rate videos, make your own responses to videos that affect you, enter contests of interest — there's a lot going on and a lot of ways to participate.";
$LANGS['cglist3'] = "You may not like everything you see. Some of the content here may offend you — if you find that it violates our Terms of Use, then click the button that says &quot;Flag&quot; under the video you're watching to submit it for review by BitView staff. If it doesn't, then consider just clicking on something else — why waste time watching videos you don't like?";
$LANGS['thebitviewteam'] = "— The BitView Team";
$LANGS['cgcat1'] = "Sex and Nudity";
$LANGS['cgcat2'] = "Hate Speech";
$LANGS['cgcat3'] = "Shocking and Disgusting";
$LANGS['cgcat4'] = "Dangerous Illegal Acts";
$LANGS['cgcat5'] = "Children";
$LANGS['cgcat6'] = "Copyright";
$LANGS['cgcat7'] = "Privacy";
$LANGS['cgcat8'] = "Harassment";
$LANGS['cgcat9'] = "Impersonation";
$LANGS['cgcat10'] = "Threats";
$LANGS['cgcat1desc'] = "Most nudity is not allowed, particularly if it is in a sexual context. Generally if a video is intended to be sexually provocative, it is less likely to be acceptable for BitView. There are exceptions for some educational, documentary and scientific content, but only if that is the sole purpose of the video and it is not gratuitously graphic. For example, a documentary on breast cancer would be appropriate, but posting clips out of context from the documentary might not be. This also applies for animated content.";
$LANGS['cgcat2desc'] = 'Hate speech" refers to content that promotes hatred against members of a protected group. For instance, racist or sexist content may be considered hate speech. Sometimes there is a fine line between what is and what is not considered hate speech. For instance, it is generally okay to criticize a nation, but not okay to make insulting generalizations about people of a particular nationality.';
$LANGS['cgcat3desc'] = "The world is a dangerous place. Sometimes people do get hurt and it’s inevitable that these events may be documented on BitView. However, it’s not okay to post violent or gory content that’s primarily intended to be shocking, sensational or disrespectful. If a video is particularly graphic or disturbing, it should be balanced with additional context and information. For instance, including a clip from a slaughter house in a video on factory farming may be appropriate. However, stringing together unrelated and gruesome clips of animals being slaughtered in a video may be considered gratuitous if its purpose is to shock rather than illustrate.";
$LANGS['cgcat4desc'] = "While it might not seem fair to say you can’t show something because of what viewers theoretically might do in response, we draw the line at content that’s intended to incite violence or encourage dangerous, illegal activities that have an inherent risk of serious physical harm or death. This means not posting videos on things like instructional bomb making, ninja assassin training, sniper attacks, videos that train terrorists, or tips on illegal street racing. Any depictions like these should be educational or documentary and shouldn’t be designed to help or encourage others to imitate them.";
$LANGS['cgcat5desc'] = "Videos involving children (anyone under the age of 18) are particularly sensitive. Videos containing children should never be sexually suggestive or violent. Please be cautious when posting something involving a child. If you’re sharing a private moment or home movie, consider making it a private video so that only your family and friends can see it. Moreover, by agreeing to the <a href='/terms'>Terms of Use</a>, you affirm that you are over the age of 13. Accounts belonging to underage users will be suspended.";
$LANGS['cgcat6desc'] = "When you create something original, you own the copyright for it. Likewise, when other people create content, they may have a copyright to it. As a creative community, it’s essential that everyone on BitView respect the copyrights of others. If you’re not sure if something will violate someone’s copyright, the safest thing to do is to create something completely original, with images and audio you’ve created. If it’s all yours you never have to worry about copyright — you own it. If you’ve recorded something from a DVD, videotaped your TV screen, or downloaded a video online, don’t post it unless you have permission.";
$LANGS['cgcat7desc'] = "If a video you've recorded features people who are readily identifiable and who haven't consented to being filmed, there's a chance they'll file a privacy complaint seeking its removal. We'll notify you if that happens and give you a chance to edit and re-upload your video before we act on the complaint. If we do remove your video for privacy reasons, don't upload another version featuring the same people. Chances are those people will file another privacy complaint or report you for harassment. Don't post other people's personal information, including phone numbers, addresses, credit card numbers, and government IDs. We're serious about keeping our users safe and suspend accounts that violate people's privacy.";
$LANGS['cgcat8desc'] = "It comes down to respect. BitView is all about sharing and interacting with the community in respectful ways. If you're not sure whether a video or comment you've made crosses the line, follow a simple rule of thumb: if you wouldn't say it to someone's face, don't say it on BitView. And if you're looking to attack, harass, demean, or impersonate others, go elsewhere.";
$LANGS['cgcat9desc'] = "Impersonating another user by copying someone's exact channel layout, using a similar username, or posing as that person in comments, emails or videos is considered harassment. If you want to keep your account, stay away from participating in any form of impersonation or harassing activity on the site.";
$LANGS['cgcat10desc'] = "Users shouldn't feel threatened when they're on BitView. Period. Don't leave threatening comments on other people's videos.";

/* Contests */
$LANGS['monthlycontest'] = "Concorso mensile";
$LANGS['monthlycontestschedule'] = "Programma Concorso Video Mensile";
$LANGS['whatisit'] = "Che cos'è?";
$LANGS['thismonthcontest'] = "Questo mese";
$LANGS['lastmonthwinners'] = "Vincitori del mese scorso";
$LANGS['howtoenter'] = "Come posso entrare?";
$LANGS['whowins'] = "Chi vince?";
$LANGS['whowinsdesc'] = "Il vincitore sarà scelto alla fine del mese dallo staff di BitView.";
$LANGS['theprize'] = "Il Premio?";
$LANGS['theprizedesc'] = "Fama, fortuna e l'invidia di tutti.";
$LANGS['contestsuggestion'] = 'Hai un suggerimento per un concorso video mensile? <a href="mailto:contact@vidlii.co">Raccontacelo</a> per favore.';

/* Help */
$LANGS['q1'] = 'D: Come posso condividere i miei video e collegarli dal mio sito web?';
$LANGS['a1'] = 'A: <a href="/sharing">Come condividere e collegare i tuoi video</a>';
$LANGS['q2'] = 'D: Che tipo di video posso caricare?';
$LANGS['a2'] = 'A: Puoi caricare qualsiasi tipo di video personale che desideri condividere con il mondo. Non sono consentite scene di nudo e il tuo video deve essere appropriato per tutti i tipi di pubblico.
<br/>
<br/>
Tuttavia, questo lascia ancora molto spazio alla creatività!! Possiedi un <a href="results?search=dog&t=Search+Videos">cane</a> o un <a href="/results?search=cat&t=Search+Videos">gatto</a>? Sei andato in vacanza in <a href="/results?search=mexico&t=Search+Videos">Messico</a>? Vivi nei <a href="/results?search=netherlands&t=Search+Videos">Paesi Bassi</a>?
<br/>
<br/>
Questi sono solo alcuni esempi dei video che i nostri utenti stanno caricando. Alla fine, ti conosci meglio di te stesso. Cosa <i>vorresti</i> catturare su video?';
$LANGS['q3'] = 'D: Quanto può durare il mio video?';
$LANGS['a3'] = 'A: Il video deve avere una durata inferiore a 15 minuti e una dimensione inferiore a 2 GB (100 MB se utilizzi un vecchio browser).';
$LANGS['q4'] = 'D: Quali formati di file video posso caricare?';
$LANGS['a4'] = 'R: BitView accetta file video dalla maggior parte delle fotocamere digitali e dai cellulari nei formati .WMV, .AVI, .MOV, .MPG, .MP4.';
$LANGS['q5'] = 'D: Come posso migliorare i miei video?';
$LANGS['a5'] = 'R: Ti invitiamo a modificare i tuoi video con software come <a href="https://windows-movie-maker-vista.en.softonic.com/" target="_blank ">Windows Movie Maker</a> (incluso in ogni installazione di Windows) o <a href="https://www.apple.com/lae/imovie/" target="_blank">Apple iMovie</a> . Usando questi programmi puoi modificare facilmente i tuoi video, aggiungere colonne sonore, ecc.';
$LANGS['q6'] = 'D: Conservo i diritti d\'autore e altri diritti legali sui miei video?';
$LANGS['a6'] = 'R: Sì. Conservi tutti i diritti sui tuoi contenuti. BitView non si assume alcun copyright sul tuo materiale.';
$LANGS['q7'] = 'D: Qual è la tua politica sulla violazione del copyright?';
$LANGS['a7'] = "R: BitView rispetta i diritti dei detentori del copyright e degli editori e accetta caricamenti video solo da persone che detengono tutti i diritti necessari sul materiale caricato. La nostra politica è di rispondere a qualsiasi notifica di presunta violazione che rispettare il Digital Millennium Copyright Act (DMCA). Se riceviamo un avviso o altrimenti abbiamo motivo di ritenere che il contenuto inviato violi il copyright di un'altra parte, il tuo account potrebbe essere chiuso e il video rimosso da BitView.";
$LANGS['q8'] = 'D: Come posso segnalare una violazione del copyright?';
$LANGS['a8'] = 'R: Se ritieni che qualcun altro abbia caricato il tuo contenuto protetto da copyright senza il tuo permesso, ti invitiamo a contattare quella persona per risolvere eventuali divergenze direttamente con lei. Puoi anche contattare il nostro team di supporto utilizzando questa <a href="mailto:contact@vidlii.co">email</a>.';
$LANGS['q9'] = 'D: Cosa succede se sono stato falsamente accusato di violazione del copyright?';
$LANGS['a9'] = "R: Ti faremo sapere se riceviamo un reclamo per violazione del copyright su uno qualsiasi dei tuoi contenuti video ospitati su BitView. Ti daremo l'opportunità di rispondere in modo appropriato.";
$LANGS['q10'] = 'D: Cosa stai facendo per evitare che i contenuti che violano le tue policy vengano visualizzati in BitView?';
$LANGS['a10'] = 'R: Effettuiamo una revisione preliminare sui video caricati attraverso un processo sia manuale che automatizzato. Sebbene facciamo del nostro meglio per rilevare e rimuovere i video che violano le nostre linee guida sulle norme, il nostro processo di revisione si concentra principalmente sulla rimozione di contenuti per adulti o evidenti violazioni del copyright e non è infallibile. Tuttavia, incoraggiamo i nostri spettatori a informarci quando scoprono violazioni delle norme o problemi di copyright: abbiamo un processo per esaminare le violazioni delle norme segnalate e rispondere alle violazioni del copyright segnalate ai sensi del Digital Millennium Copyright Act.';
$LANGS['q11'] = 'D: Hai un server Discord o Twitter?';
$LANGS['a11'] = 'Sì! In realtà abbiamo un server Discord e Twitter. Puoi unirti al server Discord facendo clic <a href="https://discord.gg/wgGaqCmwuQ">qui</a> e seguici su Twitter <a href="https://twitter.com/bitview_ ">qui</a>.';
$LANGS['q12'] = "D: Sto usando un vecchio browser mentre sono su BitView e quindi non posso guardare i video. Cosa posso fare?";
$LANGS['activate'] = 'Attiva';
$LANGS['deactivate'] = 'Disattiva';
$LANGS['flashdisclaimer'] = "<b>Nota:</b> Flash Player di BitView viene offerto come opzione di compatibilità. Se il tuo browser supporta il player HTML5 di BitView non dovresti abilitare questa opzione.";
/* BitView on your site */
$LANGS['bvsitetitle1'] = "The Basics";
$LANGS['bvsitetitle2'] = "APIs and User Engagement";
$LANGS['bvsitedesc1'] = 'Whatever presence you have on the Internet—a large website, a blog, a social network page, or pretty much anything else—there are many ways to integrate BitView into it. From simple video embeds to our full-powered APIs, you can integrate video at all levels of technical expertise.';
$LANGS['bvsitedesc2'] = 'Bringing BitView to your site is more than just adding some of the thousands of videos available on BitView. It keeps your visitors interested and allows self-expression and interaction with one of their favorite services. And it brings your site, blog, or page into the BitView video community — an international network of users, creators, and sites connected through a huge collection of online videos.';
$LANGS['bvsitedesc3'] = "We've highlighted some typical ways of integrating video content below — just click the arrow next to the question to get the answer. If you have any questions or suggestions, or projects that you would like us to know about, please leave the questions in our <a href='https://discord.gg/wgGaqCmwuQ'>Discord server</a>.";
$LANGS['bvsitesectiontitle1'] = "How do I add a video to my blog or web page?";
$LANGS['bvsitesectiontitle2'] = "How do I add a video to my social network page?";
$LANGS['bvsitesectiontitle3'] = "I work for a large blog/web company. How can video increase user engagement on our site?";
$LANGS['bvsitesectiontitle4'] = "We have a site and we have our own videos. Can we post these on our site using BitView?";
$LANGS['bvsitesection1desc1'] = "You'll need to edit the HTML of your blog entry or page—this should be relatively straightforward. In Blogger, for example, just click the &quot;Edit HTML&quot; tab.";
$LANGS['bvsitesection1desc2'] = "Next, go to the video that you want, and look for the 'Embed' box in the &quot;About This Video&quot; section. Copying the HTML code that's there into your website will create an embedded player; the video will play within your site when the user clicks on the 'Play' button.";
$LANGS['bvsitesection1desc3'] = "You can resize the player by editing the <em>object width=&quot;425&quot;</em> and  <em>height=&quot;350&quot;</em> fields at both the beginning and end of the embedded player code. Make sure that the sizes you choose have the same ratio as the default numbers, so that the video doesn't get stretched—just multiply the width by 0.8235 to get the height.";
$LANGS['bvsitesection2desc1'] = "Adding videos to your profiles on social networks like SpaceHey is a great way to share your videos or favorites with friends. Or, if you're promoting something (like your band) on SpaceHey, videos will help attract visitors to your page, who can then then share the link with their friends. The social network sites have similar ways to add videos, so we'll use SpaceHey as an example.";
$LANGS['bvsitesection2desc2'] = 'Sign in to your SpaceHey profile, then click the "Edit Profile" button.';
$LANGS['bvsitesection2desc3'] = "Next, go to the video that you want, and look for the 'Embed' box in the &quot;About This Video&quot; section. Copying the HTML code that's there into your website will create an embedded player.";
$LANGS['bvsitesection2desc4'] = "You can resize the player by editing the object width=&quot;425&quot; and height=&quot;350&quot; fields at both the beginning and end of the embedded player code. Make sure that the sizes you choose have the same ratio as the default numbers, so that the video doesn't get stretched—just multiply the width by 0.8235 to get the height.";
$LANGS['bvsitesection2desc5'] = 'Click "Preview", and then "Submit".';
$LANGS['bvsitesection3desc1'] = "Video is much more engaging than text. It draws more users and keeps them on your site for longer. BitView has a large repository of Internet video content along with the search, playback and API tools to make adding video easier for you.";
$LANGS['bvsitesection3desc2'] = "When looking to increase engagement, try using video as a way to start discussion or make a commentary by creating more context for your users:";
$LANGS['bvsitesection4desc1'] = "It's very easy to build out your own site with your own videos for free. All you need to do is upload the videos to BitView first. There's no charge and we will cover hosting and streaming costs. It's not only a great way to increase user engagement on your site, but it's very easy, and free as well.";
$LANGS['bvsitesection4desc2'] = "Once you have uploaded the videos you can pull them back to the site:";
$LANGS['bvsitesection4desc3'] = "<b>Embed videos one-by-one:</b> Go to the video that you want to put on your website, and look for the 'Embed' box next to the video player. Copying the HTML code that's there into your blog will create an embedded player; the video will play within your site when the user clicks on the 'Play' button.";

/* RSS Feeds */
$LANGS['rsstitle1'] = "What Are RSS Feeds?";
$LANGS['rsstitle2'] = "How to Access RSS Feeds";
$LANGS['rsstitle3'] = "How to Subscribe to BitView's RSS Feeds";
$LANGS['rssdesc1'] = "Really Simple Syndication (RSS) is an XML-based format used for content distribution and syndication. Subscribing to RSS feeds allows you to receive custom, up-to-date information from your favorite online content sources without having to regularly check the site for updates.";
$LANGS['rssdesc2'] = "News readers that display RSS feeds from the websites you specify—they check the RSS feeds you have subscribed to and display new items from each feed. You can download news reader applications for your computer, and here are also many popular web-based news readers available, such as Google Reader and Bloglines. Some web browsers and email applications also have RSS capabilities built in.";
$LANGS['rssdesc3'] = "You can see a list of many available news readers at <a href='http://en.wikipedia.org/wiki/List_of_feed_aggregators'>Wikipedia</a>."; //Use your language's Wikipedia article if possible
$LANGS['rssdesc4'] = "BitView offers several RSS feeds for categorized groups of videos (such as recently uploaded, top viewed etc) as well as customized feeds for users and tags.";
$LANGS['rssdesc5'] = "To subscribe to categorized groups of videos, simply go to the category you want (for example, &quot;<a href='/browse'>Most Viewed - Today</a>&quot;). Then click on the orange 'RSS' button. This should trigger your chosen news reader to add the subscription.";
$LANGS['rssdesc6'] = "If your browser has RSS capabilities, then you can add the feed there. The command varies between browsers, but can usually be found on the 'File' or 'Bookmarks' menus, and will be called something like &quot;Subscribe to this page&quot; or &quot;New Live Bookmark&quot;.";
$LANGS['rssthispage'] = "RSS this page";

/* TestView */
$LANGS['testviewdesc'] = "Welcome to TestView, our ideas incubator. This is where BitView engineers and developers test out recipes and concoctions that aren't quite fully baked and invite you to tell us how they're coming along.";
$LANGS['flashvideo'] = "Flash Video";
$LANGS['flashvideodesc'] = "Your browser doesn't support HTML5 video? Don't worry! Try out our Flash player.";
$LANGS['feather'] = "Feather";
$LANGS['featherdesc'] = "View BitView videos on a super-low latency page.";
$LANGS['tryitout'] = "Try it out";
$LANGS['disabletest'] = "Disable";

/* Footer */
$LANGS['youraccount'] = 'Il tuo Account';
$LANGS['inbox'] = 'Posta in arrivo';
$LANGS['footmore'] = 'di più...';
$LANGS['helpinfo'] = 'Aiuto & Informazioni';
$LANGS['helpcenter'] = 'Centro Aiuto';
$LANGS['ourtwitter'] = 'Il nostro Twitter';
$LANGS['ourdiscord'] = 'Il nostro Discord';
$LANGS['guidelines'] = 'Linee guida della comunità';
$LANGS['partnerships'] = 'Programma Partner';
$LANGS['terms'] = 'Termini di Utilizzo';
$LANGS['privacypolicy'] = 'Informativa sulla privacy';
$LANGS['currentlanguage'] = 'Lingua corrente';
$LANGS['showlanguages'] = 'Mostra lingue';
$LANGS['setlanguagepref'] = 'Imposta la tua lingua preferita';
$LANGS['programs'] = 'Programs';
$LANGS['developers'] = 'Developers';
$LANGS['bitviewblog'] = 'BitView Blog';
$LANGS['policy'] = 'Policy';
$LANGS['discover'] = 'Discover';
$LANGS['bvphone'] = 'BitView on Your Phone';
$LANGS['bvsite'] = 'BitView on Your Site';
$LANGS['bvrss'] = 'BitView RSS Feeds';
$LANGS['mobile'] = 'Mobile';
?>