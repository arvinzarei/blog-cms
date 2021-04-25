-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 12:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `summary` text COLLATE utf8_persian_ci NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `status` enum('disable','enable') COLLATE utf8_persian_ci NOT NULL DEFAULT 'disable',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `summary`, `body`, `view`, `user_id`, `cat_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'عامل نقدینگی و تورم، نگرانی مصوبه مجلس شد', 'رئیس‌کل بانک مرکزی تلاش کرده اصلاحات مجلس در بودجه سال ۱۴۰۰ را مقصر افزایش تورم و نقدینگی جلوه دهد', 'همتی در حالی از چاپ پول با اجرای مصوبه مجلس درباره بودجه ۱۴۰۰ ابراز نگرانی کرده که در دوره مدیریت خود وی تا پایان آذرماه امسال ۱۸۷ هزار میلیارد تومان پول پرقدرت و تورم‌زا چاپ شده است. در پایان آذرماه حجم پایه پولی ۴۰۷ هزار میلیارد تومان بوده که ۱۸۷ هزار میلیارد تومان آن یعنی ۴۶ درصد آن در دوره مدیریت همتی بر بانک مرکزی ایجاد شده است.\r\n\r\nعمده چاپ پول در دوره ریاست همتی بر بانک مرکزی برای رفع کسری بودجه دولت و رفع کسری بودجه بانک‌های خصوصی بوده است.\r\n\r\nاز سوی دیگر همتی در حالی از رشد نقدینگی با مصوبه مجلس ابراز نگرانی کرده که حجم نقدینگی در دوره ریاست وی هم تقریباً ۲ برابر شده و از ۱۶۰۰ هزار میلیارد تومان در تیرماه ۱۳۹۷ (قبل از ریاست همتی) به ۳۱۳۰ هزار میلیارد تومان در پایان آذرماه امسال رسیده است؛ یعنی حجم نقدینگی در ۲.۵ سال ریاست همتی ۲ برابر شده یا به عبارت دیگر نصف کل نقدینگی موجود در تاریخ اقتصاد ایران فقط در ۲.۵ سال ریاست همتی ایجاد شده است.', 15, 2, 4, 'public/article-image/2021-04-16-15-35-21.jpeg', 'disable', '2021-03-11 23:49:58', '2021-04-16 18:07:14'),
(2, 'سردرگمی بورس‌بازان در گرداب تصمیمات دولت', 'وضعیت کلی شاخص بورس', 'آنچه مسلم است در اقتصاد ایران که شاخص‌های آن از هیچ یک از مولفه‌های اقتصادی پیروی نمی‌کند، پیش‌بینی روند حرکت بازار سرمایه بسیار دشوارتر از بازار سرمایه در کشورهایی است که نظم اقتصادی بر آنها حاکم است. با این حال به نظر می‌رسد سیگنال‌هایی که می‌تواند بر رشد یا افت شاخص بورس در ایران اثرگذار باشد، قابل تحلیل و بررسی است. طبق آمار ارائه‌شده از سوی رئیس سازمان بورس و اوراق بهادار تهران، هم‌اکنون بیش از ۵۷ میلیون نفر در بازار سرمایه حضور دارند و از همین رو نوسانات این بازار برای آنها بسیار مهم است. محمدعلی دهقان‌دهنوی اظهار امیدواری کرده است با برنامه‌ریزی‌های پیش‌ رو، بورس در افق بلندمدت بازدهی خوبی داشته باشد. وی با تاکید بر نقش مهم شرکت‌های سرمایه‌گذاری و هلدینگ‌ها بر روند بازار سرمایه، توسعه فعالیت‌ این شرکت‌ها را عامل اصلی رشد اقتصادی کشور دانسته و مانع اصلی توسعه این شرکت‌ها را تامین مالی بانکی عنوان کرده است. اگر چه رئیس سازمان بورس و اوراق بهادار از شرکت‌های سرمایه‌گذاری و هلدینگ‌ها دعوت کرده وارد فرآیند انتشار اوراق شوند اما به نظر می‌رسد وضعیت شاخص بورس از مولفه‌های دیگری تبعیت می‌کند.', 9, 2, 4, 'public/article-image/2021-04-16-15-32-40.jpeg', 'disable', '2021-03-20 12:22:09', '2021-04-16 18:07:10'),
(3, 'سیاست کشور در زمینه برجام مشخص است', 'رهبر انقلاب فرمودند: قرآن به همه بخش های زندگی انسان ناظر و برای هرکدام از آنها راهنمایی و هدایتی دارد.', 'ضرت آیت‌الله خامنه‌ای با اشاره به برخی سرفصل‌های هدایت قرآنی افزودند: کمال معنوی، اداره جوامع انسانی و چالش های سیاسی و اجتماعی مرتبط با آن، رفتارهای مدیریتی، اقامه عدل، دفع دشمنان باطنی و ظاهری، رفع دشمنی‌ها، مسایل اخلاقی، مسایل مربوط به خانواده و تربیت فرزندان، آرامش روحی و روانی و فرونشاندن تلاطم های درونی، توصیه به علم و شناخت حقایق عالَم وجود و رفتارهای فردی، بخش هایی از رئوس موضوعاتی است که هدایت قرآنی شامل آنها می شود.\r\n\r\nرهبر انقلاب اسلامی لازمه بهره مندی از هدایت قرآنی را تقوا و خشیت الهی دانستند و با توصیه همگان به خواندن همراه با تدبر قرآن در ماه مبارک رمضان، گفتند: دل انسان با تلاوت قرآن جلاء پیدا می کند و بهاری و با طراوت می شود.\r\n\r\nحضرت آیت‌الله خامنه‌ای با تأکید بر اینکه قاریان قرآن باید خود را مبلغان قرآن بدانند، بر لزوم تلاوت همراه با تذکر و خشوع و توجه عمیق به معنا تأکید کردند.', 7, 2, 3, 'public/article-image/2021-04-16-15-29-50.jpeg', 'disable', '2021-03-20 12:30:55', '2021-04-16 18:10:04'),
(4, 'وضعیت کرونا در تهران فاجعه است', ' برای کنترل بیماری حداقل ۵ تا ۷ روز قرنطینه به شکل کامل نیاز است', 'عضو علمی ستاد ملی مقابله با کرونا افزود: متأسفانه در موج چهارم سوش غالب کرونای انگلیسی بوده که تفاوت آن با کرونای دیگر در قدرت سرایت بسیار بالا و بروز علائم شدیدتر است، به عنوان مثال گرفتاری ریه خیلی بیشتر رخ می‌دهد.\r\n\r\nمحرز بیان کرد: با وجود اینکه از تعطیلی‌های عید برای قرنطینه استفاده نشد اما ماه رمضان به دلیل در خانه ماندن خیلی از مردم، فرصت مناسبی است.\r\n\r\nوی تصریح کرد:برای گذر از شرایط فعلی حداقل به ۵ تا ۷ روز قرنطینه واقعی نیاز است و باید همه اماکن تعطیل شود به طوری که لازم نباشد مردم برای رفت و آمد از مترو و اتوبوس استفاده کنند.\r\n\r\nعضو علمی ستاد ملی مقابله با کرونا خاطرنشان کرد: متأسفانه محدودیت‌های فعلی هم به شکل ناقص اجرا می‌شود چون بازرسی و پیگیری رعایت پروتکل‌ها به خوبی انجام نمی‌گیرد، مثلاً شاهد مغازه‌هایی با کرکره‌های نیمه باز هستیم.', 12, 2, 3, 'public/article-image/2021-04-16-15-27-06.jpeg', 'disable', '2021-04-03 10:50:56', '2021-04-16 19:13:22'),
(5, 'استقلال زود دستش را رو نکند', 'استقلال زود دستش را رو نکند/عصبانیت دیاباته دلیل فوتبالی دارد/العین را با الاهلی قیاس نکنید', '* حریفان استقلال در گروه C را چطور ارزیابی می کنید؟\r\n\r\n- قبل از تحلیل حریفان استقلال باید دید که نماینده کشورمان با چه شرایطی وارد لیگ قهرمانان ۲۰۲۱ شده است. استقلال در این مدت به دلیل نوسان های زیادی که در زمینه مدیریتی و کادر فنی داشت تاثیرات روحی و روانی زیادی را تجربه کرد اما با حضور فرهاد مجیدی وضعیت این تیم تا حد زیادی تثبیت شده و بچه‌ها با انسجام بهتری راهی جده شدند. گرچه تعدادی از آنها کرونا داشتند که حالا همگی خوب شدند.\r\n\r\n* درباره رقبای اصلی اش حرفی نمی زنید؟\r\n\r\n- اما درباره حریفان استقلال باید گفت که الدحیل قطر می تواند یکی از رقبای اصلی استقلال در این گروه باشد که شاید بتواند برای این مسئله ساز شود. الشرطه هم تیم خوبی است اما استقلال با بازیکنانی که در اختیار دارد می‌تواند از پس این تیم بربیاید.\r\n\r\n* الاهلی چطور؟\r\n\r\n- اما تیم الاهلی عربستان که از شرایط میزبانی هم سود می برد گرچه در لیگ داخلی نتایج خوبی نداشته اما به هر حال نمی‌توان این تیم را نادیده گرفت. قطعاً با یک تحلیل دقیق از تیم الاهلی، استقلال می‌تواند این بازی را ببرد. ما نباید فریب پیروزی چهار بر صفر تیم فولاد روبروی العین را بخوریم چون العین قابل قیاس با تیم های همگروه با استقلال نیست.\r\n\r\n* بازی اول چه اهمیتی دارد که اینقدر این روزها درباره نتیجه اش حرف زده می شود؟\r\n\r\n- فارغ از جنبه های تاکتیکی و تکنیکی، پیروزی در بازی اول از جنبه روانی خیلی مهم است. وقتی شما بازی اول را به حق می برید وضعیت روحی و فنی شما را تا حد زیادی تثبیت می‌کند و اعتماد به نفس خوبی به بازیکنان تزریق می شود رقبا هم که روی بازی اول تحلیل دقیقی انجام می دهند با پیروزی استقلال در دیدار نخست شرایط شان را تغییر می دهند.\r\n\r\n* یعنی استقلال باید هر چه دارد را رو کند؟\r\n\r\n- استقلال با توجه به نزدیکی مسابقات و فشردگی آنها نباید خیلی سریع دستش را برای هر سه حریف رو کند یا لااقل باید یک پلن مخفی برای دیدارهای دور برگشت داشته باشد.\r\n\r\n* این تیم در کدام پست ضعیف تر است؟\r\n\r\n- درباره پست های ضعیف و قوی تیم استقلال تنها به این نکته اشاره می‌کنم که این تیم در خط میانی نسبت به خط دفاع و خط حمله ضعف دارد. وقتی گلی زده نمی شود مشخص است که بازیکن خط حمله نتوانسته از طریق خط هافبک به خوبی تغذیه شود.\r\n\r\n* دلیل عصبانیت دیاباته می تواند به این موضوع ربط داشته باشد؟\r\n\r\n- شاید یکی از دلایل عصبانیت شیخ دیاباته در دیدار با پیکان همین موضوع باشد، گرچه او این روزها با دیاباته فصل قبل فاصله دارد. او هم از نظر فیزیکی و هم از نظر فنی شیخ پارسال نیست. اما وقتی پاسی برای گلزنی هم به او داده نمی‌شود فشار روی او را بیشتر می کند. در مجموع امیدوارم استقلال در اولین بازی خود زمین را با پیروزی ترک کند.', 7, 2, 2, 'public/article-image/2021-04-16-14-57-34.jpeg', 'disable', '2021-04-03 10:51:37', '2021-04-16 17:54:14'),
(6, 'شروع طوفانی شاگردان مجیدی در آسیا', 'شروع طوفانی شاگردان مجیدی در آسیا/ الاهلی تا توانست از استقلال گل خورد! ', 'استقلال که در این دیدار با رشید مظاهری، عارف غلامی، سیاوش یزدانی، وریا غفوری، محمد نادری، مسعود ریگی، هرویه میلیچ (۶۹ شیخ دیاباته)، سعید مهری (۴۶ آرش رضاوند)، فرشید اسماعیلی، ارسلان مطهری و مهدی قایدی به میدان رفت، خیلی زود به گل رسید.\r\n\r\nشاگردان فرهاد مجیدی در دقیقه ۵ این دیدار از فرصت طلبی فرشید اسماعیلی سود بردند و در حالی که ضربه ایستگاهی میلیچ به دیوار دفاعی برخورد کرد و به درون محوطه جریمه راه یافت، اسماعیلی از راه رسید و با ضربه‌ای محکم گل اول بازی را به ثمر رساند.\r\nدر دقیقه ۲۵ این دیدار میلیچ که توسط مجیدی از ابتدا در دفاع راست به کار گرفته شده بود روی بازیکن حریف مرتکب خطا شد و داور اعلام پنالتی کرد که در دقیقه ۲۶ سوما این توپ را به گل تبدیل کرد تا بازی به تساوی کشیده شود.\r\n\r\nاستقلال در نیمه اول نمایش خوب و قابل قبولی داشت و بارها با تشکیل زوج‌های دو نفره به محوطه جریمه حریف نزدیک شد و صاحب موقعیت‌های مناسبی هم شد اما نتوانست در زدن ضربات آخر دقت لازم را داشته باشد تا در نهایت نیمه اول با تساوی یک به یک به پایان رسید.', 32, 2, 2, 'public/article-image/2021-04-16-14-55-35.jpeg', 'disable', '2021-04-03 11:00:34', '2021-04-16 18:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'ورزشی', '2021-03-11 14:56:51', '2021-03-20 12:14:39'),
(3, 'خبری', '2021-03-11 23:35:53', '2021-03-20 12:14:33'),
(4, 'اقتصادی', '2021-03-20 12:14:47', NULL),
(5, 'سیاسی', '2021-04-16 18:10:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text COLLATE utf8_persian_ci NOT NULL,
  `article_id` int(11) NOT NULL,
  `status` enum('unseen','seen','approved') COLLATE utf8_persian_ci NOT NULL DEFAULT 'unseen',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`, `article_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'yesss', 1, 'approved', '2021-04-04 23:43:12', '2021-04-04 23:51:03'),
(2, 2, 'hi friend...', 1, 'approved', '2021-04-05 10:50:03', '2021-04-16 18:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `url`, `parent_id`, `created_at`, `updated_at`) VALUES
(5, 'صفحه اصلی', '/admin-panel/home', NULL, '2021-04-03 11:21:50', '2021-04-16 16:14:36'),
(6, 'درباره ما', '#', NULL, '2021-04-03 11:22:12', '2021-04-16 16:14:52'),
(7, 'ارتباط با ما', '#', NULL, '2021-04-03 11:22:22', '2021-04-16 16:15:02'),
(8, 'خدمات', '#', NULL, '2021-04-03 11:22:36', '2021-04-16 16:15:17'),
(9, 'دعوت به همکاری', '#', NULL, '2021-04-03 11:22:53', '2021-04-16 16:15:31'),
(10, 'آدرس', '#', NULL, '2021-04-03 11:23:13', '2021-04-16 16:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `permission` enum('user','admin') COLLATE utf8_persian_ci NOT NULL DEFAULT 'user',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `permission`, `created_at`, `updated_at`) VALUES
(1, 'kamran', 'kamran@gmail.com', '12345678', 'admin', '2021-03-08 00:27:10', '2021-04-16 18:40:16'),
(2, 'arvin', 'arvinzarei123@gmail.com', '$2y$10$TFwJV.mWi3olY8.0PKfu7eMOEg/p1lU0AOqgtf/mlLccy9XCRT16C', 'admin', '2021-03-19 16:15:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websetting`
--

CREATE TABLE `websetting` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_persian_ci DEFAULT NULL,
  `description` text COLLATE utf8_persian_ci DEFAULT NULL,
  `keywords` text COLLATE utf8_persian_ci DEFAULT NULL,
  `logo` text COLLATE utf8_persian_ci DEFAULT NULL,
  `icon` text COLLATE utf8_persian_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `websetting`
--

INSERT INTO `websetting` (`id`, `title`, `description`, `keywords`, `logo`, `icon`, `created_at`, `updated_at`) VALUES
(3, 'وبسایت خبری', 'این یک سایت خبری است', 'سایت خبری', 'public/setting/logo.jpeg', 'public/setting/icon.jpeg', '2021-03-13 18:46:30', '2021-04-03 16:16:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `websetting`
--
ALTER TABLE `websetting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `websetting`
--
ALTER TABLE `websetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
