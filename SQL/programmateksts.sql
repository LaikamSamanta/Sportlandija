USE sportlandija;

CREATE TABLE `progteksts` (
    `id` int(11) NOT NULL,
    `teksts1` varchar(250) NOT NULL,
    `teksts2` varchar(250) NOT NULL,
    `teksts3` varchar(250) NOT NULL,
    `teksts4` varchar(250) NOT NULL,
    `teksts5` varchar(250) NOT NULL,
    `teksts6` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `progteksts` (`id`, `teksts1`) VALUES
(1, 'Reģistrācija');

INSERT INTO `progteksts` (`id`, `teksts2`) VALUES
(2, 'Atklāšana, iepazīšanās');

INSERT INTO `progteksts` (`id`, `teksts3`) VALUES
(3, '"Ceļojums pa SPORTlandiju"');

INSERT INTO `progteksts` (`id`, `teksts4`) VALUES
(4, 'Pusdienas');

INSERT INTO `progteksts` (`id`, `teksts5`) VALUES
(5, '"Ceļojums pa SPORTlandiju"');

INSERT INTO `progteksts` (`id`, `teksts6`) VALUES
(6, 'Noslēgums, rezultāti, loterija, balvu pasniegšana');
