-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Nov 29, 2022 at 08:58 AM
-- Server version: 10.8.4-MariaDB-1:10.8.4+maria~ubu2204
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sae301`
--

-- --------------------------------------------------------

--
-- Table structure for table `manif`
--

CREATE TABLE `manif` (
  `id` int(11) NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `affiche` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descript` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manif`
--

INSERT INTO `manif` (`id`, `genre`, `titre`, `affiche`, `descript`, `casting`, `prix`, `date`, `horaire`) VALUES
(1, 'Théâtre', 'Revoir Lascaux', 'https://www.francebillet.com/static/0/visuel/600/503/REVOIR-LASCAUX_5031161628006304358.jpg', 'Pour ces quatre enfants, ce fut le plus beau jour de leur vie : découvrir en 1940 une des plus importantes grottes préhistoriques, peuplée de peintures de cerfs, de chevaux et de vaches. Dans Revoir Lascaux, la chorégraphe Gaëlle Bourges raconte avec quatre performers, véritables faiseurs d\'images, un monde d\'ombres et d\'apparitions.', 'Gaëlle Bourges', '12€', '06/12/2022 au 07/12/2022', '20h00'),
(2, 'Théâtre', 'Denise Jardinière', 'https://www.legrandpointvirgule.com/wp-content/uploads/cache/images/DENISE-JARNIERE-scaled/DENISE-JARNIERE-scaled-2980486032.jpg', 'Une étrange gouvernante accueille les convives et rien ne se passe comme prévu : alors que l\'arrivée de la maîtresse de maison est imminente, voilà que le fils chéri de Madame est pris d\'une insomnie. Elle lui raconte alors un conte énigmatique : \" La légende de Paul, le prince solitaire \"... Les péripéties s\'enchaînent jusqu\'à la révélation finale où chacun comprendra enfin les raisons de la mystérieuse invitation. C\'est une invitation lancée au monde entier !', 'Thibaut Boidin', '24€', '07/10/2022 au 10/12/2022', '20h30'),
(3, 'Théâtre', 'Titanic, La Folle Traversée', 'https://www.theatredelarenaissance.com/wp-content/uploads/2022/03/Affiche-Titanic-RENAISSANCE_40x60-web.jpg', 'Le dimanche 14 avril 1912, par une nuit sans lune, un paquebot, surnommé « le vaisseau des rêves », poursuit son voyage inaugural. Si certains cherchent un mariage pour sauver leur rang, d’autres sont en quête d’aventures ou d’affaires, ou encore tout simplement d’une vie meilleure.', 'Axel Orhey', '27€', '21/12/2022', '14h30'),
(4, 'Théâtre', 'Une Année à Paris', 'https://d1k4bi32qf3nf2.cloudfront.net/product/2017/10/thumb_15506736614634_une-anneet-a-paris-bo-saint-martin_36688.jpg', 'La première année de Jessica Anneet à Paris vient de s\'écouler. Les cours de théâtre, les aventures amoureuses inexistantes, son passé d\'animatrice : vous pourrez voir ce qu\'est le quotidien d\'une fille parfaite... et particulièrement dérangée. Vous pourrez découvrir que la collocation c\'est sympa, mais que parfois la solitude a du bon, ou encore que les huîtres sont redoutables pour les humains... Après ça, vous aurez sûrement envie de l\'épouser, et ce serait normal, ou de l\'avoir comme meilleure amie ! Quoi que...', 'Jessica Anneet', '25€', '11/01/2023 au 14/01/2023', '20h30'),
(5, 'Théâtre', 'Hondamendia', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1456844750i/29382835.jpg', 'Un demi-million de mètres cubes de résidus industriels s\'est effondré en 2020 sur l\'autoroute A-8 au Pays Basque, en Biscaye. Deux morts. Absence de respect des normes, pollution, procédure judiciaire, imbroglio politique : les collectifs Axut ! et Artedrama saisissent à bras-le-corps un accident qui dépasse le fait divers.', 'Xabier Montoia', '20€', '26/01/2023 au 27/01/2023', '20h00'),
(6, 'Théâtre', 'Ombres Portées', 'https://theatres.nice.fr/media/cache/illustration_evenement/uploads/evenements/62b5923856a01377546900.jpg', 'Acrobaties au sol et virtuosité aérienne, la chorégraphe Raphaëlle Boitel crée une pièce physique et symbolique qui nous plonge dans le fabuleux mystère de la psyché humaine. Dans une atmosphère cinématographique et sur une musique rock, les interprètes virtuoses poursuivent une quête à la fois sombre et pleine d\'espoir et abordent de façon tragi-comique les questions de la découverte de soi, du choix et de la déculpabilisation.', 'Raphaëlle Boitel', '20€', '31/01/2023 au 01/02/2023', '20h00'),
(7, 'Concert', 'Tombée du Nid', 'https://cdn-s-www.bienpublic.com/images/efff9f9e-1b9a-41f1-918b-36e596b2d7ca/BES_06/illustration-lea-crevon-dans-tombee-du-nid_1-1664352875.jpg', 'Compositeur, guitariste, chanteur, Pierre Bensusan est un aventurier de contrées insolites. Il fait partie des musiciens français d\'aujourd\'hui qui jouissent d\'une renommée planétaire. L\'Oranais sans frontières joue un hymne intimiste et orchestral, une traversée en solitaire sur une guitare multicoques soumise aux éléments naturels : molécules sonores et pulpe de doigts sur touche d\'ébène pour accordage ouvert, avec une technique vertigineuse et transparente... Grosse émotion assurée !', 'Léa Crevon', '17,80€', '2022-11-30 au 2022-12-03', '20h30'),
(8, 'Concert', 'Le chanteur de Mexico', 'https://photos.infolocale.fr/infoLocale/datatourisme/2022/12/64/6703267/_1.jpg', 'Vincent Etchebar chante régulièrement dans son petit village basque, accompagné de Bilou, son ami trompettiste. Repéré par un impresario, il monte à Paris pour tenter de faire carrière. Mais rien ne semble se passer comme prévu et, d\'aventures en aventures, de rencontres en rencontres, Vincent et son compagnon vont se retrouver... au Mexique !', 'Vincent Etchebar', '48€', '4/12/2022', '14h30'),
(9, 'Concert', 'Cha Cha invite Gumiso Musendo', 'https://photos.infolocale.fr/infoLocale/datatourisme/2022/12/64/6666495/_1.jpg', '“ Chacha Invite... ” est un nouveau cycle musical créé par La Luna Negra en collaboration avec le batteur Chacha Angela. Un jeudi par mois, le talentueux musicien invite ses amis artistes à partager la scène avec lui. Pop / Folk, Jazz, Fusion, ou Musique du Monde, Chacha, artiste solaire et généreux nous invite au voyage !', 'Cha Cha Angela', '13€', '15/12/2022', '20h30'),
(10, 'Concert', 'The World Of Queen By Coverqueen', 'https://www.centreathanor.com/wp-content/uploads/8/2021/09/THE-WORLD-OF-QUEEN-billetterie-350x524.jpg', 'Le spectacle hommage qui a déjà conquis plus de 800 000 spectateurs ! C\'est LE spectacle hommage à Freddie Mercury ! The World of Queen perpétue depuis des années l\'héritage mythique des Anglais partout en Europe. Une voix brillantissime, des musiciens de talent, une mise en scène impressionnante faite d\'effets spéciaux et pyrotechniques, font de ce spectacle un moment inoubliable où le temps s\'arrête pour retrouver pendant plus de deux heures l\'atmosphère des plus grands shows du groupe !', 'Claire Lairy', '35€', '24/03/2023', '20h30'),
(11, 'Concert', 'Soy De Cuba - Viva La Vida', 'https://www.en-pays-basque.fr/wp-content/uploads/tourinsoft/b23bb3deccf4c3d128dd459237b12519-Spectacle--Soy-de-Cuba-1050x744.jpg', 'Un hymne à la liberté absolue et à la vie sur fond de musiques colorées et de danses enfiévrées. Emmenée par quatorze danseurs, six musiciens et deux chanteurs, Soy de Cuba signe son grand retour en France avec sa nouvelle comédie musicale Viva la vida. Elle est danseuse, il est boxeur ; chacun excelle dans son domaine. Ils ont peu de choses en commun si ce n\'est la rage de vaincre et l\'amour de la salsa... ', 'Euskal Herrian', '21 €', '29/03/2023', '15h00'),
(12, 'Concert', 'Concer de Louise Attaque', 'https://cdn.sortiraparis.com/images/80/1665/785560-louise-attaque-concert-au-zenith-de-paris-en-mars-2023.jpg', 'Louise contre-attaque ! Avril 2022 : Louise Attaque fête les 25 ans de son premier album en réalisant 6 concerts en une seule journée à l\'Elysée-Montmartre à Paris. Le plaisir de retrouver la scène est palpable, l\'envie de remonter à nouveau sur le ring partout en France aussi. Le dimanche 23 juillet 2023, Louise Attaque est de passage aux arènes de Bayonne ! Venez profiter d\'un specatcle qui fera mordre la poussière au temps qui passe.', 'Louise Attaque', '59€', '23/07/2023', '20h30'),
(13, 'Exposition', '\"La dimension poétique… Comme un chant silencieux\"', 'https://www.unidivers.fr/wp-content/uploads/2022/10/exposition-christiane-giraud-la-dimension-poetique...comme-un-chant-silencieux-2023-02-24.jpg', 'Très connue sur le territoire et dans la région, Christiane Giraud propose depuis de nombreuses années une création sculptée ancrée dans le geste et la matière. Un grand nombre de ses œuvres ont été présentées localement, dans des expositions monographiques ou collectives, dans des espaces publics et extérieurs, et sont diffusées par des collectionneurs locaux.', 'Christane Giraud', 'Gratuit', '24/02/2023 au 23/04/2023', '13h00 à 18h30'),
(14, 'Exposition', 'Frida Kahlo, au-delà des apparences', 'https://www.artistikrezo.com/wp-content/uploads/2022/08/3d975820-e125-467c-b1c0-44042849e74f.jpeg', 'Monosourcils de tous les pays, cette info est pour vous ! Sapologue, féministe et communiste assumée, la célèbre artiste Frida Kahlo squatte le plus modeux des musées parisiens en plein fashion month. Si l’on craignait une énième expo aseptisée glamourisant l’image de Frida – dont la tronche ne cesse d’être collée sur des mugs et des magnets –, on vous rassure tout de suite : il n’en est rien.', 'Frida Kahlo', '29 €', '30/05/2023 au 18/06/2023', '13h00 à 18h30'),
(15, 'Exposition', 'Ugo Rondinone', 'https://cdn.mos.cms.futurecdn.net/QzQVBZwGm9G6LGr9urutzg.jpg', 'Le corps continue d’être mis à l’honneur dans la galerie des sculptures, dans une approche quasi chamanique cette fois-ci. Accroupies devant les plâtres du XIXe siècle, des ballerines au repos s’étirent, allant parfois jusqu’à se démembrer. Réalisés à partir de terres prélevées sur sept continents, ces trompe-l\'œil nous guident vers une pièce cylindrique en bois de 10 mètres de haut.', 'Ugo Rondinone', '27 €', '15/07/2022 au 22/08/2022', '10h00 à 19h00'),
(16, 'Exposition', 'Black Indians de La Nouvelle-Orléans', 'https://aws-tiqets-cdn.imgix.net/images/content/1954b81f75974583a7734ed58bf7899d.jpg?auto=format&fit=crop&ixlib=python-3.2.1&q=70&s=0661c4d1c1a86db0d7315dde8c36b97c', 'Stars de la nouvelle expo du musée du Quai Branly, les Black Indians se révèlent aux yeux du grand public à travers un formidable parcours retraçant l’histoire des Afro-Américains en Louisiane, leur place dans la société et dans la célèbre parade de Mardi Gras. La déambulation commence par un “petit” cours d’histoire sur la Louisiane avant la colonisation et les autochtones amérindiens, puis sur l’esclavage et la traite négrière.', 'Zoé Kennedy', '12 €', '16/11/2023 au 01/12/2023', '18h00'),
(17, 'Exposition', 'Foire Foraine d\'Art Contemporain', 'https://www.tourisme93.com/Local/gus/files/20955/bigfoire-art-contemporain-paris.jpg', 'Le spot de la rue Curial nous invite à faire des tours de manège et à grignoter de la barbe à papa grâce aux artistes les plus en vue du moment. Se cultiver en faisant un tour de grand huit, du jamais-vu ! Train fantôme, tir à la carabine, palais des glaces, chaises volantes…', 'Quentin Chevrier', '8 €', '13/02/2023 au 08/03/2023', '15h00'),
(18, 'Exposition', 'Journal Ukrainien', 'https://www.lense.fr/wp-content/uploads/2022/06/unnamed.png', 'Rendre compte de la complexité du travail de Boris Mikhailov n’est pas facile. Grâce à un parcours ultra pédagogique et à un corpus d’exception – on parle de 800 clichés –, la MEP nous embarque dans l’univers du photographe de l’Est et nous plonge dans l’histoire de l’Ukraine, entre le totalitarisme, l’URSS et les conflits modernes. Première rétrospective française consacrée à l’artiste, ', 'Boris Mikhaïlov', '11 €', '16/01/2023 au 03/02/2023', '11h00'),
(19, 'Spectacle', 'Ring D\'impros', 'https://agendaculturel.emstorage.fr/ring-d-impro-juc-64763523.jpg', 'Chaque mois un présentateur et des équipes différentes ! Le spectacle est donc UNIQUE tous les mois ! Venez ( re ) découvrir les Rings d\'Impro que La Luna Negra propose avec succès depuis 20 ans ! Entrez dans les entrailles du jeu pur, sans filet... et sachez que tout y sera surprise !', 'Particuliers', '15 €', '23/12/2022', '20h30'),
(20, 'Spectacle', 'Cirque de Noël ', 'https://cdt64.media.tourinsoft.eu/upload/AFFICHE-OFFICIELLE-CDN-2022.jpg?width=800', 'le cirque de Noël revient cette année encore avec des artistes exceptionnels et qui salue le retour des animaux domestiques ( avec les chevaux en star du spectacle ) et la présence du célébre CLOWN ERIC BOO ( du MOULIN ROUGE DE PARIS ). Un des numéros vedette a été lui sélectionné par l\'émission LA FRANCE A UN INCROYABLE TALENT.', 'Particuliers', '13 €', '23/11/2023 au 09/01/2023', '14h00 à 18h00'),
(21, 'Spectacle', 'Bertsolari Txapelketa Nagusia : Joute de Bertsolaris', 'https://www.en-pays-basque.fr/wp-content/uploads/tourinsoft/75d5bf686f09130e506fb284ec39b1fb-spectacle-Bertxulari-669x445.jpg', 'La connaissance de la langue basque est nécessaire pour apprécier le talent des artistes. Avant la finale programmée le 18 décembre au Navarra Arena de Pamplona / Iruña, Bayonne accueillera à la Salle Lauga l\'avant-dernière demi-finale de la phase retour du championnat le plus important de bertsolaris. Abenduaren 18an Iruñeako Nafarroa Arenan iraganen den finala aitzin, BertsolariTxapelketa Nagusiko bigarren faseko azken aitzineko final-erdiari Lauga Gelan harrera eginen dio Baionako herriak.', 'Particuliers', '17 €', '26/12/2022', '17h00'),
(22, 'Spectacle', 'Vos souvenirs d\'enfance', 'https://media.eterritoire.fr/?u=aHR0cDovL2FxdWl0YWluZS5tZWRpYS50b3VyaW5zb2Z0LmV1L3VwbG9hZC9CQVNUSUFOLU1FTlRBTElTVEUuanBn', 'Cette magie insolite et déroutante sonde le domaine du surnaturel et les facultés hors normes enfouies en chacun de nous. Vous serez témoins d\'expériences surprenantes. Divination, suggestion, lecture de pensées, mémoire prodigieuse et paranormal se côtoient pour le plus grand plaisir des spectateurs qui participent directement aux expériences.', 'Bastian, magicien mentaliste', '13 €', '14/12/2022', '20h30'),
(23, 'Spectacle', 'La Raclette', 'https://media.eterritoire.fr/?u=aHR0cDovL2FxdWl0YWluZS5tZWRpYS50b3VyaW5zb2Z0LmV1L3VwbG9hZC9MQS1SQUNMRVRURS1BRkZJQ0hFLmpwZw~~', 'Elisa, juriste un brin maniaque, réunit ses amis chez elle pour une soirée raclette. Arrivent ses amis d\'enfance : David, séducteur et sarcastique, puis Jonathan, garçon stressé de nature. Ils attendent le quatrième larron, qui est toujours en retard. Elisa a aussi invité Tiffany, alias Tiff, comédienne « internationale » et fervente militante écolo.', 'Victoire Charval, Arnaud Laurent, Floriane Chappe, Thibaut Marchand', '13 €', '28/12/2022', '20h30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manif`
--
ALTER TABLE `manif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manif`
--
ALTER TABLE `manif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
