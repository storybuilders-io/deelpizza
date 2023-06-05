# A donator can donate a certain amount of money via an e-mail.
# A donator is attached to one or multiple donations (based upon email and every 10 euros).
# A donator can belong to a or many pizzas (hasmany through donations table).
# A donator can donate anonymously.
# All donations belong to a transaction.
# A transaction belongs to a donator and tells us how many percentage the donator owns.
# A pizza has information about its price.
# The admins can 'shoot' pizzas into the sky to avoid unlimited stock sellings.
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
