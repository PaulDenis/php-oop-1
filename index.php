<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
    class Movie {
        // variabili / attributi
        public $titolo;
        public $trama;
        public $genere;
        public $anno_uscita;
        public $prezzo_noleggio;
        public $prezzo_scontato;

        function __construct($titolo, $trama, $prezzo_noleggio, $genere = '', $anno_uscita = '') {
            $this -> titolo = $titolo;
            $this -> trama = $trama;
            $this -> genere = $genere;
            $this -> anno_uscita = $anno_uscita;
            $this -> prezzo_noleggio = $prezzo_noleggio;
        }

        public function setPrezzo($eta) {
            if ($eta > 50 || $eta < 15) {
                $this -> prezzo_scontato = $this -> prezzo_noleggio * 0.25;
            } else {
                $this -> prezzo_scontato = $this -> prezzo_noleggio;
            };
        }
        public function getPrezzo() {
            return $this -> prezzo_scontato;
        }
    }

    $ironman_trama = 'Tony Stark, who has inherited the defense contractor Stark Industries from his late father Howard Stark, is in war-torn Afghanistan with his friend and military liaison, Lieutenant colonel James Rhodes, to demonstrate the new "Jericho" missile. After the demonstration, the convoy is ambushed and Stark is critically wounded by a missile used by the attackers: one of his company&#39;s own. He is captured and imprisoned in a cave by a terrorist group called the Ten Rings. Yinsen, a fellow captive doctor, implants an electromagnet into Stark&#39;s chest to keep the shrapnel shards that wounded him from reaching his heart and killing him. Ten Rings leader Raza offers Stark freedom in exchange for building a Jericho missile for the group, but he and Yinsen know that Raza will not keep his word.

    Stark and Yinsen secretly build a small, powerful electric generator called an arc reactor to power Stark&#39;s electromagnet and a prototype suit of powered armor to aid in their escape. Although they keep the suit hidden almost to completion, the Ten Rings discover their hostages&#39; intentions and attack the workshop. Yinsen sacrifices himself to divert them while the suit powers up. The armored Stark battles his way out of the cave to find the dying Yinsen, then burns the Ten Rings&#39; weapons in anger and flies away, crashing in the desert and destroying the suit. After being rescued by Rhodes, Stark returns home and announces that his company will cease manufacturing weapons. Obadiah Stane, his father&#39;s old partner and the company&#39;s manager, advises Stark that this may ruin Stark Industries and his father&#39;s legacy. In his home workshop, Stark builds a sleeker, more powerful version of his improvised armor suit as well as a more powerful arc reactor for it and his chest. Personal assistant Pepper Potts places the original reactor inside a small glass showcase. Though Stane requests details, a suspicious Stark decides to keep his work to himself.
    
    At a charity event held by Stark Industries, reporter Christine Everhart informs Stark that his company&#39;s weapons were recently delivered to the Ten Rings and are being used to attack Yinsen&#39;s home village, Gulmira. Stark dons his new armor and flies to Afghanistan, where he saves the villagers. While flying home, Stark is attacked by two F-22 Raptors. He reveals his secret identity to Rhodes over the phone in an attempt to end the attack. Meanwhile, the Ten Rings gather the pieces of Stark&#39;s prototype suit and meet with Stane, who has been trafficking arms to the Ten Rings and has staged a coup to replace Stark as Stark Industries&#39; CEO by hiring the Ten Rings to kill him. He subdues Raza and has the rest of the group killed. Stane has a massive new suit reverse engineered from the wreckage. Seeking to track his company&#39;s illegal shipments, Stark sends Potts to hack into its database. She discovers that Stane hired the Ten Rings to kill Stark, but the group reneged when they realized they had a direct route to Stark&#39;s weapons. Potts meets with Agent Phil Coulson of S.H.I.E.L.D., an intelligence agency, to inform him of Stane&#39;s activities.
    
    Stane&#39;s scientists cannot duplicate Stark&#39;s miniaturized arc reactor, so Stane ambushes Stark at his home and steals the one from his chest. Stark manages to get to his original reactor to replace it before dying. Potts and several S.H.I.E.L.D. agents attempt to arrest Stane, but he dons his suit and attacks them. Stark fights Stane but is outmatched without his new reactor to run his suit at full capacity. The fight carries Stark and Stane to the top of the Stark Industries building, and Stark instructs Potts to overload the large arc reactor powering the building. This unleashes a massive electrical surge that causes Stane and his armor to fall into the exploding reactor, killing him. The next day, at a press conference, Stark publicly admits to being the superhero the press has dubbed "Iron Man".
    
    In a post-credits scene, S.H.I.E.L.D. Director Nick Fury visits Stark at home, telling him that Iron Man is not "the only superhero in the world", and explaining that he wants to discuss the "Avenger Initiative". ';

    $spiderman_trama = 'In Ixtenco, Mexico, Nick Fury and Maria Hill investigate an unnatural storm and encounter the Earth Elemental. Quentin Beck, a super-powered individual, arrives to defeat the creature. Beck subsequently defeats the Elemental and is recruited by Fury and Hill. In New York City, the Midtown School of Science and Technology completes its year, which was restarted to accommodate the students who previously disintegrated five years earlier as a result of Thanos&#39; actions.[N 1] They had reappeared un-aged, thanks to the actions of the Avengers.[N 2] The school organizes a two-week summer field trip to Europe, where Peter Parker—who is still mourning the death of his mentor Tony Stark—plans to reveal to classmate MJ his attraction to her. Happy Hogan informs Parker that Fury intends to contact him, but Parker ignores Fury&#39;s phone call.

    Parker and his classmates travel to Venice, Italy, where the Water Elemental attacks. Parker helps protect his classmates, while Beck arrives and defeats the creature. Fury meets with Parker and gives him Stark&#39;s glasses, which were meant for his successor. The glasses enable him to communicate with and take command of the artificial intelligence E.D.I.T.H., which has access to Stark Industries&#39; databases and commands a large orbital weapons supply. Beck claims to hail from an alternate reality within the Multiverse, where the four Elementals killed his family and destroyed his civilization. With only the Fire Elemental left to destroy, Beck predicts it will attack Prague. Parker declines Fury&#39;s invitation to join the fight and returns to his class trip.
    
    Fury secretly changes the class&#39;s itinerary to divert the students to Prague. There, Parker is forced to help Beck fight the Fire Elemental to again protect his friends. Beck manages to destroy the creature with Parker&#39;s help. Fury and Hill invite Parker and Beck to Berlin to discuss the formation of a new superhero team, but Parker decides that Beck should go alone and transfers control of E.D.I.T.H. to him. Once Parker leaves, Beck celebrates alongside ex-Stark Industries employees, with whom he had been working to masquerade as a superhero. Beck, who was fired from his position as Stark&#39;s holographic-illusions specialist for his unstable nature, used advanced projectors to simulate his powers and the Elementals, and now hopes to use E.D.I.T.H.&#39;s orbital weaponized drones to increase the scale of his illusions and fraudulently establish himself as an Avenger-level hero.
    
    After MJ tells Parker she knows he is Spider-Man, they discover that a piece of debris she retrieved during the battle with the Fire Elemental is a projector which shows the Air Elemental, leading them to realize Beck&#39;s deception. Parker travels to Berlin to warn Fury, only to be tricked by Beck with an illusory Fury into revealing the names of his friends who know about Beck&#39;s plan. Left for dead by Beck, Parker contacts Hogan, who flies him to London, where his classmates are. Beck uses E.D.I.T.H. to orchestrate a fusion of all the Elementals, as a cover to kill Parker&#39;s friends. Parker is able to disrupt the illusions, so Beck attacks him with drones. Parker regains control of E.D.I.T.H. and defeats Beck, who is hit by a misfired gunshot from one of the drones; before he dies, Beck tells one of his associates to retrieve data from the drones. After returning to New York City, Parker begins a relationship with MJ.
    
    In a mid-credits scene, J. Jonah Jameson of TheDailyBugle.net broadcasts doctored footage of the London incident in which Beck frames Spider-Man for the drone attack and his death, exposing Spider-Man&#39;s secret identity to the world, much to Parker&#39;s shock. In a post-credits scene, Fury and Hill are revealed to be the Skrulls Talos and Soren in disguise, under orders from the real Fury while he is away commanding a Skrull spaceship. ';

    $iron_man = new Movie('Iron Man', $ironman_trama, 20.00, 'azione', 2008);
    $iron_man -> setPrezzo(73);
    var_dump($iron_man);

    $spider_man = new Movie('Spider-Man: far from home',$spiderman_trama, 25.00, 'azione', 2019);
    $spider_man -> setPrezzo(30);
    var_dump($spider_man)

; ?>
