-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 31. Aug 2017 um 18:14
-- Server-Version: 10.1.26-MariaDB
-- PHP-Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `login_system`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `blog_entry`
--

CREATE TABLE `blog_entry` (
  `blog_entry_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `place` varchar(256) NOT NULL,
  `content` varchar(4096) NOT NULL,
  `date` date NOT NULL,
  `blog_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `blog_entry`
--

INSERT INTO `blog_entry` (`blog_entry_id`, `user_name`, `title`, `place`, `content`, `date`, `blog_count`) VALUES
(20, 'Flo', 'Tage 4 und 5', 'Kolumbien ', 'Hallo Leuts!\r\nDa sich in den letzten beiden Tagen nicht allzu viel passiert ist werde ich diese gleich zusammen fassen.\r\nDienstag haben wir einen Gammeltag eingelegt und auÃŸer dem morgendlichen Besuch des Marktes nur gechillt, geschlafen und gegessen. \r\nWar auch mal schÃ¶n die Seele baumeln zu lassen. Abends hatten wir dann wieder Besuch im Zimmer. Eine Kakerlake hatte sich zu uns gesellt. Die sollen hier aber nicht sonderlich selten sein. Hab sie trotzdem entsorgt.\r\nGestern waren wir in einem kleinen DÃ¶rfchen ca 20 km entfernt. Dort gab es herrliche aus Hanffasern gemachte Dinge. Wir haben erbarmungslos zugeschlagen. \r\n', '2017-08-21', 0),
(21, 'Flo', 'Auf gehtâ€™s!', 'Bangkok', 'Sooo da ist nun endlich der erste Blog-Eintrag. Eine regnerische Woche Thailand liegt bereits hinter uns. Im Moment sitzen wir grade im Flughafen Hong-Kong und warten auf unseren Flieger nach Adelaide â€“ unser nÃ¤chstes Ziel! Schon viel haben wir gesehen und erlebt, aber wie ging es nochmal los......????\r\n...Erster Stopp war Thailand: Ganz so entspannt wie wir es mit den FlÃ¼gen gehalten haben ging es dann doch nicht. Beim Check-In in Frankfurt benÃ¶tigten wir entweder ein Visum fÃ¼r Thailand oder ein Weiter-/RÃ¼ckflugticket. So mussten wir vor Ort schnellstmÃ¶glich ein Ticket raus aus Thailand buchen, um Ã¼berhaupt einreisen zu dÃ¼rfen.\r\n\r\n', '2017-08-21', 1),
(22, 'Flo', 'Reise in den Wilden Westen', 'Grand Canyon', 'Von Phoenix aus ging es weiter zum Grand Canyon. Der Weg zu unserem Hotel in Williamsburg (an der alten Route 66 gelegen) fÃ¼hrte uns direkt am Hooper Damm vorbei. Nach einem kurzen Stopp und vielen Fotos ging die Fahrt dann weiter. In Williamsburg kamen wir spÃ¤ter als geplant an, also suchten wir uns ein Abendprogramm. Es ging nach Sedona. Ein sehr schÃ¶ner Ort mit Blick auf orangene Felsen, im Sonnenuntergang ein wirkliches Schauspiel. Da haben wir den Abend dann auch relativ frÃ¼h ausklingen lassen, denn am nÃ¤chsten Tag stand der Grand Canyon an.', '2017-08-21', 2),
(23, 'Flo', 'Big in Japan', 'Tokyo', 'Ihr Lieben, ich sitze grad (nach einer 2,5h Horror Zugfahrt durch Tokio) am Flughafen Narito und nachdem bei euch noch Nacht ist und ich auch sonst nichts Besseres zu tun hab, versuch ich mich mal an meinem ersten Blog-Text. \r\nTokio ist zwar eine unheimlich interessante und spannende Stadt, alleine ist man jedoch komplett verloren (LOL). Bis auf ein paar WÃ¶rter ist ALLES auf japanischen Zeichen geschrieben und selbst bei den grÃ¶ÃŸeren U-Bahn-Stationen sprechen nur wenige Englisch. Die Locals sind zwar alle sehr nett und nicken und lÃ¤cheln einen an - das hilft einem leider nur nicht weiter, wenn man versucht japanische Zeichen zu entziffern um seine Koffer in ein SchlieÃŸfach am Bahnhof einzusperren.\r\n', '2017-08-24', 3),
(24, 'Flo', 'Il vulcano grande', 'Pompeji', 'Der Vesuv ist ein aktiver Vulkan zwischen Neapel und Pompeji. Der letzte Ausbruch war 1945, also noch gar nicht soo lang her. Er ist jetzt ca. 1100 m hoch, frÃ¼her war er noch hÃ¶her.\r\nFlorian, Katha und ich sind bis nach Escola mit dem Zug gefahren und von dort mit einem Shuttle auf den Berg. Das letzte StÃ¼ck mussten wir dann hochlaufen.\r\nAnfangs hatten wir viel GlÃ¼ck mit dem Wetter. Es war nicht bewÃ¶lkt und deswegen hat man den Krater gesehen und die Aussicht war schÃ¶n. GlÃ¼cklicherweise kamen keine Wolken und wir hatten einen super Blick.\r\n', '2017-08-24', 4),
(25, 'Snens', ' Formel 1 GP in Australien', 'Melbourne', 'Nachdem ich am Samstag, dem 13.3, in Melbourne angekommen bin, war noch etwas Zeit bis zum Grand Prix. Die Tage bis zum Wochenende habe ich mit diversen Museen und einer gefÃ¼hrten Stadtrundfahrt sowie chillen am Pool schnell vergehen lassen. Am Montag habe ich dann schon mein Ticket abgeholt, mit dem ich Mittwoch und Donnerstag auf das GelÃ¤nde konnte und auch einen Sitzplatz auf einer TribÃ¼ne hatte. Am Mittwoch war es dann so weit und ich kÃ¶nnte endlich zur Formel 1 gehen. Ich war morgens gleich zur Gate Ã–ffnung dort und hatte somit den ganzen Tag zur VerfÃ¼gung. Zuerst bin ich einem Ã¼ber das gesamte GelÃ¤nde gegangen und habe alle angeschaut.', '2017-08-31', 0),
(26, 'Snens', 'Et hÃ¤tt noch immer jot jejange.', 'KÃ¶ln', 'Auch wenn im Moment noch viel zu organisieren ist, fiebern wir schon sehr auf unseren groÃŸen Tag hin. Am 12.02.2018 fliegen wir ab nach Big Apple, dort bleiben wir 3 Tage bevor es weiter nach Pittsburgh geht. Nach 4 Tagen dort fliegen wir zur WestkÃ¼ste und verbringen 4 Wochen im schÃ¶nen San Diego. Nach einem kurzen Abstecher nach Vancouver, werden wir uns bei den hohen Wellen von Hawaii einfinden, bevor wir 1 Monat die Inseln Indonesiens bereisen. Das Abenteuer Australien beginnt dann am 22.05.2018 in Cairns.', '2017-08-31', 1),
(27, 'Snens', 'Nepal in 31 WÃ¶rtern ', 'Nepal', 'Es war aufregend, laut, klingend, anstrengend, entspannend, schÃ¶n, herausfordernd, einladend, farbenfroh, nachdenklich machend, arm, reich, fordernd, bereichernd, erschÃ¶pfend, belebend, neu, anders, vertraut, duftend, erschreckend, Fragen aufwerfend, stinkend, wundervoll, langsam, schnell, irritierend, faszinierend, bunt, ein Erlebnis...\r\n...und schÃ¶n hier zu sein.                        \r\n', '2017-08-31', 2),
(28, 'Snens', 'Regen auf den Malediven', 'Malediven', 'Wenn uns jemand vor Beginn unserer Reise gefragt hÃ¤tte, ob es auf den Malediven regnet, hÃ¤tten wir dies mit hoher Wahrscheinlichkeit verneint. Doch wir wurden eines Besseren belehrt: auch auf den Malediven regnet es.\r\n\r\nTatsÃ¤chlich war es dann soweit - es wurde alles so, wie es auf den Bildern immer ist: strahlender Sonnenschein und tÃ¼rkisblaues Meer! Unser erstes Schnorchelerlebnis fÃ¼hrte uns in den Korallengarten, der besonders fÃ¼r AnfÃ¤nger geeignet ist, denn dort gibt es keine StrÃ¶mungen und man kann nicht aufs weite Meer getrieben werden. Die Unterwasserwelt war wirklich wunderschÃ¶n anzusehen. So sahen wir Korallen, Papageien-, DrÃ¼cker-, Falter- und PreuÃŸenfische. Wir schnorchelten sogar bis zum Abgrund (Ã  la \"Findet Nemo\") und wurden von ganzen FischschwÃ¤rmen begleitet. Embudu Village bietet die MÃ¶glichkeit um die ganze Insel verschiedene Touren zu schnorcheln - die lÃ¤ngste Tour geht 90 Minuten.                        ', '2017-08-31', 3),
(29, 'Snens', 'Paris bei schlechtem Wetter', 'Paris', 'Na gut. Das Wetter hatte den Wetterbericht nicht ganz verstanden und so haben wir uns mit Regenschirm und Regenjacke auf Tour begeben. Eiffelturm Ã¼ber die Treppen erklommen, Chaosverkehr am Triumphbogen beobachtet, Louvre samt Mona Lisa durchstÃ¶bert, einen Blick auf Notre Dame und Sacre Coeur geworfen und am Schluss noch einmal den angeleuchteten Eiffelturm bewundert. Und jetzt sind wir hinreichend k.o. Trotz NÃ¤sse hatten wir einen tollen Urlaub und haben Paris ins Herz geschlossen.     ', '2017-08-31', 4),
(30, 'Snens', 'Niagara Falls', 'NiagarafÃ¤lle', 'Ja endlich kÃ¶nnen wir mal von einem Ort berichten, von dem ihr schon alle einmal gehÃ¶rt habt! Wir waren an den Niagara FÃ¤llen! Und da es nicht nur einen Weg gibt um dieses Naturspektakel zu besichtigen, sondern mehrere, mÃ¶chten wir diese nun erlÃ¤utern: Der Weg Ã¼bers Wasser! Wir und viele andere mit uns, lieÃŸen sich die Wucht der FÃ¤lle aus nÃ¤chster NÃ¤he spÃ¼ren lassen. Mit einem Schiff ging es deshalb direkt an die FÃ¤lle und direkt in den SprÃ¼hnebel, der durch den Aufprall entsteht - natÃ¼rlich gewappnet mit den typischen roten Regenponchos', '2017-08-31', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `blog_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pwd`, `blog_count`) VALUES
(10, 'Flo', 'f.marks95@web.de', '$2y$10$x/TPZ7qRG.KXP/TnTPCWtOdkQTl1kPta0gZsdz.RiSNhVhiWYrG6O', 4),
(11, 'CooleFritte', 'fritte@web.de', '$2y$10$mGPuKzo8OUKDGVBq.Q4PZOjqRXk6i78JZQOv8pr4EQe4jsIta08X6', 0),
(12, 'Snens', 'snens@galileel.de', '$2y$10$n/mqnyXvMFBSBI3yTECg4eV7vUty9SYR1chxa9GMe9lXKwQEzXDpG', 5);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `blog_entry`
--
ALTER TABLE `blog_entry`
  ADD PRIMARY KEY (`blog_entry_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `blog_entry`
--
ALTER TABLE `blog_entry`
  MODIFY `blog_entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
