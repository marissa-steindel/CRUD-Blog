-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 12:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serverside`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `timestamp`, `content`) VALUES
(1, 'He Struck a Chord with the Voters', '2022-06-02 19:48:57', 'So, how \'bout them Knicks? Yeah, I do that with my stupidness. I daresay that Fry has discovered the smelliest object in the known universe! Ah, yes! John Quincy Adding Machine. He struck a chord with the voters when he pledged not to go on a killing spree.\r\n\r\nYou lived before you met me?! You guys aren\'t Santa! You\'re not even robots. How dare you lie in front of Jesus? Anyhoo, your net-suits will allow you to experience Fry\'s worm infested bowels as if you were actually wriggling through them.\r\n\r\nIs today\'s hectic lifestyle making you tense and impatient? Ah, yes! John Quincy Adding Machine. He struck a chord with the voters when he pledged not to go on a killing spree. Yes, except the Dave Matthews Band doesn\'t rock.'),
(2, 'The Lady of the Lake', '2022-06-02 19:48:27', 'Well, how\'d you become king, then? Why do you think that she is a witch? Well, what do you want? Be quiet! And this isn\'t my nose. This is a false one.\r\n\r\nThe Lady of the Lake, her arm clad in the purest shimmering samite, held aloft Excalibur from the bosom of the water, signifying by divine providence that I, Arthur, was to carry Excalibur. That is why I am your king. And this isn\'t my nose. This is a false one.'),
(3, 'Patriotism by Caring for Our Families', '2022-06-03 03:47:37', 'Our pride is based on a very simple premise, summed up in a declaration made over two hundred years ago: We hold these truths to be self-evident, that all men are created equal. To the Joshua generation, these challenges seem momentous - and they are. We want to talk about how to bring them home from a war that never should\'ve been authorized and never should\'ve been waged, and we want to talk about how we\'ll show our patriotism by caring for them, and their families, and giving them the benefits they have earned. Israel must also live up to its obligations to ensure that Palestinians can live, and work, and develop their society. The fourth issue that I will address is democracy.'),
(5, 'Just Float and Wait for the Wind to Blow You Around', '2022-06-09 21:57:07', 'Let&#039;s put some happy trees and bushes back in here. Just go back and put one little more happy tree in there. Don&#039;t forget to tell these special people in your life just how special they are to you.\r\n\r\nNo worries. No cares. Just float and wait for the wind to blow you around. Just make a decision and let it go. Steve wants reflections, so let&#039;s give him reflections.\r\n\r\nMaybe, just to play a little, we&#039;ll put a little tree here. Those great big fluffy clouds. If these lines aren&#039;t straight, your water&#039;s going to run right out of your painting and get your floor wet.\r\n\r\nThis is the fun part Let your heart take you to wherever you want to be. Zip. That easy. We touch the canvas, the canvas takes what it wants.\r\n\r\nIsn&#039;t that fantastic? You can just push a little tree out of your brush like that. The secret to doing anything is believing that you can do it. Anything that you believe you can do strong enough, you can do. Anything. As long as you believe. Let&#039;s get wild today. Paint anything you want on the canvas. Create your own world. That&#039;s a crooked tree. We&#039;ll send him to Washington.\r\n\r\nIn your world you can create anything you desire. All you need is a dream in your heart, and an almighty knife. If it&#039;s not what you want - stop and change it. Don&#039;t just keep going and expect it will get better. You can do anything here. So don&#039;t worry about it. We don&#039;t need any guidelines or formats. All we need to do is just let it flow right out of us. With something so strong, a little bit can go a long way. '),
(7, 'Sweet Mornings of Spring', '2022-06-03 04:22:53', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was.'),
(10, 'Kids Should Be Allowed to Break Stuff More Often', '2022-06-03 17:18:15', 'Kids should be allowed to break stuff more often. That\'s a consequence of exploration. Exploration is what you do when you don\'t know what you\'re doing. That\'s what scientists do every day.\r\n\r\nDarwin\'s theory of evolution is a framework by which we understand the diversity of life on Earth. But there is no equation sitting there in Darwin\'s \'Origin of Species\' that you apply and say, \'What is this species going to look like in 100 years or 1,000 years?\' Biology isn\'t there yet with that kind of predictive precision.\r\n\r\nLet\'s find a new way to think about the entire taxonomy of solar system objects, and not clutch to this concept of \'planet,\' which, of course, only ever meant, \'Do you move against the background stars, regardless of what you\'re made of?\'\r\n\r\nThe universe is almost 14 billion years old, and, wow! Life had no problem starting here on Earth! I think it would be inexcusably egocentric of us to suggest that we\'re alone in the universe.'),
(11, 'Behind the Word Mountains', '2022-06-07 19:59:39', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.\r\n\r\nA small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.\r\n\r\nEven the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.\r\n\r\nThe Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn&rsquo;t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
