-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 10:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `subcategory` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `subimg` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `stock`, `price`, `weight`, `category`, `subcategory`, `img`, `subimg`, `description`) VALUES
(6, 'Total Control Foundation', 'F-001', 'out of stock', '100', '50', 'cosmetics', 'FOUNDATION', 'images/I2063CO-999-P23.webp', 'images/I2063CO-999-P23_1c6da9b1-9f43-43d2-ba8a-ad3c152926c8.webp', 'Ultra-light creamy texture\r\nGives semi-matte and smooth coverage\r\nFull coverage\r\nOil-absorbent\r\nBreathable\r\nVitamin E and sebum oil keep the skin hydrated\r\nFor normal, combination and oily skin types\r\nColor: Wheat\r\nSize: 30 ml\r\nIngredients: Aqua, Cyclopentasiloxane, Glycerin, Propylene Glycol, Disiloxane, Bis-peg/ppg-14/14 Dimethicone, Sodium Chloride, Cetyl Peg/ppg-10/1 Dimethicone, Ppg-3 Hydrogenated Castor Oil, Isononyl Isononanoate, Phenoxyethanol, Disteardimonium Hectorite, Peg/ppg-18/18 Di'),
(7, 'Total Control Foundation', 'F-002', 'instock', '100', '50', 'cosmetics', 'FOUNDATION', 'images/I2063CO-999-P23.webp', 'images/I2063CO-999-P23_1c6da9b1-9f43-43d2-ba8a-ad3c152926c8.webp', 'Ultra-light creamy texture\r\nGives semi-matte and smooth coverage\r\nFull coverage\r\nOil-absorbent\r\nBreathable\r\nVitamin E and sebum oil keep the skin hydrated\r\nFor normal, combination and oily skin types\r\nColor: Wheat\r\nSize: 30 ml\r\nIngredients: Aqua, Cyclopentasiloxane, Glycerin, Propylene Glycol, Disiloxane, Bis-peg/ppg-14/14 Dimethicone, Sodium Chloride, Cetyl Peg/ppg-10/1 Dimethicone, Ppg-3 Hydrogenated Castor Oil, Isononyl Isononanoate, Phenoxyethanol, Disteardimonium Hectorite, Peg/ppg-18/18 Di'),
(8, 'Control Foundation', 'F-003', 'instock', '70', '50', 'cosmetics', 'FOUNDATION', 'images/572_9186_dfcf13f4-babd-4403-92bb-63738070b93e.webp', 'images/572_9189_cfac85cd-e686-4f0c-8621-bd0654954702.webp', 'Ultra-light creamy texture\r\nGives semi-matte and smooth coverage\r\nFull coverage\r\nOil-absorbent\r\nBreathable\r\nVitamin E and sebum oil keep the skin hydrated\r\nFor normal, combination and oily skin types\r\nColor: Porcelain\r\nSize: 30 ml\r\nIngredients: Aqua, Cyclopentasiloxane, Glycerin, Propylene Glycol, Disiloxane, Bis-peg/ppg-14/14 Dimethicone, Sodium Chloride, Cetyl Peg/ppg-10/1 Dimethicone, Ppg-3 Hydrogenated Castor Oil, Isononyl Isononanoate, Phenoxyethanol, Disteardimonium Hectorite, Peg/ppg-18/1'),
(9, 'Control Foundation Full', 'F-004', 'instock', '100', '50', 'cosmetics', 'FOUNDATION', 'images/572_9186_dfcf13f4-babd-4403-92bb-63738070b93e.webp', 'images/572_9183_8e571da7-b2a6-40a1-8f2f-4f52ee9e396e.webp', 'Ultra-light creamy texture\r\nGives semi-matte and smooth coverage\r\nFull coverage\r\nOil-absorbent\r\nBreathable\r\nVitamin E and sebum oil keep the skin hydrated\r\nFor normal, combination and oily skin types\r\nColor: Porcelain\r\nSize: 30 ml\r\nIngredients: Aqua, Cyclopentasiloxane, Glycerin, Propylene Glycol, Disiloxane, Bis-peg/ppg-14/14 Dimethicone, Sodium Chloride, Cetyl Peg/ppg-10/1 Dimethicone, Ppg-3 Hydrogenated Castor Oil, Isononyl Isononanoate, Phenoxyethanol, Disteardimonium Hectorite, Peg/ppg-18/1'),
(10, 'Control Foundation ', 'F-005', 'instock', '100', '50', 'cosmetics', 'FOUNDATION', 'images/572_9183_8e571da7-b2a6-40a1-8f2f-4f52ee9e396e.webp', 'images/572_9189_cfac85cd-e686-4f0c-8621-bd0654954702.webp', 'Ultra-light creamy texture\r\nGives semi-matte and smooth coverage\r\nFull coverage\r\nOil-absorbent\r\nBreathable\r\nVitamin E and sebum oil keep the skin hydrated\r\nFor normal, combination and oily skin types\r\nColor: Wheat\r\nSize: 30 ml\r\nIngredients: Aqua, Cyclopentasiloxane, Glycerin, Propylene Glycol, Disiloxane, Bis-peg/ppg-14/14 Dimethicone, Sodium Chloride, Cetyl Peg/ppg-10/1 Dimethicone, Ppg-3 Hydrogenated Castor Oil, Isononyl Isononanoate, Phenoxyethanol, Disteardimonium Hectorite, Peg/ppg-18/18 Di'),
(11, 'Matte Lipstick', 'L-001', 'instock', '100', '30', 'cosmetics', 'Lipstick', 'images/572_9111_9b235262-87fd-4df5-970f-a72d237630cc.webp', 'images/572_9116_a7a5670e-aceb-4438-8d05-9a78edf4c998.webp', 'Creamy texture\r\nMatte and velvet finish\r\nLong-lasting\r\nSmudge-resistant\r\nColor: Soft Pink\r\nSize: 4.2 grams\r\nIngredients: Isodecyl Neopentanoate, Isononyl Isononanoate, PPG-3 Hydrogenated Castor Oil, Pentaerythrityl Tetrabehenate, Ethylhexyl Palmitate, Octyldodecanol, Paraffin, Euphorbia Cerifera Cera, Synthetic Wax, Ozokerite, Synthetic Fluorphlogopite, Copernica Cerifera Cera, Parfum, Phenoxyethanol, Tocopheryl Acetate, Silica, Ethylhexylglycerin, Pentaerythrityl Tetra-di-t-butyl Hydroxyhydroci'),
(13, 'Matte Lipstick', 'L-003', 'instock', '100', '30', 'cosmetics', 'Lipstick', 'images/572_9111_eaf0e918-1b83-436d-89b9-4922f5bbad36.webp', 'images/572_9116_e5cdd450-aa6a-45ed-a39d-be2377af253f.webp', 'Creamy texture\r\nMatte finish\r\nLong-lasting\r\nSmudge-resistant\r\nHydrating\r\nColor: Radiant Pink\r\nSize: 4.2 grams\r\nIngredients: Isodecyl Neopentanoate, Isononyl Isononanoate, PPG-3 Hydrogenated Castor Oil, Pentaerythrityl Tetrabehenate, Ethylhexyl Palmitate, Octyldodecanol, Paraffin, Euphorbia Cerifera Cera, Synthetic Wax, Ozokerite, Synthetic Fluorphlogopite, Copernica Cerifera Cera, Parfum, Phenoxyethanol, Tocopheryl Acetate, Silica, Ethylhexylglycerin, Pentaerythrityl Tetra-di-t-butyl Hydroxyhydr'),
(14, 'Intense Matte Lipstick', 'L-004', 'instock', '150', '30', 'cosmetics', 'Lipstick', 'images/572_9124_3f042249-24de-40a9-91ed-8f0e9d016a8f.webp', 'images/572_9116_e5cdd450-aa6a-45ed-a39d-be2377af253f.webp', 'Creamy texture\r\nMatte and velvet finish\r\nLong-lasting\r\nSmudge-resistant\r\nHydrating\r\nColor: Popping Pink\r\nSize: 4.2 grams\r\nIngredients: Isodecyl Neopentanoate, Isononyl Isononanoate, PPG-3 Hydrogenated Castor Oil, Pentaerythrityl Tetrabehenate, Ethylhexyl Palmitate, Octyldodecanol, Paraffin, Euphorbia Cerifera Cera, Synthetic Wax, Ozokerite, Synthetic Fluorphlogopite, Copernica Cerifera Cera, Parfum, Phenoxyethanol, Tocopheryl Acetate, Silica, Ethylhexylglycerin, Pentaerythrityl Tetra-di-t-butyl '),
(15, 'Intense Matte Lipstick ', 'L-005', 'instock', '150', '30', 'cosmetics', 'Lipstick', 'images/I1379CO-999-980.webp', 'images/572_9116_483fb7ae-4102-434a-88a2-2732eaa3e72b.webp', 'Creamy texture\r\nMatte and velvet finish\r\nLong-lasting\r\nSmudge-resistant\r\nHydrating\r\nColor: Dramatic Red\r\nSize: 4.2 grams\r\nIngredients: Isodecyl Neopentanoate, Isononyl Isononanoate, PPG-3 Hydrogenated Castor Oil, Pentaerythrityl Tetrabehenate, Ethyhexyl Palmitate, Octyldodecanol, Paraffin, Euphorbia Cerifera Cera, Synthetic Wax, Ozokerite, Synthetic Fluorphlogopite, Copernica Cerifera Cera, Parfum, Phenoxyethanol, Tocopheryl Acetate, Silica, Ethylhexylglycerin, Pentaerythrityl Tetra-di-t-butyl H'),
(16, 'Enamel Nail Paint', 'N-001', 'instock', '70', '30', 'cosmetics', 'Nail Paint', 'images/GRS_0241_79b5c420-fc58-4491-969e-23424648b4b5.webp', 'images/GRS_0251_d973ef41-d0b3-4962-b45c-6367619bbd25.webp', 'Enamel nude shade nail paint\r\nMatte and Gel finishing\r\nColor: Light Peach\r\nSize: 19 ml\r\nWeight: 134 g\r\nIngredients: Nitrocellulose, Acetyl Tributyl Citrate Adipic Acid/Neopentyl\r\nGlycol/Trimellitic Anhydride Copolymer,Isopropyl Alcohol, Adipic Acid\r\nStearalkonium Hectorite, Trimethyl Pentanyl Diisobutyrate\r\nSucrose Acetate Isobutyrate, Stearalkonium, Bentonite, Diacetone Alcohol\r\nCitric Acid, Hectorite, Phthalic Anhydride, Copolymer,Methicone, Talc'),
(17, ' Matte Nail Paint  ', 'N-002', 'instock', '70', '30', 'cosmetics', 'Nail Paint', 'images/GRS_0206_a13b281d-0156-43f6-870e-24777e2c1714.webp', 'images/GRS_0212.webp', 'Matte shade enamel nail paint\r\nGel finishing\r\nLong lasting\r\nColor: Lilac\r\nSize: 19 ml\r\nWeight: 135 g\r\nIngredients: Nitrocellulose, Acetyl Tributyl Citrate Adipic Acid/Neopentyl\r\nGlycol/Trimellitic Anhydride Copolymer,Isopropyl Alcohol, Adipic Acid\r\nStearalkonium Hectorite, Trimethyl Pentanyl Diisobutyrate\r\nSucrose Acetate Isobutyrate, Stearalkonium, Bentonite, Diacetone Alcohol\r\nCitric Acid, Hectorite, Phthalic Anhydride, Copolymer,Methicone, Talc'),
(18, 'Enamel Nail Paint', 'N-003', 'instock', '100', '30', 'cosmetics', 'Nail Paint', 'images/GRS_3638.webp', 'images/GRS_0227_593b39ec-0270-40c6-a781-8258beb733e4.webp', 'Gel like shining enamel nail paint\r\nQuick and gel finishing\r\nLong lasting\r\nColor: Mauve\r\nSize: 19 ml\r\nWeight: 134 g\r\nIngredients: Nitrocellulose, Acetyl Tributyl Citrate Adipic Acid/Neopentyl\r\nGlycol/Trimellitic Anhydride Copolymer,Isopropyl Alcohol, Adipic Acid\r\nStearalkonium Hectorite, Trimethyl Pentanyl Diisobutyrate\r\nSucrose Acetate Isobutyrate, Stearalkonium, Bentonite, Diacetone Alcohol\r\nCitric Acid, Hectorite, Phthalic Anhydride, Copolymer,Methicone, Talc'),
(19, 'Enamel Nail Paint', 'N-004', 'instock', '100', '30', 'cosmetics', 'Nail Paint', 'images/GRS_3581_cd177aba-84e9-48dd-821d-5200e101ba6b.webp', 'images/GRS_0174_00073e81-1fad-4d34-a31e-ecf0c13ad9e1.webp', 'Vibrant lime green enamel nail paint\r\nLong lasting gel shining\r\nColor: Lime Green\r\nSize: 19 ml\r\nWeight: 134 g\r\nIngredients: Nitrocellulose, Acetyl Tributyl Citrate Adipic Acid/Neopentyl\r\nGlycol/Trimellitic Anhydride Copolymer,Isopropyl Alcohol, Adipic Acid\r\nStearalkonium Hectorite, Trimethyl Pentanyl Diisobutyrate\r\nSucrose Acetate Isobutyrate, Stearalkonium, Bentonite, Diacetone Alcohol\r\nCitric Acid, Hectorite, Phthalic Anhydride, Copolymer,Methicone, Talc'),
(20, 'Glittering Nail Paint', 'N-005', 'instock', '100', '100', 'cosmetics', 'Nail Paint', 'images/GRS_3571_86f2093f-040f-4219-a185-155a9ba06954.webp', 'images/GRS_0082_32c22ac5-8f09-43da-bab1-3debb40cc73b.webp', 'Glittering golden nail paint\r\nShimmering gel finishing\r\nColor: Light Golden\r\nSize: 19 ml\r\nWeight: 134 g\r\nIngredients: Nitrocellulose, Acetyl Tributyl Citrate Adipic Acid/Neopentyl\r\nGlycol/Trimellitic Anhydride Copolymer,Isopropyl Alcohol, Adipic Acid\r\nStearalkonium Hectorite, Trimethyl Pentanyl Diisobutyrate\r\nSucrose Acetate Isobutyrate, Stearalkonium, Bentonite, Diacetone Alcohol\r\nCitric Acid, Hectorite, Phthalic Anhydride, Copolymer,Methicone, Talc'),
(21, 'Soft Touch Powder', 'S-001', 'instock', '120', '50', 'cosmetics', 'Face Poweder', 'images/I2086CO-999-106.webp', 'images/WEB_9194_e9b741f0-1d4f-4210-88cc-7135788b52fa.webp', 'Compact powder with a pressed powder formula\r\nNo makeup look with satin and matte finish \r\nMedium to full coverage\r\nLong-wearing\r\nFor normal, combination, and oily skin types\r\nKit includes a mirror and puff blender\r\nColor: Subtle Pink\r\nSize: 11.5 grams\r\nIngredients: Talc, Mica, CI 77891(Titanium Dioxide), Octyldodecyl Stearoyl, Stearate, Isodecyl Neopentanoate, Caprylic/ Capric Triglyceride, Phenoxyethanol, Allantoin, Parfume, Ethylhexyglycerin'),
(22, 'Soft Touch Powder', 'S-002', 'instock', '100', '50', 'cosmetics', 'Face Poweder', 'images/I2086CO-999-103.webp', 'images/WEB_9194.webp', 'Compact powder with a pressed powder formula\r\nNo makeup look with satin and matte finish \r\nMedium to full coverage\r\nLong-wearing\r\nFor normal, combination, and oily skin types\r\nKit includes a mirror and puff blender\r\nColor: Light Skin\r\nSize: 11.5 grams\r\nIngredients: Talc, Mica, CI 77891(Titanium Dioxide), Octyldodecyl Stearoyl, Stearate, Isodecyl Neopentanoate, Caprylic/ Capric Triglyceride, Phenoxyethanol, Allantoin, Parfume, Ethylhexyglycerin'),
(23, 'Mineral Blusher', 'S-003', 'instock', '100', '50', 'cosmetics', 'Face Poweder', 'images/I2087CO-999-GB2.webp', 'images/WEB_9186_8e79fd51-40d5-403b-a99c-c0b2a7b959d4.webp', 'Satin and shimmery texture\r\nRichly pigmented and lightweight\r\nLight coverage\r\nGives a natural and glowing blush\r\nFor all skin types\r\nColor: Spicy Pink\r\nSize: 6.5 grams\r\nIngredients: Mica, Talc, Nylon-12, Polymethyl Methacrylate Stearate, Cyclopentasiloxane, Phenoxyethanol, Dimethicone Crosspolymer, Trimethylsiloxysilicate, Ethylhexylglycerin'),
(24, 'Pressed Highlighter', 'S-003', 'instock', '100', '50', 'cosmetics', 'Face Poweder', 'images/I1369CO-999-PH1_f4070b9c-2c02-4af3-8a30-5b3433de4cfa.webp', 'images/WEB_9181.webp', 'Satin and shimmery texture Richly pigmented and lightweight Light coverage Gives a natural and glowing blush For all skin types Color: Spicy Pink Size: 6.5 grams Ingredients: Mica, Talc, Nylon-12, Polymethyl Methacrylate Stearate, Cyclopentasiloxane, Phenoxyethanol, Dimethicone Crosspolymer, Trimethylsiloxysilicate, Ethylhexylglycerin'),
(25, 'Soft Touch Powder', 'S-005', 'instock', '100', '50', 'cosmetics', 'Face Poweder', 'images/I2086CO-999-103.webp', 'images/WEB_9194.webp', 'Compact powder with a pressed powder formula\r\nNo makeup look with satin and matte finish \r\nMedium to full coverage\r\nLong-wearing\r\nFor normal, combination, and oily skin types\r\nKit includes a mirror and puff blender\r\nColor: Wheat\r\nSize: 11.5 grams\r\nIngredients: Talc, Mica, CI 77891(Titanium Dioxide), Octyldodecyl Stearoyl, Stearate, Isodecyl Neopentanoate, Caprylic/ Capric Triglyceride, Phenoxyethanol, Allantoin, Parfume, Ethylhexyglycerin'),
(39, 'Pearl Long Necklace', 'G-001', 'instock', '120', '118', 'jewellery', 'Necklace', 'images/GRS_0297_a9172106-0f9e-4dad-8ef6-af5a79b11a24.jpg', 'images/GRS_0309_69e406ef-784c-45c8-820d-d202481d2f38.jpg', 'Long style pearl necklace\r\nMetallic looped ring pendant\r\nClasp closure with ornamented coin\r\nColor: White\r\nMaterial: Metal\r\nWeight: 118 g'),
(40, 'Vintage Layered Necklace', 'G-002', 'instock', '150', '1004', 'jewellery', 'Necklace', 'images/GRS_0232_b4b4b778-fc71-4080-a055-62e3307932cb.jpg', 'images/GRS_0233.jpg', 'Vintage layered style necklace\r\nRed tone embellishment on pendant\r\nClasp closure\r\nColor: Green\r\nMaterial: Metal\r\nWeight: 104 g'),
(41, 'Classic Layered Necklace', 'G-003', 'instock', '100', '136', 'jewellery', 'Necklace', 'images/GRS_6908.jpg', 'images/GRS_6914.jpg', 'Classic layered style necklace\r\nMetallic chains\r\nSingle pendant with animal pattern\r\nColor: Golden\r\nMaterial: Metal\r\nWeight: 136 g'),
(42, 'Butterfly Layered Necklace', 'G-004', 'instock', '150', '88', 'jewellery', 'Necklace', 'images/GRS_7036_802ad4ce-9e3c-4a8a-b7f5-fde54745f517.webp', 'images/GRS_7040.jpg', 'Layered style chains\r\nButterfly shape pendants with rhinestones detailing\r\nClasp closure with embellishment\r\nColor: Golden\r\nMaterial: Metal\r\nWeight: 88 g'),
(43, 'Golden Layered Necklace', 'G-005', 'instock', '150', '100', 'jewellery', 'Necklace', 'images/GRS_3869.jpg', 'images/GRS_3875.jpg', 'Metallic chains in layered style\r\nLock shape pendant\r\nClasp closure\r\nColor: Golden\r\nMaterial: Metal\r\nWeight: 100 g');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
