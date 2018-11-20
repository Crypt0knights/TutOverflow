-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2018 at 06:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `date_pub` date NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `blog_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`date_pub`, `title`, `content`, `author`, `image`, `blog_id`) VALUES
('2018-11-20', 'https://kushaldas.in/posts/introducing-rpm-macros-virtualenv-0-0-1.html', '&lt;p&gt;Let me introduce &lt;a href=&quot;https://github.com/kushaldas/rpm-macros-virtualenv&quot;&gt;rpm-macros-virtualenv 0.0.1&lt;/a&gt; to you all.&lt;/p&gt;\r\n\r\n&lt;p&gt;This is a small set of RPM macros, which can be used by the spec files to build and package any Python application along with a virtualenv. Thus, removing the need of installing all dependencies via dnf/rpm repository. One of the biggest usecase will be to help to install latest application code and all the latest dependencies into a virtualenv and also package the whole virtualenv into the RPM package.&lt;/p&gt;\r\n\r\n&lt;p&gt;This will be useful for any third part vendor/ISV, who would want to package their Python application for Fedora/RHEL/CentOS along with the dependencies. But, remember not to use this for any package inside of Fedora land as this does not follow the Fedora packaging guidelines.&lt;/p&gt;\r\n\r\n&lt;p&gt;This is the very initial release, and it will get a lot of updates in the coming months. The project idea is also not new, Debian already has &lt;a href=&quot;https://dh-virtualenv.readthedocs.io/en/1.0/&quot;&gt;dh-virtualenv&lt;/a&gt; doing this for a long time.&lt;/p&gt;\r\n\r\n&lt;h3&gt;How to install?&lt;/h3&gt;\r\n\r\n&lt;p&gt;I will be building an rpm package, for now download the source code and the detached signature to verify it against my GPG key.&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;wget https://kushaldas.in/packages/rpm-macros-virtualenv-0.0.1.tar.gz\r\nwget https://kushaldas.in/packages/rpm-macros-virtualenv-0.0.1.tar.gz.asc\r\ngpg2 --verify rpm-macros-virtualenv-0.0.1.tar.gz.asc rpm-macros-virtualenv-0.0.1.tar.gz\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Untar the directory, and then copy the &lt;code&gt;macros.python-virtualenv&lt;/code&gt; file to the RPM macros directory in your system.&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;tar -xvf rpm-macros-virtualenv-0.0.1.tar.gz\r\ncd rpm-macros-virtualenv-0.0.1/\r\nsudo cp macros.python-virtualenv /usr/lib/rpm/macros.d/\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;h3&gt;How to use?&lt;/h3&gt;\r\n\r\n&lt;p&gt;Here is a minimal example.&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;# Fedora 27 and newer, no need to build the debug package\r\n%if 0%{?fedora} &amp;gt;= 27 || 0%{?rhel} &amp;gt;= 8\r\n%global debug_package %{nil}\r\n%endif\r\n# Use our interpreter for brp-python-bytecompile script\r\n%global __python /opt/venvs/%{name}/bin/python3\r\n\r\n\r\n%prep\r\n%setup -q\r\n\r\n%build\r\n%pyvenv_create\r\n%{__pyvenvpip3} install --upgrade pip\r\n%pyvenv_build\r\n\r\n%install\r\n%pyvenv_create\r\n%{__pyvenvpip3} install --upgrade pip\r\n%pyvenv_install\r\nln -s /opt/venvs/%{name}/bin/examplecommand $RPM_BUILD_ROOT%{_bindir}/examplecommand\r\n\r\n%files\r\n%doc README.md LICENSE\r\n/opt/venvs/%{name}/*\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;As you can see, in both &lt;code&gt;%build&lt;/code&gt; and in &lt;code&gt;%install&lt;/code&gt;, first we have to call &lt;code&gt;%pyvenv_install&lt;/code&gt;, that will create our virtualenv. Then we are installing the latest &lt;code&gt;pip&lt;/code&gt; in that environment.&lt;/p&gt;\r\n\r\n&lt;p&gt;Then in the &lt;code&gt;%build&lt;/code&gt;, we are calling &lt;code&gt;%pyvenv_build&lt;/code&gt; to create the wheel.&lt;/p&gt;\r\n\r\n&lt;p&gt;In the &lt;code&gt;%install&lt;/code&gt; section, we are calling &lt;code&gt;%pyvenv_install&lt;/code&gt; macro to install the project, this command will also install all the required dependencies (from the &lt;code&gt;requirements.txt&lt;/code&gt; of the project) by downloading them from &lt;a href=&quot;https://pypi.org&quot;&gt;https://pypi.org&lt;/a&gt;.&lt;/p&gt;\r\n\r\n&lt;p&gt;If you have any command/executable which gets installed in the virtualenv, you should create a symlink to that from &lt;code&gt;$RPM_BUILD_ROOT/usr/bin/&lt;/code&gt; directory in the &lt;code&gt;%install&lt;/code&gt; section.&lt;/p&gt;\r\n\r\n&lt;p&gt;Now, I have an &lt;a href=&quot;https://github.com/kushaldas/rpm-macros-virtualenv/blob/master/examples/ansible.spec&quot;&gt;example&lt;/a&gt; in the git repository, where I have taken the Ansible 2.7.1 spec file from Fedora, and converted it to these macros. I have build the package for Fedora 25 to verify that this works.&lt;/p&gt;\r\n', 'Kushal Das', '5bf43faced1637.83845314.jpeg', 1),
('2018-11-20', 'https://kushaldas.in/posts/introducing-rpm-macros-virtualenv-0-0-1.html', '&lt;p&gt;Let me introduce &lt;a href=&quot;https://github.com/kushaldas/rpm-macros-virtualenv&quot;&gt;rpm-macros-virtualenv 0.0.1&lt;/a&gt; to you all.&lt;/p&gt;\r\n\r\n&lt;p&gt;This is a small set of RPM macros, which can be used by the spec files to build and package any Python application along with a virtualenv. Thus, removing the need of installing all dependencies via dnf/rpm repository. One of the biggest usecase will be to help to install latest application code and all the latest dependencies into a virtualenv and also package the whole virtualenv into the RPM package.&lt;/p&gt;\r\n\r\n&lt;p&gt;This will be useful for any third part vendor/ISV, who would want to package their Python application for Fedora/RHEL/CentOS along with the dependencies. But, remember not to use this for any package inside of Fedora land as this does not follow the Fedora packaging guidelines.&lt;/p&gt;\r\n\r\n&lt;p&gt;This is the very initial release, and it will get a lot of updates in the coming months. The project idea is also not new, Debian already has &lt;a href=&quot;https://dh-virtualenv.readthedocs.io/en/1.0/&quot;&gt;dh-virtualenv&lt;/a&gt; doing this for a long time.&lt;/p&gt;\r\n\r\n&lt;h3&gt;How to install?&lt;/h3&gt;\r\n\r\n&lt;p&gt;I will be building an rpm package, for now download the source code and the detached signature to verify it against my GPG key.&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;wget https://kushaldas.in/packages/rpm-macros-virtualenv-0.0.1.tar.gz\r\nwget https://kushaldas.in/packages/rpm-macros-virtualenv-0.0.1.tar.gz.asc\r\ngpg2 --verify rpm-macros-virtualenv-0.0.1.tar.gz.asc rpm-macros-virtualenv-0.0.1.tar.gz\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Untar the directory, and then copy the &lt;code&gt;macros.python-virtualenv&lt;/code&gt; file to the RPM macros directory in your system.&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;tar -xvf rpm-macros-virtualenv-0.0.1.tar.gz\r\ncd rpm-macros-virtualenv-0.0.1/\r\nsudo cp macros.python-virtualenv /usr/lib/rpm/macros.d/\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;h3&gt;How to use?&lt;/h3&gt;\r\n\r\n&lt;p&gt;Here is a minimal example.&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;# Fedora 27 and newer, no need to build the debug package\r\n%if 0%{?fedora} &amp;gt;= 27 || 0%{?rhel} &amp;gt;= 8\r\n%global debug_package %{nil}\r\n%endif\r\n# Use our interpreter for brp-python-bytecompile script\r\n%global __python /opt/venvs/%{name}/bin/python3\r\n\r\n\r\n%prep\r\n%setup -q\r\n\r\n%build\r\n%pyvenv_create\r\n%{__pyvenvpip3} install --upgrade pip\r\n%pyvenv_build\r\n\r\n%install\r\n%pyvenv_create\r\n%{__pyvenvpip3} install --upgrade pip\r\n%pyvenv_install\r\nln -s /opt/venvs/%{name}/bin/examplecommand $RPM_BUILD_ROOT%{_bindir}/examplecommand\r\n\r\n%files\r\n%doc README.md LICENSE\r\n/opt/venvs/%{name}/*\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;As you can see, in both &lt;code&gt;%build&lt;/code&gt; and in &lt;code&gt;%install&lt;/code&gt;, first we have to call &lt;code&gt;%pyvenv_install&lt;/code&gt;, that will create our virtualenv. Then we are installing the latest &lt;code&gt;pip&lt;/code&gt; in that environment.&lt;/p&gt;\r\n\r\n&lt;p&gt;Then in the &lt;code&gt;%build&lt;/code&gt;, we are calling &lt;code&gt;%pyvenv_build&lt;/code&gt; to create the wheel.&lt;/p&gt;\r\n\r\n&lt;p&gt;In the &lt;code&gt;%install&lt;/code&gt; section, we are calling &lt;code&gt;%pyvenv_install&lt;/code&gt; macro to install the project, this command will also install all the required dependencies (from the &lt;code&gt;requirements.txt&lt;/code&gt; of the project) by downloading them from &lt;a href=&quot;https://pypi.org&quot;&gt;https://pypi.org&lt;/a&gt;.&lt;/p&gt;\r\n\r\n&lt;p&gt;If you have any command/executable which gets installed in the virtualenv, you should create a symlink to that from &lt;code&gt;$RPM_BUILD_ROOT/usr/bin/&lt;/code&gt; directory in the &lt;code&gt;%install&lt;/code&gt; section.&lt;/p&gt;\r\n\r\n&lt;p&gt;Now, I have an &lt;a href=&quot;https://github.com/kushaldas/rpm-macros-virtualenv/blob/master/examples/ansible.spec&quot;&gt;example&lt;/a&gt; in the git repository, where I have taken the Ansible 2.7.1 spec file from Fedora, and converted it to these macros. I have build the package for Fedora 25 to verify that this works.&lt;/p&gt;\r\n', 'Kushal Das', '5bf43fdc39ae86.72952460.jpeg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
