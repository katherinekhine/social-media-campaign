-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 05:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smc`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `title`, `des`, `image`) VALUES
(1, 'Facebook', 'Facebook is a leading social media platform that connects billions of people worldwide. With its user-friendly interface and diverse range of features, Facebook allows users to create personal profiles, connect with friends and family, share updates, photos, and videos, and discover content from a wide range of sources. From networking and communication to entertainment and news, Facebook offers a multifaceted experience that keeps users engaged and connected in today\'s digital age.', 'social-media-fb.jpg'),
(2, 'Instagram', 'Instagram is a popular social media platform that enables users to share photos and videos with their followers. Its user-friendly interface and visually appealing content make it a popular destination for connecting, expressing themselves, and discovering new content. Instagram offers features like Stories and IGTV for sharing temporary content, and tools for businesses to manage their presence.', 'social-media-ig.jpg'),
(3, 'Youtube', 'The YouTube app is a versatile platform that offers a wide range of video content, catering to various interests and preferences. Its intuitive interface allows users to search for specific videos, discover new content, and engage with creators. The app also features playlists, subscriptions, and notifications to keep users updated. With its vast library and accessibility across devices, it\'s a popular destination for entertainment, education, and inspiration.', '65f94a65cbbc5.jpg'),
(5, 'Whatsapp', 'WhatsApp is a versatile messaging app that offers a user-friendly interface, cross-platform compatibility, and end-to-end encryption for secure communication. It allows users to send text, voice, images, videos, documents, and calls for free, making it a popular choice for various communication needs. WhatsApp caters to a wide range of communication needs, making it easy, reliable, and enjoyable.', '65f94a708c690.jpg'),
(7, 'TikTok', 'TikTok is a popular social media platform that allows users to create short-form videos, ranging from lip-syncing to DIY tutorials. Its intuitive interface and extensive library of effects make it easy to connect with a diverse audience. However, concerns about privacy, safety, and digital well-being remain, requiring users to exercise caution and engage responsibly.', '65f94a7c87d2d.jpg'),
(8, 'Viber', 'Viber is a free messaging app that lets you connect with friends and family across the globe. It offers a variety of features beyond just texting, including voice and video calls, group chats, and the ability to send photos, videos, and other files. Viber is known for its strong focus on privacy, with features like end-to-end encryption on calls and messages for added security. Overall, Viber is a versatile and secure communication tool that\'s a great option for staying in touch with loved ones.', 'social-media-viber.jpg'),
(9, 'Telegram', 'Telegram started as a messaging app focused on speed and security. Messages are delivered quickly and can be quite large, making it a good choice for sending photos and videos. It also boasts strong encryption options for those who prioritize privacy.  Unlike some messaging apps, Telegram allows for massive group chats and channels, making it a powerful tool for communication within communities or for following updates from organizations.', 'social-media-telegram.jpg'),
(17, 'SnapChat', 'Snapchat is a social media app known for its disappearing photos and videos.  You can capture photos and videos (called Snaps) and send them to friends with a set time limit on how long they can be viewed, adding a fun and fleeting element to your communication.  Beyond Snaps, Snapchat offers features like live messaging, video chat with fun filters, and \"Stories\" which are collections of photos and videos viewable by your followers for 24 hours.  It\'s a creative and interactive way to share your day-to-day moments with friends.', 'social-media-snpchat.jpg'),
(18, 'Messenger', 'Messenger is a widely used mobile app that allows instant messaging with your friends and contacts. It seamlessly integrates with Facebook, letting you chat with people on your Facebook list without needing a separate app. Messenger goes beyond simple texting, offering features like sending photos, videos, and voice messages. Group chats make it easy to coordinate with multiple people, and video calling lets you connect face-to-face. Messenger is a convenient and feature-rich platform for staying connected with your personal network.', 'social-media-messenger.jpg'),
(19, 'Linkedin', 'LinkedIn is a professional networking platform designed specifically for the business world. This includes creating a profile that showcases your work experience, skills, and accomplishments, similar to an online resume. LinkedIn\'s core function is connecting professionals. You can build a network of colleagues, past employers, and potential employers by adding connections. This platform is a valuable tool for job searching, as it allows employers to post openings and for users to directly apply through LinkedIn. Additionally, you can follow companies and industry leaders, engage in professional discussions, and stay updated on industry trends.', 'social-media-linkedin.jpg'),
(20, 'Pinterest', 'Pinterest is a visual platform for discovering and sharing ideas. Imagine a giant, digital bulletin board filled with inspiration for everything from recipes and DIY projects to home decor and travel destinations. Users collect these ideas, called \"Pins,\" which can be images, videos, or even products. You can browse Pins by category or search for specific things that interest you. Pinterest also allows you to organize your Pins into boards, like a digital scrapbook, making it easy to find and revisit your favorite ideas later on.', 'social-media-pinterest.jpg'),
(21, 'Slack', 'Slack is a cloud-based platform that streamlines teamwork and communication. Unlike email, which can be cluttered and slow, Slack offers a central hub for your team. Conversations are organized into channels, dedicated topics where colleagues can share messages, files, and ideas. With features like video calls, screen sharing, and integrations with various tools, Slack fosters real-time collaboration and eliminates the need for endless email threads. It\'s a powerful tool that keeps everyone connected, informed, and working efficiently.', 'social-media-slack.jpg'),
(22, 'Discord', 'Discord is a popular platform that blends social media and communication tools. Imagine a clubhouse for your interests. Discord creates \"servers\" which are communities built around specific topics or groups. These servers have channels for text chat, voice chat, or even video calls. It\'s like having a dedicated chatroom for your gaming squad, school club, or anything else that brings people together. Discord is free, offers features for both large and small groups, and is especially popular with gamers due to its seamless voice chat integration.', 'social-media-discord.jpg'),
(23, 'Twitch', 'Twitch is like a giant interactive live stream buffet, with video games as the main course. It\'s a platform where gamers can broadcast their gameplay (often with commentary) to a live audience. But Twitch goes beyond just watching people play. There are also creative channels, music broadcasts, esports tournaments, and even just people chatting and hanging out (\"in real life\" streams). With a massive community and tons of variety, Twitch offers a fun and social way to connect with people who share your interests.', 'social-media-twitch.jpg'),
(24, 'Life 360', 'Life360 is a location-sharing app designed primarily for families and close circles. It goes beyond just showing where someone is on a map. Life360 offers real-time location sharing, location history, and driving features like crash detection and emergency response. It also has features for safety on the go, like SOS alerts and even integrates with Tile trackers to help find lost items.  With a free tier and premium memberships offering more features, Life360 aims to provide peace of mind and keep families connected and safe.', 'life360.jpg'),
(25, 'Wattpad', 'Wattpad is a breeding ground for stories and storytelling. Imagine a massive online library overflowing with millions of reader-written novels, poems, and fan fiction, all waiting to be discovered.  This is Wattpad in a nutshell. It\'s a social platform where readers and aspiring authors connect. Readers can find stories in over 50 languages and genres, while writers can share their work, get feedback from a supportive community, and even potentially catch the eye of publishers or Hollywood!', 'wattpad.jpg'),
(26, 'Wechat', 'Imagine an app that combines messaging, social media, and mobile payments all in one. That\'s WeChat, a hugely popular app, particularly in China, often called a \"super app\" because of its wide range. Beyond just texting and calling, WeChat lets you share photos, videos, and moments with friends, play games, order food, hail a taxi, and even make payments.  It\'s a one-stop shop for communication, entertainment, and daily tasks.', 'wechat.jpg'),
(27, 'Line', 'Line is another popular messaging app that rivals Viber. Similar to Viber, Line offers free calls, texts, video chats, and group chats. It stands out with its fun and quirky interface, including a vast library of stickers and emojis that can add personality to your conversations. Line also integrates with various mini-apps and games, allowing you to explore new features and entertainment within the app itself. So, if you\'re looking for a messaging app with a playful touch and additional functionalities, Line is definitely worth checking out.', 'line.jpg'),
(28, 'Kakao Talk', 'KakaoTalk is a popular messaging app, especially in South Korea, that lets you connect with people worldwide. It offers features similar to other messaging apps like free text messaging, group chats, and voice and video calls. KakaoTalk stands out with its fun and customizable elements, including a wide variety of stickers and themes. It even integrates with other Kakao services, making it a central hub for communication and other digital needs in some regions.', 'kakao-talk.jpg'),
(29, 'Spotify ', 'Spotify is a popular music and podcast streaming service. It boasts a library of millions of songs, albums, and podcasts, all accessible through their app or desktop software.  You can listen to music for free with occasional ads, or subscribe to Spotify Premium for ad-free listening, the ability to download songs for offline playback, and higher audio quality.  Spotify also offers features like personalized playlists and curated recommendations to help you discover new music you\'ll love.', 'soptify.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `phone`, `msg`) VALUES
(1, 'Aye', 'Aye', 'aye@gmail.com', '04284651654', 'Thank you, SMC, for empowering us to stay safe and responsible online!'),
(2, 'Khine', 'Khine', 'khinekhine@gmail.com', '09798520354', 'I like this website. I can know How to use social media..');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `value`) VALUES
(1, 'User', 1),
(2, 'Admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `phone`, `gender`, `country`, `image`, `role_id`) VALUES
(1, 'Kim', 'Taehyung', 'taehyung@gmail.com', '$2y$10$OAtu/nQxombQ8Nkx/AQJnOCceCmnPAgfPEf0P9.PyvvOj1yKd6Zpa', '091500528', 'Male', 'Korea, Republic of', 'taehyung.jpg', 1),
(2, 'Arkar', 'Min', 'arkar@gmail.com', '$2y$10$WRLEdkrjUK7w5J7ch7gCeuXJFNQyHPCDXC1zxJjVt3h.F066Nr1vm', '091234567', 'Male', 'Myanmar', NULL, 1),
(3, 'Thomas ', 'William', 'thomas@gmail.com', '$2y$10$/O0JkLIuc.fuADQVq4fXPu8m1K57OVRNd43sSQiqBYuwtyA3IKUpi', '09485123652', 'Male', 'United Kingdom', 'Screenshot 2023-07-16 224712.png', 1),
(4, 'Jeon', 'Jungkook', 'jungkook@gmail.com', '$2y$10$3OdDRd2FnMb3bFI/JS3GiOo5SxcuUpDAAwJ71gieK6sKPMyYdYONC', '08521479', 'Male', 'Korea, Republic of', 'jungkook.jpg', 1),
(5, 'Khine', 'Shun Lae', 'khine@gmail.com', '$2y$10$NhJV8Gx005f92VZJcQVeCOviOhDFCHd8Ou9Z2N5FpA1Uin7Ql7.1S', '09781838024', 'Female', 'Myanmar', NULL, 2),
(6, 'Htoo', 'Nay Yi Win', 'htoo@gmail.com', '$2y$10$Wdr5NZoT1qZDbkgXCHGxOuw/McS67nTKjVc5TjSMom6Ex5RvuJVVW', '09250998146', 'Female', 'Myanmar', NULL, 1),
(10, 'Kim', 'Seokjin', 'jin@gmail.com', '$2y$10$C8yqfozwAdBXcwAxI/50yuYcSbPHREXkbBlMYYpjj.ON2dSN6.8Ai', '015475269', 'Male', 'Korea, Republic of', 'jin.jpg', 1),
(11, 'Kim', 'Namjoon', 'rm@gmail.com', '$2y$10$Fv6DuAJDK4g85/lLpc7dReIspyccZQDqVMSrE9160iFPIIcuzCADq', '0215632656', 'Male', 'Korea, Republic of', 'Namjoon.jpg', 1),
(12, 'Park', 'Jimin', 'jimin@gmail.com', '$2y$10$c2IzBQJrLF1LXPRt/pTlPOQnRQhylSAZ3svw968T8ojw6yHe7gsja', '069825842', 'Male', 'Korea, Republic of', 'jimin.jpg', 1),
(14, 'Min', 'Yoongi', 'suga@gmail.com', '$2y$10$vI4mEUGCnWrdVuRrhYQ5nevGAQukMMPr4S1yYCasvR1JagZ2fCK92', '017799324', 'Male', 'Korea, Republic of', 'yoongi.jpg', 1),
(15, 'Jung', 'Hoseok', 'jhope@gmail.com', '$2y$10$djYoXfzMyIGlxrHsRmC9cu9w4wIZhmXkWIxZeNqMZ.tvPfeRjpVKi', '08521496', 'Male', 'Korea, Republic of', 'hoseok.jpg', 1),
(16, 'Aye', 'Aye Aung', 'aye@gmail.com', '$2y$10$CtLCyUMfF3XAvSBhIdHIXuWpWRmeLuuBq3KVWLU8Lz5MU.N0jSmNK', '021456235', 'Female', 'Myanmar', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
