# php-yfin
yfin is a quick and dirty PHP script designed to retrieve market data using Yahoo&reg; Finance APIs.  It was created so that I could include current price information in a LibreOffice Calc spreadsheet used to track investments.

The LibreOffice Calc spreadsheet uses the WEBSERVICE function to access the php-yfin script which returns just the current price.

![Screenshot showing how to use the WEBSERVICE function with php-yfin to display price information.](https://www.plind.us/image/projects/php-yfin/yfin_libreoffice.png "Using WEBSERVICE in LibreOffice Calc to display price information.")

## Legal Notice
This script is not affiliated or endorsed by Yahoo.  Please review Yahoo's terms of use before using either this script and/or Yahoo Finance APIs: https://policies.yahoo.com/us/en/yahoo/terms/product-atos/apiforydn/index.htm.

## See Also
I used the yfinance project as a starting point and reference for learning how to interact with the Yahoo Finance API.  If you need to do this in Python, check it out: https://raw.githubusercontent.com/ranaroussi/yfinance/.