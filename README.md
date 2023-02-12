# One Index file [in the] cloud

## What is One Index?

One Index is a simple, fast, and dirty way to get a singular webpage going. Similar to a tilde.club or a 0x0.st, but with a focus on simplicity and ease of use.

## How do I use it?

Navigate to [https://oneindexfile.cloud](https://oneindexfile.cloud) and name your site. You will be given a link to your site, which you can share with others. Then, go to your site, append /edit to the end of the URL, and you will be able to login and edit the contents of your site.

## How do I host it?

```sh  
git clone https://github.com/lucasburlingham/oneindexfile.cloud.git -o {webdirectory} 
cd {webdirectory}
nano config.php 
// Edit to your liking and save using ctrl+x
// OR 
php install.php
// Follow the prompts to create config.php and set up your site using Apache
```
