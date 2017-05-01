-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2017 at 09:41 PM
-- Server version: 5.1.71-community-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_kot90`
--

-- --------------------------------------------------------

--
-- Table structure for table `bugReports`
--

CREATE TABLE IF NOT EXISTS `bugReports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` text NOT NULL,
  `reporter` text NOT NULL,
  `status` varchar(554) NOT NULL DEFAULT 'New',
  `priority` text NOT NULL,
  `bugName` text NOT NULL,
  `comments` text NOT NULL,
  `notes` varchar(254) NOT NULL DEFAULT 'Nothing Yet',
  `noteEdits` varchar(254) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `bugReports`
--

INSERT INTO `bugReports` (`id`, `version`, `reporter`, `status`, `priority`, `bugName`, `comments`, `notes`, `noteEdits`) VALUES
(3, '0.7.3', 'Kczak', 'Fixed', 'Low Priority', 'Duplicate Items', 'Tent will duplicate items, and overwrite current items with duplicates.  Randomly happens.', '', ''),
(2, '0.7.3', 'Forum Members', 'Fixed', 'Medium Priority', 'Hang Up Joining Serve', 'Not sure what is causing this bug or if it&#039;s even fixable. Might be causing host lag. Could also be caused by host switching.', '', ''),
(5, '0.7.3', 'Wrecktem_Recker', 'Fixed', 'Low Priority', 'Grass bug', 'Grass will not render, despite the grass on/off switch set to on.', '', ''),
(6, '0.7.3', 'Wrecktem_Recker', 'Fixed', 'Low Priority', 'Bush Rendering', 'The render distance for bushes is very close allowing players to see what is hiding or hidden in them.', '', ''),
(7, '0.7.3', 'BlackPaladin', 'Fixed', 'Medium Priority', 'No Body', 'No body or loot shows up when you die.', '', ''),
(8, '0.7.3', 'Members', 'Fixed', 'Low Priority', 'No Death Reason', 'Chat doesnt show reason of death.', '', ''),
(10, '0.7.3', 'motermike', 'Fixed', 'Medium Priority', 'Ping', 'Ping values are either wrong in the player list or players are able to have huge pings in the game for some reason.', '', ''),
(11, '0.7.3', 'Voveriukas11', 'Fixed', 'Medium Priority', 'Crash Screen exit not working', 'When at the crash screen, "click to exit" to server browser not working, forcing a hard quit, where you lose all progress and inventory.', '', ''),
(12, '0.7.3', 'Kczak', 'Fixed', 'Medium Priority', 'Day/night cycle', 'some days last forever, literally.  Seems that when someone logs in to the server and is immediately assigned host, the cycle will reset as if they were the only ones on the server and just "started" it.', '', ''),
(13, '0.7.4', 'Community', 'Fixed', 'High Priority', 'Duplicate Player', 'Dup players still appear upon login and death. Players take damage when the duplicate is hit.', '', ''),
(14, '0.7.4', 'Voveriukas11', 'Fixed', 'Low Priority', 'Cannot Look During Action', 'Cannot look around while preforming an action like eating or building', '', ''),
(15, '0.7.4', 'Voveriukas11', 'Fixed', 'Low Priority', 'Inventory auto closer', 'Inventory should auto close while drinking/eating', '', ''),
(16, '0.7.4', 'Community', 'Fixed', 'High Priority', 'Surrender Mode', 'Surrender key doesnt toggle surrender mode', '', ''),
(17, '0.7.4', 'kczak', 'New', 'High Priority', 'Items disappear as you put them in crates/tent', 'Sometimes items will disappear when moving them in and out of crate/tent.  All inventory items seem to be affected, except planks.  Have not had Planks disappear yet', '', ''),
(19, '', '', 'New', 'Low Priority', '', '', '', ''),
(20, '0.7.5', 'BlackPaladin', 'Fixed', 'High Priority', 'Crate placement', 'Crates can be placed in public places again. This may affect other objects as well.', 'Has this been tested on safes? (chaozz)', '3'),
(21, '0.7.5', 'DarkCoder', 'Fixed', 'Medium Priority', 'Error message', 'Game does not state why an item cant be placed in an invalid place', 'Nothing Yet', ''),
(27, '0.7.5', 'chaozz', 'Fixed', 'Low Priority', 'Fire barrels', 'You can not turn off a firebarrel without matches and two logs in your inventory (needed to ignite a firebarrel)', 'Nothing Yet', ''),
(28, '0.7.5', 'chaozz', 'Fixed', 'Low Priority', 'Missing messages', 'Messages like incorrect placement error messages are not shown.', 'Nothing Yet', ''),
(29, '0.7.5', 'DarkCoder', 'New', 'Medium Priority', 'Proximity message', 'Proximity warning even when looking at repaired walls', 'Nothing Yet', '0'),
(30, '0.7.4', 'Whitewolf', 'New', 'Medium Priority', 'Building on other foundation', 'Crates can be built on a foundation if they aren&apos;t touching.', 'Nothing Yet', '0'),
(31, '0.7.5', 'Whitewolf', 'Fixed', 'Medium Priority', 'Building on other foundation', 'Crates can be built over/on a foundation', 'I think it is caused by dropping planks or something and building on top of those instead of actually on the foundation', '1'),
(32, '0.7.5', 'Aprost', 'New', 'Low Priority', 'Non donators Outfit ', 'Non donators have a slight chance of spawning with red tshirt. relogging changes it back to normal (grey)', 'Nothing Yet', '0'),
(39, '0.7.6', 'Members', 'Not A Bug', 'Low Priority', 'Host Switch', 'The host lags a lot if the first host logs out and the host position switches to a different player.', 'Nothing Yet', '0'),
(38, '0.7.6', 'DarkCoder', 'Fixed', 'Medium Priority', 'Build near player', 'Cant build while near another player. &apos;you cannot build onto or near something that you don&apos;t own&apos;', 'Nothing Yet', '0'),
(37, '0.7.6', 'BlackPaladin', 'Not A Bug', 'Medium Priority', 'Close Object Placement', 'You have to cancel crafting if you try crafting a foundation too close to a different one you own', 'Message should be changed to say you cannot build near any object\r\n\r\nIgnore Testing-FG', '5'),
(40, '0.7.6', 'Members', 'Fixed', 'Medium Priority', 'Containers losing items', 'Items in a container have a chance at disappearing needing you to close and open the container to get them back.', 'Might be a sync issue. Some players have also needed to log out to get items back.', '1'),
(41, '0.7.6', 'Members', 'Fixed', 'Low Priority', 'Slide when opening menu', 'Pressing C to craft or E to open container while moving with WASD will lock that movement into a slide that only ends when the menu is closed', 'Nothing Yet', '0'),
(42, '0.7.6', 'HoangMarcel', 'Fixed', 'Medium Priority', 'Trap Bug', 'Traps don&apos;t collapse when triggered', 'Nothing Yet', '0'),
(43, '0.7.6', 'Voveriukas11', 'Fixed', 'Medium Priority', 'Auto kick', 'When you get auto-kicked for exceeding the ping limit 3 times, the screen blacks out and you have to hard-exit the game losing all your items and days alive.', 'Nothing Yet', '0'),
(44, '0.7.6', 'kczak', 'Fixed', 'Low Priority', 'Combat Logging', 'You can combat log and keep your items when you&apos;re in a fight.', 'Nothing Yet', '0'),
(45, '0.7.6', 'n/a', 'Fixed', 'Low Priority', 'Buggy campfires', 'Campfires seem a bit buggy at times, with disappearing contents.', 'Nothing Yet', '0'),
(46, '0.7.7', 'kczak', 'Fixed', 'Low Priority', 'Short Door', 'To doors of the round huts in craft are shorter than the player', 'Nothing Yet', '0'),
(47, '0.7.7', 'Phaete', 'Fixed', 'Low Priority', 'Inventory screen goes grey', 'Open Inventory. Left click can of beans. Wait until eating is finished and inventory pops up again. now left click an empty spot in inventory (not where can was)', 'Nothing Yet', '0'),
(48, '0.7.7', 'Wrecktem_Recker', 'New', 'Medium Priority', 'Exit Tent', 'Exiting a tent after being inside for a while will freeze the game with a black loading screen', 'Nothing Yet', '0'),
(49, '0.7.7', 'Wrecktem_Recker', 'Not A Bug', 'Low Priority', 'Texture Rendering', 'Textures render incorrectly at certain distances', 'Nothing Yet', '0'),
(50, '0.7.7', 'BlackPaladin', 'Fixed', 'Low Priority', 'Death Messages', 'Death messages are not being displayed upon death', 'Nothing Yet', '0'),
(54, '0.7.7', 'BlackPaladin', 'Fixed', 'High Priority', 'Foundation indestructible', 'Foundations made by players can&apos;t be broken, but can be hit', 'Nothing Yet', '0'),
(55, '0.7.7', 'Phaete', 'New', 'Medium Priority', 'Free view stuck', 'Going up to a crate, turning around and using free view to look at the crate will allow you to open it. Closing the crate with free view off will lock keep you looking backwards as if free view was still on. Pressing Alt to use free view again will allow you to move the camera again.', 'Nothing Yet', '0'),
(56, '0.7.8', 'DTOMfike', 'Fixed', 'Medium Priority', 'Indestructible Objects', 'Structures cannot be destroyed or respawn after relog', 'Nothing Yet', '0'),
(57, '0.7.8', 'n/a', 'Fixed', 'Low Priority', 'Tiny hangar', 'Hangar is 10x too small', 'Nothing Yet', '0'),
(58, '0.7.8', 'Phaete', 'Fixed', 'Low Priority', 'Top 10 List', 'Top 10 has 4 times chondrite server US2', 'Nothing Yet', '0'),
(59, '0.7.9', 'Community', 'New', 'High Priority', 'Duplicating Zombies', 'Killing a zombie makes a new one spawn in it&apos;s spawn location. This can happen upwards of 3 times before they stop spawning', 'Nothing Yet', '0'),
(60, '0.7.9', 'Community', 'New', 'High Priority', 'Duplicating Zombies', 'Killing a zombie makes a new one spawn in it&apos;s spawn location. This can happen upwards of 3 times before they stop spawning', 'Nothing Yet', '0'),
(61, '0.7.9', 'Community', 'New', 'High Priority', 'Duplicating Zombies', 'Killing a zombie makes a new one spawn in it&apos;s spawn location. This can happen upwards of 3 times before they stop spawning', 'Nothing Yet', '0'),
(62, '0.7.9', 'Community', 'New', 'High Priority', 'Duplicating Zombies', 'Killing a zombie makes a new one spawn in it&apos;s spawn location. This can happen upwards of 3 times before they stop spawning', 'Nothing Yet', '0'),
(63, '0.7.9', 'Community', 'New', 'High Priority', 'Duplicating Zombies', 'Killing a zombie makes a new one spawn in it&apos;s spawn location. This can happen upwards of 3 times before they stop spawning', 'Nothing Yet', '0'),
(64, '0.7.9', 'Community', 'New', 'High Priority', 'Zombies Duplicating', 'Killing zombie can cause a new one to spawn at its spawn location. This can happen upwards of 3 times before they stop spawning.', 'Nothing Yet', '0'),
(65, '0.7.9', 'Community', 'New', 'High Priority', 'Zombies Duplicating', 'Killing zombie can cause a new one to spawn at its spawn location. This can happen upwards of 3 times before they stop spawning.', 'Nothing Yet', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bugReqs`
--

