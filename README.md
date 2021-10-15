# Sitemap_index.xml
The simplest way to create a dynamic sitemap for your self-coded website which you have made by using PHP/HTML/CSS/Js etc... Scripts.<br><br>
As we already know, for creating XML Sitemap for a static website, there are a lot of online tools avaialbe out there. But here we have created a dynamic XML sitemap generator by using a simple PHP Script for Google and other search engines.

## 💡 Why do we need this script instead of the tools that are already available?
Before I answer this, Let's understand what is `Sitemap` in simple very terms. XML Sitemap is a series of webpage URLs that can be accessible by search engine crawlers and users. Based on Sitemap, search engines will index website pages and display them accordingly. So if you want to index your website web page on a Search engine then you have to create a sitemap for your website and submit it to the search console. 

Once you upload the `sitemap_index.php` in the `root` or `public_html` directory. Each time a search engine crawler makes a request to get the updated sitemap of your webiste the script will generate the site map and return the updated sitemap. So even if you make any change on your website by creating a new page or directory the search engine will get the info of that via that XML sitemap. 

If you use any other site map generator tool then you have to do it manually by creating and uploading the updated `sitemap_index.xml` file everyday for the serach console. But  this script will automaet the work as it generates the Sitemap when a search engine crawlers make reuqet to get the sitemap. Isn't this amazing 😅

If you want to know more about the sitemap and sitemap format visit [sitemap.org](http://www.sitemaps.org/protocol.html)
<br><br>
## 🛠 How to use this?
Usage is pretty strait forward, simply upload the [sitemap_index.php](https://github.com/cttricks/sitemap_index.xml/blob/main/sitemap_index.php) in the `root` or `public_html` directory. Now open this file and make these changes

```PHP
$root = "https://yourdomain.com";
```
 - `skip_dir` is the array containing all those directories that we don't want to list in our sitemap.
 - `skip_files` is the array containing all those files that we don't want to list in our sitemap.
 - and `skip_file_extensions` is the array containing all the file extensions of the files that we don't want to list in our sitemap.

```PHP
$skip_dir = array(
	".well-known", "cgi-bin"
);

$skip_files = array(
	"sitemap_index.php", "test_codes.php"
);

$skip_file_extensions = array(
	"html", "xml", "zip", "txt"
);

```

 - Now open the `.htaccess` file (create one if you don't have in root directory) and insert these codes and save it.

```htaccess
RewriteEngine On
RewriteRule ^sitemap_index\.xml/?$ sitemap_index.php
```
<br>

🥳 Congratulations you have successfully created your own dynamic sitemap generator. To test this, Simply go to `https://yourdomain.com/sitemap_index.xml` you can now submit this url to search engnes to provide updated sitemap of your webitse each time to the search engine crawlers.


You can get such other tools here on my GitHub or visit my website [Cttricks](https://cttricks.com) for more.



