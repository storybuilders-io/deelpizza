# A donator can donate a certain amount of money via an e-mail.
# A donator is attached to one or multiple donations (based upon email and every 10 euros).
# A donator can belong to a or many pizzas (hasmany through donations table).
# A donator can donate anonymously.
# All donations belong to a transaction.
# A transaction belongs to a donator and tells us how many percentage the donator owns.
# A pizza has information about its price.
# A donation has a collected_money field, and needed_money field.
# A donator is part of a larger donation (a donation belongs to multiple donators).
# All donators are informed upon the status of the pizza is set to 'paid'.
# All donators are informed upon the next step (or screen is rerendered if the user is still on the page).
# A teamleader can register and generate its own url and set up its own team.
# A team can invite new members to pay and collect the money for a pizza.
# A receiver can post a message to thank all the donators for its pizza.
# A receiver can verify its email to join the system.
# A receiver can claim a pizza (we will add all people to the back of the queue).
# If there is any money available in the bucket we'll allow a free pizza, otherwise we'll keep the
# person in the queue, we transfer the money in case of a succesfull transaction to the pizzeria and if a limit is set we'll deduct a pizza.
# A person can claim a pizza live; a QR code will be generated.
# A pizzeria can sign up using their mail-address and a simple pincode.
# A pizzeria can claim a QR code and check if its legit, a pizza will then be made in the store.
# A donator can join a certain team.
# A donator/team is shown on the leaderboard.
# The latest transactions are shown on the site.

---

Centrale doel is mensen tot actie aanzetten. En een Actie = Doel + Hindernis
* Geef de donateur een doel die zij moeten nastreven
* Verlaag de hindernis om dat doel te bereiken

Als donateur wil ik het doel begrijpen waar ik aan bijdraag
Als donateur wil ik me gemotiveerd voelen om bij te dragen
Als donateur wil ik gemakkelijk kunnen bijdragen (wat is gemakkelijk)
Als donateur wil ik dat de drempel om bij te dragen laag genoeg is
Als donateur wil ik weten hoe het werkt
Als donateur wil ik zelf een donatiebedrag kunnen kiezen
Als donateur wil ik verschillende manieren hebben om te doneren, zoals eenmalige donaties, maandelijkse donaties of het sponsoren van een specifiek project.
Als donateur wil ik kunnen zien welke impact mijn donatie heeft gehad op het leven van de ontvangers (bijv. persoonlijke verhalen, getuigenissen, statistieken).
Als donateur wil ik weten dat mijn geld niet misbruikt wordt en goed besteed wordt (transparantie)
Als donateur wil ik beloond worden of erkenning krijgen voor mijn donaties, bijvoorbeeld via een virtuele bedankkaart, een persoonlijk bedankbericht of een speciale vermelding op de website.
Als donateur wil ik updates ontvangen over de voortgang van het initiatief en nieuwe ontwikkelingen, zodat ik betrokken blijf en weet hoe mijn bijdrage wordt benut.
Als donateur wil ik misschien ook wel supporter worden van dit goede doel en de boodschap helpen verspreiden

Als supporter wil ik de boodschap helpen verspreiden
Als supporter wil ik tools en bronnen krijgen om het initiatief te promoten, zoals social media-afbeeldingen, sjablonen voor berichten en suggesties voor het betrekken van mijn netwerk.
Als supporter wil ik zien wat mijn impact is van het verspreiden van de boodschap - ik wil zien hoeveel mensen uiteindelijk via mij hebben gedoneerd (een "pizzamida schema" ipv een piramide schema)

Als ontvanger wil ik weten of ik in aanmerking kom voor een pizza
Als ontvanger wil ik een eenvoudig proces hebben om mijn pizza te bestellen, bijvoorbeeld via een online formulier of telefoonnummer, zodat het voor mij toegankelijk is.
Als ontvanger wil ik zorgen dat ik voor de pizza's kan betalen
Als ontvanger wil ik kunnen delen hoe een ontvangen pizza mijn dag heeft veranderd, zodat anderen kunnen zien welke impact hun donaties hebben.
Als ontvanger wil ik een pizza claimen namens een buurt.

Als pizzeria wil ik laten zien dat we meedoen met dit goede doel.
Als pizzeria wil ik mijn betrokkenheid bij het initiatief duidelijk kunnen communiceren op de website
Als pizzeria wil ik laten zien welke pizza's je kunt bestellen.
Als pizzeria wil ik een soepel proces hebben om de vergoeding voor de geleverde pizza's te ontvangen, bijvoorbeeld via automatische betalingen of facturering.

Als developer wil ik duidelijke documentatie en instructies hebben om bij te dragen aan de ontwikkeling van de website, zoals een open-source repository.

Als gebruiker van de website wil ik een gebruiksvriendelijk feedbackmechanisme hebben om suggesties te kunnen indienen en verbeteringen voor te stellen, zodat ik actief kan bijdragen aan de groei van het initiatief.
