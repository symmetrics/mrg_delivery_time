* DOCUMENTATION

** INSTALLATION 
Extract content of this archive in your Magento directory. 
It might be necessary to clear/refresh the Magento cache. Attention! The 'delivery_time' 
attribute must be added to the/a attribute set!

** USAGE
Symmetrics_DeliveryTime allows to enter delivery time as a product attribute.
The module creates a new attribute "delivery time" for products with default " 2-3 days "
(only for newly created products). A new column "delivery time" has a filter function in 
a product grid.

** FUNCTIONALITY
*** A: Creates a "delivery time" attribute for products with
        default value "2-3 days". This default value is specified only for newly created products. For 
        the existing products this field remains empty, if nothing is entered.     
*** B: Creates a new column "delivery time" with a filter function in the product grid. 

** TECHNICAL 
Upon the module installation the module creates a new "delivery_time" product attribute by means 
of a migration file. This attribute is represented in the product list in backend as a new column 
due to the inheritance of the product grid class.

If the attribute is not filled upon the product creation, 
default value "2-3 days" is used.

** PROBLEMS
No problems known.

* TESTCASES
** BASIC
*** A: Create a new product. Enter a value for 
         the attribute "delivery time", set the attribute 
         to visible and check it in frontend.

*** B: Go to backend under "Catalogue / Product management". 
         Check the filter function for the "delivery time" attribute.
