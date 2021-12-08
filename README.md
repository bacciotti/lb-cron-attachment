# LB Cron Attachment Plugin
Uses a shortcode to get the latest URL from an attachment


## Description 

LB Cron Attachment Plugin is a very simple plugin that gets the latest published post content and shows dynamically in your page, post or any element. 

Usually used to schedule the publication of files on the supermarket website, with the week's deals, for example.

## Contributors
[baciotti](https://github.com/bacciotti)

## Donate 
[Link](https://www.paypal.com/donate?business=ZTZUNBT2CJ7EU&no_recurring=0&currency_code=BRL)

## Tags
cron, schedule, post content, attachment

## Requirements / Tested on
![Wordpress 5.8.1](https://img.shields.io/badge/Wordpress-5.8.1-green)  
![PHP 7.4](https://img.shields.io/badge/PHP-7.4-blue)  

## Installation

- Download this repository
- Upload it to wp-content/plugins
- Activate it

## Usage
- Create `week-sale` category 
- Create a plugin and set its category as `week-sale`
- Insert the content. For example: insert a URL on the post content

## License
[GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)

## Frequently Asked Questions

### What is the shortcode?
Put the shortcode `[lb-cron-att]` in your page, post or any element.

### Can I change the category name? 

Yes, but you should change also the line 7 of the file `src/LBCA/Shortcode.php` with the new name.

## Changelog
### 1.0
- The deploy on Wordpress directory.

### Upgrade Notice
- 1.0 = This is the first version.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Support and Contact
Feel free to contact me on [Twitter](twitter.com/baciotti).

## Badges
![GitHub followers](https://img.shields.io/github/followers/bacciotti?style=social)  
![Twitter Follow](https://img.shields.io/twitter/follow/baciotti?style=social)

