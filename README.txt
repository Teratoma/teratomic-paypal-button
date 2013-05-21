Allow me to present my first Wordpress plugin. This is a plugin that adds functionality to the Simple Paypal Shopping Cart plugin, and won't do much without it. What it does is add two widgets (and two shortcodes *which don't cooperate like I intend them to - we're working on it*). The first widget creates a 'buy now' PayPal button that pulls the post/page title into the ITEM NAME field of the button's data, and gets the price from a custom field called "item_price", that the user must specify in the post. The second widget is similar, only it gets the ITEM NAME input from a custom field called "item_price" that the user specifies.

The shortcodes: [Teratomic-Paypal-Button-Custom] and [Teratomic-Paypal-Button-Title] attempt to allow you to place the buttons in posts/pages, but they tend to break the formatting in the post. They might work for you, depending on what you do with them.

This isn't an official release, but I wanted to share it in a small capacity first. The official release will have shortcodes that play nice.

Instructions:

You must have the Simple Paypal Shopping Cart plugin installed and activated.

Create a post. Add a custom field called "item_price" (without the quotes) and give it a value in dollars.

To use the Teratomic-Paypal-Button-Custom, add a custom field called "item_name" and call your item whatever you want.

Then simply add the widget to the sidebar.

To use the shortcodes, type [Teratomic-Paypal-Button-Custom] or [Teratomic-Paypal-Button-Title] at the end of your post. You'll probably be disappointed with the results though. Just letting you know.

Thanks for the interest in the Teratomic-Paypal-Button !

