<script>
	// This is called with the results from from FB.getLoginStatus().
	function statusChangeCallback(response) {
		console.log('statusChangeCallback');
		console.log(response);
		// The response object is returned with a status field that lets the app know the current login status of the person.
		// Full docs on the response object can be found in the documentation for FB.getLoginStatus().
		if (response.status === 'connected') {
		// Logged into your app and Facebook.
		fbLoginAction();
		} else if (response.status === 'not_authorized') {
		// The person is logged into Facebook, but not your app.
		//document.getElementById('status').innerHTML = 'Please log into this app.';
		} else {
		// The person is not logged into Facebook, so we're not sure if
		// they are logged into this app or not.
		//document.getElementById('status').innerHTML = 'Please log into Facebook.';
		}
	}

	// Here we run a very simple test of the Graph API after login is
	// successful.See statusChangeCallback() for when this call is made.
	function fbLoginAction() {
		//console.log('Welcome! Fetching your information.... ');
		FB.api('/me', function(response) {
			console.log(response);
			console.log('Successful login for: ' + response.id);
			// TODO: funzione per precompilare i dati della form
			// open_fb_signup(response);
		});
	}

	/*
	 */

	// Funzione per aprire il popup login with facesuk
	function login_with_fb() {
		FB.login(function(response) {
			// handle the response
			checkLoginState();
		},
		{scope: 'public_profile,email'}
		);
	}

	$(document).ready(function(){
		$(document).on("click", ".facebookLoginButton", function(){
			// apro popup per finestra di facebook
			login_with_fb();

			return false;
		});
	});
/*
Beauty and Pics: solo seconda l'edizione, ma molte le novità.

Dopo il successo della prima breve edizione, che ha visto una classifica animata a suon
di punti, ritorna Beauty and Pics, il concorso di bellezza aperto a tutti, in veste 2016.
Tra le novità più interessanti, troviamo il nuovo sistema di votazione basato su diversi
aspetti della persona. Ora i punteggi verranno ripartiti secondo determinati
criteri: sguardo_ammaliante, troppo_stile, o che classe sono solo alcune delle nuove
valutazioni che è possibile esprimere.
Emozionanti scontri daranno vita ai trend del momento, scopri
chi ha lo sguardo e il sorriso più affascinanti, oppure chi
meglio rappresenta l'idea di "stile".
Anche la "hall of fame", ovvero una classifica dei 100 migliori concorrenti, 
mantenuta nel tempo e liberamente consultabile,
permette di vedere le istantanee del concorso nei vari anni.
Epiche battaglie stanno per giungere, ma alla fine solo uno riuscirà ad ottenere 
l'ambito titolo di Miss/Mister Beauty and Pics...chi sarà?
L'apertura è alle porte (eheh), per partecipare vai sito di riferimento e registrati, 
devi solo essere maggiorenne e aver voglia di divertirti.


/*
Beauty and Pics: a breve il nuovo start di Beauty and Pics,
il concorso di bellezza online più apprezzato e discusso dal pubblico.
Si riconferma l'appuntamento annuale che apre le porte a Beauty and Pics, 11 mesi di battaglia
a suon di punti per incoronare il più bello e la più bella del web.
"Ora grazie al nuovo sistema di votazioni, possiamo avere classifiche più
interessanti e accurate, siamo molto soddisfatti del lavoro fatto", ci dicono i ragazzi del team.
E forse sta proprio nelle nuove votazioni la novità più interessante di questa
nuova edizione. Esse infatti permetteranno di votare sulla base di determinati criteri, facendo
evincere maggiormente il lato più apprezzato di una persona: impeccabile, persona_solare 
e sguardo_ammaliante, sono solo alcuni criteri di valutazione disponibili.
Un'altra importante novità è la cosidetta "hall of fame", una classifica
annuale dei 100 migliori concorrenti, che crea in modo implicito una sorta 
di annuario della moda liberamente consultabile in qualsiasi momento.
Le iscrizioni sono aperte, per provare a scalare la classifica basta andare sul
sito di riferimento e registrarsi, basta solo essere maggiorenni.




</script>
