-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2017 a las 06:26:59
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `marqubit_pos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `membership_number` varchar(100) NOT NULL,
  `prod_name` varchar(550) NOT NULL,
  `expected_date` varchar(500) NOT NULL,
  `note` varchar(500) NOT NULL,
  `balance` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `address`, `contact`, `membership_number`, `prod_name`, `expected_date`, `note`, `balance`) VALUES
(15, 'Telmex', 'Hidalgo 55', 'Don Carlitos', '5', 'Chicles Trident', 'May-27-2017', '3 de fresa y 2 de limon', '0'),
(16, 'Marco Navarro', 'Ojo de Agua', '4691052869', '1', 'Prestamo 191', '', 'Porque eran 201 pero me presto 10 para pagarle a gaby', '162'),
(17, 'Jose Eduardo Dueñas Hernandez', '', '', '1', 'Contras', '', 'Dio 200', '800'),
(18, 'Rodrigo Gutierrez Gutierrez', '', '', '1', 'Jabon corporal', '', '', '75'),
(19, 'Hector Ramirez', 'Limon 34', '', '1', 'Control', '', '', 'Control de PS1'),
(20, 'German Nicolas Acosta', 'Calle Niños Heroes', '', '1', '100 Dolares', '', '', '100 USD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `onhand_qty` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `expiry_date` varchar(500) NOT NULL,
  `date_arrival` varchar(500) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_id`, `product_code`, `gen_name`, `product_name`, `cost`, `o_price`, `price`, `profit`, `supplier`, `onhand_qty`, `qty`, `qty_sold`, `expiry_date`, `date_arrival`) VALUES
