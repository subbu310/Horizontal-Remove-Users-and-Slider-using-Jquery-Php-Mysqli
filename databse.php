--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `slide_users`
--

CREATE TABLE `slide_users` (
  `id` int(11) NOT NULL,
  `user_image` varchar(250) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `choose` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide_users`
--

INSERT INTO `slide_users` (`id`, `user_image`, `user_name`, `choose`) VALUES
(1, 'http://localhost/slider/profile_photo/69.jpg', 'virat kholi', 'no'),
(2, 'http://localhost/slider/profile_photo/302394.jpg', 'jadeja', 'yes'),
(3, 'http://localhost/slider/profile_photo/302395.jpg', 'aswin', 'yes'),
(4, 'http://localhost/slider/profile_photo/202683.1.jpg', 'gambir', 'yes'),
(5, 'http://localhost/slider/profile_photo/233209.5.jpg', 'pant', 'yes'),
(6, 'http://localhost/slider/profile_photo/289003.1.jpg', 'bhuvneshwar', 'yes'),
(7, 'http://localhost/slider/profile_photo/68.jpg', 'dhoni', 'yes'),
(8, 'http://localhost/slider/profile_photo/15.jpg', 'rohit', 'yes'),
(9, 'http://localhost/slider/profile_photo/4247.png', 'kuldeep', 'yes'),
(10, 'http://localhost/slider/profile_photo/443.jpg', 'umesh', 'yes'),
(11, 'http://localhost/slider/profile_photo/four.jpg', 'harthik', 'yes'),
(12, 'http://localhost/slider/profile_photo/sachin.jpg', 'sachin', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slide_users`
--
ALTER TABLE `slide_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
