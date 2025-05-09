-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 07, 2025 alle 17:45
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lighthow`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `domande`
--

CREATE TABLE `domande` (
  `id_domanda` int(11) NOT NULL,
  `titolo` varchar(50) DEFAULT NULL,
  `descrizione` text DEFAULT NULL,
  `data_compilazione` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nome_utente` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `domande`
--

INSERT INTO `domande` (`id_domanda`, `titolo`, `descrizione`, `data_compilazione`, `email`, `nome_utente`) VALUES
(1, 'Come ridurre il consumo energetico in casa', 'Quali sono le migliori strategie per ridurre il consumo energetico degli elettrodomestici in casa?', '2025-03-24', 'esempio@gmail.com', 'esempio'),
(2, 'Come risparmio sul riscaldamento d\'inverno?', 'Come posso riscaldare la mia casa in inverno senza aumentare troppo i costi energetici', '2025-03-24', 'esempio2@gmail.com', 'esempio2'),
(3, 'Quali sono le migliori lampadine a basso consumo?', 'Quali lampadine sono più efficienti per ridurre il consumo di energia elettrica', '2025-03-24', 'esempio3@gmail.com', 'esempio3');

-- --------------------------------------------------------

--
-- Struttura della tabella `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `titolo` varchar(50) DEFAULT NULL,
  `contenuto` text DEFAULT NULL,
  `autore` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `post`
--

INSERT INTO `post` (`id_post`, `titolo`, `contenuto`, `autore`) VALUES
(1, 'Come ridurre il consumo di acqua calda', '<h3>Consigli per ridurre il consumo di acqua calda</h3>\n    <p>L’acqua calda rappresenta una delle principali fonti di consumo energetico in casa. Ridurre gli sprechi aiuta a tagliare la bolletta e a proteggere l’ambiente. Ecco alcuni consigli efficaci:</p>\n    \n    <ol>\n        <li><strong>Installa riduttori di flusso:</strong> questi dispositivi, applicabili ai rubinetti e ai soffioni doccia, possono ridurre il consumo d’acqua fino al 50% senza compromettere il comfort.</li>\n        <li><strong>Preferisci docce brevi alle vasche da bagno:</strong> riempire una vasca può consumare fino a 150 litri di acqua, mentre una doccia di 5 minuti ne usa circa 50.</li>\n        <li><strong>Scegli una caldaia a condensazione:</strong> rispetto ai modelli tradizionali, queste caldaie recuperano il calore dei fumi di scarico, aumentando l’efficienza e riducendo il consumo di gas.</li>\n        <li><strong>Utilizza elettrodomestici efficienti:</strong> lavastoviglie e lavatrici moderne consumano meno acqua calda se usate con programmi a basse temperature.</li>\n        <li><strong>Considera un boiler a pompa di calore:</strong> questo sistema sfrutta l’energia dell’aria per riscaldare l’acqua, riducendo fino al 70% i consumi energetici.</li>\n    </ol>', 'Gino Panino'),
(2, 'Standby: il costo nascosto', '<h3>Strategie per eliminare il consumo fantasma</h3>\n    <p>Molti apparecchi elettronici continuano a consumare energia anche da spenti. Si tratta del cosiddetto \'consumo fantasma\' che può incidere fino al 10% sulla bolletta. Ecco alcune strategie per eliminarlo:</p>\n    \n    <ol>\n        <li><strong>Utilizza prese intelligenti con interruttore:</strong> queste multiprese consentono di spegnere più dispositivi con un solo gesto, evitando di lasciarli in standby.</li>\n        <li><strong>Scollega i caricabatterie quando non li usi:</strong> anche se il telefono non è collegato, il caricabatterie continua a consumare energia.</li>\n        <li><strong>Attiva le modalità di risparmio energetico:</strong> su PC, console e smart TV, attiva le impostazioni di spegnimento automatico dopo un certo periodo di inattività.</li>\n        <li><strong>Evita di lasciare la TV in standby:</strong> molte televisioni consumano fino a 5W anche quando sembrano spente. Meglio spegnerle completamente.</li>\n    </ol>', 'Gino Panino'),
(3, 'Temperatura in casa per ogni stagione', '<h3>Regole per risparmiare energia in ogni stagione</h3>\n\n    <p>Mantenere la temperatura giusta in casa è fondamentale per ridurre i costi e migliorare il comfort. Ecco alcune regole d’oro per risparmiare energia in ogni stagione:</p>\n\n    <h4>Inverno:</h4>\n    <ul>\n        <li>Imposta il termostato a <strong>19-20°C</strong> di giorno e <strong>16-17°C</strong> di notte per evitare sprechi.</li>\n        <li>Installa <strong>valvole termostatiche</strong> sui termosifoni per controllare il calore stanza per stanza.</li>\n        <li><strong>Isola porte e finestre</strong>: usa guarnizioni adesive per ridurre gli spifferi.</li>\n        <li>Apri le tende di giorno per sfruttare il calore del sole e chiudile di sera per trattenere il calore.</li>\n    </ul>\n\n    <h4>Estate:</h4>\n    <ul>\n        <li>Usa il condizionatore con una temperatura tra <strong>25-26°C</strong> per evitare consumi eccessivi.</li>\n        <li>Installa <strong>ventilatori a soffitto</strong> che consumano meno e distribuiscono meglio l’aria fresca.</li>\n        <li>Usa tende oscuranti o persiane per schermare la luce diretta del sole.</li>\n        <li>Spegni i dispositivi elettronici che generano calore (TV, computer) nelle ore più calde.</li>\n    </ul>', 'Gino Panino'),
(4, 'Come scegliere un nuovo elettrodomestico', '<h3>Come scegliere gli elettrodomestici per risparmiare energia</h3>\n\n    <p>Gli elettrodomestici rappresentano circa il 50% del consumo elettrico in una casa. Sceglierli con criterio può portare a grandi risparmi energetici. Ecco come:</p>\n\n    <ol>\n        <li><strong>Controlla l’etichetta energetica:</strong> scegli sempre elettrodomestici con classe <strong>A++ o superiore</strong>.</li>\n        <li><strong>Preferisci frigoriferi con tecnologia Inverter:</strong> regolano automaticamente la potenza in base alle esigenze, risparmiando fino al 30% di energia rispetto ai modelli tradizionali.</li>\n        <li><strong>Lavatrici e lavastoviglie con programmi eco:</strong> questi programmi utilizzano meno acqua e lavorano a temperature più basse, riducendo i consumi senza compromettere l’efficacia.</li>\n        <li><strong>Forni a convezione o microonde:</strong> il forno a convezione distribuisce meglio il calore, riducendo i tempi di cottura, mentre il microonde consuma fino al 75% in meno rispetto ai forni tradizionali.</li>\n    </ol>', 'Gino Panino'),
(5, 'Ventilatori o condizionatori? Qual è la scelta mig', '<h3>Soluzioni efficienti per il caldo estivo</h3>\n\n    <p>D’estate il caldo può diventare insopportabile, ma quale soluzione è più efficiente?</p>\n\n    <ol>\n        <li><strong>Ventilatori:</strong> consumano tra <strong>50 e 100W</strong>, migliorano la circolazione dell’aria e sono ideali per stanze di piccole dimensioni.</li>\n        <li><strong>Condizionatori:</strong> consumano tra <strong>600 e 1500W</strong>, ma raffreddano più rapidamente.</li>\n    </ol>\n\n    <p>Per ridurre i costi:</p>\n    <ul>\n        <li>Usa la modalità <strong>deumidificatore</strong>, che abbassa l’umidità senza abbassare troppo la temperatura.</li>\n        <li>Installa <strong>un condizionatore con inverter</strong>, che regola la potenza in base alla necessità.</li>\n        <li><strong>Chiudi le finestre e usa tende isolanti</strong> per evitare dispersioni di aria fresca.</li>\n    </ul>', 'Gino Panino'),
(6, 'Illuminazione a LED: perché conviene', '<h3>Vantaggi dell\'illuminazione a LED</h3>\n\n    <p>L’illuminazione a LED è una delle soluzioni più efficaci per ridurre i consumi elettrici. Ecco i principali vantaggi:</p>\n\n    <ul>\n        <li><strong>Consumo ridotto:</strong> una lampadina LED consuma circa il <strong>90% in meno</strong> rispetto a una tradizionale a incandescenza.</li>\n        <li><strong>Durata maggiore:</strong> le lampadine LED possono durare fino a <strong>50.000 ore</strong>, contro le <strong>1.000-2.000 ore</strong> di quelle a incandescenza.</li>\n        <li><strong>Accensione immediata:</strong> a differenza delle lampade fluorescenti, i LED si accendono istantaneamente e non si surriscaldano.</li>\n        <li><strong>Disponibilità di diverse tonalità:</strong> puoi scegliere tra luce calda, neutra e fredda in base all’ambiente da illuminare.</li>\n    </ul>\n\n    <p>Per massimizzare il risparmio, scegli lampadine con <strong>etichetta energetica A++</strong> e utilizza dimmer per regolare l’intensità luminosa.</p>', 'Gino Panino');

-- --------------------------------------------------------

--
-- Struttura della tabella `risposte`
--

CREATE TABLE `risposte` (
  `id_risposta` int(11) NOT NULL,
  `contenuto` text DEFAULT NULL,
  `data_compilazione` date DEFAULT NULL,
  `nome_utente` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_domanda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `risposte`
--

INSERT INTO `risposte` (`id_risposta`, `contenuto`, `data_compilazione`, `nome_utente`, `email`, `id_domanda`) VALUES
(1, 'Utilizzare elettrodomestici con classe energetica A+++ per una maggiore efficienza', '2025-03-24', 'utente', 'utente@gmail.com', 1),
(2, 'Spegnere completamente gli elettrodomestici invece di lasciarli in standby', '2025-03-24', 'utente2', 'utente2@gmail.com', 1),
(3, 'Utilizzare un termostato programmabile per ottimizzare l’uso del riscaldamento.', '2025-03-24', 'utente3', 'utente3@gmail.com', 2),
(4, 'Le lampadine a LED sono le più efficienti e durano molto più a lungo delle lampadine tradizionali.', '2025-03-24', 'utente4', 'utente4@gmail.com', 3);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `domande`
--
ALTER TABLE `domande`
  ADD PRIMARY KEY (`id_domanda`);

--
-- Indici per le tabelle `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indici per le tabelle `risposte`
--
ALTER TABLE `risposte`
  ADD PRIMARY KEY (`id_risposta`),
  ADD KEY `id_domanda` (`id_domanda`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `domande`
--
ALTER TABLE `domande`
  MODIFY `id_domanda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT per la tabella `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `risposte`
--
ALTER TABLE `risposte`
  MODIFY `id_risposta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `risposte`
--
ALTER TABLE `risposte`
  ADD CONSTRAINT `risposte_ibfk_1` FOREIGN KEY (`id_domanda`) REFERENCES `domande` (`id_domanda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
