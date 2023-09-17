-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for project
DROP DATABASE IF EXISTS `project`;
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `project`;

-- Dumping structure for table project.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` char(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project.admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`username`, `password`, `fullname`, `phone`, `email`, `pass`) VALUES
	('nhi12345', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'Nguyễn Yến Nhi', '0968804065', 'samsussi.02@gmail.com', '1234567');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table project.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project.category: ~5 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`categoryID`, `name`) VALUES
	(2, 'Vagetable Juice'),
	(3, 'Chocolate Juice'),
	(4, 'Winter Juice'),
	(5, 'Smothie'),
	(6, 'Cocktail');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table project.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryID` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `price` double NOT NULL,
  `picture` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`productID`),
  KEY `categoryID` (`categoryID`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project.product: ~29 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`productID`, `categoryID`, `name`, `detail`, `price`, `picture`) VALUES
	(6, 3, 'Banana Cacao Coconut', '2 tablespoons cacao powder*\r\n2 tablespoons coconut oil, melted\r\n2 tablespoons pure maple syrup\r\n1/4 teaspoon vanilla extract\r\npinch of salt\r\nFor the smoothie\r\n2 bananas, previously sliced and frozen\r\n2 tablespoons unsweetened shredded coconut, plus extra for topping\r\n2 medjool dates, pitted\r\n1 tablespoon cacao powder*\r\n1 tablespoon almond butter\r\n1 - 1 1/4 cups unsweetened vanilla almond milk*\r\npinch of salt\r\nraw chocolate sauce for drizzling\r\ngranola for topping, optional\r\n', 25, 'bananaa.jpg'),
	(7, 3, 'Boozy Raspberry Hot Chocolate', '12 ounces (roughly 3 1/2 cups) fresh raspberries*\r\n1/2 cup granulated sugar\r\n1/4 cup water\r\n1 1/2 cups milk\r\n1/4 cup unsweetened cocoa powder\r\n2 tablespoons powdered sugar\r\nMini marshmallows or whipped cream, for topping\r\n', 25, 'booz.jpg'),
	(8, 3, 'Coconut Chocolate Zucchini', 'Produce\r\n3 4 cup sliced zucchini (about 1/2\r\n1 1/2 tbsp Cacao powder\r\n1 cup Cauliflower, frozen\r\n2 Medjool dates, pitted large\r\nCanned Goods\r\n1 cup Coconut milk, light\r\nCondiments\r\n1 tbsp Almond butter or peanut butter\r\n1 Chocolate chips or a drizzle of almond butter or chocolate almond butter, Mini\r\nBaking & Spices\r\n1 Pinch Salt\r\n1/2 tsp Vanilla extract\r\nNuts & Seeds\r\n1 Coconut flakes or regular coconut flakes, Toasted\r\n', 25, 'co.jpg'),
	(9, 3, 'Chocolate Peanut Butter Oats and Chia Parfait', 'Breakfast Foods\r\n1 cup Rolled oats, old-fashioned\r\nCondiments\r\n3 tbsp Maple syrup\r\n1 tbsp Peanut butter\r\nPasta & Grains\r\n1 Oats\r\nBaking & Spices\r\n2 tbsp Cocoa powder\r\n1/4 tsp Vanilla extract\r\nNuts & Seeds\r\n2 1/8 cup Almond\r\n5 tbsp Chia seed\r\nDesserts\r\n1 Chia pudding\r\n', 25, 'peanut.jpg'),
	(10, 3, 'Chocolate Vanilla Mousse', '150 g dark chocolate (70%)\r\n150 ml heavy cream\r\n80 g granulated sugar\r\n1 vanilla bean\r\n4 eggs\r\npinch of salt\r\n\r\nto serve\r\nwhipped cream\r\ngrated dark chocolate', 25, 'vani.jpg'),
	(11, 3, 'French Hot Chocolate Recipe', '2 cups whole milk (475 ml)\r\n6 ounces good-quality 70% dark chocolate, finely chopped (170g)\r\n2 tablespoons light brown sugar, optional (24g)\r\npinch of coarse sea salt, for garnish\r\n1/3 cup heavy whipping cream (80 ml)\r\n1/4 teaspoon caster sugar\r\n1/8 teaspoon vanilla extract\r\n', 25, 'fren.jpg'),
	(12, 3, 'Mint Chocolate Chip fragrance oil', '1/3 cup Baileys Irish Cream, chilled\r\n2 cup whipping cream, chilled\r\n1/2 cup milk\r\n17 Oreo cookies\r\n1/4 cup icing sugar\r\n7 oz. semi-sweet chocolate chips\r\n', 25, 'min.jpg'),
	(13, 6, 'Blueberry Mojitos with Lavender Syrup.', '\r\n1/2 cup fresh blueberries\r\n2 1/2 ounces of lavender simple syrup, recipe below\r\na handful of fresh mint leaves\r\n1 1/2 ounce of white rum\r\n1 1/2 ounces of club soda\r\nthe juice of one lime\r\nLAVENDER SIMPLE SYRUP\r\n\r\n1/2 cup sugar\r\n1/2 cup water\r\n2 teaspoons dried culinary lavender\r\n2 sprigs fresh lavender\r\n', 20, 'blueberry.jpg'),
	(14, 6, 'Coconut Pineapple Rhubarb Tiki Cocktail', '\r\n2 oz rum\r\n1 oz fresh pineapple juice\r\n3/4 oz unsweetened coconut cream\r\n3/4 oz rhubarb syrup, recipe here\r\n1/4 oz lime\r\n1 bar spoon/teaspoon Sfumato Amaro, optional\r\ngarnish: rhubarb ribbon, pineapple leaves, edible flower, pineapple flower chip\r\n', 20, 'pine.jpg'),
	(15, 6, 'Cucumber Mint Gin & Tonics', '8 tbsp. of gin\r\nCold tonic water\r\n4 lemon slices\r\n4 cucumbers cut into thin strips lengthwise (with a potato peeler)\r\nFor the mint syrup:\r\n\r\n1 cup of mint\r\n1/2 cup of sugar\r\n1/2 cup of water', 20, 'cumint.jpg'),
	(16, 6, 'Elderflower Prosecco Cocktail', '1 bottle of Prosecco (can substitute Champagne)\r\n12 oz. (1 1/2 cups) seltzer/club soda\r\n3-4 tablespoons elderflower syrup\r\n1 large orange, sliced\r\nLarge handful fresh mint leaves\r\nFew sprigs fresh rosemary\r\n-Ice\r\n', 20, 'elder.jpg'),
	(17, 6, 'Empress Elderflower Spanish Gin & Tonic', '60 ml Kaiserin Gin Tonic\r\n120-150 ml Fieberbaum-Holunderblüten-Tonikum\r\n2 rosa Pampelmusenscheiben\r\n10 Wacholderbeeren\r\n1 Rosmarinzweig\r\n', 20, 'emoress.jpg'),
	(18, 6, 'Rosemary Lemonade Spritzer Cocktail', '2 cups water\r\n2 fresh rosemary sprigs\r\n1/2 cup sugar\r\n1/2 cup honey\r\n1-1/4 cups fresh lemon juice\r\n6 cups cold water\r\nIce cubes\r\n', 20, 'ros.jpg'),
	(19, 6, 'Sparkling Limoncello Cocktail', '1.5 oz Herradura Silver Tequila\r\n5 oz limoncello\r\n25 oz amaretto\r\n1 oz lime juice\r\n5 oz simple syrup\r\n5 oz orange juice\r\n', 20, 'spa.jpg'),
	(20, 6, 'Strawberry Mint & Hibiscus Iced Tea', '1 pint fresh strawberries sliced - divided (1 1/2 cup and 1/2 cup)\r\n20 fresh mint leaves more or less to liking plus more for garnish\r\n4 Celestial Seasonings Red Zinger tea bags\r\n\r\n', 20, 'straw.jpg'),
	(21, 5, 'Chlorella And Spirulina Detox Smoothie', '8 tbsp. of gin\r\nCold tonic water\r\n4 lemon slices\r\n4 cucumbers cut into thin strips lengthwise (with a potato peeler)\r\nFor the mint syrup:\r\n\r\n1 cup of mint\r\n1/2 cup of sugar\r\n1/2 cup of water', 23, 'chl.jpg'),
	(22, 5, 'Feel-Good Pineapple Smoothie', '1 cup ice cubes\r\n2 cups frozen pineapple chunks\r\n\r\n½ cup banana slices, about 1 medium banana\r\n½ cup plain greek yogurt\r\n¾ cup pineapple juice\r\n¼ cup coconut milk\r\n', 23, 'fell.jpg'),
	(23, 5, 'Green Monster Orange Smoothie', 'GREEN MONSTER SMOOTHIE\r\n1 frozen banana\r\n1 & 1/2 cups frozen pineapple\r\n1/2 cup frozen mango\r\nlarge handful of spinach\r\nwater or milk, to help smoothie blend\r\nORANGE SMOOTHIE\r\n3 frozen bananas\r\n1 orange, peeled\r\n1/2 cup frozen mango\r\nhandful of baby carrots or 1 large carrot\r\n1 cup orange juice\r\n', 23, 'greaa.jpg'),
	(24, 5, 'Hawaiian Berry Smoothie', 'HAWAIIAN LAYER\r\n 1 orange, sliced\r\n 2 frozen bananas, sliced\r\n 1 cup frozen mango\r\n 1/4 cup orange juice, plus more if smoothie is too thick\r\nBERRY LAYER\r\n 1 container berry yogurt (roughly 5.3-6 oz)\r\n 2 cups frozen berries (strawberries, blackberries, blueberries, cherries - the more blueberries and blackberries the more purple the smoothie will be)\r\n 1 frozen banana, sliced\r\n 1/4 cup milk, plus more if smoothie is too thick\r\n', 23, 'h.jpg'),
	(25, 5, 'Simple Oceanic Layered Chia Pudding Recipe', '1 14 oz can light coconut milk\r\n1/ 4 cup chia seeds\r\n1 tablespoon chia seeds\r\n1 tablespoon maple syrup\r\n2 tablespoons blue mylk powder\r\n1 teaspoon blue spirulina, optional\r\n1/ 4 cup blueberries\r\n1/ 4 cup blackberries\r\n2 tablespoons shredded coconut, or flaked coconut\r\n2 tablespoons micro greens or sprouts\r\n', 23, 'sim.jpg'),
	(26, 5, 'Spirulina protein smoothie', '2 tablespoons blue mylk powder\r\n1 teaspoon blue spirulina, optional\r\n1/ 4 cup blueberries\r\n1/ 4 cup blackberries\r\n2 tablespoons shredded coconut, or flaked coconut\r\n2 tablespoons micro greens or sprouts\r\n', 23, 'spi.jpg'),
	(27, 4, 'hot chocolate', 'Chocolate\r\nMint\r\nStreet\r\nFresh milk', 15, 'hot.jpg'),
	(28, 4, 'Fresh Ginger Tea', '1-inch chunk of fresh ginger (no need to peel), sliced into pieces no wider than ¼-inch\r\n1 cup water\r\nOptional flavorings (choose just one): 1 cinnamon stick, 1″ piece of fresh turmeric (cut into thin slices, same as the ginger), or several sprigs of fresh mint\r\nOptional add-ins: 1 thin round of fresh lemon or orange, and/or 1 teaspoon honey or maple syrup, to taste\r\n', 15, 'aa.jpg'),
	(29, 4, 'Hot Toddy', 'Tea\r\nHot water\r\nCinnamon\r\nLemon\r\nSugar', 15, '123.jpg'),
	(30, 2, 'Tomato juice', '900g tomatoes\r\nsugar\r\nsalt\r\npepper', 10, 'tomato.jpg'),
	(31, 2, 'Carot juice', '500 grams of carrots\r\n10ml lemon juice\r\n10ml sugar syrup\r\nIce', 10, 'ca.jpg'),
	(32, 2, 'Beetroot juice', 'Beetroot 3 tubers Filtered\r\nwater 60 ml Yellow sugar \r\n2 teaspoons', 10, 'beetroot .jpeg.jpg'),
	(33, 2, 'Celery Juice', '6 stalks of celery\r\n3 green apples\r\n1/2 pineapple\r\n1 piece of ginger\r\nHoney', 10, 'ce.jpg'),
	(34, 2, 'Cucumber juice', '3 Cucumbers\r\nCountry\r\n1 liter Salt\r\n1 teaspoon honey\r\n1/2 lemon', 10, 'cu.jpg');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
