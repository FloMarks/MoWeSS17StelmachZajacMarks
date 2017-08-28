-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Aug 2017 um 17:11
-- Server-Version: 10.1.25-MariaDB
-- PHP-Version: 7.1.7

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
(21, 'Flo', 'City: Auf gehtâ€™s!', 'Bangkok', 'Sooo da ist nun endlich der erste Blog-Eintrag. Eine regnerische Woche Thailand liegt bereits hinter uns. Im Moment sitzen wir grade im Flughafen Hong-Kong und warten auf unseren Flieger nach Adelaide â€“ unser nÃ¤chstes Ziel! Schon viel haben wir gesehen und erlebt, aber wie ging es nochmal los......????\r\n...Erster Stopp war Thailand: Ganz so entspannt wie wir es mit den FlÃ¼gen gehalten haben ging es dann doch nicht. Beim Check-In in Frankfurt benÃ¶tigten wir entweder ein Visum fÃ¼r Thailand oder ein Weiter-/RÃ¼ckflugticket. So mussten wir vor Ort schnellstmÃ¶glich ein Ticket raus aus Thailand buchen, um Ã¼berhaupt einreisen zu dÃ¼rfen.\r\n\r\n', '2017-08-21', 1),
(22, 'Flo', 'Reise in den Wilden Westen', 'Grand Canyon', 'Von Phoenix aus ging es weiter zum Grand Canyon. Der Weg zu unserem Hotel in Williamsburg (an der alten Route 66 gelegen) fÃ¼hrte uns direkt am Hooper Damm vorbei. Nach einem kurzen Stopp und vielen Fotos ging die Fahrt dann weiter. In Williamsburg kamen wir spÃ¤ter als geplant an, also suchten wir uns ein Abendprogramm. Es ging nach Sedona. Ein sehr schÃ¶ner Ort mit Blick auf orangene Felsen, im Sonnenuntergang ein wirkliches Schauspiel. Da haben wir den Abend dann auch relativ frÃ¼h ausklingen lassen, denn am nÃ¤chsten Tag stand der Grand Canyon an.', '2017-08-21', 2),
(23, 'Flo', 'Tokyo: Big in Japan', 'Tokyo', 'Ihr Lieben, ich sitze grad (nach einer 2,5h Horror Zugfahrt durch Tokio) am Flughafen Narito und nachdem bei euch noch Nacht ist und ich auch sonst nichts Besseres zu tun hab, versuch ich mich mal an meinem ersten Blog-Text. \r\nTokio ist zwar eine unheimlich interessante und spannende Stadt, alleine ist man jedoch komplett verloren (LOL). Bis auf ein paar WÃ¶rter ist ALLES auf japanischen Zeichen geschrieben und selbst bei den grÃ¶ÃŸeren U-Bahn-Stationen sprechen nur wenige Englisch. Die Locals sind zwar alle sehr nett und nicken und lÃ¤cheln einen an - das hilft einem leider nur nicht weiter, wenn man versucht japanische Zeichen zu entziffern um seine Koffer in ein SchlieÃŸfach am Bahnhof einzusperren.\r\n', '2017-08-24', 3),
(24, 'Flo', 'Il vulcano grande', 'Pompeji', 'Der Vesuv ist ein aktiver Vulkan zwischen Neapel und Pompeji. Der letzte Ausbruch war 1945, also noch gar nicht soo lang her. Er ist jetzt ca. 1100 m hoch, frÃ¼her war er noch hÃ¶her.\r\nFlorian, Katha und ich sind bis nach Escola mit dem Zug gefahren und von dort mit einem Shuttle auf den Berg. Das letzte StÃ¼ck mussten wir dann hochlaufen.\r\nAnfangs hatten wir viel GlÃ¼ck mit dem Wetter. Es war nicht bewÃ¶lkt und deswegen hat man den Krater gesehen und die Aussicht war schÃ¶n. GlÃ¼cklicherweise kamen keine Wolken und wir hatten einen super Blick.\r\n', '2017-08-24', 4);

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
(11, 'shshs', 'f.marks95@web.de', '$2y$10$mGPuKzo8OUKDGVBq.Q4PZOjqRXk6i78JZQOv8pr4EQe4jsIta08X6', 0);

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
  MODIFY `blog_entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
