USE sportland_sportlandija;

CREATE TABLE `registracija` (
    `id` int(10) NOT NULL UNIQUE,
    `pusdinfo` varchar(100) NOT NULL,
    `lidzdatums` varchar(250) NOT NULL,
    `nosvitrcena` varchar(100) NOT NULL,
    `cena` varchar(100) NOT NULL,
    `nosvitrcena2` varchar(100) NOT NULL,
    `cena2` varchar(100) NOT NULL,
    `bezmteksts` varchar(100) NOT NULL,
    `papildinfo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `registracija` (`id`, `pusdinfo`)
VALUES (1, "(pusdienas nebūs)");

INSERT INTO `registracija` (`id`, `lidzdatums`)
VALUES (2, "23. augustam*");

INSERT INTO `registracija` (`id`, `nosvitrcena`)
VALUES (3, "5.00");

INSERT INTO `registracija` (`id`, `cena`)
VALUES (4, "3.00");

INSERT INTO `registracija` (`id`, `nosvitrcena2`)
VALUES (5, "6.00");

INSERT INTO `registracija` (`id`, `cena2`)
VALUES (6, "4.00");

INSERT INTO `registracija` (`id`, `bezmteksts`)
VALUES (7, "Bērni līdz 6 gadiem – bezmaksas");

INSERT INTO `registracija` (`id`, `papildinfo`)
VALUES (8, "Sakarā ar Covid-19 izplatības ierobežošanas pasākumiem, šogad ĒDINĀŠANA ģimenes sporta svētkos NENOTIKS! Sakarā ar to arī dalības maksa ir samazināta. Katrs dalībnieks ir aicināts parūpēties par savam pusdienām un uzkodām pats. Uz vietas būs nodrošināts dzeramais ūdens, karstais ūdens un tējas.");







