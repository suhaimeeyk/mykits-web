CREATE TABLE `dblogin` (
  `idlogin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `dblogin` (`idlogin`, `username`, `password`, `name`, `level`) VALUES
(1, '111', '111', 'waiyawut', 'admin'),
(2, '222', '222', 'devtai', 'member');
ALTER TABLE `dblogin`
  ADD PRIMARY KEY (`idlogin`);
ALTER TABLE `dblogin`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;