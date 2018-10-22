--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Ceresita Oleo Habitacional Blanco Gl', '3DcAM01', 'CerOleoHabitacionalBlnco.jpg', '19.890'),
(2, 'Brocha Excelsior Hogar 3 Pul.', 'USB02', 'BrochaExcelsiorHogar.jpg', '1.820'),
(3, 'Stanley Alicate Punta Fina 6 Pul Pro (84053)', 'wristWear03','Stanley6Pul.jpg', '11.800'),
(4, 'Alambre Galvanizado N 14', 'LPN45','AlambreGalvN14.jpg', '1.570'),
(5, 'Mixa Monoblock Lavatorio Bron Crom Toledo', 'LPN47','Monoblock.jpg', '16.950'),
(6, 'Einhell Taladro Percutor Te-id 500 E', 'TEID500','TE-ID500.jpg', '9.30');
--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;