(58, 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '', '5', '8', '3', 'Trident', 0, 171, 200, 'Aug-04-2016', '10-May-2016'),
(59, 'Comic', 'comic', 'comic     ', '', '8', '10', '2', 'Coca Cola', 0, 4, 3, '', ''),
(60, 'Coca cola', 'Refresco', 'Refresco CocaCola 600 ml ', '', '5.5', '10', '5', 'Coca Cola', 0, 10, 15, '', ''),
(61, 'Apple ', 'Iphone', 'iphone 6  ', '', '5000', '6000', '1000', 'Coca Cola', 0, 31, 2, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `suplier` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchases_item`
--

CREATE TABLE IF NOT EXISTS `purchases_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=161 ;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `amount`, `profit`, `due_date`, `name`, `balance`) VALUES
(142, 'RS-034302', 'Admin', '08/04/16', 'cash', '40', '15', '250', 'Telmex', ''),
(143, 'RS-342042', 'Admin', '08/05/16', 'cash', '8', '3', '5', '', ''),
(144, 'RS-332333', 'Admin', '08/05/16', 'cash', '16', '6', '18', '', ''),
(145, 'RS-2233323', 'Admin', '08/05/16', 'cash', '8', '3', '500', '', ''),
(146, 'RS-58023', 'Admin', '08/06/16', 'cash', '8.5', '0', '100', '', ''),
(147, 'RS-3299882', 'Admin', '08/07/16', 'cash', '8.5', '0', '123', '', ''),
(148, 'RS-262220', 'Admin', '08/08/16', 'cash', '8.5', '0', '100', '', ''),
(149, 'RS-233824', 'Admin', '08/08/16', 'cash', '32.5', '9', '100', 'Telmex', ''),
(150, 'RS-322253', 'Cashier Pharmacy', '08/08/16', 'cash', '24', '9', '100', '', ''),
(151, 'RS-02233033', 'Admin', '08/08/16', 'cash', '38', '18', '50', '', ''),
(152, 'RS-6832242', 'Admin', '08/10/16', 'cash', '10', '5', '200', '', ''),
(153, 'RS-222402', 'Admin', '08/10/16', 'cash', '8', '3', '200', '', ''),
(154, 'RS-6238259', 'Admin', '08/10/16', 'cash', '', '', '100', '', ''),
(155, 'RS-202323', 'Admin', '08/10/16', 'cash', '18', '8', '100', '', ''),
(156, 'RS-22255024', 'Admin', '08/10/16', 'cash', '17', '0', '100', '', ''),
(157, 'RS-6026323', 'Admin', '08/10/16', 'cash', '8', '3', '100', 'Telmex', ''),
(158, 'RS-2522200', 'Cashier Pharmacy', '08/19/16', 'cash', '16.5', '3', '500', '', ''),
(159, 'RS-3203932', 'Cashier Pharmacy', '08/19/16', 'cash', '', '', '525', '', ''),
(160, 'RS-33333', 'Admin', '04/03/17', 'cash', '8.5', '0', '233', 'Marco Navarro', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales_order`
--

CREATE TABLE IF NOT EXISTS `sales_order` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=355 ;

--
-- Volcado de datos para la tabla `sales_order`
--

INSERT INTO `sales_order` (`transaction_id`, `invoice`, `product`, `qty`, `amount`, `profit`, `product_code`, `gen_name`, `name`, `price`, `discount`, `date`) VALUES
(317, 'RS-332333', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/05/16'),
(325, 'RS-2625033', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/08/16'),
(326, 'RS-233824', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/08/16'),
(327, 'RS-233824', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/08/16'),
(328, 'RS-233824', '59', '1', '8.5', '0', 'Comic', 'comic', 'comic    ', '8.5', '', '08/08/16'),
(330, '', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/08/16'),
(332, 'RS-80590723', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/08/16'),
(333, 'RS-80590723', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/08/16'),
(334, 'RS-80590723', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/08/16'),
(335, 'RS-322253', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/08/16'),
(336, 'RS-322253', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/08/16'),
(337, 'RS-322253', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/08/16'),
(338, 'RS-02233033', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/08/16'),
(339, 'RS-02233033', '60', '3', '30', '15', 'Coca cola', 'Refresco', 'Refresco CocaCola 600 ml ', '10', '', '08/08/16'),
(340, 'RS-6832242', '60', '1', '10', '5', 'Coca cola', 'Refresco', 'Refresco CocaCola 600 ml ', '10', '', '08/10/16'),
(341, 'RS-222402', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/10/16'),
(342, 'RS-3323328', '59', '1', '8.5', '0', 'Comic', 'comic', 'comic    ', '8.5', '', '08/10/16'),
(343, 'RS-3323328', '59', '1', '8.5', '0', 'Comic', 'comic', 'comic    ', '8.5', '', '08/10/16'),
(345, 'RS-202323', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/10/16'),
(346, 'RS-202323', '60', '1', '10', '5', 'Coca cola', 'Refresco', 'Refresco CocaCola 600 ml ', '10', '', '08/10/16'),
(347, 'RS-22255024', '59', '2', '17', '0', 'Comic', 'comic', 'comic    ', '8.5', '', '08/10/16'),
(348, 'RS-023223', '59', '1', '8.5', '0', 'Comic', 'comic', 'comic    ', '8.5', '', '08/10/16'),
(349, 'RS-6026323', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/10/16'),
(350, 'RS-320733', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/19/16'),
(351, 'RS-2522200', '58', '1', '8', '3', 'Trident', 'Chicles Trident 10 piezas', 'Abarrotes   ', '8', '', '08/19/16'),
(352, 'RS-2522200', '59', '1', '8.5', '0', 'Comic', 'comic', 'comic    ', '8.5', '', '08/19/16'),
(353, 'RS-333228', '59', '1', '8.5', '0', 'Comic', 'comic', 'comic    ', '8.5', '', '04/03/17'),
(354, 'RS-33333', '59', '1', '8.5', '0', 'Comic', 'comic', 'comic    ', '8.5', '', '04/03/17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supliers`
--

CREATE TABLE IF NOT EXISTS `supliers` (
  `suplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `suplier_balance` varchar(100) NOT NULL DEFAULT '$0.0',
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`suplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `supliers`
--

INSERT INTO `supliers` (`suplier_id`, `suplier_name`, `suplier_address`, `suplier_contact`, `contact_person`, `suplier_balance`, `note`) VALUES
(5, 'Trident', 'Matamoros 15', '4691072912', 'Paulina Vazquez Negrete', '350', ''),
(6, 'Coca Cola', 'Padre Guevara 58', '4792254565', 'Marisela Elizabeth Castillo', '0', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `position`) VALUES
(1, 'admin', 'admin', 'Admin', 'admin'),
(2, 'cashier', 'cashier', 'Cashier Pharmacy', 'Cashier'),
(3, 'admin', 'admin123', 'Administrator', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