CREATE TABLE IF NOT EXISTS `bugReqs` (
  `id` int(254) NOT NULL AUTO_INCREMENT,
  `version` text NOT NULL,
  `name` text NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `bugReqs`
--

INSERT INTO `bugReqs` (`id`, `version`, `name`, `comments`) VALUES
(9, '0.7.8', 'rektem', 'i played the game with fog one time, i exited out, next session i turn the fog off, i didnt want it anymore, now i keep logging in and the fog is ALWAYS ON, and i dont have my custom shirt on, its the default gray one, but i can change it to my custom shirt b4 game each time, but my settings seem to be getting ignored and reverting to others'),
(6, '0.7.8', 'jajajaja', 'pages looks A LOT better now, may i suggest adding a FAQ also on this page for those minor things like crates not holding items and things of that sort as you come across them, i dont have a specific list but i occasionally see the same questions being asked, and the current survius version is 7.8, idk if that (b.a.r.0.7.7) is supposed to have EXAMPLE before it, or if it hasnt been updated yet, but either way, its coming along really nice'),
(10, '0.7.8', 'rektem', 'insanely low timeout timer, occasionally, the lag, or fps, causes the screen to skip a beat, and this causes the timer to kick me out of my storage device, Or, wont let me in at all, because it keeps timing out,'),
(14, '0.7.9', 'Community', 'Killing zombie can cause a new one to spawn at its spawn location. This can happen upwards of 3 times before they stop spawning.');

-- --------------------------------------------------------

--
-- Table structure for table `dc_comments`
--

CREATE TABLE IF NOT EXISTS `dc_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transaction_id` (`transaction_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `dc_donations`
--

CREATE TABLE IF NOT EXISTS `dc_donations` (
  `transaction_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `donor_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `amount` double NOT NULL DEFAULT '0',
  `original_request` text COLLATE utf8_unicode_ci NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transaction_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surviusAdminCP`
--

CREATE TABLE IF NOT EXISTS `surviusAdminCP` (
  `id` int(254) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `isVerified` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `surviusHosting`
--

CREATE TABLE IF NOT EXISTS `surviusHosting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `adminOnly` text NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `surviusHosting`
--

INSERT INTO `surviusHosting` (`id`, `name`, `adminOnly`, `comments`) VALUES
(47, 'NYwgtkAIGc', 'true', ''),
(46, 'G0vbB5A4Os', 'false', ''),
(45, 'NAJLB9hZm4', 'false', ''),
(44, 'YwwB3T55uy', 'false', ''),
(43, 'sSmJsSONYR', 'false', ''),
(42, '6D5mkD85OG', 'true', 'Perico Ip lookup'),
(41, 'QUoisdW3rw', 'false', ''),
(26, '9eIAYhSul8', 'true', '*****'),
(40, '157w7nEl3a', 'false', ''),
(39, 'N9P4uloJY2', 'false', ''),
(36, 'cmoUANdeQk', 'true', 'BP demo of dupe exploit'),
(38, 'T2ShovoVNE', 'false', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
